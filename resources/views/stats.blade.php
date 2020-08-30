<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <meta charset="utf-8">
        <link rel="icon" href="{{ asset('favicon.png') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('layouts.og')
        <title>Stats | The Campsite</title>
    </head>
    <body>
        @include('layouts.nav')
        <div class="has-text-centered is-lower">
            <h1 class="has-text-white has-space"><u>Stats!</u></h1>
            <h3 class="has-text-white is-padded-top">In <orange>The Campsite</orange>, we currently have <yellow class="is-underlined" id="total_members">...</yellow> members. We have a total of <yellow class="is-underlined" id="boost_count">...</yellow> boosters which means we have boost level <yellow class="is-underlined" id="boost_level">...</yellow>!</br>
            Our amazing boosters:</br></br><pink id="boosters">...</orange></h3>
        </div>
    </body>
    <script src="{{ asset('js/get_members.js') }}"></script>
    <script src="{{ asset('js/get_boosters.js') }}"></script>
</html>