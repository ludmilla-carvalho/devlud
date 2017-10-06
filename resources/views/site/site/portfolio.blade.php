@extends('layouts.site')

@push('styles')

@endpush

@section('content')
    <section id="portfolio">
        <div class="up"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Portfolio</h1>
                </div>
            </div>

            <div class="row">
                @foreach($portfolios as $portfolio)
                    @php
                        $img = $portfolio->images[0]->image;
                    @endphp
                    <div class="col-md-4 col-sm-6">
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
        </div>
        
    </section>
    <div class="down-portfolio"></div>

    
@endsection

@push('scripts')
    
@endpush