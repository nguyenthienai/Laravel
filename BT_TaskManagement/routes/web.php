<?php

// Tạo 1 nhóm route với tiền tố customer
Route::prefix('customer')->group(function () {
    Route::get('index', function () {
        return view('modules.customer.index');
    });

    Route::get('create', function () {
        $display_result = false;
        return view('modules.customer.create',compact(['display_result']));
    });

    Route::post('store', function (illuminate\http\Request $request) {
        $status="saved ok";
        $display_result = true;
        return view('modules.customer.create',compact(['status','display_result']));
    });

    Route::get('{id}/show', function () {
        // Hiển thị thông tin chi tiết khách hàng có mã định danh id

    });

    Route::get('{id}/edit', function () {
        // Hiển thị Form chỉnh sửa thông tin khách hàng
    });

    Route::patch('{id}/update', function () {
        // xử lý lưu dữ liệu thông tin khách hàng được chỉnh sửa thông qua PATCH từ form
    });

    Route::delete('{id}', function () {
        // Xóa thông tin dữ liệu khách hàng
    });
});
