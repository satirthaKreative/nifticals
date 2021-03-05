<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\ProductModel;
use App\Model\ProductImageModel;

class ProductController extends Controller
{
    //
    public function showPage(Request $request)
    {
        return view('backend.pages.product.product');
    }

    public function showProduct(Request $request)
    {
        $getProduct = ProductModel::get();
        if(count($getProduct) > 0)
        {
            $html['product_full_data'] = "";
            $i = 0;
            foreach($getProduct as $getP)
            {

                // product name
                $product_name = ucwords($getP->product_name);

                // product image 
                $product_thumbnails = '<img src="'.str_replace('public','storage',asset($getP->product_thumbnail)).'"  alt="no image" width="100px" height="100px" />';
                
                // admin action
                if($getP->admin_status == "active"){
                    $cateAdminStatus = "<span class='text-success'><i class='fa fa-check'></i> Active</span>";
                }else if($getP->admin_status == "inactive"){
                    $cateAdminStatus = "<span class='text-danger'><i class='fa fa-times'></i> Deactive</span>";
                }else{
                    $cateAdminStatus = "<span class='text-danger'><i class='fa fa-times'></i> No defined</span>";
                }

                // admin action status
                if($getP->admin_status == "active")
                {
                    $btn_html = "<button type='button' class='btn btn-danger btn-sm' onclick=change_action(".$getP->id.",'inactive')>Deactive</button>&nbsp;&nbsp;&nbsp;<button type='button' class='btn btn-info btn-sm' onclick=edit_action(".$getP->id.")>Edit</button>&nbsp;&nbsp;&nbsp;<button type='button' class='btn btn-danger btn-sm' onclick=del_action(".$getP->id.")>Delete</button>";
                }
                else if($getP->admin_status == "inactive")
                {
                    $btn_html = "<button type='button' class='btn btn-success btn-sm' onclick=change_action(".$getP->id.",'active')>Active</button>&nbsp;&nbsp;&nbsp;<button type='button' class='btn btn-info btn-sm' onclick=edit_action(".$getP->id.")>Edit</button>&nbsp;&nbsp;&nbsp;<button type='button' class='btn btn-danger btn-sm' onclick=del_action(".$getP->id.")>Delete</button>";
                }
                else
                {
                    $btn_html = "<button type='button' class='btn btn-success btn-sm' onclick=change_action(".$getP->id.",'active')>Active</button> | <button type='button' class='btn btn-danger btn-sm' onclick=change_action(".$getP->id.",'inactive')>Deactive</button> | <button type='button' class='btn btn-info btn-sm' onclick=edit_action(".$getP->id.")>Edit</button> | <button type='button' class='btn btn-danger btn-sm' onclick=del_action(".$getP->id.")>Delete</button>";
                }

                $html['category_full_data'] .= "<tr>
                            <td>".++$i."</td>
                            <td>".$product_thumbnails."</td>
                            <td>".$product_name."<br></td>
                            <td>".$cateAdminStatus."</td>
                            <td>".$btn_html."</td>
                        </tr>";
                $html['action_type'] = "yes";
            }
        }
        else
        {
            $html['action_type'] = "no";
            $html['product_full_data'] = "<tr><td colspan='7'><center class='text-danger'><i class='fa fa-times'></i> No Data Available</center></td></tr>";
        }

        echo json_encode($html);
    }
}