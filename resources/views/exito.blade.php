<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Exito</title>
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}"> 
    </head>
<body>
    <div class="container mt-4">
       
       <p class="lead"> 
        Hola <strong>{{ $nombre }}</strong>, qué bueno recibir tu mensaje. 
        Un miembro del equipo de ventas se pondrá en contacto con vos al correo: <strong>{{ $email }}</strong> 
        ¡Muchas gracias! 
        </p> 
        <button type="button" class="btn btn-primary">
            <a class="nav-link" href="/sobre-mi">Volver</a>
        </button>
    </div>
    
</body>
</html>