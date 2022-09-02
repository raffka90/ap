@extends('layout.master')

@section('content')
    <div class="container mt-3 bg-white p-4">
        <div class="card">
            <div class="card-header">
                <h4 class="float-start">Form Tambah Pedagang</h4>
            </div>
            <div class="card-body">
                <form method="post" action="/pedagang/store" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    {{-- <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal lahir</label>
                        <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div> --}}
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Awal</label>
                        <input type="date"  value="{{ date('Y-m-d') }}" name="sewa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Akhir</label>
                        <input type="date" name="akhir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                        <label for="exampleInputPassword1" class="form-label">Lapak</label>
                        <select name="lapak" id="" class="form-control">
                          <option value="">--Pilih Jurusan--</option>
                          @foreach ($lapak as $item)
                              <option value="{{$item->id}}">{{$item->lapak}}</option>
                          @endforeach
                        </select>
                      </div> --}}
                   
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No Hp</label>
                        <input type="text" name="hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Lapak</label>
                        <div class="col-sm-15">
                          <select name="lapak" class="form-control" id="">
                            <option value="">-Pilih Jenis-</option>
                            @foreach ($lapak as $item)
                              <option value="{{$item->id}}">{{$item->jenis_lapak}}</option>
                            @endforeach
    
                          </select>
                        </div>
                      </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Foto</label>
                        <input type="file" name="foto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                    <a href="/pedagang" class="btn btn-warning text-white">Batal</a>
                </form>
            </div>
        </div>
    </div>
@endsection