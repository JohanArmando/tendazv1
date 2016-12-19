@extends('layouts.tendaz')
    @section('css')
    @stop
    @section('content')
        <div class="container" >
            <section class="first-container">
                <section class="text-center ">
                    <h1 style="color: #000">¿Que es Tendaz?</h1>
                </section>
                <div class="col-md-8 col-md-offset-2">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab" aria-expanded="false">Compañia</a></li>
                        <li><a href="#profile" data-toggle="tab" aria-expanded="true">Nuestro Equipo</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="home">
                            <div class="col-md-12 col-md-offset-0">
                                <p align="justify">
                                    <strong>Tendaz By Maxcorp SAS</strong>, es una plataforma dise&ntilde;ada, creada e implementada por un grupo de ingenieros, dise&ntilde;adores y expertos en marketing digital
                                    que hacen parte del equipo de trabajo de la Compa&ntilde;&iacute;a <strong>Maxcorp Inc.</strong>, la cual fue creada en el a&ntilde;o 2016, en Colombia y actualmente cuenta con sedes en
                                    <strong>Estados Unidos</strong> y <strong>Colombia</strong>.
                                </p>
                                <p align="justify">
                                    En sus pruebas iniciales y pre-lanzamiento, <strong>Tendaz</strong> ha tenido una fuerte presencia en el mercado de estos paises llegando a obtener visitas superiores
                                    a las <strong>100.000 Diarias</strong>, lo que nos permite predecir un &eacute;xito arrollador para todos los productos que se creen en las tiendas virtuales de cada profesional
                                    independiente, micro-empresa, Peque&ntilde;a y Mediana Empresa <strong>(PYMES)</strong>.
                                </p>
                                <p align="justify">
                                    El dise&ntilde;o colorido, amigable y sencillo corresponde a las mejores tiendas virtuales del mundo y <strong>Tendaz</strong> ser&aacute; en un par de a&ntilde;os una de las
                                    plataformas de <strong>negocios</strong>, mas contizadas en Am&eacute;rica Latina.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="profile">
                            <div class="col-md-6 col-md-offset-3">
                                <img src="{{ elixir('tendaz/img/about.gif')}}" width="100%" >
                            </div>

                            <div class="col-md-12 col-md-offset-0">
                                <br>
                                <br>
                                <p align="justify">
                                    En Tendaz mas que una empresa somos una familia. Gracias a la dedicacíon y entrega que ha dado cada uno de nuestros integrantes hoy dia dejamos de ser un sueño, para convertirnos en una realidad.
                                </p>
                                <p align="justify">
                                    Nuestro equipo esta conformado por ingenieros, diseñadores, comunicadores sociales y psicologos. Cada quien aporta lo mejor de su conocimiento para hacer que el crecimiento de tendaz no cese con respecto a las necesidades que exige el mercado latino americano.
                                </p>
                                <p align="justify">
                                    Trabajamos basados en valores tales como el respeto, la honestidad y la perseverancia para hacer de tendaz nuestro hogar.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
        <section class="first-container">
            <!-- footer -->
        </section>
    @endsection
    @section('script')
    @endsection