<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\models\HouseManager;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class Housem extends Controller
{
    public function manager()
    {
        return view('dashboard.manager');
    }


    public function addhousemdb(Request $request)
    {
       $request->validate([
        'fname'=>'required|unique:housem,fname',
        'idnum'=>'required|unique:housem,idnum',
        'phone'=>'required|unique:housem,phone',
        'whatsnum'=>'required|unique:housem,whatsnum',
        'loc'=>'required|:housem,loc',
        'county'=>'required|:housem,county',
        'gen'=>'required|:housem,gen',
        'email'=>'required|:unique:housem,email',
        'pri'=>'required|:housem,pri',
        'sec'=>'required|:housem,sec',
            'coll'=>'required|:housem,coll',
                'pass'=>'required|:housem,pass',
                'femp'=>'required|:housem,femp', 
                    'pay'=>'required|:housem,pay', 
                       'uni'=>'required|:housem,uni',
                         'inter'=>'required|:housem,inter',  
                             'jobtype'=>'required|:housem,jobtype',
                                  'status'=>'required|:housem,status',
                                      'client id'=>'required|:housem,client id', 
       ]);
            // Create a new housemanager

        $data = $request->all();
        
        Housem::Create([
            'fname' => $data['fname'],
            'idnum' => $data['idnum'],
            'phone' => $data['phone'],
            'whatsnum' =>$data['whatsnum'],
            'loc' => $data['loc'],
            'county' => $data['county'],
            'gen' => $data['gen'],
            'email'=>$data['email'],
            'pri'=>$data['pri'],
            'sec'=>$data['sec'],
            'coll'=>$data['coll'],
            'pass'=>$data['pass'],
            'femp'=>$data['femp'],
            'pay'=>$data['pay'],
            'uni'=>$data['uni'],
            'inter'=>$data['inter'],
            'jobtype'=>$data['jobtype'],
            'status'=>$data['status'],
            'jobtype'=>$data['jobtype'],
        ]);



        Alert::success('Housemanager added successfully!');
        return back()->with('success', 'Housemanager added successfully!');
    }
}