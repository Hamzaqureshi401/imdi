<div class="tabs-animation">
   <div class="card mb-3">
      <div class="card-header-tab card-header">
         <div class="card-header-title font-size-lg text-capitalize fw-normal">
            <i class="header-icon lnr-users me-3 text-muted opacity-6"></i>
            <a href="{{ route('receivedlist') }}">Received Products: </a> &nbsp; <span class="text-primary"></span>
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
               @foreach ($data['received_products'] as $product)
               <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $product->rc_id }}</td>
                  <td>{{ $product->product->name ?? '--' }}</td>
                  <td>{{ $product->fob }}</td>
                  <td>{{ $product->retail_price }}</td>
                  <td>{{ $product->expiry }}</td>
                  <td>{{ $product->created_at }}</td>
                  <td>{{ $product->updated_at }}</td>
                  <!-- Add more columns and data here -->
               </tr>
               @endforeach
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
            <a href="{{ route('mastercase.index') }}">Master Case:</a> &nbsp; <span class="text-primary"></span>
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
        @foreach ($data['master_case'] as $row)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $row['name'] }}</td>
            <td>{{ $row['description'] }}</td>
            <td>{{ $row['length'] }}</td>
            <td>{{ $row['height'] }}</td>
            <td>{{ $row['width'] }}</td>
            <td>{{ $row['weight'] }}</td>
            <td>{{ $row['hi'] }}</td>
            <td>{{ $row['ti'] }}</td>
            <td>{{ $row['upc'] }}</td>
            <td>{{ $row['user'] }}</td>
            <td>{{ $row['status'] }}</td>
            <td>{{ $row['alert_quantity'] }}</td>
            <td>{{ $row['created_at'] }}</td>
            <td>{{ $row['updated_at'] }}</td>
        </tr>
        @endforeach
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
            <a href="{{ route('checkinlist') }}">Received Check In:</a> &nbsp; <span class="text-primary"></span>
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
               @foreach ($data['PalletLabel'] as $label)
               <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $label->rc_id }}</td>
                  <td>{{ $label->wareHouse->warehouse }}</td>
                  <td>{{ $label->palletno }}</td>
                  
                  <td>{{ $label->mc_qty }}</td>
                  <td>{{ $label->avl_qty }}</td>
                  <td>{{ $label->mastercase->name ?? '--' }}</td>
                  
                  <td>{{ $label->checkin_by }}</td>
                  <td>{{ $label->checkin_date }}</td>
                  <td>{{ $label->created_at }}</td>
                  
               </tr>
               @endforeach
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
            <a href="{{ route('transfer.index') }}">Recent Pick Order:</a> &nbsp; <span class="text-primary"></span>
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
               @foreach ($data['Pickorder'] as $order)
               <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $order->invoice_no }}</td>
                  <td>{{ $order->trans_no }}</td>
                  <td>{{ $order->label_no }}</td>
                  <td>{{ $order->masterCase->name ?? '--' }}</td>
                  <td>{{ $order->binlocation->name ?? '--' }}</td>
                  <td>{{ $order->qty }}</td>
                  <td>{{ $order->user }}</td>
                  <td>{{ $order->pick_by }}</td>
                  <td>{{ $order->pick_date }}</td>
                  <td>{{ $order->created_at }}</td>
                  
               </tr>
               @endforeach
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
            <a href="{{ route('transfer_report') }}">Transfer Reports:</a> &nbsp; <span class="text-primary"></span>
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
               @foreach ($data['Transfer'] as $transfer)
               <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $transfer->warehouse->warehouse }}</td>
                  <td>{{ $transfer->p_pl_no }}</td>
                  <td>{{ $transfer->p_location }}</td>
                  <td>{{ $transfer->newwarehouse->warehouse }}</td>
                  <td>{{ $transfer->newbinlocation->name ?? '--' ?? '--' }}</td>
                  <td>{{ $transfer->pick_by }}</td>
                  <td>{{ $transfer->picked_at }}</td>
                  <td>{{ $transfer->placed_by }}</td>
                  <td>{{ $transfer->placed_at }}</td>
                  <td>{{ $transfer->created_at }}</td>
               </tr>
               @endforeach
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
            <a href="{{ route('reorderview') }}">Re Order Reports:</a> &nbsp; <span class="text-primary"></span>
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
               @foreach ($data['reorderReport'] as $mastercase)
               <tr>
                  <td>{{ $mastercase->id }}</td>
                  <td>{{ $mastercase->name ?? '--' }}</td>
                  <td>{{ $mastercase->description }}</td>
                  <td>{{ $mastercase->length }}</td>
                  <td>{{ $mastercase->height }}</td>
                  <td>{{ $mastercase->width }}</td>
                  <td>{{ $mastercase->weight }}</td>
                  <td>{{ $mastercase->hi }}</td>
                  <td>{{ $mastercase->ti }}</td>
                  <td>{{ $mastercase->upc }}</td>
                  <td>{{ $mastercase->user }}</td>
                  <td>{{ $mastercase->status }}</td>
                  <td>{{ $mastercase->alert_quantity }}</td>
                  <td>{{ $mastercase->created_at }}</td>
                  <td>{{ $mastercase->updated_at }}</td>
               </tr>
               @endforeach
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

               @foreach( $data['reorderReport'] as $u )
               @if($u->palletlabel->sum('avl_qty') < $u->alert_quantity)
               <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{$u->upc}}</td>
                  <td>{{$u->name}}</td>
                  <td>{{$u->alert_quantity}}</td>
                  <td>{{$u->palletlabel->sum('avl_qty') ?? 0}}</td>
               </tr>

               @endif
               
              
               @endforeach
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
            <a href="{{ route('closureview') }}">Clouse Out Reports:</a> &nbsp; <span class="text-primary"></span>
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
               @foreach ($data['clouseoutreport'] as $mastercase)
               <tr>
                  <td>{{ $mastercase->id }}</td>
                  <td>{{ $mastercase->name ?? '--' }}</td>
                  <td>{{ $mastercase->description }}</td>
                  <td>{{ $mastercase->upc }}</td>
                  <td>{{ $mastercase->user }}</td>
                  <td>{{ $mastercase->created_at }}</td>
                  
               </tr>
               @endforeach
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
    @foreach ($data['all_master_case'] as $mastercase)
    <tr>
        <td>{{ $loop->index + 1 }}</td>
        <td>{{ $mastercase->name ?? '--' }}</td>
        @php
            $totalBinLocations = $mastercase->binlocation->pluck('id')->count();
            $reservedBinLocations = $mastercase->binlocation->where('rcid', '!=', 0)->where('status', '!=', 0)->pluck('id')->count();
            $freeBinLocations = $mastercase->binlocation->where('rcid', 0)->where('status', 0)->pluck('id')->count();
        @endphp
        <td>{{ $totalBinLocations }}</td>
        <td>{{ $reservedBinLocations }}</td>
        <td>{{ $freeBinLocations }}</td>
        <td>
            @if ($totalBinLocations > 0)
                {{ number_format(($freeBinLocations / $totalBinLocations) * 100, 2) }}%
            @else
                N/A
            @endif
        </td>
    </tr>
    @endforeach
</tbody>

         </table>
      </div>
   </div>
</div>