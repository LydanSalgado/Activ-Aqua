<?php

namespace Site_Activ_Aqua\Controllers;

use Site_Activ_Aqua\Models\HistoryModel;


class HistoryController extends Controller
{
    public function index()

    {
        $history = new HistoryModel();

        $list = $history->findAll();
    
        $this->render('admin/history', ['list' => $list]);
    }
    
}