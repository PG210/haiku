@extends('layout')

@section('content')<!--esta sirve para referenciar al section de layout ubica el contenido en el lugar que quiera-->

<section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="assets/img/intro.jpg" alt="..." />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">DESCRIPCIÓN</span>
                        </h2>
                        <p class="mb-3"><b>Haiku (Sistema operativo).</b> Sistema operativo en desarrollo, de código abierto, el cual centra sus objetivos en la informática personal y multimedia. El proyecto esta dirigido por Haiku, Inc., una organización no lucrativa situada en Nueva York el cual se inspira en el sistema <b>BeOS.</b> El cual es un sistema operativo que ha sido escrito desde cero, no está atado a ningún esquema o diseño viejo u obsoleto, lo que hizo posible que se lo implementara desde un comienzo haciendo uso de las últimas tecnologías e ideas en lo que a sistemas operativos se refiere</p>
                        <!--<div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="#!">Visit Us Today!</a></div>
-->
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded rounded">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper text-center">HISTORIA</span>
                            </h2>
                            <p class="mb-0">
                                <ul>
                                    <li>En 2001 se inició el proyecto con el nombre de OpenBeOS, ya que la empresa BeOS desapareció y los usuarios quedaron sin soporte a nuevas actualizaciones y nuevo software para sus equipos.</li>
                                    <li>Tres años mas tarde el proyecto cambió de nombre para evitar los derechos de marca que tenía Palm, la empresa que compró BeOS. La decisión de usar como nombre Haiku, una forma de poesía tradicional japonesa, usada en mensajes de error de BeOS, intentaba reflejar la sencillez y elegancia que se obtenía con el antiguo sistema operativo BeOS.</li>
                                    <li>En septiembre de 2009 </li></ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex me-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper">Características y aspectos que distinguen a Haiku </span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="assets/img/products-02.jpg" alt="..." />
                    <div class="product-item-description d-flex ms-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0">
                         <ul>
                             <li>Su arquitectura de núcleo avanzada ofrece capacidad para múltiples procesadores, un alto rendimiento, ancho de banda de entrada/salida modular</li>
                             <li>Cuenta con un micronúcleo modular propio, el cual será altamente optimizado para trabajo con audio, vídeo, gráficos, y animaciones en tres dimensiones inspirado en el del original BeOS.</li>
                             <li>Se centra especialmente en la informática personal.</li>
                             <li>Kernel personalizado diseñado para la capacidad de respuesta.</li>
                             <li>Diseño multihilo totalmente, de gran eficiencia con multi-processor/core CPUs.</li>
                             <li>Base de datos como el sistema de archivos (BFS) con soporte para metadatos indexados.</li>
                             <li>Interfaz unificada y coherente.</li>
                         </ul>
                        </p></div>
                    </div>
                </div>
            </div>
        </section>
@stop
