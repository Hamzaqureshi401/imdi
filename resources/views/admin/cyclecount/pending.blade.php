@extends('layouts.admin.app')

@section('header')

@endsection

@section('title')
 Manage Cycle Count
@endsection

@section('content')
<div class="tabs-animation">
                         
                         
                         <div class="card mb-3">
                             <div class="card-header-tab card-header">
                                 <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                     <i class="header-icon lnr-users me-3 text-muted opacity-6"></i>
                                     Pending Cycle Count List
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
                                             <th>Warehouse</th></th>
                                             <th>Rack</th>
                                             <th>Start Location</th>
                                             <th>End Location</th>
                                             <th>Cycle Count By</th>
                                            
                                             <th>Date & Time</th>
                                             <td>Total Locations</td>
                                             <td>Remaning Locations</td>
                                             <th style="text-align:center;">Action</th>
                                            
                                         </tr>
                                     </thead>
                                     <tbody>
                                        @php 
                                        $i=1;
                                     
                                        @endphp
                                        @foreach( $cc as $u )
                                        @php
                                        $fbin=getbindetail($u->start_location);
                                        $ebin=getbindetail($u->end_location);
                                      

                                        @endphp
                                            
                                         <tr>
                                             <td>{{$i}}</td>
                                             <td>{{getwarehouse($u->warehouse)}}</td>
                                             <td></td>
                                             <td>{{$fbin->name}}</td>
                                             <td>{{$ebin->name}}</td>
                                             <td>{{getusername($u->user)}}</td>
                                             <td>{{ $u->created_at->format('Y-m-d h:i:s a') }}</td> 
                                             <td><b>{{get_total_ccl($u->id)}}</b></td>
                                             <td>{{get_total_ccl_pend($u->id)}}</td>
                                             <td></td> 
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

