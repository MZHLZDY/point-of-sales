@extends('layout')
@section('title', 'Add Category')
@section('content-title', 'Add Category')
@section('content') 
<form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="form-group mb-3 col-md-5">
    <label class="font-weight-bold">Category Name</label>
    <input class="form-control @error('name') is-invalid @enderror" name="name" rows="5" placeholder="Masukkan Nama Kategori">{{ old('name') }}</input>

    {{-- untuk menampilkan pesan eror --}}
    @error('name')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
    @enderror
</div>
    <button type="submit" class="btn btn-md btn-primary me-3">SAVE</button>
    <button type="reset" class="btn btn-md btn-warning">RESET</button>
</form>
@endsection