@extends('layout')

@section('content')<!--esta sirve para referenciar al section de layout ubica el contenido en el lugar que quiera-->

<section class="page-section">
            <div class="container">
            <form method="post" action="{{route('enviarComentario')}}">
            @csrf
                <div class="form-group">
                    <label for="nombre" class="text-white"><b>Nombre</b></label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="comentario" class="text-white">Comentario</label>
                    <textarea class="form-control" id="comentario" name="comentario" rows="3" required></textarea>
                </div>
                    <br>
                    <div class="container-fluid h-100"> 
                    <div class="row w-100 align-items-center">
                        <div class="col text-center">
                            <button type="submit" class="btn btn-info regular-button"> Enviar </button>
                        </div>	
                    </div>
    	           </div>
                </form>
                
                
            </div>
        </section>
      

@stop