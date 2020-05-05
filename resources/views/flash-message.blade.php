@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" data-aos="fade-down" data-aos-duration="2000">
        <button type="button" class="close" data-dismiss="alert"><i class="fas fa-times-circle"></i></button>
            <strong>{{$message}}</strong>
        </div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif
