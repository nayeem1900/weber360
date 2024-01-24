<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\AboutDet;
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

        $data['allData']=AboutDet::all();
        return view('backend.about.view-about-details', $data);

    }

    public function aadd()
    {
        return view('backend.about.add-about-details');

    }
    public function astore(Request $request){
        $this->validate($request,[

            'desc'=>'required|unique:about_h_s,desc',
        ]);

        $data =new AboutDet();
        $data->desc=$request->desc;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/web360_image'), $filename);
            $data['image'] = $filename;
        }

        $data->save();
        session()->flash('success',' AboutDescriptionupdate success');
        return redirect()->route('aboutd.view');
    }

    public function aedit($id){

        $editData=AboutDet::find($id);
        return view('backend.wde.add-wde',compact('editData'));
    }
    public function aupdate(Request $request,$id){

        $data =AboutDet::find($id);
        $this->validate($request,[

            'desc'=>'required|unique:about_dets,desc,'.$data->id
        ]);


        $data->desc=$request->desc;

        if ($request->file('image')) {

            $file = $request->file('image');


            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/web360_image'), $filename);
            $data['h_image'] = $filename;
        }

        $data->save();
        session()->flash('success',' Description update success');
        return redirect()->route('aboutd.view');
    }
    public function adelete($id){

        $data=AboutDet::find($id);
        if(file_exists('upload/web360_image/' .$data->image)AND !empty($data->image)){
            unlink('public/upload/web360_image/' .$data->image);
        }
        $data->delete();

        session()->flash('success', 'Description has deleted Successfully');
        return redirect()->route('aboutd.view');
    }

}
