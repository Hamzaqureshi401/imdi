<div class="tabs-animation">
   <div class="card mb-3">
      <div class="card-header-tab card-header">
         <div class="card-header-title font-size-lg text-capitalize fw-normal">
            <i class="header-icon lnr-users me-3 text-muted opacity-6"></i>
            Received Products: &nbsp; <span class="text-primary"></span>
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
            Received Check In: &nbsp; <span class="text-primary"></span>
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
                  <th>Machine ID</th>
                  <th>Machine Quantity</th>
                  <th>Available Quantity</th>
                  <th>Status</th>
                  <th>Check-in Status</th>
                  <th>Check-in By</th>
                  <th>Check-in Date</th>
                  <th>Created At</th>
                  <th>Updated At</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($data['PalletLabel'] as $label)
               <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $label->rc_id }}</td>
                  <td>{{ $label->wareHouse->warehouse }}</td>
                  <td>{{ $label->palletno }}</td>
                  <td>{{ $label->mc_id }}</td>
                  <td>{{ $label->mc_qty }}</td>
                  <td>{{ $label->avl_qty }}</td>
                  <td>{{ $label->status }}</td>
                  <td>{{ $label->checkin_status }}</td>
                  <td>{{ $label->checkin_by }}</td>
                  <td>{{ $label->checkin_date }}</td>
                  <td>{{ $label->created_at }}</td>
                  <td>{{ $label->updated_at }}</td>
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
            Recent Pick Order: &nbsp; <span class="text-primary"></span>
         </div>
      </div>
      <div class="card-body">
         <table class="table table-striped">
            <thead>
               <tr>
                  <th>Sr</th>
                  <th>Invoice Number</th>
                  <th>Transaction Number</th>
                  <th>Label ID</th>
                  <th>Label Number</th>
                  <th>Machine ID</th>
                  <th>RC ID</th>
                  <th>Bin Location</th>
                  <th>Quantity</th>
                  <th>User</th>
                  <th>Pick Status</th>
                  <th>Picked By</th>
                  <th>Pick Date</th>
                  <th>Created At</th>
                  <th>Updated At</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($data['Pickorder'] as $order)
               <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $order->invoice_no }}</td>
                  <td>{{ $order->trans_no }}</td>
                  <td>{{ $order->label_id }}</td>
                  <td>{{ $order->label_no }}</td>
                  <td>{{ $order->mc_id }}</td>
                  <td>{{ $order->rc_id }}</td>
                  <td>{{ $order->binlocation->name ?? '--' }}</td>
                  <td>{{ $order->qty }}</td>
                  <td>{{ $order->user }}</td>
                  <td>{{ $order->pick_status }}</td>
                  <td>{{ $order->pick_by }}</td>
                  <td>{{ $order->pick_date }}</td>
                  <td>{{ $order->created_at }}</td>
                  <td>{{ $order->updated_at }}</td>
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
            Transfer Reports: &nbsp; <span class="text-primary"></span>
         </div>
      </div>
      <div class="card-body">
         <table class="table table-striped">
            <thead>
               <tr>
                  <th>Sr</th>
                  <th>Previous Warehouse</th>
                  <th>Previous Pallet Number</th>
                  <th>Previous Product</th>
                  <th>Previous Location</th>
                  <th>Previous Bin</th>
                  <th>New Warehouse</th>
                  <th>New Pallet Number</th>
                  <th>New Product</th>
                  <th>New Location</th>
                  <th>New Bin</th>
                  <th>Pick Status</th>
                  <th>Picked By</th>
                  <th>Picked At</th>
                  <th>Placed Status</th>
                  <th>Placed By</th>
                  <th>Placed At</th>
                  <th>Created At</th>
                  <th>Updated At</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($data['Transfer'] as $transfer)
               <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $transfer->warehouse->warehouse }}</td>
                  <td>{{ $transfer->p_pl_no }}</td>
                  <td>{{ $transfer->product->name ?? '--' ?? '--' }}</td>
                  <td>{{ $transfer->p_location }}</td>
                  <td>{{ $transfer->pbinlocation->name ?? '--' ?? '' }}</td>
                  <td>{{ $transfer->newwarehouse->warehouse }}</td>
                  <td>{{ $transfer->n_pl_no }}</td>
                  <td>{{ $transfer->newproduct->name ?? '--' ?? '--' }}</td>
                  <td>{{ $transfer->n_location }}</td>
                  <td>{{ $transfer->newbinlocation->name ?? '--' ?? '--' }}</td>
                  <td>{{ $transfer->pick_status }}</td>
                  <td>{{ $transfer->pick_by }}</td>
                  <td>{{ $transfer->picked_at }}</td>
                  <td>{{ $transfer->placed_status }}</td>
                  <td>{{ $transfer->placed_by }}</td>
                  <td>{{ $transfer->placed_at }}</td>
                  <td>{{ $transfer->created_at }}</td>
                  <td>{{ $transfer->updated_at }}</td>
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
            Re Order Reports: &nbsp; <span class="text-primary"></span>
         </div>
      </div>
      <div class="card-body">
         <table class="table table-striped">
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
         </table>
      </div>
   </div>
</div>
<div class="tabs-animation">
   <div class="card mb-3">
      <div class="card-header-tab card-header">
         <div class="card-header-title font-size-lg text-capitalize fw-normal">
            <i class="header-icon lnr-users me-3 text-muted opacity-6"></i>
            Clouse Out Reports: &nbsp; <span class="text-primary"></span>
         </div>
      </div>
      <div class="card-body">
         <table class="table table-striped">
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
               @foreach ($data['clouseoutreport'] as $mastercase)
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
         </table>
      </div>
   </div>
</div>