<?php


namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Resources\MenuResource;


class MenuController extends BaseController
{
    /**
     * SAMPLE RESPONSE:
     *
     *
     */

    public function getMenuItems() {

    	$parent_menus = MenuItem::all();

    	$menu_data = MenuResource::collection( $parent_menus );
        return \Response::json([
            'data' => $menu_data,
            'message' => "Success"
        ], 200);
        //throw new \Exception('implement in coding task 3');
    }
}
