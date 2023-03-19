# ToplistStatus
Webová aplikácia určená k získaniu a zobrazeniu štatistík a fajnovému zobrazeniu koncovému používateľovi. Táto aplikácia používa REST API k vyčítaniu údajov zo strany
TopList.cz alebo TopList.sk

Táto webová aplikácia (ďalej status) zahŕňa tieto informácie:
  - Celková návštevonosť
  - Denná návštevnosť
  - Návštenovsť z predlošlého dňa
  - Týždenná návštevnosť
  - Načítania stránky z dnešného dňa
  - Načítanie stránky zo včerajšieho dňa
  
Jednoduchá konfigurácia pre koncového užívateľa
  - V prípade že neviete ako na to, tak stačí vyplniť len hodnoty true/false, podľa toho čo chcete zobraziť a vyplniť hodnoty vašho id a domény na ktorej máte TopList
  pre český TopList(toplist.cz) vyplnte doména .cz a pre slovenský .sk

#Návod na inštaláciu
skopirujeme si obsah pocitadlo.php a vložíme na miesto ktoré chceme.

V prípade že neviete nájsť svoje ID skopirujte otvorte stránky toplistu a vyhladajte svoju stránku. ID skopirujte. Napríklad pre túto stránku https://www.toplist.sk/stat/1054982/ by to vypadalo takto. 
$id = '1054982'
$domena = 'sk'

Pre správne počítanie návštevnosti ešte musíte skopirovať vygenerovaný skript s vaším id ten nájdete na stránke tolistu po vyhladaní vašej stránky v časti kod pre stránku a otvorí sa vám niečo takéto https://www.toplist.sk/code/1054982/ . Tu odporúčam si zaškrtnúť neviditeľný obrázok a to je všetko. Stránka vám bude zobrazovať návštevnosť podľa údajov s toplistu
