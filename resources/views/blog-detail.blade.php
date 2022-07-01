@extends('layout.main')

@section('container')
 
<br><br>

<section class="list-post bg-white container mb-5">
  <br>

  <div class="row">
    <div class="col-md-8">

          <div class="post-content">
              <div class="img-detail-area">
                  <img src="/storage/{{$post->image}}" alt="">
              </div>
          </div>

          <div class="row item-blog">
            <div class="col-md-10">
                <h5 class="category-name-detail tx-cancel fw-bold text-uppercase"><a class="tx-cancel" href="/categories/{{$post->category->id}}">{{$post->category->name}}</a></h5>
                <h1 class="fw-bold">{{$post->title}}</h1>
            </div>
            <div class="d-flex mt-2">
              <div>
                <p><i class="far fa-user"></i>&nbsp; <a class="tx-main" href="/author/{{$post->user->id}}">{{$post->user->name}}</a></p>
              </div>
              <div class="px-4">
                <p><i class="far fa-calendar-alt"></i>&nbsp; {{\Carbon\Carbon::parse($post->updated_at)->format('F d, Y')}}</p>
              </div>
            </div>
        </div>

          <div class="post-content mt-4">
              <div class="text-justify">
                  {!!$post->content!!}
              </div>
              <div class="mt-3 text-center">
                  <small>&#128521; Thanks for reading</small>
              </div>
          </div>
          <br>
          @if ($rpost->count() > 0)
          <div class="mt-5 mb-4">
            <div class="mb-3">
              <h3 class="tx-oke fw-bold">Related Post</h3>
              {{-- <hr class=" border border-success border-3 border-style-dotted"> --}}
            </div>
            <div class="row">
              @foreach ($rpost as $rp)
              <div class="col-md-4">
                <div class="" style='background-image: url("/storage/{{$rp->image}}"); background-repeat: no-repeat; background-size: cover; height: 100px; border-radius: 20px;'></div>
                <h6 class="mt-3"><a class="tx-main" href="/blogs/{{$rp->id}}">{{$rp->title}}</a></h6>
              </div>
              @endforeach
            </div>
          </div>
          @endif

    </div>

    @if ($category->count() > 0)
    {{-- category --}}
    <div class="col-md-4">
      <div class="category-side-list bg-main py-3 mt-3">
        <div class="category-list">
          <div class="">
            <h5 class="text-main text-center text-white">Categories </h5>
          </div>
            <br>
            <ul class="list-category list-group-horizontal pr-2 container">
             
              @foreach ($category as $c)
              @php
              $tot = App\Models\Article::where('category_id','=',$c->id)->count();
              @endphp
                <li class="list-category-item mb-2 px-1">
                  <a href="/categories/{{$c->id}}" class="btn btn-sm text-white bg-oke  position-relative rounded-pill px-3">
                    {{$c->name}}
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger tx-sm">
                      {{$tot}}
                    </span>
                  </a>
              </li>
              @endforeach

            </ul>
            <br>
        </div>
      </div>
    </div>
    @endif

  </div>

  
</section>
<br><br><br><br>
@endsection