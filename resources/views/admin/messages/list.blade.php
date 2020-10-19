<table>
	<thead>
		<th>Name</th>
		<th>Email</th>
		<th>Message</th>
	</thead>
	<tbody>
		@foreach($messages as $message)
		<tr>
			<td>{{$message->name}}</td>
			<td>{{$message->email}}</td>
			<td>{{$message->message}}</td>
		</tr>
		@endforeach
	</tbody>
</table>