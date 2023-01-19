<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\common_fee_collection_headwise;
use App\Models\common_fee_collection;
use App\Models\entrymode;
use App\Models\feecategory;
use App\Models\feecollectiontype;
use App\Models\feetypes;
use App\Models\financial_trans;
use App\Models\financial_transdetail;
use App\Models\module;
use App\Models\branches;

class UploadCSVController extends Controller
{
    public function index(){
        return view('upload-file');
    }

    public function store(){
        if(request()->has('mycsv')){
            $data = array_map('str_getcsv', file(request()->mycsv));
            return $data;
        }
        return 'Please upload file.';
    }
}
