<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        table.static{
            position: relative;
            /*left:3%;*/
            border: 1px solid #543535;
        }
    </style>
    <title> Laporan pembayaran</title>
  </head>
  <body>
    <div class="form-group">
        <p align="center"><b>Laporan pembayaran</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">

            <thead>
                <tr>
                    
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
                        
                        <td>{{ $item->no_pembayaran }}</td>
                        <td>{{$item->nama}}</td>
                        {{-- <td>{{ $item->tempat_lahir }}/ {{ $item->tanggal_lahir }}</td> --}}
                        <td>{{$item->lapaks->jenis_lapak}}</td>
                        <td>{{ $item->harga }}</td>
                        <td>{{ $item->tanggal_bayar }}</td>
            </tr>

            @empty
                @endforelse
            
        
        </table>
    </div>

    <script type="text/javascript">
        window.print('layout.landscape');
    </script>
    
  </body>
</html>