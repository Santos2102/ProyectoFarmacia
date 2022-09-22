<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Css/bootstrap.css">
    <link rel="stylesheet" href="/Css/style.css">
    <link rel="stylesheet" href="{{asset('css/>app.css')}}">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

    <title>FarmaSalud</title>
</head>
<body style="background-image: url('/Assets/Image/fondo.jpg');background-attachment: fixed;">
    <header >
        @include('dashboard.partials.nav-header-mainCL')
       <h1 class="titulo">Ordena Ya!</h1>
    </header>    

    <main>
        <div class="container">
            <table class="table table-striped" style="background-color: white;">
                <thead>
                <tbody>
                        <tr>
                           
                            <td>
                                Nombre
                            </td>
                            <td>
                                Descripción
                            </td>
                            <td>
                                Tipo
                            </td>
                            <td>
                                Marca
                            </td>
                            <td>
                                Precio
                            </td>
                            <td>
                                Stock
                            </td>
                            <td>
                                Imagen
                            </td>
                            <td>
                                Acciones
                            </td>                               
                        </tr>
                    </tbody>
                    @foreach($miscelaneo as $miscelaneo)
                        <tr>
                            <td>
                                {{$miscelaneo->nombre}}
                            </td>
                            <td>
                                {{$miscelaneo->descripcion}}
                            </td>
                            <td>
                                {{$miscelaneo->tipo}}
                            </td>
                            <td>
                                {{$miscelaneo->marca}}
                            </td>
                            <td>
                                {{$miscelaneo->precio}}
                            </td>
                            <td>
                                {{$miscelaneo->Existencia}}
                            </td>
                            <td>
                            <img src="Assets/Image/{{$miscelaneo->imagen}}" width="150">
                            </td>

                            <td>
                                <a href="{{route('miscelaneo.show',$miscelaneo->id)}}" class="btn btn-success">Ver</a>
                            </td>

                        </tr>
                    @endforeach
                    
                </thead>                
            </table>       
        </div>
    </main>
</body>
</html>