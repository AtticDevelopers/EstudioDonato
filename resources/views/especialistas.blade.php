@extends('layout')

@section('style')
<link rel="stylesheet" type="text/css" href="css/especialistas.css">
@endsection



@section('body')
<div class="container servicios col-sm-12"> 
   <div class="servicios-col col-md-4" id="col-1">
      <div class="areaservicio-especialista">   
         <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
            Button 1
         </button>
         <div class="collapse" id="collapseExample1">
            <div class="card card-body">
               Este sería el texto del servicio  1
            </div>
         </div>        
      </div>  

      <div class="areaservicio-especialista"> 
         <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
            Button 2
         </button> 
         <div class="collapse" id="collapseExample2">
            <div class="card card-body">
               Este sería el texto del servicio 2
            </div>
         </div>
      </div> 

      <div class="areaservicio-especialista"> 
         <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
            Button 3
         </button> 
         <div class="collapse" id="collapseExample3">
            <div class="card card-body">
               Este sería el texto del servicio 3
            </div>
         </div>
      </div> 
   </div>


   <div class="servicios-col col-md-4" id="col-2">   
      <div class="areaservicio-especialista"> 
         <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4">
            Button 4
         </button>
      </div>  
      <div class="collapse" id="collapseExample4">
         <div class="card card-body">
            Este sería el texto del servicio 4
         </div>
      </div>

      <div class="areaservicio-especialista"> 
         <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample5">
            Button 5
         </button> 
         <div class="collapse" id="collapseExample5">
            <div class="card card-body">
               Este sería el texto del servicio 5
            </div>
         </div>
      </div> 

      <div class="areaservicio-especialista"> 
         <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample6" aria-expanded="false" aria-controls="collapseExample6">
            Button 6
         </button>
         <div class="collapse" id="collapseExample6">
            <div class="card card-body">
               Este sería el texto del servicio 6
            </div>
         </div>
      </div> 
   </div>

   <div class="servicios-col col-md-4" id="col-3">
      <div class="areaservicio-especialista"> 
         <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample7" aria-expanded="false" aria-controls="collapseExample7">
            Button 7
         </button>
         <div class="collapse" id="collapseExample7">
            <div class="card card-body">
               Este sería el texto del servicio 7
            </div>
         </div>
      </div>

   </div>


</div>

@endsection

