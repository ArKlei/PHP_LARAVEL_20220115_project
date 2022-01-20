<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Our clients</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
#mySidenav a {
  position: absolute;
  left: -140px;
  transition: 0.3s;
  padding: 15px;
  width: 200px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
  left: 0;
}

#main {
  top: 20px;
  background-color: #04AA6D;
}

#create {
  top: 80px;
  background-color: #2196F3;
}

#company {
  top: 140px;
  background-color: #f44336;
}

#create_company {
  top: 200px;
  background-color: #555
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="{{route('main')}}" id="main">Main</a>
  <a href="{{route('client.create')}}" id="create">Add client</a>
  <a href="{{route('company.index')}}" id="company">Companies</a>
  <a href="{{route('company.create')}}" id="create_company">Add company</a>
</div>


    <div class="container">
    <p><h1 style="text-align:center; font-size:50px; color:gold">Present clients's data</h1><p>



@if (count($clients) == 0)
    <p>There is no clients in the database yet</p>
@endif

<table class="table table-striped">
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Surname</th>
    <th>Username</th>
    <th>Company name</th>
    <th>Image address (url)</th>
</tr>


@foreach ($clients as $client)
    <tr>
        <td>{{$client->id}}</td>
        <td>{{$client->name}}</td>
        <td>{{$client->surname}}</td>
        <td>{{$client->username}}</td>
        <!--<td>{{$client->company_id}}</td>-->
        <td>{{$client->clientCompany->name}}</td>
        <td>{{$client->image_url}}</td>
        <td>
            <a class="btn btn-primary" style="width:100px" href="{{route('client.edit', [$client])}}">Edit</a><p>
            <p><a class="btn btn-secondary" style="width:100px" href="{{route('client.show', [$client])}}">Show</a>
<p>
            <form method="post" action='{{route('client.destroy', [$client])}}''>
                @csrf
                <button class="btn btn-danger" style="width:100px" type="submit">Delete</button>
            </form>
        </td>
    </tr>
@endforeach
</table>


{{-- create forma - mums reikia nuorodos ar mygtuko --}}
<a class="btn btn-primary" href="{{route('client.create')}}">Include new client's data into database</a>
<p>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>