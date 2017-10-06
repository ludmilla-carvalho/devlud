<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
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
        $portfolios = \App\Portfolio::orderBy('order')->get();
        return view('admin.portfolios.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skills = \App\Skill::orderBy('name')->get();
        return view('admin.portfolios.create', compact('skills'));
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
            'month' => 'required|string|max:2',
            'year' => 'required|string|max:4',
        ]);

        $portfolio = \App\Portfolio::create([
            'name' => $request['name'],
            'slug' => str_slug($request['name']),
            'agency' => $request['agency'],
            'link' => $request['link'],
            'month' => $request['month'],
            'year' => $request['year'],
            'media' => $request['media'],
            'description' => $request['description'],
        ]);

        if (isset($request['images'])) {
            foreach ($request['images'] as $image) {
                $fileName = str_slug(preg_replace('/\..+$/', '', $image->getClientOriginalName())) . '.' . $image->getClientOriginalExtension();
                $p_image = \App\PortfolioImage::create([
                    'portfolio_id' => $portfolio->id,
                    'image' => $fileName,
                ]);
                $image->move(public_path('/images/portfolios/' . $portfolio->id), $fileName);
            }
        }

        if (isset($request['skills'])) {
            $portfolio->skills()->attach($request['skills']);
        }

        return response()->redirectToRoute('portfolio.index')->with('success', 'Portfolio criado com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$portfolio = \App\Portfolio::find($id)) {
            return response()->redirectToRoute('portfolio.index')->with('error', 'Portfolio não encontrado!');
        } else {
            $skills = \App\Skill::orderBy('name')->get();
            $s_skills = $portfolio->skills()->allRelatedIds()->toArray();
            return view('admin.portfolios.edit', compact('portfolio', 'skills', 's_skills'));
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
        if (!$portfolio = \App\Portfolio::find($id)) {
            return response()->redirectToRoute('portfolio.index')->with('error', 'Portfolio não encontrado!');
        } else {
            request()->validate([
                'name' => 'required|string|max:255',
                'month' => 'required|string|max:2',
                'year' => 'required|string|max:4',
            ]);

            $portfolio->fill([
                'name' => $request['name'],
                'slug' => str_slug($request['name']),
                'agency' => $request['agency'],
                'link' => $request['link'],
                'month' => $request['month'],
                'year' => $request['year'],
                'media' => $request['media'],
                'description' => $request['description'],
            ]);
            $portfolio->save();

            if (isset($request['images'])) {
                foreach ($request['images'] as $image) {
                    $fileName = str_slug(preg_replace('/\..+$/', '', $image->getClientOriginalName())) . '.' . $image->getClientOriginalExtension();
                    $p_image = \App\PortfolioImage::create([
                        'portfolio_id' => $portfolio->id,
                        'image' => $fileName,
                    ]);
                    $image->move(public_path('/images/portfolios/' . $portfolio->id), $fileName);
                }
            }

            if (isset($request['skills'])) {
                $portfolio->skills()->sync($request['skills']);
            }
            
            return response()->redirectToRoute('portfolio.index')->with('success', 'Portfolio alterado com sucesso!');
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
        if (!$portfolio = \App\Portfolio::find($id)) {
            return response()->redirectToRoute('portfolio.index')->with('error', 'Portfolio não encontrado!');
        } else {
            foreach ($portfolio->images as $item) {
                if ($image = \App\PortfolioImage::find($item->id)) {
                    $image->delete();
                }
            }
            $portfolio->delete();
            return response()->redirectToRoute('portfolio.index')->with('success', 'Portfolio removido com sucesso!');
        }
    }

    /**
     * Remove the portfolio image.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteImage($id, $p_id)
    {
        if (!$image = \App\PortfolioImage::find($id)) {
            return response()->redirectToRoute('portfolio.edit', ['portfolio' => $p_id])->with('error', 'Imagem não encontrada!');
        } else {
            $image->delete();
            return response()->redirectToRoute('portfolio.edit', ['portfolio' => $p_id])->with('success', 'Imagem removida com sucesso!');
        }
    }

    /**
     * Order the portfolios
     *
     * @return \Illuminate\Http\Response
     */
    public function order(Request $request)
    {
        $id = $request['id'];
        $order = $request['order'];
        if ($portfolio = \App\Portfolio::find($id)) {
            $portfolio->fill([
                'order' => $order
            ]);
            $portfolio->save();
        }
    }
}
