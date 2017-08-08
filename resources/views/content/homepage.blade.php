@extends('layout.default')

@section('content')
    @include('layout.menu')

<div class="content">

    <div class="container">
        <div class="header">
            <div class="header__header-claim">Okamžitá kontrola informací z registru exekucí</div>

            <form id="main-form" class="form-header" name="form_name" method="post" action="order">
                {{ csrf_field() }}
                <fieldset class="form-header__label_choices">
                    <input class="form-header__input_radio" type="radio" value="person_on" id="person" name="choice" checked>
                    <label class="form-header__label" id="person_label" for="person">Kontrola podle jména</label>

                    <span class="form-header__divider">/</span>

                    <input class="form-header__input_radio" type="radio" value="ic_on" id="ic" name="choice" >
                    <label class="form-header__label" id="ic_label" for="ic">Kontrola podle IČ</label>
                </fieldset>


                <fieldset class="form-header__fs_person">
                    <div class="form-header__block col-lg-3">
                        <label class="form-header__label left-label" for="name">Jméno</label>
                        <input class="form-header__input_text" type="text" id="name" name="name" placeholder="Zde napište jméno" required>
                    </div>

                    <div class="form-header__block col-lg-3">
                        <label class="form-header__label left-label" for="lastname">Příjmení</label>
                        <input class="form-header__input_text" type="text" id="lastname" name="lastname" placeholder="Zde napište příjmení" required>
                    </div>

                    <div class="form-header__block col-lg-3">
                        <label class="form-header__label left-label" for="bday">Datum narození</label>
                        <input class="form-header__input_text" type="text" id="bday" name="bday" placeholder="26. 09. 1978" required>
                    </div>
                </fieldset>

                <fieldset class="form-header__fs_ic" disabled>
                    <div class="form-header__block ico">
                        <label class="form-header__label left-label" for="ico">IČO</label>
                        <input class="form-header__input_text" type="number" id="ico" name="ico" placeholder="Zde napište IČ firmy" required>
                    </div>
                </fieldset>

                <input class="form-header__input_checkbox" type="checkbox" id="terms" name="terms" required>
                <label class="form-header__terms" for="terms">Souhlasím s <a class="form-header__terms_a" id="terms_a" href="#">obchodnimi podmínkami</a></label>

                <input class="button" type="submit" value="Ověřit">
            </form>

            <div id="myModal" class="modal-w">
                <div class="modal-w__content">
                    <div class="modal-w__header">
                        <span class="close">×</span>
                        <h2 class="modal-w__h2">Všeobecné obchodní podmínky</h2>
                    </div>
                    <div class="modal-w__body">
                        <p><div>Všeobecné obchodní podmínky (dále jen „VOP“) společnosti GetData&nbsp;<span style="line-height: 19.200000762939453px;">s.r.o.</span>
                        </div>
                        <p>
                            <br>
                        </p>
                        <h3>I. Základní ustanovení</h3>
                        <div>Tyto VOP upravují vztahy mezi smluvními stranami kupní smlouvy, kdy na jedné&nbsp;<span style="line-height: 19.200000762939453px;">straně je společnost GetData s.r.o., IČ 27102343, se&nbsp;</span><span style="line-height: 19.200000762939453px;">sídlem Roháčova 145/14, Žižkov, 130 00 Praha 3, zapsaná v obchodním rejstříku vedeném&nbsp;</span><span style="line-height: 19.200000762939453px;">Městským soudem v Praze v oddíle C, vložka 96380 jako poskytovatel služby (dále&nbsp;</span><span style="line-height: 19.200000762939453px;">jen „poskytovatel“) a na straně druhé je kupující a/nebo objednatel, který může být i&nbsp;</span><span style="line-height: 19.200000762939453px;">spotřebitelem (dále jen „klient“).</span>
                        </div>
                        <p>
                            <br>
                        </p>
                        <div>V případě, kdy společnost GetData s.r.o. vystupuje jako poskytovatel,&nbsp;</div>
                        <div>poskytuje služby dle své aktuální nabídky jednotlivým klientům dle jejich požadavků&nbsp;</div>
                        <div>za cenu a podmínek uvedených u konkrétní nabídky služby, přičemž se ve vztahu k&nbsp;</div>
                        <div>příslušné smlouvě uplatní tyto VOP, nebude-li uvedeno jinak.</div>
                        <p>
                            <br>
                        </p>
                        <div>Klientem je fyzická osoba nebo právnická osoba.</div>
                        <p>
                            <br>
                        </p>
                        <div>Právní vztahy poskytovatele s klientem, který je fyzickou osobou, výslovně&nbsp;</div>
                        <div>neupravené těmito VOP se řídí příslušnými ustanoveními zák. č. 40/1964 Sb.,&nbsp;</div>
                        <div>občanský zákoník v platném a účinném znění, jakož i předpisy souvisejícími.</div>
                        <p>
                            <br>
                        </p>
                        <div>Právnickou osobou se rozumí:</div>
                        <ul id="bullets">
                            <li>
                                <div><span style="font-family: inherit; font-size: 1rem; line-height: 1.6;">os</span><span style="font-family: inherit; font-size: 1rem; line-height: 1.6;">oba zapsaná v obchodním rejstříku</span>
                                </div>
                            </li>
                            <li>
                                <div>osoba, která podniká na základě živnostenského oprávnění</div>
                            </li>
                            <li>
                                <div>osoba, která podniká na základě jiného než živnostenského oprávnění podle&nbsp;<span style="line-height: 19.200000762939453px;">zvláštních předpisů</span>
                                </div>
                            </li>
                            <li>
                                <div>osoba, která provozuje zemědělskou výrobu a je zapsána do evidence podle&nbsp;<span style="line-height: 19.200000762939453px;">zvláštního předpisu.</span>
                                </div>
                            </li>
                        </ul>
                        <div>Právní vztahy poskytovatele s klientem, který je právnickou osobou, výslovně&nbsp;<span style="line-height: 19.200000762939453px;">neupravené těmito VOP ani smlouvou mezi&nbsp;poskytovatelem a klientem se řídí&nbsp;</span><span style="line-height: 19.200000762939453px;">příslušnými ustanoveními zák. č. 513/1991 Sb., obchodní zákoník ve znění&nbsp;</span><span style="line-height: 19.200000762939453px;">pozdějších předpisů, jakož i předpisy souvisejícími. V případě jakýchkoliv rozdílů&nbsp;</span><span style="line-height: 19.200000762939453px;">mezi VOP a individuální smlouvou, má přednost text smlouvy.</span>
                        </div>
                        <p>
                            <br>
                        </p>
                        <div><strong>Portál ExekuceInfo.cz</strong> je webová prezentace a rozhraní, které je umístěné na&nbsp;<span style="line-height: 19.200000762939453px;">webové adrese www.exekuceinfo.cz.&nbsp;</span><span style="line-height: 19.200000762939453px;">Klient zadáním objednávky prostřednictvím portálu ExekuceInfo.cz potvrzuje, že&nbsp;</span><span style="line-height: 19.200000762939453px;">se seznámil s těmito VOP a že s nimi souhlasí, a to ve znění platném a účinném v&nbsp;</span><span style="line-height: 19.200000762939453px;">momentě odeslání objednávky. Aktuální znění je vždy dostupné v klientské části&nbsp;</span><span style="line-height: 19.200000762939453px;">portálu ExekuceInfo.cz.</span>
                        </div>
                        <p>
                            <br>
                        </p>
                        <h3>II.&nbsp;Kupní smlouva</h3>
                        <div>K návrhu uzavření smlouvy o poskytování služeb dochází odesláním objednávky&nbsp;<span style="line-height: 19.200000762939453px;">na poskytnutí elektronického údaje z CEE na portálu ExekuceInfo.cz. Smlouva&nbsp;</span><span style="line-height: 19.200000762939453px;">o poskytování služeb vzniká odesláním objednávky fyzickou osobou a přijetím&nbsp;</span><span style="line-height: 19.200000762939453px;">objednávky poskytovatelem. Vzniklou smlouvu o poskytování služeb (včetně&nbsp;</span><span style="line-height: 19.200000762939453px;">dohodnuté ceny) lze měnit nebo rušit pouze na základě dohody stran nebo na&nbsp;</span><span style="line-height: 19.200000762939453px;">základě zákonných důvodů.</span>
                        </div>
                        <p>
                            <br>
                        </p>
                        <div>Vztahy a případné spory, které vzniknou na základě smlouvy, budou řešeny&nbsp;<span style="line-height: 19.200000762939453px;">výhradně podle platného práva České republiky a budou řešeny soudy České&nbsp;</span><span style="line-height: 19.200000762939453px;">republiky. Tím nejsou dotčeny případy, kdy klientem bude spotřebitel a bude mít&nbsp;</span><span style="line-height: 19.200000762939453px;">obvyklé bydliště v jiném státě než České republice a volba práva či prorogace soudu&nbsp;</span><span style="line-height: 19.200000762939453px;">nebudou přípustné.</span>
                        </div>
                        <p>
                            <br>
                        </p>
                        <div>Smlouva je uzavírána v českém jazyce. Pokud vznikne pro potřebu kupujícího&nbsp;<span style="line-height: 19.200000762939453px;">překlad textu smlouvy, platí, že v případě sporu o výklad pojmů platí výklad smlouvy&nbsp;</span><span style="line-height: 19.200000762939453px;">v českém jazyce.</span>
                        </div>
                        <p>
                            <br>
                        </p>
                        <div>Uzavřená smlouva je poskytovatelem archivována po dobu nejméně pěti let od jejího&nbsp;<span style="line-height: 19.200000762939453px;">uzavření, nejdéle však na dobu dle příslušných právních předpisů, za účelem jejího&nbsp;</span><span style="line-height: 19.200000762939453px;">úspěšného splnění a není přístupná třetím nezúčastněným stranám. Informace o&nbsp;</span><span style="line-height: 19.200000762939453px;">jednotlivých technických krocích vedoucích k uzavření smlouvy jsou patrné z těchto&nbsp;</span><span style="line-height: 19.200000762939453px;">obchodních podmínek, kde je tento proces srozumitelně popsán.&nbsp;</span>
                        </div>
                        <p>
                            <br>
                        </p>
                        <div>Náklady na použití komunikačních prostředků na dálku (telefon, internet atd.) pro&nbsp;<span style="line-height: 19.200000762939453px;">uskutečnění objednávky jsou v běžné výši, závislé na tarifu telekomunikačních&nbsp;</span><span style="line-height: 19.200000762939453px;">služeb, které klient používá.</span>
                        </div>
                        <p>
                            <br>
                        </p>
                        <h3>III. Bezpečnost a ochrana informací</h3>
                        <div>Poskytovatel prohlašuje, že veškeré osobní údaje jsou důvěrné, budou použity pouze&nbsp;<span style="line-height: 19.200000762939453px;">k uskutečnění plnění smlouvy s klientem a marketingových akcí poskytovatele a&nbsp;</span><span style="line-height: 19.200000762939453px;">nebudou jinak zveřejněny, poskytnuty třetí osobě apod. s výjimkou situace související&nbsp;</span><span style="line-height: 19.200000762939453px;">s distribucí či platebním stykem (sdělení jména a adresy dodání). Poskytovatel&nbsp;</span><span style="line-height: 19.200000762939453px;">postupuje tak, aby subjekt údajů neutrpěl újmu na svých právech, zejména na&nbsp;</span><span style="line-height: 19.200000762939453px;">právu na zachování lidské důstojnosti, a také dbá na ochranu před neoprávněným&nbsp;</span><span style="line-height: 19.200000762939453px;">zasahováním do soukromého a osobního života subjektu údajů. Osobní údaje, které&nbsp;</span><span style="line-height: 19.200000762939453px;">jsou poskytnuty dobrovolně klientem poskytovateli za účelem splnění objednávky&nbsp;</span><span style="line-height: 19.200000762939453px;">a marketingových akcí poskytovatele, jsou shromažďovány, zpracovávány a&nbsp;</span><span style="line-height: 19.200000762939453px;">uchovávány v souladu s platnými zákony České republiky, zejména se zákonem č.&nbsp;</span><span style="line-height: 19.200000762939453px;">101/2000 Sb., o ochraně osobních údajů, v platném a účinném znění. Klient dává&nbsp;</span><span style="line-height: 19.200000762939453px;">poskytovateli svůj souhlas ke shromažďování a zpracování těchto osobních údajů&nbsp;</span><span style="line-height: 19.200000762939453px;">pro účely splnění předmětu uzavírané kupní smlouvy a využití pro marketingové&nbsp;</span><span style="line-height: 19.200000762939453px;">účely prodávajícího (zejm. pro zasílání obchodních sdělení, telemarketing, sms), a to&nbsp;</span><span style="line-height: 19.200000762939453px;">až do doby jeho písemného vyjádření nesouhlasu s tímto zpracováním zaslaným na&nbsp;</span><span style="line-height: 19.200000762939453px;">adresu GetData s.r.o., IČ 27102343, Roháčova 145/14, Žižkov, 130 00 Praha 3. Za&nbsp;</span><span style="line-height: 19.200000762939453px;">písemné vyjádření se v tomto případě považuje i forma elektronická, a to na adresu&nbsp;</span><span style="line-height: 19.200000762939453px;">info@exekuceinfo.cz. Klient má právo přístupu ke svým osobním údajům a právo&nbsp;</span><span style="line-height: 19.200000762939453px;">na jejich opravu včetně práva požadovat vysvětlení a odstranění závadného stavu a&nbsp;</span><span style="line-height: 19.200000762939453px;">dalších zákonných práv k těmto údajům.</span>
                        </div>
                        <p>
                            <br>
                        </p>
                        <h3>IV. Provozní doba</h3>
                        <div>Objednávky přes internetový portál poskytovatele: 24 hodin denně, 7 dní v týdnu</div>
                        <p>
                            <br>
                        </p>
                        <h3>V. Ceny</h3>
                        <div>Všechny ceny jsou smluvní. Na portálu jsou vždy aktuální a platné ceny. Uvedené&nbsp;<span style="line-height: 19.200000762939453px;">ceny jsou bez DPH, které bude vždy účtováno dle aktuální zákonné výše.</span>
                        </div>
                        <p>
                            <br>
                        </p>
                        <h3>VI. Objednávání</h3>
                        <div>Klient objednává služby za ceny platné v době objednání. Klient má možnost se před&nbsp;<span style="line-height: 19.200000762939453px;">provedením objednávky seznámit s konečnou celkovou cenou bez DPH. Tato cena&nbsp;</span><span style="line-height: 19.200000762939453px;">bude uvedena před odesláním objednávky klientem. Po stisku tlačítka „Objednat“ se&nbsp;</span><span style="line-height: 19.200000762939453px;">zadání objednávky klientem považuje za závazné.</span>
                        </div>
                        <p>
                            <br>
                        </p>
                        <h3>VII. Platební podmínky</h3>
                        <div>Poskytovatel akceptuje následující platební podmínky:</div>
                        <ul>
                            <li>
                                <div>platba předem bankovním převodem</div>
                            </li>
                            <li>
                                <div>platba přes internetové rozhraní banky&nbsp;</div>
                            </li>
                            <li>
                                <div>platba kartou MasterCard nebo Visa prostřednictvím internetového platebního&nbsp;<span style="line-height: 19.200000762939453px;">portálu&nbsp;</span>
                                </div>
                            </li>
                        </ul>
                        <p>
                            <br>
                        </p>
                        <h3>VIII. Dodací podmínky</h3>
                        <div>Výstupem z portálu ExekuceInfo.cz se rozumí vygenerovaný report, který je&nbsp;<span style="line-height: 19.200000762939453px;">dostupný na příslušné adrese portálu ExekuceInfo.cz. Dodáním se považuje takový&nbsp;</span><span style="line-height: 19.200000762939453px;">report, který je možné zobrazit. Dodáním se rozumí dostupnost reportu v rozhraní&nbsp;</span><span style="line-height: 19.200000762939453px;">ExekuceInfo.cz bez ohledu na fakt, zda si klient takový report zobrazil.&nbsp;</span><span style="line-height: 19.200000762939453px;">Portál ExekuceInfo.cz je navržen tak, aby byl report zpracován v řádu maximálně&nbsp;</span><span style="line-height: 19.200000762939453px;">desítek minut od objednání služby. GetData s.r.o. nenese jakoukoliv&nbsp;</span><span style="line-height: 19.200000762939453px;">odpovědnost za prodlení ve zpracování reportu, ani negarantuje žádnou maximální&nbsp;</span><span style="line-height: 19.200000762939453px;">dobu, do které bude report zpracován.</span>
                        </div>
                        <p>
                            <br>
                        </p>
                        <h3>IX. Technická a jiná omezení</h3>
                        <div>Informace z portálu ExekuceInfo.cz jsou společností GetData s.r.o.&nbsp;<span style="line-height: 19.200000762939453px;">poskytovány v dobré víře bez jakékoli garance ohledně jejich přesnosti, aktuálnosti&nbsp;</span><span style="line-height: 19.200000762939453px; font-family: inherit; font-size: 1rem;">nebo obsahu, přičemž GetData s.r.o. neodpovídá za jakoukoli&nbsp;</span><span style="line-height: 19.200000762939453px;">škodu, včetně ušlého zisku, ztráty dat nebo jiných ztrát vzniklých z užití portálu&nbsp;</span><span style="line-height: 19.200000762939453px;">ExekuceInfo.cz. Společnost GetData s.r.o. nenese odpovědnost za škodu&nbsp;</span><span style="line-height: 19.200000762939453px;">nebo ztrátu zapříčiněnou odkazem na přesnost, hodnověrnost nebo aktuálnost&nbsp;</span><span style="line-height: 19.200000762939453px;">těchto informací.</span>
                        </div>
                        <p>
                            <br>
                        </p>
                        <div>Společnost GetData s.r.o. neodpovídá za rozhodnutí přijatá klientem&nbsp;<span style="line-height: 19.200000762939453px;">portálu ExekuceInfo.cz na základě získaných údajů a informací z portálu&nbsp;</span><span style="line-height: 19.200000762939453px;">ExekuceInfo.cz. GetData s.r.o. rovněž není odpovědná za vznik jakékoli&nbsp;</span><span style="line-height: 19.200000762939453px;">škody, ztráty, nákladů nebo jiných nároků vzniklých v důsledku nesprávného nebo&nbsp;</span><span style="line-height: 19.200000762939453px;">nepřiměřeného užívání portálu ExekuceInfo.cz.</span>
                        </div>
                        <p>
                            <br>
                        </p>
                        <div>Dále společnost GetData s.r.o. nenese odpovědnost za škody způsobené&nbsp;<span style="line-height: 19.200000762939453px;">vyšší mocí, tj. okolnostmi vylučujícími odpovědnost nebo následkem nesprávného&nbsp;</span><span style="line-height: 19.200000762939453px;">fungování hardwaru či softwaru klienta portálu ExekuceInfo.cz, nesprávného&nbsp;</span><span style="line-height: 19.200000762939453px;">fungování internetového připojení, nebo nesprávného fungování jiných internetových&nbsp;</span><span style="line-height: 19.200000762939453px;">systémů a serverů.</span>
                        </div>
                        <p>
                            <br>
                        </p>
                        <div>Společnost GetData s.r.o. není odpovědna za obsah jiných webových&nbsp;<span style="line-height: 19.200000762939453px;">stránek, ze kterých má klient přístup k portálu ExekuceInfo.cz nebo na které tyto jiné&nbsp;</span><span style="line-height: 19.200000762939453px;">webové stránky odkazují, a nesmí být tudíž považována za odpovědnou za škodu&nbsp;</span><span style="line-height: 19.200000762939453px;">nebo ztrátu, jež tímto klientovi v této souvislosti vznikne.</span>
                        </div>
                        <p>
                            <br>
                        </p>
                        <div>V neposlední řadě společnost GetData s.r.o. není odpovědna za obsah&nbsp;<span style="line-height: 19.200000762939453px;">databází a zdrojů, ze kterých čerpá informace portál ExekuceInfo.cz, a nemůže být&nbsp;</span><span style="line-height: 19.200000762939453px;">tudíž považována za odpovědnou za škodu nebo ztrátu, jež tímto klientovi v této&nbsp;</span><span style="line-height: 19.200000762939453px;">souvislosti vznikne.</span>
                        </div>
                        <p>
                            <br>
                        </p>
                        <h3>X. Závěrečná ustanovení</h3>
                        <div>Tyto Všeobecné obchodní podmínky jsou platné a účinné od 1.8.2014. Poskytovatel&nbsp;<span style="line-height: 19.200000762939453px;">si vyhrazuje právo změnit VOP bez předchozího upozornění.</span>
                        </div>
                        </p>

                    </div>
                    <div class="modal-w__footer">
                        <button class="button close-btn">Zavřít</button>
                    </div>
                </div>
            </div>

            <script>

            </script>

        </div>

    </div>

    <div class="card">
        <div class="container">
            <h1 class="card__headline">Výhody kontroly online</h1>

            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="subsection col-md-12">
                            <div class="subsection__header">Oficiální registr</div>
                            <div class="subsection__content">Data ze systému spravovaného přímo Exekuterskou komorou. Do databáze zapisují samotní exekutoři.</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="subsection col-md-12">
                            <div class="subsection__header">Bez registrace</div>
                            <div class="subsection__content">Ke kontrole v registru není nutná žádná registrace. Kontrolovat může každý.</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="subsection col-md-12">
                            <div class="subsection__header">Zabezpečená platba</div>
                            <div class="subsection__content">Pro platby se používá zabezpečené a certifikovaná platební brána PayU.</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="subsection col-md-12">
                            <div class="subsection__header">Okamžitý výsledek</div>
                            <div class="subsection__content">Výsledky kontrol jsou okamžitě k dispozici. Na informace nečekáte.</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="graph_header">Výsledek kontrol za posledních 24 hodin</div>
                    <div id="piechart_3d"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="container">
            <h1 class="card__headline">Ukázka výsledku</h1>

            <div class="row">
                <div class="subsection col-md-6">
                    <div class="subsection__header subsection__header-alt ">Bez exekuce</div>
                    <div class="subsection__content subsection__content-alt_fixed">Máte jistotu, že kontrolovaný subjekt je bez exekuce.</div>

                    <img class="screenshot" src="{{ URL::asset("img/screen1.jpg") }}">
                </div>

                <div class="subsection col-md-6">
                    <div class="subsection__header subsection__header-alt">S exekucí</div>
                    <div class="subsection__content subsection__content-alt_fixed">Výsledek obsahuje jeden nebo více exekučních případů a to včetně detailů (dlužná částka, exekutor, atd.).</div>

                    <img class="screenshot" src="{{ URL::asset("img/screen2.jpg") }}">
                </div>
            </div>

            <button class="button bot">Nahoru</button>
        </div>
    </div>

</div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['S exekucí',     78],
                ['Bez exekuce',      22],
            ]);

            var options = {
                chartArea:{
                    top: 30,
                    bottom: 100
                },
                title: 'Výsledek kontrol za posledních 24 hodin',
                titlePosition: 'none',
                titleTextStyle: {
                    color: '#357dcf',
                    fontName: 'Open Sans',
                    fontSize: '19'
                },
                is3D: true,
                backgroundColor: {
                    fill:'#fdfdfd'
                },
                legend : {
                    position:"bottom",
                    alignment:'center'
                },
                legendTextStyle: {
                    color: '#357dcf',
                    fontName: 'Open Sans',
                    fontSize: '16'
                },
                animation: {
                    startup : true,
                    duration: 1000,
                    easing: 'out'
                },
                'tooltip' : {
                    trigger: 'none'
                }
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
@stop