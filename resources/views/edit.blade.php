@extends('master.layout')

@section('style')


@endsection

@section('title')
  Modifier{{$plat->title}}
@endsection

@section('content')
<div class="row my-4">
    <div class="col-md-8 mx-auto">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <div class="card">
            <div class="card header">
               <h3 class="card title">
                Modifier {{$plat->title}}
                </h3> 
            </div>
            <div class="card body">
                <form action="{{route('plat.update',$plat->slug)}}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="mt-3">
                    <label for="exampleFormControlInput1" class="form-label">Title:</label>
                    <input type="text" class="form-control"
                    value="{{$plat->title}}"
                     name="title" placeholder="title">
                   </div>
                  <div class="mt-3">
                    <label for="exampleFormControlInput1" class="form-label">Image:</label>
                    <input type="file" class="form-control" name="image" >
                  </div>
                  <div class="mt-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description:</label>
                    <textarea class="form-control" name="body" rows="3" placeholder="Description">{{$plat->body}}</textarea>
                  </div>
                   <div class="mt-3">
                        <button class="btn btn-primary">
                            Valider
                        </button>
                   </div>
            </form>    
        </div>
    </div>
</div>
@endsection