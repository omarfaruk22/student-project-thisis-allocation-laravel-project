<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>admin {{auth()->user()->name}}</h1>
    <form method="POST" action="{{ route('logout') }}">
                            @csrf
                <li>
                  <a href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    <i class="icon ion-power"></i>
                     Sign Out</a>
                </li>
                </form>
</body>
</html>