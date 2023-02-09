@extends('master.layout')

@section('style')


@endsection

@section('title')
  Ajouter un plat
@endsection

@section('content')
<div class="row my-4 h-100 " style="height:72vh !important">
    <div class="col-md-8 mx-auto ">
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
                ajouter un plat
                </h3> 
            </div>
            <div class="card body">
                <form action="{{route('plat.store')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="mt-3">
                    <label for="exampleFormControlInput1" class="form-label">Title:</label>
                    <input type="text" class="form-control" name="title" placeholder="title">
                   </div>
                  <div class="mt-3">
                    <label for="exampleFormControlInput1" class="form-label" >Image:</label>
                    <input type="file" class="form-control" name="image" >
                  </div>
                  <div class="mt-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description:</label>
                    <textarea class="form-control" name="body" rows="3" placeholder="Description"></textarea>
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