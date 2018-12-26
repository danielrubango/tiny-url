<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    URL Shortener
                </div>

                <div class="links">
					<form action="{{ url('/') }}" method="POST" class="flex">
						@csrf

						@if($errors->any())
							<div class="alert alert-danger">
								<ul class="list-group">
									@foreach($errors->all() as $error)
										<li class="list-group-item">{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif

						@if(isset($url))
							<div class="alert alert-info">
								{{ $url->real_url }} : <a href="{{ $url->short_url }}">{{ $url->short_url }}</a>
							</div>
						@endif

						<input class="form-control form-control-lg m-b-md" type="text" name="url" placeholder="Your URL">
						<input class="btn btn-primary" type="submit" value="Get your url the short form">
					</form>
                </div>
            </div>
        </div>
    </body>
</html>
