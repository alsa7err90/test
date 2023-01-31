<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> 
        <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('inputcode/css/intlTelInput.css') }}">

    {{-- date --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    {{-- countries --}}
    <link rel="stylesheet" href="{{ asset('countries/css/countrySelect.css') }}">
    <link rel="stylesheet" href="{{ asset('countries/css/demo.css') }}">

    {{-- bootstrap toggle --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap5-toggle@5.0.4/css/bootstrap5-toggle.min.css" rel="stylesheet">
</head>

<body class="snippet-body">
    <div id="app">
        <main class="py-4">
            <div class="container mt-4 mb-4">
                <div class="row d-flex cart align-items-center justify-content-center">
                    <div class="col-md-10">
                        <div class="card">
                            

                            @yield('content')

                            <div></div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        {{-- jquery --}}
        <script src="{{ asset('js/jquery-latest.min.js') }}"></script>

        {{-- input phone --}}
        <script src="{{ asset('inputcode/js/intlTelInput-jquery.js') }}"></script>

        {{-- bootstrap toggle --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap5-toggle@5.0.4/js/bootstrap5-toggle.ecmas.min.js"></script>

        <script>
            $(function() {
                $('#companion').change(function() {


                    $header = $(this);
                    //getting the next element
                    $content = $('#div_companion');
                    //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
                    $content.slideToggle(500, function() {
                        //execute this after slideToggle is done
                        //change text of header based on visibility of content div
                        $header.text(function() {
                            //change text based on condition
                            if ($content.is(":visible")) {
                                $('.comp_input').prop('required', true);
                            } else {
                                $('.comp_input').prop('required', false);
                            }
                            return $content.is(":visible") ? "Collapse" : "Expand";
                        });


                    });
                })
            })
        </script>
        {{-- date --}}
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <script>
            function datediff(first, second) {
                return Math.round((second - first) / (1000 * 60 * 60 * 24));
            }


            function parseDate(str) {
                var mdy = str.split('/');
                return new Date(mdy[2], mdy[0] - 1, mdy[1]);
            }



            $(function() {
                var selectedDay = 0;
                var disabled = true;

                $(".datepicker_old").datepicker({
                    maxDate: 0,
                });

                $(".datepicker_new").datepicker({
                    minDate: 0,
                    // dateFormat: "yyyy-mm-dd"
                });




                $("#check_in_date").datepicker({
                    minDate: 0, 
                    dateFormat: "yy-mm-dd",
                    onSelect: function(date, datepicker) {
                        selectedDay = datepicker.selectedDay;

                        console.log(datepicker.selectedDay, disabled);
                        if (datepicker.selectedDay > 0) {
                            disabled = false
                        } else {
                            disabled = true;
                        }
                    }
                });
                $("#check_out_date").datepicker({
                    minDate: 0,
                    dateFormat: "yy-mm-dd",
                    onSelect: function(date, datepicker) {
                        //  datepicker.selectedDay 
                        if (selectedDay == 0) {
                            alert("يجب تحدد تاريخ الوصول اولا");

                            $("#check_out_date").datepicker("setDate", '');
                            return;
                        }
                        var days_between_date = datediff(parseDate(date), parseDate($("#check_in_date")
                            .val())) * (-1);
                        if (days_between_date > {{ env('FREE_NIGHT') }}) {
                            alert("يجب ان تكون المدة "+{{ env('FREE_NIGHT') }}+" ايام او اقل ");

                            $("#check_out_date").datepicker("setDate", '');
                        }
                    }
                });


                $("#check_in_date_extra").datepicker({
                    minDate: 0,

                });
                $("#check_out_date_extra").datepicker({
                    minDate: 0,

                });



            });
        </script>



        {{-- end date --}}
        <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="#"></script>
        <script type="text/javascript" src="#"></script>
        <script type="text/javascript" src="#"></script>

        <script type="text/javascript">
            var myLink = document.querySelector("a[href='#']");
            myLink.addEventListener("click", function(e) {
                e.preventDefault();
            });
        </script>

        {{-- countries --}}

        <script src="{{ asset('countries/js/countrySelect.js') }}"></script>
        <script>
            $("#country_selector").countrySelect({
                preferredCountries: ['sa', 'ca', 'gb', 'us']
            });

            $("#country_of_residency").countrySelect({
                preferredCountries: ['sa', 'ca', 'gb', 'us']
            });
            $("#place_of_issue").countrySelect({
                preferredCountries: ['sa', 'ca', 'gb', 'us']
            });


            $("#comp_country_selector").countrySelect({
                preferredCountries: ['sa', 'ca', 'gb', 'us']
            });

            $("#comp_country_of_residency").countrySelect({
                preferredCountries: ['sa', 'ca', 'gb', 'us']
            });
            $("#comp_place_of_issue").countrySelect({
                // defaultCountry: "jp",
                // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
                // responsiveDropdown: true,
                preferredCountries: ['sa', 'ca', 'gb', 'us']
            });

            // validate forms 

            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function(form) {
                        form.addEventListener('submit', function(event) {
                            if (!form.checkValidity()) {
                                event.preventDefault()
                                event.stopPropagation()
                            }

                            form.classList.add('was-validated')
                        }, false)
                    })
            })()
        </script>
        {{--  end countries --}}

        <script>
            // jQuery

            $("#phone").intlTelInput({

                // whether or not to allow the dropdown
                allowDropdown: true,

                // if there is just a dial code in the input: remove it on blur, and re-add it on focus
                autoHideDialCode: true,

                // add a placeholder in the input with an example number for the selected country
                autoPlaceholder: "polite",

                // modify the auto placeholder
                customPlaceholder: null,

                // append menu to specified element
                dropdownContainer: null,

                // don't display these countries
                excludeCountries: [],

                // format the input value during initialisation and on setNumber
                formatOnDisplay: true,

                // geoIp lookup function
                geoIpLookup: null,

                // inject a hidden input with this name, and on submit, populate it with the result of getNumber
                hiddenInput: "",

                // initial country
                initialCountry: "",

                // localized country names e.g. { 'de': 'Deutschland' }
                localizedCountries: null,

                // don't insert international dial codes
                nationalMode: true,

                // display only these countries
                onlyCountries: [],

                // number type to use for placeholders
                placeholderNumberType: "MOBILE",

                // the countries at the top of the list. defaults to united states and united kingdom
                preferredCountries: ["us", "gb"],

                // display the country dial code next to the selected flag so it's not part of the typed number
                separateDialCode: false,

                // specify the path to the libphonenumber script to enable validation/formatting
                utilsScript: ""

            })
        </script>


    </div>
</body>

</html>
