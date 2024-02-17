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
                <div class="col-12 col-md-12">
                    <div class="card">

                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <form action="/admin/enrollments/store" method="post">
                                        @csrf
{{--                                        <input type="hidden" name="_token" value="ji2v1hfkFotRGX7xrKaP6pBXFEfCiqPlDVhRodzB">--}}

                                        <div class="form-group">
                                            <label class="input-label">Course</label>
                                            <select name="webinar_id" class="form-control search-webinar-select2 select2-hidden-accessible" data-placeholder="Search classes" data-select2-id="select2-data-3-yavl" tabindex="-1" aria-hidden="true">

                                            </select>
{{--                                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-4-enw4" style="width: 564.6px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-webinar_id-un-container"><span class="select2-selection__rendered" id="select2-webinar_id-un-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Search classes</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}

                                            @error('webinar_id')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="input-label d-block">User</label>
                                            <select name="user_id" class="form-control search-user-select2 select2-hidden-accessible" data-placeholder="Search user" data-select2-id="select2-data-1-ew4r" tabindex="-1" aria-hidden="true">

                                            </select>
{{--                                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-9906" style="width: 564.6px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-user_id-yn-container"><span class="select2-selection__rendered" id="select2-user_id-yn-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Search user</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}

                                            @error('user_id')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class=" mt-4">
                                            <button type="submit" class="btn btn-primary">Add</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts_bottom')

@endpush
