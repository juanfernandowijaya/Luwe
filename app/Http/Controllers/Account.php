<?php

namespace App\Http\Controllers;

use App\OrderHistory;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Account extends Controller
{
    public function index()
    {
        return view('account/dashboard');
    }
    public function test()
    {
        return view('account/home');
    }
    public function AccountIndex()
    {
        return view('UserMenu/userSetting');
    }
    public function UserEdit(Request $request)
    {
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $file = $request->file('image');
                $file_name = time() . "_" . $file->getClientOriginalName();
                $file_path = base_path() . '/public/storage/assets_home/images/UserImage';
                $request->file('image')->move($file_path, $file_name);
                DB::table('users')->where('id', $request->name_id)->update([
                    'name' => $request->name,
                    'image' => $file_name,
                ]);
            }
        } else {
            DB::table('users')->where('id', $request->name_id)->update([
                'name' => $request->name,
            ]);
        }
        return redirect('user/account');
    }
    public function Order(Request $request)
    {
        $request->validate([
            'order_desc' => 'required',
            'order_type' => 'required',
            'order_payment' => 'required',
            'order_address' => 'required',
        ]);
        $order = new OrderHistory;
        $order->user_id = $request->user_id;
        $order->user_order_desc = $request->order_desc;
        $order->user_order_type =  $request->order_type;
        $order->user_order_paymentmethod = $request->order_payment;
        $order->user_order_address = $request->order_address;
        $order->save();
        return redirect('/rekomendasi')->with('status', 'Order Success !!');
    }
}
