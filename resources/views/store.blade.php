@extends('layout')

@section('content')<!--esta sirve para referenciar al section de layout ubica el contenido en el lugar que quiera-->
 

<section class="page-section cta">
            <div class="container">
                <div class="row">
                   
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                                <span class="section-heading-lower">Formulario de contactos</span>
                            </h2>
                              <!--Formulario-->
                              <form  method="post" action="{{route('enviarDatos')}}">
                                  @csrf
                                <div class="row">
                                    <div class="col">
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                                    </div>
                                    <div class="col">
                                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" required>
                                    </div>
                                    <div class="col">
                                    <input type="text" class="form-control" id="dir" name="dir" placeholder="Dirección" required>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="mensj">Comentario</label>
                                    <textarea class="form-control" id="mensj" name="mensj" rows="3"></textarea>
                                </div>
                                  <!--alerta-->
                                     @if(session()->has('flash'))
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>!!!</strong> Mensaje enviado con exito.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            {{session()->get('flash')}}
                                    @endif
                                    <!--end alerta-->

                                <br>
                                <input class="btn btn-primary" type="submit" value="Enviar">

                                </form>
                              <!--end form-->

                            <p class="address mb-5">
                                <em>
                                    <br />
                                    Ipiales, Nariño
                                </em>
                            </p>
                            <p class="mb-0">
                                <small><em>Telefono</em></small>
                                <br />
                                (317) 578-0045
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
@stop