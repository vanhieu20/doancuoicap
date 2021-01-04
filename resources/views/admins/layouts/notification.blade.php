@if(Session::has('success'))
    <div class="alert alert-success notification">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{ Session::get('success') }}
    </div>
@endif

@if(Session::has('danger'))
    <div class="alert alert-danger notification">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{ Session::get('danger') }}
    </div>
@endif

@if(Session::has('warning'))
    <div class="alert alert-warning notification">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{ Session::get('warning') }}
    </div>
@endif
