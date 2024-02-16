@extends('admin.layouts.app')

@push('libraries_top')

@endpush

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ trans('update.service_templates') }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ getAdminPanelUrl() }}">{{trans('admin/main.dashboard')}}</a>
                </div>
                <div class="breadcrumb-item">{{ trans('update.service_templates') }}</div>
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
                                        <th>Title</th>
                                        <th>Service Type</th>
                                        <th>Generated Contents</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    <tr>
                                        <td>Store Product SEO Description</td>

                                        <td>text</td>

                                        <td>0</td>

                                        <td>
                                            <span class="text-success">Active</span>
                                        </td>

                                        <td>

                                            <a href="/admin/ai-contents/templates/20/edit" class="btn-transparent btn-sm text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <button class="btn-transparent text-primary mx-2 trigger--fire-modal-1" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/ai-contents/templates/20/statusToggle" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Disable">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </button>

                                            <button class="btn-transparent text-primary trigger--fire-modal-2" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/ai-contents/templates/20/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Store Product Description</td>

                                        <td>text</td>

                                        <td>0</td>

                                        <td>
                                            <span class="text-success">Active</span>
                                        </td>

                                        <td>

                                            <a href="/admin/ai-contents/templates/19/edit" class="btn-transparent btn-sm text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <button class="btn-transparent text-primary mx-2 trigger--fire-modal-3" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/ai-contents/templates/19/statusToggle" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Disable">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </button>

                                            <button class="btn-transparent text-primary trigger--fire-modal-4" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/ai-contents/templates/19/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Store Product Title</td>

                                        <td>text</td>

                                        <td>0</td>

                                        <td>
                                            <span class="text-success">Active</span>
                                        </td>

                                        <td>

                                            <a href="/admin/ai-contents/templates/18/edit" class="btn-transparent btn-sm text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <button class="btn-transparent text-primary mx-2 trigger--fire-modal-5" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/ai-contents/templates/18/statusToggle" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Disable">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </button>

                                            <button class="btn-transparent text-primary trigger--fire-modal-6" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/ai-contents/templates/18/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Generate Notice</td>

                                        <td>text</td>

                                        <td>0</td>

                                        <td>
                                            <span class="text-success">Active</span>
                                        </td>

                                        <td>

                                            <a href="/admin/ai-contents/templates/17/edit" class="btn-transparent btn-sm text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <button class="btn-transparent text-primary mx-2 trigger--fire-modal-7" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/ai-contents/templates/17/statusToggle" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Disable">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </button>

                                            <button class="btn-transparent text-primary trigger--fire-modal-8" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/ai-contents/templates/17/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>"About Us" Page Description</td>

                                        <td>text</td>

                                        <td>0</td>

                                        <td>
                                            <span class="text-success">Active</span>
                                        </td>

                                        <td>

                                            <a href="/admin/ai-contents/templates/16/edit" class="btn-transparent btn-sm text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <button class="btn-transparent text-primary mx-2 trigger--fire-modal-9" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/ai-contents/templates/16/statusToggle" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Disable">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </button>

                                            <button class="btn-transparent text-primary trigger--fire-modal-10" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/ai-contents/templates/16/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Course Advertising Description</td>

                                        <td>text</td>

                                        <td>0</td>

                                        <td>
                                            <span class="text-success">Active</span>
                                        </td>

                                        <td>

                                            <a href="/admin/ai-contents/templates/15/edit" class="btn-transparent btn-sm text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <button class="btn-transparent text-primary mx-2 trigger--fire-modal-11" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/ai-contents/templates/15/statusToggle" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Disable">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </button>

                                            <button class="btn-transparent text-primary trigger--fire-modal-12" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/ai-contents/templates/15/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Form Description</td>

                                        <td>text</td>

                                        <td>0</td>

                                        <td>
                                            <span class="text-success">Active</span>
                                        </td>

                                        <td>

                                            <a href="/admin/ai-contents/templates/14/edit" class="btn-transparent btn-sm text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <button class="btn-transparent text-primary mx-2 trigger--fire-modal-13" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/ai-contents/templates/14/statusToggle" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Disable">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </button>

                                            <button class="btn-transparent text-primary trigger--fire-modal-14" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/ai-contents/templates/14/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Course Requirements</td>

                                        <td>text</td>

                                        <td>0</td>

                                        <td>
                                            <span class="text-success">Active</span>
                                        </td>

                                        <td>

                                            <a href="/admin/ai-contents/templates/13/edit" class="btn-transparent btn-sm text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <button class="btn-transparent text-primary mx-2 trigger--fire-modal-15" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/ai-contents/templates/13/statusToggle" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Disable">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </button>

                                            <button class="btn-transparent text-primary trigger--fire-modal-16" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/ai-contents/templates/13/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Generate FAQ</td>

                                        <td>text</td>

                                        <td>0</td>

                                        <td>
                                            <span class="text-success">Active</span>
                                        </td>

                                        <td>

                                            <a href="/admin/ai-contents/templates/12/edit" class="btn-transparent btn-sm text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <button class="btn-transparent text-primary mx-2 trigger--fire-modal-17" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/ai-contents/templates/12/statusToggle" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Disable">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </button>

                                            <button class="btn-transparent text-primary trigger--fire-modal-18" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/ai-contents/templates/12/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Quiz Question</td>

                                        <td>text</td>

                                        <td>0</td>

                                        <td>
                                            <span class="text-success">Active</span>
                                        </td>

                                        <td>

                                            <a href="/admin/ai-contents/templates/11/edit" class="btn-transparent btn-sm text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <button class="btn-transparent text-primary mx-2 trigger--fire-modal-19" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/ai-contents/templates/11/statusToggle" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Disable">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </button>

                                            <button class="btn-transparent text-primary trigger--fire-modal-20" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/ai-contents/templates/11/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                <i class="fa fa-times" aria-hidden="true"></i>
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
                                    <li class="page-item"><a href="https://lms.rocket-soft.org/admin/ai-contents/templates?page=2" class="page-link">2</a></li>


                                    <li class="page-item">
                                        <a href="https://lms.rocket-soft.org/admin/ai-contents/templates?page=2" class="page-link" rel="next" aria-label="Next »">›</a>
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
