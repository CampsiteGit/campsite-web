@section('title', 'Home')
@section('content')
    @extends('layouts.base')

    <section class="hero is-fullheight">
        <div class="hero-head">@include ('layouts.nav')</br></br></br></br>
            <h1 class="title has-text-centered is-centered" style="font-size: 600%;">
                    The Campsite.
            </h1></br></br></br></br></br>
            <div class="title is-1 has-text-white has-text-centered is-centered">
                <u>What is The Campsite?</u></br>
            </div>
            <div class="container has-text-centered">
                <div class="title is-4 has-text-white has-text-left">
                    We are a growing community on Discord where we give all our users a lovely warm welcome!
                    We host monthly giveaways, events and more!
                    We have a variety of channels and self-assignable roles to make the server more interactable!
                </div>
            </div>
        </div>
    </section>
@endsection
