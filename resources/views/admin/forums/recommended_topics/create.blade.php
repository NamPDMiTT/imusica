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
                                    <form action="/admin/recommended-topics/store" method="post">
                                        <input type="hidden" name="_token" value="ji2v1hfkFotRGX7xrKaP6pBXFEfCiqPlDVhRodzB">

                                        <div class="form-group">
                                            <label class="input-label">Title</label>
                                            <input type="text" name="title" id="title" value="" class="form-control ">
                                        </div>

                                        <div class="form-group">
                                            <label class="input-label">Icon</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button type="button" class="input-group-text admin-file-manager" data-input="icon" data-preview="holder">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </button>
                                                </div>
                                                <input type="text" name="icon" id="icon" value="" class="form-control ">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="input-label d-block">Topics</label>
                                            <select name="topic_ids[]" multiple="" class="form-control search-forum-topic-select2 select2-hidden-accessible" data-placeholder="Search Topic" data-select2-id="select2-data-1-tl2y" tabindex="-1" aria-hidden="true">
                                            </select>
{{--                                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-dijb" style="width: 564.6px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-topic_ids-fe-container"></ul><span class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-describedby="select2-topic_ids-fe-container" placeholder="Search Topic" style="width: 100%;"></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}

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
                        <div class="text-primary mt-0 mb-1 font-weight-bold">Recommended Topics</div>
                        <div class=" text-small font-600-bold mb-2">You can assign several topics to each "Recommended Topic".</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="media-body">
                        <div class="text-primary mt-0 mb-1 font-weight-bold">Display Position</div>
                        <div class=" text-small font-600-bold mb-2">You can assign several topics to each "Recommended Topic".</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts_bottom')

@endpush
