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
                                <div class="col-12 col-md-6 col-lg-4">
                                    <form action="/admin/store/settings" method="post">
                                        <input type="hidden" name="_token" value="ji2v1hfkFotRGX7xrKaP6pBXFEfCiqPlDVhRodzB">
                                        <input type="hidden" name="page" value="general">
                                        <input type="hidden" name="name" value="store_settings">

                                        <div class="form-group custom-switches-stacked">
                                            <label class="custom-switch pl-0 d-flex align-items-center">
                                                <input type="hidden" name="value[status]" value="0">
                                                <input type="checkbox" name="value[status]" id="storeStatusSwitch" value="1" checked="&quot;checked&quot;" class="custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                                <label class="custom-switch-description mb-0 cursor-pointer" for="storeStatusSwitch">Active</label>
                                            </label>
                                            <div class="text-muted text-small">To use the store feature, turn it on.</div>
                                        </div>

                                        <div class="form-group">
                                            <label>Virtual products commission</label>
                                            <input type="number" name="value[virtual_product_commission]" value="20" class="form-control text-center  ">

                                            <div class="text-muted text-small mt-1">This commission rate will be applied for virtual products (e.g. 20)</div>
                                        </div>

                                        <div class="form-group">
                                            <label>Physical products commission</label>
                                            <input type="number" name="value[physical_product_commission]" value="10" class="form-control text-center  ">

                                            <div class="text-muted text-small mt-1">This commission rate will be applied for physical products (e.g. 20)</div>
                                        </div>

                                        <div class="form-group">
                                            <label>Tax</label>
                                            <input type="number" name="value[store_tax]" value="10" class="form-control text-center  ">

                                            <div class="text-muted text-small mt-1">Tax rate for store orders (e.g. 15)</div>
                                        </div>

                                        <div class="form-group custom-switches-stacked">
                                            <label class="custom-switch pl-0 d-flex align-items-center">
                                                <input type="hidden" name="value[possibility_create_virtual_product]" value="0">
                                                <input type="checkbox" name="value[possibility_create_virtual_product]" id="possibilityCreateVirtualProductSwitch" value="1" checked="&quot;checked&quot;" class="custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                                <label class="custom-switch-description mb-0 cursor-pointer" for="possibilityCreateVirtualProductSwitch">Virtual Products Submission</label>
                                            </label>
                                            <div class="text-muted text-small">Vendors will be able to post virtual products from the front</div>
                                        </div>

                                        <div class="form-group custom-switches-stacked">
                                            <label class="custom-switch pl-0 d-flex align-items-center">
                                                <input type="hidden" name="value[possibility_create_physical_product]" value="0">
                                                <input type="checkbox" name="value[possibility_create_physical_product]" id="possibilityCreatePhysicalProductSwitch" value="1" checked="&quot;checked&quot;" class="custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                                <label class="custom-switch-description mb-0 cursor-pointer" for="possibilityCreatePhysicalProductSwitch">Physical Products Submission</label>
                                            </label>
                                            <div class="text-muted text-small">Vendors will be able to post physical products from the front</div>
                                        </div>

                                        <div class="form-group">
                                            <label>Shipping Tracking URL</label>
                                            <input type="text" name="value[shipping_tracking_url]" value="https://www.tracking.my/" class="form-control  ">

                                            <div class="text-muted text-small mt-1">This URL will be displayed on the front and users will be able to track their orders.</div>
                                        </div>

                                        <div class="form-group custom-switches-stacked">
                                            <label class="custom-switch pl-0 d-flex align-items-center">
                                                <input type="hidden" name="value[show_address_selection_in_cart]" value="0">
                                                <input type="checkbox" name="value[show_address_selection_in_cart]" id="show_address_selection_in_cart_switch" value="1" class="custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                                <label class="custom-switch-description mb-0 cursor-pointer" for="show_address_selection_in_cart_switch">Show location inputs in cart</label>
                                            </label>
                                            <div class="text-muted text-small">Location selection dropdowns (Country, Province, Cety, etc) dropdowns will be displayed in purhcase process</div>
                                        </div>


                                        <div class="form-group custom-switches-stacked">
                                            <label class="custom-switch pl-0 d-flex align-items-center">
                                                <input type="hidden" name="value[take_address_selection_optional]" value="0">
                                                <input type="checkbox" name="value[take_address_selection_optional]" id="take_address_selection_optional_switch" value="1" class="custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                                <label class="custom-switch-description mb-0 cursor-pointer" for="take_address_selection_optional_switch">Optional Address</label>
                                            </label>
                                            <div class="text-muted text-small">Make address selection optional in the purhcase process</div>
                                        </div>


                                        <div class="form-group custom-switches-stacked">
                                            <label class="custom-switch pl-0 d-flex align-items-center">
                                                <input type="hidden" name="value[activate_comments]" value="0">
                                                <input type="checkbox" name="value[activate_comments]" id="activateCommentsSwitch" value="1" checked="&quot;checked&quot;" class="custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                                <label class="custom-switch-description mb-0 cursor-pointer" for="activateCommentsSwitch">Enable Comments</label>
                                            </label>
                                            <div class="text-muted text-small">Allow users to leave comments on the store product pages</div>
                                        </div>

                                        <button type="submit" class="btn btn-primary mt-1">Save</button>
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
