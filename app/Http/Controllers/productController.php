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
            //print_r($info);
            //$ides=$info['products']['offers']['id'];
            $sus = 'получен продукт';

            $url = 'https://superposuda.retailcrm.ru/api/v5/orders/create';
            if(isset($_GET)){
                $order_n=$_GET['order-n']; $fio=$_GET['fio']; $article=$_GET['article'];
            $brand=$_GET['brand']; $comment=$_GET['comment'];
            }
            $data = array(
                'contragent' => 'individual',
                'order' => array('items' => $order_n, '' => '', 'offer' => '0', 'id' => '23426',
                'statusComment'=>$comment, 'status' => 'trouble',
            ),
                'apiKey' => 'QlnRWTTWw9lv3kjxy1A8byjUmBQedYqb'
            );
            $data = http_build_query($data);

            $context_options = array(
                'http' => array(
                    'method' => 'POST',
                    'header' => "Content-type: application/x-www-form-urlencoded\r\n" .
                        "Content-Length: " . strlen($data) . "\r\n",
                    'content' => $data
                )
            );

            $context = stream_context_create($context_options);
            //$fp = file_get_contents($url, false, $context);
            //$page = json_decode($fp, true);
            $page=array('success'=>'1', 'order'=>array('id'=>'45555', 'orderType'=>'fizik'));
            //print_r($page);
            if (isset($page['success'])) {
                  //$idorder = $page['order']['id'];
                  $idorder = $page['order']['id'];
                  $orderType = $page['order']['orderType'];
                  $clientfio = $page['order']['orderType'];
                  $order_number = $page['order']['orderType'];
                  $order_status = $page['order']['orderType'];
                  $shop = $page['order']['orderType'];
                  $registration_method = $page['order']['orderType'];
                  $comments = $page['order']['orderType'];
                  $id_product = $page['order']['orderType'];
                  $zaka_item_number = $page['order']['orderType'];
                $sus .= ':- заказ создан' . ':' . $_GET['order-n'] . ':' . $_GET['fio'] . ':' . $_GET['article'] .
                    ':' . $_GET['brand'] . ':' . $_GET['comment'];
            } else {
                $sus .= ':- сервер не создал заказ';
            }
        } else {
            $sus = 'сервер не дал продукт';
        }
        return view('creating-an-order', [
            'sus' => $sus, 'id_order' => $idorder, 'orderType' => $orderType, 'clientfio' => $clientfio, 
            'order_number' => $order_number, 'order_status' => $order_status, 'shop' => $shop, 
            'registration_method' => $registration_method,
            'comments' => $comments, 'id_product' => $id_product, 'zaka_item_number' => $zaka_item_number
        ]);
    }
}
