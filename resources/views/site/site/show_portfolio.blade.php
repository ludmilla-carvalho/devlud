@extends('layouts.site')

@push('styles')

@endpush

@section('content')
    <section id="portfolio">
        <div class="up"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <nav>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('site.portfolio') }}" class="item">Portfolio</a></li>
                            <li class="active">{{ $portfolio->name }}</li>
                        </ol>  
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <h1 class="tit-home">{{ $portfolio->name }} </h1>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="infos">
                        @if(strlen($portfolio->link)>3) 
                            <div class="link">
                                <i class="fa fa-tv" aria-hidden="true"></i> <a href="{{ $portfolio->link }}" target="_blank" class="link">{{ $portfolio->link }}</a>
                            </div>
                        @endif
                        @if(strlen($portfolio->agency)>3) 
                            <div class="agencia">Desenvolvido para  {{ $portfolio->agency }}</div>
                        @endif
                        <div class="date">{{ $portfolio->month }} / {{ $portfolio->year }}</div>
                        <div class="habilidades">
                            @foreach($portfolio->skills as $skill)
                                <img src="{{ asset('images/skills')}}/{{$skill->id }}/{{ $skill->image }}" alt="{{ $skill->name }}" title="{{ $skill->name }}" width="35">
                            @endforeach
                        </div>
                        <div class="desc">
                            <p><strong>O que eu fiz?</strong></p>
                            <p>{!! nl2br($portfolio->description) !!}</p>
                        </div>
                        @if(strlen($portfolio->media)>3) 
                            <p><strong>Midia</strong></p>
                            <p>{!! nl2br($portfolio->media) !!}</p>
                        @endif
                    </div>
                </div>
            </div>

            
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @php
                        $i = 0;
                        $total = count($portfolio->images);
                    @endphp
                    @for($i==0;$i<$total;$i++)
                        <li data-target="#carousel-example-generic" data-slide-to="{{ $i }}" class="@if($i==0) active @endif"></li>
                    @endfor
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @php
                        $i = 0;
                    @endphp
                    @foreach($portfolio->images as $item)
                       
                        <div class="item  @if($i==0) active @endif">
                            <img src="{{ asset('images/portfolios')}}/{{$portfolio->id }}/{{ $item->image }}" alt="{{ $portfolio->name }}" class="img-slide">
                        </div>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                    {{--  <div class="item active">
                    <img src="..." alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                    </div>
                    <div class="item">
                    <img src="..." alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                    </div>
                    ...  --}}
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>



            
        </div>
        
    </section>
    <div class="down-portfolio"></div>

    
@endsection

@push('scripts')
    
@endpush