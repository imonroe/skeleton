<?php
namespace imonroe\skeleton\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use imonroe\crps\Aspect;
use imonroe\crps\AspectFactory;
use imonroe\crps\AspectType;
use imonroe\crps\Subject;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class SkeletonController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function demo()
  {
      return 'Demo.';
  }

    

}