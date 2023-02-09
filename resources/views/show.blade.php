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
<div class="row mt-5 justify-content-center">
    <div class="col-md-8">
        <div class="row">
           
          <div class="col-md-12 mb-4  ">  
             <div class="card h-100 " >
                <img src="{{asset('./uploads/'.$plat->image)}}" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">{{$plat['title']}}</h5>
                     <p class="card-text">{{$plat['body']}}</p>
                  </div>
             </div>
            
             <a href="{{route('plat.edit',$plat->slug)}}" class="btn btn-warning">
                Modifier
             </a>
             <form action="{{route('plat.delete',$plat->slug)}}" method="post">
                @csrf 
                @method('DELETE')  
                <button class="btn btn-danger" type="submit">
                    Supprimer
                </button> 
             </form>
             
         </div>  
         
         </div> 
        

     </div>                                        
</div>                                            
@endsection