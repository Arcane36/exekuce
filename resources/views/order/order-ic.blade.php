@extends('layout.default')

@section('content')
    @include('layout.menu-order')
    <div class="content greybg">

        <div class="card fixed">
            <div class="container">

                <div class="order">
                    <ul class="order__progress">
                        <li class="order__subprogress order__subprogress--info active">1. Objednávka</li>
                        <li class="order__subprogress order__subprogress--payment">2. Typ platby</li>
                        <li class="order__subprogress order__subprogress--payment">3. Platba</li>
                        <li class="order__subprogress order__subprogress--result">4. Výsledek</li>
                    </ul>

                    <div class="order__box">
                        <h1 class="order__headline">Objednávka kontroly v registru</h1>

                        <div class="row">
                            <form class="form_order">

                                <div class="dialog col-md-6">

                                    <div class="dialog__header">Kontrola obsahuje</div>
                                    <ul class="dialog__section">
                                        <li class="dialog__subsection">Aktuální výsledek</li>
                                        <li class="dialog__subsection">Zaslání kontroly do mailu</li>
                                        <li class="dialog__subsection">Výpis všech případů</li>
                                        <li class="dialog__subsection">Možnost detailního výpisu</li>
                                    </ul>

                                </div>

                                <div class="dialog col-md-6">
                                    <div class="form_order__header">Údaje o prověřované osobě</div>

                                    <input class="form_order__input" type="number" id="ico" placeholder="Zde napište IČ firmy" value="{{session('results')[0]}}" required>
                                </div>

                                <div class="col-md-12">
                                    <div class="price">
                                        <div class="price__text">Cena za výpis - <strong>218 Kč</strong>
                                            <div class="tip"><span class="tooltiptext">Nahlížení do systému evidence exekucí ČR je dle vyhlášky č. 329/2008 Sb., o centrální evidenci exekucí, zpoplatněno</span> </div>
                                        </div>
                                        <div class="price__disclaimer">Nejsme plátci DPH</div>
                                    </div>
                                    <button class="button">Pokračovat</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@stop