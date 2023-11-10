<div class="tabs-animation">
   <div class="card mb-3">
      <div class="card-header-tab card-header">
         <div class="card-header-title font-size-lg text-capitalize fw-normal">
            <i class="header-icon lnr-users me-3 text-muted opacity-6"></i>
            <a href="<?php echo e(route('receivedlist')); ?>">Received Products: </a> &nbsp; <span class="text-primary"></span>
         </div>
      </div>
      <div class="card-body">
         <table class="table table-striped">
            <thead>
               <tr>
                  <th>Sr</th>
                  <th>RC ID</th>
                  <th>Product</th>
                  <th>FOB</th>
                  <th>Retail Price</th>
                  <th>Expiry Date</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <!-- Add more column headers here -->
               </tr>
            </thead>
            <tbody>
               <?php $__currentLoopData = $data['received_products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <td><?php echo e($loop->index + 1); ?></td>
                  <td><?php echo e($product->rc_id); ?></td>
                  <td><?php echo e($product->product->name ?? '--'); ?></td>
                  <td><?php echo e($product->fob); ?></td>
                  <td><?php echo e($product->retail_price); ?></td>
                  <td><?php echo e($product->expiry); ?></td>
                  <td><?php echo e($product->created_at); ?></td>
                  <td><?php echo e($product->updated_at); ?></td>
                  <!-- Add more columns and data here -->
               </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
         </table>
      </div>
   </div>
</div>
<div class="tabs-animation">
   <div class="card mb-3">
      <div class="card-header-tab card-header">
         <div class="card-header-title font-size-lg text-capitalize fw-normal">
            <i class="header-icon lnr-users me-3 text-muted opacity-6"></i>
            <a href="<?php echo e(route('mastercase.index')); ?>">Master Case:</a> &nbsp; <span class="text-primary"></span>
         </div>
      </div>
      <div class="card-body">
         <table class="table table-striped">
           <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Length</th>
            <th>Height</th>
            <th>Width</th>
            <th>Weight</th>
            <th>HI</th>
            <th>TI</th>
            <th>UPC</th>
            <th>User</th>
            <th>Status</th>
            <th>Alert Quantity</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $data['master_case']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->index + 1); ?></td>
            <td><?php echo e($row['name']); ?></td>
            <td><?php echo e($row['description']); ?></td>
            <td><?php echo e($row['length']); ?></td>
            <td><?php echo e($row['height']); ?></td>
            <td><?php echo e($row['width']); ?></td>
            <td><?php echo e($row['weight']); ?></td>
            <td><?php echo e($row['hi']); ?></td>
            <td><?php echo e($row['ti']); ?></td>
            <td><?php echo e($row['upc']); ?></td>
            <td><?php echo e($row['user']); ?></td>
            <td><?php echo e($row['status']); ?></td>
            <td><?php echo e($row['alert_quantity']); ?></td>
            <td><?php echo e($row['created_at']); ?></td>
            <td><?php echo e($row['updated_at']); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

         </table>
      </div>
   </div>
</div>
<div class="tabs-animation">
   <div class="card mb-3">
      <div class="card-header-tab card-header">
         <div class="card-header-title font-size-lg text-capitalize fw-normal">
            <i class="header-icon lnr-users me-3 text-muted opacity-6"></i>
            <a href="<?php echo e(route('checkinlist')); ?>">Received Check In:</a> &nbsp; <span class="text-primary"></span>
         </div>
      </div>
      <div class="card-body">
         <table class="table table-striped">
            <thead>
               <tr>
                  <th>Sr</th>
                  <th>RC ID</th>
                  <th>Warehouse</th>
                  <th>Pallet Number</th>
                  
                  <th>Master Case Quantity</th>
                  <th>Available Quantity</th>
                  <th>Master Case</th>
                  
                  <th>Check-in By</th>
                  <th>Check-in Date</th>
                  <th>Created At</th>
                  
               </tr>
            </thead>
            <tbody>
               <?php $__currentLoopData = $data['PalletLabel']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <td><?php echo e($loop->index + 1); ?></td>
                  <td><?php echo e($label->rc_id); ?></td>
                  <td><?php echo e($label->wareHouse->warehouse); ?></td>
                  <td><?php echo e($label->palletno); ?></td>
                  
                  <td><?php echo e($label->mc_qty); ?></td>
                  <td><?php echo e($label->avl_qty); ?></td>
                  <td><?php echo e($label->mastercase->name ?? '--'); ?></td>
                  
                  <td><?php echo e($label->checkin_by); ?></td>
                  <td><?php echo e($label->checkin_date); ?></td>
                  <td><?php echo e($label->created_at); ?></td>
                  
               </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
         </table>
      </div>
   </div>
</div>
<div class="tabs-animation">
   <div class="card mb-3">
      <div class="card-header-tab card-header">
         <div class="card-header-title font-size-lg text-capitalize fw-normal">
            <i class="header-icon lnr-users me-3 text-muted opacity-6"></i>
            <a href="<?php echo e(route('transfer.index')); ?>">Recent Pick Order:</a> &nbsp; <span class="text-primary"></span>
         </div>
      </div>
      <div class="card-body">
         <table class="table table-striped">
            <thead>
               <tr>
                  <th>Sr</th>
                  <th>Invoice Number</th>
                  <th>Transaction Number</th>
                  <th>Label Number</th>
                  <th>Master Case</th>
                  <th>Bin Location</th>
                  <th>Quantity</th>
                  <th>User</th>
                  <th>Picked By</th>
                  <th>Pick Date</th>
                  <th>Created At</th>
                  
               </tr>
            </thead>
            <tbody>
               <?php $__currentLoopData = $data['Pickorder']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <td><?php echo e($loop->index + 1); ?></td>
                  <td><?php echo e($order->invoice_no); ?></td>
                  <td><?php echo e($order->trans_no); ?></td>
                  <td><?php echo e($order->label_no); ?></td>
                  <td><?php echo e($order->masterCase->name ?? '--'); ?></td>
                  <td><?php echo e($order->binlocation->name ?? '--'); ?></td>
                  <td><?php echo e($order->qty); ?></td>
                  <td><?php echo e($order->user); ?></td>
                  <td><?php echo e($order->pick_by); ?></td>
                  <td><?php echo e($order->pick_date); ?></td>
                  <td><?php echo e($order->created_at); ?></td>
                  
               </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
         </table>
      </div>
   </div>
</div>
<div class="tabs-animation">
   <div class="card mb-3">
      <div class="card-header-tab card-header">
         <div class="card-header-title font-size-lg text-capitalize fw-normal">
            <i class="header-icon lnr-users me-3 text-muted opacity-6"></i>
            <a href="<?php echo e(route('transfer_report')); ?>">Transfer Reports:</a> &nbsp; <span class="text-primary"></span>
         </div>
      </div>
      <div class="card-body">
         <table class="table table-striped">
            <thead>
               <tr>
                  <th>Sr</th>
                  <th>Previous Warehouse</th>
                  <th>Previous Pallet Number</th>
                  <th>Previous Location</th>
                  <th>New Warehouse</th>
                  <th>New Bin</th>
                  <th>Picked By</th>
                  <th>Picked At</th>
                  <th>Placed By</th>
                  <th>Placed At</th>
                  <th>Created At</th>
               </tr>
            </thead>
            <tbody>
               <?php $__currentLoopData = $data['Transfer']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transfer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <td><?php echo e($loop->index + 1); ?></td>
                  <td><?php echo e($transfer->warehouse->warehouse); ?></td>
                  <td><?php echo e($transfer->p_pl_no); ?></td>
                  <td><?php echo e($transfer->p_location); ?></td>
                  <td><?php echo e($transfer->newwarehouse->warehouse); ?></td>
                  <td><?php echo e($transfer->newbinlocation->name ?? '--' ?? '--'); ?></td>
                  <td><?php echo e($transfer->pick_by); ?></td>
                  <td><?php echo e($transfer->picked_at); ?></td>
                  <td><?php echo e($transfer->placed_by); ?></td>
                  <td><?php echo e($transfer->placed_at); ?></td>
                  <td><?php echo e($transfer->created_at); ?></td>
               </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
         </table>
      </div>
   </div>
</div>
<div class="tabs-animation">
   <div class="card mb-3">
      <div class="card-header-tab card-header">
         <div class="card-header-title font-size-lg text-capitalize fw-normal">
            <i class="header-icon lnr-users me-3 text-muted opacity-6"></i>
            <a href="<?php echo e(route('reorderview')); ?>">Re Order Reports:</a> &nbsp; <span class="text-primary"></span>
         </div>
      </div>
      <div class="card-body">
        <!--  <table class="table table-striped">
            <thead>
               <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Length</th>
                  <th>Height</th>
                  <th>Width</th>
                  <th>Weight</th>
                  <th>HI</th>
                  <th>TI</th>
                  <th>UPC</th>
                  <th>User</th>
                  <th>Status</th>
                  <th>Alert Quantity</th>
                  <th>Created At</th>
                  <th>Updated At</th>
               </tr>
            </thead>
            <tbody>
               <?php $__currentLoopData = $data['reorderReport']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mastercase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <td><?php echo e($mastercase->id); ?></td>
                  <td><?php echo e($mastercase->name ?? '--'); ?></td>
                  <td><?php echo e($mastercase->description); ?></td>
                  <td><?php echo e($mastercase->length); ?></td>
                  <td><?php echo e($mastercase->height); ?></td>
                  <td><?php echo e($mastercase->width); ?></td>
                  <td><?php echo e($mastercase->weight); ?></td>
                  <td><?php echo e($mastercase->hi); ?></td>
                  <td><?php echo e($mastercase->ti); ?></td>
                  <td><?php echo e($mastercase->upc); ?></td>
                  <td><?php echo e($mastercase->user); ?></td>
                  <td><?php echo e($mastercase->status); ?></td>
                  <td><?php echo e($mastercase->alert_quantity); ?></td>
                  <td><?php echo e($mastercase->created_at); ?></td>
                  <td><?php echo e($mastercase->updated_at); ?></td>
               </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
         </table> -->

          <table style="width: 100%;" id="mytb" class="table table-hover table-striped table-bordered">
            <thead>
               <tr>
                  <th>Sr #</th>
                  <th>Master Case UPC</th>
                  <th>Master Case Name</th>
                  <th>Alert Quantity</th>
                  <th>Available Quantity</th>
                  
               </tr>
            </thead>
            <tbody>

               <?php $__currentLoopData = $data['reorderReport']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php if($u->palletlabel->sum('avl_qty') < $u->alert_quantity): ?>
               <tr>
                  <td><?php echo e($loop->index + 1); ?></td>
                  <td><?php echo e($u->upc); ?></td>
                  <td><?php echo e($u->name); ?></td>
                  <td><?php echo e($u->alert_quantity); ?></td>
                  <td><?php echo e($u->palletlabel->sum('avl_qty') ?? 0); ?></td>
               </tr>

               <?php endif; ?>
               
              
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
           
         </table>
      
      </div>
   </div>
</div>
<div class="tabs-animation">
   <div class="card mb-3">
      <div class="card-header-tab card-header">
         <div class="card-header-title font-size-lg text-capitalize fw-normal">
            <i class="header-icon lnr-users me-3 text-muted opacity-6"></i>
            <a href="<?php echo e(route('closureview')); ?>">Clouse Out Reports:</a> &nbsp; <span class="text-primary"></span>
         </div>
      </div>
      <div class="card-body">
         <table class="table table-striped">
            <thead>
               <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>UPC</th>
                  <th>User</th>
                  <th>Created At</th>
                  
               </tr>
            </thead>
            <tbody>
               <?php $__currentLoopData = $data['clouseoutreport']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mastercase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <td><?php echo e($mastercase->id); ?></td>
                  <td><?php echo e($mastercase->name ?? '--'); ?></td>
                  <td><?php echo e($mastercase->description); ?></td>
                  <td><?php echo e($mastercase->upc); ?></td>
                  <td><?php echo e($mastercase->user); ?></td>
                  <td><?php echo e($mastercase->created_at); ?></td>
                  
               </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
         </table>
      </div>
   </div>
</div>
<div class="tabs-animation">
   <div class="card mb-3">
      <div class="card-header-tab card-header">
         <div class="card-header-title font-size-lg text-capitalize fw-normal">
            <i class="header-icon lnr-users me-3 text-muted opacity-6"></i>
            <a href="">Warehouses Details And Capacity:</a> &nbsp; <span class="text-primary"></span>
         </div>
      </div>
      <div class="card-body">
         <table class="table table-striped">
           <thead>
    <tr>
        <th>Sr</th>
        <th>Warehouse Name</th>
        <th>Total Bin Locations</th>
        <th>Reserved Bin Locations</th>
        <th>Free Bin Locations</th>
        <th>Percentage Free Space</th>
    </tr>
</thead>
<tbody>
    <?php $__currentLoopData = $data['all_warehouses']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $warehouse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    <tr>
        <td><?php echo e($loop->index + 1); ?></td>
        <td><?php echo e($warehouse->warehouse ?? '--'); ?></td>
        <?php
           $totalBinLocations = $warehouse->rackInfo->sum(function ($rackInfo) {
                return $rackInfo->binlocation->count();
            });
            //dd($totalBinLocations);
            $reservedBinLocations =$warehouse->rackInfo->sum(function ($rackInfo) {
                return $rackInfo->binlocation->where('status', 1)->count();
            });
            $freeBinLocations = $warehouse->rackInfo->sum(function ($rackInfo) {
                return $rackInfo->binlocation->where('status', 0)->count();
            });
        ?>
        <td><?php echo e($totalBinLocations); ?></td>
        <td><?php echo e($reservedBinLocations); ?></td>
        <td><?php echo e($freeBinLocations); ?></td>
        <td>
            <?php if($totalBinLocations > 0): ?>
                <?php echo e(number_format(($freeBinLocations / $totalBinLocations) * 100, 2)); ?>%
            <?php else: ?>
                N/A
            <?php endif; ?>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>

         </table>
      </div>
   </div>
</div><?php /**PATH C:\xampp\htdocs\imdi\resources\views/other_reports.blade.php ENDPATH**/ ?>