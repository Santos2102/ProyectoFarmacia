<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel ="stylesheet" href="/css/estilos.css">
   <!--  <link rel="stylesheet" href="{{asset('css/>app.css')}}"> -->
    <!-- CSS only -->

    <title>FarmaSalud</title>
</head>
<body class="fondo">


    @include('dashboard.partials.nav-header-main')
    <h1 class="titulo">Miscelaneos</h1>
    <br> <br>

   
    
    <form action="{{route('miscelaneo.store')}}" method="post">
    @csrf
      

        <div class="row">

            <div class="col">
                <label class="sub" ><b>Nombre:</b></label><br>
                <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese Nombre de Medicamento" aria-label="Disabled input example"  rows="1" type="text" name="nombre" value ="{{$miscelaneo->nombre}}"> <br>
                 @error('nombre')
                    <small class="text-danger">{{$message}}</small>
                @enderror

                <label for=""><b>Descripción:</b></label>
                <textarea class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese Descripción" aria-label="Disabled input example"  rows="3" name="descripcion">{{$miscelaneo->descripcion}}</textarea><br>
                @error('descripcion')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                
                <label class="sub" ><b>Tipo:</b></label><br>
                <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese Tipo" aria-label="Disabled input example"  rows="1" type="text" name="tipo" value ="{{$miscelaneo->tipo}}"><br>
                @error('tipo')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                
                <label class="sub" ><b>Marca:</b></label><br>
                <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese tipo de Marca" aria-label="Disabled input example"  rows="1" type="text" name="marca" value ="{{$miscelaneo->marca}}"><br>
                @error('marca')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                
                <label class="sub" ><b>Precio:</b></label><br>
                <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese Precio" aria-label="Disabled input example"  rows="1" type="text" name="precio" value ="{{$miscelaneo->precio}}"><br>
                @error('precio')
                    <small class="text-danger">{{$message}}</small>
                @enderror 

                <label class="sub" ><b>Imagen:</b></label><br>
                <input type="file" name="imagen" value ="{{$miscelaneo->imagen}}"><br>
                @error('imagen')
                    <small class="text-danger">{{$message}}</small>
                @enderror 

            </div>

        </div>

    </form>    
      
</body>
</html>