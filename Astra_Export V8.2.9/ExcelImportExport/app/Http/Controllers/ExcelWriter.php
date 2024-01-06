<?php
namespace App\Http\Controllers;
namespace App\Exports;
use App\Models\User;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;
class ExcelWriter implements FromCollection,WithHeadings{
    use Exportable;

    public function collection()
    {
        
        // TODO: Implement collection() method.
        $d=DB::select('SELECT * FROM tbl_excel ORDER BY id DESC');
        $data=[];
        foreach ($d as $v){
           // $data[]=["id"=>$v->id,"FullName"=>$v->full_name,"cell"=>$v->telphone_number,"email"=>$v->email];
            $data[]=["id"=>$v->id,"FullName"=>$v->full_name,"cell"=>$v->telphone_number,"email"=>$v->email];
        }
        return collect($data);
        
       // return User::all();
    }
    public function headings(): array
    {
        // TODO: Implement headings() method.
        return ["ID","FULLNAME","CELL","EMAIL"];

    }
}
