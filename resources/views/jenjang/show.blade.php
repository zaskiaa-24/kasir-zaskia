@extends('adminlte::page')

@section('title', 'Detail Jenjang')

@section('content_header')
    <h1>Detail Jenjang</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Informasi Jenjang</h3>
        </div>
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">Nama Jenjang</dt>
                <dd class="col-sm-9">{{ $jenjang->nama_jenjang }}</dd>

                <dt class="col-sm-3">Keterangan</dt>
                <dd class="col-sm-9">{{ $jenjang->keterangan ?: '-' }}</dd>
            </dl>
        </div>
        <div class="card-footer">
            <a href="{{ route('jenjang.edit', $jenjang->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('jenjang.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
@stop
