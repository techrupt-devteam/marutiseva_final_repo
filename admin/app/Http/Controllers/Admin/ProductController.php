<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Product;
use Session;
use Sentinel;
use Validator;
use DB;
class ProductController extends Controller
{
    public function __construct(Product $Product)
    {      
        $data                          = [];
        $this->base_model              = $Product; 
        $this->title                   = "Product";
        $this->url_slug                = "product"; 
        $this->folder_path             = "admin/product/";
    }

    public function index()
    {
        $arr_data = [];
        $data     = $this->base_model->get();
     //   dd($data);
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
        $validator = Validator::make($request->all(), [
                'car' => 'required',
                'link'=>'required',  
                'menu_image'=>'required',
                'car_image'=>'required',
               
          
            ]);

        if ($validator->fails()) 
        {
            return $validator->errors()->all();
        }
      
        $is_exist = $this->base_model->where(['car'=>$request->input('car')])->count();

        if($is_exist)
        {
            Session::flash('error', "Product already exist!");
            return \Redirect::back();
        }
        

        $arr_data                  = [];
        $arr_data['car']           = $request->input('car');
        $arr_data['link']          = $request->input('link');
      
      
        if(isset($_FILES["menu_image"]["name"]) && !empty($_FILES["menu_image"]["name"]))
        {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < 18; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            $file = $request->file('menu_image');
            $img_name = $randomString."-".$file->getClientOriginalName();
            $arr_data['menu_image']  = $img_name;
        }

        if(isset($_FILES["car_image"]["name"]) && !empty($_FILES["car_image"]["name"]))
        {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < 18; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            $file2 = $request->file('car_image');
            $img_name2 = $randomString."-".$file2->getClientOriginalName();
            $arr_data['car_image']  = $img_name2;
        }

        $product = $this->base_model->create($arr_data);
        if(!empty($product))
        {    
            $product_id = $product->id;
            $failed = 0;  
            $duration_flag = $request->input('duration_flag');
            for($d=1; $d <= $duration_flag; $d++) 
            { 
                if(!empty($request->input('variant'.$d))){
                  $arr_data1                     = [];
                  $arr_data1['varient']          = ucfirst($request->input('variant'.$d));
                  $arr_data1['car']              = $product_id;
                  $arr_data1['color']            = $request->input('color'.$d);
                  $arr_data1['on_road_price']    = $request->input('price'.$d);
                  $product_variant_add  = \DB::table('product')->insert($arr_data1); 
                  if($product_variant_add)
                  {
                    $failed = 0;
                  }else
                  {
                    $failed++;
                  }
                }
            }

            if($failed==0)
            {

                $destinationPath = "upload/menu_image/";
                $file->move($destinationPath,$img_name);

                $destinationPath2 = "upload/car_image/";
                $file2->move($destinationPath2,$img_name2);

                Session::flash('success', 'Success! Record added successfully.');
                return \Redirect::to('admin/manage_product');
            }
            else
            {
                Session::flash('error', "Error! Oop's something went wrong.");
                return \Redirect::back();
            }


           
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
        $data     = $this->base_model->where(['id'=>$id])->first();
        $product_data     = \DB::table('product')->where(['car'=>$id])->get();
        if(!empty($data))
        {
            $arr_data = $data->toArray();
        }   

        $data['data']         = $arr_data;
        $data['product_data'] = $product_data;
        $data['page_name']    = "Edit";
        $data['url_slug']     = $this->url_slug;
        $data['title']        = $this->title;
        
        return view($this->folder_path.'edit',$data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'car'        => 'required',
            'link'       => 'required',  
            

        ]);

        if ($validator->fails()) 
        {
            return $validator->errors()->all();
        }

        $is_exist = $this->base_model->where('id','<>',$id)->where(['car'=>$request->input('car')])
                    ->count();
        if($is_exist)
        {
            Session::flash('error', "product already exist!");
            return \Redirect::back();
        }
        
        $arr_data                  = [];
        $arr_data['car']           = $request->input('car');
        $arr_data['link']          = $request->input('link');
      

        if(isset($_FILES["menu_image"]["name"]) && !empty($_FILES["menu_image"]["name"]))
        {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < 18; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            $file = $request->file('menu_image');
            $img_name = $randomString."-".$file->getClientOriginalName();
            $arr_data['menu_image']  = $img_name;
        }
        else
        {
            $arr_data['menu_image']  = $request->input('old_menu_image');
        }

        if(isset($_FILES["car_image"]["name"]) && !empty($_FILES["car_image"]["name"]))
        {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < 18; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            $file2 = $request->file('car_image');
            $img_name2 = $randomString."-".$file2->getClientOriginalName();
            $arr_data['car_image']  = $img_name2;
        }
         else
        {
            $arr_data['car_image']  = $request->input('old_car_img');
        }

        $module_update = $this->base_model->where(['id'=>$id])->update($arr_data);

        $failed = 0;  
        $duration_flag = $request->input('duration_flag');
        $old_car_delete  = \DB::table('product')->where(['car'=>$id])->delete();
        for($d=1; $d <= $duration_flag; $d++) 
        { 
            if(!empty($request->input('variant'.$d))){
             $arr_data1                     = [];
             $arr_data1['varient']          = ucfirst($request->input('variant'.$d));
             $arr_data1['car']              = $id;
             $arr_data1['color']            = $request->input('color'.$d);
             $arr_data1['on_road_price']    = $request->input('price'.$d);

              
              
             /* if($request->input('pid'.$d))
              {
                 $product_data = \DB::table('product')->where('id','=',$request->input('pid'.$d))->update($arr_data1);

                $failed = 0;
              }
              else
              {*/
                $product_data1  = \DB::table('product')->insert($arr_data1); 
                if($product_data1)
                {
                    $failed = 0;
                }else
                {
                  $failed++;
                }
              /*}*/

             
            }
        }


        //update then old image delete code 

        if(isset($_FILES["menu_image"]["name"]) && !empty($_FILES["menu_image"]["name"]))
        {   
            $destinationPath = "upload/menu_image/";
            $file->move($destinationPath,$img_name);
        }
        
        if(isset($_FILES["car_image"]["name"]) && !empty($_FILES["car_image"]["name"]))
        {   
            $destinationPath2 = "upload/car_image/";
            $file2->move($destinationPath2,$img_name2);         
        }

        Session::flash('success', 'Success! Record update successfully.');
        return \Redirect::to('admin/manage_product');
        
    }

    public function delete($id)
    {
        $this->base_model->where(['id'=>$id])->delete();
        Session::flash('success', 'Success! Record deleted successfully.');
        return \Redirect::back();
    
    } 


}
