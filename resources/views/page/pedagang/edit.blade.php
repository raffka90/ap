@extends('layout.master')

@section('content')
    <div class="container mt-3 bg-white p-4">
        <div class="card">
            <div class="card-header">
                <h4 class="float-start">Form Edit Pedagang</h4>
            </div>
            <div class="card-body">
                <form method="post" action="/pedagang/{{$pedagang->id}}"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                   
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                        <input type="text" value="{{$pedagang->nama}}" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Awal</label>
                        <input type="date"  value="{{$pedagang->tanggal_sewa}}"  readonly name="sewa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Akhir</label>
                        <input type="date" value="{{$pedagang->tanggal_akhir}}"  name="akhir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                          <option value="">--Pilih Lapak--</option>
                          @foreach ($lapak as $item)
                              <option value="{{$item->id}}">{{$item->lapak}}</option>
                          @endforeach
                        </select>
                      </div> --}}
                   
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No Hp</label>
                        <input type="text" value="{{$pedagang->no_hp}}" name="hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="text" value="{{$pedagang->alamat}}" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Lapak</label>
                        <div class="col-sm-15">
                          <select name="lapak" class="form-control" id="">
                            <option value="">-Pilih Jenis-</option>
                            @foreach ($lapak as $item)
                             
                              <option value="{{$item->id}}" {{$pedagang->lapak_id==$item->id ? 'selected' : ''}}>{{$item->jenis_lapak}}</option>
                            @endforeach
    
                          </select>
                        </div>
                      </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Foto</label>
                        <input type="file" value="{{$pedagang->foto}}" name="foto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <button type="submit" class="btn btn-primary">Selesai</button>
                    <a href="/pedagang" class="btn btn-warning text-white">Batal</a>
                </form>
            </div>
        </div>
    </div>
@endsection