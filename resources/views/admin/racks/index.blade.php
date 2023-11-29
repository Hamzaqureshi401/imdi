@extends('layouts.admin.app')
@section('header')
@endsection
@section('title')
Manage Warehouse Racks
@endsection
@section('content')
<div class="tabs-animation">
   <div class="card mb-3">
      <div class="card-header-tab card-header">
         <div class="card-header-title font-size-lg text-capitalize fw-normal">
            <i class="header-icon  me-3 text-muted opacity-6"></i>
            Add New Row / Racks
         </div>
      </div>
      <div class="card-body">
         @if (\Session::has('message'))
         <div  class="alert alert-success alert-dismissible fade show print-error-msg" role="alert">
            <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert">
            </button>
            <ul>
               <li>{{Session::get('message')}}</li>
            </ul>
         </div>
         @endif
         @if (\Session::has('error'))
         <div  class="alert alert-danger alert-dismissible fade show print-error-msg" role="alert">
            <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert">
            </button>
            <ul>
               <li>{{Session::get('error')}}</li>
            </ul>
         </div>
         @endif
         @if (count($errors) > 0)
         <div  class="alert alert-danger alert-dismissible fade show print-error-msg" role="alert">
            <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert">
            </button>
            <ul>
               @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
         @endif
         <form method="post" action="{{route('rack.store')}}">
            @csrf
            <div class="row">
               <div class="col-md-3">
                  <div class="position-relative mb-3">
                     <label for="exampleEmail11" class="form-label">Row Title:</label>
                     <input name="rowtitle" placeholder="Enter Row Title" type="text" class="form-control" required>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="position-relative mb-3">
                     <label for="examplePassword11" class="form-label">No of Location:</label>
                     <input name="length"  placeholder="Enter Length" min=1 type="number" class="form-control" required>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="position-relative mb-3">
                     <label for="examplePassword11" class="form-label">Format: </label>
                     <input name="format" id="pname" placeholder="Enter Row Format" type="text" class="form-control" pattern=".*\*.*" required title="Input must contain '*'"  required>
                     <span class="text-danger">Please use * where You want series</span>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="position-relative mb-3">
                     <label for="examplePassword11" class="form-label">&nbsp;</label>
                     <input type="hidden" name="warehouse" value="{{$warehouse}}" />
                     <input name="submit" type="submit" value="Save"class="form-control btn btn-dark">
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
<div class="tabs-animation">
   <div class="card mb-3">
      <div class="card-header-tab card-header">
         <div class="card-header-title font-size-lg text-capitalize fw-normal">
            Row List
         </div>
      </div>
      <div class="card-body">
         <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
            <thead>
               <tr>
                  <th>Sr #</th>
                  <th>Row Title</th>
                  <th>Format</th>
                  <th>No of Location</th>
                  <th style="text-align:center;">Action</th>
               </tr>
            </thead>
            <tbody>
               @php 
               $i=1;
               @endphp 
               @foreach( $racks as $u )
               <tr>
                  <td>{{$i}}</td>
                  <td>{{$u->rowtitle}}</td>
                  <td>{{$u->format}}</td>
                  <td>{{$u->length}}</td>
                  <td style="text-align:center;">
                     

                     <div role="group" class="btn-group-lg btn-group btn-group-toggle">
                      <!--   <a href="{{ route('binlabels', $u->id) }}">
                           <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Print Label">
                              <i class="lnr-printer icon-gradient bg-grow-early"></i>
                           </div>
                        </a> -->
                         <a href="{{ route('print', $u->id) }}" class="print-link">
                            <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Print Label">
                                <i class="lnr-printer icon-gradient bg-grow-early"></i>
                            </div>
                        </a>
                        <a href="{{ route('rack.show', $u->id) }}">
                           <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="View or Update BarCode">
                              <i class="lnr-eye icon-gradient bg-grow-early"></i>
                           </div>
                        </a>
                        <a href="{{ route('rack.edit', $u->id) }}">
                           <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit">
                              <i class="lnr-pencil icon-gradient bg-grow-early"></i>
                           </div>
                        </a>
                        @if(binstatusforrack($u->id)==$u->length)
                        <form class="delete" method="POST" action="{{ route('rack.destroy', $u->id) }}">
                           @csrf
                           @method("DELETE")
                           <button type="submit" class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete">
                           <i class="lnr-trash icon-gradient bg-amy-crisp"></i>
                           </button>
                        </form>
                        @endif
                     </div>
                  </td>
               </tr>
               @php 
               $i++;
               @endphp
               @endforeach
            </tbody>
            <tfoot>
               <tr>
                  <th>Sr #</th>
                  <th>Row Title</th>
                  <th>Format</th>
                  <th>No of Location</th>
                  <th style="text-align:center;">Action</th>
               </tr>
            </tfoot>
         </table>
      </div>
   </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
   $(document).ready(function() {
     // Attach a submit event handler to the form
     $(".delete").submit(function(event) {
       // Show a confirmation dialog
       var confirmation = confirm("Are you sure you want to Delete");
       
       // If the user clicks "Cancel", prevent the form submission
       if (!confirmation) {
         event.preventDefault();
       }
     });
   });
</script>
<script>
    $(document).ready(function () {
        $('.print-link').on('click', function (e) {
            e.preventDefault();

            // Show a prompt to get user input
            var numberOfPrints = prompt("How many prints do you want? (Maximum: 3)");

            // Check if the user entered a value and it's a positive integer within the range
            if (numberOfPrints !== null && !isNaN(numberOfPrints) && numberOfPrints > 0 && numberOfPrints <= 3) {
                // Get the href attribute from the clicked link
                var printUrl = $(this).attr('href');

                // Append the user input as a query parameter
                printUrl += '/' + numberOfPrints;

                // Redirect to the print route with the user input
                window.location.href = printUrl;
            } else {
                alert("Please enter a valid number between 1 and 3.");
            }
        });
    });
</script>

@endsection