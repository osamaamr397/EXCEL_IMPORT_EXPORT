<?php
namespace App\Http\Controllers;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;
class ExcelWriter implements FromCollection,WithHeadings{
    public function collection()
    {
        // TODO: Implement collection() method.
        $d=DB::select('SELECT * FROM tbl_excel');
        $data=[];
        foreach ($d as $v){
            $data[]=["id"=>$v->id,"FullName"=>$v->full_name,"cell"=>$v->telphone_number,"email"=>$v->email];
        }
        return collect($data);
    }
    public function headings(): array
    {
        // TODO: Implement headings() method.
        return ["ID","FULLNAME","CELL","EMAIL"];
    }
}
