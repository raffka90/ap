@extends('layout.master')

@section('content')
    <div class="container mt-3 bg-white p-4">
        <div class="card">
            <div class="card-header">
                <h4 class="float-start">Form Tambah Pedagang</h4>
            </div>
            <div class="card-body">
                <form method="post" action="/lapak/{{$lapak->id}}">
                    @csrf
                   @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nomor lapak</label>
                        <input type="text" value="{{$lapak->no_lapak}}" name="no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jenis Lapak</label>
                        <input type="text" value="{{$lapak->jenis_lapak}}" name="jenis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Harga</label>
                        <input type="text" value="{{$lapak->harga}}" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Unit</label>
                        <input type="text" value="{{$lapak->unit}}" name="unit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    {{-- <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                        <br>    
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="Laki-Laki">
                                <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="Perempuan">
                                <label class="form-check-label" for="inlineRadio2">perempuan</label>
                            </div>
                    </div> --}}
                   
                    {{-- <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No Hp</label>
                        <input type="text" name="nohp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div> --}}
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Foto</label>
                        <input type="file" name="foto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <button type="submit" class="btn btn-primary">Selesai</button>
                    <a href="/lapak" class="btn btn-warning text-white">Batal</a>
                </form>
            </div>
        </div>
    </div>
@endsection