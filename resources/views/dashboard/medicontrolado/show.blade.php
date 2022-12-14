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

    <header>
        @include('dashboard.partials.nav-header-main')
        <h1 class="titulo">Medicamentos Controlados</h1>
        <br> <br>
    </header>
    
    <main>
    <div class="container" >
    <form action="{{route('medicontrolado.store')}}" method="post" >
    @csrf
        <div class="row" >

            <div class="col">
                <label class="sub" ><b>Nombre:</b></label><br>
                <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese Nombre de Medicamento" aria-label="Disabled input example"  rows="1" type="text" name="nombre" value="{{$medicontrolado->nombre}}" readonly> <br>
                 @error('nombre')
                    <small class="text-danger">{{$message}}</small>
                @enderror

                <label for=""><b>Descripción:</b></label>
                <textarea readonly class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese Descripción" aria-label="Disabled input example"  rows="3" name="descripcion">{{$medicontrolado->descripcion}}"</textarea><br>
                @error('descripcion')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                
                <label class="sub" ><b>Laboratorio:</b></label><br>
                <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese Laboratorio" aria-label="Disabled input example"  rows="1" type="text" name="laboratorio" value="{{$medicontrolado->laboratorio}}" readonly><br>
                @error('laboratorio')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                
                <label class="sub" ><b>Presentación:</b></label><br>
                <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese tipo de presentación" aria-label="Disabled input example"  rows="1" type="text" name="presentacion" value="{{$medicontrolado->presentacion}}" readonly><br>
                @error('presentacion')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                
                <label class="sub" ><b>Precio Unidad:</b></label><br>
                <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese Precio por unidad " aria-label="Disabled input example"  rows="1" type="text" name="precio_unidad" value="{{$medicontrolado->precio_unidad}}" readonly><br>
                @error('precio_unidad')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                
                <label class="sub" ><b>Existencia:</b></label><br>
                <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese Precio por unidad " aria-label="Disabled input example"  rows="1" type="text" name="Existencia" value="{{$medicontrolado->Existencia}}" readonly><br>
                @error('Existencia')
                    <small class="text-danger">{{$message}}</small>
                @enderror 

                <label class="sub" ><b>Receta Medica:</b></label><br>
                <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese Receta Medica" aria-label="Disabled input example"  rows="1" type="text" name="receta_medica" value="{{$medicontrolado->receta_medica}}" readonly><br>
                @error('receta_medica')
                    <small class="text-danger">{{$message}}</small>
                @enderror

                <label class="sub" ><b>Imagen:</b></label><br>
                <img src="/Assets/Image/{{$medicontrolado->imagen}}" width="25%">
                @error('imagen')
                    <small class="text-danger">{{$message}}</small>
                @enderror 


              
            </div>

        </div>

    </form>  
    </div>
    </main>
   
    
      <br><br>
      
</body>
</html>