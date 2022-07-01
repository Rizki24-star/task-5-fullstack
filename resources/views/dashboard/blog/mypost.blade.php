@extends('dashboard.dashboard-layout.main')

@section('container')


  <div class="list-mypost">
    <div class="row">
        <div class="col-md-1 col-sm-1">
          
        </div>
        <div class="col-md-10 col-sm-10">
            <div class="container d-flex mb-5 mt-3">
                <a href="/dashboard/blogs/create" class="btn bg-main text-white"><i class="far fa-plus-square"></i> Create post</a>
                <div class="ms-auto">
                    <form class="d-flex" action="/dashboard/blogs" method="get">
                        <input class="form-control me-2" type="text" value="{{request('search')}}" name="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                      </form>
                </div>
            </div>
            @if ($posts->count() > 0)
            <div class="container scroll">
                <table class="table">
                    <tr>
                        <th>NO</th>
                        <th>Title</th>
                        <th>category</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($posts as $p)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td style=""><a class="tx-main" href="/dashboard/blogs/{{$p->id}}">{{$p->title}}</a></td>
                        <td>{{$p->category->name}}</td>
                        <td>
                            <div class="" style="width: 100px;">
                                <img src="/storage/{{$p->image}}" alt="" style="width: 100%">
                            </div>
                        </td>
                        <td class="">
                            <div class="d-flex text-white">
                                <a class="badge tx-main" href="/dashboard/blogs/{{$p->id}}"><i class="far fa-eye"></i></a>&nbsp;
                                <a class="badge tx-main" href="/dashboard/blogs/{{$p->id}}/edit"><i class="far fa-edit"></i></a>&nbsp;
                                <a class="badge tx-main" type="button" data-bs-toggle="offcanvas" data-bs-target="#delete{{$p->id}}" aria-controls="offcanvasTop"><i class="far fa-trash-alt"></i></a>
                            </div>
                        </td>

                        {{-- confirmation delete          --}}
                        <div class="offcanvas offcanvas-top" tabindex="-1" id="delete{{$p->id}}" aria-labelledby="offcanvasTopLabel">
                            <div class="offcanvas-body mt-4">
                              <div class="d-flex container">
                                <div>
                                    <h3>are you sure you want to delete this post? </h3>
                                    <p>Deleted posts cannot be recovered</p>
                                </div>
                                <div class="ms-auto">
                                    <form action="/dashboard/blogs/{{$p->id}}" method="post" >
                                        @method('delete')
                                        @csrf
                                        <button type="submit"  class="btn bg-oke text-white fw-bold" href="">Yes</button>
                                      </form>
                                    {{-- <a  class="btn bg-oke text-white fw-bold" href="">Yes</a> --}}
                                    <button type="button" class="btn bg-cancel text-white fw-bold" data-bs-dismiss="offcanvas">Cancel</button>
                                </div>
                              </div>
                            </div>
                          </div>
                    </tr>
                    @endforeach
                </table>
             </div>

             <div class="d-flex justify-content-center mt-3">
                    {{$posts->links()}}
            </div>
    
            @else
            <h3 class="tx-main fw-bold text-center"><i class="fas fa-sad-tear"></i> No posts found</h3>
            @endif
        </div>

    </div>
  </div>


  
<br><br><br><br>
@endsection

