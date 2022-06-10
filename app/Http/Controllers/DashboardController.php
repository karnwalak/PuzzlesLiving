<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Contact;
use App\Models\Testimonial;
use App\Models\Banner;
use Validator;
class DashboardController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about_page');
    }
    public function contact()
    {
        $contact = Contact::get();
        return view('contact_page')->with('contacts', $contact);
    }
    public function addcontact(Request $request)
    {
        // return $request;
        $validator = Validator::make($request->all(), [
            'contact' => 'required',
            'email' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status'=>'error', 'errors'=>$validator->errors()]);
        }else{
            if($request->pid==''){
                $contact = new Contact;
            }else{
                $contact = Contact::find($request->pid);
            }
            $contact->contact = $request->contact;
            $contact->email = $request->email;
            if($contact->save()){
                return response()->json(['status'=>'success','message'=>'Contact Added Successfully!']);
            }else{
                return response()->json(['status'=>'error','error'=>'Something went wrong!']);
            }
        }
    }
    public function banner()
    {
        return view('banner')->with('banner', Banner::get());
    }
    public function addmainbanner(Request $request){
        $validator = Validator::make($request->all(), [
            'type' => 'required|not_in:0',
            'banner' => 'required',
            'position' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status'=>'error', 'errors'=>$validator->errors()]);
        }else{
            $image = $request->file('banner');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = 'images/main_top_banner';
            $image->move($destinationPath, $image_name);
            $banner = new Banner;
            $banner->type = $request->type;
            $banner->banner = $image_name;
            $banner->link = url('/').'/'.$destinationPath.'/'.$image_name;
            $banner->position = $request->position;
            if($banner->save()){
                return response()->json(['status'=>'success','message'=>'Banner Added Successfully!']);
            }else{
                return response()->json(['status'=>'error','error'=>'Something went wrong!']);
            }
        }
    }
    public function deletemainbanner(Request $request){
        $banner = Banner::find($request->id);
        if($banner->delete()){
            return response()->json(['status'=>'success','message'=>'Banner Deleted Successfully!']);
        }else{
            return response()->json(['status'=>'error','error'=>'Something went wrong!']);
        }
    }
    // public function middle_banner()
    // {
    //     return view('middle_banner');
    // }
    public function testimonials()
    {
        return view('add_testimonials')->with('testimonials', Testimonial::get());
    }
    public function addtestimonial(Request $request)
    {
        // return $request;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status'=>'error', 'errors'=>$validator->errors()]);
        }else{
            $testimonial = new Testimonial;
            $image = $request->file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = 'images/testimonials';
            $image->move($destinationPath, $image_name);
            $testimonial->link = url('/').'/'.$destinationPath.'/'.$image_name;
            $testimonial->image = $image_name;
            $testimonial->name = $request->name;
            $testimonial->description = $request->description;
            $testimonial->title = $request->title;
            if($testimonial->save()){
                return response()->json(['status'=>'success','message'=>'Testimonial Added Successfully!']);
            }else{
                return response()->json(['status'=>'error','error'=>'Something went wrong!']);
            }
        }
    }
    public function deletetestimonial(Request $request){
        $testimonial = Testimonial::find($request->id);
        if($testimonial->delete()){
            return response()->json(['status'=>'success','message'=>'Testimonial Deleted Successfully!']);
        }else{
            return response()->json(['status'=>'error','error'=>'Something went wrong!']);
        }
    }
    public function edittestimonial($id){
        $testimonial = Testimonial::find($id);
        return view('edit_testimonials')->with('testimonial', $testimonial);
    }

    public function updatetestimonial(Request $request){
        // return $request;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            // 'image' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status'=>'error', 'errors'=>$validator->errors()]);
        }else{
            $testimonial = Testimonial::find($request->pid);
            $image = $request->file('image');
            if(isset($image)){
                $image_name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = 'images/testimonials';
                $image->move($destinationPath, $image_name);
                $testimonial->link = url('/').'/'.$destinationPath.'/'.$image_name;
                $testimonial->image = $image_name;
            }
            $testimonial->name = $request->name;
            $testimonial->description = $request->description;
            $testimonial->title = $request->title;
            if($testimonial->save()){
                return response()->json(['status'=>'success','message'=>'Testimonial Updated Successfully!']);
            }else{
                return response()->json(['status'=>'error','error'=>'Something went wrong!']);
            }
        }
    }

    public function enquiries(){
        return view('enquiries');
    }

    public function callbacksrequested(){
        return view('requetedcallbacks');
    }

    public function accomodations(){
        return view('accomodation');
    }
}
