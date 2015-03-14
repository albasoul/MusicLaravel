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
				<div class="panel-heading">{{$singer->name}} {{$singer->lastname}}</div>
				
					<table class="table table-hover">
						<thead>
							<tr>
								<th class="col-md-8">Name<span class="glyphicon glyphicon-sort" aria-hidden="true"></span></th>
								<th class="col-md-2">Duration<span class="glyphicon glyphicon-sort" aria-hidden="true"></span></th>
								<th class="col-md-1">Price<span class="glyphicon glyphicon-sort" aria-hidden="true"></span></th>
								<th class="col-md-1">Buy Now</th>
							</tr>
						</thead>
						@foreach ($musics as $music)
						<tr>
							<td class="col-md-8">{{ $music->name }}</td>
							<td class="col-md-2">{{$music->duration}}</td>
							<td class="col-md-1">{{$music->price}} &euro;</td>
							<td class="col-md-1">
								<button type="button" class="btn btn-default">
								  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
								</button>
							</td>
							</tr>
						@endforeach
					</table>
				
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
