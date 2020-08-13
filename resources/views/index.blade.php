@section('title', 'Home')
@section('content')
    @extends('layouts.base')

    <section class="hero is-medium">
        <div class="hero-head">@include ('layouts.nav')</div></br></br></br></br>
        <h1 class="title has-text-centered is-centered is-hidden-mobile" style="font-size: 600%;">
                The Campsite
        </h1>
        <h1 class="title has-text-centered is-centered is-hidden-desktop" style="font-size: 400%;">
                The Campsite
        </h1>
        </br></br></br></br></br>
        <div class="title is-3 has-text-white has-text-centered is-centered is-hidden-mobile">
            Welcome to the official website for the campsite community!</br>
            You can join our server by going to <a href="https://discord.gg/campsite" target="_blank">discord.gg/campsite</a>
        </div>
        <div class="title is-5 has-text-white has-text-centered is-centered is-hidden-desktop">
            Welcome to the official website for the campsite community!</br>
            You can join our server by going to <a href="https://discord.gg/campsite" target="_blank">discord.gg/campsite</a>
        </div>
    </section>
@endsection
