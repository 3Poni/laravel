@extends('admin.layouts.app')
@section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Редактирование тэга</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-12">
                            <form action="{{ route('admin.tag.update', $tag->id) }}" method="POST" class="w-25 pt-3">
                                @csrf
                                @method('PATCH')
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" placeholder="Название тэга"
                                value="{{ $tag->title }}">
                                @error('title')
                                <div class="text-danger">
                                    Это поле необходимо заполнить
                                </div>
                                @enderror
                            </div>
                                <input type="submit" class="btn btn-success" value="Обновить">
                            </form>
                        </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
@endsection
