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
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-object-group"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Generated</h4>
                            </div>
                            <div class="card-body">
                                6
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-file-word"></i></div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Generated Texts</h4>
                            </div>
                            <div class="card-body">
                                3
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-info">
                            <i class="fas fa-file-image"></i></div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Generated Images</h4>
                            </div>
                            <div class="card-body">
                                3
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-users"></i></div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Users</h4>
                            </div>
                            <div class="card-body">
                                1
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped font-14">
                                    <tbody><tr>
                                        <th class="text-left">User</th>
                                        <th>Service Type</th>
                                        <th>Service</th>
                                        <th>Keyword</th>
                                        <th>Language</th>
                                        <th>Generated Date</th>
                                        <th width="120">Actions</th>
                                    </tr>

                                    <tr>

                                        <td class="text-left">
                                            Jessica Wray
                                            <div class="text-primary text-small font-600-bold">ID : 870</div>
                                        </td>

                                        <td>
                                            image
                                        </td>

                                        <td>
                                            Genrate Image
                                        </td>

                                        <td>
                                            <span class="">Gym</span>
                                        </td>

                                        <td>
                                            <span class="">English</span>
                                        </td>

                                        <td>17 September 2023 06:03</td>

                                        <td>
                                            <input type="hidden" class="js-prompt" value="Generate an image with the Gym subject.">
                                            <input type="hidden" class="js-result" value="{&quot;text&quot;:null,&quot;images&quot;:[&quot;https:\/\/oaidalleapiprodscus.blob.core.windows.net\/private\/org-GBuDNNbkAYzVp9PHiPsBuZQ0\/user-pJ94XsEfNjj0eLFo1wAdIwaZ\/img-fXlKAqDK3czIYoRwrWMbyBTY.png?st=2023-09-17T09%3A03%3A51Z&amp;se=2023-09-17T11%3A03%3A51Z&amp;sp=r&amp;sv=2021-08-06&amp;sr=b&amp;rscd=inline&amp;rsct=image\/png&amp;skoid=6aaadede-4fb3-4698-a8f6-684d7786b067&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2023-09-16T23%3A16%3A02Z&amp;ske=2023-09-17T23%3A16%3A02Z&amp;sks=b&amp;skv=2021-08-06&amp;sig=0f%2BXJgBKuXWbutQOE\/ZThK6a27Hg2rofDll2VW2CRDM%3D&quot;]}">


                                            <a href="#" class="js-view-content btn-transparent  text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="View">
                                                <i class="fa fa-eye"></i>
                                            </a>

                                            <a href="/admin/users/870/edit" class="btn-transparent mx-1 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit User">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <button class="btn-transparent text-primary trigger--fire-modal-1" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/ai-contents/7/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td class="text-left">
                                            Jessica Wray
                                            <div class="text-primary text-small font-600-bold">ID : 870</div>
                                        </td>

                                        <td>
                                            text
                                        </td>

                                        <td>
                                            Course Short Description
                                        </td>

                                        <td>
                                            <span class="">Fitness</span>
                                        </td>

                                        <td>
                                            <span class="">English</span>
                                        </td>

                                        <td>17 September 2023 06:03</td>

                                        <td>
                                            <input type="hidden" class="js-prompt" value="Generate a text with the Fitness subject in English language with less than 40 word.">
                                            <input type="hidden" class="js-result" value="{&quot;text&quot;:&quot;\&quot;Regular exercise is crucial for maintaining a healthy lifestyle. It improves cardiovascular health, boosts mental wellbeing, and enhances overall strength and endurance. Don't underestimate the power of staying fit!\&quot;&quot;,&quot;images&quot;:[]}">


                                            <a href="#" class="js-view-content btn-transparent  text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="View">
                                                <i class="fa fa-eye"></i>
                                            </a>

                                            <a href="/admin/users/870/edit" class="btn-transparent mx-1 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit User">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <button class="btn-transparent text-primary trigger--fire-modal-2" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/ai-contents/6/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td class="text-left">
                                            Jessica Wray
                                            <div class="text-primary text-small font-600-bold">ID : 870</div>
                                        </td>

                                        <td>
                                            image
                                        </td>

                                        <td>
                                            Genrate Image
                                        </td>

                                        <td>
                                            <span class="">Health And Fitness</span>
                                        </td>

                                        <td>
                                            <span class="">English</span>
                                        </td>

                                        <td>17 September 2023 05:59</td>

                                        <td>
                                            <input type="hidden" class="js-prompt" value="Generate an image with the Health And Fitness subject.">
                                            <input type="hidden" class="js-result" value="{&quot;text&quot;:null,&quot;images&quot;:[&quot;https:\/\/oaidalleapiprodscus.blob.core.windows.net\/private\/org-GBuDNNbkAYzVp9PHiPsBuZQ0\/user-pJ94XsEfNjj0eLFo1wAdIwaZ\/img-DwaSM7I2pREUcycrl5CqeBFj.png?st=2023-09-17T08%3A59%3A21Z&amp;se=2023-09-17T10%3A59%3A21Z&amp;sp=r&amp;sv=2021-08-06&amp;sr=b&amp;rscd=inline&amp;rsct=image\/png&amp;skoid=6aaadede-4fb3-4698-a8f6-684d7786b067&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2023-09-16T23%3A09%3A38Z&amp;ske=2023-09-17T23%3A09%3A38Z&amp;sks=b&amp;skv=2021-08-06&amp;sig=ajGTGay2jhn\/%2BwFUkllhoWCTCDBhifM2Ux3K5yghpeA%3D&quot;]}">


                                            <a href="#" class="js-view-content btn-transparent  text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="View">
                                                <i class="fa fa-eye"></i>
                                            </a>

                                            <a href="/admin/users/870/edit" class="btn-transparent mx-1 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit User">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <button class="btn-transparent text-primary trigger--fire-modal-3" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/ai-contents/5/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td class="text-left">
                                            Robert Ransdell
                                            <div class="text-primary text-small font-600-bold">ID : 1015</div>
                                        </td>

                                        <td>
                                            image
                                        </td>

                                        <td>
                                            Genrate Image
                                        </td>

                                        <td>
                                            <span class="">Solar Energy</span>
                                        </td>

                                        <td>
                                            <span class="">English</span>
                                        </td>

                                        <td>17 September 2023 05:54</td>

                                        <td>
                                            <input type="hidden" class="js-prompt" value="Generate an image with the Solar Energy subject.">
                                            <input type="hidden" class="js-result" value="{&quot;text&quot;:null,&quot;images&quot;:[&quot;https:\/\/oaidalleapiprodscus.blob.core.windows.net\/private\/org-GBuDNNbkAYzVp9PHiPsBuZQ0\/user-pJ94XsEfNjj0eLFo1wAdIwaZ\/img-ZJvNYiEHIhmNhSpwLOM3ACQ7.png?st=2023-09-17T08%3A54%3A47Z&amp;se=2023-09-17T10%3A54%3A47Z&amp;sp=r&amp;sv=2021-08-06&amp;sr=b&amp;rscd=inline&amp;rsct=image\/png&amp;skoid=6aaadede-4fb3-4698-a8f6-684d7786b067&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2023-09-16T23%3A11%3A34Z&amp;ske=2023-09-17T23%3A11%3A34Z&amp;sks=b&amp;skv=2021-08-06&amp;sig=mpGi\/cRB0RQGPdGeubJnAE4K92tkBam16iV4VLKrd%2BU%3D&quot;]}">


                                            <a href="#" class="js-view-content btn-transparent  text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="View">
                                                <i class="fa fa-eye"></i>
                                            </a>

                                            <a href="/admin/users/1015/edit" class="btn-transparent mx-1 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit User">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <button class="btn-transparent text-primary trigger--fire-modal-4" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/ai-contents/4/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td class="text-left">
                                            Robert Ransdell
                                            <div class="text-primary text-small font-600-bold">ID : 1015</div>
                                        </td>

                                        <td>
                                            text
                                        </td>

                                        <td>
                                            Course Short Description
                                        </td>

                                        <td>
                                            <span class="">Photoshop</span>
                                        </td>

                                        <td>
                                            <span class="">English</span>
                                        </td>

                                        <td>17 September 2023 05:45</td>

                                        <td>
                                            <input type="hidden" class="js-prompt" value="Generate a text with the Photoshop subject in English language with less than 40 word.">
                                            <input type="hidden" class="js-result" value="{&quot;text&quot;:&quot;\&quot;Learn Photoshop to create stunning graphics, edit images, and design captivating visuals like a pro. Enhance your skills with tools like layers, filters, and blending modes, and unleash your creativity with endless possibilities in the world of digital art.\&quot;&quot;,&quot;images&quot;:[]}">


                                            <a href="#" class="js-view-content btn-transparent  text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="View">
                                                <i class="fa fa-eye"></i>
                                            </a>

                                            <a href="/admin/users/1015/edit" class="btn-transparent mx-1 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit User">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <button class="btn-transparent text-primary trigger--fire-modal-5" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/ai-contents/2/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td class="text-left">
                                            Admin
                                            <div class="text-primary text-small font-600-bold">ID : 1</div>
                                        </td>

                                        <td>
                                            text
                                        </td>

                                        <td>
                                            Blog Short Description
                                        </td>

                                        <td>
                                            <span class="">Laravel</span>
                                        </td>

                                        <td>
                                            <span class="">English</span>
                                        </td>

                                        <td>17 September 2023 05:43</td>

                                        <td>
                                            <input type="hidden" class="js-prompt" value="Generate a text with the Laravel subject in English language with less than 100 word for a blog short description.">
                                            <input type="hidden" class="js-result" value="{&quot;text&quot;:&quot;Discover the power of Laravel \u2013 an elegant and intuitive PHP framework designed for web artisans. With its extensive set of tools and libraries, Laravel empowers developers to create robust and scalable web applications with ease. Whether you\u2019re a beginner or a seasoned professional, delve into the world of Laravel and unlock unparalleled efficiency and productivity in your coding journey. Join us as we explore the wonders of Laravel and its seamless integration capabilities, making web development a breeze.&quot;,&quot;images&quot;:[]}">


                                            <a href="#" class="js-view-content btn-transparent  text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="View">
                                                <i class="fa fa-eye"></i>
                                            </a>

                                            <a href="/admin/users/1/edit" class="btn-transparent mx-1 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit User">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <button class="btn-transparent text-primary trigger--fire-modal-6" data-confirm="Are you sure? | Do you want to continue?" data-confirm-href="/admin/ai-contents/1/delete" data-confirm-text-yes="Yes" data-confirm-text-cancel="Cancel" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    </tbody></table>
                            </div>
                        </div>

                        <div class="card-footer text-center">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="contentModal" tabindex="-1" aria-labelledby="contactMessageLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactMessageLabel">Generated Content</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="js-prompt-card">
                        <h6 class="fs-12">Prompt:</h6>
                        <p class=""></p>
                    </div>


                    <div id="generatedTextContents" class="d-none"></div>

                    <div class="js-text-generated-modal mt-20 p-15 bg-info-light border-gray300 rounded-sm d-none">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4 class="font-14 text-gray">Generated Content</h4>

                            <div class="form-group mb-0">
                                <button type="button" class="btn-transparent d-flex align-items-center js-copy-content-modal" data-toggle="tooltip" data-placement="top" title="" data-copy-text="Copy" data-done-text="Done" data-original-title="Copy">
                                    <i data-feather="copy" width="18" height="18" class="text-gray"></i>
                                    <span class="text-gray font-12 ml-5">Copy</span>
                                </button>
                            </div>
                        </div>

                        <div class="mt-15 font-14 text-gray js-content-modal"></div>
                    </div>



                    <div class="js-image-generated-modal mt-20 p-15 bg-info-light border-gray300 rounded-sm d-none">
                        <div class="">
                            <h4 class="font-14 text-gray">Generated Content</h4>
                            <p class="mt-1 text-gray font-12">Click on images to download them</p>
                        </div>

                        <div class="js-content-modal mt-15 d-flex-center flex-wrap">

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts_bottom')

@endpush
