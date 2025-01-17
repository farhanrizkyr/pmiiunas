@extends('master.tampil')
@section('tittle','Edit File Arsip pengurus')
@section('page','Edit File Arsip Komi')
@section('contentt','Halaman Edit File Arsip Komisariat')
@section('content')
<form  method="post" action="/filearsipkomi/proses_edit_file_pengurus/{{$file->id}}" enctype="multipart/form-data">
  @csrf
    <input type="hidden" value="{{$file->file}}" name="file_lama">
  <div class="grup">
    <label for="">Periode Kepengurusan</label>
    <input name="name" autocomplete="off" type="text" value="{{$file->name}}" class="form-control">
    <span class="text-danger">Jika ingin menginput file dengan tahun jangan gunakan tanda (/) contoh: 2018/2019</span>
    @error('name')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>
  <div class="grup">
    <label for="">File PDF Kepengurusan</label>
    <input name="file" autocomplete="off" type="file" value="{{old('file')}}" class="form-control">
    @error('file')
    <p class="text-danger">{{$message}}</p>
    @enderror
    <hr>
    File PDF:
    <a href="/FileArsipPengurus/{{$file->file}}">{{$file->file}}</a>
  </div>
  <br>
  <button class="btn btn-primary">
    <i class="fas fa-save"></i>
    Save
  </button>
  <a href="/filearsipkomi" class="btn btn-info">
    <i class="fas fa-arrow-left"></i>
    Kembali
  </a>
</form>
@endsection
