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
            <section class="card">
                <div class="card-header">

                    <div class="text-right">
                        <a href="/admin/regions/new?type=country" class="btn btn-primary">New</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped text-center font-14">

                            <tbody><tr>
                                <th class="text-left">Title</th>

                                <th class="text-center">Provinces</th>

                                <th class="text-center">Instructor</th>
                                <th class="text-center">Date</th>
                                <th class="text-center">Actions</th>
                            </tr>


                            <tr>
                                <td>United States</td>

                                <td>2</td>

                                <td>2</td>

                                <td>2022 Mar 2 | 03:13</td>

                                <td>
                                    <a href="/admin/regions/18/edit" class="btn-transparent text-primary mr-2">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <button class="btn-transparent text-primary trigger--fire-modal-1" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/regions/18/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>France</td>

                                <td>2</td>

                                <td>4</td>

                                <td>2022 Mar 1 | 17:54</td>

                                <td>
                                    <a href="/admin/regions/16/edit" class="btn-transparent text-primary mr-2">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <button class="btn-transparent text-primary trigger--fire-modal-2" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/regions/16/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>Saudi Arabia</td>

                                <td>2</td>

                                <td>2</td>

                                <td>2022 Feb 28 | 05:54</td>

                                <td>
                                    <a href="/admin/regions/20/edit" class="btn-transparent text-primary mr-2">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <button class="btn-transparent text-primary trigger--fire-modal-3" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/regions/20/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>Chad</td>

                                <td>2</td>

                                <td>2</td>

                                <td>2022 Feb 28 | 05:48</td>

                                <td>
                                    <a href="/admin/regions/19/edit" class="btn-transparent text-primary mr-2">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <button class="btn-transparent text-primary trigger--fire-modal-4" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/regions/19/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>India</td>

                                <td>2</td>

                                <td>4</td>

                                <td>2022 Feb 28 | 05:46</td>

                                <td>
                                    <a href="/admin/regions/17/edit" class="btn-transparent text-primary mr-2">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <button class="btn-transparent text-primary trigger--fire-modal-5" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/regions/17/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
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
