# <div align="center"> Funkcionális specifikáció </div>

## I. Áttekintés
Az általunk fejlesztett rendszer célja, hogy kollégánk rövidáru boltját korszerűsítsük azzal, hogy weboldalt és egyben webáruházat fejlesztünk hozzá, ezzel az ide betérő érdeklődők tájékozódhatnak a bolt teljes kínálatáról, rendelést adhatnak le, vagy foglalást adhatnak le nagyobb mennyiségű árumennyiségre. Rengeteg áru közül tudnak majd válogatni, véleményt írhatnak és olvashatják másokét, tájékozódhatnak. Bárki számára elérhető lesz, amellett, hogy ingyenes, számítógépen/mobilon/tableten is tudnak majd böngészni rajta. Teljes mértékben magyar nyelvű lesz.
Egy konkrét vásárlás esetén kosárba lehet összeszedni az adott termékeket, rendelés leadás előtt megtekinthető a kosár, a szállítás ára és a várható kézbesítés is. Regisztráció után további kedvezmény vehető igénybe, például az első vásárláskor, vagy születésnapkor. Vásárlás után pedig véleményt tudnak írni a termékről, vagy akár újra is tudják rendelni azt.

## II. Jelenlegi helyzet leírása

## III. Vágyálom rendszer

## IV. Követelménylista
| Modul | ID  | Név | Kifejtés |
| ----- | --- | --- | -------- |
| Funkció	| K1	| Adat-rögzítés			| A felhasználó (admin) képes legyen új adatok rögzítésére							|
| Funkció	| K2	| Adat-módosítás		| A felhasználó (admin) képes legyen az adatok módosítására (törlésére is)					|
| Funkció	| K3	| Adat-keresés			| A felhasználó (admin/user) képes legyen az adatok között keresni	 					|
| Funkció 	| K4	| Adat-szűrés			| A felhasználó (admin/user) képes legyen az adatok szűrésére							|
| Funkció 	| K5	| Rendelés			| A felhasználó (user) képes legyen rendelni (egyszerű formában)						|
| Funkció 	| K6	| Ötlet oldal			| A felhasználó (user) képes legyen bejegyzéseket írni, meghatározott helyre és tartalommal			|
| Megjelenés	| K7	| Átlátható felület		| Elvárás: letisztult kinézet valamint logikus és könnyen olvasható megjelenítés				|
| Megjelenés	| K8	| Dinamikus megjelenítés	| Reszponzív felület												|


## V Fogalomszótár
- *SZOFTVER (SOFTWARE)*
Szoftvernek nevezzük a számítógépre írt programokat. A szoftvereket programozók készítik. Szellemi termékek, kézzel nem megfoghatóak A szoftver a számítógépen futó programok összefoglaló neve, valamint a hardver egységeket működtető-, és vezérlő programok összessége.
- *PROGRAM*
A program olyan egyszerű utasítások, műveletek logikus sorozata, amelyekkel a számítógépet irányítjuk. A program az utasításokat is és az adatokat is kettes számrendszerben leírt számokkal ábrázolja.
- *HTML (angolul: HyperText Markup Language=hiperszöveges jelölőnyelv)*
Egy leíró nyelv, melyet weboldalak készítéséhez fejlesztettek ki, és mára már internetes szabvánnyá vált a W3C (World Wide Web Consortium) támogatásával. Az aktuális változata az 5, mely az SGML általános jelölőnyelv egy konkrét alkalmazása (azaz minden 5-ös HTML dokumentum egyben az SGML dokumentumszabványnak is meg kell hogy feleljen). 
- *PHP*
A PHP egy általános szerveroldali szkriptnyelv dinamikus weblapok készítésére. Az első szkriptnyelvek egyike, amely külső fájl használata helyett HTML oldalba ágyazható. A kódot a webszerver PHP feldolgozómodulja értelmezi, ezzel dinamikus weboldalakat hozva létre. Rasmus Lerdorf 1995-ben indította útjára. Ma a The PHP Group tartja fenn és fejleszti. A PHP szabad szoftver, de licence nem csereszabatos a GNU licenccel, mivel megkötéseket tartalmaz a PHP név használatára.
A PHP születésekor csupán egy makrókészlet volt személyes honlapok karbantartására. Innen jön az eredeti név is: Personal Home Page Tools.[5] A rövidítés jelentése később PHP: Hypertext Preprocessor lett, így rekurzívvá vált. Később a PHP képességei bővültek, így egy önállóan használható programozási nyelv alakult ki, amely képes nagyméretű webes adatbázisalapú alkalmazások működtetésére is.
A PHP nyelv népszerűsége képességeinek bővülésével folyamatosan nőtt. A NetCraft elemző cég felmérései szerint a PHP-t 1999 novemberében több mint 1 millió kiszolgálón használták. Ez a szám 2001 szeptemberére 6 millióra ugrott, 2003 októberében pedig már állítólag 14 millió gépre telepítették a PHP-t. A SecuritySpace.com szerint a PHP az Apache legnépszerűbb modulja, a mod_ssl-t, a perl modult és a FrontPage-et is maga mögé utasítva. 2007 áprilisában több, mint 20 millió honlap és 1 millió szerver használta.
A hagyományos HTML lapokkal ellentétben a kiszolgáló a PHP-kódot nem küldi el az ügyfélnek, hanem a kiszolgáló oldalán a PHP-értelmező motor dolgozza fel azt. A programokban lévő HTML elemek érintetlenül maradnak, de a PHP kódok lefutnak. A kódok végezhetnek adatbázis-lekérdezéseket, létrehozhatnak képeket, fájlokat olvashatnak és írhatnak, kapcsolatot létesíthetnek távoli kiszolgálókkal. A PHP-kódok kimenete a megadott HTML elemekkel együtt kerül az ügyfélhez.
A PHP-t parancssori alkalmazásként is telepítik, így alkalmas parancsfájlok készítésére. Számos rendszergazda automatizálási célokra is a PHP-t használja, pedig ezt a feladatot hagyományosan Perl- vagy shell scriptekkel oldották meg.
- *CSS (Cascading Style Sheets, magyarul: lépcsőzetes stíluslapok)*
A számítástechnikában egy stílusleíró nyelv, mely a HTML vagy XHTML típusú strukturált dokumentumok megjelenését írja le. Ezenkívül használható bármilyen XML alapú dokumentum stílusának leírására is, mint például az SVG, XUL stb.
- *Adminisztrátor (admin)*
Az a személy aki egy számítógépes vagy számítógép-hálózati szolgáltatás irányítója. Az adminisztrátorhoz gyakran egy fiók tartozik, amit felhasználói név és jelszó azonosít.
- *Felhasználó (user)*
Az a személy (végfelhasználó, end-user) vagy szoftverágens, aki egy számítógépes vagy számítógép-hálózati szolgáltatás használója. A felhasználóhoz gyakran felhasználói fiók tartozik, amit felhasználói név (username, screen name, nick vagy handle) azonosít.

## VI. Használati esetek


## VII. Használati esetek - követelmény megfeleltetés


## VII. "Képernyő" tervek


## IX. Funkció - követelmény megfeleltetés

