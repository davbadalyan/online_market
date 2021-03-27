<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-secondary border-bottom">
        
        <h3 class="my-0 mr-md-auto text-white font-weight-bold">Online Market</h3>
    
        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="my-auto pl-5 text-white font-weight-bold" href="/">Main</a>
        <a class="my-auto pl-5 text-white font-weight-bold" href="/products">Products</a>
        <a class="my-auto pl-5 text-white font-weight-bold" href="/about">About Us</a>
        <a class="ml-4 pl-2 btn btn-outline-warning" href="/signIn">Sign In</a>
        <a class="ml-4 pl-2 btn btn-outline-info" href="/signUp">Sign Up</a>
        </nav>
    </div>
    <div class="container">
        @yield('main')
    </div>
    <footer class="pt-4 my-md-5 pt-md-5 border-top w-75 mx-auto">
        <div class="row">
        <div class="col-6 col-md">
            <h5>Main</h5>
            <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Products</h5>
            <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>About Us</h5>
            <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
            </ul>
        </div>
        </div>
    </footer>

</body>
</html>