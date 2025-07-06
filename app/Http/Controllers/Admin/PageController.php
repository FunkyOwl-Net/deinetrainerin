<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function index(): View
    {
        return view('admin.pages.index', ['pages' => Page::all()]);
    }

    public function create(): View
    {
        return view('admin.pages.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'slug' => 'required|unique:pages,slug',
            'title_de' => 'nullable',
            'title_en' => 'nullable',
            'content_de' => 'nullable',
            'content_en' => 'nullable',
        ]);
        Page::create($data);
        return redirect()->route('pages.index');
    }

    public function edit(Page $page): View
    {
        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, Page $page): RedirectResponse
    {
        $data = $request->validate([
            'slug' => 'required|unique:pages,slug,' . $page->id,
            'title_de' => 'nullable',
            'title_en' => 'nullable',
            'content_de' => 'nullable',
            'content_en' => 'nullable',
        ]);
        $page->update($data);
        return redirect()->route('pages.index');
    }

    public function destroy(Page $page): RedirectResponse
    {
        $page->delete();
        return redirect()->route('pages.index');
    }
}
