@extends('layouts.app')

@section('content')
<div class="container">
    <div class=" row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">list kategori Galeri</div>

                <div class="card-body">

                <div class="from-group row">
                    <label class="col-md-4 col-from-label text-md-right">ID</label>
                    <label class="col-md-8 col-from-label text-md-left">{!! $kategoriGaleri->id !!}</label>
                </div>

                <div class="from-group row">
                    <label class="col-md-4 col-from-label text-md-right">Nama</label>
                    <label class="col-md-8 col-from-label text-md-left">{!! $kategoriGaleri->nama !!}</label>
                </div>

                <div class="from-group row">
                    <label class="col-md-4 col-from-label text-md-right">Users_id</label>
                    <label class="col-md-8 col-from-label text-md-left">{!! $kategoriGaleri->users_id !!}</label>
                </div>

                <div class="from-group row">
                    <label class="col-md-4 col-from-label text-md-right">create</label>
                    <label class="col-md-8 col-from-label text-md-left">{!! $kategoriGaleri->created_at->format('d/m/YH:i') !!}</label>
                </div>

                <div class="from-group row">
                    <label class="col-md-4 col-from-label text-md-right">Update</label>
                    <label class="col-md-8 col-from-label text-md-left">{!! $kategoriGaleri->updated_at->format('d/m/YH:i') !!}</label>
                </div>

                <div class="from-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <a href="{!! route('kategori_galeri.index') !!}" class="btn btn-danger">back</a>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection



