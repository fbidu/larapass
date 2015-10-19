<!DOCTYPE html>
<html>
    <head>
        <title>Larapass</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
                <button class="btn btn-default hashInactive" type="button" id="hash">Hash!</button>
            </span>
        </div>
            <div><input type="text" id="hash-val" readonly="true" data-toggle="tooltip" data-trigger="focus" data-placement="bottom" title="Press CTRL+C to copy" /></div>
      </div>

      <footer class="footer">
        <p>With <i class="fa fa-heart"></i>,
<a href="http://github.com/fbidu">FBidu</a>.</p><p>Palette <a href="http://www.colourlovers.com/palette/694737/Thought_Provoking">"Thought Provoking"</a> by <a href="http://www.colourlovers.com/lover/Miss_Anthropy">Miss_Anthropy</a></p>
      </footer>

    </div> <!-- /container -->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $("#hash").on("click", function ()
        {
            $.get('password/'+$("#password").val(), {}, function(data)
                {
                    $("#hash-val").show();
                    $("#hash-val").val(data);
                    $("#hash-val").select();
                    $("#hash-val").focus();
                });

        });

        $("#password").keypress(function (e)
            {
                if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13))
                {
                    $("#hash").click();
                    return false;
                }
                else
                {
                    return true;
                }
            });

        $("#password").on("focus", function()
            {
                $("#hash").addClass("hashActive");
                $("#hash").removeClass("hashInactive");
            });

        $("#password").on("focusout", function()
            {
                $("#hash").removeClass("hashActive");
                $("#hash").addClass("hashInactive");
            });


        $("#hash-val").on("click", function()
        {
            this.select();
        });

        $(document).ready( function()
        {
            $('[data-toggle="tooltip"]').tooltip();
            $("#hash-val").hide();
        });
    </script>
    </body>
</html>
