<!DOCTYPE html >

<html>

    <head>
        <title></title>
        <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>

        <script>
            $(document).ready(function()
            { 
                $("#btn").click(function()
                {
                    $("#test").load("data.txt");
                }
            );});
          
        </script>
        </head>
        <body>
            <div id="test">
                <p> This is the first Content!</p>
            </div>
<button id ="btn">
    Click To Change
</button>
        </body>
</html>