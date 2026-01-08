@extends('admin.layouts.master')

@section('head-tag')
<title>اطلاعیه ایمیلی</title>
@endsection

@section('content')


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                   اطلاعیه ایمیلی
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.notify.email.create') }}" class="btn btn-info btn-sm">ایجاد اطلاعیه ایمیلی</a>
                <div class="max-width-16-rem">
                    <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                </div>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>عنوان اطلاعیه</th>
                            <th>تاریخ ارسال	</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>فروش ویژه بهاری		</td>
                            <td>24 اردیبهشت 99	</td>
                            <td class="width-16-rem text-center">
                                <a href="#" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> ویرایش</a>
                                <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash-alt"></i> حذف</button>
                            </td>
                        </tr>
                         <tr>
                            <th>2</th>
                            <td>فروش ویژه بهاری		</td>
                            <td>24 اردیبهشت 99	</td>
                            <td class="width-16-rem text-center">
                                <a href="#" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> ویرایش</a>
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
