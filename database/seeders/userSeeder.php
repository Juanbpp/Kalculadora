<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create(['id' => '1','name' => 'DAVID','email' => 'juan@juan.com','password' => Hash::make("12345678")]);
        User::create(['id' => '2','name' => 'ALICIA','email' => 'ALICIA2@ALICIA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '3','name' => 'MARTA','email' => 'MARTA3@MARTA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '4','name' => 'JESUS','email' => 'JESUS4@JESUS.com','password' => Hash::make("12345678")]);
        User::create(['id' => '5','name' => 'VICTOR','email' => 'VICTOR5@VICTOR.com','password' => Hash::make("12345678")]);
        User::create(['id' => '6','name' => 'IRENE','email' => 'IRENE6@IRENE.com','password' => Hash::make("12345678")]);
        User::create(['id' => '7','name' => 'ENRIQUE','email' => 'ENRIQUE7@ENRIQUE.com','password' => Hash::make("12345678")]);
        User::create(['id' => '8','name' => 'ANDRES','email' => 'ANDRES8@ANDRES.com','password' => Hash::make("12345678")]);
        User::create(['id' => '9','name' => 'NURIA','email' => 'NURIA9@NURIA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '10','name' => 'ANDRES','email' => 'ANDRES10@ANDRES.com','password' => Hash::make("12345678")]);
        User::create(['id' => '11','name' => 'SILVIA','email' => 'SILVIA11@SILVIA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '12','name' => 'FERNANDO','email' => 'FERNANDO12@FERNANDO.com','password' => Hash::make("12345678")]);
        User::create(['id' => '13','name' => 'RICARDO','email' => 'RICARDO13@RICARDO.com','password' => Hash::make("12345678")]);
        User::create(['id' => '14','name' => 'JESUS','email' => 'JESUS14@JESUS.com','password' => Hash::make("12345678")]);
        User::create(['id' => '15','name' => 'JESUS','email' => 'JESUS15@JESUS.com','password' => Hash::make("12345678")]);
        User::create(['id' => '16','name' => 'PATRICIA','email' => 'PATRICIA16@PATRICIA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '17','name' => 'ALFONSO','email' => 'ALFONSO17@ALFONSO.com','password' => Hash::make("12345678")]);
        User::create(['id' => '18','name' => 'DOLORES','email' => 'DOLORES18@DOLORES.com','password' => Hash::make("12345678")]);
        User::create(['id' => '19','name' => 'SILVIA','email' => 'SILVIA19@SILVIA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '20','name' => 'ENRIQUE','email' => 'ENRIQUE20@ENRIQUE.com','password' => Hash::make("12345678")]);
        User::create(['id' => '21','name' => 'ALFONSO','email' => 'ALFONSO21@ALFONSO.com','password' => Hash::make("12345678")]);
        User::create(['id' => '22','name' => 'SALVADOR','email' => 'SALVADOR22@SALVADOR.com','password' => Hash::make("12345678")]);
        User::create(['id' => '23','name' => 'JOSEFA','email' => 'JOSEFA23@JOSEFA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '24','name' => 'ROSARIO','email' => 'ROSARIO24@ROSARIO.com','password' => Hash::make("12345678")]);
        User::create(['id' => '25','name' => 'SARA','email' => 'SARA25@SARA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '26','name' => 'MANUELA','email' => 'MANUELA26@MANUELA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '27','name' => 'ALVARO','email' => 'ALVARO27@ALVARO.com','password' => Hash::make("12345678")]);
        User::create(['id' => '28','name' => 'BEATRIZ','email' => 'BEATRIZ28@BEATRIZ.com','password' => Hash::make("12345678")]);
        User::create(['id' => '29','name' => 'MARTA','email' => 'MARTA29@MARTA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '30','name' => 'RAFAEL','email' => 'RAFAEL30@RAFAEL.com','password' => Hash::make("12345678")]);
        User::create(['id' => '31','name' => 'MARIA','email' => 'MARIA31@MARIA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '32','name' => 'ALICIA','email' => 'ALICIA32@ALICIA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '33','name' => 'BEATRIZ','email' => 'BEATRIZ33@BEATRIZ.com','password' => Hash::make("12345678")]);
        User::create(['id' => '34','name' => 'PILAR','email' => 'PILAR34@PILAR.com','password' => Hash::make("12345678")]);
        User::create(['id' => '35','name' => 'MARTIN','email' => 'MARTIN35@MARTIN.com','password' => Hash::make("12345678")]);
        User::create(['id' => '36','name' => 'PATRICIA','email' => 'PATRICIA36@PATRICIA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '37','name' => 'MIGUEL','email' => 'MIGUEL37@MIGUEL.com','password' => Hash::make("12345678")]);
        User::create(['id' => '38','name' => 'IRENE','email' => 'IRENE38@IRENE.com','password' => Hash::make("12345678")]);
        User::create(['id' => '39','name' => 'RAFAEL','email' => 'RAFAEL39@RAFAEL.com','password' => Hash::make("12345678")]);
        User::create(['id' => '40','name' => 'FERNANDO','email' => 'FERNANDO40@FERNANDO.com','password' => Hash::make("12345678")]);
        User::create(['id' => '41','name' => 'ROBERTO','email' => 'ROBERTO41@ROBERTO.com','password' => Hash::make("12345678")]);
        User::create(['id' => '42','name' => 'ANTONIA','email' => 'ANTONIA42@ANTONIA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '43','name' => 'ALEJANDRO','email' => 'ALEJANDRO43@ALEJANDRO.com','password' => Hash::make("12345678")]);
        User::create(['id' => '44','name' => 'ANGELA','email' => 'ANGELA44@ANGELA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '45','name' => 'MANUELA','email' => 'MANUELA45@MANUELA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '46','name' => 'VICENTE','email' => 'VICENTE46@VICENTE.com','password' => Hash::make("12345678")]);
        User::create(['id' => '47','name' => 'MARCOS','email' => 'MARCOS47@MARCOS.com','password' => Hash::make("12345678")]);
        User::create(['id' => '48','name' => 'ALEJANDRO','email' => 'ALEJANDRO48@ALEJANDRO.com','password' => Hash::make("12345678")]);
        User::create(['id' => '49','name' => 'BEATRIZ','email' => 'BEATRIZ49@BEATRIZ.com','password' => Hash::make("12345678")]);
        User::create(['id' => '50','name' => 'PILAR','email' => 'PILAR50@PILAR.com','password' => Hash::make("12345678")]);
        User::create(['id' => '51','name' => 'VICTORIA','email' => 'VICTORIA51@VICTORIA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '52','name' => 'ISABEL','email' => 'ISABEL52@ISABEL.com','password' => Hash::make("12345678")]);
        User::create(['id' => '53','name' => 'LUISA','email' => 'LUISA53@LUISA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '54','name' => 'JOSE','email' => 'JOSE54@JOSE.com','password' => Hash::make("12345678")]);
        User::create(['id' => '55','name' => 'INMACULADA','email' => 'INMACULADA55@INMACULADA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '56','name' => 'JOAQUIN','email' => 'JOAQUIN56@JOAQUIN.com','password' => Hash::make("12345678")]);
        User::create(['id' => '57','name' => 'MAR','email' => 'MAR57@MAR.com','password' => Hash::make("12345678")]);
        User::create(['id' => '58','name' => 'ALBA','email' => 'ALBA58@ALBA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '59','name' => 'JESUS','email' => 'JESUS59@JESUS.com','password' => Hash::make("12345678")]);
        User::create(['id' => '60','name' => 'SANTIAGO','email' => 'SANTIAGO60@SANTIAGO.com','password' => Hash::make("12345678")]);
        User::create(['id' => '61','name' => 'CARLOS','email' => 'CARLOS61@CARLOS.com','password' => Hash::make("12345678")]);
        User::create(['id' => '62','name' => 'JAVIER','email' => 'JAVIER62@JAVIER.com','password' => Hash::make("12345678")]);
        User::create(['id' => '63','name' => 'INMACULADA','email' => 'INMACULADA63@INMACULADA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '64','name' => 'JAIME','email' => 'JAIME64@JAIME.com','password' => Hash::make("12345678")]);
        User::create(['id' => '65','name' => 'CARMEN','email' => 'CARMEN65@CARMEN.com','password' => Hash::make("12345678")]);
        User::create(['id' => '66','name' => 'FERNANDO','email' => 'FERNANDO66@FERNANDO.com','password' => Hash::make("12345678")]);
        User::create(['id' => '67','name' => 'PABLO','email' => 'PABLO67@PABLO.com','password' => Hash::make("12345678")]);
        User::create(['id' => '68','name' => 'YOLANDA','email' => 'YOLANDA68@YOLANDA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '69','name' => 'LAURA','email' => 'LAURA69@LAURA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '70','name' => 'MARIO','email' => 'MARIO70@MARIO.com','password' => Hash::make("12345678")]);
        User::create(['id' => '71','name' => 'JAVIER','email' => 'JAVIER71@JAVIER.com','password' => Hash::make("12345678")]);
        User::create(['id' => '72','name' => 'ANTONIO','email' => 'ANTONIO72@ANTONIO.com','password' => Hash::make("12345678")]);
        User::create(['id' => '73','name' => 'FERNANDO','email' => 'FERNANDO73@FERNANDO.com','password' => Hash::make("12345678")]);
        User::create(['id' => '74','name' => 'LUCIA','email' => 'LUCIA74@LUCIA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '75','name' => 'ROSA','email' => 'ROSA75@ROSA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '76','name' => 'MANUEL','email' => 'MANUEL76@MANUEL.com','password' => Hash::make("12345678")]);
        User::create(['id' => '77','name' => 'SALVADOR','email' => 'SALVADOR77@SALVADOR.com','password' => Hash::make("12345678")]);
        User::create(['id' => '78','name' => 'PATRICIA','email' => 'PATRICIA78@PATRICIA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '79','name' => 'ELENA','email' => 'ELENA79@ELENA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '80','name' => 'LUCIA','email' => 'LUCIA80@LUCIA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '81','name' => 'ISABEL','email' => 'ISABEL81@ISABEL.com','password' => Hash::make("12345678")]);
        User::create(['id' => '82','name' => 'IRENE','email' => 'IRENE82@IRENE.com','password' => Hash::make("12345678")]);
        User::create(['id' => '83','name' => 'IRENE','email' => 'IRENE83@IRENE.com','password' => Hash::make("12345678")]);
        User::create(['id' => '84','name' => 'PABLO','email' => 'PABLO84@PABLO.com','password' => Hash::make("12345678")]);
        User::create(['id' => '85','name' => 'YOLANDA','email' => 'YOLANDA85@YOLANDA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '86','name' => 'SARA','email' => 'SARA86@SARA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '87','name' => 'HUGO','email' => 'HUGO87@HUGO.com','password' => Hash::make("12345678")]);
        User::create(['id' => '88','name' => 'DAVID','email' => 'DAVID88@DAVID.com','password' => Hash::make("12345678")]);
        User::create(['id' => '89','name' => 'SILVIA','email' => 'SILVIA89@SILVIA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '90','name' => 'DIEGO','email' => 'DIEGO90@DIEGO.com','password' => Hash::make("12345678")]);
        User::create(['id' => '91','name' => 'JAVIER','email' => 'JAVIER91@JAVIER.com','password' => Hash::make("12345678")]);
        User::create(['id' => '92','name' => 'EVA','email' => 'EVA92@EVA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '93','name' => 'ALICIA','email' => 'ALICIA93@ALICIA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '94','name' => 'JAIME','email' => 'JAIME94@JAIME.com','password' => Hash::make("12345678")]);
        User::create(['id' => '95','name' => 'JAVIER','email' => 'JAVIER95@JAVIER.com','password' => Hash::make("12345678")]);
        User::create(['id' => '96','name' => 'JOSE','email' => 'JOSE96@JOSE.com','password' => Hash::make("12345678")]);
        User::create(['id' => '97','name' => 'JUAN','email' => 'JUAN97@JUAN.com','password' => Hash::make("12345678")]);
        User::create(['id' => '98','name' => 'MIGUEL','email' => 'MIGUEL98@MIGUEL.com','password' => Hash::make("12345678")]);
        User::create(['id' => '99','name' => 'RAUL','email' => 'RAUL99@RAUL.com','password' => Hash::make("12345678")]);
        User::create(['id' => '100','name' => 'CRISTINA','email' => 'CRISTINA100@CRISTINA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '101','name' => 'EMILIO','email' => 'EMILIO101@EMILIO.com','password' => Hash::make("12345678")]);
        User::create(['id' => '102','name' => 'JULIA','email' => 'JULIA102@JULIA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '103','name' => 'RUBEN','email' => 'RUBEN103@RUBEN.com','password' => Hash::make("12345678")]);
        User::create(['id' => '104','name' => 'MARIO','email' => 'MARIO104@MARIO.com','password' => Hash::make("12345678")]);
        User::create(['id' => '105','name' => 'LAURA','email' => 'LAURA105@LAURA.com','password' => Hash::make("12345678")]);
        User::create(['id' => '106','name' => 'FRANCISCA','email' => 'FRANCISCA106@FRANCISCA.com','password' => Hash::make("12345678")]);
        
    }
}
