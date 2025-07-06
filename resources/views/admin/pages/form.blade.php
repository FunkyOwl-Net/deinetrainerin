@csrf
<div class="space-y-4">
    <div>
        <label class="block mb-1">Slug</label>
        <input type="text" name="slug" value="{{ old('slug', $page->slug ?? '') }}" class="border rounded w-full p-2" required>
    </div>
    <div>
        <label class="block mb-1">Titel (DE)</label>
        <input type="text" name="title_de" value="{{ old('title_de', $page->title_de ?? '') }}" class="border rounded w-full p-2">
    </div>
    <div>
        <label class="block mb-1">Titel (EN)</label>
        <input type="text" name="title_en" value="{{ old('title_en', $page->title_en ?? '') }}" class="border rounded w-full p-2">
    </div>
    <div>
        <label class="block mb-1">Inhalt (DE)</label>
        <textarea name="content_de" id="content_de" class="border rounded w-full p-2" rows="5">{{ old('content_de', $page->content_de ?? '') }}</textarea>
    </div>
    <div>
        <label class="block mb-1">Inhalt (EN)</label>
        <textarea name="content_en" id="content_en" class="border rounded w-full p-2" rows="5">{{ old('content_en', $page->content_en ?? '') }}</textarea>
    </div>
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Speichern</button>
</div>
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>
<script>
ClassicEditor.create(document.querySelector('#content_de'));
ClassicEditor.create(document.querySelector('#content_en'));
</script>
@endpush
