<!doctype html>
<html lang="{{ config('app.locale') }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Affichage des Insects</title>

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
      <!-- styles -->
      <link href="./css/custom.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <a href="{{ URL::action('PostController@index') }}">Retour à la liste</a>
      <h1> I am {{ $post->user->name }}</h1>
        <p>
            I am {{ $post->user->age }} <br>
            I'm {{ $post->user->famille }} <br>
            I am{{ $post->user->race }} <br>
            I eat {{ $post->user->nouriturre}}
        </p>
        <p>
            <a href="{{ URL::action('PostController@edit', $post->id) }}" class="button">Editer</a>
        </p>
   </body>
</html>