<?php $__env->startSection('content'); ?>

<div class="main-panel">
          <div class="content-wrapper pb-0">
            
            <div class="row">
             
              

              <div class="col-xl-12 col-sm-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body px-0 overflow-auto">
                    <h4 class="card-title pl-4"><?php echo e($adm->name); ?></h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="bg-light">
                          <tr>
                            <th>Property</th>
                            <th>Value</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                               
                                <div class="table-user-name ml-3">
                                  <p class="mb-0 font-weight-medium"></p>
                                   Name
                                </div>
                                
                              </div>
                            </td>
                            <td><?php echo e($adm->name); ?></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                               
                                <div class="table-user-name ml-3">
                                  <p class="mb-0 font-weight-medium"></p>
                                   Location
                                </div>
                                
                              </div>
                            </td>
                            <td><?php echo e($adm->location); ?></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                               
                                <div class="table-user-name ml-3">
                                  <p class="mb-0 font-weight-medium"></p>
                                  Phone
                                </div>
                                
                              </div>
                            </td>
                            <td><?php echo e($adm->phone); ?></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                               
                                <div class="table-user-name ml-3">
                                  <p class="mb-0 font-weight-medium"></p>
                                   Phone2
                                </div>
                                
                              </div>
                            </td>
                            <td><?php echo e($adm->phone2); ?></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                               
                                <div class="table-user-name ml-3">
                                  <p class="mb-0 font-weight-medium"></p>
                                   Category
                                </div>
                                
                              </div>
                            </td>
                            <td><?php echo e($cat[0]->name); ?></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                               
                                <div class="table-user-name ml-3">
                                  <p class="mb-0 font-weight-medium"></p>
                                   Updated
                                </div>
                                
                              </div>
                            </td>
                            <td><p><?php echo e($adm->updated_at); ?></p></td>
                          </tr>
                          <form action="<?php echo e(route('studentUpdateReg',$adm->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                               
                                <div class="table-user-name ml-3">
                                  <p class="mb-0 font-weight-medium"></p>
                                   Username
                                </div>
                                
                              </div>
                            </td>
                            <td><input type="text" name="username" class="form-control"
                                 value="<?=$adm->username!=null?$adm->username:""?>"
                              ></td>
                          </tr>
                          
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                               
                                <div class="table-user-name ml-3">
                                  <p class="mb-0 font-weight-medium"></p>
                                   Password
                                </div>
                                
                              </div>
                            </td>
                            <td><input type="text" name="password" class="form-control"
                              value="<?=$adm->password!=null?$adm->password:""?>"></td>
                          </tr>
                          <tr>
                            <tr>
                            <td>
                              <div class="d-flex align-items-center">
                               
                                <div class="table-user-name ml-3">
                                  <p class="mb-0 font-weight-medium"></p>
                                   Restricted till lesson(included):
                                </div>
                                
                              </div>
                            </td>
                            <td><input type="text" name="restrict" class="form-control"
                              value="<?=$adm->restrict_lesson?>"></td>
                          </tr>
                          <tr>
                            <td colspan="2"> <input type="submit" value="Set" class="btn btn-warning" style="width:100%"></td>
                          </tr>
                          </form>
                        </tbody>
                      </table>
                     
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            
            
            
          </div>
          


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ieltsonl/domains/ieltsonline.uz/public_html/v2/resources/views/admin/admissioninter.blade.php ENDPATH**/ ?>