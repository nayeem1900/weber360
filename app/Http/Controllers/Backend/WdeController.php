<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Wde;

class WdeController extends Controller
{
public function view(){

    $data['allData']=Wde::all();
    return view('backend.wde.view-wde', $data);

}
    public function add()
    {

        return view('backend.wde.add-wde');

    }

    public function store(Request $request){
        $this->validate($request,[

            'desc'=>'required|unique:wdes,desc',
        ]);

        $data =new Wde();
        $data->desc=$request->desc;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/image'), $filename);
            $data['image'] = $filename;
        }

        $data->save();
        session()->flash('success',' WDE update success');
        return redirect()->route('wdes.view');
    }
    public function edit($id){

        $editData=Wde::find($id);
        return view('backend.wde.add-wde',compact('editData'));
    }
    public function update(Request $request,$id){

        $data =Wde::find($id);
        $this->validate($request,[

            'desc'=>'required|unique:wdes,desc,'.$data->id
        ]);


        $data->desc=$request->desc;

        if ($request->file('image')) {

            $file = $request->file('image');


            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/images'), $filename);
            $data['h_image'] = $filename;
        }

        $data->save();
        session()->flash('success',' WDE update success');
        return redirect()->route('wdes.view');
    }
    public function delete($id){

        $data=Wde::find($id);
        if(file_exists('upload/image/' .$data->image)AND !empty($data->image)){
            unlink('public/upload/image/' .$data->image);
        }
        $data->delete();

        session()->flash('success', 'WDE has deleted Successfully');
        return redirect()->route('wdes.view');
    }

}
