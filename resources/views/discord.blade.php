@section('title', 'Home')
@section('content')
    @extends('layouts.base')
    <section class="hero is-full-height">
        <div class="hero-head">@include ('layouts.nav')</div></br></br></br>
        <h1 class="title has-text-centered is-centered" style="font-size: 400%;">
                Discord!
        </h1></br></br></br>
        <div class="container is-centered">
            <div class="title is-4 has-text-white has-text-left">
                The Campsite community is based within the Discord app.</br>
                We have our own vanity url to join our server: <a href="https://discord.gg/campsite" target="_blank">discord.gg/campsite</a>
            </div>
        </div>

    </section></br></br></br></br>
    <section class="hero is-medium">
        <div class="container is-centered">
            <div class="title is-3 has-text-white has-text-centered">Want to apply for staff? Fill out the application below
                </br></br></br></br></br></br>
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScltMp2wxO6SOO3l27ybnl9_RD8AmWLE_yyyHi7S_SS2w7lgw/viewform?embedded=true" width="400" height="1432" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            </div>
        </div>
    </section>
@endsection
