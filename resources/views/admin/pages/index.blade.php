@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-semibold mb-4">Seiten</h1>
<a href="{{ route('pages.create') }}" class="bg-green-600 text-white px-2 py-1 rounded">Neue Seite</a>
<table class="min-w-full mt-4 border">
    <thead class="bg-gray-100">
        <tr>
            <th class="p-2">Slug</th>
            <th class="p-2">Titel (DE)</th>
            <th class="p-2">Aktionen</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pages as $page)
        <tr>
            <td class="border px-2">{{ $page->slug }}</td>
            <td class="border px-2">{{ $page->title_de }}</td>
            <td class="border px-2">
                <a href="{{ route('pages.edit', $page) }}" class="text-blue-600">Bearbeiten</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
