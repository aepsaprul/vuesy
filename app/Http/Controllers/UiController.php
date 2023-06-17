<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiController extends Controller
{
  public function alerts()
  {
    return view('ui-alerts');
  }
  public function buttons()
  {
    return view('ui-buttons');
  }
  public function cards()
  {
    return view('ui-cards');
  }
  public function carousel()
  {
    return view('ui-carousel');
  }
  public function colors()
  {
    return view('ui-colors');
  }
  public function dropdowns()
  {
    return view('ui-dropdowns');
  }
  public function general()
  {
    return view('ui-general');
  }
  public function grid()
  {
    return view('ui-grid');
  }
  public function images()
  {
    return view('ui-images');
  }
  public function modals()
  {
    return view('ui-modals');
  }
  public function offcanvas()
  {
    return view('ui-offcanvas');
  }
  public function placeholders()
  {
    return view('ui-placeholders');
  }
  public function progressbars()
  {
    return view('ui-progressbars');
  }
  public function tabsAccordions()
  {
    return view('ui-tabs-accordions');
  }
  public function typography()
  {
    return view('ui-typography');
  }
  public function utilities()
  {
    return view('ui-utilities');
  }
  public function video()
  {
    return view('ui-video');
  }
}
