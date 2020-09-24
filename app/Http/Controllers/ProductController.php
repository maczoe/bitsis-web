<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Artesaos\SEOTools\Facades\SEOTools;

class ProductController extends Controller
{
    public function index() {
        SEOTools::setTitle('Bitsis Guatemala | tecnología y sistemas de información');
        SEOTools::setDescription('Sistemas de información Guatemala Sistemas de facturación ERP CRM FEL Consultorías Tecnologías de la información');
        return view('about/index');
    }
}