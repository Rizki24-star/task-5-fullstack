@extends('dashboard.dashboard-layout.main')

@section('container')

  <div class="list-mypost">
    <div class="row">
        <div class="col-md-1 col-sm-1">
          
        </div>
        <div class="col-md-10 col-sm-10">
            <div class="content-add container">
                <div class="container">
                    <a class="tx-oke fw-bold" href="/dashboard/category">Dashboard</a> <b> > </b> Create category
                </div>
                <div class="col-md-10 p-3">
                    <div class="text-center">
                        <h4 class="fw-bold">Create Category</h4>
                    </div>
                    <form action="/dashboard/category/" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="p-3">
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="name">
                            @error('name')
                            <div class="text-danger">
                                <small>{{$message}}</small>
                            </div>
                            @enderror
                            <input name="user_id" type="hidden" value="{{Auth::user()->id}}">
                        </div>
                        <div class="container mt-2 d-flex">
                            <button class="btn text-white bg-main ms-auto"><i class="far fa-paper-plane"></i> Send my category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>

<br><br><br><br>
@endsection

