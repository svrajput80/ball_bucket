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
      <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Boxs</th>
                    <th scope="col">Book</th>
                    <th scope="col">Book Author</th>
                    <th scope="col">Qty.</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($report as $data)
                    <tr>
                        <th>{{$data['box']}}</th>
                        <td>{{$data['book']}}</td>
                        <th>{{$data['author']}}</th>
                        <td>{{$data['qty']}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</body>
</html>