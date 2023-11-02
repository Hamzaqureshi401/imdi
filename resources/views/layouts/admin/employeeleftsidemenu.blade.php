<div class="scrollbar-sidebar ps ps--active-y">
   @php
   $permission=checkpermissions();
   @endphp
   <div class="app-sidebar__inner">
      <ul class="vertical-nav-menu">
         <li class="">
            <!-- <a href="#" class="mm-active">
               <i class="metismenu-icon pe-7s-display1"></i>
               
               Sub Menu 
               
               <i class="metismenu-state-icon"></i>
               
               </a> -->
         </li>
         @if($permission->contains('permission', '4'))
         @php
         $product = $permission->where('permission', '4')->first()->getSubPermission;
         $masterCase = $permission->where('permission', '5')->first()->getSubPermission;
         @endphp
         <li class="app-sidebar__heading">Menus</li>
         <li class="{{ (request()->segment(1) == 'product') ? 'mm-active' : '' }}">
            <a href="#">
            <i class="metismenu-icon pe-7s-angle-right-circle"></i>
            Products
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
            </a>
            <ul>
               <li>
                  <a href="{{route('import')}}" class="{{ (Request::is('product/import')) ? 'mm-active' : '' }}">
                  <i class="metismenu-icon"></i>
                  Import Products
                  </a>
               </li>
               @if($product->contains('name' , 'add'))
               <li>
                  <a href="{{route('product.create')}}" class="{{ (Request::is('product/create')) ? 'mm-active' : '' }}">
                  <i class="metismenu-icon"></i>
                  New Product
                  </a>
               </li>
               @endif
               <li>
                  <a href="{{route('product.index')}}" class="{{ (Request::is('product')) ? 'mm-active' : '' }}">
                  <i class="metismenu-icon"></i>
                  Products List
                  </a>
               </li>
            </ul>
         </li>
         @endif
         @if($permission->contains('permission', '5'))
         <li class="{{ (request()->segment(1) == 'mastercase') ? 'mm-active' : '' }}">
            <a href="#">
            <i class="metismenu-icon pe-7s-angle-right-circle"></i>
            Master Cases
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
            </a>
            <ul>
               @if($masterCase->contains('name' , 'add'))
               <li>
                  <a href="{{route('mastercase.create')}}" class="{{ (Request::is('mastercase/create')) ? 'mm-active' : '' }}">
                  <i class="metismenu-icon"></i>
                  New Master Case
                  </a>
               </li>
               @endif
               <li>
                  <a href="{{route('mastercase.index')}}" class="{{ (Request::is('mastercase')) ? 'mm-active' : '' }}">
                  <i class="metismenu-icon"></i>
                  Master Case List
                  </a>
               </li>
            </ul>
         </li>
         @endif
         @if($permission->contains('permission', '6'))
         <li class="{{ (request()->segment(1) == 'mastercases') ? 'mm-active' : '' }}">
            <a href="#">
            <i class="metismenu-icon pe-7s-angle-right-circle"></i>
            Receive Products
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
            </a>
            <ul>
               <li>
                  <a href="{{route('newreceived')}}" class="{{ (Request::is('mastercases/newreceived')) ? 'mm-active' : '' }}">
                  <i class="metismenu-icon"></i>
                  Add Receive Product 
                  </a>
               </li>
               <li>
                  <a href="{{route('receivedlist')}}" class="{{ (Request::is('mastercases/receivedlist')) ? 'mm-active' : '' }}">
                  <i class="metismenu-icon"></i>
                  Received Products List
                  </a>
               </li>
            </ul>
         </li>
         @endif
         @if($permission->contains('permission', '7'))
         <li class="{{ (request()->segment(1) == 'checkin') ? 'mm-active' : '' }}">
            <a href="#">
            <i class="metismenu-icon pe-7s-angle-right-circle"></i>
            Check In
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
            </a>
            <ul>
               <li>
                  <a href="{{route('checkin.index')}}" class="{{ (Request::is('checkin')) ? 'mm-active' : '' }}">
                  <i class="metismenu-icon"></i>
                  New Check In
                  </a>
               </li>
               <li>
                  <a href="{{route('checkinlist')}}" class="{{ (Request::is('checkin/list')) ? 'mm-active' : '' }}">
                  <i class="metismenu-icon"></i>
                  Check In List
                  </a>
               </li>
            </ul>
         </li>
         @endif
         @if($permission->contains('permission', '9'))
         <li class="{{ (request()->segment(1) == 'pick') ? 'mm-active' : '' }}">
            <a href="#">
            <i class="metismenu-icon pe-7s-angle-right-circle"></i>
            Pick Orders
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
            </a>
            <ul>
               <li>
                  <a href="{{route('pick.create')}}" class="{{ (Request::is('pick/create')) ? 'mm-active' : '' }}">
                  <i class="metismenu-icon"></i>
                  New Pick Order
                  </a>
               </li>
               <li>
                  <a href="{{route('pick.index')}}" class="{{ (Request::is('pick')) ? 'mm-active' : '' }}">
                  <i class="metismenu-icon"></i>
                  Pending P.O List
                  </a>
               </li>
               <li>
                  <a href="{{route('pickdone')}}" class="{{ (Request::is('pick/confirmed')) ? 'mm-active' : '' }}">
                  <i class="metismenu-icon"></i>
                  Confirmed P.O List
                  </a>
               </li>
            </ul>
         </li>
         @endif
         <li class="{{ (request()->segment(1) == 'cyclecount') ? 'mm-active' : '' }}">
            <a href="#">
            <i class="metismenu-icon pe-7s-angle-right-circle"></i>
            Cycle Count
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
            </a>
            <ul>
               <!--  
                  <li>
                          <a href="{{route('pendingcyclecount')}}" class="{{ (Request::is('cyclecount/pending')) ? 'mm-active' : '' }}">
                              <i class="metismenu-icon"></i>
                              Pending Cycle Count List
                          </a>
                  </li>
                  !-->
               <li>
                  <a href="{{route('completedcyclecount')}}" class="{{ (Request::is('cyclecount/completed')) ? 'mm-active' : '' }}">
                  <i class="metismenu-icon"></i>
                  Completed Cycle Count List
                  </a>
               </li>
            </ul>
         </li>
         <li class="">
            @if($permission->contains('permission', '11'))
            <a href="#" class="">
            <i class="metismenu-icon pe-7s-angle-right-circle "></i>
            Returns  
            <i class="metismenu-state-icon"></i>
            </a>
            @endif
         <li class="{{ (request()->segment(1) == 'report') ? 'mm-active' : '' }}">
            <a href="#">
            <i class="metismenu-icon pe-7s-angle-right-circle"></i>
            Reports
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
            </a>
            <ul>
               <li>
                  <a href="{{route('stockinview')}}" class="{{ (Request::is('report/stock-in')) ? 'mm-active' : '' }}">
                  <i class="metismenu-icon"></i>
                  Stock-In Reports
                  </a>
               </li>
               <li>
                  <a href="{{route('stockout_report')}}" class="{{ (Request::is('report/stock-out')) ? 'mm-active' : '' }}">
                  <i class="metismenu-icon"></i>
                  Stock-Out Reports
                  </a>
               </li>
               <li>
                  <a href="{{route('inventory_report')}}" class="{{ (Request::is('report/inventory')) ? 'mm-active' : '' }}">
                  <i class="metismenu-icon"></i>
                  Inventory Reports
                  </a>
               </li>
               <li>
                  <a href="{{route('closureview')}}" class="{{ (Request::is('report/closure')) ? 'mm-active' : '' }}">
                  <i class="metismenu-icon"></i>
                  Close out Reports
                  </a>
               </li>
               <li>
                  <a href="{{route('reorderview')}}" class="{{ (Request::is('report/reorder')) ? 'mm-active' : '' }}">
                  <i class="metismenu-icon"></i>
                  Reorder Reports
                  </a>
               </li>
               <li>
                  <a href="{{route('transfer_report')}}" class="{{ (Request::is('report/transfer')) ? 'mm-active' : '' }}">
                  <i class="metismenu-icon"></i>
                  Transfer Reports
                  </a>
               </li>
            </ul>
         </li>
         @if($permission->contains('permission', '10'))
         <li class="{{ (request()->segment(1) == 'transfer') ? 'mm-active' : '' }}">
            <a href="#">
            <i class="metismenu-icon pe-7s-angle-right-circle"></i>
            Transfer
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
            </a>
            <ul>
               <li>
                  <a href="{{route('transfer.create')}}" class="{{ (Request::is('transfer/create')) ? 'mm-active' : '' }}">
                  <i class="metismenu-icon"></i>
                  New Transfer
                  </a>
               </li>
               <li>
                  <a href="{{route('transfer.index')}}" class="{{ (Request::is('transfer')) ? 'mm-active' : '' }}">
                  <i class="metismenu-icon"></i>
                  Pending Transfer List
                  </a>
               </li>
               <li>
                  <a href="{{route('pickedtransfer')}}" class="{{ (Request::is('transfer/picked')) ? 'mm-active' : '' }}">
                  <i class="metismenu-icon"></i>
                  Picked Transfer List
                  </a>
               </li>
               <li>
                  <a href="{{route('placedtransfer')}}" class="{{ (Request::is('transfer/placed')) ? 'mm-active' : '' }}">
                  <i class="metismenu-icon"></i>
                  Placed Transfer List
                  </a>
               </li>
            </ul>
         </li>
         @endif
         </li>
         <li class="{{ (request()->segment(1) == 'transfer') ? 'mm-active' : '' }}">
            <a href="#">
            <i class="metismenu-icon pe-7s-angle-right-circle"></i>
            Return
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
            </a>
            <ul>
               <li>
                  <a href="{{route('pick-order.index')}}" class="{{ (Request::is('returnPickOrder')) ? 'mm-active' : '' }}">
                  <i class="metismenu-icon"></i>
                  Return 
                  </a>
               </li>
               <li>
                  <a href="{{route('pendingreturn')}}" class="{{ (Request::is('Return/pending')) ? 'mm-active' : '' }}">
                  <i class="metismenu-icon"></i>
                  Return List
                  </a>
               </li>
            </ul>
         </li>
         <li class="app-sidebar__heading">Settings</li>
         @if($permission->contains('permission', '1')) 
         <!-- <li class="app-sidebar__heading">Users</li> -->
         <li class="{{ (request()->segment(1) == 'user') ? 'mm-active' : '' }}">
            <a href="#">
            <i class="metismenu-icon pe-7s-users"></i>
            Users
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
            </a>
            <ul>
               <li>
                  <a href="{{route('user.create')}}" class="{{ (Request::is('user/create')) ? 'mm-active' : '' }}">
                  <i class="metismenu-icon"></i>
                  New User
                  </a>
               </li>
               <li>
                  <a href="{{route('user.index')}}" class="{{ (Request::is('user')) ? 'mm-active' : '' }}">
                  <i class="metismenu-icon"></i>
                  User List
                  </a>
               </li>
            </ul>
         </li>
         @endif
         <li class="">
            @if($permission->contains('permission', '2'))
            <a href="{{route('warehouse.index')}}" class="{{ (Request::is('warehouse')) ? 'mm-active' : '' }}">
            <i class="metismenu-icon pe-7s-user "></i>
            Warehouses 
            <i class="metismenu-state-icon"></i>
            </a>
            @endif
            @if($permission->contains('permission', '3'))
            <a href="{{route('role.index')}}" class="{{ (Request::is('role')) ? 'mm-active' : '' }}">
            <i class="metismenu-icon pe-7s-user "></i>
            Roles and Permissions 
            <i class="metismenu-state-icon"></i>
            </a>
            @endif
            <a href="{{route('profile')}}" class="{{ (Request::is('user/profile')) ? 'mm-active' : '' }}">
            <i class="metismenu-icon pe-7s-user "></i>
            Profile 
            <i class="metismenu-state-icon"></i>
            </a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
            <i class="metismenu-icon pe-7s-back"></i>
            Logout 
            <i class="metismenu-state-icon"></i>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
            </form>
         </li>
      </ul>
   </div>
</div>