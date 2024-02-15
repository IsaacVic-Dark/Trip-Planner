<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Contact Form</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }        

        .contact-form {
            max-width: 400px;
            width: 100%;
        }
        
    </style>
</head>
<body>
    @include('layouts/navigation')  
    
    @foreach ($content as $content)
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('storage/'. $content -> image)}}" class="card-img-top" alt="No image">
            <div class="card-body">
            <h5 class="card-title">{{ $content->name }}</h5>
            <p class="card-text">{{$content -> description}}</p>
            <p class="card-text">{{$content -> location}}</p>
            <a href="#" class="btn btn-primary">View more</a>
            </div>
        </div>
    @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

    
    
