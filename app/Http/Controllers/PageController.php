<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Hiển thị Trang chủ
     */
    public function index()
    {
        return view('pages.home');
    }

    /**
     * Hiển thị Trang Dự án
     * Truyền một mảng danh sách dự án sang View
     */
    public function projects()
    {
        $projects = [
            [
                'name' => 'Hệ thống Quản lý Nhân sự',
                'description' => 'Xây dựng bằng Laravel và MySQL, quản lý hơn 100 nhân viên.',
                'year' => '2023'
            ],
            [
                'name' => 'Website Thương mại Điện tử',
                'description' => 'Tích hợp thanh toán online và giỏ hàng thời gian thực.',
                'year' => '2024'
            ],
            [
                'name' => 'Ứng dụng Portfolio Cá nhân',
                'description' => 'Trang web giới thiệu bản thân sử dụng Master Layout và Route Group.',
                'year' => '2024'
            ]
        ];

        // Trả về view và kèm theo biến $projects
        return view('pages.projects', compact('projects'));
    }

    /**
     * Hiển thị Trang Liên hệ
     */
    public function contact()
    {
        return view('pages.contact');
    }
}