@extends('layout.main')
@section('main')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<div class="container">

    <h3 class="text-center">Many to Many Relationship</h3>
    <div class="card">
        <div
    class="table-responsive"
>
    <table
        class="table table-white"
    >
        <thead>
            <tr>
                <th scope="col">Shop</th>
                <th scope="col">Products</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($shops as $item)
            <tr class="">
                <td scope="row">{{$item->name}}</td>
                <td>
                    <div class="card">
                        <div
                    class="table-responsive"
                >
                    <table
                        class="table table-white"
                    >
                        <thead>
                            <tr>
                                <th scope="col">Product Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($item->Product as $product)   
                                    <tr class="">
                                        <td scope="row">{{$product->name}}</td>
                                        <td>{{$product->count}}</td>
                                        <td>{{$product->price}}</td>
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                    </div>
                </td>
                

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    </div>
 
<br>
<br>
<br>

<div class="card">
    <div
    class="table-responsive"
>
    <table
        class="table table-white"
    >
        <thead>
            <tr>
                <th scope="col">Product</th>
                <th scope="col">Shops</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($products as $item)
            <tr class="">
                <td scope="row">Product Name : {{$item->name}}<br> Quantity : {{$item->count}}<br>Price : {{$item->price}}</td>
                <td>
                    <div class="card">
                        <div
                    class="table-responsive"
                >
                    <table
                        class="table table-white"
                    >
                        <thead>
                            <tr>
                                <th scope="col">Product Name</th>
                                <th scope="col">Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($item->Shop as $shop)   
                                    <tr class="">
                                        <td scope="row">{{$shop->name}}</td>
                                        <td>{{$shop->type}}</td>

                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                    </div>
                </td>
                

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

</div>
@endsection