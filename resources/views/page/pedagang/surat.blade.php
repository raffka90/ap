
<html>
<head>
<title></title>
</head>
<body>
{{-- <p align="left">{{ date('Y-m-d') }}"<br>
         Hal: Lamaran Pekerjaan<br> --}}
<br>
<h1 align="center">Surat Perjanjian sewa lapak</h1>


<br>
<br>




<p align="left">Kami Yang bertanda tangan dibawah ini:<br>
<br>

<p align="left">Nama    : UPTD kota Banda Aceh <br>
    <br>
<p align="left">Alamat  : Kp. laksana No. 78<br>
    <br>
<p align="left">No Hp   : 08667534129 <br>
    
    <h5 align="left">Disebut Pihak Pertama / YANG MENYEWAKAN  </h5><br>

    
    <br>
    <p align="left">Nama    : {{$pedagang->nama}} <br>
        <br>
    <p align="left">Alamat  :{{$pedagang->alamat}} <br>
        <br>
    <p align="left">No Hp   : {{$pedagang->no_hp}}<br>
        
        <h5 align="left">Disebut PIHAK KEDUA / YANG MENYEWA  </h5><br>







<br>
<p align="left">Dengan ini Menyatakan Bahwa Pihak 1 menyewakan Lapak yang berada Dipasar Seutui<br>
<p align="left">Kepada Pihak 2 Selama 1 Tahun Yang terhitung pada tanggal {{$pedagang->tanggal_sewa}}  -  {{$pedagang->tanggal_akhir}}<br>
<br>
<p align="left">Hormat saya,<br>
<br>
<p align="left">UPTD kota banda aceh
    
</body>
<script type="text/javascript">
    window.print('layout.landscape');
</script>
</html>