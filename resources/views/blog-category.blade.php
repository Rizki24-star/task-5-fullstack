@extends('layout.main')

@section('container')
 
<br><br>
<section class="new-post mt-5">
  <div class="container">
    <h1 class="tx-oke fw-bold text-center mb-5 text-uppercase">BLOGS IN {{$cat}}</h1>
    <br>

    @if ($post->count() > 0)
    <div class="row">
      <div class="col-md-12">
  
        <div class="container row item-blog">
  
          @foreach($post as $p)
          <div class="col-md-4 mb-4 container">
            <div class="" style='background-image: url("/storage/{{$p->image}}"); background-repeat: no-repeat; background-size: cover; height: 207px; border-radius: 20px;'></div>
          <div class="mt-3">
              <p class="category-name tx-cancel text-uppercase"><a class="tx-cancel" href="/categories/{{$p->category->id}}">{{$p->category->name}}</a></p>
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
    @else
    <h1 class="tx-oke fw-bold text-center mb-5 text-uppercase">&#128060; No blogs have been posted yet</h1>
    @endif

</section>


<br><br><br><br>
@endsection