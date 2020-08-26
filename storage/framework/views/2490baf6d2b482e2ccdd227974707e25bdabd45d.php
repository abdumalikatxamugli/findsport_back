<?php $__env->startSection('content'); ?>
<script>
	var adminid="<?php echo e(Auth::user()->id); ?>";
	if(adminid==2){
		window.location.assign("http://ieltsonline.uz/v2/public/admin/prospective");
	}
</script>
<div class="main-panel">
  <div class="content-wrapper pb-0">
    <div class="page-header flex-wrap">
      <h3 class="mb-0"><?=$page=="registered"?"Registered users":"New Users"?> <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">Fresh from your website.</span>
      </h3>
      <div class="d-flex">

      </div>
    </div>
    <div class="row">



      <div class="col-xl-12 col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body px-0 overflow-auto">
            <h4 class="card-title pl-4"><?=$page=="registered"?"Registered users":"New Users"?></h4>
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
              <table class="table">
                <thead class="bg-light">
                  <tr>
                    <th>Name</th>

                    <th>Phone</th>
                    <th>Phone2</th>
                    <th>Cateogory</th>
                  </tr>
                </thead>
                <tbody>
                  <?foreach($students as $item):?>
                  <?if($item->category_id!=null){?>
                  <?
                    $date = new \DateTime($item->created_at);  
                    $dataT=$date->format("yy") . "-" . $date->format("m") . "-" . $date->format("d");
    
                  ?>
                  <tr class="filterable" data-name="<?php echo e($item->name); ?>" data-date="<?php echo e($dataT); ?>">

                    <td>
                      <div class="d-flex align-items-center">
                        <a href="<?php echo e(route('admissionInter', $item->id)); ?>">
                          <div class="table-user-name ml-3">
                            <p class="mb-0 font-weight-medium"><?php echo e($item->name); ?>  </p>

                          </div>
                        </a>
                      </div>
                    </td>

                    <td><?php echo e($item->phone); ?></td>
                    <td><?php echo e($item->phone2); ?></td>
                    <td>
                      <div class="badge badge-inverse-info">
                        <?if($item->category_id!=null){?>
                          <?php echo e($category[$item->category_id]->name); ?>

                        <?}else{?>
                          Not Yet, but <?php echo e($item->want); ?>

                        <?}?>  
                      </div>
                    </td>


                  </tr>
                  <?}?>
                  <?endforeach?>
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
<?php echo $__env->make('admin.layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ieltsonl/domains/ieltsonline.uz/public_html/v2/resources/views/admin/admission.blade.php ENDPATH**/ ?>