@extends('layout')
@section('style')
  <!-- CSS contacto -->
	<link rel="stylesheet" type="text/css" href="css/contact-style.css">
@endsection
@section('body')
  <div class="row" style="margin-top: 70px;">
    <div class="col-md-6">
      <h2> Oficina Bahia Blanca </h2>
      <h6> Caronti 7, 8000 Bahía Blanca, Buenos Aires </h6>
      <h6> (291) 454-6904 </h6>
      <form>
        <label for="fname">Nombre</label>
        <input type="text" id="fname" name="fname">
        <label for="fphone">Telefono</label>
        <input type="text" id="fphone" name="fphone">
        <label for="mail">Mail</label>
        <input type="email" id="mail" name="mail">
        <label for="consulta">Consulta</label>
        <textarea id="consulta" name="consulta"></textarea>
        <div class="col-auto my-1">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>

    <div class="col-md-6">
        <h2> Oficina Punta Alta </h2>
        <h6> Humberto Primo 194 , Punta Alta, Buenos Aires </h6>
        <h6> (291) 454-6904 </h6>
        <form>
          <label for="fname">Nombre</label>
          <input type="text" id="fname" name="fname">
          <label for="fphone">Telefono</label>
          <input type="text" id="fphone" name="fphone">
          <label for="mail">Mail</label>
          <input type="email" id="mail" name="mail">
          <label for="consulta">Consulta</label>
          <textarea id="consulta" name="consulta"></textarea>
          <div class="col-auto my-1">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
    </div>
  </div>
@endsection
