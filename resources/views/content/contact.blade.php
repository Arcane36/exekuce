@extends('layout.default')

@section('content')
    @include('layout.menu')
<div class="content">

    <div class="card">
        <div class="container">

            <h1 class="card__headline">Kontakt</h1>

            <div class="row">
                <div class="subsection col-sm-4">
                    <img class="faq_icon" src="{{ URL::asset("img/Phone Filled.png") }}">

                    <div class="subsection__header subsection__header-alt ">Telefon</div>
                    <div class="subsection__content subsection__content-alt"><a href="tel:+420722587433">+420 722 587 433</a></div>
                </div>

                <div class="subsection col-sm-4">
                    <img class="faq_icon" src="{{ URL::asset("img/New Post Filled.png") }}">

                    <div class="subsection__header subsection__header-alt">E-mail</div>
                    <div class="subsection__content subsection__content-alt"><a href="mailto:info@exekuceinfo.cz">info@exekuceinfo.cz</a></div>
                </div>

                <div class="subsection col-sm-4">
                    <img class="faq_icon" src="{{ URL::asset("img/Marker Filled.png") }}">

                    <div class="subsection__header subsection__header-alt">Adresa</div>
                    <div class="subsection__content subsection__content-alt"><a href="https://www.google.cz/maps/place/Roháčova+145%2F14,+130+00+Praha+3-Žižkov">Roháčova 145/1 <br/>130 00 <br/>Praha 3</a></div>
                </div>
            </div>

            <div class="row">

                <form class="contact" name="form_contact">

                    <div class="col-md-6">
                        <label class="contact__label" id="label_name" for="name">Vaše jméno</label>
                        <input class="contact__input_text" type="text" id="name" placeholder="Jméno" required>
                    </div>

                    <div class="col-md-6">
                        <label class="contact__label" id="label_mail" for="mail">Váš e-mail</label>
                        <input class="contact__input_text" type="text" id="mail" placeholder="@" required>
                    </div>

                    <div class="col-md-12">
                        <label class="contact__label" id="label_message" for="message">Vaše zpráva</label>
                        <textarea class="contact__textarea" type="text" id="message" placeholder="Napište nám…" required></textarea>
                    </div>

                    <input class="button" type="submit" value="Odeslat">
                </form>

            </div>

            <div id="map"></div>

            <script>
                function initMap() {

                    var prague = {lat: 50.0865641, lng: 14.45435150000003};
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 17,
                        center: prague
                    });
                    var marker = new google.maps.Marker({
                        position: prague,
                        map: map,
                        animation: google.maps.Animation.DROP,
                        title: 'Exekuceinfo.cz'
                    });
                    infowindow = new google.maps.InfoWindow({
                        content: '<strong>Exekuceinfo.cz</strong><br>Roháčova 145/14, Praha, Česká Republika<br>'
                    });
                    google.maps.event.addListener(marker, 'click', function() {
                        infowindow.open(map, marker);
                    });
                    infowindow.open(map, marker);


                }
            </script>
            <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBT8HWMLLxxk0NUpaAaCsA2TE5eslBWnFQ&callback=initMap">
            </script>
        </div>
    </div>

</div>
@stop