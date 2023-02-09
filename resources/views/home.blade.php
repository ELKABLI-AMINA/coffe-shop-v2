@extends('master.layout')

@section('style')
<style>
    body{
        background-color:#dddddd;
    }
</style>

@endsection

@section('title')
 Coffee_Shop
@endsection

@section('content') 
  <div style="max-height:700px;overflow:hidden" class="w-100 m">
    <img style="width:100%" src="{{asset('img/cover.png')}} " alt="">

  </div>
  <div class="container">
            <div class="heading3">Menu</div>
  </div>
<div class="row mt-5 mx-5 ">
    <div class="">
        @if(session()->has('success'))
            <div class="alert alert-success">
                    {{session()->get('success')}}
            </div>
        @endif
        <div class="row  justify-content-around">
          @foreach($plats as $plat)  
          <div class="col-md-3 h-100 mb-4">  
             <div class="card" style="width: 18rem;">
                <img src="{{asset('./uploads/'.$plat->image)}}" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">{{$plat['title']}}</h5>
                     <p class="card-text text-truncate">{{$plat['body']}}</p>
                     <a href="{{route('plat.show',$plat->slug)}}" class="btn btn-primary">Voir</a>
                  </div>
             </div>
         </div>  
           @endforeach 
         </div> 
        <div class="d-flex justify-content-center" >
            {{$plats->links()}}
        </div>
    </div> 
                                            
</div>                                            
@endsection