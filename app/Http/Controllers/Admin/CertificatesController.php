<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CertificatesController extends Controller
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
        $certificates = \App\Certificate::get();
        
        return view('admin.certificates.index', compact('certificates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skills = \App\Skill::orderBy('name')->get();
        return view('admin.certificates.create', compact('skills'));
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
            'place' => 'required',
            'code' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,svg',
        ]);

        $fileName = null;
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $fileName = str_slug(preg_replace('/\..+$/', '', $file->getClientOriginalName())) . '.' . $file->getClientOriginalExtension();
        }

        $certificate = \App\Certificate::create([
            'name' => $request['name'],
            'slug' => str_slug($request['name']),
            'place' => $request['place'],
            'code' => $request['code'],
            'image' => $fileName
        ]);
        $file->move(public_path('/images/certificates/' . $certificate->id), $fileName);

        if (isset($request['skills'])) {
            $certificate->skills()->attach($request['skills']);
        }
        return response()->redirectToRoute('certificates.index')->with('success', 'Certificado criado com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$certificate = \App\Certificate::find($id)) {
            return response()->redirectToRoute('certificates.index')->with('error', 'Certificado não encontrado!');
        } else {
            $skills = \App\Skill::orderBy('name')->get();
            $s_skills = $certificate->skills()->allRelatedIds()->toArray();
            return view('admin.certificates.edit', compact('certificate', 'skills', 's_skills'));
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
        if (!$certificate = \App\Certificate::find($id)) {
            return response()->redirectToRoute('certificates.index')->with('error', 'Certificado não encontrado!');
        } else {
            $val = [
                'name' => 'required|string|max:255',
                'place' => 'required',
                'code' => 'required'
            ];

            $fileName = $certificate->image;
            if (request()->hasFile('image')) {
                $file = request()->file('image');
                $fileName = str_slug(preg_replace('/\..+$/', '', $file->getClientOriginalName())) . '.' . $file->getClientOriginalExtension();
                $val['image'] = 'required|mimes:jpeg,jpg,png,svg';
            }
            request()->validate($val);

            if (request()->hasFile('image')) {
                $file->move(public_path('/images/skills/' . $certificate->id), $fileName);
            }

            $certificate->fill([
                'name' => $request['name'],
                'slug' => str_slug($request['name']),
                'place' => $request['place'],
                'code' => $request['code'],
                'image' => $fileName
            ]);
            $certificate->save();

            if (isset($request['skills'])) {
                $certificate->skills()->sync($request['skills']);
            }

            return response()->redirectToRoute('certificates.index')->with('success', 'Certificado alterado com sucesso!');
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
        if (!$certificate = \App\Certificate::find($id)) {
            return response()->redirectToRoute('certificates.index')->with('error', 'Certificado não encontrado!');
        } else {
            $certificate->delete();
            return response()->redirectToRoute('certificates.index')->with('success', 'Certificado removido com sucesso!');
        }
    }
}
