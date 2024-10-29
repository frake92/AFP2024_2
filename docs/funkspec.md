# Funkcionális specifikáció

## 1. Jelenlegi helyzet leírása

Jelenleg az ételrendelés és házhozszállítás piaca több különálló platformon működik, 
ahol az éttermek és szolgáltatók egyedileg kínálják termékeiket. 
A vásárlóknak több különböző alkalmazást és weboldalt kell használniuk az optimális ételválaszték és árak megtalálásához, 
ami időigényes és gyakran nem biztosít elegendő információt a döntéshozatalhoz. 
Az egyes platformok eltérő felülettel és kategorizálási rendszerrel rendelkeznek, 
ami megnehezíti a felhasználói élményt.

A rendelési folyamat gyakran bonyolult, és a felhasználóknak minden platformon külön regisztrációra van szükségük. 
Az ételekről nem állnak rendelkezésre egységes információk (összetevők, allergének, kalóriatartalom), 
így a vásárlók nem tudják egyszerűen összehasonlítani a különböző éttermek kínálatát. 
A rendszer hiányosságai közé tartozik az is, hogy nincs valós idejű készletkövetés, így előfordul, 
hogy a megrendelt étel mégsem elérhető. 
Továbbá, a vásárlók nem kapnak megfelelő támogatást rendelés után, 
például a kiszállítás pontos nyomon követése vagy a reklamációk kezelése terén.

Az éttermek és adminisztrátorok számára pedig az ételkínálat kezelése bonyolult és időigényes, 
mivel nincs egységes rendszer az ételek, árak és akciók egyszerű feltöltésére, szerkesztésére. 
Az adatvédelem és az élelmiszerbiztonsági előírások betartásának követése is nehézkes a széttagolt platformokon.

## 2. Vágyálomrendszer leírása

A ShadowWeb új rendszerének célja egy egységes, modern platform létrehozása, 
amely átlátható és egyszerű felhasználói élményt biztosít mind a vásárlók, 
mind az adminisztrátorok számára. Az új rendszer lehetővé teszi, 
hogy a felhasználók egy központi felületen böngésszenek az éttermek kínálata között, 
és egyszerűen leadják rendeléseiket.

Az oldal regisztrációhoz kötött, így a felhasználók saját fiókot hozhatnak létre, 
ahol az összeszedett ételeket megrendelhetik és kedvenc éttermeiket hozzáadhatják a profiljukhoz. 
Az egyszerűsített rendelési folyamat lehetővé teszi, hogy egyetlen fiókkal végezzenek minden tranzakciót, 
és személyre szabott ajánlatokat kapjanak korábbi rendeléseik alapján.

Adminisztrátori szinten a rendszer biztosítja az étlapok és felhasználói fiókok egyszerű kezelését. 
Az adminisztrátorok hozzáférhetnek az ételrendelésekhez és frissíthetik az éttermek adatait, szabályozhatják a felhasználói hozzáféréseket. 
Az új ételek és kategóriák feltöltése, szerkesztése és törlése könnyen megvalósítható lesz, 
a rendszer pedig figyelemmel kíséri a rendeléseket és a készleteket. 
Ezenkívül az adminisztrátorok felügyelhetik az új regisztrációkat és eltávolíthatják a szabálysértő felhasználókat. 
A rendszer automatikusan biztosítja az adatvédelemre és a jogszabályokra vonatkozó előírások betartását.

## 3. Jelenlegi üzleti folyamatok modellje

A HuDora üzleti folyamatai gondosan megtervezettek, hogy maximális kényelmet és hatékonyságot 
biztosítsanak mind a felhasználók, mind az adminisztrátorok számára. A rendszer célja, hogy egy 
zökkenőmentes és felhasználóbarát élményt nyújtson, amely hozzájárul a sikeres ételszállítási 
szolgáltatáshoz.

A felhasználói folyamatok kezdődnek a regisztrációval, amely lehetővé teszi a vásárlók számára, hogy 
egyszerűen létrehozzanak egy profilt, ahol elmenthetik adataikat és preferenciáikat. A felhasználók 
az alkalmazáson keresztül könnyedén böngészhetnek a különböző éttermek kínálatában, ahol részletes 
információkat találnak az ételekről, árakról és értékelésekről. A menük áttekintése és az ételek 
kosárba helyezése után a vásárlók egyszerűen leadhatják rendelésüket. Az éttermek gyors és hatékony 
kiszolgálása érdekében a HuDora valós idejű nyomkövetést kínál, lehetővé téve a felhasználók 
számára, hogy nyomon követhessék a futár érkezését.

Az adminisztrátori folyamatok szintén kulcsfontosságúak a HuDora működésében. Az adminisztrátorok 
felelősek a platform napi működtetéséért, beleértve az éttermek és menük folyamatos frissítését, 
valamint új éttermek integrálását. Az adminisztrátorok szorosan együttműködnek a futárokkal, 
figyelemmel kísérik a rendeléseket és a szállítási időket, hogy biztosítsák a szolgáltatás 
minőségét. A visszajelzések és értékelések kezelése szintén fontos feladat, mivel ezek segítenek a 
szolgáltatás folyamatos fejlesztésében és az ügyfélelégedettség növelésében.

A HuDora célja, hogy ezeket a folyamatokat folyamatosan optimalizálja, figyelembe véve a 
felhasználói és futári visszajelzéseket, valamint a piaci trendeket. Az adatok elemzése és a 
rendszeres jelentések segítik az adminisztrátorokat a döntéshozatalban, lehetővé téve számukra, hogy 
a szolgáltatást még versenyképesebbé tegyék. A HuDora innovatív megoldásai révén célja, hogy a 
legjobb ételszállító szolgáltatást nyújtsa Magyarországon, biztosítva ezzel a vásárlói és futár 
elégedettséget.

### 3.1 Felhasználói folyamatok:

A HuDora felhasználói folyamatai célzottan arra épülnek, hogy a vásárlók számára zökkenőmentes és 
élvezetes ételrendelési élményt nyújtsanak. A felhasználók először regisztrálnak az alkalmazásban, 
ahol elmenthetik adataikat, kedvenc éttermeiket és korábbi rendeléseiket. Az éttermek széles 
választéka között könnyedén böngészhetnek, és a kiválasztott ételeket egyszerűen kosárba 
helyezhetik. A rendelés leadása után a felhasználók valós időben nyomon követhetik a futár 
érkezését, így biztosítva, hogy az étel frissen és időben érkezzen meg.



### 3.2 Adminisztrátori folyamatok:

Az adminisztrátori folyamatok a HuDora működésének kulcsfontosságú részét képezik, biztosítva a 
platform zökkenőmentes működését. Az adminisztrátorok feladatai közé tartozik az éttermek és menük 
folyamatos frissítése, az új éttermek integrálása, valamint a felhasználói és futár visszajelzések 
kezelése. Emellett az adminisztrátorok figyelemmel kísérik a rendeléseket, a futárok teljesítményét, 
és elemzik az adatokat, hogy folyamatosan javíthassák a szolgáltatás minőségét és a felhasználói 
élményt. A rendszeres jelentések és elemzések segítségével a HuDora az üzleti folyamatokat 
optimalizálva biztosítja a piacon való versenyképességet.

## 4. Igényelt üzleti folyamatok modellje

A HuDora célja, hogy a felhasználói élményt maximálisan megkönnyítse, lehetővé téve az éttermek és 
ételek gyors és egyszerű böngészését. Az oldal folyamatosan karbantartott és frissített, hogy mindig 
aktuális ajánlatokat kínáljon. A felhasználók egyszerűen kereshetnek az éttermek között, szűrhetik a 
választékot ár, értékelés és kategória szerint, így megtalálva a számukra legmegfelelőbb 
lehetőségeket.

A rendelési folyamat zökkenőmentes, lehetőséget biztosítva a felhasználók számára, hogy a kosarukba 
helyezzék a kiválasztott ételeket, és egyszerűen leadják rendelésüket. Az éttermek és rendeléseik 
valós idejű nyomkövetése lehetővé teszi a felhasználók számára, hogy pontosan nyomon követhessék a 
futár érkezését.

A HuDora adminisztrátori folyamatai is kulcsszerepet játszanak. Az adminok felelnek az éttermek és 
menük folyamatos frissítéséért, a visszajelzések kezeléséért, valamint a futárok koordinálásáért. A 
rendszeres adat- és teljesítményelemzés biztosítja a szolgáltatás folyamatos optimalizálását, 
lehetővé téve a versenyképesség fenntartását a piacon.

A HuDora innovatív megoldásai révén célja, hogy a legjobb ételszállító szolgáltatást nyújtsa 
Magyarországon, biztosítva ezzel a vásárlói elégedettséget és a felhasználói élményt.

## 5. Követelménylista

| Id  | Modul | Név | Leírás |
| :-: | :---: | :-: | :----: |

## 6. Használati esetek

- **ADMIN**: 
Feladata a rendszer teljes körű felügyelete, ennek tesztelésére minden szerepkörbe be tud lépni (látogató, felhasználó, futár), 
hogy ellenőrizze azok hibamentes működését. 
Az egész rendszerhez korlátlan hozzáféréssel rendelkezik, így minden felhasználói profilt módosíthat. 
Ez magában foglalja a jogosultságok, szerepkörök, felhasználónevek és jelszavak kezelését. 
Új felhasználókat adhat a rendszerhez vagy eltávolíthat onnan szabálysértés esetén. 
Képes rendszerszintű üzeneteket küldeni minden felhasználónak. 
Kezelheti az éttermek és ételek adatait, módosíthatja az árakat, akciókat. 
Felügyeli a rendelések és kiszállítások folyamatát, szükség esetén beavatkozhat.

- **FUTÁR**: 
Speciális jogosultságokkal rendelkező felhasználó, aki a kiszállításokat végzi. 
Hozzáfér a számára kiosztott rendelések részleteihez (szállítási cím, telefonszám, rendelés tartalma). 
Módosíthatja saját státuszát (aktív/inaktív), jelzi a rendelések állapotát (átvéve/kiszállítva). 
Használhatja az útvonaltervező és navigációs funkciókat. 
Kommunikálhat a megrendelőkkel és éttermekkel a platform chatrendszerén keresztül. 
Látja saját teljesítménystatisztikáit és bevételeit.

- **FELHASZNÁLÓ**: 
Regisztrált felhasználó, aki rendeléseket adhat le az éttermektől. 
Saját profilt kezelhet, ahol eltárolhatja szállítási címeit és fizetési adatait. 
Értékelést és visszajelzést adhat az éttermekről, ételekről és futárokról. 
Nyomon követheti aktív rendeléseit, megtekintheti rendelési előzményeit. 
Kedvencnek jelölhet éttermeket, használhatja a kosár funkciót, és hozzáférhet a hűségprogramokhoz. 
Chatben kommunikálhat a futárral és az ügyfélszolgálattal.

- **LÁTOGATÓ**: 
Nem regisztrált felhasználó, aki böngészheti az éttermek kínálatát, megtekintheti az árakat és az értékeléseket. 
Használhatja a kereső és szűrő funkciókat, de rendelést nem adhat le. 
Láthatja az alapvető információkat az éttermekről (nyitvatartás, kiszállítási idő, minimum rendelési összeg). 
Regisztráció nélkül nem férhet hozzá a részletes értékelésekhez és a személyre szabott funkciókhoz.

## 7. Megfeleltetés, hogyan fedik le a használati eseteket a követelményeket

## 8. Képernyőtervek

| Kép | Leírás |
| :-: | :----: |
| ![kezdőlap.png](https://github.com/frake92/AFP2024_2/blob/main/images/kezdőlap.png) | A kezdőlap tervezete. Ezt bárki számára elérhető. |
| ![Főoldal.png](https://github.com/frake92/AFP2024_2/blob/main/images/Főoldal.png) | A Főoldalon láthatóak az éttermek választéka, amiből rendelhet a látogató/felhasználó. |
| ![Regisztráció.png](https://github.com/frake92/AFP2024_2/blob/main/images/Regisztráció.png) | A látogató itt tud beregisztrálni a weboldalunkra, hogy tudja menteni az adait a jövőbeli vásárlásakor. |
| ![AdminEtteremAdd.png](https://github.com/frake92/AFP2024_2/blob/main/images/AdminEtteremAdd.png) | Az Admin részleg Étterem szekciója. Ezen az oldalon képesek az adminok új éttermet hozzáadni a HuDora weboldalára, hogy még több választékból tudjanak választani a látógatók. |
| ![AdminEtteremDelete.png](https://github.com/frake92/AFP2024_2/blob/main/images/AdminEtteremDelete.png) | Itt az adminok eltávolitani tudják a megszűnt éttermeket, vagy partner szerződést bontott éttermet.|
| ![AdminUser.png](https://github.com/frake92/AFP2024_2/blob/main/images/AdminUser.png) | Az Admin részleg Felhasználók szekciója. Itt az adminok az adatbázisban felvett regisztált felhasználókat tudják adataikat módositani, illetve felhasználót törölni. |
| ![Futar.png](https://github.com/frake92/AFP2024_2/blob/main/images/Futar.png) | A futár felület a futároknak szolgáló részleg, ahol láthatják, a megrendelő adatait, hogy kitudják szállitani az ételt. |
| ![Főoldal.png](https://github.com/frake92/AFP2024_2/blob/main/images/Főoldal.png) | A futár felületen a futárok is láthatják a Főoldalt, mint a többi látogató. |

## 9. Forgatókönyvek

### 9.1 Alap forgatókönyv

Ebben a forgatókönyvben leírjuk a rendszer működésének alapvető folyamatait, amelyek lehetővé teszik az általános felhasználói interakciókat.
 ## 1. Bejelentkezés:
        A felhasználó megnyitja a bejelentkezési oldalt és megadja a felhasználónevét és jelszavát.
        A rendszer ellenőrzi a felhasználói adatokat az adatbázisban.
        Ha a bejelentkezési adatok helyesek, a felhasználó a főoldalra kerül, ahol a szerepkörének megfelelő menüpontok jelennek meg.
        Hibás bejelentkezési adatok esetén a rendszer figyelmeztetést ad, és a felhasználó újra próbálkozhat.

 ## 2. Regisztráció:
        A felhasználó kitölti a regisztrációs űrlapot a kötelező mezők (név, email, jelszó) megadásával.
        A rendszer ellenőrzi az adatok helyességét és egyediségét (pl. email-cím).
        Sikeres regisztráció esetén a rendszer automatikusan alapértelmezett (pl. „felhasználó”) jogosultságot rendel a regisztrált felhasználónak, és átirányítja a főoldalra.

 ## 3. Vásárlás (termék):
        A bejelentkezett felhasználó böngészhet az oldalon.
        Kiválaszt egy terméket, majd rákattint a „Vásárlás” gombra.
        A rendszer megjeleníti a vásárlási információkat (pl. termék ára).        

 ## 4. Admin felület elérése:
        A bejelentkezett admin felhasználó a menüben az „Admin” opcióra kattint.
        A rendszer megjeleníti az adminisztrációs felületet, ahol az adminisztrátor kezelheti a felhasználókat.
        Az adminisztrátor hozzáférhet a rendszerstatisztikákhoz és jogosultsági szintekhez is.

 ## 5.  Profilkezelés:
        A felhasználó megnyitja a profiloldalát, ahol módosíthatja az adatokat, például nevét, email-címét vagy jelszavát.
        A rendszer ellenőrzi az új adatokat, és frissíti azokat az adatbázisban.

### 9.2 Jogosultsági szintek lehetőségei

## 10. Funkció - követelmény megfeleltetése



## 11 Fogalomszótár

* Admin: Admin vagy másnéven adminisztrátor olyan felhasználói szerepkör, amely különleges jogosultságokkal rendelkezik a weboldal kezeléséhez és fenntartásához. 

* Adatbázis: Az adatbázis olyan strukturált adatok gyűjteménye, amelyeket egy számítógépes rendszer tárol, kezel és lekérdez. Az adatbázis célja, hogy hatékonyan tárolja és hozzáférhetővé tegye a különféle információkat.

* Felhasználó: A felhasználó olyan személy, aki bejelentkezik vagy böngészi az oldalt, és különböző interakciókat végezhet az elérhető funkciók alapján. A felhasználók hozzáférési szintje és jogosultságai eltérőek lehetnek attól függően, hogy regisztrált felhasználókról, vendégekről, vagy különleges jogosultsággal rendelkező szerepkörökről (pl. adminisztrátor) van szó.

+ **Optimalizálás** Az optimalizálás olyan állapotot jelent, amelyben valamit a lehető legjobb 
működésre, teljesítményre vagy hatékonyságra hangoltak.

+ **Valós idejű nyomkövetés** A Valós idejű nyomkövetés Technológiai megoldás, amely lehetővé teszi 
a felhasználók számára, hogy nyomon követhessék a rendelésük szállítását és a futár helyzetét.

 + **Innovatív megoldások** Az Innovatív megoldások olyan új és kreatív ötletek vagy technológiák, 
 amelyek javítják a szolgáltatásokat vagy folyamatokat.

+ **Integráció** Az Integráció új éttermek vagy szolgáltatások hozzáadása a meglévő rendszerhez.