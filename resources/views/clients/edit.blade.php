<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit client's data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <<p>h1>Edit client's data</h1>

    <form method='POST' action='{{route('client.update', [$client])}}' >

        Name: <input class="form-control" type='text' name="client_name" value='{{$client->name}}'/>
        Surname: <input class="form-control" type='text' name="client_surname" value='{{$client->surname}}'/>
        Username: <input class="form-control" type='text' name="client_username" value='{{$client->username}}'/>
        Company_ID: <input class="form-control" type='number' name="client_company_id" value='{{$client->company_id}}'/>
        Image address (url): <input class="form-control" type='text' name="client_image_url" value='{{$client->image_url}}'/>
        @csrf
        <button class="btn btn-primary" type='submit'>Update</button>
        <a class="btn btn-secondary" href="{{route('client.index')}}">Back</a>
    </form> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>