
@extends('layouts.app')
@section('title', 'About')

@section('content')
<div class="color-blue w-100 p-5">
</div>

<div class="container">
    <div class="button-blue d-flex justify-content-center align-items-center">
        <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
    </div>
    <div>
        @foreach ($comics as $comic) 
            <div class="col-12 my-5 d-flex " >
            
                <div class="card-body ">
                    <h1 class="card-title text-info ">{{$comic['title']}}</h1>
                    <div class="d-flex justify-content-between align-items-center  bg-success pt-2 my-2">
                        <p class="card-text mx-3"><span class="opacity-75 text-white">U.S. PRICE: </span>{{$comic['price']}}</p>
                        <p class="opacity-75 text-white mx-3">AVIABLE</p>
                    </div>
                    <p class="card-text w-75 ">{{$comic['description']}}</p>
                </div>

                <div class="mx-4" id="compra">
                    <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
                </div>
            </div>
            
        @endforeach
    </div>
</div>


@endsection


<style lang="scss" scoped>
   
    .color-blue{
        background-color: #0C7CEC;
    }
   
   .button-blue{
       width: 300px;
       height: 80px;
       transform: translate(0%, -250%);
   }
   #compra{
      img{
         width: 300px;
         height: 300px;
      }
   }
</style>