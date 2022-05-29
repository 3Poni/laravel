@extends('personal.layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Мои статьи</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-1 mb-3">
                    <a href="{{ route('personal.article.create') }}" type="button" class="btn btn-block btn-warning">Добавить</a>
                </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>Название</th>
                                        <th colspan="2">Действие</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($articles as $article)
                                        <tr>
                                            <td>{{$article->title}}</td>
                                            <td><a href="{{ route('main.articles.show', $article->id) }}"><i class="far fa-eye"></i></a></td>
                                            <td><a href="{{ route('personal.article.edit', $article->id) }}"><i class="fas fa-pencil-alt text-success"></i></a></td>
                                            <td>
                                                <form action="{{ route('personal.article.delete', $article->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="border-0 bg-transparent">
                                                        <i class="fas fa-trash text-danger" role="button"></i>
                                                    </button>
                                                </form>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
