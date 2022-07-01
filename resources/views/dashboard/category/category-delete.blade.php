@extends('dashboard.main')

@section('container')

  <div class="list-mypost">
    <div class="row">
        <div class="col-md-1 col-sm-1">
          
        </div>
        <div class="col-md-10 col-sm-10">
            <div class="container d-flex mb-5 mt-3">
                <a href="" class="btn bg-main text-white"><i class="far fa-plus-square"></i> Create post</a>
                <div class="ms-auto">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                      </form>
                </div>
            </div>
            <div class="container scroll">
                <table class="table">
                    <tr>
                        <th>NO</th>
                        <th>Title</th>
                        <th>category</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        @foreach ($posts as $p)
                        <td>{{$loop->iteration}}</td>
                        <td style="">{{$p->title}}</td>
                        <td>{{$p->category_id}}</td>
                        <td>
                            <div>
                                <img src="/storage/{{$p->image}}>" alt="">
                            </div>
                        </td>
                        <td class="">
                            <div class="d-flex text-white">
                                <a class="badge  -oke tx-main" href=""><i class="far fa-eye"></i></a>&nbsp;
                                <a class="badge  -warning tx-main" href=""><i class="far fa-edit"></i></a>&nbsp;
                                <a class="badge  -cancel tx-main" href=""><i class="far fa-trash-alt"></i></a>
                            </div>
                        </td>
                        @endforeach
                    </tr>
                </table>
            </div>
        </div>
    </div>
  </div>

<br><br><br><br>
@endsection

