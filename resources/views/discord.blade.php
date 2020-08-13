@section('title', 'Home')
@section('content')
    @extends('layouts.base')
    <section class="hero is-medium">
        <div class="hero-head">@include ('layouts.nav')</div></br></br></br>
        <h1 class="title has-text-centered is-centered" style="font-size: 400%;">
                Discord!
        </h1>
        <div class="container is-centered">
            <div class="title is-4 has-text-white has-text-left">
                The Campsite community is based within the Discord app.</br>
                We have our own vanity url to join our server: <a href="https://discord.gg/campsite" target="_blank">discord.gg/campsite</a>
            </div>
        </div>
    </section>
@endsection
