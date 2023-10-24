@extends('layouts.admin.app')

@section('header')

@endsection

@section('title')
 Manage Transfer
@endsection

@section('content')
<div class="tabs-animation">
                         
                         
                         <div class="card mb-3">
                             <div class="card-header-tab card-header">
                                 <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                     <i class="header-icon lnr-users me-3 text-muted opacity-6"></i>
                                     Placed & Confirmed Transfer List
                                 </div>
                                
                             </div>
                             <div class="card-body">
                             @if(session('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                                 <table style="width: 100%;" id="mytb" class="table table-hover table-striped table-bordered">
                                     <thead>
                                         <tr>
                                             <th>Sr #</th>
                                             <th>Master Case</th></th>
                                             <th>Pallet No</th>
                                             <th>From Warehouse</th>
                                             <th>From Location</th>
                                             <th>Picked by</th>
                                             <th>Picked at</th>
                                             <th>To Warehouse</th>
                                             <th>To Location</th>
                                             <th>Date & Time</th>
                                             <th>Placed By</th>
                                             <th>Placed at</th>

                                         </tr>
                                     </thead>
                                     <tbody>
                                        @php 
                                        $i=1;
                                     
                                        @endphp
                                        @foreach( $transfer as $u )
                                        @php
                                        $pbin=getbindetail($u->p_bid);
                                        $nbin=getbindetail($u->n_bid);
                                        $pld=getlabelinfo($u->p_pl_no);

                                        @endphp
                                            
                                         <tr>
                                             <td>{{$i}}</td>
                                             <td>{{getmastercase($pld->mc_id)}}</td>
                                             <td>{{$u->p_pl_no}}</td>
                                             <td>{{getwarehouse($u->p_warehouse)}}</td>
                                             <td>{{$pbin->name}}</td>
                                             <td>{{ getusername($u->pick_by) }}</td>
                                             <td>{{ $u->picked_at }}</td>
                                             <td>{{getwarehouse($u->n_warehouse)}}</td>
                                             <td>{{$nbin->name}}</td>
                                             <td>{{ $u->created_at->format('Y-m-d h:i:s a') }}</td> 
                                             <td>{{ getusername($u->placed_by) }}</td> 
                                             <td>{{ $u->placed_at }}</td>
                                           
                                         </tr>
                                         @php 
                                        $i++;
                                        @endphp
                                         @endforeach
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                        
                     </div>

@endsection

@section('footer')


