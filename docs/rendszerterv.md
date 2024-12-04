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

![Üzleti_folyamatok_modellje.png](https://github.com/frake92/AFP2024_2/blob/main/images/3%20%C3%9Czleti%20folyamatok.png)

### 3.1 Üzleti szereplők

- Admin
- Futár
- Felhasználó
- Látogató

### 3.2 Üzleti folyamatok

| Üzleti szereplő | Üzleti szereplő neve | Feladatkör |
| :-------------: | :------------------: | :--------: |
| ![Látogató.png](https://github.com/frake92/AFP2024_2/blob/main/images/3.2%20L%C3%A1togat%C3%B3.png) | Látogató | Képes: böngészni az éttermeket és ételeket, regisztrálni. |
| ![Felhasználó.png](https://github.com/frake92/AFP2024_2/blob/main/images/3.2%20Felhaszn%C3%A1l%C3%B3.png) | Felhasználó | Képes: bejelentkezni, regisztrálni, kijelentkezni, saját adatokat módosítani, böngészni az éttermeket és ételeket, kosár tartalmát megrendelni. |
| ![Futár.png](https://github.com/frake92/AFP2024_2/blob/main/images/3.2%20Fut%C3%A1r.png) | Futár | Képes: bejelentkezni, kijelentkezni, saját adatokat módosítani, böngészni az éttermeket és ételeket, kosár tartalmát megrendelni, megrendelések megtekintése és elfogadása, elfogadott rendelések adatainak megtekintése. |
| ![Admin.png](https://github.com/frake92/AFP2024_2/blob/main/images/3.2%20Admin.png) | Admin | Képes: bejelentkezni, kijelentkezni, saját adatokat módosítani, böngészni az éttermeket és ételeket, kosár tartalmát megrendelni, éttermeket és ételeket feltölteni, módosítani és törölni, más felhasználók hozzáadása és törlése. |

## 4. Követelmények

A követelmények a projekt alapvető funkcionalitására és nemfunkcionális
aspektusaira vonatkozóan két fő kategóriára oszthatók: funkcionális
követelmények és nemfunkcionális követelmények.

### Funkcionális követelmények

- **Rendelések és ételek kezelése**: A rendszer tárolja a rendeléseket és az étlapok adatait, beleértve a képeket és formátumokat, mint például animált gif-ek az ételekről.
- **Felhasználói profilok kezelése**: A felhasználók regisztrálásakor elmentésre kerülnek a profilképek, felhasználónevek, jelszavak és e-mailek.
- **Reszponzív kialakítás**: Az oldal működése számítógépen, telefonon és tableten egyaránt biztosított, reszponzív dizájn révén.
- **Nyilvános étlap**: Az étlapok és ételek listázása belépés nélkül is megtekinthető.
- **Interakció lehetősége**: A regisztrált felhasználók értékelhetik az ételeket és visszajelzéseket írhatnak, valamint hozzáadhatják kedvencekhez az egyes fogásokat.
- **Gyors adatbázis-kezelés**: A webes felület hatékonyan kommunikál az adatbázissal, hogy biztosítsa a gyors rendeléskezelést és menüfrissítést.
- **Futárbarát rendeléskezelés**: Az oldal külön, futárok számára optimalizált felülettel rendelkezik, amely lehetővé teszi a gyors rendeléskövetést, az állapotfrissítést és az útvonalak hatékony megtervezését, hogy a kézbesítés gördülékenyen történhessen.

### Nemfunkcionális követelmények

- **Felhasználói jogosultságok védelme**: A felhasználók csak saját adataikat módosíthatják, nem férnek hozzá más felhasználók profiladataihoz, csupán a felhasználónevet és a profilképet láthatják.
- **Könnyű használhatóság**: A felület felhasználóbarát, könnyen kezelhető, minimális technikai ismeretekkel is jól használható.
- **Adatbázis-kezelés webes felületen**: A rendszer böngészőből érhető el, nem igényel telepítést vagy extra bővítményeket.
- **Könnyű hozzáférés okoseszközökkel**: Az oldal minden olyan eszközről elérhető, amely rendelkezik internet-hozzáféréssel és böngészővel, például okostelefon, tablet, laptop és asztali számítógép.

### Támogatott eszközök

- **Internetes hozzáféréssel rendelkező okoseszközök**: Az oldal bármely internetkapcsolattal rendelkező, böngészővel ellátott okoseszközről elérhető.
- **Okostelefonok, tabletek**: Mobilbarát, reszponzív kialakítás biztosítja a kényelmes használatot kisebb kijelzőkön is.
- **Laptopok és asztali számítógépek**: A felület asztali gépeken és laptopokon is jól megjelenik, így minden böngészőből használható.

## 5. Funkcionális terv

### 5.1 Rendszerszereplők

#### ADMIN

- Feladata a rendszer teljes felügyelete.
- Bármely szerepkörbe beléphet a hibamentes működés ellenőrzésére.
- Korlátlan hozzáféréssel rendelkezik az egész rendszerhez, beleértve a
  felhasználói profilok módosítását (jogosultságok, szerepkörök, felhasználónév,
  jelszó).
- meglévőket törölhet szabályszegés esetén.

#### FELHASZNÁLÓ

- Joga van az összes tartalom megtekintésére és a rendelési rendszer
  használatára.

#### FUTÁR

- Megtekintheti az aktuális rendeléseket
- Elfogadhatja a rendeléseket
- Kézbesítve státuszra módosíthatja a rendelés állapotát

### 5.2 Menühierarchiák

#### Bejelentkezés (Kezdőlap)

- Bejelentkezés
- Regisztráció

#### Főoldal

- Éttermek
- Kereső
- Navigációs részleg

#### Főoldal(Bejelentkezve)

- Éttermek
- Kereső
- Saját profil
- Navigációs részleg
- Kijelentkezés

#### Főoldal (Admin)

- Éttermek
- Kereső
- Saját profil
- Navigációs részleg
- Kijelentkezés

#### Admin panel

- új étterem hozzáadása
- Éttermek törlése/módosítása
- Felhasználó törlése
- Kijelentkezés

#### Főoldal (Futár)

- Éttermek
- Kereső
- Saját profil
- Navigációs részleg
- Kijelentkezés

#### Regisztráció

- Adatok megadására szolgáló felület
- Regisztráció
- Vissza a kezdőlapra

#### Éttermek

- Éttermek információi
- Étel rendelés
- Vissza a főoldalra

#### Profil módosítása

- Név módosítása
- Telefonszám módosítása
- Email cím módosítása
- Utca/házszám/irányítószám módosítása

#### Futár nézet

- Rendelés számot
- Rendelő neve
- Rendelő Telefonszáma
- Rendelő Utca/házszáma
- Rendelés státusza
- Következő Rendelés

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

### 1. users tábla

Ez a tábla tárolja az összes felhasználó adatait, beleértve a felhasználónevüket, jelszavukat, email címüket, kereszt- és vezetéknevüket, telefonszámukat, valamint szerepkörüket (felhasználó, futár, admin). 
Az **address_id** mező a **user_addresses** táblához kapcsolja a felhasználó címét.

![users.png](https://github.com/frake92/AFP2024_2/blob/main/images/8.%20users.png)

### 2. user_addresses tábla

Ez a tábla tárolja a felhasználók címadatait, mint a cím, házszám, irányítószám, város és ország. 
A címek kapcsolódnak a **users** táblához az **address_id** kulcson keresztül, így minden felhasználóhoz hozzárendelhető egy cím.

![user_addresses.png](https://github.com/frake92/AFP2024_2/blob/main/images/8.%20user_addresses.png)

### 3. restaurants tábla

Az éttermek adatait tárolja, mint például az étterem neve, címe, telefonszáma, nyitvatartási idő, stb. 
Az éttermek információit a **foods** tábla használja, hogy az ételek az adott étteremhez rendelve legyenek.

![restaurants.png](https://github.com/frake92/AFP2024_2/blob/main/images/8.%20restaurants.png)

### 4. foods tábla

Ebben a táblában tárolódnak az éttermekben kapható ételek adatai, beleértve az étel nevét, leírását, árát és a hozzá tartozó étterem azonosítóját. 
Az éttermek az **restaurants** tábla segítségével vannak összekapcsolva.

![foods.png](https://github.com/frake92/AFP2024_2/blob/main/images/8.%20foods.png)

### 5. user_carts tábla

Ez a tábla tárolja a felhasználó kosarában lévő ételeket. 
Minden bejegyzés a felhasználó **user_id**-ját, az étel **food_id**-ját. 
A kosár tartalma rendelés leadásakor törölhető, és a tábla összekapcsolódik a **users** és **foods** táblákkal.

![user_carts.png](https://github.com/frake92/AFP2024_2/blob/main/images/8.%20user_carts.png)

### 6. orders tábla

Ez a tábla a felhasználók rendeléseit tárolja. Minden rendeléshez tartozik egy **user_id** (aki leadta a rendelést), **restaurant_id** (melyik étteremtől rendeltek), **status** (rendelés állapota), és az összes rendelés teljes ára. 
Az **orders** tábla kapcsolódik a **users** és **restaurants** táblákhoz.

![orders.png](https://github.com/frake92/AFP2024_2/blob/main/images/8.%20orders.png)

### 7. courier_orders tábla

Ebben a táblában tárolódik a futárok által elfogadott rendelés. 
Minden bejegyzés kapcsolódik egy **courier_id** (futár), valamint egy **order_id** (rendelés) azonosítóhoz, és tárolja a futár által elfogadott rendelés állapotát (pl. „rendelés átvétele”, „kézbesítés alatt”, stb.).

![courier_orders.png](https://github.com/frake92/AFP2024_2/blob/main/images/8.%20courier_orders.png)

### 8. roles tábla

Ez a tábla tárolja a felhasználók szerepköreit, mint például „user” (felhasználó), „courier” (futár), és „admin” (adminisztrátor). 
A szerepkörök segítenek meghatározni, hogy a felhasználó milyen jogosultságokkal rendelkezik a rendszerben. 
A **users** tábla a **role_id** mezőn keresztül kapcsolódik a **roles** táblához, így minden felhasználóhoz hozzárendelhető egy szerepkör.

![roles.png](https://github.com/frake92/AFP2024_2/blob/main/images/8.%20roles.png)

### Áttekintés:

![hudora.png](https://github.com/frake92/AFP2024_2/blob/main/images/8.%20hudora.png)

- A **users** táblában lévő felhasználók kosárban lévő ételeit a **user_cart** tábla kezeli.
- Az éttermekhez tartozó ételek a **foods** táblában szerepelnek, és mindegyik étteremhez kapcsolódik a **restaurants** tábla.
- A felhasználók rendeléseit az **orders** táblában rögzítjük, míg a futárok által teljesített rendelések a **courier_orders** táblában találhatóak.

Ezek a táblák biztosítják az alapvető adatstruktúrát ahhoz, hogy egy ételrendelő platform működjön, és a rendszer hatékonyan kezelje a felhasználói kosarakat, rendeléseket és a futárokat.

## 9. Implementációs terv

A webszerveren futó php program tartalmazza az üzleti logikát. 
A felhasználói felület, ami böngészőben megjelenő weboldalak formájában érhető el 
HTML, Bootstrap, PHP technológiák felhasználásával készülnek. 
Keretrendszernek Laravel-t fogunk használni. 
A programok objektum orientált programozási paradigma használatával, 
MVC modell használata mellett. MySql adatbázis szervert használunk az adatok tárolására.
