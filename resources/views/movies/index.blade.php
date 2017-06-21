@extends('app')

@section('content')

<div class="page-header">
	<h3>
		Peliculas
		<div class="pull-right">
			<a href="{{ URL('movies/create') }}"
				class="btn btn-sm  btn-primary iframe"><span
				class="glyphicon glyphicon-plus-sign"></span>
				Nueva</a>
		</div>
	</h3>
</div>
<table id="table" class="table table-striped table-hover">
	<thead>
		<tr>
			<th> Título </th>
		</tr>
	</thead>
	<tbody>
		@foreach ($movies as $movie)
		<tr>
			<td>
				{{$movie->name}}
			</td>
		</tr>
		@endforeach
	</tbody>

</table>

@endsection
