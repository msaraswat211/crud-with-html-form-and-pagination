	<tr>
		<td>
			{{ $blog->title }}
		</td>
		<td>
			{{ $blog->content }}
		</td>
		<td>
			{{ $blog->created_at }}
		</td>
		<td>
			{{ $blog->updated_at}}
		</td>
		<td>

			{{-- form start --}}
			<form action="{{ route('blog.destroy', $blog->id)}}" method="post">

			{{-- to recieve resource controller method --}}
				<input type="hidden" name="_method" value="delete">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				
				<a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-primary">Edit</a>
				<input type="submit" name="delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete this data')" value="Delete">
			</form>
			{{-- form end --}}

		</td>
	</tr>