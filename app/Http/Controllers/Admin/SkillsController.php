<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SkillsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = \App\Skill::orderBy('order', 'ASC')->get();
        return view('admin.skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.skills.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'required',
        ]);


        $fileName = null;
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $fileName = str_slug(preg_replace('/\..+$/', '', $file->getClientOriginalName())) . '.' . $file->getClientOriginalExtension();
        }

        $skill = \App\Skill::create([
            'name' => $request['name'],
            'slug' => str_slug($request['name']),
            'description' => $request['description'],
            'image' => $fileName
        ]);
        $file->move(public_path('/images/skills/' . $skill->id), $fileName);
        return response()->redirectToRoute('skills.index')->with('success', 'Habilidade criada com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$skill = \App\Skill::find($id)) {
            return response()->redirectToRoute('skills.index')->with('error', 'Habilidade não encontrada!');
        } else {
            return view('admin.skills.edit', compact('skill'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!$skill = \App\Skill::find($id)) {
            return response()->redirectToRoute('skills.index')->with('error', 'Habilidade não encontrada!');
        } else {
            $val = [
                'name' => 'required|string|max:255',
                'description' => 'required'
            ];

            $fileName = $skill->image;
            if (request()->hasFile('image')) {
                $file = request()->file('image');
                $fileName = str_slug(preg_replace('/\..+$/', '', $file->getClientOriginalName())) . '.' . $file->getClientOriginalExtension();
                $val['image'] = 'required';
            }
            request()->validate($val);

            if (request()->hasFile('image')) {
                $file->move(public_path('/images/skills/' . $skill->id), $fileName);
            }

            $skill->fill([
                'name' => $request['name'],
                'slug' => str_slug($request['name']),
                'description' => $request['description'],
                'image' => $fileName
            ]);
            $skill->save();
            return response()->redirectToRoute('skills.index')->with('success', 'Habilidade alterada com sucesso!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$skill = \App\Skill::find($id)) {
            return response()->redirectToRoute('skills.index')->with('error', 'Habilidade não encontrada!');
        } else {
            $skill->delete();
            return response()->redirectToRoute('skills.index')->with('success', 'Habilidade removida com sucesso!');
        }
    }

    /**
     * Order the skills
     *
     * @return \Illuminate\Http\Response
     */
    public function order(Request $request)
    {
        $id = $request['id'];
        $order = $request['order'];
        if ($skill = \App\Skill::find($id)) {
            $skill->fill([
                'order' => $order
            ]);
            $skill->save();
        }
    }
}
