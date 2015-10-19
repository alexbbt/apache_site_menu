<!doctype html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0, user-scalable=0">
    <title>Info 343 Projects</title>

    <!-- jQuery, Bootstrap -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
    <!-- Custom files -->
    <link rel="stylesheet" href="assets/css/main.css"/>
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
    error_reporting(E_ERROR | E_PARSE);
    $dirs = array_filter(glob('*'), 'is_dir');
    usort($dirs, 'sortDirs');
    foreach ($dirs as $dir) {
        if($dir !== 'assets') {
            $url = './' . $dir . '/index.html';
            $doc = new DOMDocument();
            $doc->strictErrorChecking = FALSE;
            $doc->loadHTML(file_get_contents($url));
            $xml = simplexml_import_dom($doc);
            $arr = $xml->xpath('//link[@rel="shortcut icon"]');
?>
                    <a href="./<?=$dir?>" class="list-group-item">
<?php
            if ($arr[0]['href'] != ''){
?>
                        <img class="icon" src="<?=$dir . '/' . $arr[0]['href']?>">
<?
            }
            echo $dir;
?>
                    </a>
<?php       
        }
    }
    function sortDirs($a, $b) {
        return (filemtime($a) > filemtime($b));
    }
?>                    
                </div>
            </div>
        </div>
    </div>
  </body>
</html>