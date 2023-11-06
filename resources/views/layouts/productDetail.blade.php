@include('block.link')
@include('block.header')
@extends('layouts.personal-page')
@section('title','AnimeChill')

<div class="main" style="background-color: rgb(25, 23, 23);padding-top:106px">
    <div class="nav pt-2 pb-2 mr-auto ml-auto text-white text-center text-2xl" style="background-color :#3A3A3A; max-width: 92%; ">
    <p>{{$idProduct->name}}</p>
    </div>
    <div class="container box-border flex pt-2 mr-auto ml-auto text-slate-300 " style="background-color :rgb(23,24,28); max-width:92%; height: 2000px">
        <div class="content w-4/5 float-left ">
            <iframe width="100%" height="599" src="{{$idProduct->video}}" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            {{-- <div class="content-detail-ep w-11/12" >
                <h1 class="text-white text-xl pt-2">Danh Sách Tập</h1>
                1 2 3 4 5
            </div> --}}
            <div class="content-detail mt-4 mr-auto ml-auto flex rounded-lg" style="background-color :#3A3A3A">
                
                <div class="content-detail-img ml-4 mt-4 mb-4"  style="width: 20%">
                    <img class="rounded-lg" src="{{$idProduct->img}}" alt="" srcset="">
                </div>

                <div class="content-detail-sec ml-4 mt-4 mb-4" style="width: 80%; ">
                    <div class="content-detail-title text-2xl text-yellow-400 ">
                        <p>{{$idProduct->name}}</p>
                    </div>
                    <div class="content-detail-box break-all w-full pr-4" >
                        <br>
                        <p>
                            {{$idProduct->des}}
                        </p>

                    </div>
                </div>

                
            </div>
            <div class="comment rounded-lg mt-2 pl-2 pb-4" style="background-color :#3A3A3A">
                <p class=" text-2xl text-yellow-400">
                    Bình Luận
                </p>
                
                @if (!empty(Session::has('name')))
                    <p class="text-cyan-400 p-2">
                        <i class="fa-regular fa-comments">
                            {{Session::get('name')}}

                        </i>
                    </p>
                    <form action="{{route('comment')}}" method="POST">
                        @csrf
                        <input type="hidden" name="idProduct" value="{{$idProduct->id}}">
                        <input type="text" name="textComment" id="" class="w-3/5 h-10 rounded-md bg-black" placeholder=" Nhập bình luận của bạn ...">
                        <button type="submit" class="add-comment  bg-red-700 hover:bg-red-800 text-white font-bold py-2 px-4 rounded">Bình Luận</button>
                    </form>
                @endif
                @foreach ($comment as $item)
                    
                    <div class="bg-black w-auto h-auto rounded-md mb-2 mr-2">
                        <i class="fa-solid fa-dragon mt-2 ml-2 text-fuchsia-400">
                            {{$item->name}}
                        </i>
                        <p class="m-2 pb-2">
                            {{$item->text}}
                        </p>
                    </div>
                @endforeach
                
            </div>
        </div>
        {{-- <div class="slidebar w-1/5 float-right	text-white pl-2">
            <span class="text-2xl text-yellow-400"  >
                <i class="fa-solid fa-ranking-star"></i>
                Top Anime
            </span>
            <img src="https://statics.animeow.pro/imgur/1TVJzh4.webp" alt="" class="w-full">
            <div class="flex flex-col pb-6 ">
                @foreach ($productTop as $item)
                
                    <section class="w-full h-full  mt-4">
                        <div class=" text-xl cursor-pointer w-full flex justify-start items-center">
                            <div class="w-8 h-8 border-2 flex justify-center items-center mx-2 font-medium" style="color:{{$color[$loop->index]}}; border-color:{{$color[$loop->index]}}">{{$loop->iteration}}</div>
                            <a href="{{url("show-Product-Detail/".$item->id)}}" class="w-2/6">
                                <img class="w-full" src="{{$item->img}}" alt="" srcset="">
                            </a>
                
                            <a href="{{url("show-Product-Detail/".$item->id)}}" class="text-white hover:text-fuchsia-500 ml-2 w-3/6">{{$item->name}}</a>
                        </div>
                    </section>
                @endforeach

               
            </div>
        </div> --}}
        @include('block.slidebar')
    </div>
</div>

@include('block.footer')