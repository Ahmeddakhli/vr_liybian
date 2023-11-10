@extends('front.layouts.main')
@section('content')
    <section class="services-page my-5">
        <div class="container">

@section('title', trans('services::services.services'))


@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('front.home') }}">
                        {{ __('main.home_title') }}
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{ __('main.services') }}</li>
            </ol>
        </div>
    </nav>
@endsection
<section class="services-page pb-5">

    <div class="container">

        <div class="section-title">
            <div class="section-title">
                <h1 class="title h2">{{ __('main.our_services') }}</h1>
            </div>
            {{-- <p class="text-capitalize">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam
          repudiandae saepe, fuga, facere eveniet adipisci recusandae voluptatem animi eligendi, laborum incidunt
          necessitatibus. Qui voluptatum repellat dignissimos, quam velit ex tenetur. Corrupti officia repellat
          repellendus! Eum amet eos asperiores quia autem nemo quisquam, soluta unde beatae fugit magni inventore a
          sint.</p> --}}
        </div>

        <div class="container">

                <form action="{{ route('units.pay') }}" method="POST" data-parsley-validate enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="i_unit_id" value="{{ $unit->id }}">

                <div class="row align-items-end">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <input type="text" name="compound" class="form-control" inputmode="text"
                                placeholder="{{ __('inventory::inventory.please_enter_the_compound') }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <input type="text" class="form-control" inputmode="text" name="unit_name"
                                placeholder="{{ __('inventory::inventory.unit_name') }}" required
                                data-parsley-required
                                data-parsley-required-message="{{ __('main.please_enter_your_unit_name') }}"
                                data-parsley-trigger="change focusout">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="custom-file-input mb-3">
                            <label for="unit-imgs" class="form-label">
                                <i class="ri-camera-line"></i>
                                {{ __('inventory::inventory.unit_attachments') }}
                            </label>
                            <input class="form-control" type="file" id="unit-imgs" name="attachments[]"
                                multiple
                                data-parsley-required-message="{{ __('main.please_enter_your_attachments') }}"
                                data-parsley-trigger="change focusout"
                                data-parsley-errors-container="#attachments_error_container">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <select class="form-select dd-select" name="i_purpose_id"
                                placeholder="{{ __('inventory::inventory.purposes') }}"
                                onchange="getPurposePurposeTypesRequest([$(this).val()], 'sell-from2')">
                                <option></option>
                                @foreach ($purposes as $purpose)
                                    <option value="{{ $purpose->id }}">{{ $purpose->purpose }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <select class="form-select dd-select" name="i_purpose_type_id"
                                placeholder="{{ __('inventory::inventory.purpose_types') }}"
                                id="i_purpose_type_id_sell">
                                <option>
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <input type="text" class="form-control" inputmode="text" name="name"
                                placeholder="{{ __('inventory::inventory.name') }}" required
                                data-parsley-required
                                data-parsley-required-message="{{ __('main.please_enter_your_name') }}"
                                data-parsley-trigger="change focusout">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <input type="email" class="form-control" inputmode="email" name="email"
                                placeholder="{{ __('inventory::inventory.email') }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <input type="text" class="form-control phone-input" inputmode="tel"
                                name="phone" placeholder="{{ __('inventory::inventory.phone') }}" required
                                data-parsley-required
                                data-parsley-required-message="{{ __('main.please_enter_your_mobile_number') }}"
                                data-parsley-trigger="change focusout">
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-3">
                        <textarea class="form-control" inputmode="text" name="comments" id="" rows="4"
                            placeholder="{{ __('inventory::inventory.comments') }}"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>
</section>
</div> <!-- ./ container -->
</section> <!-- ./ services-page -->
@endsection
@php
   $page_name ='';
  @endphp
