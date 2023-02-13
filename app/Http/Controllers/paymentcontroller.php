<?php

namespace App\Http\Controllers;
use session;
Use Stripe;
use Image;
use File;
use Illuminate\Http\Request;
use App\Models\Payment;

class paymentcontroller extends Controller
{
    public function index()
    {
       return view('student_DBD.stripe');
    }


    public function store(Request $request)
    {   
        Stripe\Stripe::setApiKey('sk_test_51MOxl8HlsHgZHE1GugeZOcyybZHJOPVgZm3jMQWnhIoGlgiq29d0PDKXh7Mtdgsn1HXd06S7vYRYxHwxApR44mGl000NFIBvmh');
        // $groupid=group::all();
       
          
        
        $charge = Stripe\Charge::create ([
                "amount" => 154 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                // "group_id"=> $groupid->id,
                "description" => "Test payment from itsolutionstuff.com." 
        ]);
        //dd($charge);
      
        if($charge->status == 'succeeded'){
            return redirect()->route('redirect')->with('message','payment successfully done');
        }
       

    }
    public function onpage(){
        return view('student_DBD.stripe');
    }

    public function payin(){
        return view('student_DBD.payment_details');

    }

    public function paystore(Request $request){

        $payment = new Payment();
        $request->validate([
            'st_group_id'=>'required',
            'transection_one'=>'required',
            'image_one'=>'required'
           
        ]); 
        $payment->st_group_id= $request->st_group_id;
        $payment->transection_one= $request->transection_one;
        $payment->transection_two= $request->transection_two;
        if ($request->image_one) {
            $image = $request->file('image_one');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/projectimage/' . $imageName);
            Image::make($image)->save($location);
            $payment->image_one = $imageName;
            // $product->save();
            // return redirect()->route('dashboard');
        }
        if ($request->image_two) {
            $image = $request->file('image_two');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/projectimage/' . $imageName);
            Image::make($image)->save($location);
            $payment->image_two = $imageName;
            // $product->save();
            // return redirect()->route('dashboard');
        }
      
        $payment->save();
        return redirect()->route('pay_details')->with('message','Thank You to submit your payment details and authoriged by admin ,please wait sometimes');

    

    }

    public function payshow(){
        $payshow=Payment::orderby('id', 'asc')->get();
        return view('backend.pages.payment.payshow', compact('payshow'));



    }
    public function payedit($id){
        $payedit=Payment::find($id);
        return view('backend.pages.payment.paymanage',compact('payedit'));

    }

    public function payupdate(Request $request, $id){

        
            $payupdate =Payment::find($id);
            $payupdate->status= $request->status;
            $payupdate->update();
            return redirect()->route('managepay');
       

    }
    
    public function paydelete($id){
        $delete=Payment::find($id);
        $delete->delete();
        return redirect()->route('managepay');
    }
    

   
}