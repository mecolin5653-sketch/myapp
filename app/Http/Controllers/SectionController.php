<?php
namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::all();
        return view('sections.index', compact('sections'));
    }

    public function create()
    {
        return view('sections.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'sectionName' => 'required|string|max:100|unique:sections,sectionName',
        ]);

        Section::create($request->all());

        return redirect()->route('sections.index');
    }

    public function edit(Section $section)
    {
        return view('sections.edit', compact('section'));
    }

    public function update(Request $request, Section $section)
    {
        $request->validate([
            'sectionName' => 'required|string|max:100',
            'description' => 'nullable|string|max:255',
        ]);

        // Update the section
        $section->update($request->only(['sectionName', 'description']));

        // Redirect back to index with a success message
        return redirect()->route('sections.index')->with('success', 'Section updated successfully!');
    }

    public function destroy(Section $section)
    {
        $section->delete();
        return redirect()->route('sections.index');
    }
}
