<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="refresh" content="11; URL=/" />
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>404 | The Campsite</title>
    </head>
    <body>
        @include('layouts.nav')
        <div class="has-text-centered is-middle">
            <h1 class="has-text-white has-space"><u>404 | Not found</u></h1></br>
            <h3 class="has-text-white" id="completed">Returning home in <u class="has-text-yellow" id="countdown">10</u> seconds...</h3>
        </div>
    </body>
</html>
<script>
    var timeleft = 10;
    var downloadTimer = setInterval(function(){
    if(timeleft <= 0){
        clearInterval(downloadTimer);
        document.getElementById("completed").innerHTML = "Redirecting...";
    } else {
        document.getElementById("countdown").innerHTML = timeleft;
    }
    timeleft -= 1;
    }, 1000);
</script>