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

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-address-book"></i></div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Meetings</h4>
                        </div>
                        <div class="card-body">
                            1
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-user-clock"></i></div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Open Meetings</h4>
                        </div>
                        <div class="card-body">
                            0
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Finished Meetings</h4>
                        </div>
                        <div class="card-body">
                            0
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-info">
                        <i class="fas fa-users"></i></div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Reservatores</h4>
                        </div>
                        <div class="card-body">
                            1
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-body">
            <section class="card">
                <div class="card-body">
                    <form method="get" class="mb-0">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">Search</label>
                                    <input type="text" class="form-control" name="search" value="">
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">Start Date</label>
                                    <div class="input-group">
                                        <input type="date" id="from" class="text-center form-control" name="from" value="" placeholder="Start Date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">End Date</label>
                                    <div class="input-group">
                                        <input type="date" id="to" class="text-center form-control" name="to" value="" placeholder="End Date">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">Status</label>
                                    <select name="status" data-plugin-selecttwo="" class="form-control populate">
                                        <option value="">All Statuses</option>
                                        <option value="open">Open</option>
                                        <option value="finished">Finished</option>
                                        <option value="canceled">Canceled</option>
                                        <option value="pending">Pending</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">Filters</label>
                                    <select name="sort" data-plugin-selecttwo="" class="form-control populate">
                                        <option value="">Filter Type</option>
                                        <option value="has_discount">Discounted Meetings</option>
                                        <option value="free">Free Meetings</option>
                                        <option value="amount_asc">Amount - Ascending</option>
                                        <option value="amount_desc">Amount - Descending</option>
                                        <option value="date_asc">Date - Ascending</option>
                                        <option value="date_desc">Date - Descending</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">Consultant</label>

                                    <select name="consultant_ids[]" multiple="" data-search-option="consultants" class="form-control search-user-select2 select2-hidden-accessible" data-placeholder="Search Consultants" data-select2-id="select2-data-1-fi4w" tabindex="-1" aria-hidden="true">

                                    </select>
{{--                                    <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-r4ag" style="width: 267.3px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-consultant_ids-5n-container"></ul><span class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-describedby="select2-consultant_ids-5n-container" placeholder="Search Consultants" style="width: 100%;"></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">Reservatore</label>

                                    <select name="user_ids[]" multiple="" class="form-control search-user-select2 select2-hidden-accessible" data-placeholder="Search Reservatores" data-select2-id="select2-data-3-pept" tabindex="-1" aria-hidden="true">

                                    </select>
{{--                                    <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-4-za20" style="width: 267.3px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-user_ids-8s-container"></ul><span class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-describedby="select2-user_ids-8s-container" placeholder="Search Reservatores" style="width: 100%;"></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group mt-1">
                                    <label class="input-label mb-4"> </label>
                                    <input type="submit" class="text-center btn btn-primary w-100" value="Show Results">
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </section>

            <section class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped text-center font-14">

                            <tbody><tr>
                                <th class="text-left">Consultant</th>
                                <th class="text-left">Reservatore</th>
                                <th class="text-center">Meeting Type</th>
                                <th class="text-center">Amount</th>
                                <th class="text-center">Date</th>
                                <th class="text-center">Time</th>
                                <th class="text-center">Students count</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Actions</th>
                            </tr>

                            <tr>
                                <td class="text-left">
                                    <a href="/users/1015/profile" target="_blank">Robert Ransdell</a>
                                </td>

                                <td class="text-left">
                                    <a href="/users/995/profile" target="_blank">Cameron Schofield</a>
                                </td>

                                <td class="text-center">
                                    <span class="">In-person</span>
                                </td>

                                <td>
                                    <div class="media-body">
                                        <div class=" mt-0 mb-1 font-weight-bold">$750</div>
                                    </div>
                                </td>

                                <td class="text-center">15 Mar 2022</td>

                                <td class="text-center">
                                    <div class="d-inline-flex align-items-center">
                                        <span class="">10:30</span>
                                        <span class="mx-1">-</span>
                                        <span class="">11:30</span>
                                    </div>
                                </td>

                                <td class="align-middle font-weight-500">
                                    5
                                </td>

                                <td class="text-center">
                                    <span class="text-primary">Pending</span>
                                </td>

                                <td class="text-center" width="50">
                                    <input type="hidden" class="js-meeting-password" value="">
                                    <input type="hidden" class="js-meeting-link" value="">


                                    <button type="button" data-reserve-id="1" class="js-send-reminder btn-transparent text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Send Reminder"><i class="fa fa-bell" aria-hidden="true"></i></button>

                                    <button class="btn-transparent text-primary trigger--fire-modal-1" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/appointments/1/cancel" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel">
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

    <section class="card">
        <div class="card-body">
            <div class="section-title ml-0 mt-0 mb-3"><h5>Hints</h5></div>
            <div class="row">
                <div class="col-md-4">
                    <div class="media-body">
                        <div class="text-primary mt-0 mb-1 font-weight-bold">Finished/Pending Meetings</div>
                        <div class=" text-small font-600-bold">Meetings that passed their time and the consultant changed the status to finished, will be considered as "Finished" and meetings that reserved but not started will be considered as "Pending".</div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="media-body">
                        <div class="text-primary mt-0 mb-1 font-weight-bold">Canceled Meetings</div>
                        <div class=" text-small font-600-bold">Admin or Staff can cancel a meeting. Meetings couldnt be canceled by consultant or reservatore.</div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="media-body">
                        <div class="text-primary mt-0 mb-1 font-weight-bold">Open Meetings</div>
                        <div class="text-small font-600-bold">Meetings that their "Join URL" defined by consultant and are in progress.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="joinModal" tabindex="-1" aria-labelledby="contactMessageLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactMessageLabel">Join Meeting</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <div class="form-group">
                                <label class="input-label">URL</label>
                                <input type="text" name="link" class="form-control" disabled="">
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label class="input-label">Password</label>
                                <input type="text" name="password" class="form-control" disabled="">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <a href="" target="_blank" class="js-join-btn btn btn-primary">Join</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="sendReminderModal" tabindex="-1" aria-labelledby="contactMessageLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactMessageLabel">Send Reminder</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <strong>Consultant:</strong>
                        <span class="js-consultant"></span>
                    </div>

                    <div class="mt-2">
                        <strong>Reservatore:</strong>
                        <span class="js-reservatore"></span>
                    </div>

                    <div class="mt-2">
                        <strong>Reminder Title::</strong>
                        <span class="js-title"></span>
                    </div>

                    <div class="mt-2">
                        <strong>Reminder Message::</strong>
                        <span class="js-message"></span>
                    </div>
                </div>

                <div class="modal-footer">
                    <a href="" class="js-send-reminder-btn btn btn-primary">Send</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts_bottom')

@endpush
