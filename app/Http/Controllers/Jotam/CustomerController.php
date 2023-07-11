<?php

namespace App\Http\Controllers\Jotam;

use Illuminate\Http\Request;
use App\Models\Jotam\Customer;
use App\Models\Jotam\Industry;
use App\Http\Controllers\Controller;
use Spatie\SimpleExcel\SimpleExcelReader;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function get_js($id)
    {
        $customer = Customer::find($id);
        return response()->json([
            'status' => 200,
            'customer' => $customer,
        ]);
    }

    public function search(Request $request)
    {        
        $search = $request->searchtext;
        $customers = Customer::Where('company','like','%'.$search.'%')
            ->orWhere('first_name','like','%'.$search.'%')
            ->orWhere('last_name','like','%'.$search.'%')
            ->orWhere('email','like','%'.$search.'%')
            ->orderBy('entry_at','desc')
            ->simplePaginate(500);  
        return view('customers.index',compact('customers'));
    }

    public function dashboard()
    {
         return view('customers.dashboard');
    } 

    public function index()
    {
        $customers = Customer::orderBy('entry_at','desc')->simplePaginate(500);             
        return view('customers.index',compact('customers'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {        
        $industries = Industry::orderby('name','asc')->get();
        return view('customers.create',compact('industries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data1 = $request->except('_token');
        $customer = Customer::create($data1);
        return back()->with('success','Customer Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $data1= $request->except('_token','_method');
        $customer->update($data1);
        return back()->with('success','Data Customer Berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.dashboard')->with('success','Data Customer Berhasil di Delete');
    }

    public function import(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'required|mimes:xls,xlsx|max:5000',
        ]);
        $name = $request->file('file')->getClientOriginalName();
        $ext = pathinfo($name, PATHINFO_EXTENSION);
        $filename = 'Machines'.'.'.$ext;
        $path = $request->file('file')->storeAs('public', $filename);
        $pathToExcel = storage_path('/app/'.$path);
        
        $rows = SimpleExcelReader::create($pathToExcel)->getRows();

        $rows->each(function (array $rowProperties) {            
            
            $customers= Customer::Create(
                ['industries'=>$rowProperties['Industries'],
                'entry_at'=>$rowProperties['Entry Date'] ? $rowProperties['Entry Date'] : null,
                'data_form'=>$rowProperties['Data Form'],                
                'telephone'=>$rowProperties['Telephone'],
                'company'=>$rowProperties['Company'],
                'address'=>$rowProperties['Address'],
                'first_name'=>$rowProperties['Nama Depan'],
                'last_name'=>$rowProperties['Nama Belakang'],
                'position'=>$rowProperties['Jabatan'],
                'email'=>$rowProperties['Email'],
                'handphone'=>$rowProperties['Handphone'],
                'sales'=>$rowProperties['ID Sales'],
                'area'=>$rowProperties['Area'],
                'produk'=>$rowProperties['Produk'],
                'desc'=>$rowProperties['Desc'],
                'input'=>$rowProperties['Input'],
                'active'=>1
            ]
            );
        });
        return back()->with('success','Data Berhasil di Import');    
    }
}
