># Tesztjegyzőkönyv
<hr>

## Tesztelést elvégezte
|  | |
| --- | --- |
| Név: | Zsák József  |
| Neptun kód: | l4kyxa|
| Dátum: | 2021.12.05. |
| Böngésző: | Google Chrome; 96.0.4664.45 (Hivatalos verzió) (64 bites) |
| Oprendszer: | Windows 10 Pro (21H1) |

<hr> 

## Tesztelendő feladatok:
#### 1.	Regisztráció
#### 2.	Bejelentkezés
#### 3.	Kezdőlap
#### 4.	Termék hozzáadása
#### 5.	Felhasználó hozzáadása
#### 6.	Bejegyzés hozzáadása
<hr> 

## 1. Regisztráció
|Lépés| Feladat | Teszt |
| --- | ------- | ----------- |
| 1.    | Weboldal megnyitása | Sikeres|
| 2.    | A menüben található **Bejelentkezés** menüpontra , majd a **Regisztráció** gombra kattintanva elnavigálunk a regisztrációs oldalra |Sikeres|
| 3.    | Megjelenik a regisztrációs űrlap |Sikeres|
| 4.    | A **Név** mezőbe kattintunk |Sikeres|
| 5.    | A mezőt kitöltjük a magyar ABC és számjegyek tetszőleges kombinációjával legalább 3 karakter hosszan |***|
| 6.  A | Megnyomva a tabulátor billentyűt, a következő mezőre ugrik a kurzor |Sikeres|
| 6.  B | Manuálisan is átkattinthatunk a következő mezőre |Sikeres|
| 7.    | Kitöltjük az **E-mail** cím mezőt tetszőleges a következő formátumban: asdf@asdf.asdf, ahol a asdf kifejezés egy alfanumerikus (csak betűből és számjegyekből álló) karakterekből álló kifejezés |***|
| 8.  A | Megnyomva a tabulátor billentyűt, a következő mezőre ugrik a kurzor |Sikeres|
| 8.  B | Manuálisan is átkattinthatunk a következő mezőre |Sikeres|
| 9.    | Kitöltjük a **Jelszó** mezőt tetszőleges karakterek kombinációjával, legalább 5 karakter hosszúságban |***|
| 10.  A | Megnyomjuk a tabulátor billentyűt, ezáltal a **Jelszó-újra** mező kerül kijelölésre |Sikeres|
| 10.  B | Kitöltjük a **Jelszó-újra** mezőt az előzőleg megadott karakterek kombinációjával |***|
| 11.  A | Megnyomjuk a tabulátor billentyűt, ezáltal a Regisztráció gomb kerül kijelölésre |Sikeres|
| 11.  B | Manuálisan rákattintunk a Regisztráció gombra |Sikertelen|
| 12.    | A rendszer automatikusan átirányít egy rövid idő után |Sikertelen|

<hr>

## 2. Bejelentkezés
|Lépés| Feladat | Teszt |
| --- | ------- | ----------- |
| 1.   | Weboldal megnyitása. |Sikeres|
| 2.   | A menüben található **Bejelentkezés** gombra kattintanva elnavigálunk a beléptető oldalra |Sikeres|
| 3.   | Megjelenik a bejelentkezési űrlap |Sikeres|
| 4.   | A **Felhasználónév vagy E-mail cím** mezőbe kattintunk |Sikeres|
| 5.   | A mezőt kitöltjük a magyar ABC és számjegyek tetszőleges kombinációjával legalább 3 karakter hosszan, a saját már beregisztrált fiókunkhoz tartozó felhasználó nevével vagy e-mail címével |***|
| 6. A | Megnyomva a tabulátor billentyűt, a következő mezőre ugrik a kurzor |Sikeres|
| 6. B | Manuálisan is átkattinthatunk a következő mezőre (**Jelszó**) |Sikeres|
| 7.   | Kitöltjük a jelszó mezőt tetszőleges karakterek kombinációjával, legalább 5 karakter hosszúságban, a saját már beregisztrált fiókunkhoz tartozó jelszóval |***|
| 8. A | Megnyomjuk a tabulátor billentyűt, ezáltal a **Belép** gomb kerül kijelölésre|Sikeres|
| 8. B | Manuálisan rákattintunk a Bejelentkezés gombra |Sikertelen|
| 9.   | A rendszer automatikusan átirányít egy rövid idő után a felhasználó 'Kezdőlap' oldalára |Sikertelen|
| 10.  | A menüpontok között megjelenik a bejelentkezés meletti ikon megváltozik |Sikertelen|

<hr>

## 3. Kezdőlap
|Lépés| Feladat | Teszt |
| --- | ------- | ----------- |
| 1.    | Weboldal megnyitása |Sikeres|
| 2. A  | A felső menün kattintunk a "Kezdőlap" gombra |Sikeres|
| 2. B  | Megjelenik az oldal alap szerkezete (slide rész(3*3),3 újdonság, 3 népszerű termék)|Részben Sikeres|
| 3.    | A jobbra és balra nyilak segítségével összesen 9 termék közül választhatunk|Részben Sikeres|
| 3. B  | A nyilak megnyomásával a következő 3 terméknek kell megjelennie |Részben Sikeres|
| 4.    | A tabulátor bellentyű megnyomásával az **ÖSSZES AKCIÓ MEGJELENÍTÉSE** vagy **ÖSSZES TERMÉK MEGJENÍTÉSE** gombra ugorhat a felhasználó |Sikeres|
| 4. B  | Manuálisan rákattintunk a **ÖSSZES AKCIÓ MEGJELENÍTÉSE** vagy **ÖSSZES TERMÉK MEGJENÍTÉSE** gombra |Sikeres|
| 5.    | A(z) **ÖSSZES AKCIÓ MEGJELENÍTÉSE** vagy **ÖSSZES TERMÉK MEGJENÍTÉSE** gombra kattintva megjelenik a **TERMÉKEK** oldala |Sikeres|

<hr>

## 4. Termék hozzáadása ##
|Lépés| Feladat | Teszt|
| --- | ------- | ----------- |
| 1.   | Weboldal megnyitása. |Sikeres|
| 2.   | A menüben található **Bejelentkezés** gombra kattintanva elnavigálunk a beléptető oldalra |Sikeres|
| 3.   | Megjelenik a bejelentkezési űrlap |Sikeres|
| 4.   | A **Felhasználónév vagy E-mail cím** mezőbe kattintunk |Sikeres|
| 5.   | A mezőt kitöltjük a magyar ABC és számjegyek tetszőleges kombinációjával legalább 3 karakter hosszan, a saját már beregisztrált fiókunkhoz tartozó felhasználó nevével vagy e-mail címével |***|
| 6. A | Megnyomva a tabulátor billentyűt, a következő mezőre ugrik a kurzor |Sikeres|
| 6. B | Manuálisan is átkattinthatunk a következő mezőre (**Jelszó**) |Sikeres|
| 7.   | Kitöltjük a jelszó mezőt tetszőleges karakterek kombinációjával, legalább 5 karakter hosszúságban, a saját már beregisztrált fiókunkhoz tartozó jelszóval |***|
| 8. A | Megnyomjuk a tabulátor billentyűt, ezáltal a **Belép** gomb kerül kijelölésre|Sikeres|
| 8. B | Manuálisan rákattintunk a Bejelentkezés gombra |Sikertelen|
| 9.    | Az adminisztrátori felület a(z) **.../admin.php** hivatkozással érhető el |Sikeres|
| 10.   | Elnavigálunk a **Termék Kezelés** részhez |Sikeres|
| 11.   | Megadjuk a **Termékkategóriát** (legördülő menüből választható) |Sikeres|
| 12.  |  A tabulátor bellentyű megnyomásával a **Termék név** mezőre lépünk |Sikeres|
| 12. A |  Manuálisan rákattintunk **Termék név** mezőre |Sikeres|
| 12. B | Megadjuk a termék nevét, mely alfanumerikus (csak betűből és számjegyekből álló) karakterekből áll|***|
| 13.  |  A tabulátor bellentyű megnyomásával a **Gyártó** mezőre lépünk |Sikeres|
| 13. A |  Manuálisan rákattintunk **Gyártó** mezőre |Sikeres|
| 13. B | Megadjuk a Gyártó nevét, mely alfanumerikus (csak betűből és számjegyekből álló) karakterekből áll|***|
| 14.  |  A tabulátor bellentyű megnyomásával a **Termék színe** mezőre lépünk |Sikeres|
| 14. A |  Manuálisan rákattintunk **Termék színe** mezőre |Sikeres|
| 14. B | Megadjuk a termék színét, mely a magyar "ABC" karaktereiből áll|***|
| 15.  |  A tabulátor bellentyű megnyomásával a **Termék mérete** mezőre lépünk |***|
| 15. A |  Manuálisan rákattintunk **Termék mérete** mezőre |Sikeres|
| 15. B | Megadjuk a termék méretét, mely a csak numerikus karakterekből áll|***|
| 15. c | Megadhatjuk a termék méretéta mező végén található le-fel nyilak segítségével is |Sikeres|
| 16.  |  A tabulátor bellentyű megnyomásával a **Raktárkészlet mennyiség (méter)** mezőre lépünk |Sikeres|
| 16. A |  Manuálisan rákattintunk **Raktárkészlet mennyiség (méter)** mezőre |Sikeres|
| 16. B | Megadjuk a Raktárkészlet mennyiségét, mely a csak numerikus karakterekből áll|***|
| 17.  |  A tabulátor bellentyű megnyomásával a **Megjegyzés** mezőre lépünk |Sikeres|
| 17. A |  Manuálisan rákattintunk **Megjegyzés** mezőre |Sikeres|
| 17. B | Adhatunk meg a termékhez kapcsolódó megjegyzést|Sikeres|
| 18.  |  A tabulátor bellentyű megnyomásával a **Képfájl** mezőre, a **Fájl kiválasztása** gombra lépünk |Sikeres|
| 18. A |  Manuálisan rákattintunk **Képfájl** mezőre, a **Fájl kiválasztása** gombra |Sikeres|
| 18. B | A gomb megnyomása után betallózhatjuk a feltölteni kívánt fájl-t|Sikeres|
| 19.  |  A tabulátor bellentyű megnyomásával a **Ár (Ft)** mezőre lépünk |Sikeres|
| 19. A |  Manuálisan rákattintunk **Ár (Ft)** mezőre |Sikeres|
| 19. B | Megadjuk a termék árát, mely a csak numerikus karakterekből áll|***|
| 20.  |  A tabulátor bellentyű megnyomásával a **Termék készleten van** mezőre lépünk |Sikeres|
| 20. A |  Manuálisan rákattintunk **Termék készleten van** mezőre |Sikeres|
| 20. B | Jelölőnégyzet segítségével kiválaszthatjuk, hogy a temék megtalálható a készleten vagy nem|Sikeres|
| 21.  |  A tabulátor bellentyű megnyomásával a **Létrehoz** mezőre lépünk |Sikeres|
| 21. A |  Manuálisan rákattintunk **Létrehoz** mezőre |Sikertelen|
| 21. B | A **Létrehoz** gombot megnyomva az adatok bekerülnek az adatbáziba|Sikertelen|

<hr>

## 5. Felhasználó hozzáadása ##
|Lépés| Feladat | Teszt|
| --- | ------- | ----------- |
| 1.   | Weboldal megnyitása. |Sikeres|
| 2.   | A menüben található **Bejelentkezés** gombra kattintanva elnavigálunk a beléptető oldalra |Sikeres|
| 3.   | Megjelenik a bejelentkezési űrlap |Sikeres|
| 4.   | A **Felhasználónév vagy E-mail cím** mezőbe kattintunk |Sikeres|
| 5.   | A mezőt kitöltjük a magyar ABC és számjegyek tetszőleges kombinációjával legalább 3 karakter hosszan, a saját már beregisztrált fiókunkhoz tartozó felhasználó nevével vagy e-mail címével |***|
| 6. A | Megnyomva a tabulátor billentyűt, a következő mezőre ugrik a kurzor |Sikeres|
| 6. B | Manuálisan is átkattinthatunk a következő mezőre (**Jelszó**) |Sikeres|
| 7.   | Kitöltjük a jelszó mezőt tetszőleges karakterek kombinációjával, legalább 5 karakter hosszúságban, a saját már beregisztrált fiókunkhoz tartozó jelszóval |***|
| 8. A | Megnyomjuk a tabulátor billentyűt, ezáltal a **Belép** gomb kerül kijelölésre |Sikeres|
| 8. B | Manuálisan rákattintunk a Bejelentkezés gombra |Sikeres|
| 9.    | Az adminisztrátori felület a(z) **.../admin.php** hivatkozással érhető el |Sikeres|
| 10.   | Elnavigálunk a **Felhasználó Kezelés** részhez |Sikeres|
| 11.   | Az **ID** mező kitöltése elhagyható új felhasználó esetén, mivel azt az adatbázis generálja|***|
| 12.  |  A tabulátor bellentyű megnyomásával a **Név** mezőre lépünk |Sikeres|
| 12. A |  Manuálisan rákattintunk **Név** mezőre |Sikeres|
| 12. B | A mezőt kitöltjük a magyar ABC és számjegyek tetszőleges kombinációjával legalább 3 karakter hosszan |***|
| 13.   | Megnyomva a tabulátor billentyűt, a következő mezőre ugrik a kurzor |Sikeres|
| 13.  A | Manuálisan is átkattinthatunk a következő mezőre |Sikeres|
| 13.  B | Kitöltjük az **E-mail** cím mezőt tetszőleges a következő formátumban: asdf@asdf.asdf, ahol a asdf kifejezés egy alfanumerikus (csak betűből és számjegyekből álló) karakterekből álló kifejezés |***|
| 14.   | Megnyomva a tabulátor billentyűt, a következő mezőre ugrik a kurzor |Sikeres|
| 14.  A| Manuálisan is átkattinthatunk a következő mezőre |Sikeres|
| 14.   B| Kitöltjük a **Jelszó** mezőt tetszőleges karakterek kombinációjával, legalább 5 karakter hosszúságban |***|
| 15.   | Megnyomjuk a tabulátor billentyűt, ezáltal a **ASZF** mező kerül kijelölésre |Sikeres|
| 15.  A |  Manuálisan is átkattinthatunk a következő mezőre|Sikeres|
| 15.  B| A legördülő menüből kiválaszthatjuk a megfelelő értéket|Sikeres|
| 16.   | Megnyomjuk a tabulátor billentyűt, ezáltal a **Bejelentkezve** mező kerül kijelölésre |Sikeres|
| 16.  A |  Manuálisan is átkattinthatunk a **Bejelentkezve** mezőre|Sikeres|
| 16.  B| A legördülő menüből kiválaszthatjuk a megfelelő értéket|Sikeres|
| 17.   | Megnyomjuk a tabulátor billentyűt, ezáltal a **Státusz** mező kerül kijelölésre |Sikeres|
| 17.  A |  Manuálisan is átkattinthatunk a következő mezőre|Sikeres|
| 17.  B| A legördülő menüből kiválaszthatjuk a megfelelő értéket|Sikeres|
| 18.  |  A tabulátor bellentyű megnyomásával a **Létrehoz** mezőre lépünk |Sikeres|
| 18. A |  Manuálisan rákattintunk **Létrehoz** mezőre |Sikeres|
| 18. B | A **Létrehoz** gombot megnyomva az adatok bekerülnek az adatbáziba|Sikertelen|

<hr>

## 6. Bejegyzés hozzáadása ##
|Lépés| Feladat | Teszt|
| --- | ------- | ----------- |
| 1.   | Weboldal megnyitása. |Sikeres|
| 2.   | A menüben található **Bejelentkezés** gombra kattintanva elnavigálunk a beléptető oldalra |Sikeres|
| 3.   | Megjelenik a bejelentkezési űrlap |Sikeres|
| 4.   | A **Felhasználónév vagy E-mail cím** mezőbe kattintunk |Sikeres|
| 5.   | A mezőt kitöltjük a magyar ABC és számjegyek tetszőleges kombinációjával legalább 3 karakter hosszan, a saját már beregisztrált fiókunkhoz tartozó felhasználó nevével vagy e-mail címével |***|
| 6. A | Megnyomva a tabulátor billentyűt, a következő mezőre ugrik a kurzor |Sikeres|
| 6. B | Manuálisan is átkattinthatunk a következő mezőre (**Jelszó**) |Sikeres|
| 7.   | Kitöltjük a jelszó mezőt tetszőleges karakterek kombinációjával, legalább 5 karakter hosszúságban, a saját már beregisztrált fiókunkhoz tartozó jelszóval |***|
| 8. A | Megnyomjuk a tabulátor billentyűt, ezáltal a **Belép** gomb kerül kijelölésre|Sikeres|
| 8. B | Manuálisan rákattintunk a Bejelentkezés gombra |Sikeres|
| 9.    | Az adminisztrátori felület a(z) **.../admin.php** hivatkozással érhető el |Sikeres|
| 10.   | Elnavigálunk a **Bejegyzés Kezelés** részhez |****
| 11.   | Az **ID** mező kitöltése elhagyható új felhasználó esetén, mivel azt az adatbázis generálja|***|
| 12.  |  A tabulátor bellentyű megnyomásával a **Felhasználó** mezőre lépünk |Sikeres|
| 12. A |  Manuálisan rákattintunk **Felhasználó** mezőre |Sikeres|
| 12. B | A mezőt kitöltjük a magyar ABC és számjegyek tetszőleges kombinációjával legalább 3 karakter hosszan |***|
| 13.   | Megnyomva a tabulátor billentyűt, a következő mezőre ugrik a kurzor |Sikeres|
| 13.  A | Manuálisan is átkattinthatunk a következő mezőre |Sikeres|
| 13.  B | Kitöltjük az **E-mail** cím mezőt tetszőleges a következő formátumban: asdf@asdf.asdf, ahol a asdf kifejezés egy alfanumerikus (csak betűből és számjegyekből álló) karakterekből álló kifejezés |***|
| 14.   | Megnyomva a tabulátor billentyűt, a következő mezőre ugrik a kurzor |Sikeres|
| 14.  A| Manuálisan is átkattinthatunk a következő mezőre |Sikeres|
| 14.  B| Kitöltjük a **Üzenet** mezőt tetszőleges karakterek kombinációjával |Sikeres|
| 15.   | Megnyomjuk a tabulátor billentyűt, ezáltal a **Dátum** mező kerül kijelölésre |Sikeres|
| 15.  A|  Manuálisan is átkattinthatunk a következő mezőre|Sikeres|
| 15.  B| A sorvégi ikon segítségével kiválaszthatjuk a megfelelő értéket|Sikeres|
| 16.   | Megnyomjuk a tabulátor billentyűt, ezáltal a **Státusz** mező kerül kijelölésre |Sikeres|
| 16.  A |  Manuálisan is átkattinthatunk a **Státusz** mezőre|Sikeres|
| 16.  B| A legördülő menüből kiválaszthatjuk a megfelelő értéket|Sikeres|
| 17.  |  A tabulátor bellentyű megnyomásával a **Létrehoz** mezőre lépünk |Sikeres|
| 17. A |  Manuálisan rákattintunk **Létrehoz** mezőre |Sikeres|
| 17. B | A **Létrehoz** gombot megnyomva az adatok bekerülnek az adatbáziba|Sikertelen|

<hr>
*** az eredmény a tesztelés adott pontján nem megállapítható.