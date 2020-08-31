<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <meta charset="utf-8">
        <link rel="icon" href="{{ asset('favicon.png') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('layouts.og')
        <title>CampsiteCraft | The Campsite</title>
    </head>
    <body>
        @include('layouts.nav')
        <div class="has-text-centered is-lower">
            <h1 class="has-text-white"><u>The Official Campsite Minecraft Server!</u></h1>
            <h3 class="has-text-white is-padded-top has-space">The Campsite has recently opened up a Minecraft server! You can find some more information about it below.</h3>
            <h3 class="has-text-white is-padded-top" id="main"></h3>
            <h3 class="has-text-white is-padded-top" id="information">
                "<u id="motd"></u>"</br></br>
                <red><u>How to connect?</u></red></br>
                You can connect to the server by using the hostname <yellow id="hostname"></yellow> when adding a new server.</br></br>
                <red><u>Information.</u></red></br>
                The server is running <orange id="software"></orange>
                (Minecraft version <pink id="version"></pink>)</br>
                There are currently <yellow id="player_count"></yellow> players online</br></br>
                <white id="yes"></white>
                <green id="players" style="margin-bottom: 10%;"></green></br></br>
            </h3>
        </div>
    </body>
    <script src="{{ asset('js/minecraft_data.js') }}"></script>
</html>