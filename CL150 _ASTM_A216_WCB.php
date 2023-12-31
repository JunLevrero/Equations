<?php

    $x = $_POST['va_rated_temp_process'];
    $va_class = $_POST['va_class'];
    $va_body_material = $_POST['va_body_material'];
    $va_seat_material = $_POST['va_seat_material'];

//FUNCIONES CLASE 150 WCB Y CF8M

    function CL150_WCB_section_1($x){

        $va_max_pressure_allowed_by_valve = 283.5;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve."psig"."<br>";
    }

    function CL150_WCB_section_2($x){

        $va_max_pressure_allowed_by_valve =   (10**-7 * $x**3) - (0.0002*$x**2) - (0.2264*$x) + (309.15);


        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve. "psig"."<br>";

    }

    function CL150_CF8M_section_1($x){

        $va_max_pressure_allowed_by_valve = 275;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve."psig"."<br>";
    }
    
    function CL150_CF8M_section_2($x){
    
        $va_max_pressure_allowed_by_valve = -5e-07*$x**3 + 0.0006*$x**2 - 0.4427*$x + 311.63;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve. "psig"."<br>";

    }

    //FUNCIONES CLASE 300 WCB Y CF8M
    
    function CL300_WCB_section_1($x){

        $va_max_pressure_allowed_by_valve = 741;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve."psig"."<br>";
    }

    function CL300_WCB_section_2($x){

        $va_max_pressure_allowed_by_valve =   (5*10**-9 * $x**4) - (9*10**-6 * $x**3) + (0.006*$x**2) - (1.8429*$x) - (877.7);

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve. "psig"."<br>";

    }

    function CL300_CF8M_section_1($x){

        $va_max_pressure_allowed_by_valve = 720;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve."psig"."<br>";
    }
    
    function CL300_CF8M_section_2($x){
    
        $va_max_pressure_allowed_by_valve = (-9*10**-7*$x**3) + (0.0018*$x**2) - (1.3907*$x) + (840.35);


        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve. "psig"."<br>";

    }


    //FUNCIONES CLASE 600 WCB Y CF8M

    function CL600_WCB_section_1($x){

        $va_max_pressure_allowed_by_valve = 1480;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve."psig"."<br>";

    }

    function CL600_WCB_section_2($x){

        $va_max_pressure_allowed_by_valve =   (1*10**-8 * $x**4) - (2*10**-5 * $x**3) + (0.0141*$x**2) - (4.1364*$x) + (1785.3);

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve. "psig"."<br>";

    }

    function CL600_CF8M_section_1($x){

        $va_max_pressure_allowed_by_valve = 1440;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve."psig"."<br>";
    }
    
    function CL600_CF8M_section_2($x){
    
        $va_max_pressure_allowed_by_valve = (6*10**-9*$x**4)  - (1*10**-5*$x**3) + (0.0092*$x**2) - (4.0713*$x) + (1773.9);

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve. "psig"."<br>";

    }






//FUNCIONES ASIENTOS CLASE 150 Y CLASE 300 

    function CL150_CL300_PTFE($x){
        $va_max_pressure_allowed_by_valve = -3.5 * $x + 1400;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve."psig"."<br>";

    }

    function CL150_CL300_TFM1700($x){
        $va_max_pressure_allowed_by_valve = -4 * $x + 1800;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve."psig"."<br>";

    }

    function CL150_CL300_TFM1600($x){
        $va_max_pressure_allowed_by_valve = -7 * $x + 3500;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve."psig"."<br>";

    }

//FUNCIONES ASIENTOS CLASE 600

    function CL600_TFM1600($x){
        $va_max_pressure_allowed_by_valve = -6 * $x + 3000;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve."psig"."<br>";

    }





    //Cálculo para modelos ASME CL150, material del cuerpo WCB (acero al carbón)
    if(($va_class == 'CL150') && ($va_body_material == 'WCB / 316 SS')){

        if(($x >= -20) && ($x <= 100))
        {
            CL150_WCB_section_1($x);
        }
            //condificionales para el material de los asientos
            else if(($va_seat_material == 'PTFE') && ($x > 100) && ($x <= 339))
            {
                CL150_WCB_section_2($x);
            }
            else if(($va_seat_material == 'PTFE') && ($x > 339) && ($x <= 400))
            {
                CL150_CL300_PTFE($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1700)') && ($x > 100) && ($x <= 401.9))
            {
                CL150_WCB_section_2($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1700)') && ($x > 401.9) && ($x <= 450))
            {
                CL150_CL300_TFM1700($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1600)') && ($x > 100) && ($x <= 476))
            {
                CL150_WCB_section_2($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1600)') && ($x > 476) && ($x <= 500))
            {
                CL150_CL300_TFM1600($x);
            }
            else{
                echo "Temperatura fuera del rango soportado";
            }
    }
    

//Cálculo para modelos ASME CL150, material del cuerpo CF8M (acero inoxidable)
    else if(($va_class == 'CL150') && ($va_body_material == '316 SS / 316 SS')){

        if(($x >= -50) && ($x <= 100))
        {
            CL150_CF8M_section_1($x);
        }
            //condificionales para el material de los asientos
            else if(($va_seat_material == 'PTFE') && ($x > 100) && ($x <= 334.6))
            {
                CL150_CF8M_section_2($x);
            }
            else if(($va_seat_material == 'PTFE') && ($x > 334.6) && ($x <= 400))
            {
                CL150_CL300_PTFE($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1700)') && ($x > 100) && ($x <= 392.9))
            {
                CL150_CF8M_section_2($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1700)') && ($x > 392.9) && ($x <= 450))
            {
                CL150_CL300_TFM1700($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1600)') && ($x > 100) && ($x <= 467))
            {
                CL150_CF8M_section_2($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1600)') && ($x > 467) && ($x <= 500))
            {
                CL150_CL300_TFM1600($x);
            }
            else{
                echo "Temperatura fuera del rango soportado";
            }

    }

    //Cálculo para modelos ASME CL300, material del cuerpo WCB (acero al carbono)
        else if(($va_class == 'CL300') && ($va_body_material == 'WCB / 316 SS')){

        if(($x >= -20) && ($x <= 100))
        {
            CL300_WCB_section_1($x);
        }
            //condificionales para el material de los asientos
            else if(($va_seat_material == 'PTFE') && ($x > 100) && ($x <= 204.7))
            {
                CL300_WCB_section_2($x);
            }
            else if(($va_seat_material == 'PTFE') && ($x > 204.7) && ($x <= 400))
            {
                CL150_CL300_PTFE($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1700)') && ($x > 100) && ($x <= 283.8))
            {
                CL300_WCB_section_2($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1700)') && ($x > 283.8) && ($x <= 450))
            {
                CL150_CL300_TFM1700($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1600)') && ($x > 100) && ($x <= 406.8))
            {
                CL300_WCB_section_2($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1600)') && ($x > 406.8) && ($x <= 500))
            {
                CL150_CL300_TFM1600($x);
            }
            else{
                echo "Temperatura fuera del rango soportado";
            }

    }

    else if(($va_class == 'CL300') && ($va_body_material == '316 SS / 316 SS')){

        if(($x >= -50) && ($x <= 100))
        {
            CL300_CF8M_section_1($x);
        }
            //condificionales para el material de los asientos
            else if(($va_seat_material == 'PTFE') && ($x > 100) && ($x <= 226.5))
            {
                CL300_CF8M_section_2($x);
            }
            else if(($va_seat_material == 'PTFE') && ($x > 226.5) && ($x <= 400))
            {
                CL150_CL300_PTFE($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1700)') && ($x > 100) && ($x <= 311.3))
            {
                CL300_CF8M_section_2($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1700)') && ($x > 311.3) && ($x <= 450))
            {
                CL150_CL300_TFM1700($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1600)') && ($x > 100) && ($x <= 428))
            {
                CL300_CF8M_section_2($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1600)') && ($x > 428) && ($x <= 500))
            {
                CL150_CL300_TFM1600($x);
            }
            else{
                echo "Temperatura fuera del rango soportado";
            }

    }

    else if(($va_class == 'CL600') && ($va_body_material == 'WCB / 316 SS')){

        if(($x >= -20) && ($x <= 100))
        {
            CL600_WCB_section_1($x);
        }
            //condificionales para el material de los asientos
            else if(($va_seat_material == 'TFM (TFM 1600)') && ($x > 100) && ($x <= 281))
            {
                CL600_WCB_section_2($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1600)') && ($x > 281) && ($x <= 500))
            {
                CL600_TFM1600($x);
            }
            else{
                echo "Temperatura fuera del rango soportado";
            }

    }
    
    else if(($va_class == 'CL600') && ($va_body_material == '316 SS / 316 SS')){

        if(($x >= -50) && ($x <= 100))
        {
            CL600_CF8M_section_1($x);
        }
            //condificionales para el material de los asientos
            else if(($va_seat_material == 'TFM (TFM 1600)') && ($x > 100) && ($x <= 307.5))
            {
                CL600_CF8M_section_2($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1600)') && ($x > 307.5) && ($x <= 500))
            {
                CL600_TFM1600($x);
            }
            else{
                echo "Temperatura fuera del rango soportado";
            }

    }

    else{

        echo "No data";

    }
?>