@extends('admin.layouts.master')

@section('head-tag')
    <title>کالاها</title>
@endsection

@section('content')

    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        کالاها
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.market.product.create') }}" class="btn btn-info btn-sm">ایجاد کالای جدید </a>
                    <div class="max-width-16-rem">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                    </div>
                </section>

                <section class="table-responsive">
                    <table class="table table-striped table-hover h-150px">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>نام کالا</th>
                                <th> تصویر کالا</th>
                                <th> قیمت</th>
                                <th>وزن </th>
                                <th>دسته </th>
                                <th>فرم</th>
                                <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                            <tr>
                                <th>2</th>
                                <td>گوشی ایفون ۱۲</td>
                                <td><img src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt=""
                                        class="max-height-2rem"></td>
                                <td>12,000,000 تومان</td>
                                <td>۱ کیلو</td>
                                <td>کالا الکترونیکی</td>
                                <td>اندازه نمایشگر</td>
                                <td class="width-8-rem text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-success dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-tools"></i> عملیات
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-images"></i> گالری</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-ul"></i> قرم کالا</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-edit"></i> ویرایش</a></li>
                                            <li>
                                                <form action="" method="POST">
                                                    <button type="submit" class="dropdown-item">
                                                        <i class="fa fa-window-close"></i> حذف
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>گوشی ایفون ۱۲</td>
                                <td><img src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt=""
                                        class="max-height-2rem"></td>
                                <td>12,000,000 تومان</td>
                                <td>۱ کیلو</td>
                                <td>کالا الکترونیکی</td>
                                <td>اندازه نمایشگر</td>
                                <td class="width-8-rem text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-success dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-tools"></i> عملیات
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-images"></i> گالری</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-ul"></i> قرم کالا</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-edit"></i> ویرایش</a></li>
                                            <li>
                                                <form action="" method="POST">
                                                    <button type="submit" class="dropdown-item">
                                                        <i class="fa fa-window-close"></i> حذف
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>گوشی ایفون ۱۲</td>
                                <td><img src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt=""
                                        class="max-height-2rem"></td>
                                <td>12,000,000 تومان</td>
                                <td>۱ کیلو</td>
                                <td>کالا الکترونیکی</td>
                                <td>اندازه نمایشگر</td>
                                <td class="width-8-rem text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-success dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-tools"></i> عملیات
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-images"></i> گالری</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-list-ul"></i> قرم کالا</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-edit"></i> ویرایش</a></li>
                                            <li>
                                                <form action="" method="POST">
                                                    <button type="submit" class="dropdown-item">
                                                        <i class="fa fa-window-close"></i> حذف
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>

            </section>
        </section>
    </section>

@endsection