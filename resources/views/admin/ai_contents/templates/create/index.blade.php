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
            <div class="card">
                <div class="card-body">
                    <form method="post" action="/admin/ai-contents/templates/store" class="">
                        <input type="hidden" name="_token" value="ji2v1hfkFotRGX7xrKaP6pBXFEfCiqPlDVhRodzB">

                        <div class="form-group col-12 col-md-6">
                            <label class="input-label">Language</label>
                            <select name="locale" class="form-control ">
                                <option value="EN" selected="">English</option>
                                <option value="AR">Arabic</option>
                                <option value="ES">Spanish</option>
                            </select>
                        </div>


                        <div class="form-group col-12 col-md-6">
                            <label class="control-label">Title</label>
                            <input type="text" name="title" class="form-control " value="">
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-group col-12 col-md-6">
                            <label class="control-label">Type</label>
                            <select name="type" class="js-template-type form-control ">
                                <option value="">Select Template Type</option>
                                <option value="text">Text</option>
                                <option value="image">Image</option>
                            </select>

                            <div class="invalid-feedback"></div>
                        </div>


                        <div class="js-prompt-field form-group col-12 col-md-6 d-none">
                            <label class="control-label">Prompt</label>
                            <textarea name="prompt" rows="6" class="form-control "></textarea>
                            <div class="invalid-feedback"></div>

                            <div class="js-text-prompt-hint ">You can use the following tags: [keyword] , [language] , [length]</div>
                            <div class="js-image-prompt-hint d-none">You can use the following tags: [keyword]</div>
                        </div>



                        <div class="js-text-fields d-none">

                            <div class="form-group col-12 col-md-6 custom-switches-stacked">
                                <label class="custom-switch pl-0 d-flex align-items-center">
                                    <input type="hidden" name="enable_length" value="0">
                                    <input type="checkbox" name="enable_length" id="lengthSwitch" value="1" class="custom-switch-input">
                                    <span class="custom-switch-indicator"></span>
                                    <label class="custom-switch-description mb-0 cursor-pointer" for="lengthSwitch">Enable Length</label>
                                </label>
                            </div>

                            <div class="js-length-field form-group col-12 col-md-6 d-none">
                                <label class="control-label">Length</label>
                                <input type="number" name="length" class="form-control " value="" min="0">
                                <div class="invalid-feedback"></div>
                            </div>

                        </div>


                        <div class="js-image-fields d-none">
                            <div class="form-group col-12 col-md-6">
                                <label class="control-label">Image Size</label>
                                <select name="image_size" class=" form-control ">
                                    <option value="">Select Image Size</option>
                                    <option value="256">256x256</option>
                                    <option value="512">512x512</option>
                                    <option value="1024">1024x1024</option>
                                </select>
                                <div class="invalid-feedback"></div>
                            </div>

                        </div>

                        <div class="form-group col-12 col-md-6 custom-switches-stacked">
                            <label class="custom-switch pl-0 d-flex align-items-center">
                                <input type="hidden" name="status" value="disabled">
                                <input type="checkbox" name="status" id="statusSwitch" value="active" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <label class="custom-switch-description mb-0 cursor-pointer" for="statusSwitch">Active</label>
                            </label>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button class="btn btn-primary " type="submit">Save</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts_bottom')

@endpush
