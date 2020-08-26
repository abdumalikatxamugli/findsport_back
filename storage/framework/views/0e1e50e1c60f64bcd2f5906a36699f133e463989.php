<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="/maxs/v2/public/frontend_assets/css/basket.css">
<style>
	.form-control{
		margin-bottom:15px;

	}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="products-cont">

      <div class="basket-labels">
        <ul>
          <li class="item item-heading">Item</li>
          <li class="price">Price</li>
          <li class="quantity">Quantity</li>
          <li class="subtotal">Subtotal</li>
        </ul>
      </div>
      <div class="products"></div>
      
      
    </div>
		</div>
		<div class="col-md-3">
			<div class="order" style="margin-top:45px">
      <div >
        
        <div class="summary-total">
          <div class="total-title">Total</div>
          <div>
          	<span id="basket-total"></span> so'm
          </div>
        </div>
        <div>
			<form action="<?php echo e(route('create_order', $l)); ?>" 
				  onsubmit="make_order(event)"
				  method="POST"
				>
				<?php echo csrf_field(); ?>
				<div class="form-group">
				<label for="name">Name</label>
				<input type="text" placeholder="Enter your name" required class="form-control" name="name">
				</div>
				<div class="form-group">
				<label for="location">Location</label>
				<select name="location" id="location" class="form-control">
					<option value="Tashkent">Tashkent</option>
				</select>
				</div>
				<div class="form-group">
					<label for="phone1">Phone 1</label>
					<input type="text" placeholder="998 9_  _ _ _  _ _  _ _" required class="form-control" name="phone1" id="phone1">
				</div>

				<div class="form-group">
					<label for="phone2">Phone 2</label>
					<input type="text" placeholder="998 9_  _ _ _  _ _  _ _" required class="form-control" name="phone2" id="phone2">
				</div>
				<input type="hidden" value="" id='prset' name="prset">
				<div class="form-group" style="margin-top:15px">
					<br><br>
					<button class="btn btn-success" style="width:100%;text-align: center;"><?php echo e(Constants::show('order', $l)); ?></button>
				</div>       
			</form> 
        </div>
      </div>
    </div>
		</div>
	</div>
</div>

    
    
    <div id="template" style="display: none;">
      <div class="basket-product">
        <div class="item">
          <div class="product-image">
            <img src="http://placehold.it/120x166" alt="Placholder Image 2" class="product-frame">
          </div>
          <div class="product-details">
            <h1><strong><span class="item-quantity"></span> x <span class="item-title"></span> </strong></h1>
            <p>Product Code - <span class="item-id"></span></p>
            <p>Turi - <span class="item-type"></span></p>
          </div>
        </div>
        <div class="price"></div>
        <div class="quantity">
          <input type="number"  min="1" class="quantity-field" onchange="update(this)">
        </div>
        <div class="subtotal"></div>
        <div class="remove">
          <button onclick="removeIt(this)">Remove</button>
        </div>
      </div>
    </div>
 
  <script src="/maxs/v2/public/frontend_assets/js/basket.js"></script>
  <script>
  	basket_init();

    var basket=JSON.parse(localStorage.basket);
    var master=document.getElementsByClassName("products")[0];
    
    bootstrap();
    // build DOM
    function updateStorage(basket){
    	localStorage.setItem('basket',JSON.stringify(basket));
    	document.getElementById('basket').innerHTML=calcBasket(JSON.parse(localStorage.basket));
    	console.log(JSON.parse(localStorage.basket));
    }
    function bootstrap(){
      
      var total=0;
      for(let i=0;i<basket.length;i++){
        total=total+basket[i].price*basket[i].quantity;
        var product=document.getElementById("template").getElementsByClassName("basket-product")[0].cloneNode(true);
        product.dataset.id=basket[i].id;
        product.dataset.title=basket[i].title;
        product.dataset.id=basket[i].price;
        product.getElementsByClassName("item-title")[0].innerHTML=basket[i].title;
        product.getElementsByClassName("item-id")[0].innerHTML=basket[i].id;
        product.getElementsByClassName("item-type")[0].innerHTML=basket[i].type=='tosell'?'Sotib olinadigan':'Ijaraga olinadigan'; 
        product.getElementsByClassName("price")[0].innerHTML=basket[i].price;
        product.getElementsByClassName("item-quantity")[0].innerHTML=basket[i].quantity;
        if(basket[i].path=='product_default.png'){
			product.getElementsByClassName("product-frame")[0].src=`http://localhost/maxs/v2/public/img/defaults/product/${basket[i].path}`;
        }else{
        	product.getElementsByClassName("product-frame")[0].src=`http://localhost/maxs/v2/public/img/product/${basket[i].id}/${basket[i].path}`;
        }        
        product.getElementsByClassName("quantity-field")[0].value=basket[i].quantity;
        product.getElementsByClassName("quantity-field")[0].dataset.id=basket[i].id;
        product.getElementsByClassName("subtotal")[0].innerHTML=basket[i].quantity*basket[i].price;
        master.appendChild(product);
      }
     

      document.getElementById("basket-total").innerHTML=total;
    }
    // remove product from list
    function removeIt(elem){
      var parent=elem.parentNode.parentNode;
      var grandParent=elem.parentNode.parentNode.parentNode;
      grandParent.removeChild(parent);
      var toremove=0;
      for(let i=0;i<basket.length;i++){
        if(parent.dataset.id==basket[i].id){
          toremove=i;
        }
      }
      basket.splice(toremove, 1);
      updateStorage(basket);
      master.innerHTML="";

      bootstrap();
    }  
    // update Data and rebuild DOM 
    function update(elem){
      var updated_value=elem.value;
      var id=elem.dataset.id;
      for(let i=0;i<basket.length;i++){
        if(id==basket[i].id){
          basket[i].quantity=updated_value;
        }
      }
      console.log(basket);
      master.innerHTML="";
      bootstrap();
      updateStorage(basket);
    }

    function make_order(e){
   	  if(!check_basket_validity()){
   	  	alert('Your basket contains 2 types');
   	  	e.preventDefault();
   	  }else{
   	  	document.getElementById("prset").value=localStorage.basket;
   	  	clear_basket();
		// e.preventDefault();
   	  }
   	}
  </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/maxs/v2/resources/views/frontend/korzinka.blade.php ENDPATH**/ ?>