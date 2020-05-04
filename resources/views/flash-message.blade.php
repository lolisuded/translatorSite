@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" data-aos="fade-down" data-aos-duration="2000">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>	
        <strong>{{ $message }}</strong>
</div>
@endif
