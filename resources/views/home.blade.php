@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/svg/profile-logo.png" style="max-height:100px;" class="rounded-circle" alt="">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{$user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong>Publications</div>
                <div class="pr-5"><strong>32,4K</strong>Abonnées </div>
                <div class="pr-5"><strong>233</strong>Abonnements </div>
            </div>
            <div class="pt-4 font-weight-bold"> freeCodeCamp.org</div>
            <div>
                <p>
                    We're a global community of millions of people learning to code together.
                     We're an open source, donor-supported, 501(c)(3) nonprofit.
                </p>
            </div>
            <div>
                <a href="https://www.freecodecamp.org">www.freecodecamp.org</a>
            </div>

        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img class="w-100" style="max-height:300px;" src="/svg/mountain.jpg" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" style="max-height:300px;" src="/svg/lake.jpg" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" style="max-height:300px;" src="/svg/river.jpg" alt="">
        </div>

       

    
    </div>

</div>
@endsection
