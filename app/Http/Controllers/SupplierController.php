<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
class SupplierController extends Controller
{
    //
     //bust fungsi controller
     function index() {
        // echo 'ardellia';
        $supplier = Supplier::get(['supplier_id','supplier_name','supplier_address']);
        //var_dump($supplier);
        return view('supplier.index', compact('supplier'));
       }
       function create() {
        // echo "telo";
         return view('supplier.create');
     
         }
         
         function store(Request $request) {
          //echo "Ardellia";
          $txtId = $request->input('txt_id');
          $txtName = $request->input('txt_name');
          $txtAddress = $request->input('txt_address');
     
          echo $txtId." <br /> ".
          $txtName." <br /> ".
          $txtAddress;
     
         Supplier::create([
             'supplier_id' => $txtId,
             'supplier_name' => $txtName,
             'supplier_address' => $txtAddress
          ]);
          
          return redirect('/supplier');
         }
     }
     

