<!DOCTYPE html>
<html lang="es">
    <head>
        <title>{{$title}}</title>
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}"> 
    </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
        <div class="container"> 
            <a class="navbar-brand" href="#">Mi Sitio</a> 
            <div class="navbar-nav"> 
                <a class="nav-link" href="/">Inicio</a> 
                <a class="nav-link" href="/sobre-mi">Sobre mí</a> 
                <a class="nav-link active" href="/contacto">Contacto</a>
            </div> 
        </div> 
    </nav>
    <div class="container mt-4">
        <div class="card mt-4">
            <div class="card-body"> 
                <h2>Formulario de contacto</h2> 
    
                <form action="{{ url('/contacto') }}" method="POST"> 
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electronico</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="mensaje" class="form-label">Mensaje</label>
                        <textarea class="form-control" name="mensaje" id="mensaje" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
    
            </div> 
        </div>
    </div>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> 
</body>
</html>