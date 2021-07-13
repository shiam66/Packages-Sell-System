<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribe;

class SubscriptionController extends Controller
{
//    public function subscribe(){
//        return view('frontEnd.subscribe.subscribeContent');
//    }

    public function subscribeNew(Request $request){
        $amount = $request->input('amount');
        $period = $request->input('period');
        $packageName = $request->input('packageName');

        return view('frontEnd.subscribe.subscribeContent')->with('amount', $amount)->with('period', $period)->with('packageName', $packageName);
    }

    public function subscribeAdd(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'companyName'=>'required',
            'phoneNumber'=>'required',
            'email'=>'required|unique:subscribes',
            'address'=>'required',
            'userPhoto'=>'required',
            'nidCard'=>'required',
        ]);

        //For User Photo
        $userPhoto = $request->file('userPhoto');
        $name = $userPhoto->getClientOriginalName();
        $uploadedFile =date("Ymd"). time().'_'.$name;
        $uploadPath = 'public/subscribeUserImages/';
        $userPhoto->move($uploadPath,$uploadedFile);
        $imageUrl = $uploadedFile;

        //For User Photo
        $nidCard = $request->file('nidCard');
        $nameNid = $nidCard->getClientOriginalName();
        $uploadedFile2 =date("Ymd"). time().'_'.$nameNid;
        $uploadPath2 = 'public/subscribeNidCard/';
        $nidCard->move($uploadPath2,$uploadedFile2);
        $imageUrl2 = $uploadedFile2;

        $this->saveSubscribeInfo($request, $imageUrl, $imageUrl2);

        //return $request->all();

        return redirect('/')->with('message','Your info Save Successfully');

    }

    protected function saveSubscribeInfo(Request $request, $imageUrl, $imageUrl2){
        $subscribe = new Subscribe();

        $subscribe->name = $request->name;
        $subscribe->companyName = $request->companyName;
        $subscribe->phoneNumber = $request->phoneNumber;
        $subscribe->email = $request->email;
        $subscribe->address = $request->address;
        $subscribe->pageName = $request->pageName;
        $subscribe->tradeLicence = $request->tradeLicence;
        $subscribe->userPhoto = $imageUrl;
        $subscribe->nidCard = $imageUrl2;
        $subscribe->packageName = $request->pageName;
        $subscribe->period = $request->period;
        $subscribe->amount = $request->amount;
        $subscribe->status = 1;
        $subscribe->save();
    }
}
