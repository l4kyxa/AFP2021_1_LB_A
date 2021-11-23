
## I. Rendszer céljai, és nem céljai
A rendszer célja, a tulajdonos szempontjából a bolt digitalizálása, a marketing fejlesztése illetve a profitnövelés.
Felhasználók számára (vásárlók, nézelődők) a boltot egy olyan oldalról megmutatni, amely azt a benyomást kelti náluk, hogy ez valóban egy jól működő, informatív, vevőközpontú vállalkozás. Az oldalra betérve gyorsan, egyszerűen tudnak tájékozódni, vásárolni, egymással véleményt megosztani.
Fontosnak tartjuk az árukapcsolást, minél több terméket szeretnénk megjeleníteni a számukra, a vásárlói elégedettség, és a bevétel növekedése érdekében.
Az oldal megtekinthető okostelefonról (Android,IOS rendszerek), tabletről, számítógépről (PC, laptop). Nem célunk külön alkalmazást fejleszteni okostelefonokra, weboldalt tervezünk, ami egyben webáruház is.
Az adatokat egy SQL szerverről kapja meg, melyek a termékkel kapcsolatos információkat szolgáltatják, illetve a regisztrált felhasználókat tárolják.
A vendégek számára - akik nem akarnak még regisztrálni, de szeretnének körülnézni – pedig szeretnénk változatossá tenni az oldalt, de a minimalizmus elvét követve, a könnyű átláthatóság érdekében.

• A rendszert, annak működését, és az általa nyújtott szolgáltatásokat a következőképpen képzeljük el:
Első része a weboldal, amelyen a frontend rész található. Itt kerül megalkotásra rendszerünk azon része, amit a látogatók, vevők meglátnak, kommunikálnak vele, ezen keresztül küldenek visszajelzést. A weboldalon megtalálható lesz minden fontos információ, mind a vásárlók, mind a tulajdonos számára, ami segít navigálni és leegyszerűsíti a használatot. A weboldal segítségével a vásárlók tudnak böngészni a termékkínálatból és össze tudnak állítani egy csomagot is, mielőtt fizetnének. A termékről értékelést tudnak írni. A tulajdonos új terméket tud feltölteni, meglévőt módosítani/törölni. Külön menüpontban tud a karbantartó felé üzenetet, észrevételt küldeni a weboldallal kapcsolatban. A felhasználók tudnak majd regisztrálni is az oldalra, mely egy SQL szerverben lesz tárolva. A rendszer különböző oldalain szereplő logó saját tervezés, a modernizáció jegyében kerül megvalósításra és elhelyezve, erősítve az üzlet egyéniségét.

• Az ehhez kapcsolódó, korábban taglalt aloldal szerepe, hogy az előzőleg megvásárolt termékekből készült kész munkákat a vásárlók megosszák egymással, ezzel is népszerűsítve az üzletet. Egymás munkáit értékelni is tudják, véleményt írni róla, vagy egyszerűen csak szavazni (tetszik-e a termék, vagy nem). Erre az aloldalra a főoldal egyik almenüjén keresztül lehet elnavigálni. Megvalósításra használt nyelvek: HTML, CSS.

• A fő- és az aloldal is egy SQL szerverrel fog kommunikálni, ami a regisztrált vásárlókat és termékeket tárolja.

• A rendszer backend része Python nyelven lesz megvalósítva.

## II. Projektterv
Projektszerepkörök, felelősségek:

	- Scrum master: Csathó Zsolt: 
	
	Feladatai közé tartozik a kommunikáció a csapat tagjaival, akadályok feltárása, feladatok meghatározása
	
	- Product owner:
	- Megrendelő: Pál Gábor

Projektmunkások és felelősségeik:

	- Frontend: Zsák József

	A felhasználók által elérhető felület kialakítása, amin keresztűl 
	a backend által biztosított szolgáltatások igénybevételével elérhetőek 
	a rendszerben a felhasználók rendelkezésére álló funkciók.
	
	- Backend: 
		- Pál Gábor
		- Suhajda László
		- Kovács Dávid

	Feladataik közé tartozik az SQL szerver létrehozása, funkciók létrehozása, frontend kiszolgálása adatokkal
	
	
	Tesztelés:
	
	- Pál Gábor
	
	- Zsák József
	
	- Kovács Dávid
	
	- Suhajda László
	
## III. Ütemterv

| Funkció / story | Feladat / Task  | Prioritás  |  Becslés |  Aktuális becslés |  Eltelt idő |  Hátralévő idő |
| :---:   | :-: | :-: | :-: | :-: | :-: | :-: |
| Követelmény specifikáció |  | 0 | 12 | 12 | 12 | 0 |
| Funkcionális specifikáció   | | 0 | 12 | 12 | 12 | 0 |
| Rendszerterv | | 0 | 16 | 16 | 8 | 8 |
| Adattárolás | Adatmodell megtervezése| 0 | 4 | 4 | 4 | 0 |
| Adattárolás | Adatbázis megvalósítása a szerveren | 1 | 1 | 1 | 0 | 1 |
| Weboldal | Front-end rész megtervezése | 2 | 8 | 8 | 2 | 6 |

## IV. Mérföldkövek

Többszöri egyeztetés, tesztek és bemutatás. <br/>
2021.10.16. Konzultáció, dokumentáció megtervezése <br/>
2021.10.20. Konzultáció, egyeztetés <br/>
2021.10.27. Dokumentáció elkészült, további egyeztetések a front-end-ről <br/>
2021.11.01. Back-End megtervezése, funkciók taglalása, konzultáció <br/>
2021.11.10. Konzultáció, adatbázis-terv elkészült <br/>

## V. Üzleti folyamatok modellje

I. A felhasználó rögzítésre kerül az adatbázisban.
II. A felhasználó kiválasztja majd megrendeli a terméket.
III. Az adminisztrátor fogadja a rendelést és visszaigazolja a felhasználónak.
IV. Az adminisztrátor és a felhasználó megállapodnak a fizetési feltételekben.
V. Az adminisztrátor postázza a terméket.

## VI. Követelmények

* Funkcionális követelmények:

 	- Felhasználó rögzítés
 	- Felhasználó módosítás
 	- Felhasználó törlés
 	- Termék rögzítés
 	- Termék módisítás
 	- Termék törlés
 	- Bejegyzés rögzítés
 	- Bejegyzés módisítás
 	- Bejegyzés törlés
	- Termék keresés
 	- Termék szűrés
 	- Termék Rendelés
 	- Bejegyzés rögzítés

* Nem funkcionális követelmények:

 	- Hibamentes működés.
 	- Felhasználóbarát környezet.
 	- Reszponzív felület.

* Törvényi előírások, szabványok:

	-	

## VII. Funkcionális terv

Szereplők:
 - Admin.
 - User.

Rendszerhasználati esetek és lefutásaik:

ADMIN:
 - Felhasználó rögzítés
 - Felhasználó módosítás
 - Felhasználó törlés
 - Termék rögzítés
 - Termék módisítás
 - Termék törlés
 - Bejegyzés rögzítés
 - Bejegyzés módisítás
 - Bejegyzés törlés

USER:
 - Termék keresés
 - Termék szűrés
 - Termék rendelés
 - Bejegyzés rögzítés

Menü-hierarchiák:
```
* Kezdőlap
* Bemutatkozás
* Termékek (keresés, szűrésés rendelés funkció)
* Bejegyzések
* Kapcsolat
* Adatvédelmi irányelvek
```


## VIII. Adatbázis terv

* Felhasznalok tábla

| Felhasznalo_ID | Felhasznalonev | Email | Jelszo | Aszf | Bejelentkezve | Statusz | 
| :-: | :-: | :-: | :-: | :-: | :-: | :-: | 
| 01 | admin | admin@admin.hu | admin | 1 | 1 | 2 | 
| :-:   | :-: | :-: |  :-: | :-: | :-: | 
| 02 | aktiv  | aktiv@email.hu  | aktiv01  | 1 | 1 | 1 | 
| :-:   |  :-: | :-: |  :-: | :-: | :-: | 
| 03 | paszív | passziv@email.hu | passziv01 | 1 | 0 | 0 | 
|||||||

```
A felhasznáók adatait tároló tábla, személyes adatot nem tárol.
Regisztrációkor: a felhasználó automatikusan kap egy ID-t.
A felhasználó megadja a vezeték és keresztnevét.
A Username-t, az email címet és a hozzá tartozó jelszót a felhasználó adja meg.
Az ÁSZF oszlop segítségével jogilag igazolva van a hatóság felé, hogy a felhasználó elfogadta az ÁSZF-et a regisztfáció során, vagyis többek közt a weboldal és webshop felhasználási feltételeit.
A bejelntkezve mező tárolja az aktuális felhasználó jelenlegi állapotát.
A státuszt az adminisztrátor választja (2:admin, 1: aktív felhasználó, 2: passzív felhasználó).
```


* Termekek tábla

| Termekazonosito_ID  | KategoriaNev |
| :-:   | :-: | 
| 01 | Gomb |
| :-:   | :-: |
| 02 | Rovidaru |
| :-:   | :-: |
||||||||||||

Külön táblába helyeztem a cég termékkínálatának két alapkategóriáját. Nevezhetjük termék profil választó táblának is: Gomb vagy rövidáru a két alapkategória.
A Termekazonosito_ID 1:N kapcsolatba van az Aruk tábla Termekazonosito_ID-jával. 

* Aruk tábla

| Aru_ID  | Termekazonosito_ID | TermekNev | GyartoNev | Szin | Meret | Mennyiseg | Megjegyzes | Kep | Ar | Statusz |
| :-:   | :-: | :-: | :-: | :-: | :-: |  :-: |  :-: |  :-: |  :-: | :-: |
| 01 | 01 | Kerek | Moon | piros | 30*30 | 10 db/csomag | heti akciós| 01.png | 1000ft/csomag | 1 |
| :-:   | :-: | :-: | :-: | :-: | :-: | :-: |  :-: |  :-: |  :-: |  :-: |
| 02 | 02 | Kerek | Moon | fehér | 30*30 | 10 db/csomag | heti akciós| 02.png | 1000ft/csomag | 0 |
| :-:   | :-: | :-: | :-: | :-: | :-: |  :-: |  :-: |  :-: |  :-: | :-: | 
| 03 | 03 | Terítő | Len | fehér | 120*5000 | 1 henger | * | 03.png | 1000ft/méter | 1 | 
| :-:   | :-: | :-: | :-: | :-: | :-: |  :-: |  :-: |  :-: |  :-: | :-: |
| 04 | 04 | Terítő | Len | színes | 120*5000 | 1 henger | * | 04.png | 1000ft/méter | 0 | 
||||||||||||

```
Az áruk rögzítése/módosítása/törlése csak admin számára lehetséges.
Regisztráláskor autamitikusan kap a termék egy ID-t. Ez az Aru_ID.
A Termekazonosito_ID/TermekNev/GyartoNev/Szín/Meret/Mennyiseg/Ar megadása a rögzítő feladata, amely egyértelműen meghatározza az árut.
A megjegyzés tárolja az akció státuszát vagy egyéb információt a termékről.
A kép tarolja az elérési utat.
A státusz adja meg, hogy a termék aktiv vagy passzív.
```


* Kosar tábla

| Vasarlas_ID  | Felhasznalo_ID  |  Termekazonosito_ID | Mennyiseg/db | Ar | VasarlasDatum |  Teljesitve  | Lakcim_Irszam | Lakcím_Helyiseg | Lakcim_Utca | Lakcim_Hsz | Szallcim_Irszam | Szallcim_Helyiseg | Szallcim_Utca | Szallcim_Hsz |
| :-:   | :-: | :-: | :-: | :-: | :-: |  :-: |  :-: |  :-: |  :-: |  :-: |  :-: |  :-: |  :-: |  :-: |
| 01 | admin| 01 | 2 | 1000 | 2021-11-01 18:00 | 1 | 2120 | Dunakeszi | Pihenő utca | 27 | 2120 | Dunakeszi | Pihenő utca | 27 |
| :-:   | :-: | :-: | :-: | :-: | :-:   | :-: | :-: | :-: | :-: | :-:   | :-: | :-: | :-: | :-: | 
| 02 | user| 02 | 5 | 1000 | 2021-11-01 18:00 |  0 | 2120 | Dunakeszi | Pihenő utca | 27 | 2120 | Dunakeszi | Pihenő utca | 27 |
|||||||


A kosár adatbázis a megrendelni kívánt elemeket tárolja.
Az elem kosárba tételekor kap egy automatikus Vasarlas_ID-t.
Az adatbázishoz hozzárendelődik az aktuális felhasználó ID-je, és a termék ID-je (Termekazonosito_ID).
A tétel kiválasztásakor a felhasználó megadja a mennyiséget/darabszámot(alapesetben:1).
A dátum automatikusan kerül rögzítéser.
A Teljesítve mutatja, hogy a rendelés megtörtént, a kosár üres(0), vagy a felhasználó még nem adta le a rendelését(1).
A Lakcím és a Szállítási cím megadása kötelező. A vásárlás során a lakcím másolható a szállítási címbe, ha a vásárló tesz egy pipát a "Lakcím megegyezik a szállítási címmel" előtti jelölőnégyzetbe.


* Bejegyzés tábla

| Bejegyzes_ID  | Felhasznalo_ID  | Uzenet | Datum |  Status |
| :-:   | :-: | :-: |  :-: | :-: |
| 01 | 01 | Első bejegyzés | 2021-11-01 18:00 | 0 |
| :-:   | :-: | :-: | :-: | :-: |
| 02 | 02|  Második bejegyzés | 2021-11-01 18:05 | 1 |
||||||


A bejegyzés a felhasználó és az admin számára biztosítva van.
Az adatbázis tárolja a bejegyzés ID-jét, a felhasználó ID-jét, a felhasználó által megírt üzenetet, a megírás dátumát és az üzenet státuszát(0:passzív, 1:aktív).


## IX. Fizikai környezet

Webes alkalmazás révén minden platformon elérhető ami rendelkezik interneteléréssel ,illetve böngészővel.


## X. Absztrakt domain modellje
```
Admin:
* Adatrögzítés -> Bevitt adat ellenőrzése -> Rogzítés / Hibaüzenet.
* Adatmódosítás -> Bevitt adat ellenőrzése -> Rögzítés / Hibaüzenet.
* Keresés -> Bevitt adat ellenőrzése -> Listázás / Hibaüzenet.
* Szűrés -> Bevitt adat ellenőrzése -> Listázás / Hibaüzenet.
* Bejegyzés -> Bevitt adat ellenőrzése -> Rögzítés / Hibaüzenet. 
* Rendelés -> Bevitt adat ellenőrzése -> Ertesítés / Hibaüzenet.
```
## XI. Architekturális terv

Backend:A felhasználók által elérhető felület kialakítása, amin keresztűl 
	a backend által biztosított szolgáltatások igénybevételével elérhetőek 
	a rendszerben a felhasználók rendelkezésére álló funkciók.

Frontend:Az SQL szerver létrehozása, funkciók létrehozása, frontend kiszolgálása adatokkal.

## XII.Tesztterv

A tesztelések célja a termék paramétereinek vizsgálat és funkcionalitásának ellenőrzése.

- I.: Unit teszt:
	Már a fejlesztési idő alatt is folyamatosan tesztelés történik, hogy a kódok, kódrészletek megfelelően működnek-e.
	Egy kódot vagy annak részletét csak akkor tekinthetünk késznek, ha a tesztesetek hiba nélkül lefutnak.

- II.: Alfa teszt:
	A teszt elsődleges célja: a már meglévő funkciók megfelelő illetve (szándékos) hibás adatokkal történő tesztelése.
	A tesztet a fejlesztők végzik.
	A teszt akkor mondható sikeresnek ha a megfelelő adatbevitel után a megfelelő opció áll rendelkezésre a hibás adatok bevitele után pedig a hiba lekezelése megtörténik. A teszt időtartama ~egy hét.

- III.: Béta teszt:
	Ezt a tesztet nem a fejlesztők végzik, hanem meghatározott számú a fejlesztők által kiválasztott külső tesztelő.
	A teszt időtartama ~egy hét.
	A tesztelés alatt a tesztelők dokumentálják a lépéseket.
	A tesztek után a fejlesztők a lehető leghamarabb kijavítják az esetleges hibákat illetve a tesztelők észrevételei alapján módosításokat hajthatnak végre.

## XIII. Telepítési terv

Telepítés nem szükséges. *(elérés:https://www.---.hu)*

## XIV. Karbantartási terv

A weboldalrendszer karbantartása
magában foglalja az esetleges hibák elhárítását, a változó igények miatti
módosításokat és korrigálásokat, valamint a felhasználók illetve az adminisztrátor által jelentett hibák kivizsgálását és kijavítása.

