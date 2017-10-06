<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application index.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = \App\Skill::orderBy('order', 'ASC')->limit(12)->get();
        $portfolios = \App\Portfolio::orderBy('order', 'ASC')->limit(9)->get();
        return view('site.site.index', compact('skills', 'portfolios'));
    }


    /**
     * Show all portfolio
     *
     * @return \Illuminate\Http\Response
     */
    public function portfolio()
    {
        $portfolios = \App\Portfolio::orderBy('order', 'ASC')->get();
        return view('site.site.portfolio', compact('portfolios'));
    }

    /**
     * Show Portfolio
     *
     * @param string $slug
     * @return \Illuminate\Http\Response
     */
    public function showPortfolio($slug)
    {
        $portfolio = \App\Portfolio::where('slug', $slug)->first();
        return view('site.site.show_portfolio', compact('portfolio'));
    }

    /**
     * Show all skills
     *
     * @return \Illuminate\Http\Response
     */
    public function skills()
    {
        $skills = \App\Skill::orderBy('order', 'ASC')->get();
        return view('site.site.skills', compact('skills'));
    }

    /**
     * About page
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('site.site.about');
    }

    /**
     * Contact page
     *
     * @return \Illuminate\Http\Response
     */
    public function contact(Request $request)
    {
        return view('site.site.contact');
    }

    /**
     * Message store
     *
     * @return \Illuminate\Http\Response
     */
    public function message(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:191',
            'email' => 'required|email|max:191',
            'subject' => 'required|max:191',
            'message' => 'required',
        ]);

        $data = $request->all();

        $contact = \App\Message::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'message' => $request['message'],
        ]);

        $to = 'lud.mgc@hotmail.com.br';
        Mail::to($to)->send(new ContactMail($data));


        return response()->redirectToRoute('site.contact')->with('status', 'Mensagem enviada!');
    }
}
