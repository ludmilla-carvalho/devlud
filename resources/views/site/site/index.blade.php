@extends('layouts.site')

@push('styles')
    {{--  <link href="{{ asset('css/admin/vendor/nprogress.css') }}" rel="stylesheet">  --}}
@endpush

@section('content')
    <section id="me">
        <div class="up"></div>
        <div class="cont">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 sobre">
                        <p>Meu nome é Ludmilla, mas a maioria das pessoas me chamam de Lud. Moro em São Paulo/SP e trabalho há mais de 15 anos com desenvolvimento web, como <strong>Front-end</strong> e <strong>Back-end</strong> (<strong>Full-stack</strong>).</p> 

                        <p>Eu trabalhei em diversas agências e fiz parte de ótimas equipes, mas atualmente trabalho como freelancer. Desenvolvi e participei de vários projetos legais ao longo desses anos, alguns deles estão aqui no meu <a href="{{ route('site.portfolio') }}">portfolio.</a></p>

                        <p>Utilizo as principais ferramentas disponíveis no mercado. Vivo em constante aprendizado de novas tecnologias e aprimoramento de técnicas. Você pode coferir parte do meu conhecimento em <a href="{{ route('site.skills') }}">habilidades</a>.</p>

                        <p></p>

                        <p>Quer saber mais <a href="{{ route('site.about') }}">sobre</a> mim e ter informações mais detalhadas da minha vida profissional? Clique <a href="{{ route('site.about') }}">aqui</a>.</p>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h3>O que eu faço:</h3>
                        <dl>
                            <dt class="item"><i class="fa fa-terminal" aria-hidden="true"></i> Programação</dt>
                            <dd>Código estruturado, bem comentado, seguindo padrões de codificação</dd>

                            <dt class="item"><i class="fa fa-code" aria-hidden="true"></i> Criação de sites responsivos</dt>
                            <dd>Múltiplas interfaces, incluindo desktop, tablets e smartphones.</dd>

                            <dt class="item"><i class="fa fa-html5" aria-hidden="true"></i> PSD para HTML</dt>
                            <dd>Layouts convertidos para HTML compatível com os principais browsers do mercado, otimizado para SEO (SEO On-Page).</dd>

                            <dt class="item"><i class="fa fa-wordpress" aria-hidden="true"></i> Wordpress</dt>
                            <dd>Criação de temas presonalizados, instalação e configuração de plugins</dd>

                            <dt class="item"><i class="fa fa-television" aria-hidden="true"></i> Lojas Virtuais / Comércio Eletrônico</dt>
                            <dd>Integração com Pagseguro e demais gateways de pagamento, NF-e, cálculo de frete, etc.</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        <div class="down"></div>
    </section>

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="tit">Portfolio</h2>
                </div>
            </div>
            <div class="row">
                @foreach($portfolios as $portfolio)
                    @php
                        $img = $portfolio->images[0]->image;
                    @endphp
                    <div class="col-md-4 col-sm-6 p_child">
                        <div class="img hover-img" data-id="hover_{{ $portfolio->id }}">
                            <a href="{{ route('site.show-portfolio', ['slug' => $portfolio->slug])}}" class="link">
                                <img class="image" src="{{ asset("images/portfolios/$portfolio->id/$img") }}" alt="{{ $portfolio->name }}">
                                <div class="info" id="hover_{{ $portfolio->id }}">
                                    <div class="details">
                                        <span class="nome">{{ $portfolio->name }}</span>
                                        <span class="agencia">
                                            @if(strlen($portfolio->agency)>3) 
                                                Desenvolvido para  {{ $portfolio->agency }}
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div> 
                    </div>
                @endforeach
            </div>
            <a class="btn btn-default pull-right" href="{{ route('site.portfolio') }}" role="button">Ver tudo</a>
        </div>
    </section>

    <section id="habilidades">
        <div class="up"></div>
        <div class="cont">
            <div class="container ">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="tit">Habilidades</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach($skills as $skill)
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <div class="hab">
                                <div class="head">
                                    <img src="{{ asset("images/skills/$skill->id/$skill->image") }}" alt="{{ $skill->name }}" class="img" title="{{ $skill->name }}">
                                    <span class="h-text">{{ $skill->name }}</span>
                                </div>
                                <div class="text">
                                    {!! nl2br($skill->description) !!}
                                </div>
                               @if(count($skill->certificates))
                                    <div class="certs">
                                        <a tabindex="{{ $skill->id }}" onclick="event.preventDefault()" class="link p_over" data-trigger="click" data-container="body" data-toggle="popover" data-placement="auto" 
                                        data-content='@foreach($skill->certificates as $item)
                        <a href="{{ $item->code }}" class="item" target="_blank">{{ $item->name }}</a><br> 
                        @endforeach' 
                        ><i class="fa fa-file-code-o" aria-hidden="true"></i> Certificados</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                        
                    @endforeach
                </div>
                <a class="btn btn-default pull-right" href="{{ route('site.skills') }}" role="button">Ver tudo</a>
            </div>
        </div>
        <div class="down"></div>
    </section>
@endsection

@push('scripts')
    {{--  <script src="{{ asset('js/admin/vendor/nprogress.js') }}"></script>
    <script src="{{ asset('js/admin/vendor/fastclick.js') }}"></script>  --}}
@endpush
