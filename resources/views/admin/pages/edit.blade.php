@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-semibold mb-4">Seite bearbeiten</h1>
<form method="POST" action="{{ route('pages.update', $page) }}">
    @method('PUT')
    @include('admin.pages.form')
</form>
@endsection
