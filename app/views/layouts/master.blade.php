<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PemiluAPI developer website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/application.css') }}

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
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    {{ Helper::navItem('Home') }}
                    {{ Helper::navItem('About', 'about') }}
                    {{ Helper::navItem('Documentation', 'documentation') }}
                    {{ Helper::navItem('Endpoints', 'endpoints') }}
                </ul>
                @if(Auth::check())
                <ul class="nav navbar-nav navbar-right">
                    {{ Helper::navItem('My Account', 'account') }}
                    {{ Helper::navItem('Applications', 'application') }}
                    {{ Helper::navItem('Logout', 'logout') }}
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

    {{ HTML::script('js/jquery.min.js'); }}
    {{ HTML::script('js/bootstrap.min.js'); }}
</body>
</html>
