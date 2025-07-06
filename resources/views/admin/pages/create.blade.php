@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-semibold mb-4">Neue Seite</h1>
<form method="POST" action="{{ route('pages.store') }}">
    @include('admin.pages.form')
</form>
@endsection
