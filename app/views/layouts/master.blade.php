<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PemiluAPI developer website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/application.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">PemiluAPI developer website</a>
            </div>
            <?php $segments = Request::segments(); ?>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li @if(!isset($segments[0]))class="active"@endif><a href="/">Home</a></li>
                    <li @if(isset($segments[0]) && $segments[0] == 'about')class="active"@endif><a href="/about">About</a></li>
                    <li @if(isset($segments[0]) && $segments[0] == 'documentation')class="active"@endif><a href="/documentation">Documentation</a></li>
                    <li @if(isset($segments[0]) && $segments[0] == 'endpoints')class="active"@endif><a href="/endpoints">Endpoints</a></li>
                </ul>
                @if(Auth::check())
                <ul class="nav navbar-nav navbar-right">
                    <li>{{ link_to('logout', 'Logout') }}</li>
                </ul>
                @else
                {{ Form::open(array('url' => 'login', 'class' => 'navbar-form navbar-right')) }}
                    <div class="form-group">
                        {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'E-mail address')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}
                    </div>
                    <button type="submit" class="btn btn-success">Log in</button>
                <{{ Form::close() }}
                @endif
            </div>
        </div>
    </div>

    @if(Session::get('alert'))
    <div class="container">
        <div class="alert alert-{{ Session::get('alert_class') }}">{{ Session::get('alert') }}</div>
    </div>
    @endif

    @yield('content')

    <footer>
        <div class="container">
            <p>The Elections API is being built in partnership with <a href="http://asiafoundation.org/">The Asia Foundation</a></p>
        </div>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
