@include('block.link')

<header>
    <div class="fixed" style="background-color :rgb(23,24,28); width: 100%; display: flex; justify-content: space-between; ">
        <img src="{{ asset('assets/images/logo.png') }}" class="w-24 h-24 ml-20 mt-2" >
        <form class="w-2/6 h-full" >
            <div class="flex ">
                {{-- <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
                <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">All categories <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                    <li>
                        <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mockups</button>
                    </li>
                    <li>
                        <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Templates</button>
                    </li>
                    <li>
                        <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Design</button>
                    </li>
                    <li>
                        <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logos</button>
                    </li>
                    </ul>
                </div> --}}
                <div class="relative w-full mt-8">  
                    <input type="search" id="search-dropdown" class="block p-2.5 z-20  text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" style="width: 100%; border-radius: 5px 10px 10px 5px" placeholder="Search Name, Genre, Action, Comedy" required>
                    <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </div>
        </form>
        <ul style="font-size: 18px; padding: 36px 20px 0 20px; display:flex" >
            <li class="text-white hover:text-fuchsia-500 " style="margin-bottom:36px;  cursor: pointer; ">
                <i class="fa-solid fa-fire"></i>
                <span style="">Phim Hot</span> 
            </li>
            
            <li class="text-white hover:text-fuchsia-500 " style="margin-bottom:36px; margin-left: 68px; cursor: pointer;">
                <i class="fa-regular fa-clock"></i>
                Phim Sắp Ra
            
            </li>
            <li class="text-white hover:text-fuchsia-500 " style="margin-bottom:36px; margin-left: 68px; cursor: pointer;">
                <i class="fa-solid fa-heart"></i>
                Yêu Thích
            </li>
            <li class="text-white hover:text-fuchsia-500 " style="margin-bottom:36px; margin-left: 68px; cursor: pointer;"><a href="{{route("login")}}" style="text-decoration: none">
                <i class="fa-solid fa-user-tie"></i>
                Đăng Nhập
            </a></li>
        </ul> 
    </div>
</header>