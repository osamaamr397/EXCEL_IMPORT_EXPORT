<?php

namespace App\Http\Controllers;

//use http\Env\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
//use Maatwebsite\Excel\Excel;
use Illuminate\Http\Request;
use Excel;
use App\Http\Controllers\ExcelWriter;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function excel(){
        return view("excel-uplade");
    }
    public function excel_worker(Request $request){
        Excel::import(new ExcelRader(),$request->file);
        return redirect()->back();
    }
    public function download_excel(){
        return Excel::download(new ExcelWriter(),"export.xlsx");
    }
}
