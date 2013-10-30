
@section('content')

	<table border="1">
		<thead>
			<tr>
				@foreach ($headers as $th)
					<th>{{ $th }}</th>
				@endforeach
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($data as $td)
				<tr>
					@foreach ($columns as $column)
						<td>{{ $td->$column }}</td>
					@endforeach
					<td>{{$td->editLink}}</td>
					<td>{{$td->deleteLink}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	<a href="{{$createURL}}">Create Record</a>

@stop