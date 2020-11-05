<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <title>Document</title>
</head>
<body>
    <h1>Contact Book</h1>
    <a href="{{ URL::to('/') }}" class="btn btn-success">Home</a>
    <a href="{{URL::to('/insert-contact')}}" class="btn btn-primary">Add new</a>
    <br><br>
    <table class="table table-bordered">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contactData as $value )
        <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->email}}</td>
        <td>{{$value->phone}}</td>
        <td> 
            <a href="{{URL::to('edit-contact/'.$value->id)}}" class="btn btn-info">Edit</a>
            <a href="{{URL::to('delete-contact/'.$value->id)}}" class="btn btn-danger">Delete</a>
            <a href="{{URL::to('view-contact/'.$value->id)}}" class="btn btn-primary">View</a>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>