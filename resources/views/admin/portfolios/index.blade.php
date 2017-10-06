@extends('layouts.admin')

@push('styles')

@endpush

@section('content')
<div class="right_col" role="main">
    <div class="">

        <div class="page-title">
            <div class="title_left">
                <h3>Portfolio</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">

                        @include('admin.includes.flash-message')
                        
                        <table id="datatable-portfolio" class="table table-striped table-bordered dt-responsive nowrap*" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Ordem</th>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Agencia</th>
                                    <th>Link</th>
                                    <th>Data</th>
                                    <th>Habilidades</th>
                                    <th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($portfolios as $portfolio)
                                    <tr class="c-move">
                                        <td>{{ $portfolio->order }}</td>
                                        <td>{{ $portfolio->id }}</td>
                                        <td>{{ $portfolio->name }}</td>
                                        <td>{{ $portfolio->agency }}</td>
                                        <td>{{ $portfolio->link }}</td>
                                        <td>{{ $portfolio->month }} / {{ $portfolio->year }}</td>
                                        <td>
                                        @foreach($portfolio->skills as $skill)
                                            <img src="{{ asset('images/skills')}}/{{$skill->id }}/{{ $skill->image }}" alt="{{ $skill->name }}" width="35" title="{{ $skill->name }}">
                                        @endforeach
                                        </td>
                                        <td>
                                            <a href="{{ route('portfolio.edit', ['portfolio' => $portfolio->id] ) }}" class="btn btn-success btn-xs pull-left" title="Editar"><i class="fa fa-pencil"></i> Editar</a>

                                            <form action="{{ route('portfolio.destroy', ['portfolio' => $portfolio->id]) }}" method="post" class="form-inline pull-left form-delete" data-message="Confirma a exclusão do portfolio {{ $portfolio->name }}?" data-form="deleteForm">
                                                {!! csrf_field() !!}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger btn-xs" title="Apagar"><i class="fa fa-trash"></i> Apagar</button>
                                            </form>                                                  
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
