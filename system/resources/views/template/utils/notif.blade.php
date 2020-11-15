@foreach(['succes','warning','danger'] as $status)
	@if (session($status))
	<div class="alert alert-{{$status}} alert-dismissable custom-{{$status}}-box">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">$time;</a>
		<strong> {{session($status)}}S </strong>
	</div>
	@endif
@endforeach