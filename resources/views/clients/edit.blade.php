<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit client's data</title>
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
    <p><h1 style="text-align:center; font-size:50px; color:gold">Edit client's data</h1><p>

    <form method='POST' action='{{route('client.update', [$client])}}' >
        <p>
        Name: <input class="form-control" type='text' name="client_name" value='{{$client->name}}'/>
        <p>
        Surname: <input class="form-control" type='text' name="client_surname" value='{{$client->surname}}'/>
        <p>
        Username: <input class="form-control" type='text' name="client_username" value='{{$client->username}}'/>
        <p>
        Company_ID: 
         <select class="form-control" name="client_company_id" value=''>
                     <option class="text-secondary" value="{{$client->company_id}}">
                        {{$client->company_id}}</option>; 
                     <!--@for ($i = 1; $i < 251; $i++)
                        <option value="{{ $i }}">{{$i}}</option> 
                     @endfor-->
                     @foreach ($select_values as $value)
                      <option value="{{$value}}">{{$value}}</option>
                    @endforeach   
                     
        </select>
        <p>          
        Image address (url): 
        <input class="form-control" type='text' name="client_image_url" value='{{$client->image_url}}'/>
        @csrf
        <p>
        <button class="btn btn-primary" style="width:100px" type='submit'>Update</button>
        <a class="btn btn-secondary" style="width:100px"  href="{{route('client.index')}}">Back</a>
    </form> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>