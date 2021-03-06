# <div align="center">Követelmény specifikáció </div>
<hr>

## I. Jelenlegi helyzet leírása

* Szerencsés helyzetben vagyok, hiszen két hónapja vehettem át a nagyszüleim által indított 
rövidáru és gomb kereskedést, melyről elmondhatom, hogy apáról-fiúra szállt, 
tehát családi vállalkozás. 
* Nagy lehetőség van benne, hiszen Budapesten közlekedési szempontból 
is kiváló helyen fekszik. Az árukészlet adott volt, amikor átvettem az üzletet. 
* A jelenlegi árukészlet legfőbb termékei a különböző fajta gumi, szalag, cérna, tű, cipzár, cipőfűző, gomb, 
melyet folyamatosan igyekszem bővíteni fajtája, mérete, színe alapján a vásárlók kérésének, 
kívánságának megfelelően, illetve más üzletek termékeit figyelemmel kísérve. 
* Az üzlet népszerű, kedvelt elsősorban az idősebb korosztály körében, valamint a rövidáru 
termékeket nagyobb mennyiségben vásárló varró, illetve hasonló szakmában dolgozók számára. 
* Jelenleg az üzletnek nincs saját weboldala.

## II. Vágyálom rendszer leírása

* Manapság a legtöbb vállalkozás számára óriási előnyt jelent, ha rendelkezik egy saját honlappal, 
hiszen egy cég ilyen irányú reklámozása, illetve egy jó termékkereső rendszerrel rendelkező, 
megfelelően kivitelezett internetes vásárlás nagy mértékben fellendítheti egy üzlet hírnevét 
és forgalmát. 
* Úgy gondolom, most jött el az ideje, hogy a cégnek saját weblapja is legyen. 
Célom, hogy vásárlóink naprakész információkkal rendelkezzenek a termékkészlettel kapcsolatban. 
Természetesen az árukészletet különböző alkategóriák szerint, mint pl. cipzár: 16 cm széles, 
fehér színű, fém fogazatú alkategória alapján adatbázisba kellene szervezni rövid távon egy egyszerű, 
hosszú távon egy részletes, jól működő keresőrendszerrel. 
* Fontos számomra az árukészlet folyamatos bővítése, figyelembe véve 
a vásárlók kérését, kívánságát, igényeit. Erre a weboldalon kialakítandó üzenőfal alkalmas lenne. 
Szeretném továbbá a fiatalabb korosztályt is megnyerni egyrészt az aktuális divat, trendi állandó 
nyomon követésével, másrészt azzal, hogy hosszú távon egy kreatív hobbi aloldalt is ki lehet majd alakítani, 
amelyen a honlap felhasználói megoszthatják egymással új ötleteiket, elképzeléseiket, pl. különböző anyagokból 
milyen mintákat, praktikus megoldásokat tudnak létrehozni. 
* Elvárt, hogy a weboldal könnyen üzemeltethető legyen. A projekt elkészítése 
php nyelven történik, MySQL adatbázis létrehozásával. Az online megjelenés rövid távon PC/Laptopon, hosszú távon 
pedig mobiltelefonon és tableten is működjön, reszponzív felülettel.


## III. A rendszerre vonatkozó pályázat, törvények, rendeletek, szabványok és ajánlások felsorolása.

* Impresszum.
* Adatkezelési tájékoztató.
* Általános Szerződési Feltételek (ÁSZF).

## IV. Jelenlegi üzleti folyamatok modellje.
1. A vásárlóban felmerül az igény. ->
2. A vásárló bemegy az üzletbe. ->
3. A vásárló kiválasztja a terméket. ->
4. A vásárló kifizeti a terméket. ->
5. A vásárló megkapja a terméket. ->
6. A vásárló hazamegy. 

## V. Igényelt üzleti folyamatok modellje.
1. A vásárlóban felmerül az igény. ->
2. A vásárló felkeresi az üzletet (online). ->
3. A vásárló kiválasztja/megrendeli a terméket (online). ->
4. A vásárló kifizeti és megkapja a terméket. / A vásárló megkapja és kifizeti a terméket. 

>## VI. Követelménylista
1. **Megjelenés** 
   - ***1/1 Átlátható felület***
     - 1/1/1 Letisztult kinézet
     - 1/1/2 Logikus és könnyen olvasható megjelenítés
   - 1/2 Dinamikus megjelenítés
     - 1/2/1 Reszponzív felület 

2. **Funkcionalitás**
   - ***2/1 Adat-rögzítés***
     - 2/1/1 Új adat rögzítése
       - 2/1/1/1 Legyen lehetőség termék rögzítésére
       - 2/1/1/2 Legyen lehetőség felhasználó rögzítésére
       - 2/1/1/3 Legyen lehetőség bejegyzés rögzítésére
   - ***2/2 Adat-módosítás***
        - 2/2/1 Meglévő adat szerkesztése
          - 2/2/1/1 Legyen lehetőség termék szerkesztésére
          - 2/2/1/2 Legyen lehetőség felhasználó szerkesztésére
          - 2/2/1/3 Legyen lehetőség bejegyzés szerkesztésére
   - ***2/3 Adat-keresés***
        - 2/3/1 Meglévő adat keresése
          - 2/3/1/1 Legyen lehetőség termék keresésére
          - 2/3/1/2 Legyen lehetőség felhasználó keresésére
          - 2/3/1/3 Legyen lehetőség bejegyzés keresésére
   - ***2/4 Adat-szűrés***
        - 2/4/1 Meglévő adatra történő szűrés
          - 2/4/1/1 Legyen lehetőség termék szűrésére
   - ***2/5 Rendelés***
        - 2/5/1 Legyen lehetőség termék kiválasztására
        - 2/5/2 Legyen lehetőség termék kosárba helyezésére
        - 2/5/3 Legyen lehetőség termék megrendelésére
   - ***2/6 Bejegyzés oldal***
        - 2/6/1 Legyen lehetőség bejegyzés létrehozására
        - 2/6/2 Legyen lehetőség bejegyzés megtekintésére
   - ***2/7 Regisztráció***
       - 2/7/1 Legyen lehetőség felhasználó regisztrációjára
   - ***2/8 Bejelntkezés***
        - 2//1 Legyen lehetőség regisztrált felhasználó bejelentkezésére

<hr>

>## VII. Fogalomszótár

A „rövidáru” szó a német Kurzware tükörfordítása. Vélhetőleg a méteráru (a méterszámra árult szövetek és egyéb kelmék) ellenpárjaként alakult ki ez az elnevezés. A rövidáruk körébe a ruházati és lakástextil termékek gyártásában nélkülözhetetlen kiegészítő anyagokat sorolják, mind a nagyipari, mind a kézmű- vagy háziipari feldolgozáshoz.

A rövidárukat két csoportra osztják:

* **Puha rövidáruk:**
	* varrócérnák,
	* kézimunkafonalak (kézikötő-, horgoló- és hímzőfonalak, háziszőttesekhez készült fonalak),
	* különféle szalagok,
	* hevederek,
	* fonatolt és kötött zsinórok, cipőfűzők,
	* paszományok,
	* csipkék és hímzések,
	* díszítő kellékek (bojtok, díszzsinórok, rojtok, sujtások stb.),
	* vállpárnák,
	* ízlapok (a ruhák hónaljában az izzadság felfogására),
	
* **Kemény rövidáruk:**
	* ruhazáró kellékek (gombok, cipzárak, tépőzárak, nyomókapcsok és egyéb kapcsok, csatok)
	* varrótűk, gombostűk, biztosítótűk, hímzőtűk, fűzőtűk,
	* gyűszűk,
	* (kézi)kötő- és horgolótűk,
	* stoppolófa.
* **Egyéb fogalmak:**
	* gumi: A cérna nyúlásra hajlamos megfelelője.
	* cérna: A textilipari szaknyelvben a cérna általában két vagy több fonal összesodrásával létrehozott termék. Attól függően, hogy hány fonalat sodornak (cérnáznak) össze, két- vagy többágú cérnáról beszélünk. Ha több cérnát sodornak össze, akkor a termék neve: többszörös cérna. A cérnák között különösen fontos szerepet töltenek be a varráshoz használt cérnák.
	* tű: A tű olyan eszköz, amellyel szöveteket és másféle szálas anyagokat közvetlenül v. közvetve összetűznek. Megkülönböztetünk tűző- és kapcsolótűket, továbbá varró- és fűzőtűket. Az első csoport legelterjedtebb alakja a gombostű, a másodiknak a kézi varrótű.
	
		* Varrótű – olyan tű, amit varrásnál használnak, különféle textil- vagy bőrtermékek előállításánál. A tű végének hegyesnek kell lennie, hogy könnyen átszúrja a szövetet. A varrótű heggyel ellentétes végén nyílás van, ebbe kell a varráshoz használt cérnát belefűzni. A varrótű kiinduló anyaga rendszerint acélhuzal.
		* Gombostű – olyan tű, amit anyagok egymáshoz rögzítésére használnak. A gombostű végének hegyesnek kell lennie, hogy könnyen átszúrja az anyagot. A gombostű feje gömb formájú, T alakú vagy lapos kalap formájú. A kézműves gombostűnek ráillesztett, a gyáriparinak pedig duzzasztott feje van.
		* Dekor-gombostű – kerek fejű, dekoratív kinézetű gombostű, aminek a fejecskéje általában különböző színű műanyagból készül. Az alapfunkción kívül díszítő szerepük is van: ajándékok csomagolásához, tartozékok-kiegészítők készítéséhez, szalagok, zsinórok rögzítéséhez, továbbá a virágkötészetben is használják.
		* Biztosítótű – olyan tű, aminek a hegyes vége biztonságosan bezárható, s ez védelmet nyújt a véletlen szúrás ellen. Modern formájában 1849-ben jelent meg. A legkülönfélébb célokra használják, például díszítésre is – ekkor gyöngyöt vagy más függesztéket rögzítenek rá.
		* Nyakkendőtű – hagyományos férfiékszer, melynek az a rendeltetése, hogy a nyakkendőt az inghez erősítse. A 19. században és a 20. század elején volt igazán divatos. A nyakkendőtű fejrésze különböző anyagokból készült, például nemesfémből, drágakövekből, gyöngyből. Sokszor egy speciális erősítés védte a kieséstől. Ma már főként amerikai, elegáns uraknak viselése nem ajánlott.
		* Kalaptű – ékszer, amivel a fejfedőt a frizurához rögzítették, vagy a fejfedőhöz különféle díszítő elemeket. Használata főleg a 19. században és a 20. század elején volt divatos. A nyakkendőtűtől abban különbözik, hogy a tűrésze hosszabb. A fejrésze szintén dekoratív, és gyakran értékes anyagokból készül.
		* Hajtű – frizura díszítésére és kialakítására szolgál, az ékszerek egyik legősibb formája. Napjainkban népszerű a hullámcsat, ami kordában tartja a hajfürtöket.
		* Rajzszög – valaminek (leggyakrabban papír vagy szövet) egy szilárd felülethez való rögzítésére szolgál. A tűrésze rövid, a fejrésze pedig magas, vagy széles és lapos.
		* Rovartű – speciális tű, ami a gombostűnél hosszabb és vékonyabb, apró feje van, gyűjteményekben a rovarok rögzítésére való.
		* Kötőtű, horgolótű – kötéshez ill. horgoláshoz használt eszköz, amellyel a fonalakat kézi munkával vagy géppel szemekké formálják.

	* szalag: A szalag egy hosszú, keskeny, vékony textilszövetből, műanyagból, papírból vagy más hajlékony anyagból, sőt esetleg fémből készült tárgy. A textilszalagokat szövésmintájuk szerint ripsz-, taft-, esetleg danubiaszalagnak hívjuk. Ezeket szalagszövő gépen készítik (pl. Frick-Müller, Mageba stb.), de egyes fajtái horgológépen (pl. Frick-Müller, Comez stb.) is előállíthatók.
	* cipzár: A cipzár – hivatalos nevén húzózár vagy villámzár a Magyar értelmező kéziszótár szerint – mindennapos termékeken gyakran alkalmazott záró kellék. Az angol „zipper” elnevezés, amiből a „cipzár” szó is származik, a Goodrich cégtől ered, amely ezt a fajta zárat gumicsizmáin alkalmazta. Az angol zip szó egyik jelentése: gyorsaság, lendület, ebből egyértelműen következik a hazai villámzár elnevezés eredete.	
	A cipzárak műszaki adatai a következőkre terjednek ki:
		* a cipzár fajtája,
		* a textilszalag anyaga,
		* a zárlánc (a fogak ill. a spirál) anyaga,
		* a zárlánc szélessége,
		* a textilszalag szélessége,
		* a zárt cipzár keresztirányú szakítószilárdsága, ami a fogak egymásba kapaszkodásának erejére, ill. a fogak vagy a spirál rögzítésének erősségére utal,
		* a kezdőszem keresztirányú szakítószilárdsága (azaz az, hogy a cipzár keresztirányú igénybevételekor a kezdőszem mekkora terhelést bír el kiszakadás nélkül),
		* a végszemek hosszirányú szakítószilárdsága,
		* a bontórész keresztirányú szakítószilárdsága (azaz az, hogy a cipzár keresztirányú igénybevételekor a bontórész mekkora terhelést bír el kiszakadás nélkül).	

	* cipőfűző: A cipőfűző vagy cipőpertli vagy cipőzsinór fűzős cipőbe való zsinór vagy szalag, a cipőfelsőrész nyílásának szoros összezárását , ezáltal a cipő megfelelő illeszkedését, lábról való leesésének meggátlását és a cipőben való járás nagyobb biztonságát és kényelmét szolgálja, valamint a fűző nélküli bebújós cipőkkel, mokaszinokkal, loafer-cipőkkel, papucsokkal szemben könnyebbé, habár egyesek számára bonyolultabbá teszi a lábbeli váltását, fel- és levételét. Különböző hosszúságokban, színben, esetleg mintázattal készül, jellegzetessége a mindkét végét megerősítő kemény csúcs („végezés”), ami megkönnyíti a befűzését a cipőfelsőrész megfelelő nyílásaiba és egyúttal meggátolja a cipőfűző esetleges felfejtődését vagy kirojtosodását. Fonatoló-, körkötő- vagy szalagszövőgépen készítik, a végek megerősítését az ún. "végezőgép" végzi.
	* gomb: A gomb a ruházat összekapcsolására való eszköz. A legkülönbözőbb anyagból készül, fémekből, fából, csontból, bőrből, műanyagból, fás dióból stb.

<hr>