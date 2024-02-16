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
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <form action="/admin/settings/main" method="post">
                                <input type="hidden" name="_token" value="ji2v1hfkFotRGX7xrKaP6pBXFEfCiqPlDVhRodzB">
                                <input type="hidden" name="page" value="general">
                                <input type="hidden" name="name" value="ai_contents_settings">
                                <input type="hidden" name="locale" value="en">


                                <div class="form-group custom-switches-stacked">
                                    <label class="custom-switch pl-0 d-flex align-items-center">
                                        <input type="hidden" name="value[status]" value="0">
                                        <input type="checkbox" name="value[status]" id="statusSwitch" value="1" checked="&quot;checked&quot;" class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <label class="custom-switch-description mb-0 cursor-pointer" for="statusSwitch">Active</label>
                                    </label>
                                    <div class="text-muted text-small">Enable AI content generator feature</div>
                                </div>
                                <div class="form-group custom-switches-stacked">
                                    <label class="custom-switch pl-0 d-flex align-items-center">
                                        <input type="hidden" name="value[active_for_admin_panel]" value="0">
                                        <input type="checkbox" name="value[active_for_admin_panel]" id="active_for_admin_panelSwitch" value="1" checked="&quot;checked&quot;" class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <label class="custom-switch-description mb-0 cursor-pointer" for="active_for_admin_panelSwitch">Enable AI for the admin panel</label>
                                    </label>
                                    <div class="text-muted text-small">By enabling this option, the AI Generator feature will be available on the admin panel</div>
                                </div>
                                <div class="form-group custom-switches-stacked">
                                    <label class="custom-switch pl-0 d-flex align-items-center">
                                        <input type="hidden" name="value[active_for_organization_panel]" value="0">
                                        <input type="checkbox" name="value[active_for_organization_panel]" id="active_for_organization_panelSwitch" value="1" checked="&quot;checked&quot;" class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <label class="custom-switch-description mb-0 cursor-pointer" for="active_for_organization_panelSwitch">Enable AI for organizatios</label>
                                    </label>
                                    <div class="text-muted text-small">By enabling this option, the AI Generator feature will be available on the organization panel</div>
                                </div>
                                <div class="form-group custom-switches-stacked">
                                    <label class="custom-switch pl-0 d-flex align-items-center">
                                        <input type="hidden" name="value[active_for_instructor_panel]" value="0">
                                        <input type="checkbox" name="value[active_for_instructor_panel]" id="active_for_instructor_panelSwitch" value="1" checked="&quot;checked&quot;" class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <label class="custom-switch-description mb-0 cursor-pointer" for="active_for_instructor_panelSwitch">Enable AI for instructors</label>
                                    </label>
                                    <div class="text-muted text-small">By enabling this option, the AI Generator feature will be available on the instructor panel</div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">API secret key</label>
                                    <input type="text" name="value[secret_key]" class="form-control" value="">
                                </div>


                                <div class="form-group custom-switches-stacked">
                                    <label class="custom-switch pl-0 d-flex align-items-center">
                                        <input type="hidden" name="value[activate_text_service_type]" value="0">
                                        <input type="checkbox" name="value[activate_text_service_type]" id="activate_text_service_typeSwitch" value="1" checked="&quot;checked&quot;" class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <label class="custom-switch-description mb-0 cursor-pointer" for="activate_text_service_typeSwitch">Enable AI text generator API</label>
                                    </label>
                                </div>

                                <div class="js-text-fields ">

                                    <div class="form-group ">
                                        <label class="control-label">Text generator API model</label>
                                        <select name="value[text_service_type]" class=" form-control">
                                            <option value="">Select text generator API model</option>
                                            <option value="ada">ada</option>
                                            <option value="babbage">babbage</option>
                                            <option value="curie">curie</option>
                                            <option value="davinci">davinci</option>
                                            <option value="gpt-3.5-turbo" selected="">gpt-3.5-turbo</option>
                                            <option value="gpt-3.5-turbo-16k">gpt-3.5-turbo-16k</option>
                                            <option value="gpt-4">gpt-4</option>
                                            <option value="gpt-4-32k">gpt-4-32k</option>
                                        </select>
                                    </div>

                                    <div class="form-group ">
                                        <label class="control-label">Number of text generated per request</label>
                                        <select name="value[number_of_text_generated_per_request]" class=" form-control">

                                            <option value="1" selected="">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Max Tokens</label>
                                        <input type="number" name="value[max_tokens]" class="form-control" value="500">
                                    </div>

                                </div>

                                <div class="form-group custom-switches-stacked">
                                    <label class="custom-switch pl-0 d-flex align-items-center">
                                        <input type="hidden" name="value[activate_image_service_type]" value="0">
                                        <input type="checkbox" name="value[activate_image_service_type]" id="activate_image_service_typeSwitch" value="1" checked="&quot;checked&quot;" class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <label class="custom-switch-description mb-0 cursor-pointer" for="activate_image_service_typeSwitch">Enable AI image generator API</label>
                                    </label>
                                </div>

                                <div class="js-image-fields ">

                                    <div class="form-group ">
                                        <label class="control-label">Number of images generated per request</label>
                                        <select name="value[number_of_images_generated_per_request]" class=" form-control">

                                            <option value="1" selected="">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>

                                </div>

                                <button type="submit" class="btn btn-primary mt-1">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts_bottom')

@endpush
