@extends('admin.layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ $pageTitle }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin/">{{trans('admin/main.dashboard')}}</a>
                </div>
                <div class="breadcrumb-item">{{ $pageTitle }}</div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-body">

                            <form id="productForm" method="post" action="{{ route('adminStoreProduct') }}"
                                  class="webinar-form">
                                @csrf
                                {{--                                <input type="hidden" name="_token" value="ji2v1hfkFotRGX7xrKaP6pBXFEfCiqPlDVhRodzB">--}}

                                <section>
                                    <h2 class="section-title after-line">Basic Information</h2>

                                    <div class="row">
                                        <div class="col-12 col-md-5">
                                            <div class="form-group">
                                                <label class="input-label">Language</label>
                                                <select name="locale" class="form-control ">
                                                    <option value="EN" selected="">English</option>
                                                    <option value="AR">Arabic</option>
                                                    <option value="ES">Spanish</option>
                                                </select>
                                            </div>

                                            <div class="form-group mt-15 ">
                                                <label class="input-label d-block">Select a seller</label>

                                                <select name="creator_id"
                                                        class="form-control search-user-select2 select2-hidden-accessible"
                                                        data-search-option="except_user" data-allow-clear="false"
                                                        data-placeholder="Search user"
                                                        data-select2-id="select2-data-1-fu8i" tabindex="-1"
                                                        aria-hidden="true">

                                                </select>
                                                {{--                                                <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-waoh" style="width: 465.5px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-creator_id-ym-container"><span class="select2-selection__rendered" id="select2-creator_id-ym-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Search user</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}

                                                @error('creator_id')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                                @enderror
                                            </div>


                                            <div class="form-group ">
                                                <label class="input-label d-block">Type</label>

                                                <select name="type" class="custom-select ">
                                                    <option value="physical">Physical</option>
                                                    <option value="virtual">Virtual</option>
                                                </select>

                                            </div>

                                            <div class="form-group">
                                                <label class="input-label">Title</label>
                                                <input type="text" name="title" value="{{ old('title') }}" class="form-control "
                                                       placeholder="">

                                                @error('title')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label class="input-label">Product URL</label>
                                                <input type="text" name="slug" value="" class="form-control "
                                                       placeholder="">
                                                <div class="text-muted text-small mt-1">The product URL must be unique,
                                                    use it without spaces. It will be generated by default; you can use
                                                    the default.
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="input-label">Required Points</label>
                                                <input type="number" name="point" value="" class="form-control ">
                                                <div class="text-muted text-small mt-1">Users will be able to purchase
                                                    the product using point rewards. Leave it blank to disable
                                                    purchasing with points.
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="input-label">Tax</label>
                                                <input type="number" name="tax" value="" class="form-control "
                                                       placeholder="">
                                                <div class="text-muted text-small mt-1">Apply a particular tax rate for
                                                    this product. Leave it blank to use the default.
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="input-label">Commission</label>
                                                <input type="number" name="commission" value="" class="form-control "
                                                       placeholder="">
                                                <div class="text-muted text-small mt-1">Apply a particular commission
                                                    rate for this product. Leave it blank to use the default.
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="input-label">SEO Meta Description</label>
                                                <input type="text" name="seo_description" value="{{ old('seo_description') }}"
                                                       class="form-control  "
                                                       placeholder="155 - 160 characters preferred">

                                                @error('seo_description')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label class="input-label">Summary</label>
                                                <textarea name="summary" rows="6" class="form-control  "
                                                          placeholder="Keep the summary short. It will be displayed on the top of the product page.">{{ old('summary') }}</textarea>

                                                @error('summary')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="input-label">Description</label>
                                                <textarea id="summernote" name="description" class="form-control "
                                                          placeholder="Minimum 300 words. HTML and images supported."
                                                          style="display: none;"></textarea>
                                                <div class="note-editor note-frame card">
                                                    <div class="note-dropzone">
                                                        <div class="note-dropzone-message"></div>
                                                    </div>
                                                    <div class="note-toolbar card-header" role="toolbar">
                                                        <div class="note-btn-group btn-group note-style">
                                                            <div class="note-btn-group btn-group">
                                                                <button type="button"
                                                                        class="note-btn btn btn-light btn-sm dropdown-toggle"
                                                                        tabindex="-1" data-toggle="dropdown" title=""
                                                                        aria-label="Style" data-original-title="Style">
                                                                    <i class="note-icon-magic"></i></button>
                                                                <div
                                                                    class="note-dropdown-menu dropdown-menu dropdown-style"
                                                                    role="list" aria-label="Style"><a
                                                                        class="dropdown-item" href="#" data-value="p"
                                                                        role="listitem" aria-label="p"><p>Normal</p></a><a
                                                                        class="dropdown-item" href="#"
                                                                        data-value="blockquote" role="listitem"
                                                                        aria-label="blockquote">
                                                                        <blockquote class="blockquote">Blockquote
                                                                        </blockquote>
                                                                    </a><a class="dropdown-item" href="#"
                                                                           data-value="pre" role="listitem"
                                                                           aria-label="pre">
                                                                        <pre>Code</pre>
                                                                    </a><a class="dropdown-item" href="#"
                                                                           data-value="h1" role="listitem"
                                                                           aria-label="h1"><h1>Header 1</h1></a><a
                                                                        class="dropdown-item" href="#" data-value="h2"
                                                                        role="listitem" aria-label="h2"><h2>Header
                                                                            2</h2></a><a class="dropdown-item" href="#"
                                                                                         data-value="h3" role="listitem"
                                                                                         aria-label="h3"><h3>Header
                                                                            3</h3></a><a class="dropdown-item" href="#"
                                                                                         data-value="h4" role="listitem"
                                                                                         aria-label="h4"><h4>Header
                                                                            4</h4></a><a class="dropdown-item" href="#"
                                                                                         data-value="h5" role="listitem"
                                                                                         aria-label="h5"><h5>Header
                                                                            5</h5></a><a class="dropdown-item" href="#"
                                                                                         data-value="h6" role="listitem"
                                                                                         aria-label="h6"><h6>Header
                                                                            6</h6></a></div>
                                                            </div>
                                                        </div>
                                                        <div class="note-btn-group btn-group note-font">
                                                            <button type="button"
                                                                    class="note-btn btn btn-light btn-sm note-btn-bold"
                                                                    tabindex="-1" title="" aria-label="Bold (CTRL+B)"
                                                                    data-original-title="Bold (CTRL+B)"><i
                                                                    class="note-icon-bold"></i></button>
                                                            <button type="button"
                                                                    class="note-btn btn btn-light btn-sm note-btn-underline"
                                                                    tabindex="-1" title=""
                                                                    aria-label="Underline (CTRL+U)"
                                                                    data-original-title="Underline (CTRL+U)"><i
                                                                    class="note-icon-underline"></i></button>
                                                            <button type="button" class="note-btn btn btn-light btn-sm"
                                                                    tabindex="-1" title=""
                                                                    aria-label="Remove Font Style (CTRL+\)"
                                                                    data-original-title="Remove Font Style (CTRL+\)"><i
                                                                    class="note-icon-eraser"></i></button>
                                                        </div>
                                                        <div class="note-btn-group btn-group note-fontname">
                                                            <div class="note-btn-group btn-group">
                                                                <button type="button"
                                                                        class="note-btn btn btn-light btn-sm dropdown-toggle"
                                                                        tabindex="-1" data-toggle="dropdown" title=""
                                                                        aria-label="Font Family"
                                                                        data-original-title="Font Family"><span
                                                                        class="note-current-fontname"
                                                                        style="font-family: Nunito;">Nunito</span>
                                                                </button>
                                                                <div
                                                                    class="note-dropdown-menu dropdown-menu note-check dropdown-fontname"
                                                                    role="list" aria-label="Font Family"><a
                                                                        class="dropdown-item checked" href="#"
                                                                        data-value="Nunito" role="listitem"
                                                                        aria-label="Nunito"><i
                                                                            class="note-icon-menu-check"></i> <span
                                                                            style="font-family: 'Nunito'">Nunito</span></a><a
                                                                        class="dropdown-item" href="#"
                                                                        data-value="Segoe UI" role="listitem"
                                                                        aria-label="Segoe UI"><i
                                                                            class="note-icon-menu-check"></i> <span
                                                                            style="font-family: 'Segoe UI'">Segoe UI</span></a><a
                                                                        class="dropdown-item" href="#"
                                                                        data-value="arial" role="listitem"
                                                                        aria-label="arial"><i
                                                                            class="note-icon-menu-check"></i> <span
                                                                            style="font-family: 'arial'">arial</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="note-btn-group btn-group note-color">
                                                            <div
                                                                class="note-btn-group btn-group note-color note-color-all">
                                                                <button type="button"
                                                                        class="note-btn btn btn-light btn-sm note-current-color-button"
                                                                        tabindex="-1" title="" aria-label="Recent Color"
                                                                        data-original-title="Recent Color"
                                                                        data-backcolor="#FFFF00"
                                                                        data-forecolor="#000000"><i
                                                                        class="note-icon-font note-recent-color"
                                                                        style="background-color: rgb(255, 255, 0); color: rgb(0, 0, 0);"></i>
                                                                </button>
                                                                <button type="button"
                                                                        class="note-btn btn btn-light btn-sm dropdown-toggle"
                                                                        tabindex="-1" data-toggle="dropdown" title=""
                                                                        aria-label="More Color"
                                                                        data-original-title="More Color"></button>
                                                                <div class="note-dropdown-menu dropdown-menu"
                                                                     role="list">
                                                                    <div class="note-palette">
                                                                        <div class="note-palette-title">Background
                                                                            Color
                                                                        </div>
                                                                        <div>
                                                                            <button type="button"
                                                                                    class="note-color-reset btn btn-light btn-default"
                                                                                    data-event="backColor"
                                                                                    data-value="transparent">Transparent
                                                                            </button>
                                                                        </div>
                                                                        <div class="note-holder" data-event="backColor">
                                                                            <!-- back colors -->
                                                                            <div class="note-color-palette">
                                                                                <div class="note-color-row">
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#000000"
                                                                                            data-event="backColor"
                                                                                            data-value="#000000"
                                                                                            title="" aria-label="Black"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Black"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#424242"
                                                                                            data-event="backColor"
                                                                                            data-value="#424242"
                                                                                            title=""
                                                                                            aria-label="Tundora"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Tundora"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#636363"
                                                                                            data-event="backColor"
                                                                                            data-value="#636363"
                                                                                            title=""
                                                                                            aria-label="Dove Gray"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Dove Gray"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#9C9C94"
                                                                                            data-event="backColor"
                                                                                            data-value="#9C9C94"
                                                                                            title=""
                                                                                            aria-label="Star Dust"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Star Dust"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#CEC6CE"
                                                                                            data-event="backColor"
                                                                                            data-value="#CEC6CE"
                                                                                            title=""
                                                                                            aria-label="Pale Slate"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Pale Slate"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#EFEFEF"
                                                                                            data-event="backColor"
                                                                                            data-value="#EFEFEF"
                                                                                            title=""
                                                                                            aria-label="Gallery"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Gallery"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#F7F7F7"
                                                                                            data-event="backColor"
                                                                                            data-value="#F7F7F7"
                                                                                            title=""
                                                                                            aria-label="Alabaster"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Alabaster"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFFFFF"
                                                                                            data-event="backColor"
                                                                                            data-value="#FFFFFF"
                                                                                            title="" aria-label="White"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="White"></button>
                                                                                </div>
                                                                                <div class="note-color-row">
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FF0000"
                                                                                            data-event="backColor"
                                                                                            data-value="#FF0000"
                                                                                            title="" aria-label="Red"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Red"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FF9C00"
                                                                                            data-event="backColor"
                                                                                            data-value="#FF9C00"
                                                                                            title=""
                                                                                            aria-label="Orange Peel"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Orange Peel"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFFF00"
                                                                                            data-event="backColor"
                                                                                            data-value="#FFFF00"
                                                                                            title="" aria-label="Yellow"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Yellow"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#00FF00"
                                                                                            data-event="backColor"
                                                                                            data-value="#00FF00"
                                                                                            title="" aria-label="Green"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Green"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#00FFFF"
                                                                                            data-event="backColor"
                                                                                            data-value="#00FFFF"
                                                                                            title="" aria-label="Cyan"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Cyan"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#0000FF"
                                                                                            data-event="backColor"
                                                                                            data-value="#0000FF"
                                                                                            title="" aria-label="Blue"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Blue"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#9C00FF"
                                                                                            data-event="backColor"
                                                                                            data-value="#9C00FF"
                                                                                            title=""
                                                                                            aria-label="Electric Violet"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Electric Violet"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FF00FF"
                                                                                            data-event="backColor"
                                                                                            data-value="#FF00FF"
                                                                                            title=""
                                                                                            aria-label="Magenta"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Magenta"></button>
                                                                                </div>
                                                                                <div class="note-color-row">
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#F7C6CE"
                                                                                            data-event="backColor"
                                                                                            data-value="#F7C6CE"
                                                                                            title="" aria-label="Azalea"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Azalea"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFE7CE"
                                                                                            data-event="backColor"
                                                                                            data-value="#FFE7CE"
                                                                                            title="" aria-label="Karry"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Karry"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFEFC6"
                                                                                            data-event="backColor"
                                                                                            data-value="#FFEFC6"
                                                                                            title=""
                                                                                            aria-label="Egg White"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Egg White"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#D6EFD6"
                                                                                            data-event="backColor"
                                                                                            data-value="#D6EFD6"
                                                                                            title="" aria-label="Zanah"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Zanah"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#CEDEE7"
                                                                                            data-event="backColor"
                                                                                            data-value="#CEDEE7"
                                                                                            title=""
                                                                                            aria-label="Botticelli"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Botticelli"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#CEE7F7"
                                                                                            data-event="backColor"
                                                                                            data-value="#CEE7F7"
                                                                                            title=""
                                                                                            aria-label="Tropical Blue"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Tropical Blue"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#D6D6E7"
                                                                                            data-event="backColor"
                                                                                            data-value="#D6D6E7"
                                                                                            title=""
                                                                                            aria-label="Mischka"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Mischka"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#E7D6DE"
                                                                                            data-event="backColor"
                                                                                            data-value="#E7D6DE"
                                                                                            title=""
                                                                                            aria-label="Twilight"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Twilight"></button>
                                                                                </div>
                                                                                <div class="note-color-row">
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#E79C9C"
                                                                                            data-event="backColor"
                                                                                            data-value="#E79C9C"
                                                                                            title=""
                                                                                            aria-label="Tonys Pink"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Tonys Pink"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFC69C"
                                                                                            data-event="backColor"
                                                                                            data-value="#FFC69C"
                                                                                            title=""
                                                                                            aria-label="Peach Orange"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Peach Orange"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFE79C"
                                                                                            data-event="backColor"
                                                                                            data-value="#FFE79C"
                                                                                            title=""
                                                                                            aria-label="Cream Brulee"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Cream Brulee"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#B5D6A5"
                                                                                            data-event="backColor"
                                                                                            data-value="#B5D6A5"
                                                                                            title="" aria-label="Sprout"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Sprout"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#A5C6CE"
                                                                                            data-event="backColor"
                                                                                            data-value="#A5C6CE"
                                                                                            title="" aria-label="Casper"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Casper"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#9CC6EF"
                                                                                            data-event="backColor"
                                                                                            data-value="#9CC6EF"
                                                                                            title="" aria-label="Perano"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Perano"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#B5A5D6"
                                                                                            data-event="backColor"
                                                                                            data-value="#B5A5D6"
                                                                                            title=""
                                                                                            aria-label="Cold Purple"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Cold Purple"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#D6A5BD"
                                                                                            data-event="backColor"
                                                                                            data-value="#D6A5BD"
                                                                                            title=""
                                                                                            aria-label="Careys Pink"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Careys Pink"></button>
                                                                                </div>
                                                                                <div class="note-color-row">
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#E76363"
                                                                                            data-event="backColor"
                                                                                            data-value="#E76363"
                                                                                            title="" aria-label="Mandy"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Mandy"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#F7AD6B"
                                                                                            data-event="backColor"
                                                                                            data-value="#F7AD6B"
                                                                                            title="" aria-label="Rajah"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Rajah"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFD663"
                                                                                            data-event="backColor"
                                                                                            data-value="#FFD663"
                                                                                            title=""
                                                                                            aria-label="Dandelion"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Dandelion"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#94BD7B"
                                                                                            data-event="backColor"
                                                                                            data-value="#94BD7B"
                                                                                            title=""
                                                                                            aria-label="Olivine"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Olivine"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#73A5AD"
                                                                                            data-event="backColor"
                                                                                            data-value="#73A5AD"
                                                                                            title=""
                                                                                            aria-label="Gulf Stream"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Gulf Stream"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#6BADDE"
                                                                                            data-event="backColor"
                                                                                            data-value="#6BADDE"
                                                                                            title="" aria-label="Viking"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Viking"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#8C7BC6"
                                                                                            data-event="backColor"
                                                                                            data-value="#8C7BC6"
                                                                                            title=""
                                                                                            aria-label="Blue Marguerite"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Blue Marguerite"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#C67BA5"
                                                                                            data-event="backColor"
                                                                                            data-value="#C67BA5"
                                                                                            title="" aria-label="Puce"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Puce"></button>
                                                                                </div>
                                                                                <div class="note-color-row">
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#CE0000"
                                                                                            data-event="backColor"
                                                                                            data-value="#CE0000"
                                                                                            title=""
                                                                                            aria-label="Guardsman Red"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Guardsman Red"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#E79439"
                                                                                            data-event="backColor"
                                                                                            data-value="#E79439"
                                                                                            title=""
                                                                                            aria-label="Fire Bush"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Fire Bush"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#EFC631"
                                                                                            data-event="backColor"
                                                                                            data-value="#EFC631"
                                                                                            title=""
                                                                                            aria-label="Golden Dream"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Golden Dream"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#6BA54A"
                                                                                            data-event="backColor"
                                                                                            data-value="#6BA54A"
                                                                                            title=""
                                                                                            aria-label="Chelsea Cucumber"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Chelsea Cucumber"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#4A7B8C"
                                                                                            data-event="backColor"
                                                                                            data-value="#4A7B8C"
                                                                                            title=""
                                                                                            aria-label="Smalt Blue"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Smalt Blue"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#3984C6"
                                                                                            data-event="backColor"
                                                                                            data-value="#3984C6"
                                                                                            title=""
                                                                                            aria-label="Boston Blue"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Boston Blue"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#634AA5"
                                                                                            data-event="backColor"
                                                                                            data-value="#634AA5"
                                                                                            title=""
                                                                                            aria-label="Butterfly Bush"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Butterfly Bush"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#A54A7B"
                                                                                            data-event="backColor"
                                                                                            data-value="#A54A7B"
                                                                                            title=""
                                                                                            aria-label="Cadillac"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Cadillac"></button>
                                                                                </div>
                                                                                <div class="note-color-row">
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#9C0000"
                                                                                            data-event="backColor"
                                                                                            data-value="#9C0000"
                                                                                            title=""
                                                                                            aria-label="Sangria"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Sangria"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#B56308"
                                                                                            data-event="backColor"
                                                                                            data-value="#B56308"
                                                                                            title=""
                                                                                            aria-label="Mai Tai"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Mai Tai"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#BD9400"
                                                                                            data-event="backColor"
                                                                                            data-value="#BD9400"
                                                                                            title=""
                                                                                            aria-label="Buddha Gold"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Buddha Gold"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#397B21"
                                                                                            data-event="backColor"
                                                                                            data-value="#397B21"
                                                                                            title=""
                                                                                            aria-label="Forest Green"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Forest Green"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#104A5A"
                                                                                            data-event="backColor"
                                                                                            data-value="#104A5A"
                                                                                            title="" aria-label="Eden"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Eden"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#085294"
                                                                                            data-event="backColor"
                                                                                            data-value="#085294"
                                                                                            title=""
                                                                                            aria-label="Venice Blue"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Venice Blue"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#311873"
                                                                                            data-event="backColor"
                                                                                            data-value="#311873"
                                                                                            title=""
                                                                                            aria-label="Meteorite"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Meteorite"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#731842"
                                                                                            data-event="backColor"
                                                                                            data-value="#731842"
                                                                                            title="" aria-label="Claret"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Claret"></button>
                                                                                </div>
                                                                                <div class="note-color-row">
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#630000"
                                                                                            data-event="backColor"
                                                                                            data-value="#630000"
                                                                                            title=""
                                                                                            aria-label="Rosewood"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Rosewood"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#7B3900"
                                                                                            data-event="backColor"
                                                                                            data-value="#7B3900"
                                                                                            title=""
                                                                                            aria-label="Cinnamon"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Cinnamon"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#846300"
                                                                                            data-event="backColor"
                                                                                            data-value="#846300"
                                                                                            title="" aria-label="Olive"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Olive"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#295218"
                                                                                            data-event="backColor"
                                                                                            data-value="#295218"
                                                                                            title=""
                                                                                            aria-label="Parsley"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Parsley"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#083139"
                                                                                            data-event="backColor"
                                                                                            data-value="#083139"
                                                                                            title="" aria-label="Tiber"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Tiber"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#003163"
                                                                                            data-event="backColor"
                                                                                            data-value="#003163"
                                                                                            title=""
                                                                                            aria-label="Midnight Blue"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Midnight Blue"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#21104A"
                                                                                            data-event="backColor"
                                                                                            data-value="#21104A"
                                                                                            title=""
                                                                                            aria-label="Valentino"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Valentino"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#4A1031"
                                                                                            data-event="backColor"
                                                                                            data-value="#4A1031"
                                                                                            title="" aria-label="Loulou"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Loulou"></button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <button type="button"
                                                                                    class="note-color-select btn btn-light btn-default"
                                                                                    data-event="openPalette"
                                                                                    data-value="backColorPicker">Select
                                                                            </button>
                                                                            <input type="color" id="backColorPicker"
                                                                                   class="note-btn note-color-select-btn"
                                                                                   value="#FFFF00"
                                                                                   data-event="backColorPalette"></div>
                                                                        <div class="note-holder-custom"
                                                                             id="backColorPalette"
                                                                             data-event="backColor">
                                                                            <div class="note-color-palette">
                                                                                <div class="note-color-row">
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFFFFF"
                                                                                            data-event="backColor"
                                                                                            data-value="#FFFFFF"
                                                                                            title=""
                                                                                            aria-label="#FFFFFF"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="#FFFFFF"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFFFFF"
                                                                                            data-event="backColor"
                                                                                            data-value="#FFFFFF"
                                                                                            title=""
                                                                                            aria-label="#FFFFFF"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="#FFFFFF"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFFFFF"
                                                                                            data-event="backColor"
                                                                                            data-value="#FFFFFF"
                                                                                            title=""
                                                                                            aria-label="#FFFFFF"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="#FFFFFF"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFFFFF"
                                                                                            data-event="backColor"
                                                                                            data-value="#FFFFFF"
                                                                                            title=""
                                                                                            aria-label="#FFFFFF"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="#FFFFFF"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFFFFF"
                                                                                            data-event="backColor"
                                                                                            data-value="#FFFFFF"
                                                                                            title=""
                                                                                            aria-label="#FFFFFF"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="#FFFFFF"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFFFFF"
                                                                                            data-event="backColor"
                                                                                            data-value="#FFFFFF"
                                                                                            title=""
                                                                                            aria-label="#FFFFFF"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="#FFFFFF"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFFFFF"
                                                                                            data-event="backColor"
                                                                                            data-value="#FFFFFF"
                                                                                            title=""
                                                                                            aria-label="#FFFFFF"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="#FFFFFF"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFFFFF"
                                                                                            data-event="backColor"
                                                                                            data-value="#FFFFFF"
                                                                                            title=""
                                                                                            aria-label="#FFFFFF"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="#FFFFFF"></button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="note-palette">
                                                                        <div class="note-palette-title">Text Color</div>
                                                                        <div>
                                                                            <button type="button"
                                                                                    class="note-color-reset btn btn-light btn-default"
                                                                                    data-event="removeFormat"
                                                                                    data-value="foreColor">Reset to
                                                                                default
                                                                            </button>
                                                                        </div>
                                                                        <div class="note-holder" data-event="foreColor">
                                                                            <!-- fore colors -->
                                                                            <div class="note-color-palette">
                                                                                <div class="note-color-row">
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#000000"
                                                                                            data-event="foreColor"
                                                                                            data-value="#000000"
                                                                                            title="" aria-label="Black"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Black"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#424242"
                                                                                            data-event="foreColor"
                                                                                            data-value="#424242"
                                                                                            title=""
                                                                                            aria-label="Tundora"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Tundora"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#636363"
                                                                                            data-event="foreColor"
                                                                                            data-value="#636363"
                                                                                            title=""
                                                                                            aria-label="Dove Gray"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Dove Gray"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#9C9C94"
                                                                                            data-event="foreColor"
                                                                                            data-value="#9C9C94"
                                                                                            title=""
                                                                                            aria-label="Star Dust"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Star Dust"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#CEC6CE"
                                                                                            data-event="foreColor"
                                                                                            data-value="#CEC6CE"
                                                                                            title=""
                                                                                            aria-label="Pale Slate"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Pale Slate"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#EFEFEF"
                                                                                            data-event="foreColor"
                                                                                            data-value="#EFEFEF"
                                                                                            title=""
                                                                                            aria-label="Gallery"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Gallery"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#F7F7F7"
                                                                                            data-event="foreColor"
                                                                                            data-value="#F7F7F7"
                                                                                            title=""
                                                                                            aria-label="Alabaster"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Alabaster"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFFFFF"
                                                                                            data-event="foreColor"
                                                                                            data-value="#FFFFFF"
                                                                                            title="" aria-label="White"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="White"></button>
                                                                                </div>
                                                                                <div class="note-color-row">
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FF0000"
                                                                                            data-event="foreColor"
                                                                                            data-value="#FF0000"
                                                                                            title="" aria-label="Red"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Red"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FF9C00"
                                                                                            data-event="foreColor"
                                                                                            data-value="#FF9C00"
                                                                                            title=""
                                                                                            aria-label="Orange Peel"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Orange Peel"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFFF00"
                                                                                            data-event="foreColor"
                                                                                            data-value="#FFFF00"
                                                                                            title="" aria-label="Yellow"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Yellow"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#00FF00"
                                                                                            data-event="foreColor"
                                                                                            data-value="#00FF00"
                                                                                            title="" aria-label="Green"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Green"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#00FFFF"
                                                                                            data-event="foreColor"
                                                                                            data-value="#00FFFF"
                                                                                            title="" aria-label="Cyan"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Cyan"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#0000FF"
                                                                                            data-event="foreColor"
                                                                                            data-value="#0000FF"
                                                                                            title="" aria-label="Blue"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Blue"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#9C00FF"
                                                                                            data-event="foreColor"
                                                                                            data-value="#9C00FF"
                                                                                            title=""
                                                                                            aria-label="Electric Violet"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Electric Violet"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FF00FF"
                                                                                            data-event="foreColor"
                                                                                            data-value="#FF00FF"
                                                                                            title=""
                                                                                            aria-label="Magenta"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Magenta"></button>
                                                                                </div>
                                                                                <div class="note-color-row">
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#F7C6CE"
                                                                                            data-event="foreColor"
                                                                                            data-value="#F7C6CE"
                                                                                            title="" aria-label="Azalea"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Azalea"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFE7CE"
                                                                                            data-event="foreColor"
                                                                                            data-value="#FFE7CE"
                                                                                            title="" aria-label="Karry"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Karry"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFEFC6"
                                                                                            data-event="foreColor"
                                                                                            data-value="#FFEFC6"
                                                                                            title=""
                                                                                            aria-label="Egg White"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Egg White"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#D6EFD6"
                                                                                            data-event="foreColor"
                                                                                            data-value="#D6EFD6"
                                                                                            title="" aria-label="Zanah"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Zanah"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#CEDEE7"
                                                                                            data-event="foreColor"
                                                                                            data-value="#CEDEE7"
                                                                                            title=""
                                                                                            aria-label="Botticelli"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Botticelli"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#CEE7F7"
                                                                                            data-event="foreColor"
                                                                                            data-value="#CEE7F7"
                                                                                            title=""
                                                                                            aria-label="Tropical Blue"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Tropical Blue"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#D6D6E7"
                                                                                            data-event="foreColor"
                                                                                            data-value="#D6D6E7"
                                                                                            title=""
                                                                                            aria-label="Mischka"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Mischka"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#E7D6DE"
                                                                                            data-event="foreColor"
                                                                                            data-value="#E7D6DE"
                                                                                            title=""
                                                                                            aria-label="Twilight"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Twilight"></button>
                                                                                </div>
                                                                                <div class="note-color-row">
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#E79C9C"
                                                                                            data-event="foreColor"
                                                                                            data-value="#E79C9C"
                                                                                            title=""
                                                                                            aria-label="Tonys Pink"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Tonys Pink"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFC69C"
                                                                                            data-event="foreColor"
                                                                                            data-value="#FFC69C"
                                                                                            title=""
                                                                                            aria-label="Peach Orange"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Peach Orange"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFE79C"
                                                                                            data-event="foreColor"
                                                                                            data-value="#FFE79C"
                                                                                            title=""
                                                                                            aria-label="Cream Brulee"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Cream Brulee"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#B5D6A5"
                                                                                            data-event="foreColor"
                                                                                            data-value="#B5D6A5"
                                                                                            title="" aria-label="Sprout"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Sprout"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#A5C6CE"
                                                                                            data-event="foreColor"
                                                                                            data-value="#A5C6CE"
                                                                                            title="" aria-label="Casper"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Casper"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#9CC6EF"
                                                                                            data-event="foreColor"
                                                                                            data-value="#9CC6EF"
                                                                                            title="" aria-label="Perano"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Perano"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#B5A5D6"
                                                                                            data-event="foreColor"
                                                                                            data-value="#B5A5D6"
                                                                                            title=""
                                                                                            aria-label="Cold Purple"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Cold Purple"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#D6A5BD"
                                                                                            data-event="foreColor"
                                                                                            data-value="#D6A5BD"
                                                                                            title=""
                                                                                            aria-label="Careys Pink"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Careys Pink"></button>
                                                                                </div>
                                                                                <div class="note-color-row">
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#E76363"
                                                                                            data-event="foreColor"
                                                                                            data-value="#E76363"
                                                                                            title="" aria-label="Mandy"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Mandy"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#F7AD6B"
                                                                                            data-event="foreColor"
                                                                                            data-value="#F7AD6B"
                                                                                            title="" aria-label="Rajah"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Rajah"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFD663"
                                                                                            data-event="foreColor"
                                                                                            data-value="#FFD663"
                                                                                            title=""
                                                                                            aria-label="Dandelion"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Dandelion"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#94BD7B"
                                                                                            data-event="foreColor"
                                                                                            data-value="#94BD7B"
                                                                                            title=""
                                                                                            aria-label="Olivine"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Olivine"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#73A5AD"
                                                                                            data-event="foreColor"
                                                                                            data-value="#73A5AD"
                                                                                            title=""
                                                                                            aria-label="Gulf Stream"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Gulf Stream"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#6BADDE"
                                                                                            data-event="foreColor"
                                                                                            data-value="#6BADDE"
                                                                                            title="" aria-label="Viking"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Viking"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#8C7BC6"
                                                                                            data-event="foreColor"
                                                                                            data-value="#8C7BC6"
                                                                                            title=""
                                                                                            aria-label="Blue Marguerite"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Blue Marguerite"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#C67BA5"
                                                                                            data-event="foreColor"
                                                                                            data-value="#C67BA5"
                                                                                            title="" aria-label="Puce"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Puce"></button>
                                                                                </div>
                                                                                <div class="note-color-row">
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#CE0000"
                                                                                            data-event="foreColor"
                                                                                            data-value="#CE0000"
                                                                                            title=""
                                                                                            aria-label="Guardsman Red"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Guardsman Red"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#E79439"
                                                                                            data-event="foreColor"
                                                                                            data-value="#E79439"
                                                                                            title=""
                                                                                            aria-label="Fire Bush"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Fire Bush"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#EFC631"
                                                                                            data-event="foreColor"
                                                                                            data-value="#EFC631"
                                                                                            title=""
                                                                                            aria-label="Golden Dream"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Golden Dream"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#6BA54A"
                                                                                            data-event="foreColor"
                                                                                            data-value="#6BA54A"
                                                                                            title=""
                                                                                            aria-label="Chelsea Cucumber"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Chelsea Cucumber"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#4A7B8C"
                                                                                            data-event="foreColor"
                                                                                            data-value="#4A7B8C"
                                                                                            title=""
                                                                                            aria-label="Smalt Blue"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Smalt Blue"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#3984C6"
                                                                                            data-event="foreColor"
                                                                                            data-value="#3984C6"
                                                                                            title=""
                                                                                            aria-label="Boston Blue"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Boston Blue"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#634AA5"
                                                                                            data-event="foreColor"
                                                                                            data-value="#634AA5"
                                                                                            title=""
                                                                                            aria-label="Butterfly Bush"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Butterfly Bush"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#A54A7B"
                                                                                            data-event="foreColor"
                                                                                            data-value="#A54A7B"
                                                                                            title=""
                                                                                            aria-label="Cadillac"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Cadillac"></button>
                                                                                </div>
                                                                                <div class="note-color-row">
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#9C0000"
                                                                                            data-event="foreColor"
                                                                                            data-value="#9C0000"
                                                                                            title=""
                                                                                            aria-label="Sangria"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Sangria"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#B56308"
                                                                                            data-event="foreColor"
                                                                                            data-value="#B56308"
                                                                                            title=""
                                                                                            aria-label="Mai Tai"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Mai Tai"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#BD9400"
                                                                                            data-event="foreColor"
                                                                                            data-value="#BD9400"
                                                                                            title=""
                                                                                            aria-label="Buddha Gold"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Buddha Gold"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#397B21"
                                                                                            data-event="foreColor"
                                                                                            data-value="#397B21"
                                                                                            title=""
                                                                                            aria-label="Forest Green"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Forest Green"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#104A5A"
                                                                                            data-event="foreColor"
                                                                                            data-value="#104A5A"
                                                                                            title="" aria-label="Eden"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Eden"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#085294"
                                                                                            data-event="foreColor"
                                                                                            data-value="#085294"
                                                                                            title=""
                                                                                            aria-label="Venice Blue"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Venice Blue"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#311873"
                                                                                            data-event="foreColor"
                                                                                            data-value="#311873"
                                                                                            title=""
                                                                                            aria-label="Meteorite"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Meteorite"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#731842"
                                                                                            data-event="foreColor"
                                                                                            data-value="#731842"
                                                                                            title="" aria-label="Claret"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Claret"></button>
                                                                                </div>
                                                                                <div class="note-color-row">
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#630000"
                                                                                            data-event="foreColor"
                                                                                            data-value="#630000"
                                                                                            title=""
                                                                                            aria-label="Rosewood"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Rosewood"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#7B3900"
                                                                                            data-event="foreColor"
                                                                                            data-value="#7B3900"
                                                                                            title=""
                                                                                            aria-label="Cinnamon"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Cinnamon"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#846300"
                                                                                            data-event="foreColor"
                                                                                            data-value="#846300"
                                                                                            title="" aria-label="Olive"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Olive"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#295218"
                                                                                            data-event="foreColor"
                                                                                            data-value="#295218"
                                                                                            title=""
                                                                                            aria-label="Parsley"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Parsley"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#083139"
                                                                                            data-event="foreColor"
                                                                                            data-value="#083139"
                                                                                            title="" aria-label="Tiber"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Tiber"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#003163"
                                                                                            data-event="foreColor"
                                                                                            data-value="#003163"
                                                                                            title=""
                                                                                            aria-label="Midnight Blue"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Midnight Blue"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#21104A"
                                                                                            data-event="foreColor"
                                                                                            data-value="#21104A"
                                                                                            title=""
                                                                                            aria-label="Valentino"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Valentino"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#4A1031"
                                                                                            data-event="foreColor"
                                                                                            data-value="#4A1031"
                                                                                            title="" aria-label="Loulou"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="Loulou"></button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <button type="button"
                                                                                    class="note-color-select btn btn-light btn-default"
                                                                                    data-event="openPalette"
                                                                                    data-value="foreColorPicker">Select
                                                                            </button>
                                                                            <input type="color" id="foreColorPicker"
                                                                                   class="note-btn note-color-select-btn"
                                                                                   value="#000000"
                                                                                   data-event="foreColorPalette"></div>
                                                                        <div class="note-holder-custom"
                                                                             id="foreColorPalette"
                                                                             data-event="foreColor">
                                                                            <div class="note-color-palette">
                                                                                <div class="note-color-row">
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFFFFF"
                                                                                            data-event="foreColor"
                                                                                            data-value="#FFFFFF"
                                                                                            title=""
                                                                                            aria-label="#FFFFFF"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="#FFFFFF"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFFFFF"
                                                                                            data-event="foreColor"
                                                                                            data-value="#FFFFFF"
                                                                                            title=""
                                                                                            aria-label="#FFFFFF"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="#FFFFFF"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFFFFF"
                                                                                            data-event="foreColor"
                                                                                            data-value="#FFFFFF"
                                                                                            title=""
                                                                                            aria-label="#FFFFFF"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="#FFFFFF"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFFFFF"
                                                                                            data-event="foreColor"
                                                                                            data-value="#FFFFFF"
                                                                                            title=""
                                                                                            aria-label="#FFFFFF"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="#FFFFFF"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFFFFF"
                                                                                            data-event="foreColor"
                                                                                            data-value="#FFFFFF"
                                                                                            title=""
                                                                                            aria-label="#FFFFFF"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="#FFFFFF"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFFFFF"
                                                                                            data-event="foreColor"
                                                                                            data-value="#FFFFFF"
                                                                                            title=""
                                                                                            aria-label="#FFFFFF"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="#FFFFFF"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFFFFF"
                                                                                            data-event="foreColor"
                                                                                            data-value="#FFFFFF"
                                                                                            title=""
                                                                                            aria-label="#FFFFFF"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="#FFFFFF"></button>
                                                                                    <button type="button"
                                                                                            class="note-color-btn"
                                                                                            style="background-color:#FFFFFF"
                                                                                            data-event="foreColor"
                                                                                            data-value="#FFFFFF"
                                                                                            title=""
                                                                                            aria-label="#FFFFFF"
                                                                                            data-toggle="button"
                                                                                            tabindex="-1"
                                                                                            data-original-title="#FFFFFF"></button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="note-btn-group btn-group note-para">
                                                            <button type="button" class="note-btn btn btn-light btn-sm"
                                                                    tabindex="-1" title=""
                                                                    aria-label="Unordered list (CTRL+SHIFT+NUM7)"
                                                                    data-original-title="Unordered list (CTRL+SHIFT+NUM7)">
                                                                <i class="note-icon-unorderedlist"></i></button>
                                                            <button type="button" class="note-btn btn btn-light btn-sm"
                                                                    tabindex="-1" title=""
                                                                    aria-label="Ordered list (CTRL+SHIFT+NUM8)"
                                                                    data-original-title="Ordered list (CTRL+SHIFT+NUM8)">
                                                                <i class="note-icon-orderedlist"></i></button>
                                                            <div class="note-btn-group btn-group">
                                                                <button type="button"
                                                                        class="note-btn btn btn-light btn-sm dropdown-toggle"
                                                                        tabindex="-1" data-toggle="dropdown" title=""
                                                                        aria-label="Paragraph"
                                                                        data-original-title="Paragraph"><i
                                                                        class="note-icon-align-left"></i></button>
                                                                <div class="note-dropdown-menu dropdown-menu"
                                                                     role="list">
                                                                    <div class="note-btn-group btn-group note-align">
                                                                        <button type="button"
                                                                                class="note-btn btn btn-light btn-sm"
                                                                                tabindex="-1" title=""
                                                                                aria-label="Align left (CTRL+SHIFT+L)"
                                                                                data-original-title="Align left (CTRL+SHIFT+L)">
                                                                            <i class="note-icon-align-left"></i>
                                                                        </button>
                                                                        <button type="button"
                                                                                class="note-btn btn btn-light btn-sm"
                                                                                tabindex="-1" title=""
                                                                                aria-label="Align center (CTRL+SHIFT+E)"
                                                                                data-original-title="Align center (CTRL+SHIFT+E)">
                                                                            <i class="note-icon-align-center"></i>
                                                                        </button>
                                                                        <button type="button"
                                                                                class="note-btn btn btn-light btn-sm"
                                                                                tabindex="-1" title=""
                                                                                aria-label="Align right (CTRL+SHIFT+R)"
                                                                                data-original-title="Align right (CTRL+SHIFT+R)">
                                                                            <i class="note-icon-align-right"></i>
                                                                        </button>
                                                                        <button type="button"
                                                                                class="note-btn btn btn-light btn-sm"
                                                                                tabindex="-1" title=""
                                                                                aria-label="Justify full (CTRL+SHIFT+J)"
                                                                                data-original-title="Justify full (CTRL+SHIFT+J)">
                                                                            <i class="note-icon-align-justify"></i>
                                                                        </button>
                                                                    </div>
                                                                    <div class="note-btn-group btn-group note-list">
                                                                        <button type="button"
                                                                                class="note-btn btn btn-light btn-sm"
                                                                                tabindex="-1" title=""
                                                                                aria-label="Outdent (CTRL+[)"
                                                                                data-original-title="Outdent (CTRL+[)">
                                                                            <i class="note-icon-align-outdent"></i>
                                                                        </button>
                                                                        <button type="button"
                                                                                class="note-btn btn btn-light btn-sm"
                                                                                tabindex="-1" title=""
                                                                                aria-label="Indent (CTRL+])"
                                                                                data-original-title="Indent (CTRL+])"><i
                                                                                class="note-icon-align-indent"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="note-btn-group btn-group note-table">
                                                            <div class="note-btn-group btn-group">
                                                                <button type="button"
                                                                        class="note-btn btn btn-light btn-sm dropdown-toggle"
                                                                        tabindex="-1" data-toggle="dropdown" title=""
                                                                        aria-label="Table" data-original-title="Table">
                                                                    <i class="note-icon-table"></i></button>
                                                                <div class="note-dropdown-menu dropdown-menu note-table"
                                                                     role="list" aria-label="Table">
                                                                    <div class="note-dimension-picker">
                                                                        <div class="note-dimension-picker-mousecatcher"
                                                                             data-event="insertTable" data-value="1x1"
                                                                             style="width: 10em; height: 10em;"></div>
                                                                        <div
                                                                            class="note-dimension-picker-highlighted"></div>
                                                                        <div
                                                                            class="note-dimension-picker-unhighlighted"></div>
                                                                    </div>
                                                                    <div class="note-dimension-display">1 x 1</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="note-btn-group btn-group note-insert">
                                                            <button type="button" class="note-btn btn btn-light btn-sm"
                                                                    tabindex="-1" title="" aria-label="Link (CTRL+K)"
                                                                    data-original-title="Link (CTRL+K)"><i
                                                                    class="note-icon-link"></i></button>
                                                            <button type="button" class="note-btn btn btn-light btn-sm"
                                                                    tabindex="-1" title="" aria-label="Video"
                                                                    data-original-title="Video"><i
                                                                    class="note-icon-video"></i></button>
                                                        </div>
                                                        <div class="note-btn-group btn-group note-view">
                                                            <button type="button"
                                                                    class="note-btn btn btn-light btn-sm btn-codeview note-codeview-keep"
                                                                    tabindex="-1" title="" aria-label="Code View"
                                                                    data-original-title="Code View"><i
                                                                    class="note-icon-code"></i></button>
                                                            <button type="button" class="note-btn btn btn-light btn-sm"
                                                                    tabindex="-1" title="" aria-label="Help"
                                                                    data-original-title="Help"><i
                                                                    class="note-icon-question"></i></button>
                                                        </div>
                                                        <div class="note-btn-group btn-group note-popovers">
                                                            <button type="button" class="note-btn btn btn-light btn-sm"
                                                                    tabindex="-1" title=""
                                                                    aria-label="Insert image with filemanager"
                                                                    data-original-title="Insert image with filemanager">
                                                                <i class="note-icon-picture"></i></button>
                                                        </div>
                                                        <div class="note-btn-group btn-group note-paperSize"></div>
                                                    </div>
                                                    <div class="note-editing-area">
                                                        <div class="note-placeholder" style="display: block;">
                                                        </div>
                                                        <div class="note-handle">
                                                            <div class="note-control-selection">
                                                                <div class="note-control-selection-bg"></div>
                                                                <div class="note-control-holder note-control-nw"></div>
                                                                <div class="note-control-holder note-control-ne"></div>
                                                                <div class="note-control-holder note-control-sw"></div>
                                                                <div class="note-control-sizing note-control-se"></div>
                                                                <div class="note-control-selection-info"></div>
                                                            </div>
                                                        </div>
                                                        <textarea class="note-codable" aria-multiline="true"></textarea>
                                                        <div class="note-editable card-block" contenteditable="true"
                                                             role="textbox" aria-multiline="true" spellcheck="true"
                                                             autocorrect="true" style="height: 400px;"><p><br></p></div>
                                                    </div>
                                                    <output class="note-status-output" role="status"
                                                            aria-live="polite"></output>
                                                    <div class="note-statusbar" role="status">
                                                        <div class="note-resizebar" aria-label="Resize">
                                                            <div class="note-icon-bar"></div>
                                                            <div class="note-icon-bar"></div>
                                                            <div class="note-icon-bar"></div>
                                                        </div>
                                                    </div>
                                                    <div class="note-popover popover in note-link-popover bottom">
                                                        <div class="arrow"></div>
                                                        <div class="popover-content note-children-container"><span><a
                                                                    target="_blank"></a>&nbsp;</span>
                                                            <div class="note-btn-group btn-group note-link">
                                                                <button type="button"
                                                                        class="note-btn btn btn-light btn-sm"
                                                                        tabindex="-1" title="" aria-label="Edit"
                                                                        data-original-title="Edit"><i
                                                                        class="note-icon-link"></i></button>
                                                                <button type="button"
                                                                        class="note-btn btn btn-light btn-sm"
                                                                        tabindex="-1" title="" aria-label="Unlink"
                                                                        data-original-title="Unlink"><i
                                                                        class="note-icon-chain-broken"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="note-popover popover in note-image-popover bottom">
                                                        <div class="arrow"></div>
                                                        <div class="popover-content note-children-container">
                                                            <div class="note-btn-group btn-group note-resize">
                                                                <button type="button"
                                                                        class="note-btn btn btn-light btn-sm"
                                                                        tabindex="-1" title="" aria-label="Resize full"
                                                                        data-original-title="Resize full"><span
                                                                        class="note-fontsize-10">100%</span></button>
                                                                <button type="button"
                                                                        class="note-btn btn btn-light btn-sm"
                                                                        tabindex="-1" title="" aria-label="Resize half"
                                                                        data-original-title="Resize half"><span
                                                                        class="note-fontsize-10">50%</span></button>
                                                                <button type="button"
                                                                        class="note-btn btn btn-light btn-sm"
                                                                        tabindex="-1" title=""
                                                                        aria-label="Resize quarter"
                                                                        data-original-title="Resize quarter"><span
                                                                        class="note-fontsize-10">25%</span></button>
                                                                <button type="button"
                                                                        class="note-btn btn btn-light btn-sm"
                                                                        tabindex="-1" title=""
                                                                        aria-label="Original size"
                                                                        data-original-title="Original size"><i
                                                                        class="note-icon-rollback"></i></button>
                                                            </div>
                                                            <div class="note-btn-group btn-group note-float">
                                                                <button type="button"
                                                                        class="note-btn btn btn-light btn-sm"
                                                                        tabindex="-1" title="" aria-label="Float Left"
                                                                        data-original-title="Float Left"><i
                                                                        class="note-icon-float-left"></i></button>
                                                                <button type="button"
                                                                        class="note-btn btn btn-light btn-sm"
                                                                        tabindex="-1" title="" aria-label="Float Right"
                                                                        data-original-title="Float Right"><i
                                                                        class="note-icon-float-right"></i></button>
                                                                <button type="button"
                                                                        class="note-btn btn btn-light btn-sm"
                                                                        tabindex="-1" title="" aria-label="Remove float"
                                                                        data-original-title="Remove float"><i
                                                                        class="note-icon-rollback"></i></button>
                                                            </div>
                                                            <div class="note-btn-group btn-group note-remove">
                                                                <button type="button"
                                                                        class="note-btn btn btn-light btn-sm"
                                                                        tabindex="-1" title="" aria-label="Remove Image"
                                                                        data-original-title="Remove Image"><i
                                                                        class="note-icon-trash"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="note-popover popover in note-table-popover bottom">
                                                        <div class="arrow"></div>
                                                        <div class="popover-content note-children-container">
                                                            <div class="note-btn-group btn-group note-add">
                                                                <button type="button"
                                                                        class="note-btn btn btn-light btn-sm btn-md"
                                                                        tabindex="-1" title=""
                                                                        aria-label="Add row below"
                                                                        data-original-title="Add row below"><i
                                                                        class="note-icon-row-below"></i></button>
                                                                <button type="button"
                                                                        class="note-btn btn btn-light btn-sm btn-md"
                                                                        tabindex="-1" title=""
                                                                        aria-label="Add row above"
                                                                        data-original-title="Add row above"><i
                                                                        class="note-icon-row-above"></i></button>
                                                                <button type="button"
                                                                        class="note-btn btn btn-light btn-sm btn-md"
                                                                        tabindex="-1" title=""
                                                                        aria-label="Add column left"
                                                                        data-original-title="Add column left"><i
                                                                        class="note-icon-col-before"></i></button>
                                                                <button type="button"
                                                                        class="note-btn btn btn-light btn-sm btn-md"
                                                                        tabindex="-1" title=""
                                                                        aria-label="Add column right"
                                                                        data-original-title="Add column right"><i
                                                                        class="note-icon-col-after"></i></button>
                                                            </div>
                                                            <div class="note-btn-group btn-group note-delete">
                                                                <button type="button"
                                                                        class="note-btn btn btn-light btn-sm btn-md"
                                                                        tabindex="-1" title="" aria-label="Delete row"
                                                                        data-original-title="Delete row"><i
                                                                        class="note-icon-row-remove"></i></button>
                                                                <button type="button"
                                                                        class="note-btn btn btn-light btn-sm btn-md"
                                                                        tabindex="-1" title=""
                                                                        aria-label="Delete column"
                                                                        data-original-title="Delete column"><i
                                                                        class="note-icon-col-remove"></i></button>
                                                                <button type="button"
                                                                        class="note-btn btn btn-light btn-sm btn-md"
                                                                        tabindex="-1" title="" aria-label="Delete table"
                                                                        data-original-title="Delete table"><i
                                                                        class="note-icon-trash"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                @error('description')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-6">

                                            <div class="form-group mb-1 d-flex align-items-center">
                                                <label class="cursor-pointer mb-0 input-label mr-2"
                                                       for="orderingSwitch">Enable Ordering</label>
                                                <div class="custom-control custom-switch d-inline-block">
                                                    <input type="checkbox" name="ordering" class="custom-control-input"
                                                           id="orderingSwitch">
                                                    <label class="custom-control-label" for="orderingSwitch"></label>
                                                </div>
                                            </div>

                                            <p class="text-gray font-12">By disabling this toggle, users won't be able
                                                to order this product.</p>
                                        </div>
                                    </div>
                                </section>


                                <div class="row">
                                    <div class="col-12">
                                        <input type="hidden" id="productStatusInput" name="status" value="draft">

                                        <button id="saveAndPublish" class="btn btn-success">Save and Continue</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->

    <div class="modal fade" id="fileDescriptionModal" aria-labelledby="fileDescriptionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fileDescriptionModalLabel">Description</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="d-none" id="productFileModal">
        <h3 class="section-title after-line font-20 text-dark-blue mb-25">New File</h3>
        <form action="/admin/store/products/files/store" method="post" enctype="multipart/form-data">
            <input type="hidden" name="product_id" value="">

            <div class="form-group">
                <label class="input-label">Language</label>
                <select name="locale" class="form-control ">
                    <option value="EN" selected="">English</option>
                    <option value="AR">Arabic</option>
                    <option value="ES">Spanish</option>
                </select>
            </div>

            <div class="form-group">
                <label class="input-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Maximum 255 characters">
                <div class="invalid-feedback"></div>
            </div>

            <div class="form-group js-file-path-input">
                <div class="local-input input-group">
                    <div class="input-group-prepend">
                        <button type="button" class="input-group-text admin-file-manager" data-input="file_path_record"
                                data-preview="holder">
                            <i class="fa fa-upload"></i>
                        </button>
                    </div>
                    <input type="text" name="path" id="file_path_record" value="" class="js-file_path form-control"
                           placeholder="Select a file">
                    <div class="invalid-feedback"></div>
                </div>
            </div>

            <div class="row form-group js-file-type-volume">
                <div class="col-6">
                    <label class="input-label">File type</label>
                    <select name="file_type" class="js-ajax-file_type form-control">
                        <option value="">Select file type</option>

                        <option value="pdf">PDF</option>
                        <option value="powerpoint">Powerpoint</option>
                        <option value="sound">Sound</option>
                        <option value="video">Video</option>
                        <option value="image">Image</option>
                        <option value="archive">Archive</option>
                        <option value="document">Document</option>
                        <option value="project">Project</option>
                    </select>
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col-6">
                    <label class="input-label">Volume (MB)</label>
                    <input type="text" name="volume" value="" class="js-ajax-volume form-control"
                           placeholder="Write file volume (MB)">
                    <div class="invalid-feedback"></div>
                </div>
            </div>

            <div class="form-group">
                <label class="input-label">Description</label>
                <textarea name="description" rows="4" class="js-description form-control"
                          placeholder="Description"></textarea>
                <div class="invalid-feedback"></div>
            </div>

            <div class="js-online_viewer-input form-group mt-20 d-none">
                <div class="d-flex align-items-center justify-content-between">
                    <label class="cursor-pointer input-label" for="online_viewerSwitch_record">Online viewer</label>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" name="online_viewer" class="custom-control-input"
                               id="online_viewerSwitch_record">
                        <label class="custom-control-label" for="online_viewerSwitch_record"></label>
                    </div>
                </div>
            </div>

            <div class="form-group mt-20">
                <div class="d-flex align-items-center justify-content-between">
                    <label class="cursor-pointer input-label mr-2" for="fileStatusSwitch_record">Active</label>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" name="status" class="custom-control-input" id="fileStatusSwitch_record">
                        <label class="custom-control-label" for="fileStatusSwitch_record"></label>
                    </div>
                </div>
            </div>

            <div class="mt-3 d-flex align-items-center justify-content-end">
                <button type="button" id="saveFile" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger ml-2 close-swl">Close</button>
            </div>
        </form>
    </div>
@endsection

@push('scripts_bottom')

@endpush
