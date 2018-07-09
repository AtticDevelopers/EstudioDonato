@extends('layout')

@section('body')
<!-- Page Content -->
<div class="container">

   <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

         <!-- Title -->
         @yield('seccion-titulo')
         <!-- 
            <h1 class="mt-4"></h1>
         -->


         <!-- Preview Image -->
         @yield('seccion-imagen')
         <!--
            <img class="img-fluid rounded" src="" alt="">
         -->

         <hr>

         <!-- Post Content -->

         @yield('seccion-textoPrincipal')
         <!--
            <p class="lead"> </p>
         -->

         @yield('seccion-textoSecundario')
         <!--
            <p></p>
         -->
         
         <!-- /.row -->

      </div>
   </div>
</div>
<!-- /.container -->
@endsection