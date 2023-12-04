<div class="slidebar w-1/5 float-right	text-white pl-2">
    <span class="text-2xl text-yellow-400"  >
        <i class="fa-solid fa-ranking-star"></i>
        Top Anime
    </span>
    <img src="https://wallpapers.com/images/featured/anime-dbt18qjb7b1cstr1.jpg" alt="" class="w-full">
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
</div>