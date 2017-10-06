@if($errors->any())
    @component('admin.components.flash-message', ['message' => 'error'])
        <h4><i class="icon fa fa-ban"></i> Foram encontrados os seguintes erros:</h4>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>        
    @endcomponent
@endif

{!! csrf_field() !!}

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nome <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input name="name" class="form-control col-md-7 col-xs-12" type="text" value="{{ $portfolio->name ?? old('name') }}" required="required">
    </div>
</div>

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="agency">Agência</label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input name="agency" class="form-control col-md-7 col-xs-12" type="text" value="{{ $portfolio->agency ?? old('agency') }}">
    </div>
</div>

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="link">Link</label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input name="link" class="form-control col-md-7 col-xs-12" type="text" value="{{ $portfolio->link ?? old('link') }}">
    </div>
</div>

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="month">Mês <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input name="month" class="form-control col-md-7 col-xs-12" type="text" value="{{ $portfolio->month ?? old('month') }}" required="required">
    </div>
</div>

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="year">Ano <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input name="year" class="form-control col-md-7 col-xs-12" type="text" value="{{ $portfolio->year ?? old('year') }}" required="required">
    </div>
</div>

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="images">Enviar Imagens <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input name="images[]" class="col-md-7 col-xs-12" type="file" multiple>
    </div>
</div>

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Descrição</label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <textarea name="description" class="form-control col-md-7 col-xs-12">{{ $portfolio->description ?? old('description') }}</textarea>
    </div>
</div>

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="media">Midia</label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <textarea name="media" class="form-control col-md-7 col-xs-12">{{ $portfolio->media ?? old('media') }}</textarea>
    </div>
</div>

@if(isset($portfolio))
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Imagens</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            @foreach($portfolio->images as $item)
                <div id="port_img{{ $item->id }}" class="port_img">
                    <a href="{{ route('portifolio.delete.image', ['id' => $item->id, 'p_id' => $portfolio->id] ) }}" class="btn btn-danger btn-xs pull-left" title="Apagar"><i class="fa fa-trash"></i> Apagar</a>
                    <img src="{{ asset('images/portfolios')}}/{{$portfolio->id }}/{{ $item->image }}" alt="{{ $portfolio->name }}" width="200">
                </div>
            @endforeach
        </div>
    </div> 
@endif

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="skills">Habilidades <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        @php
            if(!isset($s_skills)){
                $s_skills = array();
            }

            
        @endphp
        @foreach($skills as $skill)
            @php
                if (in_array($skill->id, $s_skills)) {
                    $ckecked = 'checked';
                }else{
                    $ckecked = '';
                }
            @endphp
            <div class="checkbox">
                <label>
                    <input type="checkbox" class="flat" name="skills[]" value="{{ $skill->id }}" {{  $ckecked }}> {{ $skill->name }}
                </label>
            </div>
            
        @endforeach
        
    </div>
</div>


