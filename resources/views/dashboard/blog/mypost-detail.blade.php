@extends('dashboard.dashboard-layout.main')

@section('container')

  <div class="list-mypost">
    <div class="row">
        <div class="col-md-1 col-sm-1">
          
        </div>
        <div class="col-md-10 col-sm-10">
            <div class="content-add container">
                <div class="container">
                    <a class="tx-oke fw-bold" href="/dashboard/blogs">Dashboard</a> <b> > </b> {{$title}}
                </div>

                <div class="col-md-11 p-3 mt-4">
                    <div class="row">
                        <div class="col-md-10">
                            <h5 class="category-name-detail tx-cancel fw-bold text-uppercase">{{$post->category->name}}</h5>
                            <h2 class="fw-bold">{{$post->title}}</h2>
                        </div>
                        <div class="col-md-2">
                            <div class="d-flex">
                                <h4><a class="tx-main" href="/dashboard/blogs/{{$post->id}}/edit"><i class="far fa-edit"></i></a></h4>&nbsp;&nbsp;
                                <h4><a class="tx-main" type="button" data-bs-toggle="offcanvas" data-bs-target="#delete{{$post->id}}" aria-controls="offcanvasTop"><i class="far fa-trash-alt"></i></a></h4>
                            </div>
                        </div>
                    </div>

                    <div class="post-content mt-5">
                        <div class="img-detail-area">
                            <img src="/storage/{{$post->image}}" alt="">
                        </div>
                    </div>

                    <div class="post-content mt-5">
                        <div class="text-justify">
                            {!!$post->content!!}
                        </div>
                    </div>

                </div>
                
              

            </div>
        </div>
    </div>
  </div>

       {{-- confirmation delete          --}}
       <div class="offcanvas offcanvas-top" tabindex="-1" id="delete{{$post->id}}" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-body mt-4">
        <div class="d-flex container">
            <div class="post-title">
                <h3>are you sure you want to delete this post? </h3>
                <p>Deleted posts cannot be recovered</p>
            </div>
            <div class="ms-auto">
                <div class="d-flex">
                    <form action="/dashboard/blogs/{{$post->id}}" method="post" >
                        @method('delete')
                        @csrf
                        <button type="submit"  class="btn bg-oke text-white fw-bold" href="">Yes</button>
                    </form>&nbsp;
                    <button type="button" class="btn bg-cancel text-white fw-bold" data-bs-dismiss="offcanvas">Cancel</button>
                </div>
                
            </div>
        </div>
        </div>
    </div>

<br><br><br><br>
@endsection

