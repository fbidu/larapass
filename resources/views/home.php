<!DOCTYPE html>
<html>
    <head>
        <title>Larapass</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="narrow.css">
    </head>
    <body>

<div class="container">
    <div class="header">
        <h3><a href="http://github.com/fbidu/larapass"><i class="fa fa-github"></i></a></h3>
    </div>
      <div class="jumbotron">
        <h1>Laravel hasher</h1>
        <div class="input-group input-group-lg">
            <input type="text" class="form-control" id="password" placeholder="Password">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button" id="hash">Hash!</button>
            </span>
        </div>
            <h3 id="hash-val"></h3>
      </div>

      <footer class="footer">
        <p>With <i class="fa fa-heart"></i>,
<a href="http://github.com/fbidu">FBidu</a>.</p><p>Palette <a href="http://www.colourlovers.com/palette/694737/Thought_Provoking">"Thought Provoking"</a> by <a href="http://www.colourlovers.com/lover/Miss_Anthropy">Miss_Anthropy</a></p>
      </footer>

    </div> <!-- /container -->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $("#hash").on("click", function ()
        {
            $.get('password/'+$("#password").val(), {}, function(data)
                {
                    $("#hash-val").text(data);
                });

        });
    </script>
    </body>
</html>
