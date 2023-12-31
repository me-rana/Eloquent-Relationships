@extends('layout.main')
@section('main')

            <br>
            <h3 class="text-center">Belongs To</h3>
            <div class="table-responsive">
                <table class="table table-light">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Roll No</th>
                            <th scope="col">Email</th>
                            <th scope="col">Class</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        <tr class="">
                            <td scope="row">{{$student->student_name}}</td>
                            <td>{{$student->id}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->getClassRoom->class_name}}</td>
                        </tr>
                        @endforeach
                      
                    </tbody>
                </table>
            </div>
            <br> <br>
        <h5 class="text-center">&copy;Rana Bepari</h5>
            <br> <br> <br>
            <h3 class="text-center">Has Many</h3>
            <div class="table-responsive">
                <table class="table table-light">
                    <thead>
                        <tr>
                            <th scope="col">Class Name</th>
                            <th scope="col">Student Info's</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($classes as $sclass)
                        <tr class="">
                            <th scope="row">{{$sclass->class_name}}</th>
                            <td>
                                <div class="table-responsive">
                                    <table class="table table-light">
                                        <thead>
                                            <tr>
                                                <th scope="col">Class ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach ($sclass->getStudent as $sOne)
                                           <tr class="">
                                            <td scope="row">{{$sOne->id}}</td>
                                            <td>{{$sOne->student_name}}</td>
                                            <td>{{$sOne->email}}</td>
                                        </tr>
                                           @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
    
@endsection