@extends('master')

@section('title')
Buat Project
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Apa yang ada di pikiranmu?</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="{{ route('pertanyaan.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Nama Project :</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nama Project" value="{{ old('judul', '') }}">
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="desc">Deskripsi Project :</label>
                <input type="text" class="form-control" id="desc" name="desc" placeholder="Deskripsi Project" value="{{ old('judul', '') }}">
            </div>
            @error('desc')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="start">Waktu dimulai Project :</label>
                <input type="text" class="form-control" id="start" name="start" placeholder="Mulai" value="{{ old('judul', '') }}">
            </div>
            @error('start')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="deadline">Waktu deadline Project :</label>
                <input type="text" class="form-control" id="deadline" name="deadline" placeholder="Deadline" value="{{ old('judul', '') }}">
            </div>
            @error('deadline')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="status">Status Project :</label>
                <input type="text" class="form-control" id="status" name="status" placeholder="Status Project" value="{{ old('judul', '') }}">
            </div>
            @error('status')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="manager">Manager yang bertanggung-jawab :</label>
                <input type="text" class="form-control" id="manager" name="manager" placeholder="ID Manager" value="{{ old('judul', '') }}">
            </div>
            @error('manager')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection