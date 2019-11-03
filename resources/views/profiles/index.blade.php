@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/svg/profile-logo.png" style="max-height:100px;" class="rounded-circle" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong>Publications</div>
                <div class="pr-5"><strong>32,4K</strong>Abonnées </div>
                <div class="pr-5"><strong>233</strong>Abonnements </div>
            </div>
            <div class="pt-4 font-weight-bold"> {{$user->profile->title }}</div>
            <div>
                <p>
                    {{$user->profile->description }}
                </p>
            </div>
            <div>
                <a href="#">{{$user->profile->url ?? 'N/A' }}</a>
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
