<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show clients's company by ID</title>
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
        <p><h1 style="text-align:center; font-size:50px; color:gold"> {{$company->type}} {{$company->name}}  </h1><p>
        <p>Id : {{$company->id}}</p>
        <p>Name : {{$company->name}}</p>
        <p>Description : {{$company->description}}</p>
        <p>

        @if(count($company->companyClients) == 0)
          <p>No Clients in this Company</p>
        @else
        <table class="table table-stripped">
          <tr>
            <td>ID</td>
            <td>Name</td>
            <td>surname</td>
            <td>Image</td>
            <td>Action</td>
          </tr>
          @foreach ($company->companyClients as $client)
          <tr>
            <td>{{$client->id}}</td>
            <td>{{$client->name}}</td>
            <td>{{$client->surname}}</td>
            <td><img src='{{$client->image_url}}' alt='{{$client->name}}' width="150" height="auto"/></td>
            <td>
                <form method="post" action='{{route('client.destroy',[$client])}}''>
                @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
            </form></td>
          </tr>
          @endforeach
        </table>
        @endif
        <form method="post" action='{{route('company.destroy', [$company])}}'>
            @csrf
            <button class="btn btn-danger" type="submit">Delete company from database</button>
        </form><p>
        <p><a class="btn btn-secondary" style="width:100px" href="{{route('company.index')}}">Back</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>