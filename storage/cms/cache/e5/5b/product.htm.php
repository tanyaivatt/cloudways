<?php 
use TanyaIvat\Products\Models\Products;use TanyaIvat\Products\Models\Order;class Cms62d409411a064222681621_084a4098ea021a0c4a670456e2949ed7Class extends Cms\Classes\PageCode
{





public function onStart() {
    $this['services'] = Products::all();
}
public function onSendService() {
    try {
        $date = post();
        $order = new Order;
        
        $order->name = $date['name'];
        $order->email = $date['email'];
        $order->service = $date['service'];
        $order->date = $date['date'];
        $order->time = $date['time'];
        $order->master = $date['master'];
        $order->save();

        
        Flash::success('Успішно надіслано!');
        
        
    }
    catch (Exception $e){
        Flash::error('Помилка надсилання');
    }
}
public function onGetService() {
    $this['service'] = Products::where('slug', post('service'))->first();
}
}
