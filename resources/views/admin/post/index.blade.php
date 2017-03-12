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
                            Posts
                            <small>
                                Posts you have wrote!
                            </small>
                        </h3>
                    </div>


                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                {!! Form::open(['style' => 'display: table','method' => 'GET', 'url' => 'admin/posts/search/filter']) !!}

                                <input name="filter" type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">Go!</button>
                                </span>

                                </div>
                                    {!! Form::close() !!}


                        </div>
                    </div>


                </div>
                <div class="clearfix"></div>


                <div class="row">


                    <div class="clearfix"></div>

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <div class="alignright">
                                    <br>
                                    <a href="{{ URL::to('/admin/posts/create') }}">
                                    <button class="btn btn-success">
                                        <i class="fa fa-2x fa-plus"></i>
                                        Add a new post
                                    </button>
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>


                            <div class="x_content">

                                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                                    <thead>
                                    <tr class="headings">
                                        <th class="column-title" style="width:20%">Title</th>
                                        <th class="column-title">Content</th>
                                        <th class="column-title">Created</th>
                                        <th class="column-title">Modified</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if ( isset( $posts) )

                                        @foreach( $posts as $post)


                                            <tr class="even pointer">
                                                <td >{{ $post->title}}</td>
                                                <td class=" ">{{ $post->shortContent()}}</td>
                                                <td class=" ">{{ $post->formattedCreatedAt()}}</td>
                                                <td class=" ">{{ $post->formattedUpdatedAt()}}</td>
                                                <td style="width:1%">
                                                    <button class="btn btn-xs btn-warning btn-round"><i
                                                                class="fa fa-2x fa-pencil"></i></button>
                                                </td>
                                                <td style="width:1%">
                                                    {!! Form::open(['method' => 'DELETE', 'url' => ['admin/post.destroy', 1]]) !!}
                                                    <button class="btn btn-danger btn-round btn-xs tooltips"
                                                            data-placement="top" data-original-title="Eliminar"
                                                            onclick='return confirm("¿Seguro que desea eliminar el post?")'>
                                                        <i class="fa fa-2x fa-trash"></i></button>
                                                    {!! Form::close() !!}
                                                </td>

                                            </tr>

                                        @endforeach


                                    @endif
                                            </tbody>

                                </table>
                            </div>
                            @if (isset($posts))
                                {!! $posts->setPath('')->appends(Request::query())->render()!!}
                            @endif

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

</body>

</html>