@extends('layout/main')

@section('content')

@include('layout/hero', ['title_hero' => 'Acerca de nosotros'])

<!-- About Details Start -->
<div class="about-details-area section-padding2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="about-tittle">
                    <h2>Quienes somos</h2>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about-details mb-50">
                    <p class="pear1">Expertos en Tecnologías de la Información</p>
                    <p class="pear2">Bitsis S.A. nace con el objetivo de proveer sistemas de información de alta calidad,
                        personalizado para nuestros clientes, así como la asesoría a las pequeñas y medianas empresas en todas la región 
                        del territorio nacional. A pesar del gran crecimiento tecnológico en la región, muchas empresas carece de tecnologías 
                        de la inforcación para el correcto desarroollo y control de sus operaciones.
                    </p>
                    <p class="pear2">La gran mayoría de empresas en la región, tienen origen en emprendimientos familiares. Una característica
                        de estas empresa es que no cuentan con sistemas de control de invetarios, ventas, contabilidad, recurso humano, financiero 
                        etc. Razón que precede el estancamiento del crecimiento de estas empresas.
                    </p>
                    <p class="pear2">Bitsis S.A. tiene como uno de sus objetivos, brindar asesoría de alto nivel y provisión del software 
                        necesario a todas éstas empresas, con el fin de proveer sistemas de información que les permitan simplificar el control 
                        y la gestión, incrementando de esta manera sus ganancias y mejorando las bases para su crecimiento.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="about-tittle">
                    <h2>Misión</h2>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about-details">
                    <p class="pear1">Comprometidos con nuestra misión</p>
                    <p class="pear2">Ofrecer soluciones tecnológicas de alta calidad, construidas cobre las más sólidas bases del conocimiento, logrando 
                        proveer servicios y productos a la medida, excepcionales y financieramente competitivos."
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="about-tittle">
                    <h2>Visión</h2>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about-details">
                    <p class="pear1">Nuestra visión</p>
                    <p class="pear2">Usar nuestra ilimitada pasión por la tecnología, contenidos y servicios para otorgar soluciones y 
                        simplicidad innovadora, posicionándonos como una empresa de alto valor en el mercado Latinoamericano."
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="about-tittle">
                    <h2>Valores</h2>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about-details">
                    <p class="pear1">Los valores que definen nuestra cultura</p>
                    <p class="pear2">
                        <ul class="unordered-list">
                            <li>Calidad</li>
                            <li>Responsabilidad</li>
                            <li>Confianza</li>
                            <li>Trabajo en equipo</li>
                            <li>Innovación</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Details End -->    

@include('index/weare')
@include('layout/calltoaction')
@endsection