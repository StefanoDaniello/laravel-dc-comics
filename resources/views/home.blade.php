@extends('layouts.app')

@section('title', 'home')

@section('content')
<div class="bg-black">
    <div class="button-blue d-flex justify-content-center align-items-center">
        <h2>CURRENT SERIES</h2>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic) 
                <div  class="col-12 col-md-6 col-lg-3 my-3">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{$comic['thumb']}}"  alt="item.series">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">{{$comic['title']}}</h6>
                            <p class="card-text">{{$comic['series']}}</p>
                            <p class="card-text">{{$comic['price']}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
    
@endsection

<style lang="scss" scoped>
    img{
        height: 100%;
    }
   .card{
       height: 700px !important;
       background-color: black;
       color: white;
    }
    #compra{
        display: none;
        height: 100%;
        background-color: rgba(180, 180, 180, 0.3);
        position: relative;
        top: -100%;
        h1{
            color: white;
            position: absolute;
            font-size: 100px;
            transform: rotate(-75deg);
           display: flex;
           justify-content: center;
           align-items: center;
           width: 100%;
           height: 100%;
        }
    }
   .card-img{
       height: 500px;
   }
   .button-blue{
       width: 300px;
       height: 80px;
       color: white;
       background-color: #0282F9;
       border: 2px solid white;
       border-radius: 10px;
       transform: translate(50%, -50%);
   }
</style>