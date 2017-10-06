@php 
    $class = 'info';

    if(isset($message))
        $class = $message;
@endphp

<div class="col-sm-8 col-sm-offset-2 col-xs-12">
    <div class="alert alert-{{ $class }} alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        {{ $slot }}
    </div>
</div>
<div class="clear"></div>