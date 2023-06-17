<?php

use App\Http\Controllers\AppsController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\ExtendedController;
use App\Http\Controllers\UiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\VuesyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [App\Http\Controllers\VuesyController::class, 'login'])->name('home');
Route::get('/login', [App\Http\Controllers\VuesyController::class, 'login'])->name('login');
Route::get('/register', [App\Http\Controllers\VuesyController::class, 'register'])->name('register');
// Route::resource('users', [UserController::class]);

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
  // Route::get('{any}', [App\Http\Controllers\VuesyController::class, 'index'])->name('index');
  // Route::resource('users',UserController::class);
  Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
  Route::get('users', [UserController::class, 'index'])->name('users-index');   
  Route::get('delete-users/{id}', [UserController::class, 'destroy'])->name('delete-user');   
  Route::get('users-edit/{id}', [UserController::class, 'edit'])->name('users-edit');   
  Route::post('users-update/{id}', [UserController::class, 'update'])->name('user-update');

  // apps
  Route::get('apps-calendar', [AppsController::class, 'calendar'])->name('apps.calendar');
  Route::get('apps-chat', [AppsController::class, 'chat'])->name('apps.chat');
  Route::get('apps-file-manager', [AppsController::class, 'fileManager'])->name('apps.fileManager');
  Route::get('apps-gallery', [AppsController::class, 'gallery'])->name('apps.gallery');
  Route::get('apps-kanban-board', [AppsController::class, 'kanbanBoard'])->name('apps.kanbanBoard');

  // charts
  Route::get('charts-area', [ChartsController::class, 'area'])->name('charts.area');
  Route::get('charts-bar', [ChartsController::class, 'bar'])->name('charts.bar');
  Route::get('charts-boxplot', [ChartsController::class, 'boxplot'])->name('charts.boxplot');
  Route::get('charts-bubble', [ChartsController::class, 'bubble'])->name('charts.bubble');
  Route::get('charts-candlestick', [ChartsController::class, 'candlestick'])->name('charts.candlestick');
  Route::get('charts-column', [ChartsController::class, 'column'])->name('charts.column');
  Route::get('charts-heatmap', [ChartsController::class, 'heatmap'])->name('charts.heatmap');
  Route::get('charts-line', [ChartsController::class, 'line'])->name('charts.line');
  Route::get('charts-mixed', [ChartsController::class, 'mixed'])->name('charts.mixed');
  Route::get('charts-pie', [ChartsController::class, 'pie'])->name('charts.pie');
  Route::get('charts-polararea', [ChartsController::class, 'polararea'])->name('charts.polararea');
  Route::get('charts-radar', [ChartsController::class, 'radar'])->name('charts.radar');
  Route::get('charts-radialbar', [ChartsController::class, 'radialbar'])->name('charts.radialbar');
  Route::get('charts-scatter', [ChartsController::class, 'scatter'])->name('charts.scatter');
  Route::get('charts-timeline', [ChartsController::class, 'timeline'])->name('charts.timeline');
  Route::get('charts-treemap', [ChartsController::class, 'treemap'])->name('charts.treemap');
  
  // extended
  Route::get('extended-lightbox', [ExtendedController::class, 'lightbox'])->name('extended.lightbox');
  Route::get('extended-notifications', [ExtendedController::class, 'notifications'])->name('extended.notifications');
  Route::get('extended-rangeslider', [ExtendedController::class, 'rangeslider'])->name('extended.rangeslider');
  Route::get('extended-rating', [ExtendedController::class, 'rating'])->name('extended.rating');
  Route::get('extended-sweet-alert', [ExtendedController::class, 'sweetAlert'])->name('extended.sweetAlert');
  Route::get('extended-swiperslider', [ExtendedController::class, 'swiperslider'])->name('extended.swiperslider');
  
  // UI
  Route::get('ui-alerts', [UiController::class, 'alerts'])->name('ui.alerts');
  Route::get('ui-buttons', [UiController::class, 'buttons'])->name('ui.buttons');
  Route::get('ui-cards', [UiController::class, 'cards'])->name('ui.cards');
  Route::get('ui-carousel', [UiController::class, 'carousel'])->name('ui.carousel');
  Route::get('ui-colors', [UiController::class, 'colors'])->name('ui.colors');
  Route::get('ui-dropdowns', [UiController::class, 'dropdowns'])->name('ui.dropdowns');
  Route::get('ui-general', [UiController::class, 'general'])->name('ui.general');
  Route::get('ui-grid', [UiController::class, 'grid'])->name('ui.grid');
  Route::get('ui-images', [UiController::class, 'images'])->name('ui.images');
  Route::get('ui-modals', [UiController::class, 'modals'])->name('ui.modals');
  Route::get('ui-offcanvas', [UiController::class, 'offcanvas'])->name('ui.offcanvas');
  Route::get('ui-placeholders', [UiController::class, 'placeholders'])->name('ui.placeholders');
  Route::get('ui-progressbars', [UiController::class, 'progressbars'])->name('ui.progressbars');
  Route::get('ui-tabs-accordions', [UiController::class, 'tabsAccordions'])->name('ui.tabsAccordions');
  Route::get('ui-typography', [UiController::class, 'typography'])->name('ui.typography');
  Route::get('ui-utilities', [UiController::class, 'utilities'])->name('ui.utilities');
  Route::get('ui-video', [UiController::class, 'video'])->name('ui.video');

  Route::get('roles', [RoleController::class, 'index'])->name('show-roles');   
  Route::get('roles-create', [RoleController::class, 'create'])->name('create-roles');   
  Route::post('store-roles', [RoleController::class, 'store'])->name('store-roles');   
  Route::get('/roles', [RoleController::class, 'index'])->name('roles');   
});


