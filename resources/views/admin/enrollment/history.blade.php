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
                <div class="card-body">
                    <form method="get" class="mb-0">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">Search</label>
                                    <input type="text" class="form-control" name="item_title" value="">
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
                                    <label class="input-label">Status</label>
                                    <select name="status" data-plugin-selecttwo="" class="form-control populate">
                                        <option value="">All Statuses</option>
                                        <option value="success">Successful</option>
                                        <option value="refund">Refund</option>
                                        <option value="blocked">Access Blocked</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">Course</label>
                                    <select name="webinar_ids[]" multiple="" class="form-control search-webinar-select2 select2-hidden-accessible" data-placeholder="Search classes" data-select2-id="select2-data-5-pl1x" tabindex="-1" aria-hidden="true">

                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-6-2mv4" style="width: 267.3px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-webinar_ids-p9-container"></ul><span class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-describedby="select2-webinar_ids-p9-container" placeholder="Search classes" style="width: 100%;"></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">Instructor</label>
                                    <select name="teacher_ids[]" multiple="" data-search-option="just_teacher_role" class="form-control search-user-select2 select2-hidden-accessible" data-placeholder="Select an instructor" data-select2-id="select2-data-1-921v" tabindex="-1" aria-hidden="true">

                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-1w2p" style="width: 267.3px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-teacher_ids-ct-container"></ul><span class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-describedby="select2-teacher_ids-ct-container" placeholder="Select an instructor" style="width: 100%;"></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">Student</label>
                                    <select name="student_ids[]" multiple="" data-search-option="just_student_role" class="form-control search-user-select2 select2-hidden-accessible" data-placeholder="Select a student" data-select2-id="select2-data-3-rivb" tabindex="-1" aria-hidden="true">

                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-4-1wbf" style="width: 267.3px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-student_ids-js-container"></ul><span class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-describedby="select2-student_ids-js-container" placeholder="Select a student" style="width: 100%;"></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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

            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="/admin/enrollments/export" class="btn btn-primary">Export Excel</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped font-14">
                                    <tbody><tr>
                                        <th>#</th>
                                        <th class="text-left">Student</th>
                                        <th class="text-left">Instructor</th>
                                        <th class="text-left">Item</th>
                                        <th>Type</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th width="120">Actions</th>
                                    </tr>

                                    <tr>
                                        <td>280</td>

                                        <td class="text-left">
                                            Lewis Erickson
                                            <div class="text-primary text-small font-600-bold">ID : 1045</div>
                                        </td>

                                        <td class="text-left">
                                            Light Moon
                                            <div class="text-primary text-small font-600-bold">ID : 867</div>
                                        </td>

                                        <td class="text-left">
                                            <div class="media-body">
                                                <div>Effective Time Management</div>
                                                <div class="text-primary text-small font-600-bold">ID : 2000</div>
                                            </div>
                                        </td>

                                        <td>
                                                <span class="font-weight-bold">
                                                                                                            Normal Purchase
                                                                                                    </span>
                                        </td>

                                        <td>17 March 2023 17:27</td>

                                        <td>
                                            <span class="text-success">Successful</span>
                                        </td>

                                        <td>
                                            <a href="/admin/financial/sales/280/invoice" target="_blank" title="Invoice"><i class="fa fa-print" aria-hidden="true"></i></a>

                                            <button class="btn-transparent text-primary trigger--fire-modal-1" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/enrollments/280/block-access" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Block Access">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>278</td>

                                        <td class="text-left">
                                            Jade Harrison
                                            <div class="text-primary text-small font-600-bold">ID : 930</div>
                                        </td>

                                        <td class="text-left">
                                            Kate Williams
                                            <div class="text-primary text-small font-600-bold">ID : 929</div>
                                        </td>

                                        <td class="text-left">
                                            <div class="media-body">
                                                <div>The Future of Energy</div>
                                                <div class="text-primary text-small font-600-bold">ID : 2004</div>
                                            </div>
                                        </td>

                                        <td>
                                                <span class="font-weight-bold">
                                                                                                            Normal Purchase
                                                                                                    </span>
                                        </td>

                                        <td>16 March 2023 06:06</td>

                                        <td>
                                            <span class="text-success">Successful</span>
                                        </td>

                                        <td>
                                            <a href="/admin/financial/sales/278/invoice" target="_blank" title="Invoice"><i class="fa fa-print" aria-hidden="true"></i></a>

                                            <button class="btn-transparent text-primary trigger--fire-modal-2" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/enrollments/278/block-access" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Block Access">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>276</td>

                                        <td class="text-left">
                                            Lewis Erickson
                                            <div class="text-primary text-small font-600-bold">ID : 1045</div>
                                        </td>

                                        <td class="text-left">
                                            Jessica Wray
                                            <div class="text-primary text-small font-600-bold">ID : 870</div>
                                        </td>

                                        <td class="text-left">
                                            <div class="media-body">
                                                <div>Installment and Secure Host</div>
                                                <div class="text-primary text-small font-600-bold">ID : 2022</div>
                                            </div>
                                        </td>

                                        <td>
                                                <span class="font-weight-bold">
                                                                                                            Normal Purchase
                                                                                                    </span>
                                        </td>

                                        <td>16 March 2023 05:33</td>

                                        <td>
                                            <span class="text-success">Successful</span>
                                        </td>

                                        <td>
                                            <a href="/admin/financial/sales/276/invoice" target="_blank" title="Invoice"><i class="fa fa-print" aria-hidden="true"></i></a>

                                            <button class="btn-transparent text-primary trigger--fire-modal-3" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/enrollments/276/block-access" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Block Access">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>195</td>

                                        <td class="text-left">
                                            Robert B. Gray
                                            <div class="text-primary text-small font-600-bold">ID : 996</div>
                                        </td>

                                        <td class="text-left">
                                            Affogato Media
                                            <div class="text-primary text-small font-600-bold">ID : 864</div>
                                        </td>

                                        <td class="text-left">
                                            <div class="media-body">
                                                <div>Active Listening: You Can Be a Great Listener</div>
                                                <div class="text-primary text-small font-600-bold">ID : 2003</div>
                                            </div>
                                        </td>

                                        <td>
                                                <span class="font-weight-bold">
                                                                                                            Normal Purchase
                                                                                                    </span>
                                        </td>

                                        <td>25 June 2022 00:14</td>

                                        <td>
                                            <span class="text-success">Successful</span>
                                        </td>

                                        <td>
                                            <a href="/admin/financial/sales/195/invoice" target="_blank" title="Invoice"><i class="fa fa-print" aria-hidden="true"></i></a>

                                            <button class="btn-transparent text-primary trigger--fire-modal-4" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/enrollments/195/block-access" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Block Access">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>191</td>

                                        <td class="text-left">
                                            Jade Harrison
                                            <div class="text-primary text-small font-600-bold">ID : 930</div>
                                        </td>

                                        <td class="text-left">
                                            Kate Williams
                                            <div class="text-primary text-small font-600-bold">ID : 929</div>
                                        </td>

                                        <td class="text-left">
                                            <div class="media-body">
                                                <div>New Update Features</div>
                                                <div class="text-primary text-small font-600-bold">ID : 2010</div>
                                            </div>
                                        </td>

                                        <td>
                                                <span class="font-weight-bold">
                                                                                                            Normal Purchase
                                                                                                    </span>
                                        </td>

                                        <td>22 June 2022 01:51</td>

                                        <td>
                                            <span class="text-success">Successful</span>
                                        </td>

                                        <td>
                                            <a href="/admin/financial/sales/191/invoice" target="_blank" title="Invoice"><i class="fa fa-print" aria-hidden="true"></i></a>

                                            <button class="btn-transparent text-primary trigger--fire-modal-5" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/enrollments/191/block-access" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Block Access">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>190</td>

                                        <td class="text-left">
                                            Robert B. Gray
                                            <div class="text-primary text-small font-600-bold">ID : 996</div>
                                        </td>

                                        <td class="text-left">
                                            Kate Williams
                                            <div class="text-primary text-small font-600-bold">ID : 929</div>
                                        </td>

                                        <td class="text-left">
                                            <div class="media-body">
                                                <div>New Update Features</div>
                                                <div class="text-primary text-small font-600-bold">ID : 2010</div>
                                            </div>
                                        </td>

                                        <td>
                                                <span class="font-weight-bold">
                                                                                                            Normal Purchase
                                                                                                    </span>
                                        </td>

                                        <td>22 June 2022 01:25</td>

                                        <td>
                                            <span class="text-success">Successful</span>
                                        </td>

                                        <td>
                                            <a href="/admin/financial/sales/190/invoice" target="_blank" title="Invoice"><i class="fa fa-print" aria-hidden="true"></i></a>

                                            <button class="btn-transparent text-primary trigger--fire-modal-6" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/enrollments/190/block-access" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Block Access">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>189</td>

                                        <td class="text-left">
                                            Cameron Schofield
                                            <div class="text-primary text-small font-600-bold">ID : 995</div>
                                        </td>

                                        <td class="text-left">
                                            Kate Williams
                                            <div class="text-primary text-small font-600-bold">ID : 929</div>
                                        </td>

                                        <td class="text-left">
                                            <div class="media-body">
                                                <div>New Update Features</div>
                                                <div class="text-primary text-small font-600-bold">ID : 2010</div>
                                            </div>
                                        </td>

                                        <td>
                                                <span class="font-weight-bold">
                                                                                                            Normal Purchase
                                                                                                    </span>
                                        </td>

                                        <td>22 June 2022 00:37</td>

                                        <td>
                                            <span class="text-success">Successful</span>
                                        </td>

                                        <td>
                                            <a href="/admin/financial/sales/189/invoice" target="_blank" title="Invoice"><i class="fa fa-print" aria-hidden="true"></i></a>

                                            <button class="btn-transparent text-primary trigger--fire-modal-7" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/enrollments/189/block-access" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Block Access">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>185</td>

                                        <td class="text-left">
                                            Ricardo dave
                                            <div class="text-primary text-small font-600-bold">ID : 1016</div>
                                        </td>

                                        <td class="text-left">
                                            Robert Ransdell
                                            <div class="text-primary text-small font-600-bold">ID : 1015</div>
                                        </td>

                                        <td class="text-left">
                                            <div class="media-body">
                                                <div>New Learning Page</div>
                                                <div class="text-primary text-small font-600-bold">ID : 2008</div>
                                            </div>
                                        </td>

                                        <td>
                                                <span class="font-weight-bold">
                                                                                                            Normal Purchase
                                                                                                    </span>
                                        </td>

                                        <td>3 March 2022 11:55</td>

                                        <td>
                                            <span class="text-success">Successful</span>
                                        </td>

                                        <td>
                                            <a href="/admin/financial/sales/185/invoice" target="_blank" title="Invoice"><i class="fa fa-print" aria-hidden="true"></i></a>

                                            <button class="btn-transparent text-primary trigger--fire-modal-8" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/enrollments/185/block-access" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Block Access">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>184</td>

                                        <td class="text-left">
                                            Alex Pmelaa
                                            <div class="text-primary text-small font-600-bold">ID : 1017</div>
                                        </td>

                                        <td class="text-left">
                                            Robert Ransdell
                                            <div class="text-primary text-small font-600-bold">ID : 1015</div>
                                        </td>

                                        <td class="text-left">
                                            <div class="media-body">
                                                <div>New Learning Page</div>
                                                <div class="text-primary text-small font-600-bold">ID : 2008</div>
                                            </div>
                                        </td>

                                        <td>
                                                <span class="font-weight-bold">
                                                                                                            Normal Purchase
                                                                                                    </span>
                                        </td>

                                        <td>1 March 2022 17:33</td>

                                        <td>
                                            <span class="text-success">Successful</span>
                                        </td>

                                        <td>
                                            <a href="/admin/financial/sales/184/invoice" target="_blank" title="Invoice"><i class="fa fa-print" aria-hidden="true"></i></a>

                                            <button class="btn-transparent text-primary trigger--fire-modal-9" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/enrollments/184/block-access" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Block Access">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>183</td>

                                        <td class="text-left">
                                            Robert B. Gray
                                            <div class="text-primary text-small font-600-bold">ID : 996</div>
                                        </td>

                                        <td class="text-left">
                                            Robert Ransdell
                                            <div class="text-primary text-small font-600-bold">ID : 1015</div>
                                        </td>

                                        <td class="text-left">
                                            <div class="media-body">
                                                <div>New Learning Page</div>
                                                <div class="text-primary text-small font-600-bold">ID : 2008</div>
                                            </div>
                                        </td>

                                        <td>
                                                <span class="font-weight-bold">
                                                                                                            Normal Purchase
                                                                                                    </span>
                                        </td>

                                        <td>1 March 2022 17:33</td>

                                        <td>
                                            <span class="text-success">Successful</span>
                                        </td>

                                        <td>
                                            <a href="/admin/financial/sales/183/invoice" target="_blank" title="Invoice"><i class="fa fa-print" aria-hidden="true"></i></a>

                                            <button class="btn-transparent text-primary trigger--fire-modal-10" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/enrollments/183/block-access" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Block Access">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    </tbody></table>
                            </div>
                        </div>

                        <div class="card-footer text-center">
                            <nav>
                                <ul class="pagination">

                                    <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                                        <span class="page-link" aria-hidden="true">‹</span>
                                    </li>





                                    <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                    <li class="page-item"><a href="https://lms.rocket-soft.org/admin/enrollments/history?page=2" class="page-link">2</a></li>
                                    <li class="page-item"><a href="https://lms.rocket-soft.org/admin/enrollments/history?page=3" class="page-link">3</a></li>
                                    <li class="page-item"><a href="https://lms.rocket-soft.org/admin/enrollments/history?page=4" class="page-link">4</a></li>
                                    <li class="page-item"><a href="https://lms.rocket-soft.org/admin/enrollments/history?page=5" class="page-link">5</a></li>


                                    <li class="page-item">
                                        <a href="https://lms.rocket-soft.org/admin/enrollments/history?page=2" class="page-link" rel="next" aria-label="Next »">›</a>
                                    </li>
                                </ul>
                            </nav>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts_bottom')

@endpush
