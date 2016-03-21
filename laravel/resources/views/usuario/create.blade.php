<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</head>

<div class="container">

    <form action="usuario\create" method="POST">
        <div class="form-group">
            <label for="">Nombre:</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Correo:</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Contraseña:</label>
            <input type="password" class="form-control">
        </div>
        <button class="btn btn-primary">Registrar</button>
        <button type="submit">Enviar</button>
    </form>


</div>