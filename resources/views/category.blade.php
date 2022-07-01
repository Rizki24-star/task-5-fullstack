@extends('layout.main')

@section('container')
 
<br><br>
<section class="new-post mt-5">
  <div class="container">
    <h1 class="tx-oke fw-bold text-center mb-5">CATEGORIES</h1>
    <br>
    @if ($category->count() > 0)
    <div class="row container">
      @foreach($category as $c)
      <div class="col-md-4 container mb-4">
        <div class="img-cat-area bg-transparent" style="max-width: 370px;">
          <a href="/categories/{{$c->id}}">
          <div class="position-absolute bg-oke py-1 px-3 text-white fw-bold">
            <p class="mt-3">{{$c->name}}</p>
          </div>
          <img class="img-cat-page" src="https://source.unsplash.com/500x400/?{{$c->name}}" alt="" style="width: 100%;" />
          </a>
        </div>
     </div>
     @endforeach
    </div>
    @else
    <h1 class="tx-oke fw-bold text-center mb-5 text-uppercase">&#128060; No Category have been posted yet</h1>
    @endif
  </div>
</section>


<br><br><br><br>
@endsection