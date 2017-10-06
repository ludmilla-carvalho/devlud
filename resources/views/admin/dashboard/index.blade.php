@extends('layouts.admin')

@push('styles')
    {{--  <link href="{{ asset('css/admin/vendor/nprogress.css') }}" rel="stylesheet">  --}}
@endpush

@section('content')
<div class="right_col" role="main">
    <div class="">
    <div class="page-title">
        <div class="title_left">
        <h3>Dashboard</h3>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_content">

                <div class="row top_tiles">
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                        <div class="icon"><i class="fa fa-desktop"></i></div>
                        <div class="count">{{ $port }}</div>
                        <h3>Portfolios</h3>
                        </div>
                    </div>

                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                        <div class="icon"><i class="fa fa-terminal"></i></div>
                        <div class="count">{{ $skills }}</div>
                        <h3>Habilidades</h3>
                        </div>
                    </div>

                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                        <div class="icon"><i class="fa fa-code"></i></div>
                        <div class="count">{{ $certs }}</div>
                        <h3>Certificados</h3>
                        </div>
                    </div>

                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                        <div class="icon"><i class="fa fa-envelope-o"></i></div>
                        <div class="count">{{ $msgs }}</div>
                        <h3>Mensagens</h3>
                        </div>
                    </div>
                </div>
                    

            </div>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection

@push('scripts')
    {{--  <script src="{{ asset('js/admin/vendor/nprogress.js') }}"></script>
    <script src="{{ asset('js/admin/vendor/fastclick.js') }}"></script>  --}}
@endpush
