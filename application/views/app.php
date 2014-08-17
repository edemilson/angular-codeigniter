<!DOCTYPE html>
<html ng-app="csApp">
  <head>
  	<meta charset="UTF-8">
    <title>CSErp - 0.0.1</title>
    <link rel='stylesheet' href='public/bower_components/bootstrap/dist/css/bootstrap.min.css' />
    <link rel='stylesheet' href='public/bower_components/bootstrap/dist/css/bootstrap-theme.min.css' />
    <link rel='stylesheet' href='public/css/app.css' />
  </head>
<body>

 <div class="container-app">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Olá {{name}}</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href='/login'>Página 1</a></li>
            <li><a href='/view2'>Página 2</a></li>
            <li><a href='/ads'>Listar Anúncios</a></li>
            <li><a href='/ads/create'>Cadastrar Anúncio</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Entrar <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/login">Login</a></li>
                <li><a href="#/" ng-click="logout()">Logout</a></li>
                <li class="divider"></li>
                <li><a href="#">Seed 0.0.1</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="panel panel-default">
      <div class="panel-body">
        <div ng-view></div>
      </div>
      <div class="panel-footer">
        <div class="center-footer">
           CSErp - 0.0.1
          <span app-version></span>
        </div>
      </div>
    </div>
  </div>
  
  <script src="public/bower_components/angular/angular.js"></script>
  <script src="public/bower_components/angular-resource/angular-resource.js"></script>
  <script src="public/bower_components/angular-cookies/angular-cookies.js"></script>
  <script src="public/bower_components/angular-sanitize/angular-sanitize.js"></script>
  <script src="public/bower_components/angular-route/angular-route.js"></script>
  <script src="public/bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js"></script>
  <script src="public/bower_components/angular-http-auth/src/http-auth-interceptor.js"></script>
  <script src="public/bower_components/angular-autoFields-bootstrap/autofields.js"></script>
  <script src="public/bower_components/angular-autoFields-bootstrap/autofields-bootstrap.js"></script>

  <!--<script src='/js/all.min.js' ></script>-->
  <script src='public/js/app.js' ></script>
  <script src='public/js/services.js' ></script>
  <script src='public/js/controllers.js' ></script>
  <script src='public/js/modules/dashboard/controllers.js' ></script>
  <script src='public/js/filters.js' ></script>
  <script src='public/js/directives.js' ></script>
  
</body>

</html>
