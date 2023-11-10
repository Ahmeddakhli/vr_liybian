<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title" data-8xloadtitle>{{ __('domainsetting::domains.create_domains') }}</h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="{{ route('home') }}" class="kt-subheader__breadcrumbs-home"><i class="fa fa-home"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>

                @if (auth()->user()->hasPermission('index-domains-domains'))
                    <a href="{{ route('domains.index') }}" data-8xload
                        class="kt-subheader__breadcrumbs-link">{{ __('domainsetting::domains.domains') }}</a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                @else
                    <a href="#"
                        class="kt-subheader__breadcrumbs-link">{{ __('domainsetting::domains.domains') }}</a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                @endif

                <span
                    class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">{{ __('domainsetting::domains.create_domains') }}</span>
            </div>
        </div>
    </div>
    <!-- end:: Subheader -->

    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Portlet-->
                <div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile">
                    <div class="kt-portlet__head kt-portlet__head--lg">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">{{ __('domainsetting::domains.create_domains') }}</h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <a href="{{ url()->previous() }}" class="btn btn-clean kt-margin-r-10">
                                <i class="la la-arrow-left"></i>
                                <span class="kt-hidden-mobile">{{ __('main.back') }}</span>
                            </a>
                        </div>
                    </div>


                    <div class="kt-portlet__body">
                        <!-- Create LCC Form -->
                        <!--begin::Form-->
                        <form action="{{ route('domains.store') }}" method="POST" id="create_domain_form"
                            enctype="multipart/form-data"
                            class="m-form m-form--fit m-form--label-align-right m-form--group-seperator" data-async
                            data-callback="createdomainsCallback" data-parsley-validate>
                            @csrf
                            <div class="m-portlet__body">


                                <div data-repeater-item class="row mb-5" >


                                        {{-- <div class=" col-6 mt-5 fancy-checkbox">
                                            <input name="show_short_description" id="show_short_description"
                                                type="checkbox">
                                            <label for="show_short_description">{{ __('domainsetting::domains.show_short_description') }}</label>
                                        </div> --}}
                                        <div class="col-6 mt-5">
                                            <label for="domain">{{ __('domainsetting::domains.domain') }}</label>
                                            <input name="domain" id="domain" type="text" class="form-control"
                                                placeholder="{{ __('domainsetting::domains.domain') }}" data-parsley-maxlength="150"
                                                data-parsley-maxlength-message="{{ __('about::about.about_max_is_150_characters_long') }}"
                                                >
                                        </div>
                                   <div class="col-6 mt-5">
                                            <label for="folder_name">{{ __('domainsetting::domains.folder_name') }}</label>
                                            <input name="folder_name" id="folder_name" type="text" class="form-control"
                                                placeholder="{{ __('domainsetting::domains.folder_name') }}" data-parsley-maxlength="150"
                                                data-parsley-maxlength-message="{{ __('about::about.about_max_is_150_characters_long') }}"
                                                >
                                        </div>
                                        <div class="col-6 mt-5">
                                            <label for="tour_code">{{ __('domainsetting::domains.tour_code') }}</label>
                                                <input name="tour_code" id="tour_code" type="text" class="form-control"
                                                placeholder="{{ __('domainsetting::domains.tour_code') }}" data-parsley-maxlength="150"
                                                data-parsley-maxlength-message="{{ __('about::about.about_max_is_150_characters_long') }}"
                                                >
                                        </div>
                        

                                </div>
                            </div>
                            <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                                <div class="m-form__actions m-form__actions--solid">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="submit"
                                                class="btn btn-success">{{ __('main.submit') }}</button>
                                            <button type="reset"
                                                class="btn btn-secondary">{{ __('main.reset') }}</button>
                                            {{--
                                <a href="{{route('domains.create')}}" data-8xload class="btn btn-brand btn-icon-sm">
                                            <i class="flaticon2-plus"></i> {{__('domainsetting::domains.create_new')}}
                                            </a>
                                            --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end:: Content -->
</div>
