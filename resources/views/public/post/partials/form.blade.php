<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('titleHeader')</title>

    @include('admin.partials.header')
    <link href="{{ asset('assets/css/editor/external/google-code-prettify/prettify.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/editor/index.css') }}" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
    <!-- select2 -->
    <link href="{{ asset('assets/css/select/select2.min.css') }}" rel="stylesheet">
    <!-- switchery -->
    <link rel="stylesheet" href="{{ asset('assets/css/switchery/switchery.min.css') }}"/>

</head>


<body class="nav-md">

<div class="container body">


    <div class="main_container">

    @include('public.post.partials.sidebar')


    <!-- page content -->
        <div class="right_col" role="main">

            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>
                            Post - info
                        </h3>
                    </div>


                </div>
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2> @yield('title')
                                    <small>sub title</small>
                                </h2>

                                <div class="clearfix"></div>
                            </div>
                            @include('admin.partials.response')

                            <div class="x_content form-horizontal form-label-left">
                                @yield('openForm')


                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Title <span
                                                class="required">:</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        {!!Form::text('title' ,$post->title,['class'=>'form-control col-md-7 col-xs-12','id'=>'title','placeholder'=>'Title','readonly'])!!}

                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Author <span
                                                class="required">:</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        {!!Form::text('author' ,$post->user->name,['class'=>'form-control col-md-7 col-xs-12','id'=>'title','placeholder'=>'Title','readonly'])!!}

                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tags <span
                                                class="required">:</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        {!!Form::text('tags' ,$post->tagsToString(),['class'=>'form-control col-md-7 col-xs-12','id'=>'title','placeholder'=>'','readonly'])!!}

                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Created <span
                                                class="required">:</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        {!!Form::text('created' ,$post->formattedCreatedAt(),['class'=>'form-control col-md-7 col-xs-12','id'=>'title','placeholder'=>'Title','readonly'])!!}

                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Modified <span
                                                class="required">:</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        {!!Form::text('modified' ,$post->formattedUpdatedAt(),['class'=>'form-control col-md-7 col-xs-12','id'=>'title','placeholder'=>'Title','readonly'])!!}

                                    </div>
                                </div>


                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Content <span
                                            class="required">:</span>
                                </label>
                                <div class="x_content">


                                    <div id="editor">
                                        @if (isset($post))
                                            {!!  $post->content !!}
                                        @endif
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>


                </div>


                <!-- footer content -->
            @include('layouts.footer')
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




@include('public.post.partials.active_menu')

</body>

</html>