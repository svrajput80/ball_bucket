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
        <div class="grid-item"><a href="/book" >book</a></div>
        
      </div>
      
      <form class="login-form"  method="POST" action="/addBook">
        <div>
          <label for="name">Books name </label>
          <input
            id="name"
            type="text"
            placeholder="Books"
            name="book"
            required
          />
        </div>

        <div>
          <label for="name">Books Author </label>
          <input
            id="name"
            type="text"
            placeholder="Author"
            name="author"
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