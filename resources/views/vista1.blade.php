<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Inicio</title>
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
            <li class="active"><a href="#">INICIO</a></li>
            @if(Session::has('name'))
              <li><a href="#">PERFIL</a></li>
              <li><a href="#">REPORTES</a></li>
              <li><a href="#">SOBRE</a></li>
            @endif
            <li><a href="#">BUSQUEDA</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            @if(Session::has('name'))
            <li><a href="#"><span class="glyphicon glyphicon glyphicon-log-out"></span> Logout</a></li>
            @else
            <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            @endif
          </ul>
        </div>
      </nav>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <h2>Bienvenid@
              @if(Session::has('name'))
                {{Session::get('name')}}
              @else
                !
              @endif
            </h2>
            <h4></h4>
          </div>
        </div>
        <div class="row">
          @if(Session::has('name'))
          <div class="col-sm-8">
            <div class="row">
              <div class="col-sm-12">
                <div class="panel panel-default">
                  <div class="panel-heading">Últimos reportes que realizaste</div>
                  <div class="panel-body">
                    @if(empty(Session::get('EventsCreated')[0]))
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <p>Aún no tienes eventos registrados.</p>
                      </div>
                    </div>
                    @else
                      @foreach(Session::get('EventsCreated') as $EventCreated)
                      <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-sm-9">
                              <p>A <a href="#">{{$EventCreated->UserReceiver->user_name}}</a> hecho el {{$EventCreated->event_date}} </p>
                            </div>
                            <div class="col-sm-3">
                              <button type="button" name="button" class="btn btn-primary btn-sm btn-block">Ver reporte</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                      <button type="button" name="button" class="btn btn-success btn-sm btn-block">Ver todos</button>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="panel panel-default">
                  <div class="panel-heading">Últimos reportes que te realizaron</div>
                  <div class="panel-body">
                    @if(empty(Session::get('EventsReceived')[0]))
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <p>Aún no tienes eventos registrados.</p>
                      </div>
                    </div>
                    @else
                      @foreach(Session::get('EventsReceived') as $EventReceived)
                      <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-sm-9">
                              <p>Por <a href="#">{{$EventReceived->UserCreator->user_name}}</a> hecho el {{$EventReceived->event_date}} </p>
                            </div>
                            <div class="col-sm-3">
                              <button type="button" name="button" class="btn btn-primary btn-sm btn-block">Ver reporte</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    <button type="button" name="button" class="btn btn-success btn-sm btn-block">Ver todos</button>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
          @else
          <div class="col-sm-8">
            <h3>Inicia sesión para ver tus reportes y quién te reportó</h3>
          </div>
          @endif
          <div class="col-sm-4">
            <h3 align = "center">Nuestro top 10.</h3>
            <br>

            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Puntos</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr>
                  <td>{{$user->user_name}}</td>
                  <td>{{$user->user_points}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <br>
            <h3>Redes sociales</h3>
            <br>
            <div class="row">
              <div class="col-sm-4">
                <img src="imagenes/fb_icon_325x325.png" alt="Facebook Icon" width="80" height="80">
              </div>
              <div class="col-sm-4">
                <img src="imagenes/twitter-logo-blue.png" alt="Twitter Icon" width="80" height="80">
              </div>
              <div class="col-sm-4">
                <img src="imagenes/instagram-logo-color-512.png" alt="Instagram Icon" width="80" height="80">
              </div>
            </div>
          </div>
        </div>
      </div>
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
