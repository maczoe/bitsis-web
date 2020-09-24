@extends('layout/main')

@section('content')
@include('layout/hero', ['title_hero' => 'Productos y Servicios'])
<!-- Our Services Start -->
<div class="our-services  pt-50 pb-150">
    <div class="container">
        <div class="row">
            <div class=" col-lg-4 col-md-6 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <img class="img-fluid" src="{{asset('public/assets/img/products/mas_screen.png')}}" alt="mas-screen">
                    </div>
                    <div class="services-cap mt-3">
                        <h5>Sistema de Facturación</h5>
                        <p>Con MAS puedes tener el control de tu negocio. Sistema de facturación y control de inventarios que se adapta a tu empresa.</p>
                    </div>
                </div>
            </div>
            <div class=" col-lg-4 col-md-6 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <img class="img-fluid" src="{{asset('public/assets/img/products/odoo_pos.png')}}" alt="odoo-pos">
                    </div>
                    <div class="services-cap mt-3">
                        <h5>Odoo ERP</h5>
                        <p>Odoo un ERP con una gran comunidad. Potencia tu negocio con todas las funciones de este poderoso ERP. Somos partners oficiales</p>
                    </div>
                </div>
            </div>
            <div class=" col-lg-4 col-md-6 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <img class="img-fluid" src="{{asset('public/assets/img/products/it_consulting.jpg')}}" alt="it-consulting">
                    </div>
                    <div class="services-cap mt-3">
                        <h5>Desarrollo de software</h5>
                        <p>Proyectos de consultoría de TI y desarrollo de aplicaciones. Con experiencia y capacidad, concluye tus proyectos exitosamente.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class=" col-lg-4 col-md-6 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <img class="img-fluid" src="{{asset('public/assets/img/products/web_design.png')}}" alt="web-design">
                    </div>
                    <div class="services-cap mt-3">
                        <h5>Diseño Web</h5>
                        <p>Creamos tu página web como tu quieras. Diseños personalizado para que tu negocio sea relevante.</p>
                    </div>
                </div>
            </div>
            <div class=" col-lg-4 col-md-6 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <img class="img-fluid" src="{{asset('public/assets/img/products/consultoria.jpg')}}" alt="consultoria">
                    </div>
                    <div class="services-cap mt-3">
                        <h5>Consultorías de TI</h5>
                        <p>Con un grupo de Ingenieros capacitados, realizamos consultorías y auditorías de tecnologías de la información.</p>
                    </div>
                </div>
            </div>
            <div class=" col-lg-4 col-md-6 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <img class="img-fluid" src="{{asset('public/assets/img/products/fel.jpg')}}" alt="log-fel">
                    </div>
                    <div class="services-cap mt-3">
                        <h5>Integración de sistemas FEL</h5>
                        <p>Integramos cualquiera de tus sistemas al sistema de FEL (Factura Electrónica en Linea) de SAT.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Services End -->
@endsection