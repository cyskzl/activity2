<?php
/**
 * 后台路由管理
 */

Route::get('/dashboard', function () {
//    return view('welcome');
    return view('admin.index.index');
});
