@extends('master')
@section('content')

<h1>Edit Record</h1>

<a href="{{ route('blog.create') }}" class="btn btn-primary pull-right">Create New Data</a>

<hr>
<form action="{{ route('blog.update', $blog->id) }}" method="post">

{{-- to recieve resource controller method --}}
<input type="hidden" name="_method" value="PATCH">

{{csrf_field()}}

  <div class="form-group{{ ($errors->has('title')) ? $errors->first('title') : '' }}">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" value="{{ $blog->title }}">
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
  </div>

  <div class="form-group{{ ($errors->has('content')) ? $errors->first('content'): ''}}">
    <label for="description">Description</label>
    <textarea class="form-control" name="content" rows="4">{{ $blog->content }}</textarea>
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
  </div>

  <button type="submit" name="create" class="btn btn-primary">Create New</button>

</form>

@endsection