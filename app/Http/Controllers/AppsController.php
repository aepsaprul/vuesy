<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppsController extends Controller
{
  public function calendar()
  {
    return view('apps-calendar');
  }
  public function chat()
  {
    return view('apps-chat');
  }
  public function fileManager()
  {
    return view('apps-file-manager');
  }
  public function gallery()
  {
    return view('apps-gallery');
  }
  public function kanbanBoard()
  {
    return view('apps-kanban-board');
  }
}
