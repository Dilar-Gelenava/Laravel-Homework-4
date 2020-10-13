@extends('layouts.main')
@section('title', 'Table')
@section('content')
	<table>
		<tr>
			<th>#</th>
			<th>id</th>
			<th>title</th>
			<th>text</th>
			<th>description</th>
			<th>created_at</th>
			<th>updated_at</th>
		</tr>
		@foreach ($posts as $post)
			<tr>
				<td>{{ ++$loop->index }}</td>
				<td>{{ $post['id']}}</td>
				<td>{{ $post['title']}}</td>
				<td>{{ $post['text']}}</td>
				<td>{{ $post['description']}}</td>
				<td>{{ $post['created_at']}}</td>
				<td>{{ $post['updated_at']}}</td>
			</tr>
		@endforeach
	</table>
	<a href="/">repost</a>
</body>
</html>
@endsection