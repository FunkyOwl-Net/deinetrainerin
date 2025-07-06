@extends('layouts.app')

{{--
Styleguide
-----------
Primary Color: #e51b24
Secondary Color: #1f2937
Buttons: class="bg-primary text-white px-4 py-2 rounded"
Cards: class="bg-white shadow rounded p-6"
--}}

@section('content')
<section id="hero" class="slideshow relative text-white">
    <div class="slBg" style="background-image:url('/img/jump.jpg')">
        <div class="slContent">
            <h1 class="text-4xl md:text-6xl font-bold">deineTrainerin.at</h1>
            <p class="text-lg">Gesund und fit durchs Leben</p>
            <button class="mt-4" onclick="document.getElementById('contact').scrollIntoView({behavior:'smooth'})">Termin vereinbaren</button>
        </div>
        <div class="slNav">
            <ul>
                <li><a href="#about">Über mich</a></li>
                <li><a href="#services">Leistungen</a></li>
                <li><a href="#contact">Kontakt</a></li>
            </ul>
        </div>
    </div>
</section>

<section id="about" class="aboutWrap py-16">
    <div class="container mx-auto px-4 md:px-8 grid md:grid-cols-2 gap-8 items-center">
        <div class="aboutHead rounded" style="background-image:url('/img/abt.JPG')"></div>
        <div>
            <h2 class="text-2xl font-semibold mb-4">Das bin ich, deine Trainerin</h2>
            <p class="mb-4">Ich bin Sabine Taudes, Ernährungswissenschafterin und Trainerin aus Leidenschaft. Meine Mission ist es, dich auf deinem Weg zu mehr Wohlbefinden zu begleiten.</p>
            <ul class="list-disc pl-5 mb-4 space-y-2">
                <li>Individuelle Ernährungspläne</li>
                <li>Bewegungstraining für jedes Level</li>
                <li>Ganzheitlicher Ansatz für ein gesundes Leben</li>
            </ul>
            <a href="#contact" class="bg-primary text-white px-4 py-2 rounded">Kontakt aufnehmen</a>
        </div>
    </div>
</section>

<section id="services" class="py-16">
    <div class="container mx-auto px-4 md:px-8">
        <h2 class="text-2xl font-semibold text-center mb-8">Leistungen</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white shadow rounded p-6 text-center">
                <h3 class="font-semibold mb-2">Ernährungsberatung</h3>
                <p>Individuelle Beratung für einen ausgewogenen Lebensstil.</p>
            </div>
            <div class="bg-white shadow rounded p-6 text-center">
                <h3 class="font-semibold mb-2">Personal Training</h3>
                <p>Effektive Workouts abgestimmt auf deine Ziele.</p>
            </div>
            <div class="bg-white shadow rounded p-6 text-center">
                <h3 class="font-semibold mb-2">Ganzheitliche Betreuung</h3>
                <p>Ernährung, Bewegung und Wohlbefinden im Einklang.</p>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-8">
        <h2 class="text-2xl font-semibold text-center mb-8">Kontakt</h2>
        <div class="contact-container">
            <form class="contact-form">
                <input type="text" class="w-full border p-2" placeholder="Name" />
                <input type="email" class="w-full border p-2" placeholder="E-Mail" />
                <textarea class="w-full border p-2" rows="4" placeholder="Nachricht"></textarea>
                <button type="submit" class="bg-primary text-white px-4 py-2 rounded">Senden</button>
            </form>
            <div class="mt-8">
                <iframe class="contact-map" src="https://www.openstreetmap.org/export/embed.html" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>
@endsection
