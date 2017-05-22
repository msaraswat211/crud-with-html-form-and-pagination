@extends('master')
@section('content')

<h1>Creat New Record</h1>
<form action="{{ route('blog.store') }}" method="post">
{{csrf_field()}}
  <div class="form-group{{ ($errors->has('title')) ? $errors->first('title') : '' }}">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" placeholder="Write title here">
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
  </div>
  <div class="form-group{{ ($errors->has('content')) ? $errors->first('content'): ''}}">
    <label for="description">Description</label>
    <textarea class="form-control" name="content" rows="4" placeholder="Write description here"></textarea>
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
  </div>
  <input type="submit" name="create" class="btn btn-primary" value="Create New">
</form>

@endsection