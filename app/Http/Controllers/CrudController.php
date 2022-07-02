<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use PDO;
use PhpParser\Node\Stmt\Foreach_;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    function customerCrud(){
        // $data = User::all();
        $data = User::simplepaginate(5);
        return view('customercrud' , ['customers'=>$data]);
        
    }
    function addCustomer(){
        
        return view('addcustomer');
        
    }
    
    public function storeCustomer(Request $req){
        $customer = new User();
        $customer->name = $req->name;
        $customer->email = $req->email;
        $customer->password = Hash::make($req->password);
        $customer->save();
        $msg = "Data Entered Successfully";
        $req->session()->put('msg',$msg);
       

        return redirect('customercrud');

    }

    public function editCustomer($id=null){
        $editCustomer = User::find($id);
        return view('editcustomer', ["customers"=>$editCustomer]);
    }

    public function updateCustomer(Request $req , $id){
        $customer = User::find($id);
        $customer->name = $req->name;
        $customer->email = $req->email;
        $customer->password = Hash::make($req->password);
        $customer->save();
        $msg = "Data Updated Successfully";
        $req->session()->put('msg',$msg);
       

        return redirect('customercrud');

    }
    public function deleteCustomer($id=null){
        $deleteCustomer = User::find($id);
        $deleteCustomer->delete();

        $msg = "Data Deleted Successfully";
        session()->put('msg',$msg);
       

        return redirect('customercrud');

    }
}
