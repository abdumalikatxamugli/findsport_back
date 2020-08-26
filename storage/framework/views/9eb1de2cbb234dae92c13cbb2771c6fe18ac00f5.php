<?php $__env->startSection('content'); ?>
<style>
  .phone::first-letter {
    visibility: hidden;
  }
  .phone::last-letter {
    visibility: hidden;
  }
  .modal{
    top: 10%;
    left: 20%;
    width: 60%;
    background-color: #ee0;
    padding: 54px 36px;
    height: 88%;
    overflow-y: scroll;
    
  }
  .input{
    display: flex;
    justify-content: space-around;
    margin-bottom:15px;
  }
  .input input, .input select{
    width:50%;
  }
  .input label{
    width:50%;
  }
  .c{
    text-align: right;
    margin-bottom:20px;
  }
  .subButton{
    margin-top: 45px;
    padding: 10px 20px;
    background-color: crimson;
    border: 4px solid white;
    border-radius: 10px;
    color: white;
    font-weight: 700;
  }
</style>
<div class="modal">
  <div class="c">
    <button onclick="closeIt()">close</button>
  </div>
  <h3 id="swant"></h3>
  <form action="" method="POST" id="regForm">
  <?php echo csrf_field(); ?>
  <div class="input">

    <label for="name">Your Full Name:</label>
    <input type="text" name="name" id="name" disabled>
  </div>
  
  <div class="input">

    <label for="name">Where are you from:</label>
    <select name="location" id="">
      <option value="Tashkent">Tashkent</option>
      <option value="Sirdaryo">Sirdaryo</option>
      <option value="Andijan">Andijan</option>
      <option value="Bukhara">Bukhara</option>
      <option value="Jizzakh">Jizzakh</option>
      <option value="Kashkadarya">Kashkadarya</option>
      <option value="Navoi">Navoi</option>
      <option value="Namangan">Namangan</option>
      <option value="Samarkand">Samarkand</option>
      <option value="Surkhandarya">Surkhandarya</option>
      <option value="Fergana">Fergana</option>
      <option value="Khorezm">Khorezm</option>
      <option value="Karakalpakstan">Karakalpakstan</option> 
    </select>

  </div>
  <div class="input">

    <label for="name">Phone Number 1:</label>
    <input type="text" name="phone1" id="phone1" disabled>
  </div>
  <div class="input">

    <label for="name">Phone Number 2:</label>
    <input type="text" name="phone2">
  </div> 
  <div class="input">
    <label for="name">Learning Center</label>
    <select name="LC" id="" onchange="changeIt(this)">
      <?foreach($lc as $item):?>
      <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>

      <?endforeach?>  
    </select>

  </div> 
  <div class="input">

    <label for="name">Course:</label>
    <select name="category" id="cat">
      <?foreach($cat as $item):?>
      <option class="cat" style="display:<?=$item->lc_id!=1?"none":""?>" value="<?php echo e($item->id); ?>" data-lc="<?php echo e($item->lc_id); ?>"><?php echo e($item->name); ?></option>

      <?endforeach?>  
    </select>
    
    <script>
      function changeIt(elem){
        var val=elem.value;
        var options=document.getElementsByClassName("cat");
        for (var i = options.length - 1; i >= 0; i--) {
          if(options[i].dataset.lc==val){
            options[i].style.display="";
          }else{
            options[i].style.display="none";
          }
        }
        document.getElementById("cat").value="";
      }
    </script>
  </div>
  <div class="input">
    <button type="submit" class="subButton" onclick="valid(event)">SUBMIT</button>
  </div>
  <script>
    function valid(e){
      var cat=document.getElementById("cat").value;
      if(cat==""){
        e.preventDefault();
        alert("Fill the category");
      }
    }
  </script>
  </form>
</div>
<div class="main-panel">
  <div class="content-wrapper pb-0">
    <div class="page-header flex-wrap">
      <h3 class="mb-0">Prospective students <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">Fresh from your website.</span>
      </h3>
      <div class="d-flex">

      </div>
    </div>
    <div class="row">


      <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.4/xlsx.min.js" integrity="sha512-4icIdb9sZUhVG+I7epJzkDUF6MWaSGcrQ8SmudewmRAfIH9IdmKSqHtmE7psZCBixNzAbtXiKVV+qCsbMhkkTw==" crossorigin="anonymous"></script>
      <div class="col-xl-12 col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body px-0 overflow-auto">
            <h4 class="card-title pl-4">Prospective students 
              <button style="background-color: green; color:white" onclick="doit()">Export to excel</button>
            </h4>
            <script>
              function doit(){
                var workbook = XLSX.utils.book_new();

                /* convert table 'table1' to worksheet named "Sheet1" */
                var ws1 = XLSX.utils.table_to_sheet(document.getElementById('table1'));
                XLSX.utils.book_append_sheet(workbook, ws1, "Sheet1");
                console.log(workbook);
                var today = new Date();
                var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
                XLSX.writeFile(workbook, "prospective"+date+".xls");
              }
            </script>
            <div class="filters p-1 pl-4">
              <div class="row">
                <div class="col-md-6">
                  <input type="text" class="form-control" name="name" onkeyup="filter(event)" placeholder="name filter">
                </div>
                <div class="col-md-6">
                  <input type="date" class="form-control" name="date" onchange="filter(event)">
                </div>
                
              </div>
            </div>
            <div class="table-responsive">
              <table class="table" id="table1">
                <thead class="bg-light">
                  <tr>
                    <th>Name</th>

                    <th>Phone</th>
                    <!-- <th>Phone2</th> -->
                    <th>Want</th>
                  </tr>
                </thead>
                <tbody>
                  <?foreach($students as $item):?>
                  <?
                  $date = new \DateTime($item->created_at);  
                  $dataT=$date->format("yy") . "-" . $date->format("m") . "-" . $date->format("d");

                  ?>
                  <tr onclick="openModal(this)" data-name="<?php echo e($item->name); ?>" data-phone="<?php echo e($item->phone); ?>"data-want="<?php echo e($item->want); ?>" class="filterable" data-name="<?php echo e($item->name); ?>" data-date="<?php echo e($dataT); ?>" data-id="<?php echo e($item->id); ?>">

                    <td>
                      <div class="d-flex align-items-center">
                        <a href="#">
                          <div class="table-user-name ml-3">
                            <p class="mb-0 font-weight-medium"><?php echo e($item->name); ?>  </p>

                          </div>
                        </a>
                      </div>
                    </td>

                    <td class="phone">"<?php echo e($item->phone); ?><span style="display: none">"</span></td>
                    <!-- <td><?php echo e($item->phone2); ?></td> -->
                    <td>
                      <div class="badge badge-inverse-info">

                        <?php echo e($item->want); ?>


                      </div>
                    </td>


                  </tr>
                  <?endforeach?>
                  <script>
                    var modal=document.getElementsByClassName("modal")[0];
                    function openModal(elem){
                      modal=document.getElementsByClassName("modal")[0];
                      document.getElementById('name').value=elem.dataset.name;
                      document.getElementById('phone1').value=elem.dataset.phone;
                      document.getElementById('swant').innerHTML=elem.dataset.want;
                      var url="http://ieltsonline.uz/v2/public/admin/student/prosUpdate/";
                      url=url+elem.dataset.id;
                      document.getElementById('regForm').action=url;
                      modal.style.display="block";

                    }
                    function closeIt(){
                      modal.style.display="none";
                    }
                  </script>
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>



  </div>


  <script src="/cumfilter.js"></script>
  <script>
    var value={}
    function filter(e){
      console.log(e.target.value);
      value[e.target.name]=e.target.value;
      var nodes=document.getElementsByClassName("filterable");
      var c = new CumulativeFilter(nodes);
      c.filter(value);
    }
  </script>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ieltsonl/domains/ieltsonline.uz/public_html/v2/resources/views/admin/prospective.blade.php ENDPATH**/ ?>