<?php

namespace Site_Activ_Aqua\Controllers;


use Site_Activ_Aqua\Models\AdminModel;

class AdminController extends Controller
{

    public function index()
    {
        $admins = new AdminModel();

        $list = $admins->findAll();

        $this->render('admin/admin', ['list' => $list]);
    }

    public function transferAdmin($id)
    {
        
        $admins = new AdminModel();
        $admins->transfer($id);

            header("Location:index.php?controller=admin&action=index");
       
            $this->render('admin/admin');
    }
      
}
