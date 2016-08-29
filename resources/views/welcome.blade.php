<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
        <style>
            .card{
                color: black !important;
            }
            a{
                color: white;
                text-decoration: underline;
            }
            a:hover{
                color: white;
            }
            .container{
                max-width: 700px;
            }
            hr{
                border-color: #00427b;
            }
        </style>
    </head>
    <body class="bg-primary p-x-1 p-y-3">
        <div class="container">
            <div>
                <h1 class="text-xs-center">Laravel Phone Validator</h1>
                <p class="text-xs-center">A phone validator for Laravel using the free <a href="https://www.twilio.com/lookup">Twilio phone lookup</a> service.</p>
                <p class="text-xs-center">Give me a try below!</p>
                <div class="card card-block">
                    <h4 class="card-title">Phone Number</h4>
                    <form action="/phone" method="post">
                        <input type="text" class="form-control" autocomplete="off" name="phone" value="{{old('phone')}}" placeholder="What's cha numba" />
                        {!! $errors->first('phone', '<div class="text-danger m-t-1">:message</div>') !!}
                        <input class="btn btn-danger m-t-1" type="submit" value="Try Me" />
                    </form>
                </div>
                <p class="text-xs-center">
                    <a href="https://packagist.org/packages/stuyam/laravel-phone-validator">Packagist</a>
                    &nbsp;|&nbsp;
                    <a href="https://github.com/stuyam/laravel-phone-validator">GitHub</a>
                </p>
            </div>
            <hr class="m-y-2">
            <div>
                <h1 class="text-xs-center">Laravel Kickbox Validator</h1>
                <p class="text-xs-center">A <a href="https://kickbox.io">kickbox</a> email validator for form requests in laravel.</p>
                <p class="text-xs-center">Give me a try below!</p>
                <div class="card card-block">
                    <h4 class="card-title">Email</h4>
                    <form action="/email" method="post">
                        <input type="text" class="form-control" autocomplete="off" name="email" value="{{old('email')}}" placeholder="steve@apple.com" />
                        {!! $errors->first('email', '<div class="text-danger m-t-1">:message</div>') !!}
                        <input class="btn btn-danger m-t-1" type="submit" value="Try Me" />
                    </form>
                </div>
                <p class="text-xs-center">
                    <a href="https://packagist.org/packages/stuyam/laravel-kickbox-validator">Packagist</a>
                    &nbsp;|&nbsp;
                    <a href="https://github.com/stuyam/laravel-kickbox-validator">GitHub</a>
                </p>
            </div>
            <hr class="m-y-2">
            <div class="text-xs-center">Made by <a href="http://stuyam.com">Stuart Yamartino</a></div>
        </div>
    </body>
</html>
