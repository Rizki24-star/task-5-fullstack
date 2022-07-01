@extends('layout.main')

@section('container')

<div class="jumbotron">
  <div class="container mt-5">
   <div class="row">
    <div class="col-md-6">
      <div style="max-width: 470px;">
        <img src="/storage/image/blog.png" style="width: 100%;"alt="">
      </div>
    </div>
    <div class="col-md-6">
      <div class="container mt-5">
        <p class="jumbotron-title tx-main">
          Normal Lifestyle, 
          <span class="tx-oke">We Are Here</span>
        </p>
        <div class="bg-sun" style="width: max-content;">
          <p class="container fw-bold category-name">REGISTER NOW FOR FREE</p>
        </div>
      </div>
    </div>
   </div>
  </div>
 
</div>
<br><br>
<section class="new-post">
  <div class="container">
    @if ($new != null)
    <h1 class="tx-oke fw-bold text-center">NEW POST</h1>
    <br>
    <div class="row container">
      <div class="col-md-6 container">
        <div class="" style="max-width: 370px;"">
          <img src="/storage/{{$new->image}}" alt="" style="width: 100%;" />
        </div>
      </div>
      <div class="col-md-6 container">
        <div class="container" style="text-align: justify;">
          <p class="category-name tx-cancel fw-bold text-uppercase"><a class="tx-cancel" href="/categories/{{$new->category_id}}">{{$new->category->name}}</a></p>
          <h3 class="tx-main">{{$new->title}}</h3>
          <br>
          <p>
            {{ Str::limit(strip_tags($new->content),400) }} &nbsp; <a href="#" class="fw-bold">Baca selengkapnya</a>
          </p>
          <br>
          <div class="d-flex" >
            <b class="text-dark">by <a class="tx-main" href="/author/{{$new->user->id}}">{{$new->user->name}}</a></b>
            <div class="ms-auto">
              <p> {{\Carbon\Carbon::parse($new->updated_at)->format('F d, Y')}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif
  </div>
</section>

@if ($category->count() > 0)
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#154360" fill-opacity="1" d="M0,96L80,122.7C160,149,320,203,480,202.7C640,203,800,149,960,133.3C1120,117,1280,139,1360,149.3L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
<div class="category-list bg-main">
  <div class="container">
    <h2 class="text-white text-center">What's you're favorites?</h2>
    <br>
    <ul class="list-category list-group-horizontal">

      @foreach ($category as $c)
      <li class="list-category-item p-1 px-2">
        <div class="rounded-pill bg-white border border-1 px-4 py-2">
          <div class="dosen-member d-flex">
            <div class="">
              <a href="/categories/{{$c->id}}" class="fw-bold tx-oke text-uppercase">{{$c->name}}</a>
            </div>
          </div>
        </div>
      </li>
      @endforeach

    </ul>
    <br>
  </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: -10px;"><path fill="#154360" fill-opacity="1" d="M0,160L120,133.3C240,107,480,53,720,58.7C960,64,1200,128,1320,160L1440,192L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>
@endif

@if ($post->count() > 0)
<section class="list-post bg-white container mb-5">
  <h1 class="tx-oke fw-bold text-center">LIST BLOG</h1>
  <br>

  <div class="container row item-blog">

    @foreach($post as $p)
    <div class="col-md-4 mb-4 container">
      <div class="" style='background-image: url("/storage/{{$p->image}}"); background-repeat: no-repeat; background-size: cover; height: 207px; border-radius: 20px;'></div>
    <div class="mt-3">
      <p class="category-name tx-cancel text-uppercase"><a class="tx-cancel" href="/categories/{{$p->category_id}}">{{$p->category->name}}</a></p>
        <p class="tx-main fw-bold"><a class="tx-main" href="/blogs/{{$p->id}}">{{$p->title}}</a></p>
        <div class="d-flex">
          <b class="info-title">by <a href="/author/{{$p->user->id}}">{{$p->user->name}}</a></b>
          <div class="ms-auto">
            <p class="info-title"> {{\Carbon\Carbon::parse($p->updated_at)->format('F d, Y')}}</p>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>

    <div class="text-center mt-5">
      <a href="/blogs" class="rounded-pill btn bg-oke text-white px-4">More blogs</a>
    </div>
</section>
@else
<h1 class="tx-oke fw-bold text-center mb-5 text-uppercase">&#128060; No blogs have been posted yet</h1>
@endif
<br><br><br><br>
@endsection