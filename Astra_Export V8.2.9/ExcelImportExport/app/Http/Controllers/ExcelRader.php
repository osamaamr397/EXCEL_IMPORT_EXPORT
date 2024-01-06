<?php
namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\DB;
class ExcelRader implements ToCollection{
    public function collection(Collection $rows)
    {
        // TODO: Implement collection() method.
        foreach ($rows as $row)
        DB::table("users")->insert([
           "full_name"=>$row[1],
           "telphone_number"=>$row[2],
            "email"=>$row[3],
        ]);
    }
}
