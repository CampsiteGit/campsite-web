<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <meta charset="utf-8">
        <link rel="icon" href="{{ asset('favicon.png') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('layouts.og')
        <title>About | The Campsite</title>
    </head>
    <body>
        @include('layouts.nav')
        @include('layouts.snow')
        <div class="has-text-centered is-lower">
            <h1 class="has-text-white has-space"><u>About us!</u></h1>
            <h3 class="has-text-white is-padded">Who are we? What do we do? You came to the right place.</br></br>
            We are an ever-growing community on
            <a class="custom-link" href="https://discord.com/" target="_blank"><u>Discord</u></a>
            that aims to provide a warm welcome to all new members joining us! The server was originally created on <yellow id="created"></yellow> as a bot support server for <a href="https://veidus.com/" target="_blank"><pink><strong><u>Veidus</u></strong></pink></a> then recently transformed into The Campsite community.
            Interested in joining? We have a variety of <orange>interactive text and voice channels</orange> so you can share the things you love the most, we host <orange>monthly giveaways</orange> including things such as <a href="https://discord.com/nitro" target="_blank"><u>Discord Nitro</u></a>, steam codes etc. and we will start hosting <orange>events</orange> sometime in the future!
            </h3>
            <!-- <h3 class="has-text-orange is-left is-padded-top">• Warm, welcoming community to make you feel right at home.</h3>
            <h3 class="has-text-orange is-left is-padded-more">• Interactive channels to share the things you love most.</h3>
            <h3 class="has-text-orange is-left is-padded-more">• Monthly giveaways hosted on the 15th.</h3> -->
            <h1 class="has-text-white has-more-space"><u>Socials</u></h1>
            <div class="dropdown has-space">
            <button class="dropbtn">Hover or tap to select a platform</button>
                <div class="dropdown-content">
                    <a class="custom-link" target="_blank" href="/discord">Discord</a>
                    <a class="custom-link" target="_blank" href="https://twitter.com/the_campsite">Twitter</a>
                    <a class="custom-link" target="_blank" href="https://instagram.com/campsite.life">Instagram</a>
                </div>
            </div>
        </div>
    </body>
    <script src="{{ asset('js/get_stats.js') }}"></script>
</html>