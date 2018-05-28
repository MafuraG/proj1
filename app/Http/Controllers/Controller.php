<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function getdropdownData($model){
        $datas = $model::select('id','name')->get();

        $items = array();
        foreach ($datas as $data)
        {
            $items[$data->id] = $data->name;
        }

        return $items;
    }
}
