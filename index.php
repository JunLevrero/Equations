
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecuaciones</title>
    <style type="text/css">
        table,tr,td,th{
            border: 1px solid;
            text-align: center;
        }
        input{
            text-align: center;
            width: 40%;
        }

    </style>


</head>
<body>
    <center>
    <form action=".\functions\equation.php" method="POST">
        <h2>Calcular presión maxima soportada por la válvula</h2>
        <table>
            <tr>
                <th><label>-------Ingrese valor de temperatura--------</label></th>              
            </tr>
            <tr>
                <td><input type="number" name="va_rated_temp_process">°F</label></td>
            </tr>
            <tr>
            <td>
                    <div class="table-value">
                            <select class="form-control" style="width: 120px;" name="va_class" type="text">
                                <option>CL150</option>
                                <option>CL300</option>
                                <option>CL600</option>
                            </select>

                            <select class="form-control" style="width: 120px;" name="va_body_material" type="text">
                                <option>WCB / 316 SS</option>
                                <option>316 SS / 316 SS</option>
                            </select>

                            <select class="form-control" style="width: 120px;" name="va_seat_material" type="text">
                                <option>TFM (TFM 1600)</option>
                                <option>TFM (TFM 1700)</option>
                                <option>PTFE</option>
                            </select>
                    </div>
            </td>
            <tr>
                <td colspan="1"><input type="submit" name="enviar" value="calcular"></td>
            </tr>
        </table>
    </form>
    </center>
    
</body>
</html>


