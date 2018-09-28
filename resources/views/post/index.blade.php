@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
            @foreach($posts as $post)
            <div class="card">
                <div class="card-header">
                  {{ $post->title }}
                  <div class="float-sm-right">
                    <form class="" action="{{ route('post.destroy', $post) }}" method="post">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                        <div class="btn-group btn-group-sm">
                          <a href="{{ route('post.edit', $post) }}" class="btn btn-xs btn-primary">Edit</a>
                          <button type="submit" class="btn btn-xs btn-danger" name="button">Hapus</button>
                        </div>
                    </form>
                </div>

                <div class="card-body">
                    <p>{{ $post->content }}</p>
                </div>
            </div>
            @endforeach
          </div>
      </div>
    </div>
@endsection
