<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/app.css') }}">
    <title>Document</title>
</head>
<body>
<div class="container">
      <h2 class="login-title">Boxs</h2>
      <div class="grid-container">
        <div class="grid-item"><a href="/">Box</a></div>
        <div class="grid-item"><a href="/book" >book</a></div>
        
      </div>
      
      <form class="login-form" method="POST" action="/savebox">
        <div>

        <input type='text' name='book_id' value="{{$book_id}}" style="display: none;">
        <input type='text' name='qty' value="{{$qty}}" style="display: none;">
          <label for="name">Books name </label>
          <select name="box_id" id="name">
          @foreach($remaning_box as $key => $data)
            <option value="{{$data['id']}}">{{$data['box']}}</option>
          @endforeach
          </select>
        </div>

        <button class="btn btn--form" type="submit" value="submit">
          save Book 
        </button>
      </form>
    </div>
</body>
</html>