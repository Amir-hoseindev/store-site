@extends('admin.layouts.master')

@section('head-tag')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<title>نظرات</title>
@endsection

@section('content')

  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h4>
                 نظرات
                </h4>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
               
                <div class="max-width-16-rem">
                    <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                </div>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>کد کاربر</th>
                            <th>نویسنده نظر</th>
                            <th>کد کالا</th>
                            <th>کالا</th>
                            <th>وضعیت</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>4783679</td>
                            <td>طاها رحمانی</td>
                            <td>9587934</td>
                            <td>کابل USB</td>
                            <td>در انتظار تایید</td>
                            <td class="max-width-16-rem text-center">
                                <a href="{{ route('admin.market.comment.show') }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> نمایش</a>
                                <button class="btn btn-success btn-sm" type="submit"><i class="fa fa-check"></i> تایید</button>
                            </td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>4783679</td>
                            <td>طاها رحمانی</td>
                            <td>9587934</td>
                            <td>کابل USB</td>
                            <td>در انتظار تایید</td>
                            <td class="max-width-16-rem text-center">
                                <a href="{{ route('admin.market.comment.show') }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> نمایش</a>
                                <button class="btn btn-warning btn-sm" type="submit"><i class="fa fa-clock"></i> عدم تایید</button>
                            </td>
                        </tr>
                    
                    </tbody>
                </table>
            </section>

        </section>
    </section>
</section>

@endsection
