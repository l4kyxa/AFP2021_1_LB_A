# <div align="center"> Funkcionális specifikáció </div>

<hr>

## I. Áttekintés
Az általunk fejlesztett rendszer célja, hogy kollégánk rövidáru boltját korszerűsítsük azzal, hogy weboldalt és egyben webáruházat fejlesztünk hozzá, ezzel az ide betérő érdeklődők tájékozódhatnak a bolt teljes kínálatáról, rendelést adhatnak le, vagy foglalást adhatnak le nagyobb mennyiségű árumennyiségre. Rengeteg áru közül tudnak majd válogatni, véleményt írhatnak és olvashatják másokét, tájékozódhatnak. Bárki számára elérhető lesz, amellett, hogy ingyenes, számítógépen/mobilon/tableten is tudnak majd böngészni rajta. Teljes mértékben magyar nyelvű lesz.
Egy konkrét vásárlás esetén kosárba lehet összeszedni az adott termékeket, rendelés leadás előtt megtekinthető a kosár, a szállítás ára és a várható kézbesítés is. Regisztráció után további kedvezmény vehető igénybe, például az első vásárláskor, vagy születésnapkor. Vásárlás után pedig véleményt tudnak írni a termékről, vagy akár újra is tudják rendelni azt.

## II. Jelenlegi helyzet leírása
Kollégánk boltjának növekedése érdekében szeretné kibővíteni lehetőségeit, hogy felvegye a versenyt a piacon szereplő konkurenciával és profitnövekedést érjen el. A modern világ technológiai fejlődése megköveteli a digitális jelenlétet weboldal/webáruház formájában.
Eddig a vásárlók csak személyesen tudtak vásárolni, nagyobb mennyiséget előrendelni, vagy akár csak a termékeket megnézni. Ez kisebb profitot eredményezett, azonban a változatlan, egyre növekvő vásárlószám rávilágított, hogy weboldallal való rendelkezés szignifikáns növekedést eredményezhet, és a befektetett összeg elég gyorsan megtérülhet.
Emellett szükség van egy logó megtervezésére is a weboldal számára, ami igazodik a kor szellemiségéhez és vonzóbbá teszi a boltot a weboldalra betérő látogatók számára.
Ezek az igények vezették a tulajdonost ahhoz, hogy egy beruházás keretében egy jól működő, könnyen használható webáruházat készítsen.

## III. Vágyálom rendszer
A weboldalt úgy tervezzük, hogy ideális működése esetén a korábbi igények meghatározása alapján az alábbi funkciókat tartalmazza:
1. Termékkereső rendszer a különböző árucikkek gyors és egyszerű  megtalálása érdekében
2. Internetes vásárlás lehetősége
3. Hobbi aloldal az elkészült munkák megosztásához, amit a vásárlók oszthatnak meg egymással
4. Könnyen üzemeltethető weboldal
5. Adatbázis az áruk online nyilvántartása érdekében, mely rendezetten, külön kategóriákba szedve (főkategóriák-alkategóriák-konkrét termékek)
6. Külön opció a tulajdonos számára, ahol a karbantartóval kapcsolatot tartva tud üzeneteket, észrevételeket, hibákat küldeni.

>## IV. Követelménylista

1. **Megjelenés**
	- ***1/1 Átlátható felület***
		- 1/1/1 Letisztult kinézet
		- 1/1/2 Logikus és könnyen olvasható megjelenítés
	- 1/2 Dinamikus megjelenítés
		- 1/2/1 Reszponzív felület

2. **Funkcionalitás**
	- ***2/1 Adat-rögzítés***
		- 2/1/1 Új adat rögzítése
			- 2/1/1/1 Az adminisztrátor képes legyen új terméket rögzíteni
			- 2/1/1/2 Az adminisztrátor képes legyen új felhasználót rögzíteni
			- 2/1/1/3 Az adminisztrátor képes legyen új bejegyzést rögzíteni
	- ***2/2 Adat-módosítás***
		- 2/2/1 Meglévő adat szerkesztése
			- 2/2/1/1 Az adminisztrátor képes legyen meglévő terméket szerkeszteni
			- 2/2/1/2 Az adminisztrátor képes legyen meglévő felhasználót szerkeszteni
			- 2/2/1/3 Az adminisztrátor képes legyen meglévő bejegyzést szerkeszteni
	- ***2/3 Adat-keresés***
        - 2/3/1 Meglévő adat keresése
            - 2/3/1/1 Termékek közötti keresés
              - 2/3/1/1/1 Az adminisztrátor saját felületén képes legyen terméket keresni
              - 2/3/1/1/2 A felhasználó saját felületén képes legyen terméket keresni
            - 2/3/1/2 Az adminisztrátor képes legyen felhasználót keresni
            - 2/3/1/3 Az adminisztrátor képes legyen bejegyzést keresni
	- ***2/4 Adat-szűrés***
        - 2/4/1 Meglévő adatra történő szűrés
            - 2/4/1/1 Termék szűrésére
              - 2/4/1/1/1 Az adminisztrátor saját felületén képes legyen terméket keresni
              - 2/4/1/1/2 A felhasználó saját felületén képes legyen terméket keresni
	- ***2/5 Rendelés***
		- 2/5/1 Felhasználó általi termék kiválasztás
		- 2/5/2 Felhasználó általitermék kosárba helyezés
		- 2/5/3 Felhasználó általi termék megrendelés
	- ***2/6 Bejegyzés oldal***
        - 2/6/1 Bejegyzés létrehozására
		  - 2/6/1/1 Az adminisztrátor saját felületén képes legyen bejegyzést létrehozni
		  - 2/6/1/2 A felhasználó saját felületén képes legyen bejegyzést létrehozni
        - 2/6/2 Bejegyzések megtekintése egységes felületen
	- ***2/7 Regisztráció***
		- 2/7/1 Regisztrációs ürlap
	- ***2/8 Bejelntkezés***
		- 2//1 Bejelentkezés űrlap
		
<hr>

>## V Fogalomszótár
*SZOFTVER (SOFTWARE)*
 - Szoftvernek nevezzük a számítógépre írt programokat. 
A szoftvereket programozók készítik. Szellemi termékek, kézzel nem megfoghatóak. 
A szoftver a számítógépen futó programok összefoglaló neve, valamint a hardver egységeket működtető-, 
és vezérlő programok összessége.

*PROGRAM*
- A program olyan egyszerű utasítások, műveletek logikus sorozata,
amelyekkel a számítógépet irányítjuk. A program az utasításokat is és az adatokat is kettes 
számrendszerben leírt számokkal ábrázolja.

*HTML(angolul: HyperText Markup Language=hiperszöveges jelölőnyelv)*
- Egy leíró nyelv, melyet weboldalak készítéséhez fejlesztettek ki, 
és mára már internetes szabvánnyá vált a W3C (World Wide Web Consortium) támogatásával. 
Az aktuális változata az 5, mely az SGML általános jelölőnyelv egy konkrét alkalmazása 
(azaz minden 5-ös HTML dokumentum egyben az SGML dokumentumszabványnak is meg kell hogy feleljen). 

*PHP*
 - A PHP egy általános szerveroldali szkriptnyelv dinamikus weblapok készítésére. 
Az első szkriptnyelvek egyike, amely külső fájl használata helyett HTML oldalba ágyazható.

*CSS (Cascading Style Sheets, magyarul: lépcsőzetes stíluslapok)*
- A számítástechnikában egy stílusleíró nyelv, mely a HTML vagy XHTML típusú strukturált dokumentumok megjelenését írja le. Ezenkívül használható bármilyen XML alapú dokumentum stílusának leírására is, mint például az SVG, XUL stb.

*JavaScript*
- A JavaScript programozási nyelv egy objektumorientált, 
prototípus-alapú szkriptnyelv, amelyet weboldalakon elterjedten használnak.

*Adatbázis*
- Az adatbázis azonos minőségű (jellemzőjű), 
többnyire strukturált adatok összessége, 
amelyet egy azok tárolására, lekérdezésére és szerkesztésére alkalmas szoftvereszköz kezel.
Az adatbázis fogalma nem keverendő össze az adatbázis-kezelővel, 
amely egy eszköz az adatbázis működtetésére, rendszerszintű és 
felhasználói folyamatainak szervezésére.
Az adatbázisok célja adatok megbízható, 
hosszú távon tartós (idegen szóval: perzisztens)
tárolása és viszonylag gyors visszakereshetőségének biztosítása.

*Adminisztrátor (admin)*
- Az a személy aki egy számítógépes vagy számítógép-hálózati szolgáltatás irányítója. Az adminisztrátorhoz gyakran egy fiók tartozik, amit felhasználói név és jelszó azonosít.

*Felhasználó (user)*
- Az a személy (végfelhasználó, end-user) vagy szoftverágens, aki egy számítógépes vagy számítógép-hálózati szolgáltatás használója. A felhasználóhoz gyakran felhasználói fiók tartozik, amit felhasználói név (username, screen name, nick vagy handle) azonosít.

<hr>

## VI. Használati esetek
1. Admin: minden jogosultság birtokosa, az oldal hibamentes működésének biztosításához. Feladata a rendszer működtetése, ellenőrzése. Az egész rendszerhez van hozzáférése. Ez a szerepkör a karbantartóra vonatkozik.
2. Tulajdonos: árut tud rendelni, termékeket feltölteni, új terméket hozzáadni, árat módosítani, panaszokat kezel a vásárlók problémamentes kiszolgálása érdekében. Javaslatot tehet az adminnak egy külön oldalon a fejleszteni kívánt dolgokról, illetve hibát is jelezhet.
3. Felhasználó: ő a vásárló, aki már betért. Rendelést adhat le, véleményt írhat a termékről, amit már megvásárolt, különböző termékekből csomagot állíthat össze, rendelést adhat le a tulajdonos felé nagyobb termék rögzítése esetén, vagy ha a termék éppen hiánycikk. Aloldalon keresztül megoszthatja a saját munkáját.
4. Vendég: regisztráció nélküli betérő, tájékozódhat az oldalról, a termékekről, de nincs semmihez sem jogosultsága, nem adhat le rendelést. Felhasználóvá válhat regisztráció esetén.

## VII. Használati esetek - követelmény megfeleltetés

* ADMIN
	* Böngészés	-> Weboldal alap funkciója
	* Rögzítés	-> 2/1-es funkció
	* Módosítás	-> 2/2-es funkció
	* Keresés	-> 2/3/1/1/1-es funkció
	* Szűrés	-> 2/4/1/1/1 -es funkció
	* Bejegyzés		-> 2/6/1/1-es funkció

* USER
	* Böngészés	-> Weboldal alap funkciója
	* Keresés	-> 2/3/1/1/2 -es funkció
	* Szűrés	-> 2/4/1/1/2-es funkció
	* Rendelés	-> 2/5 -ös funkció
	* Bejegyzés		-> 2/6/1/2-es funkció

## VIII. "Képernyő" tervek
A képernyőterv túlszárnyalta a jelenleg rendelkezésre álló időt, energiát, munkát. Nagy előnye viszont, hogy így a tantárgy 2. kurzusára is előkészítettük a feladatokat. Ezért akartam mindenképp ebben a formában meghagyni, nem pedig a jelenlegi állapotra hozni. A weboldal egyelőre az alapvető funkciókat tartalmazza melyet az alábbiakban részletezek.  
A tervet Axure szoftverrel készítettem el, és bár a szoftver használata nem volt túlságosan nehéz, ennek ellenére a kezelésének tanulási folyamata sok időt vett igénybe, így a képernyőterv legfontosabb részét kiviteleztem.
A terv eredménye a https://zxb0g0.axshare.com/#id=v3dnyn&p=f_oldal linken található, a hozzáférési jelszó: wireframe. 
A főoldalon jelennek meg a weboldal legfontosabb információi, melynek kiemelt része az oldal tetején található horizontális menü. A menü tartalmazza a termékeket kategorizálva (2. kurzus célkitűzése). Mellette egy kreatív hobbi fül található (szintén a 2. kurzus célkitűzése), amelyen ötleteiket oszthatják meg a felhasználók, legyen szó varrásról, vagy bármilyen más kreatív illetve költséghatékony megoldásról.
A rólunk fülre klikkelve a céggel kapcsolatos legfontosabb információk találhatók. Mellette a keresés gombra kattintva egy leugró boxban terméket írhatunk be (szintén a 2. kurzus célkitűzése). A találatok a beírt szöveg alatt jelennek meg. A menü következő fülén hírlevélre iratkozhatunk fel (2. kurzus célkitűzése). Mellette a termék gombra (kosár gomb) kattintva a kosárhoz juthatuk el, amelyben láthatók az abba helyezett termékek.
Végül, de nem utolsó sorban a regisztráció/bejelentkezés gombra kattintva válthatunk felhasználó titulust.
Ezt egészítettük ki a megvalósítás szintjén a horizontális menüben egy kezdőlap füllel, egy üzenőfallal, ahol a vásárlók kérését, kívánságát, igényeit tudjuk nyomon követni, és egy kapcsolat füllel, amelyben üzenetet írhatnak az adminisztrátornak észrevételeikről, vagy akár a weboldallal kapcsolatos hibákról.
A főoldal tartalmi részén a menü alatt egy üdvözlőszöveg fogadja a látogatót. Alatta az akciós ajánlatok tekinthetők meg, amely aktuális, heti és szezonális bontásban látható. Alatta a közelmúltban érkezett új termékek tekinthetők meg. Végül lejjebb a népszerű, gyakran vásárolt termékek sora jelenik meg.
A cég mintegy 50 éves múlttal büszkélkedik, így fontos számára a cég történetének előtérbe helyezése. Ezen oknál fogva egy rövid cégtörténet került a főoldal alsó részére. A főoldal alján a legfontosabb információk érhetők el.


## IX. Funkció - követelmény megfeleltetés
A képernyőtervben minden, a követelményspecifikációban megfogalmazott vágyálom megjelenik. A vágyálom rendszerben megfogalmazott hat pont kiemelt fontosságú, és a honlapterv alapján egyértelműen azonosítható, látható.
