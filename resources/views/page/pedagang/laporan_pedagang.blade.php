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
    <title> Laporan</title>
  </head>
  <body>
    <div class="form-group">
        <img height="100" width="100" src="{{ asset('img/logo.jpg') }}" alt="">
        <p align="center"><b>Laporan Data Pedagang</b></p>
        <p align="center"><b>Pasar seutui Kota Banda Aceh</b></p>
        <p align="center"><b>Jl. Teuku umar, Seutui Kota Banda Aceh </b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">

            <thead>
                <tr>
                    
                    {{-- <th scope="col">ID Pedagang</th> --}}
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Sewa / Tanggal akhir</th>
                    <th scope="col">No Hp</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jenis</th>
                    
                </tr>
            </thead>
            <tbody>
                @forelse ($pedagang as $item)
                    <tr>
                        
                        <td align="center">{{ $item->nama }}</td>
                        <td align="center" >{{ $item->tanggal_sewa }} / {{ $item->tanggal_akhir }}</td>
                        <td align="center">{{ $item->no_hp }}</td>
                        <td align="center">{{ $item->alamat }}</td>
                        <td align="center">{{$item->lapaks->jenis_lapak}}</td>
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