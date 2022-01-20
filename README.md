# 20220115_project
 First step of complex project creation

******************************************* CRUD kūrimas: **********************************************************************************
1. Sukurti projektą: New Terminal>composer create-project laravel/laravel projekto_pavadinimas.
2. Patikrinti ar viskas susikūrė, ar atsirado projektas + įkelti į github
3. Įeiti į projektą per cd projekto_pavadinimas
4. Per PhPMyAdmin sukurti duomenų bazę "projekto_pavadinimas ir nustatyti šriftą utf8mb4_unicode_ci + "create"
5. Faile ".env" 14 eilutėje pakeisti "laravel" į "projekto_pavadinimas"
6. Direktorijos "Config" faile "Database.php" 60 eilutėje pakeisti "null" į "'InnoDB'", su viengubomis kabutėmis!
7. Paleisti projekto vykdymą/serverį per "php artisan serve"
8. Terminalo viršutiniame dešiniajame kampe įsitikinti, kad paleistas tik vienas projektas. Esant dviems, geriau išvis visus uždaryti, iškviesti naujai terminalą "New Terminal", įeiti į direktoriją cd "projekto_pavadinimas" ir paleisti "php artisan serve".
9. Naršyklėje "public" direktorijoje paleisti "index.php" ir įsitikinti ar pasileido projektas - nebūtinas, už-tenka php artisan serve
ĮRAŠYTI Į GITHUB - SU COMMIT KĄ ATLIKAU
10. Sukurti modelį/-ius terminale panaudojus "php artisan make:model pavadinimas --all" (vienaskaita!). Būtinai prirašyti "--all", kitaip nesukurs visko.
11. Turi būti viskas žaliai terminale
12. Pasitikrinti ar "App>Http>Controllers" aplanke susikūrė PavadinimasController.php ir App>Models atsirado modelis Pavadinimas.php?
13. Patikriname ar "App>Database>migrations" aplanke atsirado Metai_menuo_diena_numeris_create_pavadinimas(daugiskaita)_table.php failas? Kiekvienam modeliui!
ĮRAŠYTI Į GITHUB - SU COMMIT KĄ ATLIKAU
14. Šiuose failuose, metode "public function up() papildome "Schema::create('pavadinimas',function (Blueprint $table) {
norimomis lentelėmis kaip objekto savybių rinkiniu, nurodant duomenų tipą ir lentelės stulpelio pavadinimą, pvz. $table->string('name'), $table->bigInteger('company_id') arba $table->unsignedBigInteger }); - "unsigned" gali būti tik teigiami skaičiai! - pagal užduotį, kokių savybių reikia ir kurios yra duomenų bazės lentelių stulpeliuose. Per kablelį galima nurodyti kiek simbolių naudoti, pvz., string('descriprtion',255) - galima apriboti!  
15. Paleisti "php artisan migrate:fresh", prieš tai įsitikinus ar aplamai paleistas xampp!. Per PhPMyAdmin, duombazės lentelėse per "Structure" galima pamatyti kas įsirašė: "ženklų apribojimas, unsigned, kt...
16. Per PhPMyAdmin patikrinti ar duomenų bazės (projekto pavadinimas) lentelės (pavadinimai atitinka sukurtus modelius) atsirado stulpeliai su užduotais pavadinimais ir duomenų tipais "Schema" metode.
ĮRAŠYTI Į GITHUB - SU COMMIT KĄ ATLIKAU
17. Routes> web.php sukuriame route grupę objektų klasėms Clients ir Companies, kiekvienoje nurodant route'us visiems metodams: create, store, edit, update, show, destroy. Galima nukopinti iš ankstesnių projektų.
18. Svarbu nurodyti vardus kaip "->name('modelioPavadinimasVienaskaita.metodas') - pvz. ->name('client.create'), kad nereiktų nurodyti ilgo kontrolerio kelio, pvz. 'App\Http\Controllers\ClientController@create' + nueiti į kontrolerių direktoriją (App\Http\Controllers) ir pasitikrinti ar tokie patys kontrolerių pavadinimai!
19. Metodams, kai duomenys siunčiami į duomenų bazę ir yra saugiau, naudojamas metodas GET (Laravel standartas), kai gaunami iš jos - POST.
20. Pasitikrinti ar pabaigoje neišsitrynė ")};" ir tai turi uždaryti kiekvieno modelio kodo dalį!
21. Tai parodytų paleistas php artisan migrate:fresh - klaidą ParseError ir "{", kad atidaryta, bet neuždaryta apačioje. Pakartoti ir įsitikinti, kad nėra errorų.
ĮRAŠYTI Į GITHUB - SU COMMIT KĄ ATLIKAU
22. Sukurti Public>Resources>Views aplankus naujų modelių/Objektų klasių vaizdams. Šiuo atveju "clients" ir "companies". Daugiskaita, nes modelius sukurė kaip daugiaskaitas! Galima vieno modelio blade failus nukopijuoti į kito modelio aplnaką, nes vistiek jie identiški: create, edit, show, index...  
23. Aplankuose sukurti vaizdus su galūne "blade.php" - Laravel standartas, negalima keisti. Šiuo atveju objektų atvaizdavimui, kūrimui, redagavimui: index.balde.php, create.blade.php ir edit.blade.php" kiekvienai iš klasių/modelių jų aplankuose.
ĮRAŠYTI Į GITHUB - SU COMMIT KĄ ATLIKAU
24. App>Http>Controllers aplanko sukurtų modelių/objektų klasių controller'iuose surašyti standartiniuose Laravel metoduose nuorodas į vaizdus (return redirect()->route('modelis.vaizdo_paskirtis'), pvz.  return redirect()->route('client.index'). Taip pat, užklausas į/iš duomenų bazės lentelių pagal objektinio programavimo principus $this->savybė, pvz. $client(klasės objektas)->name(objekto savybė) = $request (duok)->client(klasė)->name(savybė).
25. Svarbu nesupainioti daugiskaitų su vienaskaitomis ir atsižvelgti kaip vienaskaitą laravel pats keičia į daugiskaitą ir kaip pats rašai.
26. Svarbu kad savybės, jeigu kopijuojamos užklausos iš kitų projektų, atitiktų lentelių stulpelius ir pavadinimus.
27. Atlikti php artisan migrate:fresh pasitikrinti klaidas
28. Controller'yje svarbu nesupainioti vienskaitos su daugiskaita, pvz., return view('companies.index',['companies' => $companies]);. Prieš index eina daugiskaita, taip kaip užvadintas views aplankalas modeliui. 
29. Atlikti php artisan migrate:fresh pasitikrinti klaidas
30. Controlleriuose prie store nesuveikia StoreRequestCompany, tada išimti StoreRequest dalį ir viršuje įkelti biblioteką use ... Request
ĮRAŠYTI Į GITHUB - SU COMMIT KĄ ATLIKAU
31. Sukurti inputus create.blade.php vaizduose. Galima paimti iš senojo projekto, sutvarkyti submit'ų/action'ų adresus/route 'create.company', input'ų name'us 'company_name' (ne visada gali suveikti du brūkšniai apačioje - 'client_company_id') ir t.t., tik atsižvelgti į vienaskaitas ir daugiskaitas! Pakeisti title, h1. Patikrinti užduotus input'į tipus: "text, number,"  Galima numatyti laukelių reikšmę per value="Įvesk pavadinimą" arba iš duomenų bazės per foreach/if ištraukti norimą objekto savybės reikšmę, kurį norime redaguoti - daugiau edit/blade.php failui tai taikoma! Sutikriname su kontrolerių metoduose esančiais vaidais! Pvz. name="client_name" inpute su $client->name = $request->client_name; kontroleryje
ĮRAŠYTI Į GITHUB - SU COMMIT KĄ ATLIKAU
32. Sukurti edit vaizduose input'us ir patikrinti controlleriuose tą pačią request'ų problemą - 30 punktas
ĮRAŠYTI Į GITHUB - SU COMMIT KĄ ATLIKAU
33. Sukurti atvaizdavimą iš duomenų bazės index.blade.php bylose. Svarbu atkreipti dėmesį į daugiskaitos rašymą, pvz. companIEs, kad nesigautų companYs. Be to, raidžių supainiojimas vietomis, pvz comapny
ĮRAŠYTI Į GITHUB - SU COMMIT KĄ ATLIKAU
34. Sukurti show.blade.php vaizdus atvaizuoti konkrečius klientus ir kompanijas. Svarbu atkreipti dėmesį ar duomenų bazėje yra nors vienas įrašas, kitaip rodys 404.
ĮRAŠYTI Į GITHUB - SU COMMIT KĄ ATLIKAU

********************************************* SELECT OPTIONS SU PHP FOR *******************************************************************

1. Create.blade.php ir edit.blade.php sukurti select option's su for, bet mi6rain4s principu - sumaišant php ir html kodus - back-end dalį įterpiant į front-end'ą:
Pvz.: Company_ID: 
       <select class="form-control" name="client_company_id" value=''>
               <option class="text-secondary" value="{{$client->company_id}}">
                        {{$client->company_id}}
                     @for ($i = 1; $i < 251; $i++)
                        <option value="{{ $i }}">{{$i}}</option> 
                     @endfor
      </select>
Pvz.: <select class="form-control" name="client_company_id">
               <option value="0" class="text-secondary" style="grey">Company ID</option>
                    @for ($i = 1; $i < 251; $i++)
                      <option value="{{ $i }}">{{$i}}</option> 
                    @endfor
      </select>
2. Užkomentinam tai, nes nėra gera praktika.
3. Į kontrolerį ClientController, Create metodą perkeliam for'ą. Prieš tai sukurdami kintamąjį - masyvą, į kurį talpinsime reikšmes iš for'o - $i.
   Pvz.: $select_values = array();
        for ($i = 1; $i < 251; $i++) {
            $select_values[] = $i;
        }
4. 





