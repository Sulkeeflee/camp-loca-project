<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/navbar.css">
    <title>navbar</title>
</head>
<body class="text-center text-white bg-dark">
    <div class=" d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <nav class="d-flex navbar navbar-dark justify-content-center navbar-expand-md">
                <h3 class="">CampLoca</h3>
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <a href="/" class="nav-link active ms-md-auto" aria-current="page">Home</a>
                    <a href="/campgrounds" class="nav-link">Campgrounds</a>
                    <a href="/login" class="nav-link">Login</a>
                    <a href="/register" class="nav-link">Register</a>
                    <a href="/logout" class="nav-link">Logout</a>
                </div>
            </nav>
        </header>