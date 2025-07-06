@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-semibold mb-4">Admin Login</h1>
<form method="POST" action="{{ route('login') }}" class="space-y-4 max-w-md">
    @csrf
    <div>
        <label class="block mb-1">E-Mail</label>
        <input type="email" name="email" required class="border rounded w-full p-2">
    </div>
    <div>
        <label class="block mb-1">Passwort</label>
        <input type="password" name="password" required class="border rounded w-full p-2">
    </div>
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Anmelden</button>
</form>
@endsection
