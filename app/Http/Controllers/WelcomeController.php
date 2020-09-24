<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Artesaos\SEOTools\Facades\SEOTools;

class WelcomeController extends Controller
{
    public function index() {
        SEOTools::setTitle('Bitsis Guatemala | tecnología y sistemas de información');
        SEOTools::setDescription('Sistemas de información Guatemala Sistemas de facturación ERP CRM FEL Consultorías Tecnologías de la información');
        return view('index/home', ['slides' => $this->generateSlides()]);
    }

    private function generateSlides() {
        $slides = [];
        $slide = new Slide();
        $slide->image = 'assets/img/hero/hero_img.jpg';
        $slide->title = 'Bitsis Guatemala <br>Tecnología y sistemas de información';
        $slide->description = 'El desarrrollo tecnológico de tu empresa en manos de expertos.';
        $slide->link = route('about');
        $slides[0] = $slide;
        $slide2 = new Slide();
        $slide2->image = 'assets/img/hero/hero_img2.jpg';
        $slide2->title = 'Tecnología Vanguardista';
        $slide2->description = 'Nos encontramos en constante evolución para brindarte los más altos estándares tecnológicos.';
        $slide2->link = route('about');
        $slides[1] = $slide2;
        $slide3 = new Slide();
        $slide3->image = 'assets/img/hero/hero_img.jpg';
        $slide3->title = 'Soluciones tecnológicas';
        $slide3->description = 'Apoyando al desarrollo de nuestros clientes.';
        $slide3->link = route('about');
        $slides[2] = $slide3;
        $slide4 = new Slide();
        $slide4->image = 'assets/img/hero/hero_img2.jpg';
        $slide4->title = 'Soluciones integrales';
        $slide4->description = 'Adaptados a las necesidades de tu negocio.';
        $slide4->link = route('about');
        $slides[3] = $slide4;
        return $slides;
    }
}