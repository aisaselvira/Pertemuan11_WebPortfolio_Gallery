@extends('auth.layouts')
@section('content')
<br><br>
<div class="section-heading text-center">
    <h2>Create Portfolio</h2>
</div>
    <form action="{{ route('dashboard') }}" method="GET">
        @csrf
        <button type="submit" class="btn btn-danger btn-sm back-button">Back</button>
    </form>
    <form action="{{ route('storePorto') }}" method="POST" enctype="multipart/form-data"> @csrf <div class="mb-3 row">
        <label for="title" class="col-md-4 col-form-label text-md-end text-start">Judul</label>
        <div class="col-md-6">
            <input type="text" class="form-control" id="title" name="title">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        </div>
        <div class="mb-3 row">
            <label for="description" class="col-md-4 col-form-label text-md-end text-start">Deskripsi</label>
            <div class="col-md-6">
            <textarea class="form-control form-control-edit" id="description" rows="5" name="description"></textarea>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
<div class="mb-3 row d-flex">
    <label for="input-file" class="col-md-4 col-form-label text-md-end text-start">File</label>
    <div class="col-md-6">
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input form-control-edit" id="input-file" name="picture">
            </div>
        </div>
    </div>
</div>
<div class="mb-3 row d-flex">
    <label for="input-file" class="col-md-4 col-form-label text-md-end text-start"></label>
    <div class="col-md-6 d-flex justify-content-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
@endsection