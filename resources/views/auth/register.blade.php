<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>shiluowei.cn</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="/auth/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/auth/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="/auth/css/form-elements.css">
        <link rel="stylesheet" href="/auth/css/style.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="/auth/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/auth/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/auth/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/auth/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/auth/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Luoweis</strong> Register</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>欢迎</h3>
                            		<p>大道至简，知易行难！</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-users"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" method="POST" action="{{ url('/register') }}" class="register-form">
                                    {{ csrf_field() }}

			                    	<div class="form-group">
			                    		<label class="sr-only" for="name">Name</label>
			                        	<input id="name" type="text" name="name" placeholder="Name..." class="form-control">
			                        </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="email">Email</label>
                                        <input id="email" type="email" name="email" placeholder="Email..." class="form-control">
                                    </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-control" id="password">
			                        </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password_confirm">Confirm Password</label>
                                        <input type="password" name="password_confirmation" placeholder="Confirm Password..." class="form-control" id="password-confirm">
                                    </div>
			                        <button type="submit" class="btn">提交!</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Javascript -->
        <script src="/auth/js/jquery-1.11.1.min.js"></script>
        <script src="/auth/bootstrap/js/bootstrap.min.js"></script>
        <script src="/auth/js/jquery.backstretch.min.js"></script>
        <script src="/auth/js/register_scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="/auth/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>