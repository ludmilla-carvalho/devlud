@extends('layouts.site')

@push('styles')

@endpush

@section('content')
    <section id="contact">
        <div class="up"></div>
        <div class="cont">
            <div class="container ">
                <div class="row">
                    <div class="col-xs-12">
                        <h2>Contato</h2>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                {{ session('status') }}
                            </div>
                        @endif

                        @if ($errors->any())
                        <div class="alert alert-warning alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <p><strong>Foram encontrados os seguintes erros:</strong></p>
                                <ul class="list-unstyled">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>   
                            </div>
                        @endif
                        <p><b>*</b> campos obrigatórios</p>
                        <form action="{{ route('site.message') }}" method="post" class="frm">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="name">Nome<span class="required">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
                            </div>
                            <div class="form-group">
                                <label for="email">Email<span class="required">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="subject">Assunto<span class="required">*</span></label>
                                <input type="subject" class="form-control" id="subject" name="subject" placeholder="Assunto">
                            </div>
                            <div class="form-group">
                                <label for="message">Mensagem<span class="required">*</span></label>
                                <textarea class="form-control" rows="3" name="message" id="message"></textarea>
                            </div>

                            <button type="submit" class="btn btn-default">Enviar</button>
                        </form>
                    </div>
                
                </div>
            </div>
        </div>
        <div class="down-single"></div>
    </section>

    
@endsection

@push('scripts')
    
@endpush