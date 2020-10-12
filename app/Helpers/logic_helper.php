<?php
function index_by_id($array){
    $newarr=array();
    foreach ($array as $value) {
        $newarr[$value->id]=$value;
    }
    return $newarr;
}

function generic_route($path, $controller, $name){
    $routers=[];
    $router = app()->make('router');
    
    $methods=["get","getOne", "post","put","delete","init", "delete_img"];
    foreach ($methods as $method) {
      switch ($method) {
        case 'get':
          $router->get($path, "$controller@$method")->name("$name"."_$method");
          break;
        case 'init':
          $router->get($path."/$method", "$controller@$method")->name("$name"."_$method");
          break;
        case 'getOne':
          $router->get($path."/{field}/{value}", "$controller@$method")->name("$name"."_$method");
          break;
        case 'post':
          $router->post($path, "$controller@$method")->name("$name"."_$method");
          break;
        case 'delete':
          $router->get($path."/{field}/{value}/$method", "$controller@$method")->name("$name"."_$method");
          break;
        case 'delete_img':
          $router->get($path."/del/$method/{id}/", "$controller@$method")->name("$name"."_$method");
          break;

        default:
          $router->post($path."/{field}/{value}/$method", "$controller@$method")->name("$name"."_$method");
          break;
      }
      array_push($routers, $router);
    }

    return $routers;
}

?>
