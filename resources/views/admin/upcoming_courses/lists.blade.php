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
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-video"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>{{ trans('admin/main.total_course') }}</h4>
                            </div>
                            <div class="card-body">
                                3
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-calendar-check"></i>
                        </div>

                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>{{ trans('admin/main.released_courses') }}</h4>
                            </div>
                            <div class="card-body">
                                1
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-info">
                            <i class="fas fa-clock"></i>
                        </div>

                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>{{ trans('admin/main.unreleased_courses') }}</h4>
                            </div>
                            <div class="card-body">
                                2
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-users"></i></div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>{{ trans('admin/main.followers') }}</h4>
                            </div>
                            <div class="card-body">
                                11
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="card">
                <div class="card-body">
                    <form method="get" class="mb-0">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">{{ trans('admin/main.search') }}</label>
                                    <input name="title" type="text" class="form-control" value="" placeholder="{{ trans('admin/main.type_to_search') }}...">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">{{ trans('admin/main.release_date') }}</label>
                                    <div class="input-group">
                                        <input type="date" id="from" class="text-center form-control" name="from" value="" placeholder="{{ trans('admin/main.release_date') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">{{ trans('admin/main.end_date') }}</label>
                                    <div class="input-group">
                                        <input type="date" id="to" class="text-center form-control" name="to" value="" placeholder="{{ trans('admin/main.end_date') }}">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">{{ trans('admin/main.filter') }}</label>
                                    <select name="sort" data-plugin-selecttwo="" class="form-control populate">
                                        <option value="">{{ trans('admin/main.all') }}</option>
                                        <option value="newest">{{ trans('admin/main.newest') }}</option>
                                        <option value="earliest_publish_date">{{ trans('admin/main.earliest_publish_date') }}</option>
                                        <option value="farthest_publish_date">{{ trans('admin/main.farthest_publish_date') }}</option>
                                        <option value="highest_price">{{ trans('admin/main.highest_price') }}</option>
                                        <option value="lowest_price">{{ trans('admin/main.lowest_price') }}</option>
                                        <option value="only_not_released_courses">{{ trans('admin/main.only_not_released_courses') }}</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">{{ trans('admin/main.instructor') }}</label>
                                    <select name="teacher_ids[]" multiple="" data-search-option="just_teacher_role" class="form-control search-user-select2 select2-hidden-accessible" data-placeholder="{{ trans('admin/main.search_instructor') }}..." data-select2-id="select2-data-1-cemc" tabindex="-1" aria-hidden="true">

                                    </select>
{{--                                    <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-elbk" style="width: 267.3px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-teacher_ids-xp-container"></ul><span class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-describedby="select2-teacher_ids-xp-container" placeholder="Search teachers" style="width: 100%;"></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">{{ trans('admin/main.category') }}</label>
                                    <select name="category_id" data-plugin-selecttwo="" class="form-control populate">
                                        <option value="">Tất cả danh mục</option>

                                        <option value="520">Thiết kế</option>
                                        <optgroup label="Academics">
                                            <option value="601">Toán học</option>
                                            <option value="602">Khoa học</option>
                                            <option value="603">Ngoại ngữ</option>
                                        </optgroup>
                                        <option value="523">Sức khỏe &amp; Cân bằng</option>
                                        <optgroup label="Lifestyle">
                                            <option value="604">Phong cách sống</option>
                                            <option value="605">Sắc đẹp &amp; Làm đẹp</option>
                                        </optgroup>
                                        <option value="525">Tiếp thị</option>
                                        <optgroup label="Business">
                                            <option value="609">Quản lý</option>
                                            <option value="610">Cộng đồng</option>
                                            <option value="611">Chiến lược kinh doanh</option>
                                        </optgroup>
                                        <optgroup label="Development">
                                            <option value="606">Phát triển Web</option>
                                            <option value="607">Phát triển Mobile</option>
                                            <option value="608">Phát triển game</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">{{ trans('admin/main.status') }}</label>
                                    <select name="status" data-plugin-selecttwo="" class="form-control populate">
                                        <option value="">{{ trans('admin/main.all_status') }}</option>
                                        <option value="pending">{{ trans('admin/main.pending') }}</option>
                                        <option value="active">{{ trans('admin/main.active') }}</option>
                                        <option value="inactive">{{ trans('admin/main.inactive') }}</option>
                                        <option value="is_draft">{{ trans('admin/main.draft') }}</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group mt-1">
                                    <label class="input-label mb-4"> </label>
                                    <input type="submit" class="text-center btn btn-primary w-100" value="{{ trans('admin/main.show_results') }}">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped font-14 ">
                                    <tbody><tr>
                                        <th>ID</th>
                                        <th class="text-left">{{ trans('admin/main.title') }}</th>
                                        <th class="text-left">{{ trans('admin/main.instructor') }}</th>
                                        <th>{{ trans('admin/main.type') }}</th>
                                        <th>{{ trans('admin/main.price') }}</th>
                                        <th>{{ trans('admin/main.followers') }}</th>
                                        <th>{{ trans('admin/main.start_date') }}</th>
                                        <th>{{ trans('admin/main.create_date') }}</th>
                                        <th>{{ trans('admin/main.status') }}</th>
                                        <th width="120">{{ trans('admin/main.actions') }}</th>
                                    </tr>

                                    <tr class="text-center">
                                        <td>5</td>

                                        <td width="18%" class="text-left">
                                            <a class="text-primary mt-0 mb-1 font-weight-bold" href="https://lms.rocket-soft.org/upcoming_courses/Web-Design-for-Beginners">Web Design for Beginners</a>
                                            <div class="text-small">Design</div>
                                        </td>

                                        <td class="text-left">Linda Anderson</td>

                                        <td class="">Course</td>

                                        <td>
                                                                                                    <span class="mt-0 mb-1">
                                                        $10
                                                    </span>
                                        </td>

                                        <td class="font-12">
                                            <a href="/admin/upcoming_courses/5/followers" target="_blank" class="">5</a>
                                        </td>

                                        <td class="font-12">2023 Mar 15 | 00:00</td>

                                        <td class="font-12">2023 Mar 15 | 06:56</td>

                                        <td>
                                            <div class="text-success font-600-bold">Released</div>
                                        </td>

                                        <td width="200" class="">
                                            <div class="btn-group dropdown table-actions">
                                                <button type="button" class="btn-transparent dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </button>
                                                <div class="dropdown-menu text-left webinars-lists-dropdown">



                                                    <button class="btn-transparent text-primary d-flex align-items-center text-danger text-decoration-none btn-transparent btn-sm mt-1 trigger--fire-modal-1" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/upcoming_courses/5/unpublish" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel">
                                                        <i class="fa fa-times"></i><span class="ml-2">{{ trans('admin/main.unreleased') }}</span>
                                                    </button>

                                                    <a href="/admin/upcoming_courses/5/followers" target="_blank" class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1 " title="Followers">
                                                        <i class="fa fa-users"></i>
                                                        <span class="ml-2">{{ trans('admin/main.followers') }}</span>
                                                    </a>

                                                    <a href="/admin/upcoming_courses/5/edit" target="_blank" class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1 " title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                        <span class="ml-2">{{ trans('admin/main.edit') }}</span>
                                                    </a>

                                                    <button class="btn-transparent text-primary d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm mt-1 trigger--fire-modal-2" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/upcoming_courses/5/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel">
                                                        <i class="fa fa-times"></i><span class="ml-2">{{trans('admin/main.delete')}}</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>4</td>

                                        <td width="18%" class="text-left">
                                            <a class="text-primary mt-0 mb-1 font-weight-bold" href="https://lms.rocket-soft.org/upcoming_courses/Digital-Photography">Digital Photography</a>
                                            <div class="text-small">Design</div>
                                        </td>

                                        <td class="text-left">Ricardo dave</td>

                                        <td class="">Course</td>

                                        <td>
                                                                                                    <span class="mt-0 mb-1">
                                                        $50
                                                    </span>
                                        </td>

                                        <td class="font-12">
                                            <a href="/admin/upcoming_courses/4/followers" target="_blank" class="">3</a>
                                        </td>

                                        <td class="font-12">2024 Jan 20 | 16:00</td>

                                        <td class="font-12">2023 Mar 15 | 06:43</td>

                                        <td>
                                            <div class="text-primary">Published</div>
                                        </td>

                                        <td width="200" class="">
                                            <div class="btn-group dropdown table-actions">
                                                <button type="button" class="btn-transparent dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </button>
                                                <div class="dropdown-menu text-left webinars-lists-dropdown">



                                                    <button class="btn-transparent text-primary d-flex align-items-center text-danger text-decoration-none btn-transparent btn-sm mt-1 trigger--fire-modal-3" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/upcoming_courses/4/unpublish" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel">
                                                        <i class="fa fa-times"></i><span class="ml-2">{{ trans('admin/main.unreleased') }}</span>
                                                    </button>

                                                    <a href="/admin/upcoming_courses/4/followers" target="_blank" class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1 " title="Followers">
                                                        <i class="fa fa-users"></i>
                                                        <span class="ml-2">{{ trans('admin/main.followers') }}</span>
                                                    </a>

                                                    <a href="/admin/upcoming_courses/4/edit" target="_blank" class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1 " title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                        <span class="ml-2">{{ trans('admin/main.edit') }}</span>
                                                    </a>

                                                    <button class="btn-transparent text-primary d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm mt-1 trigger--fire-modal-4" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/upcoming_courses/4/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel">
                                                        <i class="fa fa-times"></i><span class="ml-2">{{ trans('admin/main.delete') }}</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>3</td>

                                        <td width="18%" class="text-left">
                                            <a class="text-primary mt-0 mb-1 font-weight-bold" href="https://lms.rocket-soft.org/upcoming_courses/Python-for-Beginners">Python for Beginners</a>
                                            <div class="text-small">Web Development</div>
                                        </td>

                                        <td class="text-left">Robert Ransdell</td>

                                        <td class="">Course</td>

                                        <td>
                                                                                                    <span class="mt-0 mb-1">
                                                        $100
                                                    </span>
                                        </td>

                                        <td class="font-12">
                                            <a href="/admin/upcoming_courses/3/followers" target="_blank" class="">3</a>
                                        </td>

                                        <td class="font-12">2024 Feb 15 | 10:00</td>

                                        <td class="font-12">2023 Feb 28 | 01:48</td>

                                        <td>
                                            <div class="text-primary">Published</div>
                                        </td>

                                        <td width="200" class="">
                                            <div class="btn-group dropdown table-actions">
                                                <button type="button" class="btn-transparent dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </button>
                                                <div class="dropdown-menu text-left webinars-lists-dropdown">



                                                    <button class="btn-transparent text-primary d-flex align-items-center text-danger text-decoration-none btn-transparent btn-sm mt-1 trigger--fire-modal-5" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/upcoming_courses/3/unpublish" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel">
                                                        <i class="fa fa-times"></i><span class="ml-2">{{ trans('admin/main.unreleased') }}</span>
                                                    </button>

                                                    <a href="/admin/upcoming_courses/3/followers" target="_blank" class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1 " title="Followers">
                                                        <i class="fa fa-users"></i>
                                                        <span class="ml-2">{{ trans('admin/main.followers') }}</span>
                                                    </a>

                                                    <a href="/admin/upcoming_courses/3/edit" target="_blank" class="d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm text-primary mt-1 " title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                        <span class="ml-2">{{ trans('admin/main.edit') }}</span>
                                                    </a>

                                                    <button class="btn-transparent text-primary d-flex align-items-center text-dark text-decoration-none btn-transparent btn-sm mt-1 trigger--fire-modal-6" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/upcoming_courses/3/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel">
                                                        <i class="fa fa-times"></i><span class="ml-2">{{ trans('admin/main.delete') }}</span>
                                                    </button>
                                                </div>
                                            </div>
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
