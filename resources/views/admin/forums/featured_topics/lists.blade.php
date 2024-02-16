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
                                        <th>Topic</th>
                                        <th class="text-center">Date</th>
                                        <th>Actions</th>
                                    </tr>


                                    <tr>
                                        <td>
                                            <img src="/store/1/default_images/forums/icons/marketing.svg" alt="" width="48" height="48" class="">
                                        </td>

                                        <td class="text-center">What is social media?</td>

                                        <td class="text-center">24 Jun 2022 | 15:55</td>

                                        <td width="150">

                                            <a href="/admin/featured-topics/4/edit" class="btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <button class="btn-transparent text-primary btn-sm trigger--fire-modal-1" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/featured-topics/4/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="/store/1/default_images/forums/icons/forum_music.svg" alt="" width="48" height="48" class="">
                                        </td>

                                        <td class="text-center">How do you put a Group Link in a note card</td>

                                        <td class="text-center">21 Jun 2022 | 02:37</td>

                                        <td width="150">

                                            <a href="/admin/featured-topics/3/edit" class="btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <button class="btn-transparent text-primary btn-sm trigger--fire-modal-2" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/featured-topics/3/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="/store/1/default_images/forums/icons/forum_makeup.svg" alt="" width="48" height="48" class="">
                                        </td>

                                        <td class="text-center">The best texture quality settings for makeup</td>

                                        <td class="text-center">21 Jun 2022 | 02:31</td>

                                        <td width="150">

                                            <a href="/admin/featured-topics/2/edit" class="btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <button class="btn-transparent text-primary btn-sm trigger--fire-modal-3" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/featured-topics/2/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="/store/1/default_images/forums/icons/food_forum.svg" alt="" width="48" height="48" class="">
                                        </td>

                                        <td class="text-center">What favorite food and or beverage do you enjoy</td>

                                        <td class="text-center">21 Jun 2022 | 02:11</td>

                                        <td width="150">

                                            <a href="/admin/featured-topics/1/edit" class="btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <button class="btn-transparent text-primary btn-sm trigger--fire-modal-4" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/featured-topics/1/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
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
