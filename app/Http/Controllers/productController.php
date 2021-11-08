<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class productController extends Controller
{
    function celect()
    {
        $info = file_get_contents('https://superposuda.retailcrm.ru/api/v5/store/products?apiKey=QlnRWTTWw9lv3kjxy1A8byjUmBQedYqb');
        $info = json_decode($info, true);

        if ($info['success']) {
            $sus = 'получен продукт';
           
            $url='https://superposuda.retailcrm.ru/api/v5/orders/create';   

             $data = array('contragent' => 'individual', 
             'order'=>array('items' => 'ddd', ''=>'','offer'=>'0', 'id'=>'23426'),
             'apiKey'=>'QlnRWTTWw9lv3kjxy1A8byjUmBQedYqb');
             $data = http_build_query($data);

            $context_options = array(
                'http' => array(
                    'method' => 'POST',
                    'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                    'content' => $data
                )
            );

             $context = stream_context_create($context_options);
             $fp = file_get_contents($url, false, $context);
             $page = json_decode($fp, true);
            //$page=array('success'=>'1', 'order'=>array('id'=>'45555', 'orderType'=>'fizik'));
            print_r($page);
            if (1) {
                $idorder = $page['order']['id'];
                $orderType = $page['order']['orderType'];
                $sus .= ':- заказ создан' . ':' . $_GET['order-f'] . ':' . $_GET['fio'] . ':' . $_GET['article'] .
                    ':' . $_GET['brand'] . ':' . $_GET['comment'];
            } else {
                $sus .= ':- сервер не создал заказ';
            }
        } else {
            $sus = 'сервер не дал продукт';
        }
        return view('creating-an-order', ['sus' => $sus, 'page' => $idorder, 'orderType' => $orderType]);
    }
}
