@extends('dashboard.layouts.basic')

@section('content')
    <!--begin::Form-->
    <form action="{{ route('domains.update') }}" method="POST" id="update_domain_form"
        class="m-form m-form--fit m-form--label-align-right m-form--group-seperator" data-async
        data-callback="updatedomainsCallback" data-parsley-validate enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" id="id" value="{{ $domains->id }}" />
        <div class="m-portlet__body">
       
       

            <div data-repeater-item class="row mb-5">

                {{-- <div class=" col-6 mt-5 fancy-checkbox">
                    <input name="show_short_description" id="show_short_description"
                        type="checkbox">
                    <label for="show_short_description">{{ __('domainsetting::domains.show_short_description') }}</label>
                </div> --}}
                <div class="col-12 mt-5">
                    <label for="domain">{{ __('domainsetting::domains.domain') }}</label>
                    <input name="domain" id="domain" type="text" class="form-control"
                        placeholder="{{ __('domainsetting::domains.domain') }}" data-parsley-maxlength="150"
                        data-parsley-maxlength-message="{{ __('about::about.about_max_is_150_characters_long') }}"
                        value="{{ $domains->domain }}">
                </div>
                    <div class="col-12 mt-5">
                    <label for="domain">{{ __('domainsetting::domains.folder_name') }}</label>
                    <input name="folder_name" id="folder_name" type="text" class="form-control"
                        placeholder="{{ __('domainsetting::domains.folder_name') }}" data-parsley-maxlength="150"
                        data-parsley-maxlength-message="{{ __('about::about.about_max_is_150_characters_long') }}"
                        value="{{ $domains->folder_name }}">
                </div>

                <div class="col-12 mt-5">
                    <label for="tour_code">{{ __('domainsetting::domains.tour_code') }}</label>
                    <textarea name="tour_code" id="tour_code" class="form-control"
                        placeholder="{{ __('domainsetting::domains.tour_code') }}" required data-parsley-required
                        data-parsley-required-message="{{ __('domainsetting::domains.tour_code') }}" data-parsley-trigger="change focusout"
                        cols="30" rows="10"
                        >{{ $domains->tour_code }}</textarea>
                </div>

            </div>
            <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions--solid">
                    <div class="row">
                        <div class="col-lg-6">
                            <button type="submit"
                                class="btn btn-success btn-brand">{{ __('domainsetting::domains.update_domains') }}</button>
                        </div>
                    </div>
                </div>
            </div>

    </form>
@endsection

<!--end::Form-->
<script>
    $('.m_selectpicker').selectpicker();
</script>
<!-- Callback function -->
<script>
    function updatedomainsCallback() {
        // Close modal
        $('#fast_modal').modal('toggle');
        // Reload datatable
        $('#domain_table').DataTable().ajax.reload(null, false);
    }
</script>

@push('scripts')
    <script src="{{ URL::asset('8x/assets/js/repeater.js') }}" type="text/javascript"></script>
    <script src="{{ asset('8x/assets/js/summernote-image-attributes.js') }}"></script>

    <script>
       
    </script>
    <script>
        // Initialize select picker for repeated items
        $("#repeater_btn").click(function() {
            setTimeout(function() {
                // $(".selectpicker").selectpicker('refresh');
            }, 100);
        });
    </script>
@endpush
