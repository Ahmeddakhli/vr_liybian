<script type="text/javascript" src="{{ asset('assets/js/image-uploader.min.js') }}"></script>
<script>
    $('.m_selectpicker').selectpicker();

    $.when($('.input-attachments').imageUploader({

        imagesInputName: 'attachments',
        preloadedInputName:'preloaded',
    })).done(function() {
        $('input[name="attachments[]"]').attr('name', 'attachments[][file]');
    });
</script>
<script>
    var elt = $('#developer_id');

    var developers = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('id'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {
            url: '{!! route('inventory.developers.tagsinput') !!}' + '?needle=%QUERY%',
            wildcard: '%QUERY%',
        }
    });
    developers.initialize();

    $('#developer_id').tagsinput({
        itemValue: 'id',
        itemText: 'name',
        maxChars: 100,
        maxTags: 1,
        trimValue: true,
        allowDuplicates: false,
        freeInput: false,
        focusClass: 'form-control',
        tagClass: function(item) {
            if (item.display)
                return 'kt-badge kt-badge--inline kt-badge--' + item.display;
            else
                return 'kt-badge kt-badge--inline kt-badge--info';

        },
        onTagExists: function(item, $tag) {
            $tag.hide().fadeIn();
        },
        typeaheadjs: [{
                hint: false,
                highlight: true
            },
            {
                name: 'developer_id',
                itemValue: 'id',
                displayKey: 'name',
                source: developers.ttAdapter(),
                templates: {
                    empty: [
                        '<ul class="list-group"><li class="list-group-item">{{ trans('inventory::inventory.nothing_found') }}.</li></ul>'
                    ],
                    header: [
                        '<ul class="list-group">'
                    ],
                    suggestion: function(data) {
                        return '<li class="list-group-item">' + data.name + '</li>'
                    }
                }
            }
        ]
    });
</script>
<script>
    function getCountryRegions(country_id, selected_region_id = null) {
        $('#region_id').empty();
        $("#region_id").selectpicker("refresh");
        $('#city_id').empty();
        $("#city_id").selectpicker("refresh");
        $('#area_id').empty();
        $("#area_id").selectpicker("refresh");

        // BlockUI
        KTApp.blockPage({
            overlayColor: "#000000",
            type: "loader",
            state: "success",
            message: "{{ trans('main.please_wait') }}"
        });

        $.ajax({
            url: "{{ route('locations.getCountryRegions') }}",
            type: "GET",
            data: {
                country_id: country_id
            },
            success: function(response) {
                // UnblockUI
                KTApp.unblockPage();

                // Show notification
                if (response.status) {
                    // Insert empty region first
                    $('#region_id').append($('<option>', {
                        value: "",
                        text: "{{ __('inventory::inventory.select_region') }}"
                    }));
                    $.each(response.data, function(i, region) {
                        $('#region_id').append($('<option>', {
                            value: region.id,
                            text: region.name
                        }));
                    });
                    if (selected_region_id) {
                        $('#region_id').selectpicker('val', selected_region_id);
                    }
                    $("#region_id").selectpicker("refresh");
                } else {
                    showNotification(response.message, "{{ trans('main.error') }}", 'la la-warning', null,
                        'danger', true, true, true);
                }
            },
            error: function(xhr, error_text, statusText) {
                // UnblockUI
                KTApp.unblockPage();

                if (xhr.status == 401) {
                    // Unauthorized
                    if (xhr.responseJSON.error) {
                        setTimeout(function() {
                            window.scrollTo({
                                top: 0,
                                behavior: 'smooth'
                            });
                            showMsg(form, 'danger', xhr.responseJSON.error, true);
                        }, 500);
                        showNotification(xhr.responseJSON.error, "{{ trans('main.error') }}",
                            'la la-warning', null, 'danger', true, true, true);
                    } else {
                        setTimeout(function() {
                            window.scrollTo({
                                top: 0,
                                behavior: 'smooth'
                            });
                            showMsg(form, 'danger', statusText, true);
                        }, 500);
                        showNotification(statusText, "{{ trans('main.error') }}", 'la la-warning', null,
                            'danger', true, true, true);
                    }
                } else if (xhr.status == 422) {
                    // HTTP_UNPROCESSABLE_ENTITY
                    if (xhr.responseJSON.errors) {
                        window.scrollTo({
                            top: 0,
                            behavior: 'smooth'
                        });
                        $.each(xhr.responseJSON.errors, function(index, error) {
                            setTimeout(function() {
                                if (index === 0) {
                                    var remove_previous_alerts = true;
                                } else {
                                    var remove_previous_alerts = false;
                                }
                                showMsg(form, 'danger', error.message,
                                    remove_previous_alerts);
                            }, 500);
                            showNotification(error.message, "{{ trans('main.error') }}",
                                'la la-warning', null, 'danger', true, true, true);
                        });
                    } else {
                        setTimeout(function() {
                            window.scrollTo({
                                top: 0,
                                behavior: 'smooth'
                            });
                            showMsg(form, 'danger', statusText, true);
                        }, 500);
                        showNotification(statusText, "{{ trans('main.error') }}", 'la la-warning', null,
                            'danger', true, true, true);
                    }
                } else if (xhr.status == 500) {
                    // Internal Server Error
                    var error = xhr.responseJSON.message;
                    if (xhr.responseJSON.error) {
                        setTimeout(function() {
                            window.scrollTo({
                                top: 0,
                                behavior: 'smooth'
                            });
                            showMsg(form, 'danger', xhr.responseJSON.error, true);
                        }, 500);
                        showNotification(xhr.responseJSON.error, "{{ trans('main.error') }}",
                            'la la-warning', null, 'danger', true, true, true);
                    } else {
                        setTimeout(function() {
                            window.scrollTo({
                                top: 0,
                                behavior: 'smooth'
                            });
                            showMsg(form, 'danger', statusText, true);
                        }, 500);
                        showNotification(statusText, "{{ trans('main.error') }}", 'la la-warning', null,
                            'danger', true, true, true);
                    }
                }
            }
        });
    }

    function getRegionCities(region_id, selected_city_id = null) {
        $('#city_id').empty();
        $("#city_id").selectpicker("refresh");
        $('#area_id').empty();
        $("#area_id").selectpicker("refresh");

        // BlockUI
        KTApp.blockPage({
            overlayColor: "#000000",
            type: "loader",
            state: "success",
            message: "{{ trans('main.please_wait') }}"
        });

        $.ajax({
            url: "{{ route('locations.getRegionCities') }}",
            type: "GET",
            data: {
                region_id: region_id
            },
            success: function(response) {
                // UnblockUI
                KTApp.unblockPage();
                // Show notification
                if (response.status) {
                    // Insert empty city first
                    $('#city_id').append($('<option>', {
                        value: "",
                        text: "{{ __('inventory::inventory.select_city') }}"
                    }));
                    $.each(response.data, function(i, city) {
                        $('#city_id').append($('<option>', {
                            value: city.id,
                            text: city.name
                        }));
                    });
                    if (selected_city_id) {
                        $('#city_id').selectpicker('val', selected_city_id);
                    }
                    $("#city_id").selectpicker("refresh");
                } else {
                    showNotification(response.message, "{{ trans('main.error') }}", 'la la-warning',
                        null,
                        'danger', true, true, true);
                }
            },
            error: function(xhr, error_text, statusText) {
                // UnblockUI
                KTApp.unblockPage();

                if (xhr.status == 401) {
                    // Unauthorized
                    if (xhr.responseJSON.error) {
                        setTimeout(function() {
                            window.scrollTo({
                                top: 0,
                                behavior: 'smooth'
                            });
                            showMsg(form, 'danger', xhr.responseJSON.error, true);
                        }, 500);
                        showNotification(xhr.responseJSON.error, "{{ trans('main.error') }}",
                            'la la-warning', null, 'danger', true, true, true);
                    } else {
                        setTimeout(function() {
                            window.scrollTo({
                                top: 0,
                                behavior: 'smooth'
                            });
                            showMsg(form, 'danger', statusText, true);
                        }, 500);
                        showNotification(statusText, "{{ trans('main.error') }}", 'la la-warning', null,
                            'danger', true, true, true);
                    }
                } else if (xhr.status == 422) {
                    // HTTP_UNPROCESSABLE_ENTITY
                    if (xhr.responseJSON.errors) {
                        window.scrollTo({
                            top: 0,
                            behavior: 'smooth'
                        });
                        $.each(xhr.responseJSON.errors, function(index, error) {
                            setTimeout(function() {
                                if (index === 0) {
                                    var remove_previous_alerts = true;
                                } else {
                                    var remove_previous_alerts = false;
                                }
                                showMsg(form, 'danger', error.message,
                                    remove_previous_alerts);
                            }, 500);
                            showNotification(error.message, "{{ trans('main.error') }}",
                                'la la-warning', null, 'danger', true, true, true);
                        });
                    } else {
                        setTimeout(function() {
                            window.scrollTo({
                                top: 0,
                                behavior: 'smooth'
                            });
                            showMsg(form, 'danger', statusText, true);
                        }, 500);
                        showNotification(statusText, "{{ trans('main.error') }}", 'la la-warning', null,
                            'danger', true, true, true);
                    }
                } else if (xhr.status == 500) {
                    // Internal Server Error
                    var error = xhr.responseJSON.message;
                    if (xhr.responseJSON.error) {
                        setTimeout(function() {
                            window.scrollTo({
                                top: 0,
                                behavior: 'smooth'
                            });
                            showMsg(form, 'danger', xhr.responseJSON.error, true);
                        }, 500);
                        showNotification(xhr.responseJSON.error, "{{ trans('main.error') }}",
                            'la la-warning', null, 'danger', true, true, true);
                    } else {
                        setTimeout(function() {
                            window.scrollTo({
                                top: 0,
                                behavior: 'smooth'
                            });
                            showMsg(form, 'danger', statusText, true);
                        }, 500);
                        showNotification(statusText, "{{ trans('main.error') }}", 'la la-warning', null,
                            'danger', true, true, true);
                    }
                }
            }
        });
    }

    function getCityAreas(city_id, selected_area_id = null) {
        $('#area_id').empty();
        $("#area_id").selectpicker("refresh");

        // BlockUI
        KTApp.blockPage({
            overlayColor: "#000000",
            type: "loader",
            state: "success",
            message: "{{ trans('main.please_wait') }}"
        });

        $.ajax({
            url: "{{ route('locations.getCityAreas') }}",
            type: "GET",
            data: {
                city_id: city_id
            },
            success: function(response) {
                // UnblockUI
                KTApp.unblockPage();
                // Show notification
                if (response.status) {
                    // Insert empty area first
                    $('#area_id').append($('<option>', {
                        value: "",
                        text: "{{ __('inventory::inventory.select_area') }}"
                    }));
                    $.each(response.data, function(i, area) {
                        $('#area_id').append($('<option>', {
                            value: area.id,
                            text: area.name
                        }));
                    });
                    if (selected_area_id) {
                        $('#area_id').selectpicker('val', selected_area_id);
                    }
                    $("#area_id").selectpicker("refresh");
                } else {
                    showNotification(response.message, "{{ trans('main.error') }}", 'la la-warning',
                        null,
                        'danger', true, true, true);
                }
            },
            error: function(xhr, error_text, statusText) {
                // UnblockUI
                KTApp.unblockPage();

                if (xhr.status == 401) {
                    // Unauthorized
                    if (xhr.responseJSON.error) {
                        setTimeout(function() {
                            window.scrollTo({
                                top: 0,
                                behavior: 'smooth'
                            });
                            showMsg(form, 'danger', xhr.responseJSON.error, true);
                        }, 500);
                        showNotification(xhr.responseJSON.error, "{{ trans('main.error') }}",
                            'la la-warning', null, 'danger', true, true, true);
                    } else {
                        setTimeout(function() {
                            window.scrollTo({
                                top: 0,
                                behavior: 'smooth'
                            });
                            showMsg(form, 'danger', statusText, true);
                        }, 500);
                        showNotification(statusText, "{{ trans('main.error') }}", 'la la-warning', null,
                            'danger', true, true, true);
                    }
                } else if (xhr.status == 422) {
                    // HTTP_UNPROCESSABLE_ENTITY
                    if (xhr.responseJSON.errors) {
                        window.scrollTo({
                            top: 0,
                            behavior: 'smooth'
                        });
                        $.each(xhr.responseJSON.errors, function(index, error) {
                            setTimeout(function() {
                                if (index === 0) {
                                    var remove_previous_alerts = true;
                                } else {
                                    var remove_previous_alerts = false;
                                }
                                showMsg(form, 'danger', error.message,
                                    remove_previous_alerts);
                            }, 500);
                            showNotification(error.message, "{{ trans('main.error') }}",
                                'la la-warning', null, 'danger', true, true, true);
                        });
                    } else {
                        setTimeout(function() {
                            window.scrollTo({
                                top: 0,
                                behavior: 'smooth'
                            });
                            showMsg(form, 'danger', statusText, true);
                        }, 500);
                        showNotification(statusText, "{{ trans('main.error') }}", 'la la-warning', null,
                            'danger', true, true, true);
                    }
                } else if (xhr.status == 500) {
                    // Internal Server Error
                    var error = xhr.responseJSON.message;
                    if (xhr.responseJSON.error) {
                        setTimeout(function() {
                            window.scrollTo({
                                top: 0,
                                behavior: 'smooth'
                            });
                            showMsg(form, 'danger', xhr.responseJSON.error, true);
                        }, 500);
                        showNotification(xhr.responseJSON.error, "{{ trans('main.error') }}",
                            'la la-warning', null, 'danger', true, true, true);
                    } else {
                        setTimeout(function() {
                            window.scrollTo({
                                top: 0,
                                behavior: 'smooth'
                            });
                            showMsg(form, 'danger', statusText, true);
                        }, 500);
                        showNotification(statusText, "{{ trans('main.error') }}", 'la la-warning', null,
                            'danger', true, true, true);
                    }
                }
            }
        });
    }
</script>

<script>
    MapHelper.initMap(true, true, true, false);
</script>

<script src="{{ asset('8x/assets/js/repeater.js') }}" type="text/javascript"></script>
<script src="{{ asset('8x/assets/js/summernote-image-attributes.js') }}"></script>

<script>
    $(document).ready(function() {
        $('.repeater-unit_types').repeater({
            // (Required if there is a nested repeater)
            // Specify the configuration of the nested repeaters.
            // Nested configuration follows the same format as the base configuration,
            // supporting options "defaultValues", "show", "hide", etc.
            // Nested repeaters additionally require a "selector" field.
            repeaters: [{
                // (Required)
                // Specify the jQuery selector for this nested repeater
                selector: '.inner-repeater'
            }]
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.repeater-project').repeater({
            // (Required if there is a nested repeater)
            // Specify the configuration of the nested repeaters.
            // Nested configuration follows the same format as the base configuration,
            // supporting options "defaultValues", "show", "hide", etc.
            // Nested repeaters additionally require a "selector" field.
            repeaters: [{
                // (Required)
                // Specify the jQuery selector for this nested repeater
                selector: '.inner-repeater'
            }],
            show: function() {
                // Get items count
                var items_count = $('.repeater-project').repeaterVal().translations.length;
                var current_index = items_count - 1;

                /* Summernote */
                // Update the textarea id
                $(this).find('.note-editor').remove(); // Remove repeated summernote
                $(this).find('.description').attr('id', 'description-' + current_index);

                $('#description-' + current_index).summernote({
                    imageTitle: {
                        specificAltField: true,
                    },
                    popover: {
                        image: [
                            ['imagesize', ['imageSize100', 'imageSize50',
                                'imageSize25'
                            ]],
                            ['float', ['floatLeft', 'floatRight', 'floatNone']],
                            ['remove', ['removeMedia']],
                            ['custom', ['imageAttributes']],
                        ],
                    },
                    height: '300px',
                });

                $(this).find('.landing_description').attr('id', 'landing_description-' +
                    current_index);

                $('#landing_description-' + current_index).summernote({
                    imageTitle: {
                        specificAltField: true,
                    },
                    popover: {
                        image: [
                            ['imagesize', ['imageSize100', 'imageSize50',
                                'imageSize25'
                            ]],
                            ['float', ['floatLeft', 'floatRight', 'floatNone']],
                            ['remove', ['removeMedia']],
                            ['custom', ['imageAttributes']],
                        ],
                    },
                    height: '300px',
                });

                // Showing the item
                $(this).show();
            }
        });
    });
</script>
<script>
    // Initialize select picker for repeated items
    $("#repeater_btn").click(function() {
        setTimeout(function() {
            // $(".selectpicker").selectpicker('refresh');
        }, 100);
    });
</script>

{{-- <script>
    $('#add_project_phases_btn').on('click', function(e) {
        e.preventDefault();
        $.ajax({
            url: "{{route('inventory.projects.partials.get_phases_repeater_partial')}}",
            type: "POST",
            data: {},
            success: function(response) {
                if (response && response.status) {
                    $('#add_project_phases_btn').remove();
                    $('#add_project_phases_div').html(response.data);
                }
            },
        });
    });
</script> --}}
<!--
<script>
    $(document).ready(function() {
        $('.repeater-project').repeater({
            // (Required if there is a nested repeater)
            // Specify the configuration of the nested repeaters.
            // Nested configuration follows the same format as the base configuration,
            // supporting options "defaultValues", "show", "hide", etc.
            // Nested repeaters additionally require a "selector" field.
            repeaters: [{
                // (Required)
                // Specify the jQuery selector for this nested repeater
                selector: '.inner-repeater'
            }]
        });
    });
</script> -->
<script>
    // Initialize select picker for repeated items
    $("#repeater_btn_project").click(function() {
        setTimeout(function() {
            // $(".selectpicker").selectpicker('refresh');
        }, 100);
    });
</script> -->

<script>
    $(document).ready(function() {
        $('.repeater-attachments').repeater({
            // (Required if there is a nested repeater)
            // Specify the configuration of the nested repeaters.
            // Nested configuration follows the same format as the base configuration,
            // supporting options "defaultValues", "show", "hide", etc.
            // Nested repeaters additionally require a "selector" field.
            repeaters: [{
                // (Required)
                // Specify the jQuery selector for this nested repeater
                selector: '.inner-repeater'
            }],
            show: function() {
                // Get items count
                var items_count = $('.repeater-attachments').repeaterVal().length;
                var current_index = items_count - 1;

                /* Summernote */
                // Update the textarea id
                $(this).find('.image-preview').attr('id', 'blah-' + current_index);
                $(this).find('.image-input').attr('image-id', 'blah-' + current_index);

                // Showing the item
                $(this).show();
            }
        });
    });
</script>
<script>
    // Initialize select picker for repeated items
    $("#repeater_btn_attachments").click(function() {
        setTimeout(function() {
            // $(".selectpicker").selectpicker('refresh');
        }, 100);
    });
</script>

<script>
    $(document).ready(function() {
        $('.repeater-floorplans').repeater({
            // (Required if there is a nested repeater)
            // Specify the configuration of the nested repeaters.
            // Nested configuration follows the same format as the base configuration,
            // supporting options "defaultValues", "show", "hide", etc.
            // Nested repeaters additionally require a "selector" field.
            repeaters: [{
                // (Required)
                // Specify the jQuery selector for this nested repeater
                selector: '.inner-repeater'
            }]
        });
    });
</script>
<script>
    // Initialize select picker for repeated items
    $("#repeater_btn_floorplans").click(function() {
        setTimeout(function() {
            // $(".selectpicker").selectpicker('refresh');
        }, 100);
    });
</script>

<script>
    $(document).ready(function() {
        $('.repeater-masterplans').repeater({
            // (Required if there is a nested repeater)
            // Specify the configuration of the nested repeaters.
            // Nested configuration follows the same format as the base configuration,
            // supporting options "defaultValues", "show", "hide", etc.
            // Nested repeaters additionally require a "selector" field.
            repeaters: [{
                // (Required)
                // Specify the jQuery selector for this nested repeater
                selector: '.inner-repeater'
            }]
        });
    });
</script>
<script>
    // Initialize select picker for repeated items
    $("#repeater_btn_masterplans").click(function() {
        setTimeout(function() {
            // $(".selectpicker").selectpicker('refresh');
        }, 100);
    });
</script>

<script>
    $('#update_project_form').submit(function() {
        var data = $(this)[0];
    })
</script>

<script>
    // Summernote
    $('#description-' + '0').summernote({
        imageTitle: {
            specificAltField: true,
        },
        popover: {
            image: [
                ['imagesize', ['imageSize100', 'imageSize50',
                    'imageSize25'
                ]],
                ['float', ['floatLeft', 'floatRight', 'floatNone']],
                ['remove', ['removeMedia']],
                ['custom', ['imageAttributes']],
            ],
        },
        height: '300px',
    });
    // Summernote
    $('#landing_description-' + '0').summernote({
        imageTitle: {
            specificAltField: true,
        },
        popover: {
            image: [
                ['imagesize', ['imageSize100', 'imageSize50',
                    'imageSize25'
                ]],
                ['float', ['floatLeft', 'floatRight', 'floatNone']],
                ['remove', ['removeMedia']],
                ['custom', ['imageAttributes']],
            ],
        },
        height: '300px',
    });
</script>

<script>
    $('.save-continue').click(function() {
        $('#creation_type').val('save_continue');
        $('#create_project_form').submit();
    });
    $('.save-only').click(function() {
        $('#creation_type').val('save_only');
        $('#create_project_form').submit();
    });
</script>

<script>
    $(document).ready(function() {
        $('.repeater_payment_plans').repeater({
            // (Required if there is a nested repeater)
            // Specify the configuration of the nested repeaters.
            // Nested configuration follows the same format as the base configuration,
            // supporting options "defaultValues", "show", "hide", etc.
            // Nested repeaters additionally require a "selector" field.
            repeaters: [{
                // (Required)
                // Specify the jQuery selector for this nested repeater
                selector: '.inner-repeater'
            }],
            show: function() {
                $(this).find('.payment_plan_delivery_date').datepicker({
                    format: 'yyyy-mm',
                    startView: "months",
                    minViewMode: "months"
                });
                $(this).show();
            }
        });
        $('.payment_plan_delivery_date').datepicker({
            format: 'yyyy-mm',
            startView: "months",
            minViewMode: "months"
        });
    });
function readURL(input) {

if (input.files && input.files[0]) {
    var reader = new FileReader();
    console.log($(input).attr('image-id'));
    reader.onload = function (e) {
        $(`#${$(input).attr('image-id')}`)
            .attr('src', e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
}
}
</script>
