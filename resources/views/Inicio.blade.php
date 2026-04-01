<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{ asset('css/prueba.css') }}"> 
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
        <div class="container d-flex align-items-center justify-content-between"> 
            <a class="navbar-brand" href="#">Mi Sitio</a> 
            
            <form class="d-flex mx-auto formu" role="search">
                <input class="form-control me-2" type="search" placeholder="Busque aquí" aria-label="Search"/>
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
            
            <div class="navbar-nav"> 
                <a class="nav-link active" href="/">Inicio</a> 
                <a class="nav-link" href="/sobre-mi">Sobre mí</a> 
                <a class="nav-link" href="/contacto">Contacto</a>
            </div> 
        </div> 
    </nav>
    <h1>Titulo Inicial</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, nemo. Quas at, quod distinctio, ipsum ab laudantium, cum dicta inventore velit deserunt vel corrupti quos consectetur recusandae earum eum veniam!</p>
    <button class="boton">Un boton</button>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> 
</body>
</html>
