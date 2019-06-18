  
<!DOCTYPE html>
<html>
<head>
@include('home')
@include('header')
@include('menu')
@include('banner')

<head>

        <meta charset="UTF-8">
        <title>Log in Administrator Page</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />


    <title>Tutorial Membuat Pagination Pada Laravel</title>
</head>
<body>
<nav id="top">
    <div class="container">
      <div class="row">
        <div class="col-xs-6">

    <style type="text/css">
        .pagination li{
            float: left;
            list-style-type: none;
            margin:5px;
        }
    </style>

    <h2></h2>
    <h3>Data Barang</h3>


    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
        </tr>
        @foreach($pegawai as $p)
        <tr>
            <td>{{ $p->pegawai_nama }}</td>
            <td>{{ $p->pegawai_jabatan }}</td>
            <td>{{ $p->pegawai_umur }}</td>
            <td>{{ $p->pegawai_alamat }}</td>
        </tr>
        @endforeach
    </table>

    <br/>
    Halaman : {{ $pegawai->currentPage() }} <br/>
    Jumlah Data : {{ $pegawai->total() }} <br/>
    Data Per Halaman : {{ $pegawai->perPage() }} <br/>


    {{ $pegawai->links() }}

</div>
</div>
</div>
</nav>
@include('footer')
</body>
</html>