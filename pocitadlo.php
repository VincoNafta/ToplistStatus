<?php
#ID sa nachádza v linku ktorý vým dôjde na váš e-mail
$id = '10';
#Domena závisí od používania českého alebo slovenského toplistu, preto si dobre skontrolujte či sa registrujete na toplist.cz alebo toplist.sk Možnosti sk alebo cz
$domena = 'sk';

/*
	V tejto časti pouťžívajte hodnoty true alebo false!
*/
#Zobrazenie celkového početu návštev
$ZobrazCelkovo = true;
#Zobrazenie týždenného početu návštev
$ZobrazTyzden = true;
#Zobrazenie včerajšieho početu návštev
$ZobrazVcera = true;
#Zobrazenie dnešného početu návštev
$ZobrazDnes = true;
#Zobrazenie dnešných načítaní stránky
$ZobrazNactiDnes = true;
#Zobrazenie včerajších načítaní stránky
$ZobrazNactiVcera = true;
/*
	!!!Dôležité!!!

	Do tejto časti nezasahujte! teda pokiaľ neviete čo robíte
	
*/
$data = json_decode(file_get_contents("https://profi.toplist.".$domena."/api/v1/counter/".$id));
$data2 = json_decode(file_get_contents("https://profi.toplist.".$domena."/api/v1/site/".$id));

$navcelkovo = $data->visitsTotal;
$navtyzden = $data->visitsWeek;
$navvcera = $data2->visitsYesterday;
$navdnes = $data->visitsToday;

$nacdnes = $data2->hitsToday;
$nacvcera = $data2->hitsYesterday;

if($ZobrazCelkovo == true){
	echo "Celkom návstev: ".$navcelkovo;
}
if($ZobrazTyzden == true){
	echo "<br>Navstev za týždeň: ".$navtyzden;
}
if ($ZobrazVcera == true) {
	echo "<br>Včerajšia návštevnosť: ".$navtyzden;
}
if($ZobrazDnes == true){	
	echo "<br>Dnešná návštevnosť: ".$navdnes;
}
if($ZobrazNactiDnes == true){	
	echo "<br>Načítania stránky dnes: ".$nacdnes;
}
if($ZobrazNactiVcera == true){	
	echo "<br>Načítania stránky včera: ".$nacvcera;
}

?>
