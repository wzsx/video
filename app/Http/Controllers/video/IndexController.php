<?php

namespace App\Http\Controllers\video;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\VideoModel;
class IndexController extends Controller
{
    //展示
    public function mp(){
        $id=$_GET['id'];
        echo 'video:'.$id;echo'</br>';
        $rs=VideoModel::where(['vid'=>$id])->first()->toArray();
        echo '<pre>';print_r($rs);echo '</pre>';
        $data=[
            'v'=>$rs
        ];
        return view('video.title',$data);
    }
}
