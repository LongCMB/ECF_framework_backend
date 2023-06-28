<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Citation;
use Illuminate\Http\Request;

class CitationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $citation = Citation::orderBy('id', 'DESC')->get();

        return view('citation.index', compact('citation'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $author = Author::orderBy('id', 'ASC')->get();

        return view('citation.create', compact('author'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Citation::create($request->all());

        return redirect()->route('citation.index')->with('success', 'Citation added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $citation = Citation::findOrFail($id);

        return view('citation.show', compact('citation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $citation = Citation::findOrFail($id);

        $author = Author::orderBy('id', 'ASC')->get();

        return view('citation.edit', compact('citation', 'author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $citation = Citation::findOrFail($id);

        $citation->update($request->all());

        return redirect()->route('citation.index')->with('success', 'citation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $citation = Citation::findOrFail($id);

        $citation->delete();

        return redirect()->route('citation.index')->with('success', 'citation deleted successfully');
    }
}
