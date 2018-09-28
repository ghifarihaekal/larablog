@extends('layouts.app')

@section('content')
  <div class="container">
    <form class="" action="{{ route('post.store') }}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="">Title</label>
        <input type="text" class="form-control" id="" placeholder="Post title" name="title">
      </div>

      <div class="form-group">
        <label for="">Category</label>
        <select class="form-control" name="category_id">
          @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="">Content</label>
        <textarea name="content" rows="5" cols="80" class="form-control" placeholder="Post content"></textarea>
      </div>

      <div class="form-group">
        <input type="submit" class="btn btn-primary" name="" value="Save">
      </div>
    </form>
  </div>
@endsection
