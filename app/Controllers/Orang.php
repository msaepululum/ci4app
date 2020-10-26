<?php

namespace App\Controllers;

use App\Models\OrangModel;
use CodeIgniter\HTTP\Request;

class Orang extends BaseController
{
  protected $OrangModel;

  public function __construct()
  {
    $this->OrangModel = new OrangModel();
  }
  public function index()
  {

    $current_page = $this->request->getVar('page_orang') ? $this->request->getVar('page_orang') : 1;

    $keyword = $this->request->getVar('keyword');
    if ($keyword) {
      $orang = $this->OrangModel->search($keyword);
    } else {
      $orang = $this->OrangModel;
    }

    $data = [
      'title' => 'Orang',
      // 'orang' => $this->OrangModel->findAll()
      'orang' => $this->OrangModel->paginate(6, 'orang'),
      'pager' => $this->OrangModel->pager,
      'currentPage' => $current_page
    ];

    return view('orang/index', $data);
  }


  //--------------------------------------------------------------------

}
