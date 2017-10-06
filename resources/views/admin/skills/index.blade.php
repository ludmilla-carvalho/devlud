@extends('layouts.admin')

@push('styles')

@endpush

@section('content')
<div class="right_col" role="main">
    <div class="">

        <div class="page-title">
            <div class="title_left">
                <h3>Habilidades</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">

                        @include('admin.includes.flash-message')
                        
                        <table id="datatable-skills" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Ordem</th>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Imagem</th>
                                    <th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($skills as $skill)
                                    <tr class="c-move">
                                        <td>{{ $skill->order }}</td>
                                        <td>{{ $skill->id }}</td>
                                        <td>{{ $skill->name }}</td>
                                        <td><img src="{{ asset('images/skills')}}/{{$skill->id }}/{{ $skill->image }}" alt="{{ $skill->name }}" width="45"></td>
                                        <td>
                                            <a href="{{ route('skills.edit', ['skill' => $skill->id] ) }}" class="btn btn-success btn-xs pull-left" title="Editar"><i class="fa fa-pencil"></i> Editar</a>
                                            @auth  
                                                <form action="{{ route('skills.destroy', ['skill' => $skill->id]) }}" method="post" class="form-inline pull-left form-delete" data-message="Confirma a exclusão da habilidade {{ $skill->name }}?" data-form="deleteForm">
                                                    {!! csrf_field() !!}
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-danger btn-xs" title="Apagar"><i class="fa fa-trash"></i> Apagar</button>
                                                </form>                                                  
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

@endpush
