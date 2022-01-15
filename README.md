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
19. Routes> web.php sukuriame route grupę objektų klasėms Clients ir Companies, kiekvienoje nurodant route'us visiems metodams: create, store, edit, update, show, destroy.
20. Svarbu nurodyti vardus kaip "->name('modelioPavadinimasVienaskaita.metodas') - pvz. ->name('client.create'), kad nereiktų nurodyti ilgo kontrolerio kelio, pvz. 'App\Http\Controllers\ClientController@create'.
21. Metodams kai duomenys siunčiami į duomenų bazę ir yra saugiau, naudojamas metodas GET (Laravel standartas), kai gaunami iš jos - POST.
22. Pasitikrinti ar pabaigoje neišsitrynė )};
23. Tai parodytų paleistas php artisan migrate:fresh - klaidą ParseError ir "{", kad atidaryta, bet neuždaryta apačioje. Pakartoti ir įsitikinti, kad nėra errorų.
 POST.
24. App>Http>Controllers aplanko sukurtų modelių/objektų klasių controller'iuose surašyti standartiniuose Laravel metoduose nuorodas į vaizdus (return redirect()->route('modelis.vaizdo_paskirtis'), pvz.  return redirect()->route('client.index'). Taip pat, užklausas į/iš duomenų bazės lentelių pagal objektinio programavimo principus $this->savybė, pvz. $client(klasės objektas)->name(objekto savybė) = $request (duok)->client(klasė)->name(savybė).
25. Svarbu nesupainioti daugiskaitų su vienaskaitomis ir atsižvelgti kaip vienaskaitą laravel pats keičia į daugiskaitą ir kaip pats rašai.
26. Svarbu kad savybės, jeigu kopijuojamos užklausos iš kitų projektų, atitiktų lentelių stulpelius ir pavadinimus.
27. Atlikti php artisan migrate:fresh pasitikrinti klaidas
28. Controller'yje svarbu nesupainioti vienskaitos su daugiskaita, pvz., return view('companies.index',['companies' => $companies]);. Prieš index eina daugiskaita, taip kaip užvadintas views aplankalas modeliui. 
29. Atlikti php artisan migrate:fresh pasitikrinti klaidas
30. Controlleriuose prie store nesuveikia StoreRequestCompany, tada išimti StoreRequest dalį ir viršuje įkelti biblioteką use ... Request
31. Sukurti inputus create.blade.php vaizduose.
32. Sukurti edit vaizduose input'us ir patikrinti controlleriuose tą pačią request'ų problemą - 30 punktas
33. Sukurti atvaizdavimą iš duomenų bazės index.blade.php bylose. Svarbu atkreipti dėmesį į daugiskaitos rašymą, pvz. companIEs, kad nesigautų companYs. Be to, raidžių supainiojimas vietomis, pvz comapny





