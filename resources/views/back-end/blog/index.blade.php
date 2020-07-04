@extends('layouts.back-end.dashboard')

@section("title","Blog | Index")
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Blog<br/>
                <small>Display all blog posts</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href=" {{ url("/home") }}"><i class="fa fa-dashboard"></i> Dashboard </a>
                </li>
                <li>
                    <a href="{{ route("blog.index") }}">Blog</a>
                </li>
                <li class="active">All Posts</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body ">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <td>Action</td>
                                    <td>Name</td>
                                    <td>Type</td>
                                    <td>Email</td>
                                    <td>Base</td>
                                    <td>Extras</td>
                                    <td>Date</td>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blog as $blogs)
                                    <tr>
                                        <td width="80">
                                            <a href="{{ route("blog.edit",$blogs->id) }}" class="btn btn-xs btn-default">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{ route("blog.destroy", $blogs->id) }}" class="btn btn-xs btn-danger">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                        <td>{{ $blogs->name }}</td>
                                        <td>{{ $blogs->type }}</td>
                                        <td>{{ $blogs->email }}</td>
                                        <td>{{ $blogs->base }}</td>
                                        <td>
                                            <ul>
                                                @if($blogs->design!=null)
                                                    @foreach($blogs->design as $designs)
                                                        <li>{{ $designs }}</li>
                                                    @endforeach
                                                @else
                                                    <p>NOT FILLED</p>
                                                @endif
                                            </ul>
                                        </td>
                                        <td>
                                            <abbr title="{{ $blogs->dateFormatted(true) }}">{{ $blogs-> dateFormatted() }}</abbr> |
                                            {!! $blogs->publicationLabel() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <div class="pull-left">
                            <ul class="pagination no-margin">
                            <li><a href="#">&laquo;</a> </li>
                            <li><a href="#">1</a> </li>
                            <li><a href="#">2</a> </li>
                            <li><a href="#">3</a> </li>
                            <li><a href="#">&raquo;</a> </li>
                            <li></li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    <div class="pull-right">
                        <small> {{ $blogCount }} {{ Str::plural('Item', $postCount ?? '') }}</small>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <!-- ./row -->
        </section>
    </div>
@endsection
