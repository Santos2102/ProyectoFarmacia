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
        @include('dashboard.partials.nav-header-main')
        <a class="btn btn-primary" href="{{route('medicontrolado.create')}}">Crear</a>
    </header>    

    <main>
        <div class="container">
            <table class="table table-striped" style="background-color: white;">
                <thead>
                <tbody>
                        <tr>
                            <td>
                                ID
                            </td>
                            <td>
                                Nombre
                            </td>
                            <td>
                                Descripción
                            </td>
                            <td>
                                Laboratorio
                            </td>
                            <td>
                                Presentación
                            </td>
                            <td>
                                Precio Unidad
                            </td>
                            <td>
                                Existencia
                            </td>
                            <td>
                                Receta Medica
                            </td>
                            <td>
                                Imagen
                            </td>
                            <td>
                                Creacion
                            </td>
                            <td>
                                Actualizado
                            </td>
                            <td>
                                Acciones
                            </td>
                        </tr>
                    </tbody>

                    @foreach($medicontrolado as $medicontrolado)
                        <tr>
                            <td>
                                {{$medicontrolado->id}}
                            </td>
                            <td>
                                {{$medicontrolado->nombre}}
                            </td>
                            <td>
                                {{$medicontrolado->descripcion}}
                            </td>
                            <td>
                                {{$medicontrolado->laboratorio}}
                            </td>
                            <td>
                                {{$medicontrolado->presentacion}}
                            </td>
                            <td>
                                {{$medicontrolado->precio_unidad}}
                            </td>
                            <td>
                                {{$medicontrolado->Existencia}}
                            </td>
                            <td>
                                {{$medicontrolado->receta_medica}}
                            </td>
                            <td>
                                <img src="Assets/Image/{{$medicontrolado->imagen}}" width="150">
                            </td>
                            <td>
                                {{$medicontrolado->created_at->format('d-m-Y')}}
                            </td>
                            <td>
                                {{$medicontrolado->updated_at->format('d-m-Y')}}
                            </td>

                            <td>
                                <a href="{{route('medicontrolado.show',$medicontrolado->id)}}" class="btn btn-success">Ver</a>
                                <a href="{{route('medicontrolado.edit',$medicontrolado->id)}}" class="btn btn-warning">Editar</a>
                                <form method="post" action="{{route('medicontrolado.destroy',$medicontrolado->id)}}">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Borrar</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </thead>                
            </table>       
        </div>
    </main>
</body>
</html>