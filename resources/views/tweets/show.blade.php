@foreach($tweets as $tweet)
<div class="card" style="margin-top: 5px">
	<div class="card-header" style="padding-left: 20px">
		<img src="{{ asset('storage/avatars/avatar.jpg')}}" alt="avatar" class="img-fluid" style="width: 8%; float: left">

			<ul style="float: left;list-style-type: none; margin-left: -20px; margin-top: -4px; margin-bottom: -5px">
					<li><strong>{{ $tweet->user->name }}</strong>   <a href="">{{ '@'.$tweet->user->username }}</a>
					 - {{ $tweet->created_at->diffForHumans(null, false, true) }}</li>
			</ul>
	</div>
	<div class="card-body">
		{{ $tweet->content }}
	</div>
</div>
@endforeach