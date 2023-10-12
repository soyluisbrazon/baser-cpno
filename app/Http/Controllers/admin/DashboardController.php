<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Index
  */
  public function index() {
    return view('admin.modules.dashboard.index');
  }
}
