<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/app.css') }}">
    <title>Document</title>
    <style>



    </style>
</head>
<body>
<div class="container">
      <h2 class="login-title">Boxs</h2>
      <a href="/report" class="button_green">Report</a>
      <div class="grid-container">
        <div class="grid-item"><a href="/book">Book</a></div>
        <div class="grid-item"><a href="/books" >Add book</a></div>
        
      </div>
      <form class="login-form" method="POST" action="/addBox">

        <div>
          <label for="name">Box name </label>
          <input
            id="name"
            type="text"
            placeholder="Box1"
            name="box"
            required
          />
        </div>

        <div>
          <label for="password">Volume (in inches) </label>
          <input
            id="password"
            type="text"
            placeholder="12 inches"
            name="volume"
            required
          />
        </div>

        <button class="btn btn--form" type="submit" value="submit">
          submit
        </button>
      </form>
    </div>
</body>
</html>