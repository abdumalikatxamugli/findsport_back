<?php $__env->startSection('content'); ?>

<div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
              <h3 class="mb-0">Video <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">Fresh from your website.</span>
              </h3>
              <div class="d-flex">
                <a href="<?php echo e(route('videoNew')); ?>">Add New</a>
              </div>
            </div>
            <div class="filters p-1 pl-4">
              <div class="row">
                <div class="col-md-12">
                  <select name="category" class="form-control" onchange="filter(event)">
                    <?php foreach ($category as $item): ?>
                      <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                    <?php endforeach ?>
                    
                  </select>
                </div>
               
                
              </div>
            </div>
            <div class="row">
             
              

              <div class="col-xl-12 col-sm-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body px-0 overflow-auto">
                    <h4 class="card-title pl-4">Videos sorted by category</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="bg-light">
                          <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?foreach($adm as $item):?>
                          <tr class="filterable" data-category="<?php echo e($item->category_id); ?>">
                            
                            <td>
                              <div class="d-flex align-items-center">
                                <a href="<?php echo e(route('videosInter', $item->id)); ?>">
                                <div class="table-user-name ml-3">
                                  <p class="mb-0 font-weight-medium"><?php echo e($item->name); ?>  </p>
                                  
                                </div>
                                </a>
                              </div>
                            </td>
                            <td>
                              <div class="badge badge-inverse-info">
                                <?php echo e($category[$item->category_id]->name); ?>

                              </div>
                            </td>
                            <td>
                              <a href="<?=route('videoDelete',$item->id)?>" class="btn btn-danger">
                                Delete
                              </a>
                            </td>
                            
                            
                          </tr>
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
<?php echo $__env->make('admin.layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ieltsonl/domains/ieltsonline.uz/public_html/v2/resources/views/admin/videos.blade.php ENDPATH**/ ?>