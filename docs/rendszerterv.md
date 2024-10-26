# Rendszerterv

## 1. A rendszer célja

Az oldal célja, hogy az ételrendelési igényeket kiszolgáljuk, és ennek érdekében
átfogó szolgáltatást nyújtsunk a felhasználóknak, ahol különböző hozzáférési
szinteken vehetnek részt. Az oldal felépítése lehetőséget biztosít arra, hogy a
felhasználók eltérő jogosultságokkal rendelkezzenek attól függően, hogy milyen
tevékenységet szeretnének végezni.

Az oldal látogatói, akik még nem regisztráltak, nem férhetnek hozzá a teljes
menükínálathoz és a rendelési lehetőségekhez. A vendégek csak regisztrálhatnak,
illetve bejelentkezhetnek, amennyiben már van fiókjuk. Miután a felhasználó
sikeresen regisztrál, a rendszer automatikusan felhasználói jogosultságot
biztosít neki. Ezen a szinten elérhetik az étlapot, kiválaszthatják és
megrendelhetik kedvenc ételeiket.

A felhasználói jogosultsági szint mellett az oldal, futár illetve
adminisztrátori hozzáférést is biztosít egyes felhasználók számára. A futárok
további funkciókhoz férhetnek hozzá: Aktív rendelések megtekintése, rendelés
elfogadása, rendelés kézbesítése. Az adminisztrátorok különleges funkciókhoz
férhetnek hozzá: új ételeket adhatnak hozzá az étlaphoz, frissíthetik a menüt,
valamint kezelhetik a felhasználók hozzáférési szintjeit. Ezáltal módosíthatják
más felhasználók jogosultságait, és szükség esetén törölhetik a felhasználói
fiókokat is.

Ez a felépítés biztosítja, hogy az oldal zökkenőmentesen és biztonságosan
működjön, lehetőséget adva a felhasználóknak arra, hogy kényelmesen és
szabályozott keretek között rendeljék meg kedvenc ételeiket, míg az
adminisztrátorok felügyelik és bővítik a kínálatot, illetve gondoskodnak a
felhasználói fiókok kezeléséről.

## 2. Projektterv

### 2.1 Projektszerepkörök, felelőségek:

- Scrum masters:

  - Erdész Réka

  Feladatuk: Heti meetingek megszervezése.  
   Akadályok feltárása.  
   Következő elvégzendő feladatok átbeszélése.  
   Szerepkiosztás.  
   Útmutatás.

- Product owner:

  - Batki Roland
  - Takács Márk
  - Farkas Lajos
  - Kakuk Márton

- Üzleti szereplő:
  - Megrendelő: Dr. Tajti Tibor

### 2.2 Projektmunkások és felelőségek:

- Frontend:

  - Farkas Lajos

    Feladatuk: A felhasználók által elérhető felületek létrehozása.  
    A backend által biztosított funkciók igénybevétele.  
    Egységes design megalkotása.

- Backend:

  - Batki Roland
  - Takács Márk
  - Kakuk Márton

    Feladatuk: A frontend kiszolgálása adatokkal és adatok feldolgozásával.  
    Adatbázisok létrehozása.

- Tesztelés:

  - Batki Roland
  - Takács Márk
  - Farkas Lajos
  - Kakuk Márton

  Feladatuk: Hibák feltárása az üzembe helyezés előtt.

### 2.3 Ütemterv:

| Funkció                   | Feladat                    | Prioritás | Becslés (nap) | Aktuális becslés (nap) | Eltelt idő (nap) | Becsült idő (nap) |
| ------------------------- | -------------------------- | --------- | ------------- | ---------------------- | ---------------- | ----------------- |
| Követelmény specifikáció  | Megírás                    | 1         | 1             | 1                      | 1                | 1                 |
| Funkcionális specifikáció | Megírás                    | 1         | 1             | 1                      | 1                | 1                 |
| Rendszerterv              | Megírás                    | 1         | 1             | 1                      |                  | 1                 |
| Program                   | Képernyőtervek elkészítése | 2         | 1             | 1                      |                  | 1                 |
| Program                   | Prototípus elkészítése     | 3         | 8             | 8                      |                  | 8                 |
| Program                   | Alapfunkciók elkészítése   | 3         | 8             | 8                      |                  | 8                 |
| Program                   | Tesztelés                  | 4         | 2             | 2                      |

## 3. Üzleti folyamatok modellje

### 3.1 Üzleti szereplők

- Admin
- Felhasználó
- Futár

### 3.2 Üzleti folyamatok

## 4. Követelmények

A követelmények a projekt alapvető funkcionalitására és nemfunkcionális
aspektusaira vonatkozóan két fő kategóriára oszthatók: funkcionális
követelmények és nemfunkcionális követelmények.

### Funkcionális követelmények

### Nemfunkcionális követelmények

### Támogatott eszközök

## 5. Funkcionális terv

### 5.1 Rendszerszereplők

## ADMIN

- Feladata a rendszer teljes felügyelete.
- Bármely szerepkörbe beléphet a hibamentes működés ellenőrzésére.
- Korlátlan hozzáféréssel rendelkezik az egész rendszerhez, beleértve a
  felhasználói profilok módosítását (jogosultságok, szerepkörök, felhasználónév,
  jelszó).
- meglévőket törölhet szabályszegés esetén.

## FELHASZNÁLÓ

- Joga van az összes tartalom megtekintésére és a rendelési rendszer
  használatára.

## FUTÁR

- Megtekintheti az aktuális rendeléseket
- Elfogadhatja a rendeléseket
- Kézbesítve státuszra módosíthatja a rendelés állapotát

### 5.2 Menühierarchiák

## 6. Fizikai környezet

- Az alkalmazás web platformra készül, ami asztali számítógépről, hordozható
  készülékekről (laptop, táblagép, okostelefon) egyaránt elérhető megfelelő
  internet hozzáférés mellett.
- Semmilyen böngésző kiegészítő használata nem szükséges.

### Fejlesztő eszközök

- Visual Studio Code
- XAMPP
- phpMyAdmin

## 7. Architekturális terv

### Webszerver

Az Apache http szerveren futó alkalmazás szolgálja ki webes felületen keresztül
a rendszer felhasználóit.

### Adatbázis rendszer

Az adatok tárolása a MySql adatbázis szerveren történik. Az adatbázisban minden
mentett adat tárolódik.

### A program elérése, kezelése

A felhasználó felület böngészőben megjelenő html oldalak formájában érhető el,
ezen keresztül tudják a felhasználók a rendszert használni.

## 8. Adatbázis terv

## 9. Implementációs terv
