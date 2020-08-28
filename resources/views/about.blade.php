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
        <div class="has-text-centered is-lower">
            <h1 class="has-text-white has-space"><u>About us!</u></h1>
            <h3 class="has-text-white is-padded">Who are we? What do we do? You came to the right place.
            We are an ever-growing community on
            <a class="custom-link" href="https://discord.com/" target="_blank"><u>Discord</u></a>
            that aims to provide a warm and welcomming feeling to all new members joining us!
            Interested in joining? Here are a few things to help you decide:
            </h3>
            <h3 class="has-text-orange is-left is-padded-top">• Warm, welcoming community to make you feel right at home.</h3>
            <h3 class="has-text-orange is-left is-padded-more">• Interactive channels to share the things you love most.</h3>
            <h3 class="has-text-orange is-left is-padded-more">• Monthly giveaways hosted on the 15th.</h3>
            <h1 class="has-text-white has-more-space"><u>Socials</u></h1>
            <div class="dropdown has-space">
            <button class="dropbtn">Hover or tap to select a platform</button>
                <div class="dropdown-content">
                    <a class="custom-link" href="/discord">Discord</a>
                    <a class="custom-link" href="https://twitter.com/the_campsite">Twitter</a>
                    <a class="custom-link" href="https://instagram.com/campsite.life">Instagram</a>
                </div>
            </div>
        </div>
    </body>
</html>