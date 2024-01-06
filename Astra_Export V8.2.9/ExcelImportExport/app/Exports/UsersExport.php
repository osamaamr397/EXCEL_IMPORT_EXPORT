<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    public function collection()
    {
        return User::all();
    }
    

    public function headings(): array
    {
        // TODO: Implement headings() method.
        return ["ID","FULLNAME","CELL","EMAIL"];

    }
    
}