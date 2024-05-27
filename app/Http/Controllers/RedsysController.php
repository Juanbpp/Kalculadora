<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ssheduardo\Redsys\Facades\Redsys;
use App\Models\Registro;
use Exception;
use Sermepa\Tpv\TpvException;

class RedsysController extends Controller
{

    public function index($name,$total,$display=true,$description=false)
    {
        try{
            $key = config('redsys.key');
            $code = config('redsys.merchantcode');

            Redsys::setAmount($total);
            Redsys::setOrder(time());
            Redsys::setMerchantcode($code);
            Redsys::setCurrency('978');
            Redsys::setTransactiontype('0');
            Redsys::setTerminal('1');
            Redsys::setMethod('T');
            Redsys::setNotification(config('redsys.url_notification'));
            Redsys::setUrlOk(config('redsys.url_ok'));
            Redsys::setUrlKo(config('redsys.url_ko'));
            Redsys::setVersion('HMAC_SHA256_V1');
            Redsys::setTradeName('Tienda Juan');
            Redsys::setTitular($name);
            Redsys::setProductDescription($description);
            Redsys::setEnviroment('test');

            $signature = Redsys::generateMerchantSignature($key);
            Redsys::setMerchantSignature($signature);

            if($display==false){
                Redsys::setAttributesSubmit('btn_submit', 'btn_id', 'Enviar', 'display:none');
                return Redsys::executeRedirection();
                }else{
                return Redsys::createForm();
                }

          }catch(Exception $e){
         echo $e->getMessage();
          }
        
    }


/**
* Comprobar respuesta de Redsys
*/
        public function comprobar(Request $request)
        {
        try{
        $key = config('redsys.key');
        $parameters = Redsys::getMerchantParameters($request->input('Ds_MerchantParameters'));
        $DsResponse = $parameters["Ds_Response"];
        $DsResponse += 0;
        if (Redsys::check($key, $request->input()) && $DsResponse <=99) {
            return redirect()->back()->with('message','Pago no realizado');
        } else {
            return redirect()->back()->with('message','Pago realizado correctamente');
        }
        } catch (TpvException $e) {
        echo $e->getMessage();
        }
        }



    }

