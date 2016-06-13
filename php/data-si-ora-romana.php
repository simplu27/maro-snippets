<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data si ora in limba romana</title>
</head>
<body>
<h1>Data si ora in limba romana</h1>	


<?php

$zi		=	date ("d");		// data din luna: 10
$luna	=	date ("F");		// luna: January
$an		=	date ("Y");		// anul: 2014
$ziua	=	date ("l");		// ziua din saptamana: Friday
$ora 	=	date ("H:i:s");	// ora: 20:32:37

// Schimba numele zilelor din engleza in romana

switch ($ziua) {
	case ("Monday"): 	$ziua = "Luni"; 	break;
	case ("Tuesday"): 	$ziua = "Marti"; 	break;
	case ("Wednesday"): $ziua = "Miercuri"; break;
	case ("Thursday"): 	$ziua = "Joi"; 		break;
	case ("Friday"): 	$ziua = "Vineri"; 	break;
	case ("Saturday"): 	$ziua = "Sambata"; 	break;
	case ("Sunday"): 	$ziua = "Duminica"; break;
}

// Transforma numele lunilor din engleza in romana

switch ($luna) {
	case ("January"): 	$luna = "Ianuarie"; 	break;
	case ("February"): 	$luna = "Februarie"; 	break;
	case ("March"): 	$luna = "Martie"; 		break;
	case ("April"): 	$luna = "Aprilie"; 		break;
	case ("May"): 		$luna = "May"; 			break;
	case ("June"): 		$luna = "Iunie"; 		break;
	case ("July"): 		$luna = "Iulie"; 		break;
	case ("August"): 	$luna = "August"; 		break;
	case ("September"): $luna = "Septembrie"; 	break;
	case ("October"): 	$luna = "Octombrie"; 	break;
	case ("November"): 	$luna = "Noiembrie"; 	break;
	case ("December"): 	$luna = "Decembrie"; 	break;
}

$data = "$ziua, $zi $luna $an"; 	//	Vineri 10 Ianuarie 2014

//	echo "<strong>Data</strong>: " .$data. "<br>";	// data
//	echo "<strong>Ora:</strong> " .$ora;	// ora

//	Output:
//	Vineri 10 Ianuarie 2014
//	20:32:37
 ?> 

<p>
Data: <?php echo $data;?><br>
Ora: <?php echo $ora;?>
</p>
 
</body>
</html>