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

Ez a tábla tárolja a rendszer felhasználóinak alapvető adatait, beleértve az e-mail címet, a jelszót, a kereszt- és vezetéknevet, valamint a telefonszámot. 
Minden felhasználónak van egy szerepköre, amely a **roles** táblához kapcsolódik a role_id mezőn keresztül. 
Továbbá, minden felhasználóhoz tartozhat egy kosár, amely kapcsolatban áll a **carts** táblával a cart_id mezőn keresztül.

![users.png](https://github.com/frake92/AFP2024_2/blob/main/images/8.%20users.png)

### 2. user_addresses tábla

Ez a tábla tárolja a felhasználók címadatait, mint például az irányítószám, a város, az utca és a házszám. 
A címek a **users** táblához kapcsolódnak a user_id mezőn keresztül, így minden felhasználóhoz hozzárendelhető egy vagy több cím.

![user_addresses.png](https://github.com/frake92/AFP2024_2/blob/main/images/8.%20user_addresses.png)

### 3. roles tábla

A rendszerben használható szerepkörök tárolására szolgál, például adminisztrátor, futár vagy általános felhasználó. 
A **roles** tábla a **users** táblával áll kapcsolatban a role_id mező segítségével, amely meghatározza az adott felhasználó szerepkörét.

![roles.png](https://github.com/frake92/AFP2024_2/blob/main/images/8.%20roles.png)

### 4. restaurants tábla

Ez a tábla tárolja az éttermek adatait, beleértve az étterem nevét, címét, telefonszámát, leírását és képét. 
Az éttermek kapcsolatban állnak a **foods** táblával, amely az adott étterem kínálatát tartalmazza.

![restaurants.png](https://github.com/frake92/AFP2024_2/blob/main/images/8.%20restaurants.png)

### 5. foods tábla

Ez a tábla az egyes éttermek kínálatában szereplő ételek adatait tárolja. 
Tartalmazza az étel nevét, árát és képét, valamint egy kapcsolatot az adott étteremmel a restaurant_id mezőn keresztül, amely a **restaurants** táblára hivatkozik.

![foods.png](https://github.com/frake92/AFP2024_2/blob/main/images/8.%20foods.png)

### 6. carts tábla

A felhasználók kosarainak azonosítására szolgál. 
Egy kosár mindig egy adott felhasználóhoz kapcsolódik, amit a user_id mező biztosít. 
A kosarak tartalmát a **cart_items** tábla tárolja, amely a kosárhoz tartozó ételeket írja le.

![carts.png](https://github.com/frake92/AFP2024_2/blob/main/images/8.%20carts.png)

### 7. cart_items tábla

Ez a tábla tárolja a kosarak tartalmát, azaz az egyes kosarakban lévő ételek listáját. 
A kosarak a cart_id mezőn keresztül kapcsolódnak a **carts** táblához, míg az egyes tételek az ételeket azonosító food_id mezővel a **foods** táblához.

![cart_items.png](https://github.com/frake92/AFP2024_2/blob/main/images/8.%20cart_items.png)

### 8. orders tábla

Ez a tábla a leadott rendelések adatait tárolja. 
Minden rendelés kapcsolódik egy felhasználóhoz (user_id), egy kosárhoz (cart_id) és egy szállítási címhez (address_id). 
A rendelés állapota a status mezőben van tárolva, amely értékei lehetnek például "pending", "in_progress" vagy "completed".

![orders.png](https://github.com/frake92/AFP2024_2/blob/main/images/8.%20orders.png)

### 9. courier_orders tábla

Ez a tábla a futárok által kezelt rendelések nyomon követésére szolgál. 
Minden rekord egy rendelést azonosít (order_id) és a futárt, aki a rendelést kézbesíti (courier_id). 
A táblában található rendelések a **orders** táblához, míg a futárok a **users** táblához kapcsolódnak.

![courier_orders.png](https://github.com/frake92/AFP2024_2/blob/main/images/8.%20courier_orders.png)

### 10. sessions tábla

Ez a tábla a felhasználók aktív munkameneteit rögzíti, például a bejelentkezésük IP-címét, a böngészőjük felhasználói ügynökét, és egyéb munkamenet-adatokat. 
A sessions tábla jelenleg nem kapcsolódik más táblához.

![sessions.png](https://github.com/frake92/AFP2024_2/blob/main/images/8.%20sessions.png)

### 11. migrations tábla

Ez a tábla a Laravel migrációk követésére szolgál.
A táblában tárolódnak az alkalmazás adatbázisának változásait rögzítő migrációk nevei és azok sorrendje.
Ez a tábla kizárólag a framework működéséhez szükséges, és nem kapcsolódik közvetlenül más táblákhoz.

![migrations.png](https://github.com/frake92/AFP2024_2/blob/main/images/8.%20migrations.png)

### Áttekintés:

![hudora.png](https://github.com/frake92/AFP2024_2/blob/main/images/8.%20hudora.png)

- A **users** táblában lévő felhasználók kosarait a **carts** tábla kezeli. A kosarak tartalmait pedig a **cart_items** tábla kezeli.
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
