<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    
</head>
<body>
    <div class=" navbar navbar-expand-lg bg-primary text-white">
            <div class=" container-fluid">
            SELAMAT DATANG DIHALAMAN ADMIN
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar" aria-label="toggle navigation"aria-controls="mynavbar" aria aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                    <li class="nav-item">
                    </li> 
                    <a href="admin" class="nav-link {{ Request::segment(1)=='admin'?'active':''}}">Admin</a>
                    </li>
                    </li> 
                    <a href="produk" class="nav-link {{ Request::segment(1)=='produk'?'active':''}}">Produk</a>
                </li>
                    </li> 
                    <a href="produk" class="nav-link {{ Request::segment(1)=='produk'?'active':''}}">Keluar</a>
                </li>

                    
                </ul>
            </div>
        </div>
    </div>
    
    <div class="container mt-4">
        @yield('navbar2')
    </div>
    
                    
</body>
</html>
    
<script src="{{ asset('js/bootstrap.min.js')}}"></script>

                
                