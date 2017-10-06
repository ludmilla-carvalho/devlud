@extends('layouts.admin')

@push('styles')
    {{--  <link href="{{ asset('css/admin/vendor/nprogress.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/admin/vendor/green.css') }}" rel="stylesheet">  --}}
@endpush

@section('content')
<div class="right_col" role="main">
    <div class="">

        <div class="page-title">
            <div class="title_left">
                <h3>Usuários</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">

                        @include('admin.includes.flash-message')
                        
                        <table id="datatable-custom" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <a href="{{ route('users.edit', ['user' => $user->id] ) }}" class="btn btn-success btn-xs pull-left" title="Editar"><i class="fa fa-pencil"></i> Editar</a>
                                            @auth
                                                @if(Auth::user()->id !== $user->id)
                                                    <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post" class="form-inline pull-left form-delete" data-message="Confirma a exclusão do usuário {{ $user->name }}?" data-form="deleteForm">
                                                        {!! csrf_field() !!}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-danger btn-xs" title="Apagar"><i class="fa fa-trash"></i> Apagar</button>
                                                    </form>  
                                                @endif
                                                
                                            @endauth
                                            
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        @include('admin.includes.modal')

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
    {{--  <script src="{{ asset('js/admin/vendor/fastclick.js') }}"></script>
    <script src="{{ asset('js/admin/vendor/nprogress.js') }}"></script>  --}}
@endpush
