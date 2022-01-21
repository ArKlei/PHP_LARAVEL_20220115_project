# 20220115_project
 First step of complex project creation

********************************************* CRUD kūrimas: *********************************************
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

********************************************* SELECT OPTIONS SU PHP FOR *********************************************

1. Create.blade.php ir edit.blade.php sukurti select option's su for, bet mišrainės principu - sumaišant php ir html kodus - back-end dalį įterpiant į front-end'ą:
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
        +
        Nepamiršti prie return pridėti reikšmių masyvo perdavimą "['select_values'=>$select_values]" - "return view('clients.create',['select_values'=>$select_values]);"
4. Client>Create.blade.php faile įstatome foreach su sukurto reikšmių masyvo nuskaitymu.
Pvz.:  @foreach ($select_value as $value)
                 <option value="{{ $value }}">{{$value}}</option>
       @endforeach
5. Tą patį for'ą įkeliame į Edit metodą, tik nepamirštam kad return'e neištrinti ['client' => $client] - turėjau klaidą, tai edit.blade.php nesuprato kintamojo $client, nes jis create metode nepaduodamas.
6. Tą patį foreach įkeliame į edit.blade.php failo select'ą. Gali kartotis kintamasis $select_values masyvas. Nesikerta su create metodo kontroleryje ir create.blade.php kintamuoju (skirtingi adresai-route apsaugo).
7. Dėmesio - perkeliant for'ą iš create į edit neiškreipti adresų - sugebėta client.create pakeist į client.edit, o edit.blade.php nerado kintamojo $client, nes jis paduodamas tik metode edit. 20 min nervų :) 
ĮRAŠYTI Į GITHUB - SU COMMIT KĄ ATLIKAU

********************************************* MODELIŲ SĄSAJOS KŪRIMAS *********************************************
1. Kontroleryje ClientController prirašome "use App\Models\Company;"
2. Užkomentuojam paprastą kintamajį ir for'ą jam užpildyti 
    //$select_values = array();
    //for ($i = 1; $i < 251; $i++) {
    //    $select_values[] = $i;
    //}
3.Į Create metodą įrašome kintamajam $select_values = Company::all(); - paimame visą masyvą iš duomenų bazės lentelės Companies.
4.Į edit.blade.php failą įnešame pakeitimą tik tokį, kad vietoj užvadinimo foreach tiesiog $value, panaudojame $company, t.y. nuorodą į objektų klasę/modelį ir paimtą visą duomenų masyvą.
5.Išvedame klasės savybes: $company->id ir $company->name vietoj $value, t.y. masyvo elementų id ir name reikšmes.
6.Pakeičiame, kad select rodytų kompanijų pavadinimus, jeigu jų id sutampa su kliento company_id, naudojant if'ą ir else (rodyti kompanijos id, jeigu id nesutampa - pvz. kompanijų pavadinimų mažiau, negu kliento company_id yra įvesta. Tada rodo pirmą pavadinimą iš sąrašo).

********************************************* Factory gamyba *********************************************
1. ClientFactory.php metode Definition turime sudaryti brėžinį, pagal kurį gaminsim klientus - jų duomenis.
2. Ji gražina masyvą return [];, tad į vidų įrašome duomenų bazės klasės lentelės Clients stulpelių pavadinimus: name, surname, username, company_id, image_url.
Pvz., return [
            'name' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'username' => $this->faker->userName(),
            'company_id' => $this->faker->numberBetween(1,100),
            'image_url' =>$this->faker->imageUrl()

        ];
 3. Paleisti ClientSeeder.php dokumentą.
 4. Metode run, įrašyti komandą klasei Client paleisk factory, sukurk 30 objektų, sukurk - 
    Client::factory()->count(30)->create();
 6. Neįsirašo viršuje automatiškai modelis, tad rankiniu būdu įrašyti use App\Models\Client;
 7. DatabaseSeeder.php unikalus tuo, kad ten galima paleisti su "php artisan migrate:fresh --seed" ir bet koks migracinis pakeitimas įsirašys automatiškai į duomenų bazę.
 8. Įrašome tą patį use ir metodo run komandą į tas pačias vietas databaseSeeder.php faile.
 9. Termianle paleidžiame php artisan migrate:fresh --seed
 10. Patikrinti ar nėra klaidų ir duomenų bazės lentelėje pasižiūrėti ar susikūrė duomenys.
 11. Company klasei padaryti tą patį, Factory faile run metode: 
 public function run()
    {
        'name' => $this->faker->company(),
        'type' =>'Juridinis asmuo',
        'description' =>$this->faker->paragraph(15)
    }
    ! svarbu faile 2022_01_15_080803_create_companies_table.php pakeisti duomenų tipą į tekstą: $table->text('description');, kitaip netilps paragraph(15) ir mes erorr'ą
    
 12. Seeder faile nuorodą į modelį ir :
 public function run()
    {
        Company::factory()->count(10)->create();
    }
 13. DatabaseSeeder.php jau įrašoma:
 public function run()
    {
        Client::factory()->count(30)->create(),
        Company::factory()->count(10)->create()
    }
 14. Veiks ir taip, bet užkomentuojam run DatabaseSeeder faile.
 15. Paleisim per call() funkciją, įrašydami 
 $this->call([
            ClientSeeder::class,
            CompanySeeder::class
 ]); t.y. yra DatabaseSeeder klase, paleisk metodą run, paleisk ClientSeeder ir CompanySeeder klases. Jos pasileidžia per Seeder failus, run metodus kreipiasi į Factory failus,    kur per run paleidžia tai ką reikia sukurti.
 SVARBU: teisingi kableliai ir kabliataškiai.
 ĮRAŠYTI Į GITHUB - SU COMMIT KĄ ATLIKAU 
 
 ********************************************* LENTELIŲ RYŠIO SUKŪRIMAS ********************************************* 
 1. 2022_01_15_080633_create_clients_table.php lentelėje užduodame Client lentelės stulpeliui company_id ryšį su kitos Company lentelės id stulpeliu
   $table->foreign('company_id')->references('id')->on('companies');
 2. Svarbu pirma sukurti stulpelius, o tik poto kurti ryšius.
 3. Svarbu daugiskaita, nes modeli vienskaita, bet lentelės yra daugiskaita.
 4. Pakeisti migracijos client failo pavadinimą, kad taptų paskutinis - loginė seka. Bet nesumažinti simbolių kiekio pavadinime - laravel nematys migracijos.
 5. Gerai būtų kurti modelius ta seka, kuria ryšį kursime.
 6. Paleidžiame php artisan migrate:fresh ir tikriname klaidas
 7. PhPMyAdmin duomenų bazės info gale, Designer skiltyje patikriname ryšius.
 8. ĮRAŠYTI Į GITHUB - SU COMMIT KĄ ATLIKAU 
 
 ********************************************* KLIENTO KOMPANIJOS ATVAIZDAVIMAS - one to one *********************************************
 1. Jeigu norime atvaizduoti kompanijos pavadinimą klientui, tai kuriame modelyje Client metodą - public function clientCompany () {
        return $this->belongsTo(Company::class, 'company_id','id');
    }
 2. Klientų index.blade.php faile pakeičiame <!--<td>{{$client->company_id}}</td>--> į <td>{{$client->clientCompany->name}}</td>, su nuoroda į Companies lentelės stulpelį "name"
 3. Patikrinti ar veikia. Teko pakeisti atsitiktinio company_id generavimo metodą į numberBetween(1,10), nes numberBeetween sukurdavo didesnius ID negu yra kompanijų ir metė erorrą.
                                                        One to many
 1. Company modelyje įrašome metodą public function companyClients () {
        return $this->hasMany(Client::class, 'company_id','id');
    }
 2. Metodo pavadinime koduojame one to many, Company yra on, Clients - many (daugiskaita).
 3. belongTo turi lentelė, kuri turi ryšio stulpelį, hasMany- kuri neturi.
 4. Companies show.blade.php faile įkėlėme foreach masyvui atvaizduoti:
 <table class="table table-stripped">
          <tr>
            <td>ID</td>
            <td>Name</td>
            <td>surname</td>
            <td>Image</td>
          </tr>
          @foreach ($company->companyClients as $client)
          <tr>
            <td>{{$client->id}}</td>
            <td>{{$client->name}}</td>
            <td>{{$client->surname}}</td>
            <td>{{$client->image_url}}</td>
          </tr>
          @endforeach
        </table>
   5. Clients show.blade.php sukurtas img src atvaizduoti klientų nuotraukas.
   6. Įkelta apsauga, jeigu kompanija neturėtų nei vieno kliento - išmestų atitinkamą pranešimą.
   @if(count($company->companyClients) == 0)
          <p>No Clients in this Company</p>
        @else
    7.Companies show.blade.php sukurtas img src atvaizduoti kompanijos klientų nuotraukas.
    8.Ir padaryta galimybė ištrinti klientą per delete:
    <td>
       <form method="post" action='{{route('client.destroy',[$client])}}''>
       @csrf
       <button class="btn btn-danger" type="submit">Delete</button>
       </form>
    </td>
   ĮRAŠYTI Į GITHUB - SU COMMIT KĄ ATLIKAU
    9. Įkelta apsauga neleisti ištrinti kompanijo jeigu ji turi klientų - į Company kontrolerį, metodą destroy
      $clients = $company->companyClients; // clientu masyvas
        if(count($clients) != 0) {
            return redirect()->route('company.index')->with('error_message', 'Delete is not possible because company has clients');
        }
    10. Į Companies index.blade.php įkeliame sesijos eroor pranešimą apie bandymą ištrinti kompaniją, turinčią klientus
    @if (session()->has('error_message'))
        <div class="alert alert-danger">
            {{session()->get('error_message')}}
        </div>   
    @endif
                                            
    11. įkeliame sesijos ir success message : 
    @if (session()->has('success_message'))
        <div class="alert alert-success">
            {{session()->get('success_message')}}
        </div>   
    @endif 
    ĮRAŠYTI Į GITHUB - SU COMMIT KĄ ATLIKAU
                                                                                                                                 
                                                                                                                                
                                                                          
  
        
 







