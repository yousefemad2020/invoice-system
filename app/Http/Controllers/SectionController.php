<?php

namespace App\Http\Controllers;

use App\Http\Requests\SectionRequest;
use App\Http\Requests\UpdateSectionRequest;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = Section::all() ;
        return view('sections.sections', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SectionRequest $request)
    {
        Section::create([
            "section_name"  =>  $request->section_name,
            "description"   =>  $request->description,
            "created_by"    => (Auth::user()->name)
        ]);

        session()->flash('Add', trans('settings_translate.the_section_added_successfully'));
        return redirect()->route('sections.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Section $section)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSectionRequest $request)
    {
        $section = Section::findOrFail($request->id);
        $section->update([
            "section_name"=>$request->section_name,
            "description"=>$request->description,
        ]);
        session()->flash("edit" , trans('settings_translate.section_update_successfully') );
        return redirect()->route('sections.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $section = Section::findOrFail($request->id);
        $section->delete();
        session()->flash("delete" , trans('settings_translate.section_deleted_successfully') );

        return redirect()->route('sections.index');

    }
}
