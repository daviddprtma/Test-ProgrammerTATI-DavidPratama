@extends('layouts.layout')
@section('content')
    <h3 class="page-title">
        Edit Log
    </h3>

    <div class="page-bar">
        <div class="portlet">
            <div class="portlet-body">
                <form action="{{ url('log-update/' . $log->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="date">Tanggal</label>
                        <input type="date" name="date" class="form-control" value="{{ $log->date }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
