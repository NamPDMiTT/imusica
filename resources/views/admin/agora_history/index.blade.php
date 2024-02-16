@extends('admin.layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ $pageTitle }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin/">{{trans('admin/main.dashboard')}}</a>
                </div>
                <div class="breadcrumb-item">{{ $pageTitle }}</div>
            </div>
        </div>

        <div class="section-body">
            <section class="card">
                <div class="card-header">
                    <div class="text-right">
                        <a href="/admin/agora_history/excel" class="btn btn-primary">{{ trans('admin/main.export_excel') }}</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped text-center font-14">

                            <tbody><tr>
                                <th class="text-left">{{ trans('admin/main.course') }}</th>
                                <th class="text-left">{{ trans('admin/main.live_session') }}</th>
                                <th class="text-center">{{ trans('admin/main.session_duration') }}</th>
                                <th class="text-center">{{ trans('admin/main.start_date') }}</th>
                                <th class="text-center">{{ trans('admin/main.end_date') }}</th>
                                <th class="text-center">{{ trans('admin/main.meeting_duration') }}</th>
                            </tr>


                            <tr>
                                <td class="text-left">New In-App Live System</td>
                                <td class="text-left">First sesions</td>
                                <td>0:03</td>
                                <td>4 Mar 2022 | 05:53</td>
                                <td>4 Mar 2022 | 05:55</td>
                                <td class="text-success">
                                    0:02
                                </td>
                            </tr>

                            <tr>
                                <td class="text-left">New In-App Live System</td>
                                <td class="text-left">Introduction Session</td>
                                <td>0:03</td>
                                <td>4 Mar 2022 | 06:02</td>
                                <td>4 Mar 2022 | 06:06</td>
                                <td class="text-danger">
                                    0:04
                                </td>
                            </tr>
                            </tbody></table>
                    </div>
                </div>

                <div class="card-footer text-center">

                </div>
            </section>
        </div>
    </section>
@endsection

@push('scripts_bottom')

@endpush
