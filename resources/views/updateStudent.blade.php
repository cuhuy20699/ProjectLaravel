<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="{{csrf_token()}}" name="csrf-token">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
<header class="container">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Disabled</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

<div class="container mt-2 mb-2">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active">Insert</a>
                <a href="#" class="list-group-item list-group-item-action">Update</a>
                <a href="#" class="list-group-item list-group-item-action">Select</a>
                <a href="#" class="list-group-item list-group-item-action">Delete</a>
            </div>
        </div>
        <div class="col-md-9">

            <form method="post" action="/doUpdate/{{$id}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label >Name</label>
                    <input type="text" class="form-control" name="name" value="{{$student->name}}">
                </div>
                <div class="form-group">
                    <label >Rollnumber</label>
                    <input type="text" class="form-control" name="rollnumber" value="{{$student->rollnumber}}">
                </div><div class="form-group">
                    <label >Email</label>
                    <input type="text" class="form-control" name="email" value="{{$student->email}}">
                </div><div class="form-group">
                    <label >Phone</label>
                    <input type="text" class="form-control" name="phone" value="{{$student->phone}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<footer class="container">
    <div class="card text-center">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>
</footer>

<script src="{{asset('js/app.js')}}"> </script>
</body>
</html>