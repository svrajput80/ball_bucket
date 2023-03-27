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
      <p>Note Recommended:- Box that already have the books of same author.</p>
      <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Boxs</th>
                    <th scope="col">Volumn</th>
                    <th scope="col">Recomended</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @if(empty($remaning_box))
                <h1>No box available for this book</h1>
                @endif
                @foreach($remaning_box as $key => $data)
                    <tr>
                        <th>{{$data['box']}}</th>
                        <td>{{$data['volume']}}</td>
                        <td>{{!empty($data['recommended']) ? 'Recommended': ''}}</td>
                        <td>
                        <form class="login-form" method="POST" action="/savebox">
                          <div>
                            <input type='text' name='book_id' value="{{$book_id}}" style="display: none;">
                            <input type='text' name='qty' value="{{$qty}}" style="display: none;">
                            <input type='text' name='box_id' value="{{$data['id']}}" style="display: none;">
                            </div>
                            <button class="btn btn--form" type="submit" value="submit">
                              save book 
                            </button>
                        </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>
</body>
</html>