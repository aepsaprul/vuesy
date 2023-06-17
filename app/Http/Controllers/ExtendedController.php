<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtendedController extends Controller
{
  public function lightbox()
  {
    return view('extended-lightbox');
  }
  public function notifications()
  {
    return view('extended-notifications');
  }
  public function rangeslider()
  {
    return view('extended-rangeslider');
  }
  public function rating()
  {
    return view('extended-rating');
  }
  public function sweetAlert()
  {
    return view('extended-sweet-alert');
  }
  public function swiperslider()
  {
    return view('extended-swiperslider');
  }
}
