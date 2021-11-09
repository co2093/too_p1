 <!DOCTYPE html>
<html lanf="eng">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style>
		.table, .thead, .tr, .th, .td{
			width: 100%;
			border: 1px solid;
            border-collapse: collapse;
            text-align: center;
		}
	</style>
</head>
<body>

    <strong>Universidad de El Salvador</strong><br>
    <strong>Facultad de Ingeniería y Arquitectura</strong><br>
    <strong>Sistema de Gestión de reservas de Laboratorios de Aprendizaje</strong><br><br>
    <strong>Tipo de Reporte: </strong>{{$tipoReporte}}<br>
   
    <strong> </strong><br>
    <table class="table table-striped table-bordered first">
        <thead style="background-color:black;text-align:center;">

            @if($tipoReporte == "Actividad")
                <tr>
                    <th style="color:white;">Local</th>
                    <th style="color:white;">Actividad</th>
                    <th style="color:white;">Cantidad de reservas</th>
                </tr>
            @endif
        </thead>
        <tbody>
            
            @if($tipoReporte == "Actividad")
            <tr>
                @foreach($actividades as $a)
                <td>
                    @foreach ($locales as $l)
                        @if($l->id == $a->local_id)
                            {{$l->nombre}}
                        @endif
                    @endforeach
                </td>
                <td>?</td>
                <td>{{$a->cantidad}}</td>
                @endforeach
            </tr>

            @endif

        </tbody>
    </table>
</body>
</html>