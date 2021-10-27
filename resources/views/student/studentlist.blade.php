@extends('master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <title>Student list</title>
        <style>
            html {
                background: url(/images/b1.png) repeat center fixed; 
                font-family: Verdana, Geneva, sans-serif;   
            }

            a{
                float: right;
                height: 50px;
                width: 200px;
            }
            
            div {
                margin: 20px;
                width: 100%;
            }

            th{
                background-color: rgb(80, 124, 124);
                color: white;
            }

            table,tr,td{
                background-color: rgb(177, 205, 205);
            }

        </style>
</head>
<body>
<div class="row">
 <div class="col-md-12">
  <br/>
  <h3>Student List<a href="{{route('student.create')}}" class="btn btn-primary">Add New Student</a></h3><br>
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  </div>
  <table class="table table-bordered table-striped">
   <tr>
    <th style="width: 5%">No.</th>
    <th>First Name</th>
    <th>Last Name</th>
   </tr>
   @foreach($students as $row)
   <tr>
    <td>{{$row['id']}}</td>
    <td>{{$row['first_name']}}</td>
    <td>{{$row['last_name']}}</td>
   </tr>
   @endforeach
  </table>
 </div>
</div>
</body>
</html>
@endsection