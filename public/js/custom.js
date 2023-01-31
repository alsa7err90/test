

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


// /////////////

var myLink = document.querySelector("a[href='#']");
myLink.addEventListener("click", function(e) {
    e.preventDefault();
});

// /////////////

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



















