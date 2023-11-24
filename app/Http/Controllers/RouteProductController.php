<?php

namespace App\Http\Controllers;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB,Session;

class RouteProductController extends Controller
{

    public function showProduct()
    {
        $productList= DB::table('product')->get();
        return view('admin.products')->with([
            'productList'=>$productList]);
    }
    public function showProduct2()
    {
        $productList= DB::table('product')->get();
        return $productList;
    }
    public function showHomeProductHot(Request $request)
    {
       
        $color=$this->showTopProduct();

        $productTop= DB::table('product')->orderBy('rate','desc')->take(5)->get();
        $productList= DB::table('product')->get();
        $productHot = DB::table('product')->where('status', 'HOT')->get();
        $productSoon = DB::table('product')->where('status', 'SẮP RA')->get();
        return view('layouts.home')->with([
                'productList'=>$productList,
                'productHot'=>$productHot,
                'productSoon'=>$productSoon,
                'productTop'=>$productTop,
                'color'=>$color,
        ]);
    }
    public function showTopProduct()
    {
        $color= ['#ffff00','#ff0000','#29e6ff','#A2FF86','#7543df'];
        return $color;
    }
    public function viewInputProduct(Request $request) {
        return view('admin.addProduct');
    }
    public function addProduct(Request $request){
        $name= $request->name;
        $des= $request->des;
        $img= $request->img;
        $video= $request->video;
        $genre= $request->genre;
        $release= $request->release;
        $status= $request->status;
        $rate= $request->rate;
        $list_ep= $request->list_ep;
        DB::table('product')->insert([
            'name'=>$name,
            'des'=>$des,
            'img'=>$img,
            'video'=>$video,
            'genre'=>$genre,
            'release'=>$release,
            'status'=>$status,
            'rate'=>$rate,
            'list_ep'=>$list_ep
        ]);
        return redirect()->route('viewInputProduct');
     }
     public function deleteProduct($id)
    {

        DB::table('product')->where('id', $id)->delete();
        return redirect()->route('showProduct')->with('success', 'Dữ liệu đã được xóa thành công!');

    }
    public function editProduct($id)
    {
        $idProduct= DB::table('product')->where('id', $id)->first();
        return view('admin.editProduct')->with([
            'idProduct'=>$idProduct

        ]);
       
    }
    public function updateProduct (Request $request,$id)
    {
        $name= $request->input('name');
        $des= $request->input('des');
        $img= $request->input('img');
        $video= $request->input('video');
        $genre= $request->input('genre');
        $release= $request->input('release');
        $status= $request->input('status');
        $rate= $request->input('rate');
        $list_ep= $request->input('list_ep');

        // Thực hiện câu truy vấn để cập nhật thông tin sản phẩm
        DB::table('product')
        ->where('id', $id)
        ->update([
            'name' => $name,
            'des' => $des,
            'img' => $img,
            'video' => $video,
            'genre'=>$genre,
            'release' => $release,
            'status' => $status,
            'rate' => $rate,
            'list_ep'=>$list_ep,
           
        ]);
        return redirect('admin/show-Product')->with('status','Cập nhật thông tin thành công');
    
    }

    // public function productDetail(REQUEST $request)
    // {
    //     return view('layouts.productDetail');
    // }
    public function productDetail($id)
    {
        $color=$this->showTopProduct();
        $productTop= DB::table('product')->orderBy('rate','desc')->take(5)->get();
        $idProduct= DB::table('product')->where('id', $id)->first();
        $comment= DB::table('comment')->where('idProduct',$id)->get();

        return view('layouts.productDetail')->with([
            'idProduct'=>$idProduct,
            'productTop'=>$productTop,
            'comment'=>$comment,
            'color'=>$color,
        ]);
       
    }
    public function search(Request $request)
    {
       
        $genre= $request->input('genre');
        $status= $request->input('status');
        // $rate= $request->input('rate');
        // $release= $request->input('release');
        $keyWord= $request->input('key');
        $keyProduct= DB::table('product')
        ->where('name', 'like', '%' . $keyWord . '%')
        ->orWhere('genre','like', '%' . $keyWord . '%')
        ->orWhere('status', 'like', '%' . $keyWord . '%')
        ->orWhere('release', 'like', '%' . $keyWord . '%')
        ->orWhere('rate', 'like', '%' . $keyWord . '%')
        ->get();
        return view('layouts.search',compact('keyProduct'));
    }
    
}
    
