<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="short icon" href=" /Assets/Image/logo.png">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel ="stylesheet" href="/css/estilos.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    
   <!--  <link rel="stylesheet" href="{{asset('css/>app.css')}}"> -->
    <!-- CSS only -->

    <title>FarmaSalud</title>
</head>
<body class="fondo">

<header>
@include('dashboard.partials.nav-header-mainCL')

</header>

<main>
   
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Si salio!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    <h1 class="titulo">¡Bienvenido!</h1>

    <p class="parrafo"> En FarmaSalud encontrarás todo lo que necesitas para mantenerte sano y activo, siempre preocupandonos por ti y por los tuyos</p>

    
    <div class="container">
        <section class="row justify-content-around">
                <div class="card center-block col-xs-10 col-sm-6 col-md-2">
                    <img src="/Assets/Image/mision.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                    <h4 class="card-title">Misión:</h4>
                    <p class="card-text">Ofrecer una asistencia sanitaria de calidad, para alcanzar y mantener la salud, ofreciendo servicios farmacéuticos y productos, de forma profesional, servicial y cercana.</p>
                    
                    </div>
                    </div>
                <div class="card center-block col-xs-10 col-sm-6 col-md-2" >
                    <img src="/Assets/Image/vision.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h4 class="card-title">Visión:</h4>
                    <p class="card-text">Con respecto a nuestros usuarios: facilitar un rápido acceso a los productos que precisen, primando los servicios profesionales, para que saquen el máximo beneficio a sus medicamentos.</p>
                </div>  
                </div>
                <div class="card center-block col-xs-10 col-sm-6 col-md-2" >
                    <img src="/Assets/Image/valores.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h4 class="card-title">Valores:</h4>
                    <p class="card-text"> Compromiso, responsabilidad, seguridad, Humanidad, honestidad, respeto, Calidad, resolución, eficiencia, Profesionalidad</p>        
                </div>
                </div>
            </div>
        </section>
    </div>
    


</main>
<br><br><br>
<footer class="footer">
    <h3>Derechos Reservados Miguel Santos y Douglas Puac 2022</h3>
</footer>
    
</body>
</html>
