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

### 3.1 Felhasználói folyamatok:

### 3.2 Adminisztrátori folyamatok:

## 4. Igényelt üzleti folyamatok modellje

## 5. Követelménylista

| Id  | Modul | Név | Leírás |
| :-: | :---: | :-: | :----: |

## 6. Használati esetek

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

### 9.2 Jogosultsági szintek lehetőségei

## 10. Funkció - követelmény megfeleltetése

| Id  | Követelmény | Funkció |
| :-: | :---------: | :-----: |

## 11 Fogalomszótár

* Admin: Admin vagy másnéven adminisztrátor olyan felhasználói szerepkör, amely különleges jogosultságokkal rendelkezik a weboldal kezeléséhez és fenntartásához. 

* Adatbázis: Az adatbázis olyan strukturált adatok gyűjteménye, amelyeket egy számítógépes rendszer tárol, kezel és lekérdez. Az adatbázis célja, hogy hatékonyan tárolja és hozzáférhetővé tegye a különféle információkat.

* Felhasználó: A felhasználó olyan személy, aki bejelentkezik vagy böngészi az oldalt, és különböző interakciókat végezhet az elérhető funkciók alapján. A felhasználók hozzáférési szintje és jogosultságai eltérőek lehetnek attól függően, hogy regisztrált felhasználókról, vendégekről, vagy különleges jogosultsággal rendelkező szerepkörökről (pl. adminisztrátor) van szó.