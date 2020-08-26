<?php
use App\Zakaz;

function set_manager($manager_id, $order_id ){
    $date=date("Y-m-d H:i:s");
    Zakaz::where(['id'=>$order_id])->update(
                            [
                             'manager_id'=>$manager_id,
                             'started_at'=>$date]
                            );    
}
function set_keeper($keeper_id, $order_id ){
    $date=date("Y-m-d H:i:s");
    Zakaz::where(['id'=>$order_id])->update(
                            [
                             'keeper_id'=>$keeper_id,
                             'to_warehouse_at'=>$date]
                            );    
}
function set_status($status, $order_id ){
    Zakaz::where(['id'=>$order_id])->update(['status'=>$status]);    
}
function finish_preparation($status, $order_id ){
    $date=date("Y-m-d H:i:s");
    Zakaz::where(['id'=>$order_id])->update(
                            [
                             'status'=>$status,
                             'from_warehouse_at'=>$date]
                            );     
}
function finish_order($status, $order_id ){
    $date=date("Y-m-d H:i:s");
    Zakaz::where(['id'=>$order_id])->update(
                            [
                             'status'=>$status,
                             'finished_at'=>$date]
                            );     
}

?>
