@extends('layouts.backend')

@section('title', 'Tambahinfo News')

@section('content')
<main class="col-md-8 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Form Tambah Info</h1>
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

    <form method="POST" enctype="multipart/form-data" action={{ route('form_news') }}>
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" rows="10" name="content">{{ old('content') }}</textarea>
          </div>
          <div class="mb-3">
            <label for="content" class="form-label">Image</label>
            <img class="img-preview img-fluid">
            <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a type="button" class="btn btn-danger" href="{{ route('backend_index') }}">Cancel</a>
    </form>
    <script>
        function previewImage(){
            const image = document.querySelector('image');
            const imgPreview = document.querySelector('. img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFRevent){
                imgPreview.src = oFRevent.target.result;
            }

        }
    </script>
@endsection


