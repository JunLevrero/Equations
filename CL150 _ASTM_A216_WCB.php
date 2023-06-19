<?php

    $x = $_POST['va_rated_temp_process'];
    $va_class = $_POST['va_class'];
    $va_body_material = $_POST['va_body_material'];
    $va_seat_material = $_POST['va_seat_material'];

    function CL150_WCB_section_1($x){

        $va_max_pressure_allowed_by_valve = 283.5;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve."psig"."<br>";
    }

    function CL150_WCB_section_2($x){
        $va_max_pressure_allowed_by_valve = -0.2875 * $x + 312.5;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve. "psig"."<br>";

    }

    function CL150_WCB_PTFE($x){
        $va_max_pressure_allowed_by_valve = -3.4063 * $x + 1362.5;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve."psig"."<br>";

    }

    function CL150_WCB_TFM1700($x){
        $va_max_pressure_allowed_by_valve = -4 * $x + 1800;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve."psig"."<br>";

    }

    function CL150_WCB_TFM1600($x){
        $va_max_pressure_allowed_by_valve = -7 * $x + 3500;

        echo "La presión maxima para esa temperatura es: ".$va_max_pressure_allowed_by_valve."psig"."<br>";

    }




    //Cálculo para modelos ASME CL150, material del cuerpo WCB (acero al carbón), asientos de PTFE
    if(($va_class == 'CL150') && ($va_body_material == 'WCB / 316 SS')){

        if(($x >= -20) && ($x <= 100))
        {
            CL150_WCB_section_1($x);
        }
            //condificionales para el material de los asientos
            else if(($va_seat_material == 'PTFE') && ($x > 100) && ($x <= 336))
            {
                CL150_WCB_section_2($x);
            }
            else if(($va_seat_material == 'PTFE') && ($x > 336) && ($x <= 400))
            {
                CL150_WCB_PTFE($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1700)') && ($x > 100) && ($x <= 400))
            {
                CL150_WCB_section_2($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1700)') && ($x > 400) && ($x <= 450))
            {
                CL150_WCB_TFM1700($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1600)') && ($x > 100) && ($x <= 475))
            {
                CL150_WCB_section_2($x);
            }
            else if(($va_seat_material == 'TFM (TFM 1600)') && ($x > 475) && ($x <= 500))
            {
                CL150_WCB_TFM1600($x);
            }
            else{
                echo "Temperatura fuera del rango soportado";
            }

    }

    else{

        echo "No data";

    }
?>