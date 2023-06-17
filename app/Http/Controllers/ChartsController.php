<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartsController extends Controller
{
  public function area()
  {
    return view('charts-area');
  }
  public function bar()
  {
    return view('charts-bar');
  }
  public function boxplot()
  {
    return view('charts-boxplot');
  }
  public function bubble()
  {
    return view('charts-bubble');
  }
  public function candlestick()
  {
    return view('charts-candlestick');
  }
  public function column()
  {
    return view('charts-column');
  }
  public function heatmap()
  {
    return view('charts-heatmap');
  }
  public function line()
  {
    return view('charts-line');
  }
  public function mixed()
  {
    return view('charts-mixed');
  }
  public function pie()
  {
    return view('charts-pie');
  }
  public function polararea()
  {
    return view('charts-polararea');
  }
  public function radar()
  {
    return view('charts-radar');
  }
  public function radialbar()
  {
    return view('charts-radialbar');
  }
  public function scatter()
  {
    return view('charts-scatter');
  }
  public function timeline()
  {
    return view('charts-timeline');
  }
  public function treemap()
  {
    return view('charts-treemap');
  }
}
