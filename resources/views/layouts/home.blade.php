@include('block.link')
@include('block.header')
@extends('layouts.personal-page')
@section('title','AnimeChill')

@section('js')
    <script>
        // Initialization for ES Users
        import {
            Carousel,
            initTE,
            } from "tw-elements";

        initTE({ Carousel });
    </script>
@endsection

@section('content')
    

<div class="main" style="background-color: rgb(25, 23, 23);padding-top:106px">
    
    {{-- <h1 class="text-white">Phú nè</h1> --}}
    @include('block.nav')
    <div class="container box-border flex  mr-auto ml-auto text-slate-300 " style="background-color :rgb(23,24,28); max-width:92%">
    
        <br>
        <div class="content w-4/5 float-left min-h-full">
            <h2 class="text-3xl text-yellow-400 mb-2 pl-2" >PHIM HOT</h2>
            <div class="grid grid-cols-4 gap-4 pb-6 " id="hot">
                @foreach ($productHot as $item)
                    <section class="w-full h-full ">
                        <div class=" text-xl cursor-pointer w-full h-full text-white hover:text-fuchsia-500">
                            <a href="{{url("show-Product-Detail/".$item->id) }}" class="" >
                                <img src="{{$item->img}}" alt="" srcset="" style=" max-width: 260px ; min-height:378px; ">
                            </a>
                            <a href="{{url("show-Product-Detail/".$item->id) }}" class="">{{$item->name}}</a>
                        </div>
                        
                    </section>
                @endforeach
            </div>
            <h2 class="text-3xl text-yellow-400 mb-2 pl-2" >PHIM SẮP RA</h2>
            <div class="grid grid-cols-4 gap-4 pb-6 " id="soon">
                @foreach ($productSoon as $item)
                    <section class="w-full h-full ">
                        <div class=" text-xl cursor-pointer w-full h-full text-white hover:text-fuchsia-500">
                            <a href="{{url("show-Product-Detail/".$item->id) }}" class="" >
                                <img src="{{$item->img}}" alt="" srcset="" style=" max-width: 260px ; min-height:378px; ">
                            </a>
                            <a href="{{url("show-Product-Detail/".$item->id) }}" class="">{{$item->name}}</a>
                        </div>
                        
                    </section>
                @endforeach
            </div>
            <h2 class="text-3xl text-yellow-400 mb-2 pl-2" >Danh Sách Yêu Thích</h2>
            
            <div class="grid grid-cols-4 gap-4 pb-6 " id="love">
                @foreach ($productList as $item)
                        <section class="w-full h-full ">

                            <div class=" text-xl cursor-pointer w-full h-full text-white hover:text-fuchsia-500">
                                <a href="{{url("show-Product-Detail/".$item->id) }}" class="" >
                                    <img src="{{$item->img}}" alt="" srcset="" style=" max-width: 260px ; min-height:378px; ">
                                </a>
                                <a href="{{url("show-Product-Detail/".$item->id) }}" >{{$item->name}}</a>
                            </div>
                            
                        </section>
                   
                @endforeach
            </div>
        </div>
            
        {{-- style="color: #ffd43b;" --}}
        @include('block.slidebar')


    </div>

    @include('block.footer')
</div>