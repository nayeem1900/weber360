<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Backend\ClientP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{

    public function cview(){

        $data['allData']=ClientP::all();


        return view ('backend.client_p.view-client-p', $data);


    }
    public function cadd(){

        return view('backend.client_p.add-client-p');

    }
    public function cstore(Request $request){

        $data =new ClientP();
        $data->created_by=Auth::user()->id;
        if ($request->file('image')) {

            $file = $request->file('image');


            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/web360_image'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        session()->flash('success',' Data save success');
        return redirect()->route('clogos.view');
    }
    public function cedit($id){

        $editData=ClientP::find($id);
        return view('backend.client_p.add-client-p',compact('editData'));
    }
    public function update(Request $request,$id){

        $data =ClientP::find($id);
        $data->updated_by=Auth::user()->id;

        if ($request->file('image')) {

            $file = $request->file('image');
            @unlink(public_path('upload/web360_image/' . $data->image));

            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/logo_images'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        session()->flash('success',' Client Image update success');
        return redirect()->route('clogos.view');

    }
    public function cdelete($id){

        $logo=ClientP::find($id);

        if(file_exists('public/upload/web360_image/' .$logo->image)AND !empty($logo->image)){
            unlink('public/upload/web360_image/' .$logo->image);
        }
        $logo->delete();
        return redirect()->route('clogos.view')->with('success', 'Data Deleted successfully');
    }
}
