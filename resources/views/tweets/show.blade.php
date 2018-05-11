@foreach($tweets as $tweet)
<div class="card" style="margin-top: 5px">
	<div class="card-header">
		<img src="{{ asset('storage/avatars/avatar.jpg')}}" alt="avatar" class="card-img-top" style="width: 30px;height: 30px">
		<strong>{{ $tweet->user->name }}</strong> {{ '@'.$tweet->user->username }}
						- {{ $tweet->created_at->diffForHumans(null, false, true) }}
			   
	</div>
	<div class="card-body">
		{{ $tweet->content }}
	</div>
</div>
@endforeach