<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Contact;
use App\Models\Accomodation;
use App\Models\AccomadationImage;
use App\Models\About;
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
        return view('about_page')->with('data',About::get());
    }
    public function addaboutpage(Request $request){
        $validator = Validator::make($request->all(), [
            'description' => 'required',
            'why_us' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status'=>'error','errors'=>$validator->errors()]);
        }
        if($request->pid == ''){
            $data = new About;
        }else{
            $data = About::find($request->pid);
        }
        $data->description = $request->description;
        $data->why_us = $request->why_us;
        if($data->save()){
            return response()->json(['status'=>'success','message'=>'About page content added successfully!']);
        }else{
            return response()->json(['status'=>'error','message'=>'Something went wrong']);
        }
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
        // return $request->banner;
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
            $banner = new Banner;
            $banner->type = $request->type;
            $banner->banner = $image_name;
            $banner->link = url('/').'/'.$destinationPath.'/'.$image_name;
            $banner->position = $request->position;
            if($banner->save()){
                $image->move($destinationPath, $image_name);
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
            $testimonial->link = url('/').'/'.$destinationPath.'/'.$image_name;
            $testimonial->image = $image_name;
            $testimonial->name = $request->name;
            $testimonial->description = $request->description;
            $testimonial->title = $request->title;
            if($testimonial->save()){
                $image->move($destinationPath, $image_name);
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
                $testimonial->link = url('/').'/'.$destinationPath.'/'.$image_name;
                $testimonial->image = $image_name;
            }
            $testimonial->name = $request->name;
            $testimonial->description = $request->description;
            $testimonial->title = $request->title;
            if($testimonial->save()){
                $image->move($destinationPath, $image_name);
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
        return view('accomodation')->with('accomodations', Accomodation::get());
    }

    public function addaccomodation(Request $request){
       return view('addaccomodation');
    }

    public function postAccomodation(Request $request)
    {
        // return $request;
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
            'distance' => 'required',
            'rent' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['status'=>'error', 'errors'=>$validator->errors()]);
        }else{
            $res = new Accomodation;
            $res->name = $request->name;
            $res->address = $request->address;
            $res->distance = $request->distance;
            $res->rent = $request->rent;
            $res->description = $request->description;
            $res->features = implode(',',$request->feature);
           
            if($res->save()){
                $mid = Accomodation::max('id');
                if($request->hasfile('image'))
                {
                    foreach($request->file('image') as $key => $file)
                    {
                        $img_save = new AccomadationImage;
                        $destinationPath = 'images/accomodations';
                        $name =  $key.'-'.time().'.'.$file->getClientOriginalExtension();
                        $img_save->accomadation_id = $mid;
                        $img_save->image = $name;
                        $img_save->link = url('/').'/'.$destinationPath.'/'.$name;
                        if($img_save->save()){
                            $file->move($destinationPath, $name);
                        }
                    }
                }
                return response()->json(['status'=>'success','message'=>'Accomodation Added Successfully!']);
            }else{
                return response()->json(['status'=>'error','error'=>'Something went wrong!']);
            }
        }
    }

    public function deleteaccomodation(Request $request){
        $accomodation = Accomodation::find($request->id);
        if($accomodation->delete()){
            return response()->json(['status'=>'success','message'=>'Accomodation Deleted Successfully!']);
        }else{
            return response()->json(['status'=>'error','error'=>'Something went wrong!']);
        }
    }

    public function editaccomodation($id){
        $accomodation = Accomodation::with('image')->find($id);
        // return $accomodation->image;
        return view('editaccomodation')->with('data', $accomodation);
    }

    public function updateAccomodation(Request $request){
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
            'distance' => 'required',
            'rent' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['status'=>'error', 'errors'=>$validator->errors()]);
        }else{
            $res = Accomodation::find($request->pid);
            $img = AccomadationImage::where('accomadation_id', $request->pid)->get();
            $res->name = $request->name;
            $res->address = $request->address;
            $res->distance = $request->distance;
            $res->rent = $request->rent;
            $res->description = $request->description;
            $res->features = implode(',',$request->feature);
            if($res->save()){
                if(isset($request->image)){
                    foreach($img as $key => $value){
                        foreach($request->image as $kk => $file){
                            if($key == $kk){
                                $img_save = AccomadationImage::find($value->id);
                                $destinationPath = 'images/accomodations';
                                $name =  $kk.'-'.time().'.'.$file->getClientOriginalExtension();
                                $img_save->image = $name;
                                $img_save->link = url('/').'/'.$destinationPath.'/'.$name;
                                if($img_save->save()){
                                    $file->move($destinationPath, $name);
                                }
                            }
                        }
                    }
                }
                return response()->json(['status'=>'success','message'=>'Accomodation Updated Successfully!']);
            }else{
                return response()->json(['status'=>'error','error'=>'Something went wrong!']);
            }
        }
    }
}
