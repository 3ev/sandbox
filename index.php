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
                  <a class="brand" href="#">3ev Test</a>
                </div>
          </div>
        </div>
        <div class="container">
                <fieldset>
                    <div class="control-group">
                        <p>
                            Write a PHP program that generates an XML file containing every 30th of June since the Unix Epoch, at 1pm GMT, similar to the one attached.
                        </p>
                        <p>
                            The program must also parse the generated XML file and generate a second XML file sorted by timestamp in descending order, excluding years that are prime numbers. The timestamps generated should be at 1pm PST.
                        </p>
                        <p>
                            We must be able to run these steps separately. 
                        </p>
                        <p>
                            Remember, you need to solve the problem but also show us your knowledge of professional PHP coding and OOP. The code must be written to production standard - the kind of thing you'd expect from anyone you work with. And it has to run first time!
                        </p>
                    </div>
                    <div class="control-group">
                      <div class="controls">
                            <button class="btn btn-success generate">Generate xml</button>
                      </div>
                      <div class="xmlLink">
                      </div>
                    </div>
                    <div class="control-group sortxmlWrapper">
                        <label class="control-label"  for="name">Second step</label>
                        <div class="controls ">
                            <button class="btn btn-success sortxml">Sort XML file</button>
                        </div>
                        <div class="controls sortedxml">
                        </div>
                    </div>
                </fieldset>
        </div>
    </body>
</html>