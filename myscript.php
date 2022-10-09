<?php

require_once "PHPsychrometric.php";

isset($_GET['F']) ? $F = $_GET['F'] : $F = "all";
isset($_GET['T']) ? $T = $_GET['T'] : $T = "20";
isset($_GET['UR']) ? $UR = $_GET['UR'] : $UR = "65";
isset($_GET['Z']) ? $Z = $_GET['Z'] : $Z = "0";

$PHPsychrometric = new PHPsychrometric($T, $UR, $Z);

switch($F){
	case "Tbu":
		$print = "Wet bulb temperature: ".$PHPsychrometric->Tbu($T, $UR);
	break;
	case "Tr":
		$print = "Dew point temperature: ".$PHPsychrometric->Tr($T, $PHPsychrometric->Pp($UR, $PHPsychrometric->Pws($T)));
	break;
	case "V":
		$print = "Specific volume: ".$PHPsychrometric->V($T, $PHPsychrometric->X($UR, $PHPsychrometric->Pws($T), $Z), $Z);
	break;
	case "H":
		$print = "Specific enthalpy: ".$PHPsychrometric->H($T, $PHPsychrometric->X($UR, $PHPsychrometric->Pws($T), $Z));
	break;
	case "X":
		$print = "Absolute humidity: ".$PHPsychrometric->X($UR, $PHPsychrometric->Pws($T), $Z);		
	break;
	case "all":
	default:
		$print = "Wet bulb temperature: ".$PHPsychrometric->Tbu($T, $UR);
		$print .= "</br>";
		$print .= "Dew point temperature: ".$PHPsychrometric->Tr($T, $PHPsychrometric->Pp($UR, $PHPsychrometric->Pws($T)));
		$print .= "</br>";
		$print .= "Specific volume: ".$PHPsychrometric->V($T, $PHPsychrometric->X($UR, $PHPsychrometric->Pws($T), $Z), $Z);
		$print .= "</br>";
		$print .= "Specific enthalpy: ".$PHPsychrometric->H($T, $PHPsychrometric->X($UR, $PHPsychrometric->Pws($T), $Z));
		$print .= "</br>";
		$print .= "Absolute humidity: ".$PHPsychrometric->X($UR, $PHPsychrometric->Pws($T), $Z);	
	break;
}

print "<pre>";
print $print;
print "</pre>";

?>
