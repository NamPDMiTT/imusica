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
                                    <tbody>
                                    <tr>
                                        <th>Icon</th>
                                        <th class="text-left">Title</th>
                                        <th>Sub-forums</th>
                                        <th>Topics</th>
                                        <th>Posts</th>
                                        <th>Status</th>
                                        <th>Closed</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($forums->toArray()['data'] as $key => $forum)
                                        <tr>
                                            <td>
                                                <img src="{{ asset($forum['icon']) }}"
                                                     width="30" alt="">
                                            </td>
                                            <td class="text-left">
                                                <a href="/admin/forums?subForums=6">{{ $forum['translations'][0]['title'] }}</a>
                                            </td>
                                            <td>
                                                0
                                            </td>
                                            <td>
                                                {{ $forum['topics_count'] }}
                                            </td>
                                            <td>
                                                {{ $forum['posts_count'] }}
                                            </td>
                                            <td class="@if($forum['status'] == 'active') text-success @else text-danger @endif">
                                                {{ $forum['status'] }}
                                            </td>
                                            <td class="@if($forum['close'] != 0) text-success @else text-danger @endif">
                                                {{ $forum['close'] == 0 ? 'No' : 'Yes' }}
                                            </td>
                                            <td>
                                                <a href="/admin/forums?subForums={{ $forum['id'] }}"
                                                   class="btn-transparent btn-sm text-primary mr-1"
                                                   data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="Forums">
                                                    <i class="fa fa-eye"></i>
                                                </a>

                                                <a href="/admin/forums/{{ $forum['id'] }}/edit"
                                                   class="btn-transparent btn-sm text-primary">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <button class="btn-transparent text-primary trigger--fire-modal-1"
                                                        data-confirm="Are you sure? | Do you want to continue?"
                                                        data-confirm-href="/admin/forums/{{ $forum['id'] }}/delete"
                                                        data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Delete">
                                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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
