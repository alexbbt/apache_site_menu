<!doctype html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0, user-scalable=0">
    <title>Police Shootings</title>
    <link rel="shortcut icon" href="img/badge.png">

    <!-- jQuery, Bootstrap -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
    <!-- Custom files -->
    <script type="text/javascript" src="js/map.js"></script>
    <link rel="stylesheet" href="css/main.css"/>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Info 343 Projects <small>by Alexander Bell-Towne</small></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <div class="list-group">
<?php
    $dirs = array_filter(glob('*'), 'is_dir');
    foreach ($dirs as $dir) {
        if($dir !== 'assets') {
?>
                    <a href="./<?=$dir?>" class="list-group-item"><?=$dir?></a>
<?php       
        }
    }
?>                    
                </div>
            </div>
        </div>
    </div>
  </body>
</html>