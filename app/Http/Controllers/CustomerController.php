<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    //bust fungsi controller
    function index() {
     // echo 'ardellia';
     $customer = Customer::get(['customer_id','name','address']);
     //var_dump($customer);
     return view('customer.index', compact('customer'));
    }

    function create() {
   // echo "telo";
    return view('customer.create');

    }
    
    function store(Request $request) {
     //echo "Ardellia";
     $txtId = $request->input('txt_id');
     $txtName = $request->input('txt_name');
     $txtAddress = $request->input('txt_address');

     echo $txtId." <br /> ".
     $txtName." <br /> ".
     $txtAddress;

     Customer::create([
        'customer_id' => $txtId,
        'name' => $txtName,
        'address' => $txtAddress
     ]);
     
     return redirect('/customer');
    }

    public function show($id) {
    //echo "ember";
    //echo $id;
    //select * from Customer where customer_d=$id
    //$customer = Customer::where('customer_id'. $id);
    //var_dump($customer);


     //return view('customer/show', ['customer' => Customer::where('customer_id'.$id)]);
       $customer = Customer::where('customer_id', $id)->get();
       return view('customer.show', compact('customer'));
    }

    public function edit($id) {

     $customer = Customer::where('customer_id', $id)->get();
      return view('customer.edit', compact('customer'));
    // return view('customer/edit', [ 'customer'=> Customer::where('customer_id' . $id) ]);
    }

    public function update(Request $request, $id) {
        $txtId = $request->input('txt_id');
        $txtName = $request->input('txt_name');
        $txtAddress = $request->input('txt_address');

        Customer::where('customer_id', $id)->update([
        'name' => $txtName,
        'address' => $txtAddress

        ]);
        return redirect('/customer');
    }

    public function destroy($id) {
       $customer = Customer::where('customer_id', $id)->first();
       $customer->delete();
       return redirect('/customer');
    }
}
