<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Offerslider;
use Session;
use Sentinel;
use Validator;
use DB;
class OffersliderController extends Controller
{
    public function __construct(Offerslider $Offerslider)
    {      
        $data                          = [];
        $this->base_model              = $Offerslider; 
        $this->title                   = "Offer Slider";
        $this->url_slug                = "offerslider"; 
        $this->folder_path             = "admin/sevaoffer/";
    }

    public function index()
    {
        $arr_data = [];
        $data     = $this->base_model->get();
        if(!empty($data))
        {
            $arr_data = $data->toArray();
        }
        $data['data']      = $arr_data;
        $data['page_name'] = "Manage";
        $data['url_slug']  = $this->url_slug;
        $data['title']     = $this->title;
        return view($this->folder_path.'index',$data);
    }
 
    public function add()
    {
       $data['page_name'] = "Add";
       $data['title']     = $this->title;
       $data['url_slug']  = $this->url_slug;
       return view($this->folder_path.'add',$data);
    
    }

    public function store(Request $request)
    {
       
        $is_exist = $this->base_model->where(['slider_name'=>$request->input('slider_name')])->count();

        if($is_exist)
        {
            Session::flash('error', "slider already exist!");
            return \Redirect::back();
        }
        

        $arr_data                  = [];
        $arr_data['slider_name']   = $request->input('slider_name');
        $arr_data['link']          = $request->input('link');
     
    
        if(isset($_FILES["slider_img"]["name"]) && !empty($_FILES["slider_img"]["name"]))
        {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < 18; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            $file = $request->file('slider_img');
            $img_name = $randomString."-".$file->getClientOriginalName();
            $arr_data['slider_img']  = $img_name;
        }

        $slider = $this->base_model->create($arr_data);
        if(!empty($slider))
        {   
            $destinationPath = "upload/seva_offer_banner/";
            $file->move($destinationPath,$img_name);
            Session::flash('success', 'Success! Record added successfully.');
            return \Redirect::to('admin/manage_offerslider');
        }
        else
        {
            Session::flash('error', "Error! Oop's something went wrong.");
            return \Redirect::back();
        }
    }

    public function edit($id)
    {
        $arr_data = [];
        $data     = $this->base_model->where(['slider_id'=>$id])->first();
        if(!empty($data))
        {
            $arr_data = $data->toArray();
        }   
       
        $data['data']      = $arr_data;
        $data['page_name'] = "Edit";
        $data['url_slug']  = $this->url_slug;
        $data['title']     = $this->title;
        return view($this->folder_path.'edit',$data);
    }

    public function update(Request $request, $id)
    {
        /*$validator = Validator::make($request->all(), [
                'slider_name' => 'required',
                'link'        => 'required',  
                'order_no'    => 'required',
            ]);
        if ($validator->fails()) 
        {
            return $validator->errors()->all();
        }*/
        $is_exist = $this->base_model->where('slider_id','<>',$id)->where(['slider_name'=>$request->input('slider_name')])
                    ->count();
        if($is_exist)
        {
            Session::flash('error', "slider already exist!");
            return \Redirect::back();
        }
        
        $arr_data                  = [];
        $arr_data['slider_name']   = $request->input('slider_name');
        $arr_data['link']          = $request->input('link');
 

        if(isset($_FILES["slider_img"]["name"]) && !empty($_FILES["slider_img"]["name"]))
        {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < 18; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            $file = $request->file('slider_img');
            $img_name = $randomString."-".$file->getClientOriginalName();
            $arr_data['slider_img']  = $img_name;

        }
        else
        {
            $arr_data['slider_img']  = $request->input('old_slider_img');
        }

        
        $module_update = $this->base_model->where(['slider_id'=>$id])->update($arr_data);
        
        if(isset($_FILES["slider_img"]["name"]) && !empty($_FILES["slider_img"]["name"]))
        {   
            $destinationPath = "upload/seva_offer_banner/";
            $file->move($destinationPath,$img_name);
            unlink($destinationPath."".$request->input('old_slider_img'));
        }



        Session::flash('success', 'Success! Record update successfully.');
        return \Redirect::to('admin/manage_offerslider');
        
    }

    public function delete($id)
    {
        $this->base_model->where(['slider_id'=>$id])->delete();
        Session::flash('success', 'Success! Record deleted successfully.');
        return \Redirect::back();
    } 

    public function update_order_no(Request $request,$id)
    {
        $order_no = $request->input('order_no');   
        $arr_data['order_no'] = $order_no; 
        $this->base_model->where(['slider_id'=>$id])->update($arr_data);
        Session::flash('success', 'Success! Record updated successfully.');
        return \Redirect::back();
 
        

    }
}
