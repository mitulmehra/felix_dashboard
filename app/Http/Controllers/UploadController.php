<?php

namespace App\Http\Controllers;
use App\Imports\PassengerImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class uploadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        return view('upload');
    }
    public function save(Request $request)
    {
        $csv = $request->file('file');
        $csvName = $csv->getClientOriginalName();
        $csv->move(storage_path('upload/csv'),$csvName);
        
        Excel::import(new PassengerImport, storage_path("upload/csv/$csvName") );
        $array = (new PassengerImport)->toArray(storage_path("upload/csv/$csvName"));        
        foreach ($array as $row) {                
            print_r($row);
        }
    }
}
