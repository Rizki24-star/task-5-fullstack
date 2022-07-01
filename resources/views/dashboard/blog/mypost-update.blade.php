@extends('dashboard.dashboard-layout.main')

@section('container')

  <div class="list-mypost">
    <div class="row">
        <div class="col-md-1 col-sm-1">
          
        </div>
        <div class="col-md-10 col-sm-10">
            <div class="content-add container">
                <div class="container">
                    <a class="tx-oke fw-bold" href="/dashboard/blogs">Dashboard</a> <b> > </b> Update post
                </div>
                <div class="col-md-10 p-3">
                    <div class="text-center">
                        <h4 class="fw-bold">Update Post</h4>
                    </div>
                    <form action="/dashboard/blogs/{{$post->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="p-3">
                            <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{old('title',$post->title)}}" placeholder="Title">
                            @error('title')
                            <div class="text-danger">
                                <small>{{$message}}</small>
                            </div>
                            @enderror
                            <input name="user_id" type="hidden" value="{{Auth::user()->id}}">
                        </div>
                        <div  class="p-3 row">
                            <div class="col-md-12 mb-4">
                                <select name="category_id" id="" class="form-select @error('category_id') is-invalid @enderror" >
                                    <option value="">Category</option>
                                    @foreach ($cat as $c)
                                        <option @if(old('category_id',$post->category_id) == $c->id) selected @endif value="{{$c->id}}">{{$c->name}}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="text-danger">
                                    <small>{{$message}}</small>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="mb-3" style="width: 100px;">
                                    <img class="img-preview" src="{{'/storage/'.$post->image}}" alt="" style="width: 100%">
                                </div>
                                <input type="file" value="{{$post->image}}" class="form-control @error('image') is-invalid @enderror" name="image">
                                <input type="file" value="{{$post->image}}" class="d-none" name="oldImage">
                                @error('image')
                                <div class="text-danger">
                                    <small>{{$message}}</small>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div  class="p-3">
                            <input id="content" type="hidden" name="content">
                            <trix-editor input="content" name="content" placeholder="Content">{{strip_tags (old('content',$post->content))}}</trix-editor>
                            @error('content')
                            <div class="text-danger">
                                <small>{{$message}}</small>
                            </div>
                            @enderror
                        </div>
                        <div class="container mt-2 d-flex">
                            <button class="btn text-white bg-main ms-auto"><i class="far fa-paper-plane"></i> Update my post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>

  

<br><br><br><br>
@endsection

