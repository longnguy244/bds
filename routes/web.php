<?php

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

// Route::get('/', function () {
//     return view('web.pages.home');
// });

// Route::get('admin1', function () {
//     return view('admin.pages.home');
// });

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/', function(){
        return redirect('/login');
    });
    Route::resource('home', 'Admin\HomeController');
    Route::resource('customer', 'Admin\KhachHangController');
    Route::resource('position', 'Admin\ChucVuController');
    Route::resource('staff', 'Admin\NhanVienController');
    Route::resource('city', 'Admin\ThanhPhoController');
    Route::resource('dist', 'Admin\QuanHuyenController');
    Route::resource('ward', 'Admin\PhuongXaController');
    Route::resource('loaibds', 'Admin\LoaiBDSController');
    Route::resource('bds', 'Admin\BDSController');
    Route::resource('motabds', 'Admin\MoTaBDSController');
    Route::resource('baiviet', 'Admin\BaiVietController');
    Route::resource('hopdong', 'Admin\HopDongController');
    Route::resource('phieuthu', 'Admin\PhieuThuController');
    Route::resource('phieuchi', 'Admin\PhieuChiController');
    Route::resource('bienbanhopdong', 'Admin\BienBanController');
    
    Route::group(['prefix' => 'chusohuu'], function(){
        Route::get('/danh-sach','Admin\ChuSoHuuController@getList')->name('get.list.chusohuu');
        Route::get('/them-moi','Admin\ChuSoHuuController@getCreate')->name('get.create.chusohuu');
        Route::post('/them-moi','Admin\ChuSoHuuController@postCreate')->name('post.create.chusohuu');
        Route::get('/chinh-sua/{id}','Admin\ChuSoHuuController@getEdit')->name('get.edit.chusohuu');
        Route::post('/chinh-sua/{id}','Admin\ChuSoHuuController@postEdit')->name('post.edit.chusohuu');
    });

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'Web\HomeController@index');
Route::get('vechungtoi', 'Web\VeChungToiController@index');
Route::get('batdongsan', 'Web\BDSController@index')->name('batdongsan');
Route::get('baiviet', 'Web\BaiVietController@index');
Route::get('lienhe', 'Web\LienHeController@index');
Route::get('/{aliasBDS}', 'Web\HomeController@detailBDS');
Route::get('/baiviet/{aliasBV}', 'Web\BaiVietController@detailBV');



Route::get('web/phanhoi',function()
    {
        return view('web.pages.phanhoi');
    })->name('web.phanhoi');


Route::get('/admin/pdf/{id}','Admin\pdfController@pdf')->name('down.hopdong');
Route::get('/admin/hopdong/pdf/{id}','Admin\HopDongController@PDF_HopDong')->name('print.hopdong');

// Feedback pages
    Route::group(['prefix' => 'admin'], function(){
        Route::get('/feedback/index','Admin\FeedbackController@getIndex')->name('get.feedback.index');
        Route::get('/feedback/create','Admin\FeedbackController@getCreate')->name('get.feedback.create');
        Route::post('/feedback/create','Admin\FeedbackController@postCreate')->name('post.feedback.create');
        Route::get('/feedback/edit/{id}','Admin\FeedbackController@getEdit')->name('get.feedback.edit');
        Route::post('/feedback/edit/{id}','Admin\FeedbackController@postEdit')->name('post.feedback.edit');
        Route::get('/feedback/delete/{id}','Admin\FeedbackController@getDelete')
            ->name('feedback.delete');

    });