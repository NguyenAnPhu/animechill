@include('block.link')
@include('block.header')
@section('title','AnimeChill')




<div class="main " style="background-color: rgb(25, 23, 23);padding-top:106px; ">
    
    
    @include('block.nav')
    <div class="container box-border flex  mr-auto ml-auto text-slate-300 min-h-full" style="background-color :rgb(23,24,28); max-width:92% ">
    
        <br>
        <div class="content w-4/5 float-left  ">
            <h2 class="text-3xl text-yellow-400 mb-2 pl-2" >Kết Quả Tìm Kiếm</h2>
            <div class="grid grid-cols-4 gap-4 pb-6 " id="hot">
                @foreach ($keyProduct as $new)
                    <section class="w-full h-full ">
                        <div class=" text-xl cursor-pointer w-full h-full text-white hover:text-fuchsia-500">
                            <a href="{{url("show-Product-Detail/".$new->id) }}" class="" >
                                <img src="{{$new->img}}" alt="" srcset="" style=" max-width: 260px ; min-height:378px; ">
                            </a>
                            <a href="{{url("show-Product-Detail/".$new->id) }}" class="">{{$new->name}}</a>
                        </div>
                        
                    </section>
                @endforeach
            </div>
            


    </div>
</div>
@include('block.footer')
