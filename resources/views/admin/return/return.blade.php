@extends('layouts.admin.app')
@section('header')
@endsection
@section('title')
Return Transection
@endsection
@section('content')
<div class="tabs-animation">
   <div class="card mb-3">
      <div class="card-header-tab card-header">
         <div class="card-header-title font-size-lg text-capitalize fw-normal">
            <i class="header-icon  me-3 text-muted opacity-6"></i>
            Return
         </div>
      </div>
      <div class="card-body">
         <div style="display:none;" class="alert alert-danger alert-dismissible fade show print-error-msg" role="alert">
            </button>
            <ul>
            </ul>
         </div>
         <form class="" id="searchForm" method="post" action="#">
            @csrf
            <div class="row">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" name="date" >
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="transactionNo">Transaction No / Invoice No</label>
                        <input type="number" class="form-control" id="transactionNo" name="transactionNo" >
                     </div>
                  </div>
               </div>
            </div>
            <button type="submit" id="create"  class="mt-2 btn btn-dark">Search</button>
         </form>
      </div>
   </div>
</div>
<div id="resultContainer"></div>

@endsection
@section('footer')
<script type="text/javascript" src="{{asset('admin/js/form-components/input-mask.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/vendors/inputmask/dist/jquery.inputmask.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/vendors/@chenfengyuan/datepicker/dist/datepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/vendors/daterangepicker/daterangepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/form-components/datepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/vendors/sweetalert2/dist/sweetalert2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/sweet-alerts.js')}}"></script>
<script>
$(document).ready(function() {
    $('#searchForm').on('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission
        
        var formData = $(this).serialize(); // Serialize the form data
        
        $.ajax({
            type: 'POST',
            url: '{{ route('search.transection') }}', // Replace with your API endpoint
            data: formData,
            success: function(response) {
                // Load the response HTML into the resultContainer
                $('#resultContainer').html(response);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
});
</script>

@endsection