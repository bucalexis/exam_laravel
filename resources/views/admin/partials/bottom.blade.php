<script src="{{ asset('assets/js/bootstrap.min.js') }}" ></script>
<script src="{{ asset('assets/js/nicescroll/jquery.nicescroll.min.js') }}" ></script>

<!-- chart js -->
<script src="{{ asset('assets/js/chartjs/chart.min.js') }}" ></script>

<!-- bootstrap progress js -->
<script src="{{ asset('assets/js/progressbar/bootstrap-progressbar.min.js') }}" ></script>

<!-- icheck -->
<script src="{{ asset('assets/js/icheck/icheck.min.js') }}" ></script>

<!-- daterangepicker -->

<script type="text/javascript" src="{{ asset('assets/js/moment.min2.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/datepicker/daterangepicker.js') }}"></script>
<!-- sparkline -->
<script src="{{ asset('assets/js/sparkline/jquery.sparkline.min.js') }}" ></script>
<script src="{{ asset('assets/js/custom.js') }}" ></script>


<!-- flot js -->
<!--[if lte IE 8]>
<script type="text/javascript" src="{{ asset('assets/js/excanvas.min.js') }}"></script>
<![endif]-->
<script type="text/javascript" src="{{ asset('assets/js/flot/jquery.flot.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/flot/jquery.flot.pie.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/flot/jquery.flot.orderBars.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/flot/jquery.flot.time.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/flot/date.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/flot/jquery.flot.spline.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/flot/jquery.flot.stack.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/flot/curvedLines.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/flot/jquery.flot.resize.js') }}"></script>
<!-- form validation -->
<script type="text/javascript" src="{{ asset('assets/js/validator/validator.js') }}"></script>


<script>
    // initialize the validator function
    validator.message['date'] = 'not a real date';
    validator.message['title'] = 'Insert title';

    // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    $('form3')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

    $('.multi.required')
        .on('keyup blur', 'input', function () {
            validator.checkField.apply($(this).siblings().last()[0]);
        });

    // bind the validation to the form submit event
    //$('#send').click('submit');//.prop('disabled', true);

    $('form3').submit(function (e) {
        e.preventDefault();
        var submit = true;
        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
            submit = false;
        }

        if (submit)
            this.submit();
        return false;
    });

    /* FOR DEMO ONLY */
    $('#vfields').change(function () {
        $('form').toggleClass('mode2');
    }).prop('checked', false);

    $('#alerts').change(function () {
        validator.defaults.alerts = (this.checked) ? false : true;
        if (this.checked)
            $('form .alert').remove();
    }).prop('checked', false);
</script>


<!-- chart js -->
<!-- bootstrap progress js -->
<script src="{{ asset('assets/js/nicescroll/jquery.nicescroll.min.js') }}"></script>
<!-- icheck -->
<!-- tags -->
<script src="{{ asset('assets/js/tags/jquery.tagsinput.min.js') }}"></script>
<!-- switchery -->
<script src="{{ asset('assets/js/switchery/switchery.min.js') }}"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="{{ asset('assets/js/moment.min2.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/datepicker/daterangepicker.js') }}"></script>
<!-- richtext editor -->
<script src="{{ asset('assets/js/editor/bootstrap-wysiwyg.js') }}"></script>
<script src="{{ asset('assets/js/editor/external/jquery.hotkeys.js') }}"></script>
<script src="{{ asset('assets/js/editor/external/google-code-prettify/prettify.js') }}"></script>
<!-- select2 -->
<script src="{{ asset('assets/js/select/select2.full.js') }}"></script>
<!-- form validation -->
<script type="text/javascript" src="{{ asset('assets/js/parsley/parsley.min.js') }}"></script>
<!-- textarea resize -->
<script src="{{ asset('assets/js/textarea/autosize.min.js') }}"></script>
<script>
    autosize($('.resizable_textarea'));
</script>
<!-- Autocomplete -->
<script type="text/javascript" src="{{ asset('assets/js/autocomplete/countries.js') }}"></script>
<script src="{{ asset('assets/js/autocomplete/jquery.autocomplete.js') }}"></script>

<script type="text/javascript">
    $(function () {
        'use strict';
        var countriesArray = $.map(countries, function (value, key) {
            return {
                value: value,
                data: key
            };
        });
        // Initialize autocomplete with custom appendTo:
        $('#autocomplete-custom-append').autocomplete({
            lookup: countriesArray,
            appendTo: '#autocomplete-container'
        });
    });
</script>


<!-- select2 -->
<script>
    $(document).ready(function () {
        $(".select2_single").select2({
            placeholder: "Select a state",
            allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
            maximumSelectionLength: -1,
            allowClear: true
        });
    });
</script>
<!-- /select2 -->
<!-- input tags -->
<script>
    function onAddTag(tag) {
        alert("Added a tag: " + tag);
    }

    function onRemoveTag(tag) {
        alert("Removed a tag: " + tag);
    }

    function onChangeTag(input, tag) {
        alert("Changed a tag: " + tag);
    }

    $(function () {
        $('#tags_1').tagsInput({
            width: 'auto'
        });
    });
</script>
<!-- /input tags -->

<!-- editor -->
<script>
    $(document).ready(function () {
        $('#send').click(function () {
            $('#content').val($('#editor').html());
            $('#tagsValidate').val($('#tags').val());
        });
    });

    $(function () {
        function initToolbarBootstrapBindings() {
            var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                    'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                    'Times New Roman', 'Verdana'],
                fontTarget = $('[title=Font]').siblings('.dropdown-menu');
            $.each(fonts, function (idx, fontName) {
                fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
            });
            $('a[title]').tooltip({
                container: 'body'
            });
            $('.dropdown-menu input').click(function () {
                return false;
            })
                .change(function () {
                    $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                })
                .keydown('esc', function () {
                    this.value = '';
                    $(this).change();
                });

            $('[data-role=magic-overlay]').each(function () {
                var overlay = $(this),
                    target = $(overlay.data('target'));
                overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
            });
            if ("onwebkitspeechchange" in document.createElement("input")) {
                var editorOffset = $('#editor').offset();
                $('#voiceBtn').css('position', 'absolute').offset({
                    top: editorOffset.top,
                    left: editorOffset.left + $('#editor').innerWidth() - 35
                });
            } else {
                $('#voiceBtn').hide();
            }
        };

        function showErrorAlert(reason, detail) {
            var msg = '';
            if (reason === 'unsupported-file-type') {
                msg = "Unsupported format " + detail;
            } else {
                console.log("error uploading file", reason, detail);
            }
            $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
        };
        initToolbarBootstrapBindings();
        $('#editor').wysiwyg({
            fileUploadError: showErrorAlert
        });
        window.prettyPrint && prettyPrint();
    });
</script>
<!-- /editor -->





