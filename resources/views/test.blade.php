<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tests</title>
</head>
<body>
    <div id="example"></div>
    <selected id="prueba"></selected>
    <div id="lista">

    </div>
    <center>
        <h1>Agregar Alumno</h1>
        <form action="{{route('agregar.alumno')}}" method="post">
            <input type="text" name="nombre" placeholder="nombre" required>
            @if(isset($errors))
                @if ($errors->has('nombre'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('nombre') }}</strong>
                    </span>
                @endif
            @endif
            <input type="submit" value="Enviar">
        </form>
    </center>



    {{-- <script src={{asset('js/app.js')}} defer></script> --}}
    <script type="text/javascript">

    </script>
</body>
</html>
