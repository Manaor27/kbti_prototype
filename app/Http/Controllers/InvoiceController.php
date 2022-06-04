<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class InvoiceController extends Controller
{
    public function cetak_pdf() {
        $pdf = PDF::loadview('invoice');
        return $pdf->download('invoice.pdf');
    }
}
