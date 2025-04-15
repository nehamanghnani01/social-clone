@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="/svg/instaCloneLogo.svg" class="rounded-circle" style="width:25px; height:25px">

        </div>
        <div class="col-9" style="padding-top:5px;">
            <div class="d-flex justify-content-between">
                <h1>{{$user->username}}</h1>
                <a href="#">Add a new Post</a>
            </div>
            <div class="d-flex">
                <div style="padding-right:10px;"><strong>153 posts</strong></div>
                <div style="padding-right:10px;"><strong>23k followers</strong></div>
                <div style="padding-right:10px;"><strong>212 following</strong></div>
            </div>
            <div style="padding-top:4px font-weight:bold">{{$user->profile->title}}</div>
            <div> {{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url ?? 'N/A'}}<div>

        </div>

        <div class="row g-0" style="padding-top:10px">
            <div class="col-4">
                <img src="/svg/ocean_2.jpg" style="width:300px; height:300px">
            </div>
            <div class="col-4">
                <img src="/svg/nature_3.jpg" style="width:300px; height:300px">
            </div>
            <div class="col-4">
                <img src="/svg/space_1.jpg" style="width:300px; height:300px">
            </div>
        </div>
    </div>
</div>
@endsection
