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
      <a href="/report" class="button_green">Report</a>
      <div class="grid-container">
        <div class="grid-item"><a href="/">Box</a></div>
        <div class="grid-item"><a href="/books" >Add book</a></div>
        
      </div>
      
      
      
      <form class="login-form" method="POST" action="/showbox">
        <div>
          <label for="name">Books name </label>
          <select name="bookname" id="name">
          @foreach($book as $key => $data)
            <option value="{{$data->id}}">{{$data->book}}</option>
          @endforeach
          </select>
        </div>

        <div>
          <label for="password">Qty </label>
          <input
            id="password"
            type="number"
            placeholder="20"
            name="qty"
            required
          />
        </div>

        <button class="btn btn--form" type="submit" value="submit">
          Show Box
        </button>
      </form>
    </div>
</body>
</html>