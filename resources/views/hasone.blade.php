@extends('layout.main')
@section('main')
    <br>
    <h3 class="text-center">Belongs To</h3>
    <div class="table-responsive">
        <table class="table table-light">
            <thead>
                <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">User Address</th>
                    <th scope="col">Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr class="">
                    <td scope="row">{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->getUserInfo->address}}</td>
                    <td>{{$user->getUserInfo->phone}}</td>
                </tr>
                @endforeach
  
            </tbody>
        </table>
        <br> <br>
        <h5 class="text-center">&copy;Rana Bepari</h5>
        <br> <br> <br>
        <h3 class="text-center">Has One</h3>
        <div class="table-responsive">
            <table class="table table-light">
                <thead>
                    <tr>
                        <th scope="col">Serial</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($userinfos as $userinfo)
                    <tr class="">
                        <td scope="row">{{$userinfo->id}}</td>
                        <td>{{$userinfo->address}}</td>
                        <td>{{$userinfo->phone}}</td>
                        <td>{{$userinfo->getUser->name}}</td>
                        <td>{{$userinfo->getUser->email}}</td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
        
    </div>
    

@endsection