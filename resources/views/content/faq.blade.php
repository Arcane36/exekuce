@extends('layout.default')

@section('content')
    @include('layout.menu')
<div class="content">

    <div class="card">
        <div class="container">

            <h1 class="card__headline">O službě</h1>

            <div class="row">
                <div class="subsection col-md-4">
                    <img class="faq_icon" src="{{ URL::asset("img/Contacts Filled-100.png") }}">

                    <div class="subsection__header subsection__header-alt ">1. Objednávka</div>
                    <div class="subsection__content subsection__content-alt">Zadejte jméno, příjmení a datum narození hledaného subjektu. Pokud se jedná o právnickou osobu, vyplňuje se IČ.</div>
                </div>

                <div class="subsection col-md-4">
                    <img class="faq_icon" src="{{ URL::asset("img/Money Filled-100.png") }}">

                    <div class="subsection__header subsection__header-alt">2. Platba</div>
                    <div class="subsection__content subsection__content-alt">Platbu lze provést přes spolehlivou platební bránu PayU nabízející různé možnosti platby. Jednorázová kontrola stojí 218 Kč vč. DPH a po obdržení platby bude okamžitě zobrazen výsledek.</div>
                </div>

                <div class="subsection col-md-4">
                    <img class="faq_icon" src="{{ URL::asset("img/News Filled-100.png") }}">

                    <div class="subsection__header subsection__header-alt">3. Výsledek</div>
                    <div class="subsection__content subsection__content-alt">Pokud je kontrolovaný subjekt nalezen v registru Centrální evidence exekucí, získáte informace o vedeném exekučním řízení. Pokud je kontrola negativní, subjekt nemá v CEE žádnou evidovanou exekuci.</div>
                </div>
            </div>

            <h1 class="card__headline">Otázky a odpovědi</h1>
            <div class="row">
                <div class="col-md-12">

                    <button class="accordion active">Proč provádět kontroly na Exekuceinfo.cz?</button>
                    <div class="panel show">
                        <p class="panel__content">Hlavní výhodou je zabezpečená platební brána PayU, kterou využívají největší obchodní portály v ČR. Nemusíte tedy nikam chodit a výsledek máte ihned. Výsledky jsou přesné a aktuální k datu a času prováděné kontroly.</p>
                    </div>

                    <button class="accordion">Proč jsou dotazy zpoplatněny?</button>
                    <div class="panel">
                        <p class="panel__content">Nahlížení do systému evidence exekucí ČR je dle vyhlášky č. 329/2008 Sb., o centrální evidenci exekucí, zpoplatněno a to za každý pokus o poskytnutí elektronického údaje z centrální evidence exekucí. Tedy za zobrazení podrobností konkrétní exekuce i za výpis zda daný subjekt má či nemá exekuci.</p>
                    </div>

                    <button class="accordion">Odkud čerpá data portál Exekuceinfo.cz?</button>
                    <div class="panel">
                        <p class="panel__content">Data jsou čerpána výhradně ze systému Centrální Evidence Exekucí ČR (CEE). Centrální evidence exekucí je veřejný seznam, který je veden, provozován a spravován Exekutorskou komorou České republiky podle zákonného zmocnění daného ustanovením § 125 zákona č.120/2001 Sb.</p>
                    </div>

                    <button class="accordion">Jaké získám výsledky po zadání dotazu a co obsahuje detail exekuce?</button>
                    <div class="panel">
                        <p class="panel__content">Po zadání dotazu zjistíte, zda na daný subjekt je či není vedena exekuce. Detail samotný obsahuje: označení soudu, který nařídil exekuci, spisovou značka soudu, který nařídil exekuci, jméno exekutorského úřadu, datum vydání usnesení, peněžitou povinnost, pravidelně splácenou částku, nepeněžitou povinnost, popis, označení povinných osob.</p>
                    </div>

                    <button class="accordion">Kdy dochází k vymazání údajů z Centrální evidence exekucí?</button>
                    <div class="panel">
                        <p class="panel__content">Údaje o exekuci jsou z CEE vymazány 15 dní poté, co bylo exekuční řízení zcela skončeno (vymožení pohledávky, pravomocné zastavení exekuce...), resp. poté, co se o skončení soudní exekutor dozvěděl.</p>
                    </div>

                    <button class="accordion">Co v Centrální evidenci exekucí nenajdu?</button>
                    <div class="panel">
                        <p class="panel__content">CEE neobsahuje údaje o exekucích (výkonech rozhodnutí) vedených soudy, orgány státní správy a samosprávy, finančními orgány či zdravotními pojišťovnami.</p>
                    </div>

                    <button class="accordion">Kdo zřizuje Centrální evidenci exekucí?</button>
                    <div class="panel">
                        <p class="panel__content">Centrální evidence exekucí je veřejný seznam, který je veden a provozován Exekutorskou komorou ČR podle exekučního řádu a vyhlášky Ministerstva spravedlnosti. Do CEE zapisují exekutoři pověření provedením exekuce pravomocná usnesení soudu o nařízení exekuce (u řízení zahájených do 31.12.2012) a vyrozumění o zahájení exekuce po zapsání doložky provedení exekuce do rejstříku zahájených exekuce (u řízení zahájených od 1.1.2013), pravomocná usnesení soudu o zastavení a o odkladu exekuce a další stanovené údaje a to podle obsahu jimi vedeného spisu.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
@stop