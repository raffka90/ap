@extends('layout.master')
@section('content')
    <div class="container mt-3 bg-white p-4">
        <div class="card">
            <div class="card-header">
                <h4 class="float-start">Data Lapak</h4>
                <a href="/lapak/form" class="float-right btn btn-primary">Tambah Data</a>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            {{-- <th scope="col">ID Pedagang</th> --}}
                            <th scope="col">No Lapak</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Unit</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($lapak as $item)
                            <tr>
                                <th scope="row">{{$nomor++}}</th>
                                <td>{{ $item->no_lapak }}</td>
                                <td>{{ $item->jenis_lapak}}</td>
                                <td>{{ $item->harga}}</td>
                                <td>{{ $item->unit}}</td>
                                
                                
                                <td>
                                     <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn btn-sm" data-bs-toggle="modal" data-bs-target="#foto{{$item->id }}">
                      Foto
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="foto{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Foto</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <img src="berkas/{{$item->foto}}" height="260" alt="">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                                    <a href="/lapak/edit/{{$item->id}}" class="btn btn-sm text-white btn-info"><i class="fa fa-pencil-alt"></i></a>
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#a{{$item->id}}">
                                  <i class="fa fa-trash-alt"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="a{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                                      </div>
                                      <div class="modal-body">
                                        Yakin ingin menghapus  <b>{{$item->jenis_lapak}}</b> ?
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <form method="POST" action="/lapak/{{$item->id}}">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-primary">Hapus</button>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                             
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">Tidak Ada Data</td>
                            </tr>
                        @endforelse
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection