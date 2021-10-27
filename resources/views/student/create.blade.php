@extends('master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <title>Insert data</title>
        <style>
            html {
                background: url(/images/b1.png) repeat center fixed; 
                font-family: Verdana, Geneva, sans-serif;   
            }
            
            form {
                display: -webkit-flex;
                display: flex;
                -webkit-flex-flow: row wrap; 
                flex-flow: row wrap;
                background-color: rgb(255, 191, 128);
            } 

            div {
                margin: 20px;
                width: 100%;
            }
            
            input[type="submit"], input[type="reset"] {
                height: 50px;
                width: 200px;
            }
        </style>
</head>
<body>
<div class="row">
 <div class="col-md-12">
  <br />
  <h2>&ensp;&ensp;Add New Student</h2>
  <br />
  @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="alert alert-success">
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif

  <form method="post" action="{{url('student')}}">
   {{csrf_field()}}
   <div class="form-group">
    <input type="text" name="first_name" class="form-control" placeholder="Enter First Name" />
   </div>
   <div class="form-group">
    <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" />
   </div>
   <div>
       <input type="reset" class="btn btn-primary" value="Reset"/>
       <input type="submit" class="btn btn-primary" value="Submit"/>
    </div>
  </form>
 </div>
</div>
</body>
</html>
@endsection