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
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <form action="/admin/forums/store" method="post">
                                @csrf
{{--                                <input type="hidden" name="_token" value="ji2v1hfkFotRGX7xrKaP6pBXFEfCiqPlDVhRodzB">--}}

                                <div class="form-group">
                                    <label class="input-label">Language</label>
                                    <select name="locale" class="form-control ">
                                        <option value="EN" selected="">English</option>
                                        <option value="AR">Arabic</option>
                                        <option value="ES">Spanish</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="input-label">Icon</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button type="button" class="input-group-text admin-file-manager " data-input="icon" data-preview="holder">
                                                <i class="fa fa-upload"></i>
                                            </button>
                                        </div>
                                        <input type="text" name="icon" id="icon" value="" class="form-control ">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    @error('icon')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control  " value="" placeholder="Title">
                                    @error('title')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea type="text" name="description" rows="4" class="form-control  "></textarea>
                                    @error('description')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="input-label d-block">Group</label>
                                    <select name="group_id" class="form-control ">
                                        <option value="">All</option>

                                        <option value="3">Special Students</option>
                                        <option value="2">Vip Instructors</option>
                                    </select>
                                    <div class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <label class="input-label d-block">Role</label>
                                    <select name="role_id" class="form-control ">
                                        <option value="">All</option>

                                        <option value="1">user</option>
                                        <option value="2">admin</option>
                                        <option value="3">organization</option>
                                        <option value="4">teacher</option>
                                        <option value="6">education</option>
                                    </select>
                                    <div class="text-muted text-small mt-1">If you select a user role or user group for a forum, the forum will be accessible only for users that are in the selected role or group.</div>
                                    <div class="invalid-feedback"></div>
                                </div>

                                <div class="form-group custom-switches-stacked">
                                    <label class="custom-switch pl-0 d-flex align-items-center">
                                        <input type="hidden" name="status" value="disabled">
                                        <input type="checkbox" name="status" id="forumStatusSwitch" value="active" checked="&quot;checked&quot;" class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <label class="custom-switch-description mb-0 cursor-pointer" for="forumStatusSwitch">Active</label>
                                    </label>
                                </div>


                                <div class="form-group custom-switches-stacked">
                                    <label class="custom-switch pl-0 d-flex align-items-center">
                                        <input type="hidden" name="close" value="0">
                                        <input type="checkbox" name="close" id="forumCloseSwitch" value="1" class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <label class="custom-switch-description mb-0 cursor-pointer" for="forumCloseSwitch">Closed</label>
                                    </label>
                                    <div class="text-muted text-small mt-1">Users won't will be able to create new topics/replies in closed forums.</div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input id="hasSubCategory" type="checkbox" name="has_sub" class="custom-control-input">
                                        <label class="custom-control-label" for="hasSubCategory">Includes Sub-forums</label>
                                    </div>
                                </div>

                                <div id="subCategories" class="ml-0  d-none">
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <strong class="d-block">Add a Sub-forum</strong>

                                        <button type="button" class="btn btn-success add-btn"><i class="fa fa-plus"></i> Add</button>
                                    </div>

                                    <ul class="draggable-lists list-group ui-sortable">

                                    </ul>
                                </div>

                                <div class="text-right mt-4">
                                    <button class="btn btn-primary">Save</button>
                                </div>
                            </form>

                            <li class="form-group main-row list-group d-none border rounded-lg p-2">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text cursor-pointer move-icon">
                                            <i class="fa fa-arrows-alt"></i>
                                        </div>
                                    </div>

                                    <input type="text" name="sub_forums[record][title]" class="form-control w-auto flex-grow-1" placeholder="Title">

                                    <div class="input-group-append">
                                        <button type="button" class="btn remove-btn btn-danger"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                                <div class="form-group mb-0 mt-1">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button type="button" class="input-group-text admin-file-manager " data-input="icon_record" data-preview="holder">
                                                <i class="fa fa-upload"></i>
                                            </button>
                                        </div>
                                        <input type="text" name="sub_forums[record][icon]" id="icon_record" class="form-control" placeholder="Icon">
                                    </div>
                                </div>

                                <textarea name="sub_forums[record][description]" class="form-control w-auto flex-grow-1 mt-1" placeholder="Category description"></textarea>

                                <div class="form-group mb-0 mt-1">
                                    <label class="input-label d-block mb-0">Group</label>
                                    <select name="sub_forums[record][group_id]" class="form-control">
                                        <option value="" selected="" disabled="">Select a user group</option>

                                        <option value="3">Special Students</option>
                                        <option value="2">Vip Instructors</option>
                                    </select>
                                </div>

                                <div class="form-group mb-0 mt-1">
                                    <label class="input-label d-block">Role</label>
                                    <select name="sub_forums[record][role_id]" class="form-control">
                                        <option value="">All</option>

                                        <option value="1">user</option>
                                        <option value="2">admin</option>
                                        <option value="3">organization</option>
                                        <option value="4">teacher</option>
                                        <option value="6">education</option>
                                    </select>
                                </div>

                                <div class="form-group mb-0 mt-1 custom-switches-stacked">
                                    <label class="custom-switch pl-0 d-flex align-items-center mb-0">
                                        <input type="hidden" name="sub_forums[record][status]" value="disabled">
                                        <input type="checkbox" name="sub_forums[record][status]" id="forumStatusSwitch_record" value="active" checked="checked" class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <label class="custom-switch-description mb-0 cursor-pointer" for="forumStatusSwitch_record">Active</label>
                                    </label>
                                </div>


                                <div class="form-group mb-0 mt-1 custom-switches-stacked">
                                    <label class="custom-switch pl-0 d-flex align-items-center mb-0">
                                        <input type="hidden" name="sub_forums[record][close]" value="0">
                                        <input type="checkbox" name="sub_forums[record][close]" id="forumCloseSwitch_record" value="1" class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <label class="custom-switch-description mb-0 cursor-pointer" for="forumCloseSwitch_record">Close</label>
                                    </label>
                                </div>
                            </li>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts_bottom')

@endpush
