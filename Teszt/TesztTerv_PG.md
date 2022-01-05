# <div align="center">Tesztterv </div>
<hr>

## Teszttervet írta:
|  | |
| --- | --- |
| Név: | Pál Gábor  |
| Neptun kód: | dfrfoh|
| Dátum: | 2021.01.02. |
| Böngésző: | Google Chrome; 96.0.4664.110 (Hivatalos verzió) (64 bites) |
| Oprendszer: | Windows 10 Home (20H2) |

<hr>

## Tesztelendő feladatok:
#### 1.	Termék hozzáadása (kizárólag Admin szerepkör) (Pál Gábor és Zsák József)
#### 2. Termék szerkesztése (módosítása vagy törlése) minden termék listázása alapján (kizárólag Admin szerepkör) (Pál Gábor)
#### 3. Termék szerkesztése (módosítása vagy törlése) keresés alapján (kizárólag Admin szerepkör) (Pál Gábor)
#### 4. Termék keresése (felhasználó szerepkör) (Pál Gábor)

<hr>


## 1. Termék hozzáadása (kizárólag Admin szerepkör)##
| Lépés | Feladat |
| ----- | --- |
| 1.   | Weboldal megnyitása. |
| 2.    | Az adminisztrátori felület a(z) **.../admin.php** hivatkozással érhető el |
| 3.   | Elnavigálunk a **TERMÉK FELTÖLTÉSE (kizárólag Admin szerepkör)** részhez |
| 4.   | Megadjuk a termékkategóriát a **Válassz termékkategóriát:** alatt található mezőre lépve (legördülő menüből kiválasztva) |
| 5.  |  A tabulátor billentyű megnyomásával a **Termék név** mezőre lépünk |
| 5. A |  Manuálisan rákattintunk **Termék név** mezőre |
| 5. B | Megadjuk a termék nevét, mely alfanumerikus (csak betűből és számjegyekből álló) karakterekből áll|
| 6.  |  A tabulátor billentyű megnyomásával a **Gyártó** mezőre lépünk |
| 6. A |  Manuálisan rákattintunk **Gyártó** mezőre |
| 6. B | Megadjuk a Gyártó nevét, mely alfanumerikus (csak betűből és számjegyekből álló) karakterekből áll|
| 7.  |  A tabulátor billentyű megnyomásával a **Termék színe** mezőre lépünk |
| 7. A |  Manuálisan rákattintunk **Termék színe** mezőre |
| 7. B | Megadjuk a termék színét, mely a magyar "ABC" karaktereiből áll|
| 8.  |  A tabulátor billentyű megnyomásával a **Termék mérete (mm) (szélesség/átmérő)** mezőre lépünk |
| 8. A |  Manuálisan rákattintunk **Termék mérete (mm) (szélesség/átmérő)** mezőre |
| 8. B | Megadjuk a termék méretét, mely csak numerikus karakterekből állhat|
| 8. C | Megadhatjuk a termék méretét a mező végén található le-fel nyilak segítségével is |
| 9.  |  A tabulátor billentyű megnyomásával a **Raktárkészlet mennyiség (méter/darab)** mezőre lépünk |
| 9. A |  Manuálisan rákattintunk **Raktárkészlet mennyiség (méter/darab) ** mezőre |
| 9. B | Megadjuk a Raktárkészlet mennyiségét, mely a csak numerikus karakterekből áll|
| 10.  |  A tabulátor bellentyű megnyomásával a **Megjegyzés** mezőre lépünk |
| 10. A |  Manuálisan rákattintunk **Megjegyzés** mezőre |
| 10. B | Adhatunk meg a termékhez kapcsolódó megjegyzést|
| 11.  |  A tabulátor billentyű megnyomásával a **Képfájl** mezőre, a **Fájl kiválasztása** gombra lépünk |
| 11. A |  Manuálisan rákattintunk **Képfájl** mezőre, a **Fájl kiválasztása** gombra |
| 11. B | A gomb megnyomása után betallózhatjuk a feltölteni kívánt fájl-t|
| 12.  |  A tabulátor bellentyű megnyomásával a **Ár (méter/darab) (Ft)** mezőre lépünk |
| 12. A |  Manuálisan rákattintunk **Ár (méter/darab) (Ft)** mezőre |
| 12. B | Megadjuk a termék árát, mely a csak numerikus karakterekből áll|
| 13.  |  A tabulátor bellentyű megnyomásával a **Termék készleten van** mezőre lépünk |
| 13. A |  Manuálisan rákattintunk **Termék készleten van** mezőre |
| 13. B | A jelölőnégyzetbe kötelező pipát tenni, vagyis kötelező kiválasztani, hogy a termék készleten megtalálható. Ez a termék létrehozásának feltétele|
| 14.  |  A tabulátor billentyű megnyomásával a **Létrehoz** mezőre lépünk |
| 14. A |  Manuálisan rákattintunk **Létrehoz** mezőre |
| 14. B | A **Létrehoz** gombot megnyomva az adatok bekerülnek az adatbáziba|

<hr>

## 2. Termék szerkesztése (módosítása vagy törlése) minden termék listázása alapján (kizárólag Admin szerepkör)##
| Lépés | Feladat |
| ----- | --- |
| 1.   | Weboldal megnyitása. |
| 2.    | Az adminisztrátori felület a(z) **.../admin.php** hivatkozással érhető el |
| 3.   | Elnavigálunk a **TERMÉKEK SZERKESZTÉSE LISTÁZÁS ALAPJÁN (kizárólag Admin szerepkör)** részhez |
| 4.   | Manuálisan rákattintunk a **Összes termék listázása** gombra |
| 5.  |  A gomb átirányít a **/php/00_admin_termek.php** oldalra |
| 5.  |  Az oldalon az összes termék megjelenik kategória szerint listázva a "Termékek listázása:" felirat alatt |
| 6.  | Ez alapján kettő táblázatban listázódik a két kategória: |
| 6. A  | első táblázat a "Gomb(ok) listázása:" alatt jelenik meg |
| 6. B  | A táblázat tíz darab oszlopot tartalmaz, amely közül az első nyolc oszlop a termék tulajdonságait jeleníti meg, |
| 6. C  | a kilencedik oszlop: Módosítás gomb: termék adatainak szerkesztése/módosítása|
| 6. D  | a tizedik oszlop: Törlés gomb: termék adatainak törlése|
| 7. A  | második táblázat a "Rövidáru(k) listázása:" alatt jelenik meg |
| 7. B  | A táblázat tíz darab oszlopot tartalmaz, amely közül az első nyolc oszlop a termék tulajdonságait jeleníti meg, |
| 7. C  | a kilencedik oszlop: Módosítás gomb: termék adatainak szerkesztése/módosítása|
| 7. D  | a tizedik oszlop: Törlés gomb: termék adatainak törlése|
| 8.  |  Bármelyik termékkategóriában mindegyik Módosítás gomb a **/php/03_admin_termeklist_update.php** oldalra hivatkozik |
| 8. A | Az így megnyitott oldalon a módosítandó termék taladonságai nyolc oszlopban jelennek meg: |
| 8. B | Az első négy oszlop nem módosítható - ez a ténylegesen azonosított termék nevét, gyártóját, színét, és méretét tartalmazza |
| 8. C | A következő négy oszlopban módosítható a termék mennyisége, a hozzá kapcsolódó megjegyzés, ára, és annak eldöntése, hogy a termék van-e készleten (I/N) |
| 8. D | A módosítható adatok mind a négy módosítható oszlopban megjelennek, így akár ez is segítséget nyújthat az új adatok bevitelében |
| 8. E | Az új adat bevitelét követően a Mentés gombra kattintva történik meg a tényleges módosítás az adatbázisban.|
| 9.  |  Bármelyik termékkategóriában mindegyik Törlés gomb a **/php/03_admin_termek_delete.php** oldalra hivatkozik |
| 9. A | A Törlés gombra kattintva figyelmeztető üzenet jelenik meg: Biztos vagy benne, hogy törölni szeretnéd a terméket? |
| 9. B | Itt még meggondolhatjuk magunkat: Ok gomb -> végrehajtás, Mégse -> elutasítás |

<hr>

## 3. Termék szerkesztése (módosítása vagy törlése) keresés alapján (kizárólag Admin szerepkör)##
| Lépés | Feladat |
| ----- | --- |
| 1.   | Weboldal megnyitása. |
| 2.    | Az adminisztrátori felület a(z) **.../admin.php** hivatkozással érhető el |
| 3.   | Elnavigálunk a **TERMÉKEK SZERKESZTÉSE KERESÉS ALAPJÁN (kizárólag Admin szerepkör)** részhez |
| 4.   | Manuálisan rákattintunk az **Egyszerű keresés**-hez tartozó mezőre |
| 5.  |  Be kell írni a szerkesztendő termék nevét, majd a mező jobb oldalán található kereső gombra (nagyító jel) kattintva:|
| 6.  | átirányít a **/php/01_admin_termek_keres.php** oldalra |
| 6. A | A keresési kulcsszó alapján az oldal kilistázza a találatokat kategória szerint: |
| 6. B | Ha csak egy termékkategóriában volt találat, akkor csak egy kategória táblázata jelenik meg |
| 7. A | Ha két termékkategóriában volt találat, akkor mindkettő kategória táblázata megjelenik |
| 7. B  | A táblázat tíz darab oszlopot tartalmaz, amely közül az első nyolc oszlop a termék tulajdonságait jeleníti meg, |
| 7. C  | a kilencedik oszlop: Módosítás gomb: termék adatainak szerkesztése/módosítása|
| 7. D  | a tizedik oszlop: Törlés gomb: termék adatainak törlése|
| 8.  |  Bármelyik termékkategóriában mindegyik Módosítás gomb a **/php/03_admin_termeklist_update.php** oldalra hivatkozik |
| 8. A | Az így megnyitott oldalon a módosítandó termék taladonságai nyolc oszlopban jelennek meg: |
| 8. B | Az első négy oszlop nem módosítható - ez a ténylegesen azonosított termék nevét, gyártóját, színét, és méretét tartalmazza |
| 8. C | A következő négy oszlopban módosítható a termék mennyisége, a hozzá kapcsolódó megjegyzés, ára, és annak eldöntése, hogy a termék van-e készleten (I/N) |
| 8. D | A módosítható adatok mind a négy módosítható oszlopban megjelennek, így akár ez is segítséget nyújthat az új adatok bevitelében |
| 8. E | Az új adat bevitelét követően a Mentés gombra kattintva történik meg a tényleges módosítás az adatbázisban.|
| 9.  |  Bármelyik termékkategóriában mindegyik Törlés gomb a **/php/03_admin_termek_delete.php** oldalra hivatkozik |
| 9. A | A Törlés gombra kattintva figyelmeztető üzenet jelenik meg: Biztos vagy benne, hogy törölni szeretnéd a terméket? |
| 9. B | Itt még meggondolhatjuk magunkat: Ok gomb -> végrehajtás, Mégse -> elutasítás |

<hr>
