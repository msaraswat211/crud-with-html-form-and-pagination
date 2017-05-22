@extends('master')
@section('content')


{{-- page header start --}}
<h1>All Records</h1>
{{-- page header end --}}

<a href="{{ route('blog.create') }}" class="btn btn-primary pull-right">Create New Data</a>

<hr>
<br>
{{-- result table start --}}
<table class="table">
	<tr>
		<th>Title</th>
		<th>Description</th>
		<th>Created At</th>
		<th>Updated At</th>
		<th>Action</th>
	</tr>
	@each('blogs',$blogs,'blog')
</table>
{{-- result table end --}}
@endsection