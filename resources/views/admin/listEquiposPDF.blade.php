<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exportar a PDF</title>
    <link rel="stylesheet" href="css/estilospdf.css">
</head>
<body>
    <header>
        <div class="header_logo">
            <img src="images/images.jpg" alt="logo" id="logo">
        </div>
        <h3>INSTITUTO TECNOLOGICO DE CHALATENAGO</h3>
    </header>
    <div class="container">
        <h4 id="titulo_reporte">Inventario de Equipos</h4>
        <table id="inv">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Equipo</th>
                    <th>Descripción</th>
                    <th>Marca</th>
                    <th>Estado</th>
                </tr>
                <?php $i = 0; ?>
            </thead>
            <tbody>
                @foreach ($equipos as $eq)
                <tr>
                    <td>{{$eq->codigo}}</td>
                    <td>{{$eq->nombre}}</td>
                    <td>{{$eq->descrpcion}}</td>
                    <td>{{$eq->marca}}</td>
                    <td class="text_center">{{$eq->estado}}</td>
                </tr>
                <?php $i++; ?>
                @endforeach
                <tr>
                    <td colspan="5" class="text_center">Total Equipos Disponibles: &nbsp;&nbsp;<b><strong>{{$i}}</strong></b></td>
                </tr>
            </tbody>
        </table>

        <h1>Pagina 1</h1>
        <div class="page-break"></div>
        <h1>pagina 2</h1>
        <div class="page-breack"></div>
        <h1>pagina 3</h1>


    </div>
    <script type="text/php">
        if { isset($pdf) } {
            $pdf->page_script('
                $font = $fontMetrics->get_font("Arial, helvetica, sans-serif, "normal");
                $pdf->text(270, 800, "pág $PAGE_NUM de $ÀGE_COUNT", $FONT, 10);
            ');
        }
    </script>
</body>
</html>