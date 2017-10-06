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
        <input name="name" class="form-control col-md-7 col-xs-12" type="text" value="{{ $certificate->name ?? old('name') }}" required="required">
    </div>
</div>

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Imagem <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input name="image" class="col-md-7 col-xs-12" type="file">
    </div>
</div>

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="place">Local <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input name="place" class="form-control col-md-7 col-xs-12" type="text" value="{{ $certificate->place ?? old('place') }}" required="required">
    </div>
</div>

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="code">Code <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input name="code" class="form-control col-md-7 col-xs-12" type="text" value="{{ $certificate->code ?? old('code') }}" required="required">
    </div>
</div>

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
