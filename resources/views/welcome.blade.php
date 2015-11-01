<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
           @if (session('msg'))
            <div class="alert alert-success" style="color:green">
                {{ session('msg') }}
            </div>
           @endif
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
            <form action="test" method="post">
                <input type="text" name="name" placeholder="Enter name"><br>
                <input type="text" name="email" placeholder="Enter Email"><br>
                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                <input type="submit"  name="submit" value="Submit">
            </form>
        </div>
    </body>
</html>
