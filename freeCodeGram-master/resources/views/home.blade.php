@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-3 p-5 margin-left:30px">
    <img src="https://instagram.fnbo9-1.fna.fbcdn.net/v/t51.2885-19/s150x150/127260868_202010198054752_2449715827688702661_n.jpg?tp=1&_nc_ht=instagram.fnbo9-1.fna.fbcdn.net&_nc_ohc=JKS0cWUDFzQAX95DzXn&edm=ABfd0MgAAAAA&ccb=7-4&oh=6e828862101b6efeda348004e5806ab4&oe=608F9011&_nc_sid=7bff83" class="rounded-circle">
    
    </div>
    <div class="col-9 pt-5">
    <div class ="d-flex justify-content-between align-items-baseline"><h1>{{$user ->username}}</h1>
    <a href="#"> Add New Post</a>
    </div>
    <div class="d-flex">

    <div class="pr-5"><strong>153 </strong>posts</div>
    <div class="pr-5"><strong>23k </strong>followers</div>
    <div class="pr-5"><strong>212 </strong>following</div>
    </div>


<div class="pt-4"><strong>{{$user->profile->title}}</strong></div>
<div><strong>{{$user->profile->description}}</strong></div>
div><strong>{{$user->profile->url}}</strong></div>
</div>
</div>

<div class="row pt-4">
<div class="col-4">
<img src="https://instagram.fnbo10-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/93440012_128354082124185_7560888044407439597_n.jpg?tp=1&amp;_nc_ht=instagram.fnbo10-1.fna.fbcdn.net&amp;_nc_cat=109&amp;_nc_ohc=E6YLd5HqXQAAX_w0Ezu&amp;edm=ABfd0MgAAAAA&amp;ccb=7-4&amp;oh=f5bfd3824ec59c6b0a62f58a058bb611&amp;oe=60910B86&amp;_nc_sid=7bff83" class="w-100" >
</div>


<div class="col-4">
<img src="https://instagram.fnbo10-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/93440012_128354082124185_7560888044407439597_n.jpg?tp=1&amp;_nc_ht=instagram.fnbo10-1.fna.fbcdn.net&amp;_nc_cat=109&amp;_nc_ohc=E6YLd5HqXQAAX_w0Ezu&amp;edm=ABfd0MgAAAAA&amp;ccb=7-4&amp;oh=f5bfd3824ec59c6b0a62f58a058bb611&amp;oe=60910B86&amp;_nc_sid=7bff83" class="w-100" >
</div>

<div class="col-4">
<img src="https://instagram.fnbo10-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/93440012_128354082124185_7560888044407439597_n.jpg?tp=1&amp;_nc_ht=instagram.fnbo10-1.fna.fbcdn.net&amp;_nc_cat=109&amp;_nc_ohc=E6YLd5HqXQAAX_w0Ezu&amp;edm=ABfd0MgAAAAA&amp;ccb=7-4&amp;oh=f5bfd3824ec59c6b0a62f58a058bb611&amp;oe=60910B86&amp;_nc_sid=7bff83" class="w-100" >
</div>

</div>
</div>
@endsection
