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

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Consultants</h4>
                        </div>
                        <div class="card-body">
                            7
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-user-check"></i></div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Available Consultants</h4>
                        </div>
                        <div class="card-body">
                            6
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-user-times"></i></div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Unavailable Consultants</h4>
                        </div>
                        <div class="card-body">
                            1
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-users-slash"></i></div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Consultants Without Meetings</h4>
                        </div>
                        <div class="card-body">
                            5
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-body">

            <section class="card">
                <div class="card-body">
                    <form class="mb-0">
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
                                        <input type="date" id="fsdate" class="text-center form-control" name="from" value="" placeholder="Start Date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">End Date</label>
                                    <div class="input-group">
                                        <input type="date" id="lsdate" class="text-center form-control" name="to" value="" placeholder="End Date">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">Filters</label>
                                    <select name="sort" data-plugin-selecttwo="" class="form-control populate">
                                        <option value="">Filter Type</option>
                                        <option value="appointments_asc">Meeting sales - Ascending</option>
                                        <option value="appointments_desc">Meeting sales - Descending</option>
                                        <option value="appointments_income_asc">Meetings Income - Ascending</option>
                                        <option value="appointments_income_desc">Meetings Income - Descending</option>
                                        <option value="pending_appointments_asc">Pending Meetings - Ascending</option>
                                        <option value="pending_appointments_desc">Pending Meetings - Descending</option>
                                        <option value="created_at_asc">Registration Date - Ascending</option>
                                        <option value="created_at_desc">Registration Date - Descending</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">Organization</label>
                                    <select name="organization_id" data-plugin-selecttwo="" class="form-control populate">
                                        <option value="">Select an Organization</option>
                                        <option value="859">Cactuscat Clothing</option>
                                        <option value="863">Owosso</option>
                                        <option value="864">Affogato Media</option>
                                        <option value="867">Light Moon</option>
                                        <option value="868">TechDecomposed</option>
                                        <option value="4">King Pictures</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">User Group</label>
                                    <select name="group_id" class="form-control populate">
                                        <option value="">Select a user group</option>
                                        <option value="3">Special Students</option>
                                        <option value="2">Vip Instructors</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">Status</label>
                                    <select name="disabled" data-plugin-selecttwo="" class="form-control populate">
                                        <option value="">All Statuses</option>
                                        <option value="0">Available</option>
                                        <option value="1">Unavailable</option>
                                    </select>
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

            <div class="card">
                <div class="card-header">
                    <a href="/admin/consultants/excel?" class="btn btn-primary">Export Excel</a>

                    <div class="h-10"></div>
                </div>
                <div class="card-body">
                    <div class="table-responsive text-center">
                        <table class="table table-striped font-14">
                            <tbody><tr>
                                <th>ID</th>
                                <th class="text-left">Name</th>
                                <th>Meeting Sales</th>
                                <th>Pending Meetings</th>
                                <th>Account Balance</th>
                                <th>User Group</th>
                                <th>Registration Date</th>
                                <th>Status</th>
                                <th width="120">Actions</th>

                            </tr>

                            <tr>
                                <td>3</td>

                                <td class="text-left">
                                    <div class="d-flex align-items-center">
                                        <figure class="avatar mr-2">
                                            <img src="/store/3/avatar/617a4fad7845b.png" alt="...">
                                        </figure>
                                        <div class="media-body ml-1">
                                            <div class="mt-0 mb-1 font-weight-bold">James Kong</div>
                                            <div class="text-primary text-small font-600-bold">+12085141324</div>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="media-body">
                                        <div class="text-primary mt-0 mb-1 font-weight-bold">0</div>

                                    </div>
                                </td>

                                <td class="text-center">
                                    0
                                </td>

                                <td>
                                    $14.40
                                </td>

                                <td>Vip Instructors</td>

                                <td>19 Aug 2020 | 04:49</td>

                                <td>
                                    <div class="text-danger mt-0 mb-1 font-weight-bold">Unavailable</div>
                                </td>

                                <td class="text-center mb-2" width="120">
                                    <a href="/admin/users/3/impersonate" target="_blank" class="btn-transparent  text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Login">
                                        <i class="fa fa-user-shield"></i>
                                    </a>

                                    <a href="/admin/users/3/edit" class="btn-transparent  text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <button class="btn-transparent text-primary trigger--fire-modal-1" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/users/3/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>870</td>

                                <td class="text-left">
                                    <div class="d-flex align-items-center">
                                        <figure class="avatar mr-2">
                                            <img src="/store/870/avatar/617a4f7c09d61.png" alt="...">
                                        </figure>
                                        <div class="media-body ml-1">
                                            <div class="mt-0 mb-1 font-weight-bold">Jessica Wray</div>
                                            <div class="text-primary text-small font-600-bold">+12025550188</div>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="media-body">
                                        <div class="text-primary mt-0 mb-1 font-weight-bold">0</div>

                                    </div>
                                </td>

                                <td class="text-center">
                                    0
                                </td>

                                <td>
                                    $240
                                </td>

                                <td>-</td>

                                <td>4 Nov 2020 | 12:08</td>

                                <td>
                                    <div class="text-success mt-0 mb-1 font-weight-bold">Available</div>
                                </td>

                                <td class="text-center mb-2" width="120">
                                    <a href="/admin/users/870/impersonate" target="_blank" class="btn-transparent  text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Login">
                                        <i class="fa fa-user-shield"></i>
                                    </a>

                                    <a href="/admin/users/870/edit" class="btn-transparent  text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <button class="btn-transparent text-primary trigger--fire-modal-2" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/users/870/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>923</td>

                                <td class="text-left">
                                    <div class="d-flex align-items-center">
                                        <figure class="avatar mr-2">
                                            <img src="/store/923/avatar/617a4f9983fe5.png" alt="...">
                                        </figure>
                                        <div class="media-body ml-1">
                                            <div class="mt-0 mb-1 font-weight-bold">John Powe</div>
                                            <div class="text-primary text-small font-600-bold">+61498970158</div>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="media-body">
                                        <div class="text-primary mt-0 mb-1 font-weight-bold">0</div>

                                    </div>
                                </td>

                                <td class="text-center">
                                    0
                                </td>

                                <td>
                                    $268.75
                                </td>

                                <td>-</td>

                                <td>4 Nov 2020 | 12:08</td>

                                <td>
                                    <div class="text-success mt-0 mb-1 font-weight-bold">Available</div>
                                </td>

                                <td class="text-center mb-2" width="120">
                                    <a href="/admin/users/923/impersonate" target="_blank" class="btn-transparent  text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Login">
                                        <i class="fa fa-user-shield"></i>
                                    </a>

                                    <a href="/admin/users/923/edit" class="btn-transparent  text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <button class="btn-transparent text-primary trigger--fire-modal-3" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/users/923/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>929</td>

                                <td class="text-left">
                                    <div class="d-flex align-items-center">
                                        <figure class="avatar mr-2">
                                            <img src="/store/929/avatar/617a4f5d834c8.png" alt="...">
                                        </figure>
                                        <div class="media-body ml-1">
                                            <div class="mt-0 mb-1 font-weight-bold">Kate Williams</div>
                                            <div class="text-primary text-small font-600-bold">+12025550148</div>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="media-body">
                                        <div class="text-primary mt-0 mb-1 font-weight-bold">0</div>

                                    </div>
                                </td>

                                <td class="text-center">
                                    0
                                </td>

                                <td>
                                    $351.96
                                </td>

                                <td>-</td>

                                <td>15 Nov 2020 | 13:03</td>

                                <td>
                                    <div class="text-success mt-0 mb-1 font-weight-bold">Available</div>
                                </td>

                                <td class="text-center mb-2" width="120">
                                    <a href="/admin/users/929/impersonate" target="_blank" class="btn-transparent  text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Login">
                                        <i class="fa fa-user-shield"></i>
                                    </a>

                                    <a href="/admin/users/929/edit" class="btn-transparent  text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <button class="btn-transparent text-primary trigger--fire-modal-4" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/users/929/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>934</td>

                                <td class="text-left">
                                    <div class="d-flex align-items-center">
                                        <figure class="avatar mr-2">
                                            <img src="/store/934/avatar/617a4f418be6b.png" alt="...">
                                        </figure>
                                        <div class="media-body ml-1">
                                            <div class="mt-0 mb-1 font-weight-bold">Linda Anderson</div>
                                            <div class="text-primary text-small font-600-bold">+12025550143</div>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="media-body">
                                        <div class="text-primary mt-0 mb-1 font-weight-bold">0</div>

                                    </div>
                                </td>

                                <td class="text-center">
                                    0
                                </td>

                                <td>
                                    $357.40
                                </td>

                                <td>-</td>

                                <td>7 Feb 2021 | 01:47</td>

                                <td>
                                    <div class="text-success mt-0 mb-1 font-weight-bold">Available</div>
                                </td>

                                <td class="text-center mb-2" width="120">
                                    <a href="/admin/users/934/impersonate" target="_blank" class="btn-transparent  text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Login">
                                        <i class="fa fa-user-shield"></i>
                                    </a>

                                    <a href="/admin/users/934/edit" class="btn-transparent  text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <button class="btn-transparent text-primary trigger--fire-modal-5" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/users/934/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1015</td>

                                <td class="text-left">
                                    <div class="d-flex align-items-center">
                                        <figure class="avatar mr-2">
                                            <img src="/store/1015/avatar/617a4f2fb8a6d.png" alt="...">
                                        </figure>
                                        <div class="media-body ml-1">
                                            <div class="mt-0 mb-1 font-weight-bold">Robert Ransdell</div>
                                            <div class="text-primary text-small font-600-bold">+61491170156</div>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="media-body">
                                        <div class="text-primary mt-0 mb-1 font-weight-bold">1</div>

                                        <div class="text-small font-600-bold">$750</div>
                                    </div>
                                </td>

                                <td class="text-center">
                                    1
                                </td>

                                <td>
                                    $1,477.60
                                </td>

                                <td>-</td>

                                <td>27 Jun 2021 | 14:06</td>

                                <td>
                                    <div class="text-success mt-0 mb-1 font-weight-bold">Available</div>
                                </td>

                                <td class="text-center mb-2" width="120">
                                    <a href="/admin/users/1015/impersonate" target="_blank" class="btn-transparent  text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Login">
                                        <i class="fa fa-user-shield"></i>
                                    </a>

                                    <a href="/admin/users/1015/edit" class="btn-transparent  text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <button class="btn-transparent text-primary trigger--fire-modal-6" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/users/1015/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1016</td>

                                <td class="text-left">
                                    <div class="d-flex align-items-center">
                                        <figure class="avatar mr-2">
                                            <img src="/store/1016/avatar/617a4f17c8e72.png" alt="...">
                                        </figure>
                                        <div class="media-body ml-1">
                                            <div class="mt-0 mb-1 font-weight-bold">Ricardo dave</div>
                                            <div class="text-primary text-small font-600-bold">+12025250175</div>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="media-body">
                                        <div class="text-primary mt-0 mb-1 font-weight-bold">0</div>

                                    </div>
                                </td>

                                <td class="text-center">
                                    0
                                </td>

                                <td>
                                    $4
                                </td>

                                <td>Vip Instructors</td>

                                <td>27 Jun 2021 | 14:18</td>

                                <td>
                                    <div class="text-success mt-0 mb-1 font-weight-bold">Available</div>
                                </td>

                                <td class="text-center mb-2" width="120">
                                    <a href="/admin/users/1016/impersonate" target="_blank" class="btn-transparent  text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Login">
                                        <i class="fa fa-user-shield"></i>
                                    </a>

                                    <a href="/admin/users/1016/edit" class="btn-transparent  text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <button class="btn-transparent text-primary trigger--fire-modal-7" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/users/1016/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
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

            <section class="card">
                <div class="card-body">
                    <div class="section-title ml-0 mt-0 mb-3"><h4>Hints</h4></div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="media-body">
                                <div class="text-primary mt-0 mb-1 font-weight-bold">Become a Consultant</div>
                                <div class=" text-small font-600-bold">Instructors that define their meeting timesheet will be displayed in this list. Instructors can define meeting timesheets from their panel.</div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="media-body">
                                <div class="text-primary mt-0 mb-1 font-weight-bold">Pending Meetings</div>
                                <div class=" text-small font-600-bold">Meetings that are reserved by a student but not conducted yet. Pending might be in progress or not started.</div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="media-body">
                                <div class="text-primary mt-0 mb-1 font-weight-bold">Unavailable Consultants</div>
                                <div class="text-small font-600-bold">The instructor can be temporarily unavailable. They can change the status from the meeting settings in the user panel.</div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection

@push('scripts_bottom')

@endpush
