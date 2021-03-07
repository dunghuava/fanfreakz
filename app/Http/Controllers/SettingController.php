<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sysmenu;

class SettingController extends Controller
{
    public function index(){
        return view ('system.setting.index');
    }
    public function ecommerce(){
        return view ('system.setting.ecommerce');
    }
    public function smtp(){
        return view ('system.setting.smtp');  
    }
    public function sysmenu(Request $request){
        $data = $request->all();
        if ($data){
            $validator = $request->validate([
                'title'=>'required',
            ]);
            $menu = new Sysmenu();
            $menu->title        = $data['title'];
            $menu->icon         = $data['icon'];
            $menu->route        = $data['route'];
            $menu->active       = $data['active'];
            $menu->parrent_id   = $data['parrent_id'];
            $menu->priority     = $data['priority'];
            $menu->save();
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data['sysmenus'] = Sysmenu::select(['id','title'])->where('parrent_id',0)->get();
        return view ('system.setting.sysmenu',$data);  
    }
}
