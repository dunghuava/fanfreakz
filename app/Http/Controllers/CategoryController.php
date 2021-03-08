<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Routing\Route;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $page  = $request->get('page') ?? 1;
        $items = Category::forPage($page)->orderBy('created_at','desc')->paginate(); // list phan trang
        return view('admin.category.list',['items'=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id=0)
    {
        $frmdata = $request->all();        
        if($frmdata){
            $item = new Category();
            $item->name = $frmdata['name'] ?? null;
            $item->alias = $frmdata['alias'] ?? null;
            $item->category_id = $frmdata['category_id'] ?? 0;
            $item->description = $frmdata['description'] ?? null;
            $item->active = $frmdata['active'] ?? 0;
            $result = null;
            if($id>0){
               $result = Category::where('id',$id)->update($item->toArray()); // updated
               if($result){
                    return redirect()->route('category');
               }
            }else{
                $result = $item->save(); // created
            }
        }
        $item = null;
        if($id>0){
            $item = Category::find($id); // edited
        }
        return view('admin.category.add',['item'=>$item]);
    }
    /**
     * Delete data of the resource.
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('category');
    }
}
