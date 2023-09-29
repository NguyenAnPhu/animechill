@include('block.link')
@include('block.header')
@extends('layouts.personal-page')
@section('title','Trang Chủ')

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



<div class="main" style="background-color: rgb(25, 23, 23);padding-top:106px">
    
    {{-- <h1 class="text-white">Phú nè</h1> --}}
    <div class="nav mr-auto ml-auto text-slate-300 flex flex-wrap" style="background-color :rgb(23,24,28); max-width: 92%; ">
        <div class="flex-grow p-3">
            <label for="" class=" mb-2 block font-medium">Thể Loại</label>
            <select class="block text-black w-5/6" name="" id="">
                <option value="">---</option>
                <option value="Tiên Hiệp">Tiên Hiệp</option>
                <option value="Xuyên Không">Xuyên Không</option>
                <option value="Học Đường">Học Đường</option>

            </select>
        </div>
        <div class="flex-grow p-3">
            <label for="" class=" mb-2 block font-medium">Quốc Gia</label>
            <select class="block text-black w-5/6" name="" id="">
                <option value="">---</option>
                <option value="Nhật Bản">Nhật Bản</option>
                <option value="Hàn Quốc">Hàn Quốc</option>
                <option value="Trung Quốc">Trung Quốc</option>

            </select>
        </div>
        <div class="flex-grow p-3">
            <label for="" class=" mb-2 block font-medium">Năm Sản Xuất</label>
            <select class="block text-black w-5/6" name="" id="">
                <option value="">---</option>
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>

            </select>
        </div>
        <div class="flex-grow p-3">
            <label for="" class=" mb-2 block font-medium">Nhà Phát Hành</label>
            <select class="block text-black w-5/6" name="" id="">
                <option value="">---</option>
                <option value="CN Animation">CN Animation</option>
                <option value="Toei Animation">Toei Animation</option>
                <option value="JP Animation">JP Animation</option>

            </select>
        </div>
        <div class="flex-grow p-3">
            <label for="" class=" mb-2 block font-medium">Thời Lượng</label>
            <select class="block text-black w-5/6" name="" id="">
                <option value="">---</option>
                <option value="10 Phút">10 Phút</option>
                <option value="25 Phút ">25 Phút</option>
                <option value="60 Phút">60 Phút</option>

            </select>
        </div>
        
    
    </div>
    <div class="container box-border flex  mr-auto ml-auto text-slate-300 " style="background-color :rgb(23,24,28); max-width:92%">
    
        <br>
        <div class="content w-4/5 float-left ">
            <h2 class="text-3xl text-yellow-400 mb-2 pl-2">PHIM HOT</h2>
            <div class="grid grid-cols-4 gap-4 pb-6">
                <section class="w-full h-full ">
                    <div class="text-white hover:text-fuchsia-500 text-xl cursor-pointer ">
                        <div >
                            <a >
                                <img class="w-full" src="https://animehay.city/upload/poster/3799-1687323437.jpg" alt="" srcset="">
                            </a>
                        </div>
                        <a href="#">Thương Nguyên Đồ</a> <br>
                    </div>
                </section>
                
                
                <section class="w-full h-full ">
                    <div class="text-white hover:text-fuchsia-500 text-xl cursor-pointer">
                        <div>
                            <a class="">
                                <img class="w-full" src="https://animehay.city/upload/poster/3799-1687323437.jpg" alt="" srcset="">
                            </a>
                        </div>
                        <a href="#">Thương Nguyên Đồ</a>
                    </div>
                </section>
                <section class="w-full h-full ">
                    <div class="text-white hover:text-fuchsia-500 text-xl cursor-pointer">
                        <div>
                            <a class="">
                                <img class="w-full" src="https://animehay.city/upload/poster/3799-1687323437.jpg" alt="" srcset="">
                            </a>
                        </div>
                        <a href="#">Thương Nguyên Đồ</a>
                    </div>
                </section>
                <section class="w-full h-full ">
                    <div class="text-white hover:text-fuchsia-500 text-xl cursor-pointer">
                        <div>
                            <a class="">
                                <img class="w-full" src="https://animehay.city/upload/poster/3799-1687323437.jpg" alt="" srcset="">
                            </a>
                        </div>
                        <a href="#">Thương Nguyên Đồ</a>
                    </div>
                </section>
            </div>
            <h2 class="text-3xl text-yellow-400 mb-2 pl-2">PHIM SẮP RA</h2>
            <div class="grid grid-cols-4 gap-4 pb-6">
                <section class="w-full h-full ">
                    <div class="text-white hover:text-fuchsia-500 text-xl cursor-pointer w-full">
                        <div >
                            <a >
                                <img class="w-full" src="https://statics.animeow.pro/imgur/Kimetsu_no_Yaiba_Season_3_Key_Visual_3.webp" alt="" srcset="">
                            </a>
                        </div>
                        <a href="#" class="">Thanh Gươm Diệt Quỷ</a>
                    </div>
                </section>
                <section class="w-full h-full ">
                    <div class="text-white hover:text-fuchsia-500 text-xl cursor-pointer">
                        <div>
                            <a class="">
                                <img class="w-full" src="https://statics.animeow.pro/imgur/Kimetsu_no_Yaiba_Season_3_Key_Visual_3.webp" alt="" srcset="">
                            </a>
                        </div>
                        <a href="#">Thanh Gươm Diệt Quỷ</a>
                    </div>
                </section>
                <section class="w-full h-full ">
                    <div class="text-white hover:text-fuchsia-500 text-xl cursor-pointer">
                        <div>
                            <a class="">
                                <img class="w-full" src="https://statics.animeow.pro/imgur/Kimetsu_no_Yaiba_Season_3_Key_Visual_3.webp" alt="" srcset="">
                            </a>
                        </div>
                        <a href="#">Thanh Gươm Diệt Quỷ</a>
                    </div>
                </section>
                <section class="w-full h-full ">
                    <div class="text-white hover:text-fuchsia-500 text-xl cursor-pointer">
                        <div>
                            <a class="">
                                <img class="w-full" src="https://statics.animeow.pro/imgur/Kimetsu_no_Yaiba_Season_3_Key_Visual_3.webp" alt="" srcset="">
                            </a>
                        </div>
                        <a href="#">Thanh Gươm Diệt Quỷ</a>
                    </div>
                </section>
                
            </div>
            <h2 class="text-3xl text-yellow-400 mb-2 pl-2">Danh Sách Yêu Thích</h2>
            {{-- <div class="grid grid-cols-4 gap-4 pb-6">
                <section class="w-full h-full ">
                    <div class="text-white hover:text-fuchsia-500 text-xl cursor-pointer w-full">
                        <div >
                            <a >
                                <img class="w-full" src="https://statics.animeow.pro/imgur/One_Piece_LA.webp" alt="" srcset="">
                            </a>
                        </div>
                        <a href="#" class="">One Piece Live Action</a>
                    </div>
                </section>
                <section class="w-full h-full ">
                    <div class="text-white hover:text-fuchsia-500 text-xl cursor-pointer">
                        <div>
                            <a class="">
                                <img class="w-full" src="https://statics.animeow.pro/imgur/One_Piece_LA.webp" alt="" srcset="">
                            </a>
                        </div>
                        <a href="#">One Piece Live Action</a>
                    </div>
                </section>
                <section class="w-full h-full ">
                    <div class="text-white hover:text-fuchsia-500 text-xl cursor-pointer">
                        <div>
                            <a class="">
                                <img class="w-full" src="https://statics.animeow.pro/imgur/One_Piece_LA.webp" alt="" srcset="">
                            </a>
                        </div>
                        <a href="#">One Piece Live Action</a>
                    </div>
                </section>
                <section class="w-full h-full ">
                    <div class="text-white hover:text-fuchsia-500 text-xl cursor-pointer">
                        <div>
                            <a class="">
                                <img class="w-full" src="https://statics.animeow.pro/imgur/One_Piece_LA.webp" alt="" srcset="">
                            </a>
                        </div>
                        <a href="#">One Piece Live Action</a>
                    </div>
                </section>
                
            </div> --}}
            <div class="grid grid-cols-4 gap-4 pb-6 ">
                @foreach ($productList as $item)
                    <section class="w-full h-full ">
                        <div class=" text-xl cursor-pointer w-full h-full text-white hover:text-fuchsia-500">
                            <a class="" >
                                <img src="{{$item->img}}" alt="" srcset="" style=" max-width: 260px ; min-height:378px; ">
                            </a>
                            <a href="#" class="">{{$item->name}}</a>
                        </div>
                        
                    </section>
                @endforeach
            </div>
        </div>
            
        {{-- style="color: #ffd43b;" --}}
        <div class="slidebar w-1/5 float-right	text-white pl-2">
            <span class="text-2xl text-yellow-400"  >
                <i class="fa-solid fa-ranking-star"></i>
                Top Anime
            </span>
            <img src="https://statics.animeow.pro/imgur/1TVJzh4.webp" alt="" class="w-full">
            <div class="flex flex-col pb-6 ">
                <section class="w-full h-full  mt-4">
                    <div class="text-white hover:text-fuchsia-500 text-xl cursor-pointer w-full flex justify-start">
                        <svg class="w-1/6" fill="#ffff00" viewBox="0 0 256 256" id="Flat" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M136,84v92a4,4,0,0,1-8,0V91.47217l-17.78223,11.84961a3.99977,3.99977,0,1,1-4.43554-6.65723l24-15.99316A3.99993,3.99993,0,0,1,136,84Zm84-36V208a12.01343,12.01343,0,0,1-12,12H48a12.01343,12.01343,0,0,1-12-12V48A12.01343,12.01343,0,0,1,48,36H208A12.01343,12.01343,0,0,1,220,48Zm-8,0a4.00427,4.00427,0,0,0-4-4H48a4.00427,4.00427,0,0,0-4,4V208a4.00427,4.00427,0,0,0,4,4H208a4.00427,4.00427,0,0,0,4-4Z"></path> </g></svg>
                        <a class="w-2/6">
                            <img class="w-full" src="https://statics.animeow.pro/imgur/aO6pXMA.webp" alt="" srcset="">
                            
                        </a>
            
                        <a href="#" class="ml-2 w-3/6">Đấu Phá Thương Khung</a>
                    </div>
                </section>
                <section class="w-full h-full mt-4">
                    <div class="text-white hover:text-fuchsia-500 text-xl cursor-pointer w-full flex justify-start">
                        <svg class="w-1/6" fill="#ff0000" viewBox="0 0 256 256" id="Flat" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M208,36H48A12.01343,12.01343,0,0,0,36,48V208a12.01343,12.01343,0,0,0,12,12H208a12.01343,12.01343,0,0,0,12-12V48A12.01343,12.01343,0,0,0,208,36Zm4,172a4.00427,4.00427,0,0,1-4,4H48a4.00427,4.00427,0,0,1-4-4V48a4.00427,4.00427,0,0,1,4-4H208a4.00427,4.00427,0,0,1,4,4Zm-60.89746-88.18262L112.001,171.99414H152a4,4,0,0,1,0,8H104.2207c-.07324.00391-.14746.00635-.22168.00635a4.00218,4.00218,0,0,1-3.13281-6.48877l43.77344-58.41016a20.0044,20.0044,0,1,0-35.07031-18.88525,3.99957,3.99957,0,1,1-7.36719-3.11621,28.00379,28.00379,0,1,1,49.01367,26.55761C151.17969,119.71191,151.1416,119.76514,151.10254,119.81738Z"></path> </g></svg>
                        <a class="w-2/6">
                            <img class="w-full" src="https://statics.animeow.pro/imgur/6194375_dau-la-dai-luc.webp" alt="" srcset="">
                        </a>
                    
                        <a href="#" class="ml-2 w-3/6">Đấu La Đại Lục</a>
                    </div>
                </section>
                <section class="w-full h-full mt-4">
                    <div class="text-white hover:text-fuchsia-500 text-xl cursor-pointer w-full flex justify-start">
                        <svg class="w-1/6" fill="#29e6ff" viewBox="0 0 256 256" id="Flat" xmlns="http://www.w3.org/2000/svg" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M146.62793,129.377a31.99676,31.99676,0,1,1-45.249,45.25147,3.99992,3.99992,0,1,1,5.65625-5.65723,23.99709,23.99709,0,1,0,16.96875-40.9668,3.99972,3.99972,0,0,1-3.27735-6.293L144.31348,88H104a4,4,0,0,1,0-8h47.99414a3.99973,3.99973,0,0,1,3.27734,6.293l-24.14062,34.50342A31.78143,31.78143,0,0,1,146.62793,129.377ZM220,48V208a12.01343,12.01343,0,0,1-12,12H48a12.01343,12.01343,0,0,1-12-12V48A12.01343,12.01343,0,0,1,48,36H208A12.01343,12.01343,0,0,1,220,48Zm-8,0a4.00427,4.00427,0,0,0-4-4H48a4.00427,4.00427,0,0,0-4,4V208a4.00427,4.00427,0,0,0,4,4H208a4.00427,4.00427,0,0,0,4-4Z"></path> </g></svg>
                        <a class="w-2/6">
                            <img class="w-full" src="https://statics.animeow.pro/imgur/One_Piece_LA.webp" alt="" srcset="">
                        </a>
                    
                        <a href="#" class="ml-2 w-3/6">One Piece Live Action</a>
                    </div>
                </section>
            </div>
        </div>


    </div>

    @include('block.footer')
</div>