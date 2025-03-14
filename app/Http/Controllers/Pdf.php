<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mikehaertl\wkhtmlto\Pdf;

class Pdf extends Controller
{
    public function index()
    {
        $pdf = new Pdf('pdf.index');
        
        if (!$pdf->send('document.pdf')) {
            return $pdf->getError();
        }

        return view('pdf.index');
    }
}
