<?php 
//    require_once __DIR__.'/../app/AppKernel.php';

?>

<html>
    <head>
            <title></title>
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
            <script type="text/javascript" src="js/custom.js"></script>
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/theme.css" rel="stylesheet">
            <link href="css/custom.css" rel="stylesheet">
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
          <div class="navbar-inner">
                <div class="container">
                  <a class="brand" href="#">3ev Project 2</a>
                </div>
          </div>
        </div>
        <div class="container main">
            <div class="row" >
                <div class="span12">
                    <input type="text"  size="50" value="http://content.guardianapis.com/search?q=fish&format=json&api-key=kaqthxjmfxabpu8ufgb56aej&show-fields=thumbnail" id="source_url"/>
                    <button id="get_blogs" class="btn btn-success" >Get data</button>
                </div>
                </div>
            <div class="row">
                <div class="span12">
                    <fieldset>
                        <h1>What the world is saying about fish</h1>
                        <div class="control-group" id="blog-container">

                        </div>
                        <div class="control-group">

                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </body>
</html>