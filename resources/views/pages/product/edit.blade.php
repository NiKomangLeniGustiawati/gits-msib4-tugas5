@extends('layouts.master')

@section('content')
  <div class="container">
    <h2 class="alert alert-primary text-center mt-3">Form Data Kategori</h2>

    <form>
      <div class="form-group">
        <label>Nama Produk</label>
        <input type="text" name="" class="form-control" placeholder="Nama Produk...">
        <input type="numerik" price="" class="form-control" placeholder="Harga Produk...">
        <input type="longText" description="" class="form-control" placeholder="Deskripsi...">
      </div>
      <button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>
  </div>

  @endsection