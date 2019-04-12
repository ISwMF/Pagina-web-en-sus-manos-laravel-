@if(Session::has('name'))
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <title>Tus reportes</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="container">
      <div class="page-header">
        <h1>EN SUS MANOS</h1>
        <p>Sistema de eventos orientado a la ética ciudadana.</p>
      </div>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Menu Principal</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="/home">INICIO</a></li>
            <li><a href="#">PERFIL</a></li>
            <li class="active"><a href="#">REPORTES</a></li>
            <li><a href="#">SOBRE</a></li>
            <li><a href="#">BUSQUEDA</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </nav>
      <h3>A continuación se listarán los reportes relacionados a ti.</h3>
      <br>
      <h4>Reportes que te han hecho</h4>
      @if(empty($Events_Received[0]))
        <div class="panel panel-default">
          <div class="panel-body">
            <p>Aún no tienes eventos registrados.</p>
          </div>
        </div>
      @else
        <!-- Imprime los reportes que le han hecho a el usuario-->
        <div class="panel-group" id="accordion">
        @for ($i = 0; $i < count($Events_Received); $i++)
          <div class="panel panel-default" id="panelrec{{$i}}">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-target="#collapseRec{{$i}}" href="#collapseRec{{$i}}">{{$Events_Received[0]->event_situation}} - {{$Events_Received[0]->event_date}}</a>
              </h4>
            </div>
            <div id="collapseRec{{$i}}" class="panel-collapse collapse">
              <div class="panel-body">
                <p>Lugar: {{$Events_Received[0]->event_place}}</p>
                <p>Situación: {{$Events_Received[0]->event_situation}}</p>
                <p>Descripción: {{$Events_Received[0]->event_description}}</p>
                @switch($Events_Received[0]->event_situation)
                  @case('Usar bicicleta para llegar a un destino ')
                    Puntos: 5
                    @break
                  @case('Usar transporte público para llegar a un destino')
                    Puntos: 5
                    @break
                  @case('Dar la silla a alguien que lo necesita')
                    Puntos: 2
                    @break
                  @case('Rescatar un animal en peligro')
                    Puntos: 3
                    @break
                  @case('Ayudar a una persona de la tercera edad')
                    Puntos: 3
                    @break
                  @case('Pasarse un semáforo en rojo')
                    Puntos: -5
                    @break
                  @case('Estacionarse en un lugar prohibido')
                    Puntos: -3
                    @break
                  @case('Colarse en una fila')
                    Puntos: -2
                    @break
                  @case('Hacer copia en un examen')
                    Puntos: -3
                    @break
                  @case('Saber separar los residuos sólidos en las canecas de basura correcta')
                    Puntos: 5
                    @break
                  @case('Arrojar basura en espacios públicos')
                    Puntos: 5
                    @break
                  @default
                    Puntos: 0
                @endswitch
              </div>
            </div>
          </div>
        @endfor
      </div>
      @endif
      <br>
      <h4>Reportes que has hecho</h4>
      @if(empty($Events_Created[0]))
        <div class="panel panel-default">
          <div class="panel-body">
            <p>Aún no tienes eventos registrados.</p>
          </div>
        </div>
      @else

        <!-- Imprime los reportes que ha hecho el usuario-->
        <div class="panel-group" id="accordion">
        @for ($i = 0; $i < count($Events_Created); $i++)
          <div class="panel panel-default" id="panelcre{{$i}}">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-target="#collapseCre{{$i}}" href="#collapseCre{{$i}}">{{$Events_Created[0]->event_situation}} - {{$Events_Created[0]->event_date}}</a>
              </h4>
            </div>
            <div id="collapseCre{{$i}}" class="panel-collapse collapse">
              <div class="panel-body">
                <p>Lugar: {{$Events_Created[0]->event_place}}</p>
                <p>Situación: {{$Events_Created[0]->event_situation}}</p>
                <p>Descripción: {{$Events_Created[0]->event_description}}</p>
                @switch($Events_Created[0]->event_situation)
                  @case('Usar bicicleta para llegar a un destino ')
                    Puntos: 5
                    @break
                  @case('Usar transporte público para llegar a un destino')
                    Puntos: 5
                    @break
                  @case('Dar la silla a alguien que lo necesita')
                    Puntos: 2
                    @break
                  @case('Rescatar un animal en peligro')
                    Puntos: 3
                    @break
                  @case('Ayudar a una persona de la tercera edad')
                    Puntos: 3
                    @break
                  @case('Pasarse un semáforo en rojo')
                    Puntos: -5
                    @break
                  @case('Estacionarse en un lugar prohibido')
                    Puntos: -3
                    @break
                  @case('Colarse en una fila')
                    Puntos: -2
                    @break
                  @case('Hacer copia en un examen')
                    Puntos: -3
                    @break
                  @case('Saber separar los residuos sólidos en las canecas de basura correcta')
                    Puntos: 5
                    @break
                  @case('Arrojar basura en espacios públicos')
                    Puntos: 5
                    @break
                  @default
                    Puntos: 0
                @endswitch
              </div>
            </div>
          </div>
        @endfor
        </div>
      @endif
    <hr>
    <footer>
      <br><br>
      <div class="row">
        <div class="col-sm-4">
          <p>Copyright</p>
          <p>En sus manos @ 2019</p>
          <p>Todos los derechos reservados</p>
        </div>
        <div class="col-sm-4">
          <p><b>Organización:</b> Corporación Universitaria Minuto de Dios</p>
          <p><b>Directora:</b> Nataly Melo</p>
          <p><b>Ejecutor:</b> Fabian Miranda</p>
        </div>
        <div class="col-sm-4">
          <p><b>Contactanos:</b></p>
          <p>Celular: 320 8166386</p>
          <p>Email: fmirandacor@gmail.com</p>
        </div>
      </div>
    </footer>
    </div>
    </body>
  </html>
@else
  <script type="text/javascript">
    window.location = "/login";
  </script>
@endif
