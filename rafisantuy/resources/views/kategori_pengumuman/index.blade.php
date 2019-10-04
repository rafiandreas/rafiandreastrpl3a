@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">listKategoriPengumuman</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table border='2'>
                        <tr>
                            <td>ID</td>
                            <td>Nama</td>
                            <td>User_id</td>
                            <td>Create</td>
                            <td>aksi</td>
                        </tr>
                         @foreach($listKategoriPengumuman as $item)
                        <tr>
                            <td>{!! $item->id !!}</td>
                            <td>{!! $item->nama !!}</td>
                            <td>{!! $item->users_id !!}</td>
                            <td>{!! $item->created_at->format('d/m/Y H:i') !!}</td>
                            <td>
                                <a href="{!! route('kategori_pengumuman.show' ,[$item->id]) !!}"
                                    class="btn btn-sm btn-danger">lihat</a>
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
