<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Types</title>
</head>
<body>
    <div class="container">
    <h1>Types Index</h1>


@if (session()->has('error_message'))
        <div class="alert alert-danger">
            {{session()->get('error_message')}}
        </div>   
@endif

@if (session()->has('success_message'))
        <div class="alert alert-success">
            {{session()->get('success_message')}}
        </div>   
@endif

@if (count($types) == 0)
    <p>There is no type</p>
@endif

{{-- create forma - mums reikia nuorodos ar mygtuko --}}
<a class="btn btn-primary" href="{{route('type.create')}}">Create new type</a>
<table class="table table-striped">
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Short Name</th>
    <th>Description</th>
    <th>Total Companies</th>
    <th>Actions</th>
</tr>


@foreach ($types as $type)
    <tr>
        <td>{{$type->id}}</td>
        <td>{{$type->name}}</td>
        <td>{{$type->short_name}}</td>
        <td>{{$type->description}}</td>
        <td>{{count($type->typeCompanies)}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('type.edit', [$type])}}">Edit</a>
            <a class="btn btn-secondary" href="{{route('type.show', [$type])}}">Show</a>

            <form method="post" action='{{route('type.destroy', [$type])}}''>
                @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>
@endforeach
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>