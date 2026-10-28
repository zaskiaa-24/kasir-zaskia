@extends('adminlte::page')

@section('title', 'Edit Jenjang')

@section('content_header')
    <h1>Edit Jenjang</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('jenjang.update', $jenjang->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama_jenjang">Nama Jenjang</label>
                    <input type="text" name="nama_jenjang" class="form-control" id="nama_jenjang" value="{{ $jenjang->nama_jenjang }}" required>
                </div>

                <div class="form-group">
                    <label for="nis">Nis</label>
                    <input type="text" name="nis" class="form-control" id="nis" value="{{ $jenjang->nis }}" required>
                </div>

                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="jurusan" value="{{ $jenjang->jurusan }}">
                </div>

                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" name="kelas" class="form-control" id="kelas" value="{{ $jenjang->kelas }}">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{ $jenjang->email }}">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('jenjang.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@stop