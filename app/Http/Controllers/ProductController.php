<?php

namespace App\Http\Controllers;
use App\Imports\ProductImport;
use App\Models\product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
class ProductController extends Controller
{


    public function fileImportExport()
    {
       return view('upload');
    }

    public function fileImport(Request $request)
    {
        Excel::import(new ProductImport, $request->file('file')->store('temp'));
        return back();
    }

    public function fileExport()
    {
        return Excel::download(new ProductImport, 'users-collection.xlsx');
    }
}
