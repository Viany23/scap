<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>LISTADO DE USUARIOS</title>
<meta content="width=device-width, initial-scale=1, maximum- scale=1, user-scalable=no" name="viewport">
</head>
<body>
	<h1> {{ $title1 }} </h1>  
	
	<ul>	
		@foreach ($mujeres as $mujer)
			<li>{{ $mujer }}</li> 
		@endforeach
	</ul>
	<h2>Son {{sizeof($mujeres)}} alumnas</h2>
	
	<hr>
	
	<h1> {{ $title2 }} </h1> 
	<ul>
		@foreach ($hombres as $hombre)
			<li>{{ $hombre }}</li> 
		@endforeach
	</ul>
	<h2>Son {{sizeof($hombres)}} alumnos</h2>
	<h2>Total de estudiantes: {{sizeof($hombres) +  sizeof($mujeres)}}</h2>
	
	@if(sizeof($hombres) ==  sizeof($mujeres))
		<h2>La cantidad de mujeres es igual que la cantidad de hombres</h2>
	
	@elseif(sizeof($hombres) >  sizeof($mujeres))
		<h2>Hay más hombres que mujeres</h2>
		
	@else		
		<h2>Hay más mujeres que hombres</h2>
	
	@endif
	
</body>

</html>




 
