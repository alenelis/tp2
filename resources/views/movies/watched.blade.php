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
				{{$watch->uno}}
			</td>
			<td>
				{{$watch->dos}}
			</td>
		</tr>
		@endforeach
	</tbody>

</table>

@endsection
