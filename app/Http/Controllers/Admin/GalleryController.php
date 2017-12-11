<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Model\Gallery;
use App\Model\Category;
use App\Form;
use Validator;

class GalleryController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }

  public function index()
      {   
         $cat = Category::where('parent_id','=', '0')->pluck('title', 'id');
           // $gallery=MultipleUpload::get();
           return view('admin.gallery',['cat'=>$cat, 'subcat'=>array()]);
      }

       public function getsub(Request $r)
      {
          $main_category_id = $r->parent_id;
          $subcat = Category::where('parent_id','=', $main_category_id)->get();
          foreach ($subcat as $s) {
              echo "<option value='".$s->id."'>".$s->title."</option>";
          }
      }

      public function create()
      {
        $cat = Category::where('id','=','7')->where('parent_id','=', '0')->orderBy('parent_id', 'asc')->get();
        $subcat = Category::where('parent_id','!=', '0')->orderBy('parent_id', 'asc')->get();
        return view('admin.gallery_create', array('cat' => $cat, 'subcat'=>$subcat));
      }
    public function store(Request $request)
      { 
        // var_dump($request->all()); exit;
        $title=$request['title'];
        $short_description=$request['short_description'];

        $images=array();
        if($input=$request['files'])
        {
            foreach($input as $file)
            {
              $name = $file->getClientOriginalName();
              $file->move('upload/gallery/', $name);
              $images[] = $name;
            }
        }
        $data = array(
                'main_category_id' => $request->main_category_id,
                'sub_category_id' => ($request->sub_category_id)?$request->sub_category_id : '0',
                'title'  => $product_name,
                'short_description' => $short_description,
                'file'=> implode(",",$images)
                );
        // var_dump($data); 
            Gallery::insert($data);
            return view('admin.gallery');    
      }
  // public function show()
  //   {
  //     $output=MultipleUpload::get();
  //     return view('photo.ajaxshow')->with('output',$output);
  //   }
  // public function edit($id)
  // {
  //   $output=MultipleUpload::where('id','=',$id)->get();
  //   //dd($output);
  //   return view('photo.edit')->with('data',$output);
  // }
  // public function update(Request $request){
  //       $remained_photo = $request['remained_photo'][0];  
  //       //echo $remained_photo;
  //        if($input=$request['files'])
  //       {
  //           foreach($input as $file)
  //           {
  //             $name = $file->getClientOriginalName();
  //             $file->move('image', $name);
  //             $remained_photo=$remained_photo.",".$name;
  //           }
  //       }
  //       //dd($remained_photo);
  //        $insert_data = array(
  //             'name'  => $request['product_name'],
  //             'price'   => $request['product_price'],
  //             'image'=>$remained_photo
  //             );
  //         MultipleUpload::where('id', $request['id'])->update($insert_data);
  //        return view('photo.show');
  // }
}
