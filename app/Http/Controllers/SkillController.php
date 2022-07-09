<?php

namespace App\Http\Controllers;

use App\Models\{
    skill,
    category
};
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::orderBy('id')->get();
        $skills = Skill::all();
        $title = "Skills";
        $description = "Mes compétences en développement";
        $canonical = "https://www.eosia.dev/skills";

        $data = [
            'title'=> $title,
            'description' => $description,
            'canonical' => $canonical,
            'categories' => $categories,
            'skills' => $skills
        ];
        return view('skill.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(skill $skill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, skill $skill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(skill $skill)
    {
        //
    }
}
