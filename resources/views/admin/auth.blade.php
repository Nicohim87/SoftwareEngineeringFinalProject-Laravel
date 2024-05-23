<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        #mainBox{
            border-radius: 2.5vh;
            width:300px;
            border: 1px solid #404040
        }
    </style>
</head>
<body class="position-fixed vh-100 vw-100 bg-body-secondary">
    <div id="mainBox" class=" bg-light shadow-sm position-fixed top-50 start-50 translate-middle p-4 text-center">
        
        <img src="{{asset('favicon.png')}}" alt="", style="width:4vw; aspect-ratio:1;">

        <h2 class="mb-5" style="width:100%">Log in</h2>

        <form action="{{route('login.validate')}}" method="post">

            @csrf

            <div class="mb-4">
                <input name="name" type="text" class="form-control" placeholder="Name">
            </div>
    
            <div class="mb-5">
                <input name="password" type="password" class="form-control" placeholder="Password">
            </div>
    
            <button type="submit" class="btn btn-primary mb-3" style="width:100%;">Log In</button>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
        @if(session('error'))

        <script>
            Swal.fire({
                title: "Error",
                text: "{{session('error')}}",
                icon: "error"
            });
        </script>

        @endif
        
        
    </div>
</body>
<script src="{{asset('js/auth.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>