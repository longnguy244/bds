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








    Route::group(['prefix' => 'admin'], function(){
    // Feedback pages
        Route::get('/feedback/index','Admin\FeedbackController@getIndex')->name('get.feedback.index');
        Route::get('/feedback/create','Admin\FeedbackController@getCreate')->name('get.feedback.create');
        Route::post('/feedback/create','Admin\FeedbackController@postCreate')->name('post.feedback.create');
        Route::get('/feedback/edit/{id}','Admin\FeedbackController@getEdit')->name('get.feedback.edit');
        Route::post('/feedback/edit/{id}','Admin\FeedbackController@postEdit')->name('post.feedback.edit');
        Route::get('/feedback/delete/{id}','Admin\FeedbackController@getDelete')
            ->name('feedback.delete');

    //Hoadon
        Route::get('/hoadon/index','Admin\HoaDonController@getIndex')->name('get.hoadon.index');
        Route::get('/hoadon/create','Admin\HoaDonController@getCreate')->name('get.hoadon.create');
        Route::post('/hoadon/create','Admin\HoaDonController@postCreate')->name('post.hoadon.create');
        Route::get('/hoadon/edit/{id}','Admin\HoaDonController@getEdit')->name('get.hoadon.edit');
        Route::post('/hoadon/edit/{id}','Admin\HoaDonController@postEdit')->name('post.hoadon.edit');
        Route::get('/hoadon/delete/{id}','Admin\HoaDonController@getDelete')
            ->name('hoadon.delete');

    //Tieu chi
        Route::get('tieuchi/list','Admin\TieuChiController@getIndex')->name('get.tieuchi.index');
        Route::get('tieuchi/create','Admin\TieuChiController@getCreate')->name('get.tieuchi.create');
        Route::post('tieuchi/create','Admin\TieuChiController@postCreate')->name('post.tieuchi.create');
        Route::get('tieuchi/edit/{id}','Admin\TieuChiController@getEdit')->name('get.tieuchi.edit');
        Route::post('tieuchi/edit/{id}','Admin\TieuChiController@postEdit')->name('post.tieuchi.edit');
        //httt
        Route::get('hinhthucthanhtoan/list','Admin\HTTTController@getList')->name('get.hinhthucthanhtoan.index');
        Route::get('hinhthucthanhtoan/create','Admin\HTTTController@getCreate')->name('get.hinhthucthanhtoan.create');
        Route::post('hinhthucthanhtoan/create','Admin\HTTTController@postCreate')->name('post.hinhthucthanhtoan.create');
        Route::get('hinhthucthanhtoan/edit/{id}','Admin\HTTTController@getEdit')->name('get.hinhthucthanhtoan.edit');
        Route::post('hinhthucthanhtoan/edit/{id}','Admin\HTTTController@postEdit')->name('post.hinhthucthanhtoan.edit');




    //Xoa
        Route::get('delete/hinhanhbds/{id}','Admin\HomeController@getDeleteHinhAnh');

    });



//PDF
    //Hopdong
    Route::get('/admin/pdf/{id}','Admin\pdfController@pdf')->name('down.hopdong');
    Route::get('/admin/hopdong/pdf/{id}','Admin\HopDongController@PDF_HopDong')->name('print.hopdong');
    //Phieuthu
    Route::get('/admin/pdf_phieuthu/{id}','Admin\pdfController@pdf_phieu_thu')->name('down.phieuthu');
    Route::get('/admin/phieuthu/pdf/{id}','Admin\PhieuThuController@pdf_phieu_thu')->name('print.phieuthu');
    //Phieuchi
    Route::get('/admin/pdf_phieuchi/{id}','Admin\pdfController@pdf_phieu_chi')->name('down.phieuchi');
    Route::get('/admin/phieuchi/pdf/{id}','Admin\PhieuChiController@pdf_phieu_chi')->name('print.phieuchi');
    //Bienban
    Route::get('/admin/pdf_bienban/{id}','Admin\pdfController@pdf_bien_ban')->name('down.bienban');
    Route::get('/admin/bienban/pdf/{id}','Admin\BienBanController@PDF_BienBan')->name('print.bienban');

    Route::get('/admin/pdf_hoadon/{id}','Admin\pdfController@pdf_hoa_don')->name('down.hoadon');
    Route::get('/admin/hoadon/pdf/{id}','Admin\HoaDonController@pdf_hoa_don')->name('print.hoadon');


//Chi tiet bds
    Route::group(['prefix' => 'admin'], function(){
        Route::get('/chitiet/create','Admin\MotaBDSController@create')->name('get.mota.create');
    });


//seacrh
    Route::group(['prefix' => 'index'], function(){
        Route::get('/search','Web\BDSController@getSearch')->name('get.search');
    });

