@include('block.link')

<header>
    <div class="fixed" style="background-color :rgb(23,24,28); width: 100%; display: flex; justify-content: space-between; ">
        <a href="{{route("showHomeProductHot")}}">
            <img src="{{ asset('assets/images/logo.png') }}" class="w-24 h-24 ml-20 mt-2" >
        </a>
        <form  action="/search" method="get" class="w-2/6 h-full" >
            <div class="flex ">
                
                <div class="relative w-full mt-8">  
                       
                        <input type="text" name="key" id="" class="block p-2.5 z-20  text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300  dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white " style="width: 100%; border-radius: 5px 10px 10px 5px" placeholder="Search Name Anime" >
                        <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </button>
                </div>

            </div>
        </form>
        <ul style="font-size: 18px; padding: 36px 20px 0 20px; display:flex" >
            <li class="text-white hover:text-fuchsia-500 " style="margin-bottom:36px;  cursor: pointer; ">
                <i class="fa-solid fa-fire"></i>
                <a href="{{route('showHomeProductHot').'/#hot'}}" style="text-decoration: none">
                    Phim Hot
                </a>
            </li>
            
            <li class="text-white hover:text-fuchsia-500 " style="margin-bottom:36px; margin-left: 68px; cursor: pointer;">
                <i class="fa-regular fa-clock"></i>
                <a href="{{route('showHomeProductHot').'/#soon'}}" style="text-decoration: none">
                    Phim Sắp Ra
                </a>
               
            
            </li>
            <li class="text-white hover:text-fuchsia-500 " style="margin-bottom:36px; margin-left: 68px; cursor: pointer;">
                <i class="fa-solid fa-heart"></i>
                <a href="{{route('showHomeProductHot').'/#love'}}" style="text-decoration: none">
                    Yêu Thích
                </a>
            </li>
            @if (!empty(Session::has('name')))
                <li class="" style="margin-bottom:36px; margin-left: 68px; cursor: pointer;">
                    <i class="fa-solid fa-user-tie pr-2 text-white hover:text-fuchsia-500 "> {{Session::get('name')}}</i>
                   
                    <a href="{{route('logout')}}" style="text-decoration: none" class="text-white hover:text-fuchsia-500 " alt="Logout">
                        <i class="fa-solid fa-right-from-bracket " >
                        </i>
                
                    </a>
                </li>
                
            @else
                <li class="text-white hover:text-fuchsia-500 " style="margin-bottom:36px; margin-left: 68px; cursor: pointer;"><a href="{{route("login")}}" style="text-decoration: none">
                    <i class="fa-solid fa-user-tie"></i>
                    Đăng Nhập
                </a></li>
            @endif
            
        </ul> 
    </div>
</header>