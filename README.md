# 20220115_project
 First step of complex project creation

CRUD kūrimas:
1. Sukurti projektą: New Terminal>composer create-project laravel/laravel projekto_pavadinimas.
2. Patikrinti ar viskas susikūrė, ar atsirado projektas + įkelti į github
3. Įeiti į projektą per cd projekto_pavadinimas
4. Per PhPMyAdmin sukurti duomenų bazę "projekto_pavadinimas ir nustatyti šriftą utf8mb4_unicode_ci + "create"
5. Faile ".env" 14 eilutėje pakeisti "laravel" į "projekto_pavadinimas"
6. Direktorijos "Config" faile "Database.php" 60 eilutėje pakeisti "null" į "'InnoDB'", su viengubomis kabutėmis!
7. Paleisti projekto vykdymą/serverį per "php artisan serve"
8. Terminalo viršutiniame dešiniajame kampe įsitikinti, kad paleistas tik vienas projektas. Esant dviems, geriau išvis visus uždaryti, iškviesti naujai terminalą "New Terminal", įeiti į direktoriją cd "projekto_pavadinimas" ir paleisti "php artisan serve".
9. Naršyklėje "public" direktorijoje paleisti "index.php" ir įsitikinti ar pasileido projektas.
10. Sukurti modelį/-ius terminale panaudojus "php artisan make:model pavadinimas --all" (vienaskaita!). Būtinai prirašyti "--all", kitaip nesukurs visko.
11. Turi būti viskas žaliai terminale
12. Pasitikrinti ar "App>Http>Controllers" aplanke susikūrė PavadinimasController.php ir App>Models atsirado modelis Pavadinimas.php?
13. Patikriname ar "App>Database>migrations" aplanke atsirado Metai_menuo_diena_numeris_create_pavadinimas(daugiskaita)_table.php failas?
14. Šiame faile, metode "public function up() papildome "Schema::create('pavadinimas',function (Blueprint $table) {
norimomis lentelėmis kaip objekto savybių rinkiniu, nurodant duomenų tipą ir lentelės stulpelio pavadinimą, pvz. $table->string('name') arba $table->bigInteger('company_id');
}
15. Paleisti "php artisan migrate:fresh", prieš tai įsitikinus ar aplamai paleistas xampp!.
16. Per PhPMyAdmin patikrinti ar duomenų bazės (projekto pavadinimas) lentelės (pavadinimai atitinka sukurtus modelius) atsirado stulpeliai su užduotais pavadinimais ir duomenų tipais "Schema" metode.
17. Sukurti Public>Resources>Views aplankus naujų modelių/Objektų klasių vaizdams. Šiuo atveju "clients" ir "companies". Daugiskaita, nes modelius sukurė kaip daugiaskaitas!
18. Aplankuose sukurti vaizdus su galūne "blade.php" - Laravel standartas, negalima keisti. Šiuo atveju objektų atvaizdavimui, kūrimui, redagavimui: index.balde.php, create.blade.php ir edit.blade.php" kiekvienai iš klasių/modelių jų aplankuose.

