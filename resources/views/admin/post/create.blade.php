<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentallela Alela! | </title>

    @include('admin.partials.header')
    <link href="{{ asset('assets/css/editor/external/google-code-prettify/prettify.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/editor/index.css') }}" rel="stylesheet">

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            @include('admin.partials.sidebar')

            <!-- page content -->
            <div class="right_col" role="main">

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>
                    Form Validation
                </h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Form validation <small>sub title</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <form class="form-horizontal form-label-left" novalidate>

                                        <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                                        </p>
                                        <span class="section">Personal Info</span>

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="both name(s) e.g Jon Doe" required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Confirm Email <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="email" id="email2" name="confirm_email" data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Number <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="number" id="number" name="number" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Website URL <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="url" id="website" name="website" required="required" placeholder="www.website.com" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Occupation <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="occupation" type="text" name="occupation" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label for="password" class="control-label col-md-3">Password</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Textarea <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12"></textarea>
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button id="send" type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>





                </div>


                
                <!-- footer content -->
            <footer>
                <div class="">
                    <p class="pull-right">Gentelella Alela! a Bootstrap 3 template by <a>Kimlabs</a>. |
                        <span class="lead"> <i class="fa fa-paw"></i> Gentelella Alela!</span>
                    </p>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
                
            </div>
            <!-- /page content -->
        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    @include('admin.partials.bottom')


    <!-- form validation -->
    <script type="text/javascript" src="{{ asset('assets/js/validator/validator.js') }}"></script>



    <script>
        // initialize the validator function
        validator.message['date'] = 'not a real date';

        // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
        $('form')
            .on('blur', 'input[required], input.optional, select.required', validator.checkField)
            .on('change', 'select.required', validator.checkField)
            .on('keypress', 'input[required][pattern]', validator.keypress);

        $('.multi.required')
            .on('keyup blur', 'input', function () {
                validator.checkField.apply($(this).siblings().last()[0]);
            });

        // bind the validation to the form submit event
        //$('#send').click('submit');//.prop('disabled', true);

        $('form').submit(function (e) {
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
    <script type="text/javascript" src="js/moment.min2.js"></script>
    <script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>
    <!-- richtext editor -->
    <script src="js/editor/bootstrap-wysiwyg.js"></script>
    <script src="js/editor/external/jquery.hotkeys.js"></script>
    <script src="js/editor/external/google-code-prettify/prettify.js"></script>
    <!-- select2 -->
    <script src="js/select/select2.full.js"></script>
    <!-- form validation -->
    <script type="text/javascript" src="js/parsley/parsley.min.js"></script>
    <!-- textarea resize -->
    <script src="js/textarea/autosize.min.js"></script>
    <script>
        autosize($('.resizable_textarea'));
    </script>
    <!-- Autocomplete -->
    <script type="text/javascript" src="js/autocomplete/countries.js"></script>
    <script src="js/autocomplete/jquery.autocomplete.js"></script>

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
                maximumSelectionLength: 4,
                placeholder: "With Max Selection limit 4",
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
    <!-- form validation -->
    <script type="text/javascript">
        $(document).ready(function () {
            $.listen('parsley:field:validate', function () {
                validateFront();
            });
            $('#demo-form .btn').on('click', function () {
                $('#demo-form').parsley().validate();
                validateFront();
            });
            var validateFront = function () {
                if (true === $('#demo-form').parsley().isValid()) {
                    $('.bs-callout-info').removeClass('hidden');
                    $('.bs-callout-warning').addClass('hidden');
                } else {
                    $('.bs-callout-info').addClass('hidden');
                    $('.bs-callout-warning').removeClass('hidden');
                }
            };
        });

        $(document).ready(function () {
            $.listen('parsley:field:validate', function () {
                validateFront();
            });
            $('#demo-form2 .btn').on('click', function () {
                $('#demo-form2').parsley().validate();
                validateFront();
            });
            var validateFront = function () {
                if (true === $('#demo-form2').parsley().isValid()) {
                    $('.bs-callout-info').removeClass('hidden');
                    $('.bs-callout-warning').addClass('hidden');
                } else {
                    $('.bs-callout-info').addClass('hidden');
                    $('.bs-callout-warning').removeClass('hidden');
                }
            };
        });
        try {
            hljs.initHighlightingOnLoad();
        } catch (err) {}
    </script>
    <!-- /form validation -->
    <!-- editor -->
    <script>
        $(document).ready(function () {
            $('.xcxc').click(function () {
                $('#descr').val($('#editor').html());
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

</body>

</html>