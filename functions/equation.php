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

        $va_max_pressure_allowed_by_valve =  -3E-05*$x**2 - 0.2681*$x + 312.01;


        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve. "psig"."<br>";

    }

    function CL150_CF8M_section_1($x){

        $va_max_pressure_allowed_by_valve = 275.5;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve."psig"."<br>";
    }
    
    function CL150_CF8M_section_2($x){
    
        $va_max_pressure_allowed_by_valve = -0.3612*$x + 311.43;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve. "psig"."<br>";

    }

    function CL150_CF8M_section_3($x){
    
        $va_max_pressure_allowed_by_valve = -4E-07*$x**3 + 0.0003*$x**2 - 0.2917*$x + 285.29;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve. "psig"."<br>";

    }

    //FUNCIONES CLASE 300 WCB Y CF8M
    
    function CL300_WCB_section_1($x){

        $va_max_pressure_allowed_by_valve = 741.1;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve."psig"."<br>";
    }

    function CL300_WCB_section_2($x){

        $va_max_pressure_allowed_by_valve =   -0.5787*$x + 798.35;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve. "psig"."<br>";
    }

    function CL300_WCB_section_3($x){

        $va_max_pressure_allowed_by_valve =   -0.0002*$x**2 - 0.101*$x + 706.33;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve. "psig"."<br>";
    }

    function CL300_CF8M_section_1($x){

        $va_max_pressure_allowed_by_valve = 719.3;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve."psig"."<br>";
    }
    
    function CL300_CF8M_section_2($x){
    
        $va_max_pressure_allowed_by_valve = -0.9585*$x + 815.15;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve. "psig"."<br>";
    }

    function CL300_CF8M_section_3($x){
    
        $va_max_pressure_allowed_by_valve = 4E-08*$x**3 + 0.0004*$x**2 - 0.7387*$x + 744.55;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve. "psig"."<br>";
    }

    //FUNCIONES CLASE 600 WCB Y CF8M

    function CL600_WCB_section_1($x){

        $va_max_pressure_allowed_by_valve = 1480;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve."psig"."<br>";
    }

    function CL600_WCB_section_2($x){

        $va_max_pressure_allowed_by_valve =   -1.1483*$x + 1594.9;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve. "psig"."<br>";
    }

    function CL600_WCB_section_3($x){

        $va_max_pressure_allowed_by_valve =   -8E-07*$x**3 + 0.0005*$x**2 - 0.5415*$x + 1451;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve. "psig"."<br>";
    }


    function CL600_CF8M_section_1($x){

        $va_max_pressure_allowed_by_valve = 1440.2;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve."psig"."<br>";
    }
    
    function CL600_CF8M_section_2($x){
    
        $va_max_pressure_allowed_by_valve = 0.0016*$x**2 - 2.4402*$x + 1669;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve. "psig"."<br>";

    }

    function CL600_CF8M_section_3($x){
    
        $va_max_pressure_allowed_by_valve = 2E-09*$x**4 - 4E-06*$x**3 + 0.0043*$x**2 - 2.697*$x + 1638.3;

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
            else if(($va_seat_material == 'PTFE') && ($x > 100) && ($x <= 337.69))
            {
                CL150_WCB_section_2($x);
            }
            else if(($va_seat_material == 'PTFE') && ($x > 337.69) && ($x <= 400))
            {
                CL150_CL300_PTFE($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1700)') && ($x > 100) && ($x <= 400))
            {
                CL150_WCB_section_2($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1700)') && ($x > 400) && ($x <= 450))
            {
                CL150_CL300_TFM1700($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1600)') && ($x > 100) && ($x <= 474.56))
            {
                CL150_WCB_section_2($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1600)') && ($x > 474.56) && ($x <= 500))
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
            else if(($x > 100) && ($x <= 224.1))
            {
                CL150_CF8M_section_2($x);
            }
            else if(($va_seat_material == 'PTFE') && ($x > 224.1) && ($x <= 341.5))
            {
                CL150_CF8M_section_3($x);
            }
            else if(($va_seat_material == 'PTFE') && ($x > 341.5) && ($x <= 400))
            {
                CL150_CL300_PTFE($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1700)') && ($x > 224.1) && ($x <= 402.39))
            {
                CL150_CF8M_section_3($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1700)') && ($x > 402.39) && ($x <= 450))
            {
                CL150_CL300_TFM1700($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1600)') && ($x > 224.1) && ($x <= 475.51))
            {
                CL150_CF8M_section_3($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1600)') && ($x > 375.51) && ($x <= 500))
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
            else if(($va_seat_material == 'PTFE') && ($x > 100) && ($x <= 205.95))
            {
                CL300_WCB_section_2($x);
            }
            else if(($va_seat_material == 'PTFE') && ($x > 205.95) && ($x <= 400))
            {
                CL150_CL300_PTFE($x);
            }
            else if(($x > 100) && ($x <= 212.67))
            {
                CL300_WCB_section_2($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1700)') && ($x > 212.67) && ($x <= 284.65))
            {
                CL300_WCB_section_3($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1700)') && ($x > 284.65) && ($x <= 450))
            {
                CL150_CL300_TFM1700($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1600)') && ($x > 212.67) && ($x <= 409.8))
            {
                CL300_WCB_section_3($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1600)') && ($x > 409.8) && ($x <= 500))
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
            else if(($x > 100) && ($x <= 212))
            {
                CL300_CF8M_section_2($x);
            }
            else if(($va_seat_material == 'PTFE') && ($x > 212) && ($x <= 229.56))
            {
                CL300_CF8M_section_3($x);
            }
            else if(($va_seat_material == 'PTFE') && ($x > 229.56) && ($x <= 400))
            {
                CL150_CL300_PTFE($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1700)') && ($x > 212) && ($x <= 311.36))
            {
                CL300_CF8M_section_3($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1700)') && ($x > 311.36) && ($x <= 450))
            {
                CL150_CL300_TFM1700($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1600)') && ($x > 100) && ($x <= 427.87))
            {
                CL300_CF8M_section_3($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1600)') && ($x > 427.87) && ($x <= 500))
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
            else if(($x > 100) && ($x <= 212))
            {
                CL600_WCB_section_2($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1600)') && ($x > 212) && ($x <= 279.81))
            {
                CL600_WCB_section_3($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1600)') && ($x >279.81) && ($x <= 500))
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
            else if(($x > 100) && ($x <= 212))
            {
                CL600_CF8M_section_2($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1600)') && ($x > 212) && ($x <= 314.98))
            {
                CL600_CF8M_section_3($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1600)') && ($x > 314.98) && ($x <= 500))
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