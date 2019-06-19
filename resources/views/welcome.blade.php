  
<!DOCTYPE html>
<html>
<head>

@include('home')
@include('header')
@include('menu')
@include('banner')


<body>
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


    
        @foreach($products as $p)
        <div class="col-sm-6 col-md-16">
            <div class="thumbnail">
        <tr>
            <td align="center"><img src="../uploads/{{$p->image}}" ></td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->description }}</td>
            <td><b>Rp.</b>{{ $p->price }}</td>
            <td>{{ $p->stock }}</td>
        </tr>
        </div>
        </div>
        @endforeach
    

    <br/>
    Halaman : {{ $products->currentPage() }} <br/>
    Jumlah Data : {{ $products->total() }} <br/>
    Data Per Halaman : {{ $products->perPage() }} <br/>


    {{ $products->links() }}

</div>
</div>
</div>
@include('footer')
</body>
</html>