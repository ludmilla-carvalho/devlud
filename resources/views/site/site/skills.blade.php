@extends('layouts.site')

@push('styles')

@endpush

@section('content')
    <section id="habilidades">
        <div class="up-single"></div>
        <div class="cont">
            <div class="container ">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="">Habilidades</h2>
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
            </div>
        </div>
        <div class="down"></div>
    </section>

    
@endsection

@push('scripts')
    
@endpush
