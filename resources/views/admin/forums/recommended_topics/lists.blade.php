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
                                <table class="table table-striped font-14">
                                    <tbody><tr>
                                        <th>Icon</th>
                                        <th>Title</th>
                                        <th>Topics</th>
                                        <th class="text-center">Date</th>
                                        <th>Actions</th>
                                    </tr>


                                    <tr>
                                        <td>
                                            <img src="/store/1/default_images/forums/icons/translate.png" alt="" width="48" height="48" class="">
                                        </td>

                                        <td class="text-center">Language</td>

                                        <td class="text-center">5</td>

                                        <td class="text-center">21 Jun 2022 | 03:33</td>

                                        <td width="150">

                                            <a href="/admin/recommended-topics/4/edit" class="btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <button class="btn-transparent text-primary btn-sm trigger--fire-modal-1" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/recommended-topics/4/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="/store/1/default_images/forums/icons/target.png" alt="" width="48" height="48" class="">
                                        </td>

                                        <td class="text-center">Marketing</td>

                                        <td class="text-center">5</td>

                                        <td class="text-center">21 Jun 2022 | 03:28</td>

                                        <td width="150">

                                            <a href="/admin/recommended-topics/3/edit" class="btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <button class="btn-transparent text-primary btn-sm trigger--fire-modal-2" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/recommended-topics/3/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="/store/1/default_images/forums/icons/drawing-compass.png" alt="" width="48" height="48" class="">
                                        </td>

                                        <td class="text-center">Math</td>

                                        <td class="text-center">5</td>

                                        <td class="text-center">21 Jun 2022 | 03:20</td>

                                        <td width="150">

                                            <a href="/admin/recommended-topics/2/edit" class="btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <button class="btn-transparent text-primary btn-sm trigger--fire-modal-3" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/recommended-topics/2/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="/store/1/default_images/forums/icons/dish.png" alt="" width="48" height="48" class="">
                                        </td>

                                        <td class="text-center">Food &amp; Health</td>

                                        <td class="text-center">5</td>

                                        <td class="text-center">21 Jun 2022 | 02:54</td>

                                        <td width="150">

                                            <a href="/admin/recommended-topics/1/edit" class="btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <button class="btn-transparent text-primary btn-sm trigger--fire-modal-4" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/recommended-topics/1/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
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
