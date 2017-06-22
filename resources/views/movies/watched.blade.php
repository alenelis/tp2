@extends('app')

@section('content')

<div class="page-header">
	<h3>
		Peliculas vistas por
	</h3>
</div>
<table id="table" class="table table-striped table-hover">
	<thead>
		<tr>
			<th> Usuarios </th>
		</tr>
	</thead>
	<tbody>
		@foreach ($watched as $watch)
		<tr>
			<td>
				{{$watch->Uno}}
			</td>
			<td>
				{{$watch->Dos}}
			</td>
		</tr>
		@endforeach
	</tbody>

</table>

@endsection
