@extends('layouts.backend')

@section('title', 'Edit News')

@section('content')
<main class="col-md-8 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Edit Info</h1>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action={{ route('update_news', $new->id) }} enctype="multipart/form-data">
        @csrf
        @method('Put')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $new->title }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" rows="10" name="content"> {{$new->content }}</textarea>
          </div>

          <div class="form-label mb-3">
            <label>Post Gambar</label>
            <input class="form-control mb-3" type="file" id="image" name="image" />

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="cancel" class="btn btn-danger">Cancel</button>
    </form>
@endsection


