<?php

namespace App\Http\Controllers;

use App\Element;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ElementController extends Controller
{
    public function index(): View
    {
        return view('elements.index', [
            'elements' => Element::all()
        ]);
    }

    public function create(): View
    {
        return view('elements.create');
    }

    public function store(): RedirectResponse
    {
        Element::create();

        return redirect('/elements');
    }

    public function edit(Element $element): View
    {
        return view('elements.edit', [
            'element' => $element
        ]);
    }

    public function update(Element $element): RedirectResponse
    {
        $element->update();

        return redirect('/elements');
    }

    public function destroy(Element $element): RedirectResponse
    {
        $element->forceDelete();

        return redirect('/elements');
    }
}
