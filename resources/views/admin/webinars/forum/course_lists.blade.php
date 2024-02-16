@extends('admin.layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ $pageTitle }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin/">{{trans('admin/main.dashboard')}}</a>
                </div>
                <div class="breadcrumb-item">{{ $pageTitle}}</div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped font-14 ">
                                    <tbody><tr>
                                        <th>ID</th>
                                        <th class="text-left">Course</th>
                                        <th class="text-left">Instructor</th>
                                        <th>Questions</th>
                                        <th width="120">Actions</th>
                                    </tr>

                                    <tr class="text-center">
                                        <td>2008</td>
                                        <td width="18%" class="text-left">
                                            <a class="text-primary mt-0 mb-1 font-weight-bold" href="https://lms.rocket-soft.org/course/New-Learning-Page">New Learning Page</a>
                                        </td>

                                        <td class="text-left">Robert Ransdell</td>

                                        <td class="">1</td>


                                        <td width="200" class="btn-sm">
                                            <a href="/admin/webinars/2008/forums" target="_blank" class="btn-transparent btn-sm text-primary mt-1 mr-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Questions">
                                                <i class="fa fa-question"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>2010</td>
                                        <td width="18%" class="text-left">
                                            <a class="text-primary mt-0 mb-1 font-weight-bold" href="https://lms.rocket-soft.org/course/New-Update-Features">New Update Features</a>
                                        </td>

                                        <td class="text-left">Kate Williams</td>

                                        <td class="">2</td>


                                        <td width="200" class="btn-sm">
                                            <a href="/admin/webinars/2010/forums" target="_blank" class="btn-transparent btn-sm text-primary mt-1 mr-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Questions">
                                                <i class="fa fa-question"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>2022</td>
                                        <td width="18%" class="text-left">
                                            <a class="text-primary mt-0 mb-1 font-weight-bold" href="https://lms.rocket-soft.org/course/Installment-feature">Installment and Secure Host</a>
                                        </td>

                                        <td class="text-left">Jessica Wray</td>

                                        <td class="">0</td>


                                        <td width="200" class="btn-sm">
                                            <a href="/admin/webinars/2022/forums" target="_blank" class="btn-transparent btn-sm text-primary mt-1 mr-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Questions">
                                                <i class="fa fa-question"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody></table>
                            </div>
                        </div>

                        <div class="card-footer text-center">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts_bottom')

@endpush
