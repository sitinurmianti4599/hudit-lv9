@extends('layout/main-layout')
@section('title', 'Home')

@section('konten')
<div class="midde_cont" >
   <div class="container-fluid">
      <div class="row column_title mt-5 m-1 p-1">
         <div class="col-md-12">
            <div class="page_title mt-3">
               <h2>Dashboard</h2>
            </div>
         </div>
      </div>
      <div class="row column1">
         <div class="col-md-8 col-lg-4">
            <div class="full counter_section margin_bottom_30">
               <div class="couter_icon">
                  <div> 
                     <i class="fa fa-users yellow_color"></i>
                  </div>
               </div>
               <div class="counter_no">
                  <div>
                     <p class="total_no">{{ $customer }}</p>
                     <p class="head_couter">Pelanggan</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-8 col-lg-4">
            <div class="full counter_section margin_bottom_30">
               <div class="couter_icon">
                  <div> 
                     <i class="fa fa-clock-o blue1_color"></i>
                  </div>
               </div>
               <div class="counter_no">
                  <div>
                     <p class="total_no">{{ $in_progress }}</p>
                     <p class="head_couter">Di Proses</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-8 col-lg-4">
            <div class="full counter_section margin_bottom_30">
               <div class="couter_icon">
                  <div> 
                     <i class="fa fa-check-square-o green_color"></i>
                  </div>
               </div>
               <div class="counter_no">
                  <div>
                     <p class="total_no">{{ $in_done }}</p>
                     <p class="head_couter">Selesai</p>
                  </div>
               </div>
            </div>
         </div>  

       </div>
      </div>
      
   </div>
       

@endsection