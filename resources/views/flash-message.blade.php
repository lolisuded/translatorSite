@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>	
        <strong>{{ $message }}</strong>
</div>
@endif
