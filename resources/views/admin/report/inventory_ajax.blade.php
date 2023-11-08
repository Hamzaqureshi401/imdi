  
   <div class="card-body">
                                 <table style="width: 100%;" id="mytb" class="table table-hover table-striped table-bordered">
                             
            <thead>
                <tr>
                    <th>Warehouse Name</th>
                    <th>Entry Date & Time</th>
                    <th>Master Case Name UPC</th>
                    <th>MC Received Quantity</th>
                    <th>Available Quantity</th>
                    <th>Product Details</th>
                    <th>Pallet No</th>
                    <th>Bin Location</th>
                </tr>
            </thead>
            <tbody>
                @php
                $total = 0;
                @endphp
                @foreach ($result as $p)

                @php
                $data = get_mc_pro_wise($p->mcid, $p->avl_qty);
                $total = $total + $data['total'];
                @endphp
               
                    <tr>
                        <td>{{ $p->wareHouse->warehouse }}</td>
                        <td>{{ $p->created_at->format('Y-m-d h:i:s A') }}</td>
                        <td>{{ getmastercase($p->mcid) ?? '--' 
                    }}</td>
                        <td>{{ $p->mc_quantity }}</td>
                        <td>{{ $p->avl_qty ?? 0 }}</td>
                        <td>{!! $data['res']  !!}</td>
                        <td>{{ $p->palletno }}</td>
                        <td>{{ $p->name }}</td>
                    </tr>
                @endforeach
               
            </tbody>
             <tfoot>
        <tr>
            <td><b>{{ '--' }}</b></td>
            <td><b>{{ '--' }}</b></td>
            <td><b>{{ '--' }}</b></td>
            <td><b>{{ '--' }}</b></td>
            <td><b>{{ $result->sum('avl_qty') }}</b></td>
            <td><b>{{ $total }}</b></td>
            <td><b>{{ $result->pluck('palletno')->count() }}</b></td>
            <td><b>{{ $result->pluck('name')->count() }}</b></td>
        </tr>
    </tfoot>
        </table>
    </div>