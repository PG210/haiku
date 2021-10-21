@extends('layout')

@section('content')<!--esta sirve para referenciar al section de layout ubica el contenido en el lugar que quiera-->
<section class="page-section about-heading">
            <div class="container">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/img1.png" alt="..." />
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-upper text-center">Requerimientos del sistema</span>
                                   
                                </h2>
                                <p>
                                <b>Haiku</b> se ejecutará en una CPU Pentium o superior con 128 MB de RAM, 600 MB de espacio de almacenamiento y una tarjeta de vídeo compatible con VESA. De hecho, ha sido probado para trabajar en CPUs es lentos como un Pentium II a 400 MHz con 64 MB de RAM. Sin embargo, para una experiencia de usuario satisfactoria, se recomienda al menos un Pentium III con 256 MB de RAM y 2 GB de espacio de almacenamiento. Para la elaboración de Haiku en sí mismo, 1GB de memoria es recomendable.
                                </p>
                                <p>Link Descarga <a href="https://www.haiku-os.org/get-haiku/r1beta3/">Haiku</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@stop