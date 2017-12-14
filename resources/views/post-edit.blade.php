<!doctype html>
<html lang="{{ config('app.locale') }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Laravel</title>

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
      <!-- styles -->
      <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet" type="text/css">
   </head>
   <body>
      <a href="{{ URL::action('PostController@index') }}">Retour à la liste</a> - <a href="{{ URL::action('PostController@view', $post->id) }}">Annuler</a>
      <h1>Editer l'article</h1>

      {{ Form::model($post, [ 'url' => URL::action('PostController@update', $post ), 'method' => 'post'])}}
         <p>{{ Form::label('title', 'Titre :') }} {{ Form::text('title') }}</p>
         <p>{{ Form::label('content', 'Article :') }} {{ Form::textarea('content') }}</p>
         {{ Form::submit() }}
      {{ Form::close() }}
   </body>
</html>