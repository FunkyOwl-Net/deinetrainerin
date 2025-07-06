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
<section id="hero" class="bg-gradient-to-r from-primary to-red-400 text-white min-h-screen flex items-center justify-center">
    <div class="text-center p-8 bg-black/50 rounded">
        <h1 class="text-4xl md:text-6xl font-bold mb-4">deineTrainerin.at</h1>
        <p class="text-lg md:text-2xl">Gesund und fit durchs Leben</p>
    </div>
</section>

<section id="about" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-8 grid md:grid-cols-2 gap-8 items-center">
        <div class="h-64 bg-gray-300 rounded"></div>
        <div>
            <h2 class="text-2xl font-semibold mb-4">Über mich</h2>
            <p class="mb-4">Hier steht ein kurzer Text über Sabine Taudes und ihre Motivation, Menschen zu einem gesunden Lebensstil zu begleiten.</p>
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
    <div class="container mx-auto px-4 md:px-8 text-center">
        <h2 class="text-2xl font-semibold mb-4">Kontakt</h2>
        <p class="mb-6">Schreib mir eine Nachricht oder vereinbare direkt einen Termin.</p>
        <a href="#" class="bg-primary text-white px-4 py-2 rounded">Zum Kontaktformular</a>
    </div>
</section>
@endsection
