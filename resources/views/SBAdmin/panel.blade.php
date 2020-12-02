@extends('SBAdmin.cleaner')
@section('content')
<div id="content">
   <!-- Begin Page Content -->
   <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">CS Panel</h1>
      </div>

      <!-- Content Row -->
      <div class="row">

         <!-- Earnings (Monthly) Card Example -->
         <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
               <div class="card-body">
                  <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                           Jumlah Ruang</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                     </div>
                     <div class="col-auto">
                        <i class="fas fa-chart-bar fa-2x text-gray-300"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Earnings (Monthly) Card Example -->
         <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
               <div class="card-body">
                  <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                           Jumlah Pegawai</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                     </div>
                     <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Earnings (Monthly) Card Example -->
         <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
               <div class="card-body">
                  <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                        </div>
                        <div class="row no-gutters align-items-center">
                           <div class="col-auto">
                              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                           </div>
                           <div class="col">
                              <div class="progress progress-sm mr-2">
                                 <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Pending Requests Card Example -->
         <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
               <div class="card-body">
                  <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                           Task (All Time)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">121</div>
                     </div>
                     <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Content Row -->
      <div class="row">
         @for ($i = 1; $i <= 9; $i++) {{-- cards --}} <div class="col-sm-4 mb-2 mt-3">
            <div class="card shadow-sm">
               <div class="card-header bg-warning content-center">
                  <i class="fab fa-behance icon text-white my-4 display-4"></i>
               </div>
               <div class="card-body row text-center">
                  <div class="col">
                     <i class="fa fa-toggle-on" aria-hidden="true"></i>
                     <div style="font-size: 12px" class="font-weight-bold">STATUS</div>
                     <div class="text-uppercase text-muted small">Completed</div>
                  </div>
                  <div class="col">
                     <i class="fa fa-user" aria-hidden="true"></i>
                     <div style="font-size: 12px" class="font-weight-bold">PETUGAS</div>
                     <div class="text-uppercase text-muted small">Mr. Cleaner</div>
                  </div>
               </div>
            </div>
      </div>
      @endfor
      {{-- end of cards --}}
   </div>

</div>
<!-- /.container-fluid -->

</div>
@endsection