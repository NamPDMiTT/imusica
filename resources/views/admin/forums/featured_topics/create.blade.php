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
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <form action="/admin/featured-topics/store" method="post">
                                        <input type="hidden" name="_token" value="ji2v1hfkFotRGX7xrKaP6pBXFEfCiqPlDVhRodzB">

                                        <div class="form-group">
                                            <label class="input-label d-block">Topic</label>
                                            <select name="topic_id" class="form-control search-forum-topic-select2 select2-hidden-accessible" data-placeholder="Search Topic" data-select2-id="select2-data-1-m56r" tabindex="-1" aria-hidden="true">
                                            </select>
{{--                                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-p1d8" style="width: 573px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-topic_id-vn-container"><span class="select2-selection__rendered" id="select2-topic_id-vn-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Search Topic</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}

                                        </div>

                                        <div class="form-group">
                                            <label class="input-label">Icon</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button type="button" class="input-group-text admin-file-manager" data-input="icon" data-preview="holder">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </button>
                                                </div>
                                                <input type="text" name="icon" id="icon" value="" class="form-control">
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="card">
        <div class="card-body">
            <div class="section-title ml-0 mt-0 mb-3"><h5>Hints</h5></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="media-body">
                        <div class="text-primary mt-0 mb-1 font-weight-bold">Featured Topics</div>
                        <div class=" text-small font-600-bold mb-2">Featured topics will be displayed differently from normal topics to get more views and traffic.</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="media-body">
                        <div class="text-primary mt-0 mb-1 font-weight-bold">Display Position</div>
                        <div class=" text-small font-600-bold mb-2">Featured topics will be displayed on the forum home page.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts_bottom')

@endpush
