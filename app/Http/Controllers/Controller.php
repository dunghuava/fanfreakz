<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Sysmenu;
use Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function getSysMenu(){
        $sysmenus = Sysmenu::where(['parrent_id'=>0,'active'=>1])->orderBy('priority','asc')->get();
        foreach ($sysmenus as $key => $menu){
            $submenu = Sysmenu::where(['parrent_id'=>$menu['id'],'active'=>1])->orderBy('priority','asc')->get();
            $sysmenus[$key]['childs'] = $submenu; 
        }
        return $sysmenus;
    }
}
