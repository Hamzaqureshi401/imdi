<div class="scrollbar-sidebar ps ps--active-y">
   <?php
   $permission=checkpermissions();
   ?>
   <div class="app-sidebar__inner">
      <ul class="vertical-nav-menu">
         <li class="">
            <!-- <a href="#" class="mm-active">
               <i class="metismenu-icon pe-7s-display1"></i>
               
               Sub Menu 
               
               <i class="metismenu-state-icon"></i>
               
               </a> -->
         </li>
         <?php if($permission->contains('permission', '4')): ?>
         <li class="app-sidebar__heading">Menus</li>
         <li class="<?php echo e((request()->segment(1) == 'product') ? 'mm-active' : ''); ?>">
            <a href="#">
            <i class="metismenu-icon pe-7s-angle-right-circle"></i>
            Products
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
            </a>
            <ul>
               <li>
                  <a href="<?php echo e(route('import')); ?>" class="<?php echo e((Request::is('product/import')) ? 'mm-active' : ''); ?>">
                  <i class="metismenu-icon"></i>
                  Import Products
                  </a>
               </li>
               <li>
                  <a href="<?php echo e(route('product.create')); ?>" class="<?php echo e((Request::is('product/create')) ? 'mm-active' : ''); ?>">
                  <i class="metismenu-icon"></i>
                  New Product
                  </a>
               </li>
               <li>
                  <a href="<?php echo e(route('product.index')); ?>" class="<?php echo e((Request::is('product')) ? 'mm-active' : ''); ?>">
                  <i class="metismenu-icon"></i>
                  Products List
                  </a>
               </li>
            </ul>
         </li>
         <?php endif; ?>
         <?php if($permission->contains('permission', '5')): ?>
         <li class="<?php echo e((request()->segment(1) == 'mastercase') ? 'mm-active' : ''); ?>">
            <a href="#">
            <i class="metismenu-icon pe-7s-angle-right-circle"></i>
            Master Cases
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
            </a>
            <ul>
               <li>
                  <a href="<?php echo e(route('mastercase.create')); ?>" class="<?php echo e((Request::is('mastercase/create')) ? 'mm-active' : ''); ?>">
                  <i class="metismenu-icon"></i>
                  New Master Case
                  </a>
               </li>
               <li>
                  <a href="<?php echo e(route('mastercase.index')); ?>" class="<?php echo e((Request::is('mastercase')) ? 'mm-active' : ''); ?>">
                  <i class="metismenu-icon"></i>
                  Master Case List
                  </a>
               </li>
            </ul>
         </li>
         <?php endif; ?>
         <?php if($permission->contains('permission', '6')): ?>
         <li class="<?php echo e((request()->segment(1) == 'mastercases') ? 'mm-active' : ''); ?>">
            <a href="#">
            <i class="metismenu-icon pe-7s-angle-right-circle"></i>
            Receive Products
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
            </a>
            <ul>
               <li>
                  <a href="<?php echo e(route('newreceived')); ?>" class="<?php echo e((Request::is('mastercases/newreceived')) ? 'mm-active' : ''); ?>">
                  <i class="metismenu-icon"></i>
                  Add Receive Product 
                  </a>
               </li>
               <li>
                  <a href="<?php echo e(route('receivedlist')); ?>" class="<?php echo e((Request::is('mastercases/receivedlist')) ? 'mm-active' : ''); ?>">
                  <i class="metismenu-icon"></i>
                  Received Products List
                  </a>
               </li>
            </ul>
         </li>
         <?php endif; ?>
         <?php if($permission->contains('permission', '7')): ?>
         <li class="<?php echo e((request()->segment(1) == 'checkin') ? 'mm-active' : ''); ?>">
            <a href="#">
            <i class="metismenu-icon pe-7s-angle-right-circle"></i>
            Check In
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
            </a>
            <ul>
               <li>
                  <a href="<?php echo e(route('checkin.index')); ?>" class="<?php echo e((Request::is('checkin')) ? 'mm-active' : ''); ?>">
                  <i class="metismenu-icon"></i>
                  New Check In
                  </a>
               </li>
               <li>
                  <a href="<?php echo e(route('checkinlist')); ?>" class="<?php echo e((Request::is('checkin/list')) ? 'mm-active' : ''); ?>">
                  <i class="metismenu-icon"></i>
                  Check In List
                  </a>
               </li>
            </ul>
         </li>
         <?php endif; ?>
         <?php if($permission->contains('permission', '8')): ?>
         <li class="<?php echo e((request()->segment(1) == 'pick') ? 'mm-active' : ''); ?>">
            <a href="#">
            <i class="metismenu-icon pe-7s-angle-right-circle"></i>
            Pick Orders
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
            </a>
            <ul>
               <li>
                  <a href="<?php echo e(route('pick.create')); ?>" class="<?php echo e((Request::is('pick/create')) ? 'mm-active' : ''); ?>">
                  <i class="metismenu-icon"></i>
                  New Pick Order
                  </a>
               </li>
               <li>
                  <a href="<?php echo e(route('pick.index')); ?>" class="<?php echo e((Request::is('pick')) ? 'mm-active' : ''); ?>">
                  <i class="metismenu-icon"></i>
                  Pending P.O List
                  </a>
               </li>
               <li>
                  <a href="<?php echo e(route('pickdone')); ?>" class="<?php echo e((Request::is('pick/confirmed')) ? 'mm-active' : ''); ?>">
                  <i class="metismenu-icon"></i>
                  Confirmed P.O List
                  </a>
               </li>
            </ul>
         </li>
         <?php endif; ?>
         <?php if($permission->contains('permission', '9')): ?>
         
         <li class="<?php echo e((request()->segment(1) == 'cyclecount') ? 'mm-active' : ''); ?>">
            <a href="#">
            <i class="metismenu-icon pe-7s-angle-right-circle"></i>
            Cycle Count
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
            </a>
            <ul>
               <!--  
                  <li>
                          <a href="<?php echo e(route('pendingcyclecount')); ?>" class="<?php echo e((Request::is('cyclecount/pending')) ? 'mm-active' : ''); ?>">
                              <i class="metismenu-icon"></i>
                              Pending Cycle Count List
                          </a>
                  </li>
                  !-->
               <li>
                  <a href="<?php echo e(route('completedcyclecount')); ?>" class="<?php echo e((Request::is('cyclecount/completed')) ? 'mm-active' : ''); ?>">
                  <i class="metismenu-icon"></i>
                  Completed Cycle Count List
                  </a>
               </li>
            </ul>
         </li>
         <?php endif; ?>
         <li class="">
           <!--  <?php if($permission->contains('permission', '11')): ?>
            <a href="#" class="">
            <i class="metismenu-icon pe-7s-angle-right-circle "></i>
            Returns  
            <i class="metismenu-state-icon"></i>
            </a>
            <?php endif; ?> -->
            <?php if($permission->contains('permission', '13')): ?>
         <li class="<?php echo e((request()->segment(1) == 'report') ? 'mm-active' : ''); ?>">
            <a href="#">
            <i class="metismenu-icon pe-7s-angle-right-circle"></i>
            Reports
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
            </a>
            <ul>
               <li>
                  <a href="<?php echo e(route('stockinview')); ?>" class="<?php echo e((Request::is('report/stock-in')) ? 'mm-active' : ''); ?>">
                  <i class="metismenu-icon"></i>
                  Stock-In Reports
                  </a>
               </li>
               <li>
                  <a href="<?php echo e(route('stockout_report')); ?>" class="<?php echo e((Request::is('report/stock-out')) ? 'mm-active' : ''); ?>">
                  <i class="metismenu-icon"></i>
                  Stock-Out Reports
                  </a>
               </li>
               <li>
                  <a href="<?php echo e(route('inventory_report')); ?>" class="<?php echo e((Request::is('report/inventory')) ? 'mm-active' : ''); ?>">
                  <i class="metismenu-icon"></i>
                  Inventory Reports
                  </a>
               </li>
               <li>
                  <a href="<?php echo e(route('closureview')); ?>" class="<?php echo e((Request::is('report/closure')) ? 'mm-active' : ''); ?>">
                  <i class="metismenu-icon"></i>
                  Close out Reports
                  </a>
               </li>
               <li>
                  <a href="<?php echo e(route('reorderview')); ?>" class="<?php echo e((Request::is('report/reorder')) ? 'mm-active' : ''); ?>">
                  <i class="metismenu-icon"></i>
                  Reorder Reports
                  </a>
               </li>
               <li>
                  <a href="<?php echo e(route('transfer_report')); ?>" class="<?php echo e((Request::is('report/transfer')) ? 'mm-active' : ''); ?>">
                  <i class="metismenu-icon"></i>
                  Transfer Reports
                  </a>
               </li>
            </ul>
         </li>
         <?php endif; ?>
         <?php if($permission->contains('permission', '10')): ?>
         <li class="<?php echo e((request()->segment(1) == 'transfer') ? 'mm-active' : ''); ?>">
            <a href="#">
            <i class="metismenu-icon pe-7s-angle-right-circle"></i>
            Transfer
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
            </a>
            <ul>
               <li>
                  <a href="<?php echo e(route('transfer.create')); ?>" class="<?php echo e((Request::is('transfer/create')) ? 'mm-active' : ''); ?>">
                  <i class="metismenu-icon"></i>
                  New Transfer
                  </a>
               </li>
               <li>
                  <a href="<?php echo e(route('transfer.index')); ?>" class="<?php echo e((Request::is('transfer')) ? 'mm-active' : ''); ?>">
                  <i class="metismenu-icon"></i>
                  Pending Transfer List
                  </a>
               </li>
               <li>
                  <a href="<?php echo e(route('pickedtransfer')); ?>" class="<?php echo e((Request::is('transfer/picked')) ? 'mm-active' : ''); ?>">
                  <i class="metismenu-icon"></i>
                  Picked Transfer List
                  </a>
               </li>
               <li>
                  <a href="<?php echo e(route('placedtransfer')); ?>" class="<?php echo e((Request::is('transfer/placed')) ? 'mm-active' : ''); ?>">
                  <i class="metismenu-icon"></i>
                  Placed Transfer List
                  </a>
               </li>
            </ul>
         </li>
         <?php endif; ?>
         </li>
         <?php if($permission->contains('permission', '11')): ?>
         <li class="<?php echo e((request()->segment(1) == 'transfer') ? 'mm-active' : ''); ?>">
            <a href="#">
            <i class="metismenu-icon pe-7s-angle-right-circle"></i>
            Return
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
            </a>
            <ul>
               <li>
                  <a href="<?php echo e(route('pick-order.index')); ?>" class="<?php echo e((Request::is('returnPickOrder')) ? 'mm-active' : ''); ?>">
                  <i class="metismenu-icon"></i>
                  Return 
                  </a>
               </li>
               <li>
                  <a href="<?php echo e(route('pendingreturn')); ?>" class="<?php echo e((Request::is('Return/pending')) ? 'mm-active' : ''); ?>">
                  <i class="metismenu-icon"></i>
                  Return List
                  </a>
               </li>
            </ul>
         </li>
         <?php endif; ?>
         <li class="app-sidebar__heading">Settings</li>
         <?php if($permission->contains('permission', '1')): ?> 
         <!-- <li class="app-sidebar__heading">Users</li> -->
         <li class="<?php echo e((request()->segment(1) == 'user') ? 'mm-active' : ''); ?>">
            <a href="#">
            <i class="metismenu-icon pe-7s-users"></i>
            Users
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
            </a>
            <ul>
               <li>
                  <a href="<?php echo e(route('user.create')); ?>" class="<?php echo e((Request::is('user/create')) ? 'mm-active' : ''); ?>">
                  <i class="metismenu-icon"></i>
                  New User
                  </a>
               </li>
               <li>
                  <a href="<?php echo e(route('user.index')); ?>" class="<?php echo e((Request::is('user')) ? 'mm-active' : ''); ?>">
                  <i class="metismenu-icon"></i>
                  User List
                  </a>
               </li>
            </ul>
         </li>
         <?php endif; ?>
         <li class="">
            <?php if($permission->contains('permission', '2')): ?>
            <a href="<?php echo e(route('warehouse.index')); ?>" class="<?php echo e((Request::is('warehouse')) ? 'mm-active' : ''); ?>">
            <i class="metismenu-icon pe-7s-user "></i>
            Warehouses 
            <i class="metismenu-state-icon"></i>
            </a>
            <?php endif; ?>
            <?php if($permission->contains('permission', '3')): ?>
            <a href="<?php echo e(route('role.index')); ?>" class="<?php echo e((Request::is('role')) ? 'mm-active' : ''); ?>">
            <i class="metismenu-icon pe-7s-user "></i>
            Roles and Permissions 
            <i class="metismenu-state-icon"></i>
            </a>
            <?php endif; ?>
            <a href="<?php echo e(route('profile')); ?>" class="<?php echo e((Request::is('user/profile')) ? 'mm-active' : ''); ?>">
            <i class="metismenu-icon pe-7s-user "></i>
            Profile 
            <i class="metismenu-state-icon"></i>
            </a>
             <?php if(Auth::user()->role == 1): ?>
            <a href="<?php echo e(route('download.sql.backup')); ?>" class="btn btn-sm btn-dark">
                <i class="fas fa-download" style="color: white;"></i> <!-- Font Awesome download icon -->
                <span style="color: white;">Download Db Backup</span>
            </a>
            <?php endif; ?>
            <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
            <i class="metismenu-icon pe-7s-back"></i>
            Logout 
            <i class="metismenu-state-icon"></i>
            </a>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
               <?php echo csrf_field(); ?>
            </form>
         </li>
      </ul>
   </div>
</div><?php /**PATH C:\xampp\htdocs\imdi\resources\views/layouts/admin/leftsidemenu.blade.php ENDPATH**/ ?>