@extends('web.default.layouts.app')

@push('styles_top')
    <link rel="stylesheet" href="/assets/default/vendors/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/vendors/leaflet/leaflet.css">
    <link rel="stylesheet" href="/assets/vendors/leaflet/leaflet.markercluster/markerCluster.css">
    <link rel="stylesheet" href="/assets/vendors/leaflet/leaflet.markercluster/markerCluster.Default.css">
    <link rel="stylesheet" href="/assets/vendors/wrunner-html-range-slider-with-2-handles/css/wrunner-default-theme.css">
@endpush

@section('content')
    <div class="instructor-finder">

        <section id="instructorFinderMap" class="instructor-finder-map leaflet-container leaflet-touch leaflet-retina leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom" data-latitude="37.71859" data-longitude="37.617188" data-zoom="3" tabindex="0" style="position: relative;">

            <div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);"><div class="leaflet-pane leaflet-tile-pane"><div class="leaflet-layer " style="z-index: 1; opacity: 1;"><div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 18; transform: translate3d(0px, 0px, 0px) scale(1);"><img alt="" role="presentation" src="https://c.tile.openstreetmap.org/2/1/1.png" class="leaflet-tile leaflet-tile-loaded" style="width: 512px; height: 512px; transform: translate3d(33px, -5px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://a.tile.openstreetmap.org/2/2/1.png" class="leaflet-tile leaflet-tile-loaded" style="width: 512px; height: 512px; transform: translate3d(545px, -5px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://a.tile.openstreetmap.org/2/1/2.png" class="leaflet-tile leaflet-tile-loaded" style="width: 512px; height: 512px; transform: translate3d(33px, 507px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.tile.openstreetmap.org/2/2/2.png" class="leaflet-tile leaflet-tile-loaded" style="width: 512px; height: 512px; transform: translate3d(545px, 507px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.tile.openstreetmap.org/2/0/1.png" class="leaflet-tile leaflet-tile-loaded" style="width: 512px; height: 512px; transform: translate3d(-479px, -5px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://b.tile.openstreetmap.org/2/3/1.png" class="leaflet-tile leaflet-tile-loaded" style="width: 512px; height: 512px; transform: translate3d(1057px, -5px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://c.tile.openstreetmap.org/2/0/2.png" class="leaflet-tile leaflet-tile-loaded" style="width: 512px; height: 512px; transform: translate3d(-479px, 507px, 0px); opacity: 1;"><img alt="" role="presentation" src="https://c.tile.openstreetmap.org/2/3/2.png" class="leaflet-tile leaflet-tile-loaded" style="width: 512px; height: 512px; transform: translate3d(1057px, 507px, 0px); opacity: 1;"></div></div></div><div class="leaflet-pane leaflet-shadow-pane"></div><div class="leaflet-pane leaflet-overlay-pane"></div><div class="leaflet-pane leaflet-marker-pane"><div class="leaflet-marker-icon rounded-circle bg-white border-0 leaflet-zoom-animated leaflet-interactive" tabindex="0" style="margin-left: -26.7161px; margin-top: 74.0115px; width: 50px; height: 50px; transform: translate3d(124px, 253px, 0px); z-index: 253;"><div class="marker-pin rounded-circle"><img src="/store/1015/avatar/617a4f2fb8a6d.png" class="img-cover rounded-circle" alt="Robert Ransdell"></div></div><div class="leaflet-marker-icon marker-cluster marker-cluster-small leaflet-zoom-animated leaflet-interactive" tabindex="0" style="margin-left: -20px; margin-top: -20px; width: 40px; height: 40px; transform: translate3d(790px, 363px, 0px); z-index: 363;"><div><span>2</span></div></div><div class="leaflet-marker-icon marker-cluster marker-cluster-small leaflet-zoom-animated leaflet-interactive" tabindex="0" style="margin-left: -20px; margin-top: -20px; width: 40px; height: 40px; transform: translate3d(972px, 368px, 0px); z-index: 368;"><div><span>2</span></div></div><div class="leaflet-marker-icon marker-cluster marker-cluster-small leaflet-zoom-animated leaflet-interactive" tabindex="0" style="margin-left: -20px; margin-top: -20px; width: 40px; height: 40px; transform: translate3d(634px, 448px, 0px); z-index: 448;"><div><span>2</span></div></div><div class="leaflet-marker-icon marker-cluster marker-cluster-small leaflet-zoom-animated leaflet-interactive" tabindex="0" style="margin-left: -20px; margin-top: -20px; width: 40px; height: 40px; transform: translate3d(551px, 190px, 0px); z-index: 190;"><div><span>3</span></div></div></div><div class="leaflet-pane leaflet-tooltip-pane"></div><div class="leaflet-pane leaflet-popup-pane"></div><div class="leaflet-proxy leaflet-zoom-animated" style="transform: translate3d(1238px, 792px, 0px) scale(4);"></div></div><div class="leaflet-control-container"><div class="leaflet-top leaflet-left"><div class="leaflet-control-zoom leaflet-bar leaflet-control"><a class="leaflet-control-zoom-in" href="#" title="Zoom in" role="button" aria-label="Zoom in">+</a><a class="leaflet-control-zoom-out leaflet-disabled" href="#" title="Zoom out" role="button" aria-label="Zoom out">−</a></div></div><div class="leaflet-top leaflet-right"></div><div class="leaflet-bottom leaflet-left"></div><div class="leaflet-bottom leaflet-right"><div class="leaflet-control-attribution leaflet-control"><a href="http://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> | © <a target="_blank" rel="nofollow" href="http://www.openstreetmap.org/copyright">OpenStreetMap</a></div></div></div></section>

        <div class="container">

            <form id="filtersForm" action="/instructor-finder?" method="get">

                <div id="topFilters" class="mt-25 shadow-lg border border-gray300 rounded-sm p-10 p-md-20">
                    <div class="row align-items-center">
                        <div class="col-lg-9 d-block d-md-flex align-items-center justify-content-start my-25 my-lg-0">
                            <div class="d-flex align-items-center justify-content-between justify-content-md-center">
                                <label class="mb-0 mr-10 cursor-pointer" for="available_for_meetings">Available for Meetings</label>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" name="available_for_meetings" class="custom-control-input" id="available_for_meetings">
                                    <label class="custom-control-label" for="available_for_meetings"></label>
                                </div>
                            </div>

                            <div class="d-flex align-items-center justify-content-between justify-content-md-center mx-0 mx-md-20 my-20 my-md-0">
                                <label class="mb-0 mr-10 cursor-pointer" for="free_meetings">Free Meetings</label>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" name="free_meetings" class="custom-control-input" id="free_meetings">
                                    <label class="custom-control-label" for="free_meetings"></label>
                                </div>
                            </div>

                            <div class="d-flex align-items-center justify-content-between justify-content-md-center">
                                <label class="mb-0 mr-10 cursor-pointer" for="discount">Discount</label>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" name="discount" class="custom-control-input" id="discount">
                                    <label class="custom-control-label" for="discount"></label>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-3 d-flex align-items-center">
                            <select name="sort" class="form-control">
                                <option disabled="" selected="">Sort by</option>
                                <option value="">All</option>
                                <option value="top_rate">Top rate</option>
                                <option value="top_sale">Top sellers</option>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="row flex-lg-row-reverse">
                    <div class="col-12 col-lg-8">

                        <div id="instructorsList">
                            <a href="/users/1016/profile" class="">
                                <div class="position-relative d-flex flex-wrap instructor-finder-card border border-gray300 rounded-sm py-25 mt-20">

                                    <div class="col-12 col-md-8 d-flex">
                                        <div class="instructor-avatar rounded-circle">
                                            <img src="/store/1016/avatar/617a4f17c8e72.png" class="img-cover rounded-circle" alt="Ricardo dave">
                                        </div>

                                        <div class="ml-20">
                                            <h3 class="font-16 font-weight-bold text-secondary">Ricardo dave</h3>

                                            <div>
                                                <span class="d-block font-12 text-gray">Data Analyst at Microsoft</span>

                                                <div class="d-block font-14 text-gray mt-5">
                                                    <span>Design, </span>
                                                    <span>Web Development, </span>
                                                    <span>Mobile Development</span>
                                                </div>
                                            </div>

                                            <p class="font-14 text-gray mt-10">Ricardo dave has a BS and MS in Mechanical Engineering from Santa Clara University and years of experience as a professional instructor and trainer for Data Science and programming. He has ...</p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-4 mt-10 mt-md-0 pt-10 pt-md-0 instructor-finder-card-right-side position-relative">

                                        <div class="d-flex align-items-start">
                                            <div class="d-flex flex-column">
                                                <span class="font-20 font-weight-bold text-primary">$60</span>

                                            </div>

                                            <span class="font-14 font-weight-500 text-gray mt-5">/Hour</span>
                                        </div>

                                        <div class="stars-card d-flex align-items-center  mt-15">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star active"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star active"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star active"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star active"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>

                                            <span class="badge badge-primary ml-10">4.58</span>
                                        </div>

                                        <div class="d-flex align-items-center mt-20">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock text-dark-blue"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>

                                            <span class="font-14 font-weight-500 text-dark-blue ml-10">0 Hours Tutoring</span>
                                        </div>

                                        <div class="d-flex align-items-center flex-wrap mt-15">
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Old Membership">
                                                <img src="/store/1/default_images/badges/faithful_user.png" class="img-cover rounded-circle" alt="Faithful User">
                                            </div>
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Has 1 Class">
                                                <img src="/store/1/default_images/badges/junior_vendor.png" class="img-cover rounded-circle" alt="Junior Vendor">
                                            </div>
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Classes Rating from 4 to 5">
                                                <img src="/store/1/default_images/badges/golden_classes.png" class="img-cover rounded-circle" alt="Golden Classes">
                                            </div>
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Classes Sales from 3 to 9">
                                                <img src="/store/1/default_images/badges/top_seller.png" class="img-cover rounded-circle" alt="Top Seller">
                                            </div>
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Support Rating from 4 to 5">
                                                <img src="/store/1/default_images/badges/fantastic_support.png" class="img-cover rounded-circle" alt="Fantastic Support">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="/users/1015/profile" class="">
                                <div class="position-relative d-flex flex-wrap instructor-finder-card border border-gray300 rounded-sm py-25 mt-20">

                                    <div class="col-12 col-md-8 d-flex">
                                        <div class="instructor-avatar rounded-circle">
                                            <img src="/store/1015/avatar/617a4f2fb8a6d.png" class="img-cover rounded-circle" alt="Robert Ransdell">
                                        </div>

                                        <div class="ml-20">
                                            <h3 class="font-16 font-weight-bold text-secondary">Robert Ransdell</h3>

                                            <div>
                                                <span class="d-block font-12 text-gray">System Administrator at Amazon</span>

                                                <div class="d-block font-14 text-gray mt-5">
                                                    <span>Management, </span>
                                                    <span>Web Development, </span>
                                                    <span>Mobile Development</span>
                                                </div>
                                            </div>

                                            <p class="font-14 text-gray mt-10">Robert started his career as a Unix and Linux System Engineer in 1999. Since that time he has utilized his Linux skills at companies such as Xerox, UPS, Hewlett-Packard, and Amazon.com. Additionally, ...</p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-4 mt-10 mt-md-0 pt-10 pt-md-0 instructor-finder-card-right-side position-relative">

                                        <div class="d-flex align-items-start">
                                            <div class="d-flex flex-column">
                                                <span class="font-20 font-weight-bold text-primary">$100</span>

                                            </div>

                                            <span class="font-14 font-weight-500 text-gray mt-5">/Hour</span>
                                        </div>

                                        <div class="stars-card d-flex align-items-center  mt-15">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star active"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star active"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star active"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star active"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>

                                            <span class="badge badge-primary ml-10">4.75</span>
                                        </div>

                                        <div class="d-flex align-items-center mt-20">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock text-dark-blue"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>

                                            <span class="font-14 font-weight-500 text-dark-blue ml-10">0 Hours Tutoring</span>
                                        </div>

                                        <div class="d-flex align-items-center flex-wrap mt-15">
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Old Membership">
                                                <img src="/store/1/default_images/badges/faithful_user.png" class="img-cover rounded-circle" alt="Faithful User">
                                            </div>
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Has 3 to 6 Classes">
                                                <img src="/store/1/default_images/badges/expert_vendor.png" class="img-cover rounded-circle" alt="Expert Vendor">
                                            </div>
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Classes Rating from 4 to 5">
                                                <img src="/store/1/default_images/badges/golden_classes.png" class="img-cover rounded-circle" alt="Golden Classes">
                                            </div>
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Classes Sales from 10 to 20">
                                                <img src="/store/1/default_images/badges/king_seller.png" class="img-cover rounded-circle" alt="King Seller">
                                            </div>
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Support Rating from 4 to 5">
                                                <img src="/store/1/default_images/badges/fantastic_support.png" class="img-cover rounded-circle" alt="Fantastic Support">
                                            </div>
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Has 2 to 5 Topics">
                                                <img src="/store/1/default_images/badges/Forums Top User.svg" class="img-cover rounded-circle" alt="Forums Top User">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="/users/934/profile" class="">
                                <div class="position-relative d-flex flex-wrap instructor-finder-card border border-gray300 rounded-sm py-25 mt-20">

                                    <div class="col-12 col-md-8 d-flex">
                                        <div class="instructor-avatar rounded-circle">
                                            <img src="/store/934/avatar/617a4f418be6b.png" class="img-cover rounded-circle" alt="Linda Anderson">
                                        </div>

                                        <div class="ml-20">
                                            <h3 class="font-16 font-weight-bold text-secondary">Linda Anderson</h3>

                                            <div>
                                                <span class="d-block font-12 text-gray">IT Technician at IBM</span>

                                                <div class="d-block font-14 text-gray mt-5">
                                                    <span>Marketing, </span>
                                                    <span>Web Development, </span>
                                                    <span>Mobile Development, </span>
                                                    <span>Game Development</span>
                                                </div>
                                            </div>

                                            <p class="font-14 text-gray mt-10">I am a programmer with over 12 years' experience gained in a range of industries, the last 16 with IBM.

                                                I am now self employed developing apps for Android; programming in a range of languages ...</p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-4 mt-10 mt-md-0 pt-10 pt-md-0 instructor-finder-card-right-side position-relative">

                                        <div class="d-flex align-items-start">
                                            <div class="d-flex flex-column">
                                                <span class="font-20 font-weight-bold text-primary">$100</span>

                                            </div>

                                            <span class="font-14 font-weight-500 text-gray mt-5">/Hour</span>
                                        </div>

                                        <div class="stars-card d-flex align-items-center  mt-15">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star active"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star active"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star active"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star active"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>

                                            <span class="badge badge-primary ml-10">4.63</span>
                                        </div>

                                        <div class="d-flex align-items-center mt-20">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock text-dark-blue"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>

                                            <span class="font-14 font-weight-500 text-dark-blue ml-10">0 Hours Tutoring</span>
                                        </div>

                                        <div class="d-flex align-items-center flex-wrap mt-15">
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Old Membership">
                                                <img src="/store/1/default_images/badges/faithful_user.png" class="img-cover rounded-circle" alt="Faithful User">
                                            </div>
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Has 2 Classes">
                                                <img src="/store/1/default_images/badges/senior_vendor.png" class="img-cover rounded-circle" alt="Senior Vendor">
                                            </div>
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Classes Rating from 4 to 5">
                                                <img src="/store/1/default_images/badges/golden_classes.png" class="img-cover rounded-circle" alt="Golden Classes">
                                            </div>
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Classes Sales from 1 to 2">
                                                <img src="/store/1/default_images/badges/best_seller.png" class="img-cover rounded-circle" alt="Best Seller">
                                            </div>
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Support Rating from 4 to 5">
                                                <img src="/store/1/default_images/badges/fantastic_support.png" class="img-cover rounded-circle" alt="Fantastic Support">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="/users/929/profile" class="">
                                <div class="position-relative d-flex flex-wrap instructor-finder-card border border-gray300 rounded-sm py-25 mt-20">

                                    <div class="col-12 col-md-8 d-flex">
                                        <div class="instructor-avatar rounded-circle">
                                            <img src="/store/929/avatar/617a4f5d834c8.png" class="img-cover rounded-circle" alt="Kate Williams">
                                        </div>

                                        <div class="ml-20">
                                            <h3 class="font-16 font-weight-bold text-secondary">Kate Williams</h3>

                                            <div>
                                                <span class="d-block font-12 text-gray">Computer Engineer at Oracle</span>

                                                <div class="d-block font-14 text-gray mt-5">
                                                    <span>Lifestyle, </span>
                                                    <span>Marketing, </span>
                                                    <span>Management, </span>
                                                    <span>Communications, </span>
                                                    <span>Business Strategy</span>
                                                </div>
                                            </div>

                                            <p class="font-14 text-gray mt-10">"Short courses for busy managers"

                                                Hi there, my name is Kate Williams and I've been managing projects and virtual teams for the past 10+ years.

                                                I'm currently a Director at Cisco Systems,* where I ...</p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-4 mt-10 mt-md-0 pt-10 pt-md-0 instructor-finder-card-right-side position-relative">

                                        <div class="d-flex align-items-start">
                                            <div class="d-flex flex-column">
                                                <span class="font-20 font-weight-bold text-primary">$200</span>

                                            </div>

                                            <span class="font-14 font-weight-500 text-gray mt-5">/Hour</span>
                                        </div>

                                        <div class="stars-card d-flex align-items-center  mt-15">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star active"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star active"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star active"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>

                                            <span class="badge badge-primary ml-10">3.42</span>
                                        </div>

                                        <div class="d-flex align-items-center mt-20">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock text-dark-blue"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>

                                            <span class="font-14 font-weight-500 text-dark-blue ml-10">0 Hours Tutoring</span>
                                        </div>

                                        <div class="d-flex align-items-center flex-wrap mt-15">
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Old Membership">
                                                <img src="/store/1/default_images/badges/faithful_user.png" class="img-cover rounded-circle" alt="Faithful User">
                                            </div>
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Has 3 to 6 Classes">
                                                <img src="/store/1/default_images/badges/expert_vendor.png" class="img-cover rounded-circle" alt="Expert Vendor">
                                            </div>
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Classes Rating from 4 to 5">
                                                <img src="/store/1/default_images/badges/golden_classes.png" class="img-cover rounded-circle" alt="Golden Classes">
                                            </div>
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Classes Sales from 3 to 9">
                                                <img src="/store/1/default_images/badges/top_seller.png" class="img-cover rounded-circle" alt="Top Seller">
                                            </div>
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Support Rating from 3 to 4">
                                                <img src="/store/1/default_images/badges/amazing_support.png" class="img-cover rounded-circle" alt="Amazing Support">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="/users/923/profile" class="">
                                <div class="position-relative d-flex flex-wrap instructor-finder-card border border-gray300 rounded-sm py-25 mt-20">

                                    <div class="col-12 col-md-8 d-flex">
                                        <div class="instructor-avatar rounded-circle">
                                            <img src="/store/923/avatar/617a4f9983fe5.png" class="img-cover rounded-circle" alt="John Powe">
                                        </div>

                                        <div class="ml-20">
                                            <h3 class="font-16 font-weight-bold text-secondary">John Powe</h3>

                                            <div>
                                                <span class="d-block font-12 text-gray">IT Director at Cognizant</span>

                                                <div class="d-block font-14 text-gray mt-5">
                                                    <span>Lifestyle, </span>
                                                    <span>Management, </span>
                                                    <span>Business Strategy</span>
                                                </div>
                                            </div>

                                            <p class="font-14 text-gray mt-10">Hello! I am John Powe; let me welcome you on this platform. I have created unique courses on different subjects including Business, marketing, Sales, Psychology, Copywriting, Social media marketing ...</p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-4 mt-10 mt-md-0 pt-10 pt-md-0 instructor-finder-card-right-side position-relative">
                                        <span class="off-badge badge badge-danger">10% Offer</span>

                                        <div class="d-flex align-items-start">
                                            <div class="d-flex flex-column">
                                                <span class="font-20 font-weight-bold text-primary">$90</span>

                                                <span class="font-14 font-weight-500 text-gray text-decoration-line-through">$100</span>
                                            </div>

                                            <span class="font-14 font-weight-500 text-gray mt-5">/Hour</span>
                                        </div>

                                        <div class="stars-card d-flex align-items-center  mt-15">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star active"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star active"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star active"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star active"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star active"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>

                                            <span class="badge badge-primary ml-10">5.00</span>
                                        </div>

                                        <div class="d-flex align-items-center mt-20">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock text-dark-blue"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>

                                            <span class="font-14 font-weight-500 text-dark-blue ml-10">0 Hours Tutoring</span>
                                        </div>

                                        <div class="d-flex align-items-center flex-wrap mt-15">
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Old Membership">
                                                <img src="/store/1/default_images/badges/faithful_user.png" class="img-cover rounded-circle" alt="Faithful User">
                                            </div>
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Has 2 Classes">
                                                <img src="/store/1/default_images/badges/senior_vendor.png" class="img-cover rounded-circle" alt="Senior Vendor">
                                            </div>
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Classes Rating from 4 to 5">
                                                <img src="/store/1/default_images/badges/golden_classes.png" class="img-cover rounded-circle" alt="Golden Classes">
                                            </div>
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Support Rating from 4 to 5">
                                                <img src="/store/1/default_images/badges/fantastic_support.png" class="img-cover rounded-circle" alt="Fantastic Support">
                                            </div>
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Has 2 to 5 Topics">
                                                <img src="/store/1/default_images/badges/Forums Top User.svg" class="img-cover rounded-circle" alt="Forums Top User">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="/users/870/profile" class="">
                                <div class="position-relative d-flex flex-wrap instructor-finder-card border border-gray300 rounded-sm py-25 mt-20">

                                    <div class="col-12 col-md-8 d-flex">
                                        <div class="instructor-avatar rounded-circle">
                                            <img src="/store/870/avatar/617a4f7c09d61.png" class="img-cover rounded-circle" alt="Jessica Wray">
                                        </div>

                                        <div class="ml-20">
                                            <h3 class="font-16 font-weight-bold text-secondary">Jessica Wray</h3>

                                            <div>
                                                <span class="d-block font-12 text-gray">Network Technician at Cisco</span>

                                                <div class="d-block font-14 text-gray mt-5">
                                                    <span>Health &amp; Fitness, </span>
                                                    <span>Lifestyle</span>
                                                </div>
                                            </div>

                                            <p class="font-14 text-gray mt-10">Hi,

                                                I’m a certified coach and author. Over the years I've worked with and coached 100,000 students from all over the world.
                                                My expertise includes science-based personal development, health &amp; ...</p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-4 mt-10 mt-md-0 pt-10 pt-md-0 instructor-finder-card-right-side position-relative">

                                        <div class="d-flex align-items-start">
                                            <div class="d-flex flex-column">
                                                <span class="font-20 font-weight-bold text-primary">$100</span>

                                            </div>

                                            <span class="font-14 font-weight-500 text-gray mt-5">/Hour</span>
                                        </div>

                                        <div class="stars-card d-flex align-items-center  mt-15">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star active"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star active"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star active"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star active"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star active"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>

                                            <span class="badge badge-primary ml-10">5.00</span>
                                        </div>

                                        <div class="d-flex align-items-center mt-20">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock text-dark-blue"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>

                                            <span class="font-14 font-weight-500 text-dark-blue ml-10">0 Hours Tutoring</span>
                                        </div>

                                        <div class="d-flex align-items-center flex-wrap mt-15">
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Old Membership">
                                                <img src="/store/1/default_images/badges/faithful_user.png" class="img-cover rounded-circle" alt="Faithful User">
                                            </div>
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Has 2 Classes">
                                                <img src="/store/1/default_images/badges/senior_vendor.png" class="img-cover rounded-circle" alt="Senior Vendor">
                                            </div>
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Classes Rating from 4 to 5">
                                                <img src="/store/1/default_images/badges/golden_classes.png" class="img-cover rounded-circle" alt="Golden Classes">
                                            </div>
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Classes Sales from 1 to 2">
                                                <img src="/store/1/default_images/badges/best_seller.png" class="img-cover rounded-circle" alt="Best Seller">
                                            </div>
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Support Rating from 4 to 5">
                                                <img src="/store/1/default_images/badges/fantastic_support.png" class="img-cover rounded-circle" alt="Fantastic Support">
                                            </div>
                                            <div class="mr-15 mt-10 instructor-badge rounded-circle" data-toggle="tooltip" data-placement="bottom" data-html="true" title="" data-original-title="Has 2 to 5 Topics">
                                                <img src="/store/1/default_images/badges/Forums Top User.svg" class="img-cover rounded-circle" alt="Forums Top User">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="text-center">
                            <button type="button" id="loadMoreInstructors" data-url="/instructor-finder" class="btn btn-border-white mt-50 ">More instructors</button>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">

                        <div class="mt-20 p-20 rounded-sm shadow-lg border border-gray300 filters-container">
                            <h3 class="category-filter-title font-20 font-weight-bold text-dark-blue">Filters</h3>

                            <div class="form-group mt-20">
                                <label for="category_id">Category</label>

                                <select name="category_id" id="category_id" class="form-control">
                                    <option value="">Select a category</option>

                                    <optgroup label="Development">
                                        <option value="606">Web Development</option>
                                        <option value="607">Mobile Development</option>
                                        <option value="608">Game Development</option>
                                    </optgroup>
                                    <optgroup label="Business">
                                        <option value="609">Management</option>
                                        <option value="610">Communications</option>
                                        <option value="611">Business Strategy</option>
                                    </optgroup>
                                    <option value="525">Marketing</option>
                                    <optgroup label="Lifestyle">
                                        <option value="604">Lifestyle</option>
                                        <option value="605">Beauty &amp; Makeup</option>
                                    </optgroup>
                                    <option value="523">Health &amp; Fitness</option>
                                    <optgroup label="Academics">
                                        <option value="601">Math</option>
                                        <option value="602">Science</option>
                                        <option value="603">Language</option>
                                    </optgroup>
                                    <option value="520">Design</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="level_of_training">Training level</label>

                                <select name="level_of_training" class="form-control">
                                    <option value="">Not preferenced</option>
                                    <option value="beginner">Beginner</option>
                                    <option value="middle">Intermediate</option>
                                    <option value="expert">Advanced</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="gender">Instructor gender</label>

                                <select name="gender" id="gender" class="form-control">
                                    <option value="">Not preferenced</option>

                                    <option value="man">Male</option>
                                    <option value="woman">Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="instructor_type">Instructor type</label>

                                <select name="role" id="instructor_type" class="form-control">
                                    <option value="">Not preferenced</option>
                                    <option value="teacher">Instructor</option>
                                    <option value="organization">Organization</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="input-label">Meeting Type</label>

                                <div class="d-flex align-items-center wizard-custom-radio mt-5">
                                    <div class="wizard-custom-radio-item flex-grow-1">
                                        <input type="radio" name="meeting_type" value="all" id="all" class="">
                                        <label class="font-12 cursor-pointer px-15 py-10" for="all">All</label>
                                    </div>

                                    <div class="wizard-custom-radio-item flex-grow-1">
                                        <input type="radio" name="meeting_type" value="in_person" id="in_person" class="">
                                        <label class="font-12 cursor-pointer px-15 py-10" for="in_person">In-person</label>
                                    </div>

                                    <div class="wizard-custom-radio-item flex-grow-1">
                                        <input type="radio" name="meeting_type" value="online" id="online" class="">
                                        <label class="font-12 cursor-pointer px-15 py-10" for="online">Online</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="input-label">Population</label>

                                <div class="d-flex align-items-center wizard-custom-radio mt-5">
                                    <div class="wizard-custom-radio-item flex-grow-1">
                                        <input type="radio" name="population" value="all" id="population_all" class="">
                                        <label class="font-12 cursor-pointer px-15 py-10" for="population_all">All</label>
                                    </div>

                                    <div class="wizard-custom-radio-item flex-grow-1">
                                        <input type="radio" name="population" value="single" id="population_single" class="">
                                        <label class="font-12 cursor-pointer px-15 py-10" for="population_single">Individual</label>
                                    </div>

                                    <div class="wizard-custom-radio-item flex-grow-1">
                                        <input type="radio" name="population" value="group" id="population_group" class="">
                                        <label class="font-12 cursor-pointer px-15 py-10" for="population_group">Group</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pb-20">
                                <label class="form-label">Price Range</label>
                                <div class="range wrunner-value-bottom" id="priceRange" data-minlimit="0" data-maxlimit="1000">
                                    <input type="hidden" name="min_price" value="">
                                    <input type="hidden" name="max_price" value="">
                                    <div class="wrunner wrunner_theme_default wrunner_direction_horizontal"><div class="wrunner__outer wrunner__outer_theme_default wrunner__outer_direction_horizontal"><div class="wrunner__path wrunner__path_theme_default wrunner__path_direction_horizontal"><div class="wrunner__pathPassed wrunner__pathPassed_theme_default wrunner__pathPassed_direction_horizontal" style="width: 0.1%; left: 0%;"></div><div class="wrunner__handle wrunner__handle_theme_default wrunner__handle_direction_horizontal" style="left: 0%;"></div><div class="wrunner__handle wrunner__handle_theme_default wrunner__handle_direction_horizontal" style="left: 0.1%;"></div></div><div class="wrunner__divisions wrunner__divisions_theme_default wrunner__divisions_direction_horizontal"><div class="wrunner__division wrunner__division_theme_default wrunner__division_direction_horizontal"></div><div class="wrunner__division wrunner__division_theme_default wrunner__division_direction_horizontal"></div><div class="wrunner__division wrunner__division_theme_default wrunner__division_direction_horizontal"></div><div class="wrunner__division wrunner__division_theme_default wrunner__division_direction_horizontal"></div><div class="wrunner__division wrunner__division_theme_default wrunner__division_direction_horizontal"></div></div><div class="wrunner__valueNote wrunner__valueNote_display_visible wrunner__valueNote_theme_default wrunner__valueNote_direction_horizontal" style="left: -4.16667%;">0</div><div class="wrunner__valueNote wrunner__valueNote_display_visible wrunner__valueNote_theme_default wrunner__valueNote_direction_horizontal" style="left: -4.06667%;">1</div></div></div></div>
                            </div>

                            <div class="form-group pb-20">
                                <label class="form-label">Instructor Age</label>
                                <div class="range wrunner-value-bottom" id="instructorAgeRange" data-minlimit="0" data-maxlimit="100">
                                    <input type="hidden" name="min_age" value="">
                                    <input type="hidden" name="max_age" value="">
                                    <div class="wrunner wrunner_theme_default wrunner_direction_horizontal"><div class="wrunner__outer wrunner__outer_theme_default wrunner__outer_direction_horizontal"><div class="wrunner__path wrunner__path_theme_default wrunner__path_direction_horizontal"><div class="wrunner__pathPassed wrunner__pathPassed_theme_default wrunner__pathPassed_direction_horizontal" style="width: 1%; left: 0%;"></div><div class="wrunner__handle wrunner__handle_theme_default wrunner__handle_direction_horizontal" style="left: 0%;"></div><div class="wrunner__handle wrunner__handle_theme_default wrunner__handle_direction_horizontal" style="left: 1%;"></div></div><div class="wrunner__divisions wrunner__divisions_theme_default wrunner__divisions_direction_horizontal"><div class="wrunner__division wrunner__division_theme_default wrunner__division_direction_horizontal"></div><div class="wrunner__division wrunner__division_theme_default wrunner__division_direction_horizontal"></div><div class="wrunner__division wrunner__division_theme_default wrunner__division_direction_horizontal"></div><div class="wrunner__division wrunner__division_theme_default wrunner__division_direction_horizontal"></div><div class="wrunner__division wrunner__division_theme_default wrunner__division_direction_horizontal"></div></div><div class="wrunner__valueNote wrunner__valueNote_display_visible wrunner__valueNote_theme_default wrunner__valueNote_direction_horizontal" style="left: -4.16667%;">0</div><div class="wrunner__valueNote wrunner__valueNote_display_visible wrunner__valueNote_theme_default wrunner__valueNote_direction_horizontal" style="left: -3.16667%;">1</div></div></div></div>
                            </div>
                        </div>

                        <div class="mt-20 p-20 rounded-sm shadow-lg border border-gray300 filters-container">
                            <h3 class="category-filter-title font-20 font-weight-bold text-dark-blue">Time</h3>

                            <div class="mt-35">
                                <div class="custom-control custom-checkbox mb-20 full-checkbox w-100">
                                    <input type="checkbox" name="day[]" value="saturday" class="custom-control-input" id="day_saturday">
                                    <label class="custom-control-label font-14 w-100" for="day_saturday">Saturday</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-20 full-checkbox w-100">
                                    <input type="checkbox" name="day[]" value="sunday" class="custom-control-input" id="day_sunday">
                                    <label class="custom-control-label font-14 w-100" for="day_sunday">Sunday</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-20 full-checkbox w-100">
                                    <input type="checkbox" name="day[]" value="monday" class="custom-control-input" id="day_monday">
                                    <label class="custom-control-label font-14 w-100" for="day_monday">Monday</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-20 full-checkbox w-100">
                                    <input type="checkbox" name="day[]" value="tuesday" class="custom-control-input" id="day_tuesday">
                                    <label class="custom-control-label font-14 w-100" for="day_tuesday">Tuesday</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-20 full-checkbox w-100">
                                    <input type="checkbox" name="day[]" value="wednesday" class="custom-control-input" id="day_wednesday">
                                    <label class="custom-control-label font-14 w-100" for="day_wednesday">Wednesday</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-20 full-checkbox w-100">
                                    <input type="checkbox" name="day[]" value="thursday" class="custom-control-input" id="day_thursday">
                                    <label class="custom-control-label font-14 w-100" for="day_thursday">Thursday</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-20 full-checkbox w-100">
                                    <input type="checkbox" name="day[]" value="friday" class="custom-control-input" id="day_friday">
                                    <label class="custom-control-label font-14 w-100" for="day_friday">Friday</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Time Range</label>
                                <div class="range wrunner-value-bottom" id="timeRangeInstructorPage" data-minlimit="0" data-maxlimit="23">
                                    <input type="hidden" name="min_time" value="">
                                    <input type="hidden" name="max_time" value="">
                                    <div class="wrunner wrunner_theme_default wrunner_direction_horizontal"><div class="wrunner__outer wrunner__outer_theme_default wrunner__outer_direction_horizontal"><div class="wrunner__path wrunner__path_theme_default wrunner__path_direction_horizontal"><div class="wrunner__pathPassed wrunner__pathPassed_theme_default wrunner__pathPassed_direction_horizontal" style="width: 4.34783%; left: 0%;"></div><div class="wrunner__handle wrunner__handle_theme_default wrunner__handle_direction_horizontal" style="left: 0%;"></div><div class="wrunner__handle wrunner__handle_theme_default wrunner__handle_direction_horizontal" style="left: 4.34783%;"></div></div><div class="wrunner__divisions wrunner__divisions_theme_default wrunner__divisions_direction_horizontal"><div class="wrunner__division wrunner__division_theme_default wrunner__division_direction_horizontal"></div><div class="wrunner__division wrunner__division_theme_default wrunner__division_direction_horizontal"></div><div class="wrunner__division wrunner__division_theme_default wrunner__division_direction_horizontal"></div><div class="wrunner__division wrunner__division_theme_default wrunner__division_direction_horizontal"></div><div class="wrunner__division wrunner__division_theme_default wrunner__division_direction_horizontal"></div></div><div class="wrunner__valueNote wrunner__valueNote_display_visible wrunner__valueNote_theme_default wrunner__valueNote_direction_horizontal" style="left: -4.16667%;">0</div><div class="wrunner__valueNote wrunner__valueNote_display_visible wrunner__valueNote_theme_default wrunner__valueNote_direction_horizontal" style="left: 0.181159%;">1</div></div></div></div>
                            </div>
                        </div>

                        <div class="mt-20 p-20 rounded-sm shadow-lg border border-gray300 filters-container">
                            <h3 class="category-filter-title font-20 font-weight-bold text-dark-blue">Location</h3>

                            <div class="form-group mt-20">
                                <label class="input-label font-weight-500">Country</label>

                                <select name="country_id" class="form-control">
                                    <option value="">Select Country</option>

                                    <option value="16">France</option>
                                    <option value="17">India</option>
                                    <option value="18">United States</option>
                                    <option value="19">Chad</option>
                                    <option value="20">Saudi Arabia</option>
                                </select>
                            </div>

                            <div class="form-group mt-10">
                                <label class="input-label font-weight-500">Province</label>

                                <select name="province_id" class="form-control" disabled="">
                                    <option value="">Select Province</option>

                                </select>
                            </div>

                            <div class="form-group mt-10">
                                <label class="input-label font-weight-500">City</label>

                                <select name="city_id" class="form-control" disabled="">
                                    <option value="">Select City</option>

                                </select>
                            </div>

                            <div class="form-group mt-10">
                                <label class="input-label font-weight-500">District</label>

                                <select name="district_id" class="form-control" disabled="">
                                    <option value="">Select District</option>

                                </select>
                            </div>
                        </div>


                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection


@push('scripts_bottom')
    <script src="/assets/vendors/wrunner-html-range-slider-with-2-handles/js/wrunner-jquery.js"></script>
    <script src="/assets/vendors/leaflet/leaflet.min.js"></script>
    <script src="/assets/vendors/leaflet/leaflet.markercluster/leaflet.markercluster-src.js"></script>
    <script src="/assets/default/vendors/swiper/swiper-bundle.min.js"></script>

    <script>
        var currency = '{{ $currency }}';
        var profileLang = '{{ trans('public.profile') }}';
        var hourLang = '{{ trans('update.hour') }}';
        var mapUsers = JSON.parse(@json($mapUsers->toJson()));
        var selectProvinceLang = '{{ trans('update.select_province') }}';
        var selectCityLang = '{{ trans('update.select_city') }}';
        var selectDistrictLang = '{{ trans('update.select_district') }}';
    </script>

    <script src="/assets/default/js/parts/instructor-finder-wizard.min.js"></script>
    <script src="/assets/default/js/parts/instructors.min.js"></script>

    <script src="/assets/default/js/parts/instructor-finder.min.js"></script>
@endpush
