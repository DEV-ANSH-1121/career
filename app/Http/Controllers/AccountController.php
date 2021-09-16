<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AccountRelation;

class AccountController extends Controller
{
    /**
     * Add Account
     *
     * @return  view
    */
    public function addAccount()
    {
        $users = User::all();
        return view('addAccount',['users' => $users]);
    }

    /**
     * Store Account
     * @param  Request  $request
     *
     * @return  view
    */
    public function storeAccount(Request $request)
    {
        $data = $request->all();

        if(isset($data['introducer_id']) && $data['introducer_id'] != 0){

            $beneficiaryCount = AccountRelation::where('introducer_id',$data['introducer_id'])->count();

            if(($beneficiaryCount % 2) != 0){

                $data['benificiary_id'] = AccountRelation::where('account_id',$data['introducer_id'])->value('introducer_id');

            }else{
               $data['benificiary_id'] = $data['introducer_id'];
            }

        }else {
            unset($data['benificiary_id'],$data['introducer_id']);
        }

        $user = User::create($data);
        $data['account_id'] = $user->id;
        AccountRelation::create($data);

        return redirect('/create-account');
    }
}
