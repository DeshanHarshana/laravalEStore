<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="row">
    <div class="col-sm-8 offset-sm-2">
               <h3 class="display">You are successfully 		login to the system</h3><br/>
@if(isset(Auth::user()->email))
    <div class="alert alert-danger">
        <strong>
            Welcome {{Auth::user()->email}}
        </strong><br>
        <a href="{{ url('/logout')}}">Logout<a>
    </div>
    @else
        <script>window.location="/";</script>
    @endif
            </div></div>
</body>
</html>
