@extends('layouts.layout')
@section('content')
    <h3 class="page-title">
        Create Log
    </h3>


    <div class="page-bar">
        <div class="portlet">
            <div class="portlet-body">
                <form action="{{ route('log.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="date">Tanggal</label>
                        <input type="date" name="date" class="form-control">
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
