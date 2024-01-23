<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\AboutH;
use Illuminate\Http\Request;

class AboutusController extends Controller
{

    public function view(){

        $data['allData']=AboutH::all();
        return view('backend.about.view-about', $data);

    }
    public function add()
    {
        return view('backend.about.add-about');

    }
    public function store(Request $request){
        $this->validate($request,[

            'desc'=>'required|unique:wdes,desc',
        ]);

        $data =new AboutH();
        $data->desc=$request->desc;


        $data->save();
        session()->flash('success',' About Head update success');
        return redirect()->route('abouts.view');
    }
    public function edit($id){

        $editData=AboutH::find($id);
        return view('backend.about.add-about',compact('editData'));
    }

    public function update(Request $request,$id){

        $data =AboutH::find($id);
        $this->validate($request,[

            'desc'=>'required|unique:wdes,desc,'.$data->id
        ]);


        $data->desc=$request->desc;

        $data->save();
        session()->flash('success',' About update success');
        return redirect()->route('abouts.view');
    }

  //Details About US
    //
    public function aview(){

        $data['allData']=AboutH::all();
        return view('backend.about.view-about-details', $data);

    }

    public function aadd()
    {
        return view('backend.about.add-about-details');

    }


}
