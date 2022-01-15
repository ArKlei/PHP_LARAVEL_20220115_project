<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit company's data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <h1>Edit company's data</h1>

    <form method='POST' action='{{route('company.update', [$company])}}' >

        Name: <input class="form-control" type='text' name="company_name" value='{{$company->name}}'/>
        Type: <input class="form-control" type='text' name="company_type" value='{{$company->type}}'/>
        Description: <input class="form-control" type='text' name="company_description" value='{{$company->description}}'/>
    
        @csrf
        <button class="btn btn-primary" type='submit'>Update</button>
        <a class="btn btn-secondary" href="{{route('company.index')}}">Back</a>
    </form> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>