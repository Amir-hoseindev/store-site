@extends('admin.layouts.master')

@section('head-tag')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<title>روش های ارسال</title>
@endsection

@section('content')
<section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                    روش های ارسال
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.market.delivery.create') }}" class="btn btn-info btn-sm">ایجاد روش ارسال جدید </a>
                <div class="max-width-16-rem">
                    <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                </div>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نام روش ارسال</th>
                            <th>هزینه ارسال</th>
                            <th>زمان ارسال</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>پست پیشتاز	</td>
                            <td>26,000 تومان</td>
                            <td>حداکثر دو روز کاری</td>
                            <td class="width-16-rem text-center">
                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> ویرایش</a>
                                <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash-alt"></i> حذف</button>
                            </td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>پست پیشتاز	</td>
                            <td>26,000 تومان</td>
                            <td>حداکثر دو روز کاری</td>
                            <td class="width-16-rem text-center">
                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> ویرایش</a>
                                <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash-alt"></i> حذف</button>
                            </td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>پست پیشتاز	</td>
                            <td>26,000 تومان</td>
                            <td>حداکثر دو روز کاری</td>
                            <td class="width-16-rem text-center">
                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> ویرایش</a>
                                <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash-alt"></i> حذف</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </section>

        </section>
    </section>
</section>

@endsection
