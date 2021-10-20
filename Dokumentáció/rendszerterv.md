# <div align="center"> Rendszerterv </div>

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


## IV. Mérföldkövek

Többszöri egyeztetés, tesztek és bemutatás.

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


## VIII. Fizikai környezet


## IX. Absztrakt domain modellje


## X. Architekturális terv


## XI.Tesztterv


## XII. Telepítési terv


## XIII. Karbantartási terv

