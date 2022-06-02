
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="http://fonts.cdnfonts.com/css/times-new-roman" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="rating">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h1>Ratting</h1>
            <p>You can rate the teacher after watching certain number of his video's its<br>
            available once per teacher</p>
            <h3>Over all ration</h3>
            <ul>
                <li><i class="fa fa-star-o"></i></li>
                <li><i class="fa fa-star-o"></i></li>
                <li><i class="fa fa-star-o"></i></li>
                <li><i class="fa fa-star-o"></i></li>
                <li><i class="fa fa-star-o"></i></li>
            </ul>
            <h3>Add review</h3>
            <form action="">
                <textarea name="" id="message"></textarea>
            </form>
            <ul class="btn-sec">
                <li><button>Rate</button></li>
                <li><button class="btn-can">Cancel</button></li>  
            </ul>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</body>
</html>

