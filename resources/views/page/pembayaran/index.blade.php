@extends('layout.master')
@section('content')
    <div class="container mt-3 bg-white p-4">
        <div class="card">
            <div class="card-header">
                <h4 class="float-start">Data pembayaran</h4>
                <a href="/pembayaran/form" class="float-right btn btn-primary">Tambah Data</a>
                <a href="/laporan" target="blank" class=" mr-3 float-right btn btn-primary">Laporan</a>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            {{-- <th scope="col">ID Pedagang</th> --}}
                            <th scope="col">No Pembayaran</th>
                            <th scope="col">Nama</th>
                            
                            <th scope="col">Jenis lapak</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Tanggal Bayar</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pembayaran as $item)
                            <tr>
                                <th scope="row">{{$nomor++}}</th>
                                <td>{{ $item->no_pembayaran }}</td>
                                <td>{{$item->nama}}</td>
                            
                                <td>{{$item->lapaks->jenis_lapak}}</td>
                                <td>Rp.{{number_format ($item->lapaks->harga) }}</td>
                                <td>{{ $item->tanggal_bayar }}</td>
                                
                                <td>
                                    {{-- <a href="/pembayaran/edit/{{$item->id}}" class="btn btn-primary btn-sm">edit</a> --}}
                                    
                                    <button type="button" class="btn btn-secondary btn btn-sm">
                                        <a href="/struk/{{$item->id}}" target="blank">
                                        Cetak</a></button>

                                    <!-- Modal -->
                                    {{-- <div class="modal fade" id="a{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            Yakin ingin dihapus<br> --}}
                                            {{-- {{$item->nama}} ingin dihapus? --}}
                                            {{-- </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <form method="post" action="/pembayaran/{{$item->id}}">
                                                @csrf
                                                @method('DELETE')        
                                                <button type="submit" class="btn btn-primary">Hapus</button>
                                            </form>
                                            </div>
                                        </div>
                                        </div>
                                    </div>             --}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">Tidak Ada Data</td>
                            </tr>
                        @endforelse
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection