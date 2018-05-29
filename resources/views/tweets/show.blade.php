@foreach($tweets as $tweet)
<div class="card" style="margin-top: 5px">
	<div class="card-header" style="padding-left: 20px">
			@if (Auth::user()->avatar == Null)
                        <img src="{{ asset('storage/avatar.png')}}" alt="avatar" class="img-fluid" style="width: 8%; float: left"> 
                    @else
                        <img src="{{ asset("storage/{Auth::user()->avatar}")}}" alt="avatar" class="img-fluid" style="width: 8%; float: left">
               @endif

			<ul style="float: left;list-style-type: none; margin-left: -20px; margin-top: -4px; margin-bottom: -5px">
					<li><strong>{{ $tweet->user->name }}</strong>   <a href="{{$tweet->user->username}}">{{ '@'.$tweet->user->username }}</a>
					 - {{ $tweet->created_at->diffForHumans(null, false, true) }}</li>
			</ul>
			@if($tweet->user->id == Auth::id())
				<form method="POST" action="{{ route('tweet.delete', $tweet->id) }}">
					@csrf
					{{ method_field("DELETE") }}
					<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" style="float: right">
					  Excluir
					</button>
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Excluir tweet</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        {{ $tweet->content }}
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
					        <button type="submit" class="btn btn-danger">Excluir</button>
					      </div>
					    </div>
					  </div>
					</div>
			</form>
			@endif
	</div>
	<div class="card-body">
		{{ $tweet->content }}
	</div>
</div>
@endforeach