<!DOCTYPE html>
<html lang="en">
<head>
    @include('block.link')
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}">
    <script src="{{asset("assets/css/bootstrap.min.css")}}"></script>
    <script>
        // Kiểm tra xem có thông báo thành công không
        @if(session('success'))
            // Hiển thị thông báo
            alert("{{ session('success') }}");
            
            // Reload trang
            location.reload();
        @endif
    </script>
    <title>AnimeChill</title>
    
</head>
    
<body>

   
    <div class="container">
        @yield('content')
        <h1 style="text-align: center; font-size: 36px">Danh Sách Sản Phẩm</h1>


        <table class="table table-hover table-bordered">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">IdProduct</th>
                <th scope="col">Text</th>
                
            </tr>

            @foreach ($commentList as $item)
                <tr>
                    
                    <td >{{$item->id}}</td>
                    <td >{{$item->name}}</td>
                    <td >{{$item->idProduct}}</td>
                    <td >{{$item->text}}</td>
                    <td>
                        <form action="" method="POST">
                            @method('DELETE')
                            @csrf
                            
                            <button type="submit" class="inline-block rounded bg-danger px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-danger-600 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]">
                                Delete
                            </button>
                        </form>
                        <br>
                        <a href="" style="text-decoration: none">
                        <button type="submit" class="inline-block rounded bg-warning px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#e4a11b] transition duration-150 ease-in-out hover:bg-warning-600 hover:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.3),0_4px_18px_0_rgba(228,161,27,0.2)] focus:bg-warning-600 focus:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.3),0_4px_18px_0_rgba(228,161,27,0.2)] focus:outline-none focus:ring-0 active:bg-warning-700 active:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.3),0_4px_18px_0_rgba(228,161,27,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(228,161,27,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.2),0_4px_18px_0_rgba(228,161,27,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.2),0_4px_18px_0_rgba(228,161,27,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(228,161,27,0.2),0_4px_18px_0_rgba(228,161,27,0.1)]" style="margin-left: 5px">
                            
                             Edit
                           
                        </button> 
                    </a>   
                    </td>
                    
                </tr>
            @endforeach   
            <br>
            <div class="flex justify-center m-4">
                <a href="{{route('showProduct')}}" class="m-2" style="text-decoration: none; color: #fff">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" style="margin-left:auto;margin-right:auto;display:block">Danh Sách Sản Phẩm</button>
                </a>
                <a href="{{route('showUser')}}" class="m-2" style="text-decoration: none; color: #fff">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" style="margin-left:auto;margin-right:auto;display:block">Danh Sách Người Dùng</button>
                </a>
                
            </div>
            
    </div>

    
</body>
</html>