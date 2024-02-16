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
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-box"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Physical Products</h4>
                            </div>
                            <div class="card-body d-flex flex-column p-0">
                                <span>2</span>
                                <span class="font-12 font-weight-normal mt-1">Sales: 5</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-file-download"></i>
                        </div>

                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Virtual Products</h4>
                            </div>
                            <div class="card-body d-flex flex-column p-0">
                                <span>3</span>
                                <span class="font-12 font-weight-normal mt-1">Sales: 3</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-info">
                            <i class="fas fa-store"></i>
                        </div>

                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Sellers</h4>
                            </div>
                            <div class="card-body">
                                4
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Customers</h4>
                            </div>
                            <div class="card-body">
                                1
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="card">
                <div class="card-body">
                    <form method="get" class="mb-0">
                        <input type="hidden" name="type" value="">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">Search</label>
                                    <input name="title" type="text" class="form-control" value="">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">Start Date</label>
                                    <div class="input-group">
                                        <input type="date" id="from" class="text-center form-control" name="from"
                                               value="" placeholder="Start Date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">End Date</label>
                                    <div class="input-group">
                                        <input type="date" id="to" class="text-center form-control" name="to" value=""
                                               placeholder="End Date">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">Filters</label>
                                    <select name="sort" data-plugin-selecttwo="" class="form-control populate">
                                        <option value="">Filter Type</option>
                                        <option value="has_discount">Discounted Courses</option>
                                        <option value="sales_asc">Sales - Ascending</option>
                                        <option value="sales_desc">Sales - Descending</option>
                                        <option value="price_asc">Price - Ascending</option>
                                        <option value="price_desc">Price - Descending</option>
                                        <option value="income_asc">Income - Ascending</option>
                                        <option value="income_desc">Income - Descending</option>
                                        <option value="created_at_asc">Created Date - Ascending</option>
                                        <option value="created_at_desc">Created Date - Descending</option>
                                        <option value="updated_at_asc">Updated Date - Ascending</option>
                                        <option value="updated_at_desc">Updated Date - Descending</option>
                                        <option value="inventory_asc">Inventory Ascending</option>
                                        <option value="inventory_desc">Inventory Descending</option>
                                        <option value="no_inventory">Out of Stock</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">Seller</label>
                                    <select name="creator_ids[]" multiple=""
                                            class="form-control search-user-select2 select2-hidden-accessible"
                                            data-placeholder="Search seller" data-select2-id="select2-data-1-zm03"
                                            tabindex="-1" aria-hidden="true">

                                    </select>
                                    {{--                                    <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-02g5" style="width: 267.3px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-creator_ids-6k-container"></ul><span class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-describedby="select2-creator_ids-6k-container" placeholder="Search seller" style="width: 100%;"></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">Category</label>
                                    <select name="category_id" data-plugin-selecttwo="" class="form-control populate">
                                        <option value="">All Categories</option>

                                        <option value="1">Design Tools</option>
                                        <option value="2">Science Tools</option>
                                        <option value="3">e-book</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">Status</label>
                                    <select name="status" data-plugin-selecttwo="" class="form-control populate">
                                        <option value="">All Statuses</option>
                                        <option value="pending">Pending</option>
                                        <option value="inactive">Rejected</option>
                                        <option value="draft">Draft</option>
                                    </select>
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
                        <div class="card-header text-right">
                            <a href="/admin/store/products/excel?in_house_products=true&amp;" class="btn btn-primary">Export
                                Excel</a>

                            <a href="/admin/store/products/create?in_house_product=true" target="_blank"
                               class="btn btn-primary ml-2">Create new product</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped font-14 ">
                                    <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <th class="text-left">Title</th>
                                        <th class="text-left">Creator</th>
                                        <th>Type</th>
                                        <th>Inventory</th>
                                        <th>Price</th>
                                        <th>Delivery Fee</th>
                                        <th>Sales</th>
                                        <th>Income</th>
                                        <th>Updated Date</th>
                                        <th>Created Date</th>
                                        <th>Status</th>
                                        <th width="120">Actions</th>
                                    </tr>
                                    @foreach($products->toArray()['data'] as $key => $product)
                                        <tr class="text-center">
                                            <td>{{ $key + 1 }}</td>
                                            <td width="18%" class="text-left">
                                                <a class="text-primary mt-0 mb-1 font-weight-bold"
                                                   href="{{ $product['slug'] }}">
                                                    {{ $product['translations'][0]['title'] }}
                                                </a>
                                                <div
                                                    class="text-small">{{ $product['category']['translations'][0]['title'] ?? '' }}</div>
                                            </td>

                                            <td class="text-left">{{ $product['creator']['full_name'] }}</td>

                                            <td>
                                                {{ $product['type'] }}
                                            </td>

                                            <td>
                                                <span class="text-primary mt-0 mb-1 font-weight-bold">
                                                    {{ $product['inventory'] }}
                                                </span>
                                            </td>

                                            <td>
                                                {{ $product['price'] }}đ
                                            </td>

                                            <td>
                                                {{ $product['delivery_fee'] }}đ
                                            </td>

                                            <td>
                                                <span class="text-primary mt-0 mb-1 font-weight-bold">
                                                    {{ $product['commission'] }}%
                                                </span>
                                            </td>

                                            <td>
                                                {{ $product['price'] - ($product['price'] * $product['commission'] / 100) }}đ
                                            </td>

                                            <td class="font-12">{{ date("d/m/Y", $product['updated_at']) }}</td>

                                            <td class="font-12">{{ date("d/m/Y", $product['created_at']) }}</td>

                                            <td>
                                                <div class="@if($product['status'] == 'draft') text-danger @elseif($product['status'] == 'pending') text-primary @else text-success @endif font-600-bold">{{ $product['status'] }}</div>
                                            </td>

                                            <td width="120" class="btn-sm">

                                                <a href="/admin/store/products/{{ $product['id'] }}/edit" target="_blank"
                                                   class="btn-transparent btn-sm text-primary mt-1"
                                                   data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="Edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>

                                                <button
                                                    class="btn-transparent text-primary btn-sm mt-1 trigger--fire-modal-1"
                                                    data-confirm="Are you sure? | Do you want to continue?"
                                                    data-confirm-href="/admin/store/products/{{ $product['id'] }}/delete"
                                                    data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel"
                                                    data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="Delete">
                                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card-footer text-center">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts_bottom')

@endpush
