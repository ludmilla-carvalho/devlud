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
        <input name="name" class="form-control col-md-7 col-xs-12" type="text" value="{{ $user->name ?? old('name') }}" required="required">
    </div>
</div>

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input name="email" class="form-control col-md-7 col-xs-12" type="text" value="{{ $user->email ?? old('email') }}" required="required" type="email">
    </div>
</div>

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Senha <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input name="password" class="form-control col-md-7 col-xs-12" type="password" required="required">
    </div>
</div>

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password-confirm">Senha <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input name="password_confirmation" id="password-confirm" class="form-control col-md-7 col-xs-12" type="password" required="required" data-validate-linked="password" type="password">
    </div>
</div>