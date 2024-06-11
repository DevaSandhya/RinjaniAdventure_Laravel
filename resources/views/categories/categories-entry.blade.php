@extends('layouts.app')

@section('title')
Tambah Kategori | Rinjani Adventure Admin
@endsection

@section('content')
<h3>Input Kategori</h3>
<div class="form-login">
  <form action="{{ url('/category/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="categories">Kategori</label>
    <input class="input" type="text" name="nama" id="categories" placeholder="Kategori" value="{{ old('nama') }}" />
    @error('nama')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="price">Harga</label>
    <input class="input" type="text" name="harga" id="price" placeholder="Harga" value="{{ old('harga') }}" />
    @error('harga')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="description">Deskripsi</label>
    <textarea class="input" name="deskripsi" id="description" placeholder="Deskripsi">{{ old('deskripsi') }}</textarea>
    @error('deskripsi')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="photo">Foto</label>
    <input type="file" name="gambar" id="photo" />
    @error('gambar')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="Simpan" style="margin-top: 50px">
      Simpan
    </button>
  </form>
</div>
@endsection
