<?php

namespace App\Http\Controllers;
use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
         return view('Table/all',[
            "tittle" => "Tables",
            "tables" => Table::all()
        ]);
    }

    public function show(Table $table)
    {
        return view('table.detail', [
            "tittle" => "detail-food",
            "table" => $table 
        ]);
    }
}
//VALUES ('','2','Kosong','2',0000-00-0,NOW(),NOW())
