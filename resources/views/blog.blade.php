@extends('layout.main')

@section('container')
 
<br><br>
<section class="new-post mt-5">
  <div class="container">
    <h1 class="tx-oke fw-bold text-center mb-5">BLOGS</h1>
    <br>
    <br><br><br>
    @if($new != null)
    <div class="row container">
      <div class="col-md-6 container">
        <div class="" style="max-width: 370px;"">
          <img src="/storage/{{$new->image}}" alt="" style="width: 100%;" />
        </div>
      </div>
      <div class="col-md-6 container">
        <div class="container" style="text-align: justify;">
          <p class="category-name tx-cancel fw-bold text-uppercase"><a class="tx-cancel" href="/categories/{{$new->category_id}}">{{$new->category->name}}</a></p>
          <h3 class="tx-main"><a class="tx-main" href="/blogs/{{$new->id}}">{{$new->title}}</a></h3>
          <br>
          <p>
            {{ Str::limit(strip_tags($new->content),400) }} &nbsp; <a href="/blogs/{{$new->id}}" class="fw-bold">Baca selengkapnya</a>
          </p>
          <br>
          <div class="d-flex" >
            <b class="">by <a class="text-dark" href="/author/{{$new->user->id}}">{{$new->user->name}}</a></b>
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

@if ($post->count() > 0)
<section class="list-post bg-white container mb-5">
  <br>

  <div class="row">
    <div class="col-md-12">

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

    </div>

  </div>

  
</section>
@else
<h1 class="tx-oke fw-bold text-center mb-5 text-uppercase">&#128060; No blogs have been posted yet</h1>
@endif
<br><br><br><br>
@endsection