@extends('layouts.back-end.dashboard')

@section("title","Blog | Admin")
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Blog<br/>
                <small>Display admin blog submits /contacts</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href=" {{ url("/home") }}"><i class="fa fa-dashboard"></i> Dashboard </a>
                </li>
                <li>
                    <a href="{{ route("blog.index") }}">Blog</a>
                </li>
                <li class="active">Admin Submits</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="pull-left">
                                <a href="{{ route("blog.create") }}" class="btn btn-success">Add New</a>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body ">
                            {{--
                            @if( ! $admins->count())
                                <div class="alert alert-danger">
                                    <strong>No Record Found</strong>
                                </div>

                            @else   --}}
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Action</th>
                                        <td>Name</td>
                                        <td>Type</td>
                                        <td>Email</td>
                                        <td>Base</td>
                                        <td>Extras</td>
                                        <td>Body</td>
                                        <td>Date</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($admin as $admins)
                                        <tr>
                                            <td width="80">
                                                <a href="{{ route("blog.edit",$blogs->id) }}" class="btn btn-xs btn-default">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{ route("destroy", $blogs->id) }}" class="btn btn-xs btn-danger">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </td>
                                            <td>{{ $admins->category }}</td>
                                            <td>{{ $admins->title }}</td>
                                            <td>{{ $admins->body }}</td>
                                        {{--    <td>{{ $admins->image }}</td>  --}}

                                            <td>{{ $blogs->body }}</td>
                                            <td>
                                                <abbr title="{{ $blogs->dateFormatted(true) }}">{{ $blogs-> dateFormatted() }}</abbr> |
                                                {!! $blogs->publicationLabel() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                           {{-- @endif --}}
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
                            <div class="pull-right">
                                <small> {{ $blogCount }} {{ Str::plural('Item', $postCount ?? '') }}</small>
                            </div>
                        </div>
                    </div>

                    <!-- /.box -->
                </div>
            </div>
            <!-- ./row -->
        </section>
    </div>
@endsection

@section("script")
    <script type="text/javascript">
        $("ul.pagination").addClass("no margin pagination-sm");
    </script>
@endsection
