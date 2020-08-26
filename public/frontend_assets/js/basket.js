
  function calcBasket(basket){
    var len=0
    for(let i=0; i<basket.length; i++){
      len=len+ Number(basket[i].quantity);
    }
    return len;
  }
  function basket_init(){
    if(localStorage.basket==undefined){
      localStorage.setItem('basket','[]');
    }else{
      document.getElementById('basket').innerHTML=calcBasket(JSON.parse(localStorage.basket));
    }
  }
  function to_basket(elem){
    
    var basket=JSON.parse(localStorage.basket);
    var id=elem.dataset.id;
    var isNew=true;
    for(let i=0;i<basket.length;i++){
      if(basket[i].id==id){
        isNew=false;
        basket[i].quantity++;
      }
    }
    if(isNew){
      var product={
        id:elem.dataset.id,
        title:elem.dataset.title,
        price:elem.dataset.price,
        path:elem.dataset.path,
        discounted:elem.dataset.discounted,
        type:elem.dataset.type,
        quantity:1
      }
      basket.push(product);
    }
    localStorage.setItem('basket',JSON.stringify(basket));
    document.getElementById('basket').innerHTML=calcBasket(JSON.parse(localStorage.basket));
    console.log(localStorage.basket);
  }
  function clear_basket(){
    localStorage.setItem("basket",JSON.stringify([]));
    document.getElementById('basket').innerHTML=calcBasket(JSON.parse(localStorage.basket));
  }
  function check_basket_validity(){
    var basket=JSON.parse(localStorage.basket);
    var type=basket[0].type;
    var valid=true;
    for(let i=0;i<basket.length;i++){
      if(basket[i].type!=type){
        valid=false;
        break;
      }
    }
    return valid;
  }
  
