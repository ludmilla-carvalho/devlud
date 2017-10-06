@extends('layouts.admin')

@push('styles')
    
@endpush

@section('content')
<div class="right_col" role="main">
    <div class="">

        <div class="page-title">
            <div class="title_left">
                <h3>Usuários <small>Editar usuário</small></h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">

                    <form action="{{ route('users.update',['user' => $user->id]) }}" method="post" class="form-horizontal form-label-left" novalidate id="demo-form2">
                    {{ method_field('PUT') }}

                        @include('admin.users.form')

                        @component('admin.components.form-button')
                            Editar
                        @endcomponent
                    </form>
                    
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
    
@endpush
