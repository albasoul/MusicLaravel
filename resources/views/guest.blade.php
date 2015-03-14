@extends('app')

@section('content')
<div class="permbajtja-1">
	<div class="row">
		<div class="col-md-2">
			<div class="panel panel-default">
				<div class="panel-heading">Kategorite</div>

				<div class="panel-body">
					<p>Kategoria 1</p>
					<p>Kategoria 2</p>
					<p>Kategoria 3</p>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					@foreach ($singers as $singer)
					    <p><a href="{{URL('/').'/kengetari/'.$singer->id}}">{{ $singer->name }}</a></p>
					@endforeach
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<div class="panel panel-default">
				<div class="panel-heading">Reklama</div>
				<div class="panel-body">
					reklamat..
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
