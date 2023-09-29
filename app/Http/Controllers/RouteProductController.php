<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class RouteProductController extends Controller
{
    public function showProduct(Request $request)
    {
        $productList= DB::table('product')->get();
        return view('admin.products')->with([
                'productList'=>$productList
        ]);
    }
    public function showHomeProductHot(Request $request)
    {
        $productList= DB::table('product')->get();
        return view('layouts.home')->with([
                'productList'=>$productList
        ]);
    }
    public function viewInputProduct(Request $request) {
        return view('admin.addProduct');
    }
    public function addProduct(Request $request){
        $name= $request->name;
        $des= $request->des;
        $img= $request->img;
        $genre= $request->genre;
        $release= $request->release;
        $status= $request->status;
        $rate= $request->rate;
        $list_ep= $request->list_ep;
        DB::table('product')->insert([
            'name'=>$name,
            'des'=>$des,
            'img'=>$img,
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
            'genre'=>$genre,
            'release' => $release,
            'status' => $status,
            'rate' => $rate,
            'list_ep'=>$list_ep,
           
        ]);
        return redirect('admin.show-Product')->with('status','Cập nhật thông tin thành công');
    
    }
}
