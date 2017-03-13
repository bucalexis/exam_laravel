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

    @include('admin.partials.sidebar')


    <!-- page content -->
        <div class="right_col" role="main">

            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>
                            Post
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

                            <div class="x_content">
                                @yield('openForm')


                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Title <span
                                                class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        @if (isset($post))
                                            {!!Form::text('title' ,$post->title,['class'=>'form-control col-md-7 col-xs-12','id'=>'title','placeholder'=>'Title','required'])!!}
                                        @else
                                            {!!Form::text('title' ,null,['class'=>'form-control col-md-7 col-xs-12','id'=>'title','placeholder'=>'Title','required'])!!}
                                        @endif
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Tags <span
                                                class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="hidden" name="tagsValidate" id="tagsValidate" required>
                                        <select class="select2_multiple form-control" name="tags[]" id="tags"
                                                multiple="multiple" required="required">
                                            @if (isset($post))
                                                @foreach( $selectedTags as $tag)
                                                    <option selected value="{{$tag->id}}">{{$tag->name}}</option>
                                                @endforeach

                                                @foreach( $noSelectedTags as $tag)
                                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                                @endforeach

                                            @elseif ( isset( $tags) )
                                                @foreach( $tags as $tag)
                                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                                @endforeach
                                            @endif


                                        </select>
                                    </div>
                                </div>

                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Content: <span
                                            class="required">*</span>
                                </label>
                                <div class="x_content">


                                    <div id="alerts"></div>
                                    <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i
                                                        class="fa icon-font"></i><b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i
                                                        class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a data-edit="fontSize 5"><p style="font-size:17px">Huge</p></a>
                                                </li>
                                                <li><a data-edit="fontSize 3"><p style="font-size:14px">Normal</p></a>
                                                </li>
                                                <li><a data-edit="fontSize 1"><p style="font-size:11px">Small</p></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i
                                                        class="icon-bold"></i></a>
                                            <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i
                                                        class="icon-italic"></i></a>
                                            <a class="btn" data-edit="strikethrough" title="Strikethrough"><i
                                                        class="icon-strikethrough"></i></a>
                                            <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i
                                                        class="icon-underline"></i></a>
                                        </div>
                                        <div class="btn-group">
                                            <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i
                                                        class="icon-list-ul"></i></a>
                                            <a class="btn" data-edit="insertorderedlist" title="Number list"><i
                                                        class="icon-list-ol"></i></a>
                                            <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i
                                                        class="icon-indent-left"></i></a>
                                            <a class="btn" data-edit="indent" title="Indent (Tab)"><i
                                                        class="icon-indent-right"></i></a>
                                        </div>
                                        <div class="btn-group">
                                            <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i
                                                        class="icon-align-left"></i></a>
                                            <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i
                                                        class="icon-align-center"></i></a>
                                            <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i
                                                        class="icon-align-right"></i></a>
                                            <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i
                                                        class="icon-align-justify"></i></a>
                                        </div>
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i
                                                        class="icon-link"></i></a>
                                            <div class="dropdown-menu input-append">
                                                <input class="span2" placeholder="URL" type="text"
                                                       data-edit="createLink"/>
                                                <button class="btn" type="button">Add</button>
                                            </div>
                                            <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i
                                                        class="icon-cut"></i></a>

                                        </div>

                                        <div class="btn-group">
                                            <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i
                                                        class="icon-undo"></i></a>
                                            <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i
                                                        class="icon-repeat"></i></a>
                                        </div>
                                    </div>

                                    <div id="editor">
                                        @if (isset($post))
                                            {!!  $post->content !!}
                                        @endif
                                    </div>

                                </div>


                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="hidden" name="content" id="content" required></textarea>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group text-right alignright">
                                    <div class="col-md-12 ">

                                        @if (isset($post))
                                            <button id="send" name="Save" type="submit" class="btn btn-success"
                                                    onclick='return confirm("Do you want to modify the post?")'><i
                                                        class="fa fa-2x fa-save"></i>&nbsp;Save
                                            </button>
                                        @else
                                            <button name="Save" id="send" type="submit" class="btn btn-success"><i
                                                        class="fa fa-2x fa-save"></i>&nbsp;Save
                                            </button>

                                        @endif
                                        {!! Form::close() !!}
                                        @if (isset($post))
                                            {!! Form::open(['route' => ['admin.posts.destroy', $post->id],'style' => 'display: inline', 'method' => 'DELETE']) !!}
                                            <button class="btn btn-danger "
                                                    onclick='return confirm("Do you wanto to delete the post?")'>
                                                <i class="fa fa-2x fa-trash"></i>&nbsp;Delete post
                                            </button>
                                            {!! Form::close() !!}
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




@include('admin.post.partials.active_menu')

</body>

</html>