<?php 
use TanyaIvat\Products\Models\Products;use TanyaIvat\Products\Models\Order;class Cms62d4043a4da54416052927_e862238a63b2a6768f6e84e1eb56dedeClass extends Cms\Classes\PageCode
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
