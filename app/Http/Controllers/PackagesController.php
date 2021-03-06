<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
class PackagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view(){
        $packages = Package::all();
        /* alert()->question('Are you sure you want to delete this Package?','You won\'t be able to revert this!')
        ->showConfirmButton('Yes! Delete it', '#3085d6')
        ->showCancelButton('Cancel', '#aaa')->reverseButtons(); */
        return view('backend.packages.list', compact('packages'));
    }

    public function create(){
        return view('backend.packages.create');
    }

    public function store(Request $request){
       // dd($request);
        $validator = Validator::make($request->all(),[
            'name' => 'required|unique:packages|max:255',
            'type' => 'required',
            'imageLimit' => 'required',
            'videouploadlimit' => 'required',
            'videolengthlimit' => 'required',
        ],
        $messages = [
            'required' => 'The :attribute field is required.',
            'name.unique' => 'Package Name already exist.',
        ]
    );

        if ($validator->fails()) {
        return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
    }
        $totalLimit = $request->imageLimit + $request->videouploadlimit;

        Package::create([
            'name' => $request->name,
            'type' => $request->type,
            'listing_limit' => $totalLimit,
            'image_upload_limit' => $request->imageLimit,
            'video_upload_limit' => $request->videouploadlimit,
            'video_length_limit' => $request->videolengthlimit,
        ]);

        return back()->with('toast_success','Package created successfully');
    }

    public function edit($id){
        //dd($package);
     $package =  Package::find($id);
     //dd($package);
        return view('backend.packages.edit', compact('package'));
    }

    public function update(Request $request, $id){
     //   dd($request);
    // $package =  Package::find($id);
    $validated = $request->validate([
        'name' => 'required|max:255',
        'type' => 'required',
        'imageLimit' => 'required',
        'videouploadlimit' => 'required',
        'videolengthlimit' => 'required',
    ]);


    $totalLimit = $request->imageLimit + $request->videouploadlimit;

     Package::where('id',$id)->update([
        'name' => $request->name,
        'type' => $request->type,
        'listing_limit' => $totalLimit,
        'image_upload_limit' => $request->imageLimit,
        'video_upload_limit' => $request->videouploadlimit,
        'video_length_limit' => $request->videolengthlimit,
     ]);
        return redirect()->route('package.list')->with('toast_success','Package updated successfully');
    }

    public function delete($id){

     $package =  Package::find($id);



     //   $package->delete();
     return redirect()->route('package.list')->with('toast_success','Package has been successfully deleted');
    }
}