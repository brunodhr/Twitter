@foreach(Auth::user()->tweets as $tweet)
	<div class="card" style="margin-top: 5px">
		<div class="card-header">
			<strong>{{ $tweet->user->name }}</strong> {{ '@'.$tweet->user->username }}
			 - {{ $tweet->created_at->diffForHumans(null, false, true) }}
		</div>
		<div class="card-body">
			{{ $tweet->content }}
		</div>
	</div>
@endforeach