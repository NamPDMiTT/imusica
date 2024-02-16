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
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-comment-dots"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Forums</h4>
                            </div>
                            <div class="card-body">
                                8
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-comment-alt"></i>
                        </div>

                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Topics</h4>
                            </div>
                            <div class="card-body">
                                10
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-comment"></i>
                        </div>

                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Posts</h4>
                            </div>
                            <div class="card-body">
                                19
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-comments"></i>
                        </div>

                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Active Members</h4>
                            </div>
                            <div class="card-body">
                                13
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped font-14">
                                    <tbody><tr>
                                        <th>Icon</th>
                                        <th class="text-left">Title</th>
                                        <th>Sub-forums</th>
                                        <th>Topics</th>
                                        <th>Posts</th>
                                        <th>Status</th>
                                        <th>Closed</th>
                                        <th>Action</th>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="/store/1/default_images/forums/icons/advertising.png" width="30" alt="">
                                        </td>
                                        <td class="text-left">
                                            <a href="/admin/forums?subForums=6">Marketing</a>
                                        </td>
                                        <td>
                                            4
                                        </td>
                                        <td>5</td>
                                        <td>9</td>
                                        <td>
                                            Active
                                        </td>
                                        <td>
                                            No
                                        </td>
                                        <td>
                                            <a href="/admin/forums?subForums=6" class="btn-transparent btn-sm text-primary mr-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Forums">
                                                <i class="fa fa-eye"></i>
                                            </a>

                                            <a href="/admin/forums/6/edit" class="btn-transparent btn-sm text-primary">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <button class="btn-transparent text-primary trigger--fire-modal-1" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/forums/6/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="/store/1/default_images/forums/icons/love-song.png" width="30" alt="">
                                        </td>
                                        <td class="text-left">
                                            <a href="/admin/forums/5/topics">Music</a>
                                        </td>
                                        <td>
                                            0
                                        </td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>
                                            Active
                                        </td>
                                        <td>
                                            No
                                        </td>
                                        <td>
                                            <a href="/admin/forums/5/topics" class="btn-transparent btn-sm text-primary mr-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Topics">
                                                <i class="fa fa-eye"></i>
                                            </a>

                                            <a href="/admin/forums/5/edit" class="btn-transparent btn-sm text-primary">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <button class="btn-transparent text-primary trigger--fire-modal-2" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/forums/5/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src="/store/1/default_images/forums/icons/makeup.png" width="30" alt="">
                                        </td>
                                        <td class="text-left">
                                            <a href="/admin/forums?subForums=1">Lifestyle</a>
                                        </td>
                                        <td>
                                            3
                                        </td>
                                        <td>4</td>
                                        <td>8</td>
                                        <td>
                                            Active
                                        </td>
                                        <td>
                                            No
                                        </td>
                                        <td>
                                            <a href="/admin/forums?subForums=1" class="btn-transparent btn-sm text-primary mr-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Forums">
                                                <i class="fa fa-eye"></i>
                                            </a>

                                            <a href="/admin/forums/1/edit" class="btn-transparent btn-sm text-primary">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <button class="btn-transparent text-primary trigger--fire-modal-3" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/forums/1/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
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
