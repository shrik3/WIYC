@extends('layouts.app')

@section('content')


<style>

</style>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Logging a new book </div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>新增失败</strong> 输入不符合要求<br><br>
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                    <form action="{{ url('admin/book') }}" method="POST" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <input type="text" name="name" class="form-control" required="required" placeholder="请输入名称 (无需书名号)">
                        <br>
                        <input type="text" name="ISBN" class="form-control" required="required" placeholder="请输入ISBN">
                        <br>
                        <input type="text" name="info" class="form-control" required="required" placeholder="请输入出版信息">
                        <br>
                        <input type="text" name="amount" class="form-control" required="required" placeholder="请输入数量">
                        <br>
                        <input type="text" name="base_price" class="form-control" required="required" placeholder="基础价格">
                        <br>
                        <input type="text" name="sale_price" class="form-control" required="required" placeholder="售价">
                        <br>
                        <textarea name="brief" rows="10" class="form-control" required="required" placeholder="请输入简介"></textarea>
                        <br>
                        <div class="row">
            				<div class="col-md-12">
            					<input type="file" name="image" required="required"  />
            				</div>
                        </div>
                        <br>
                        <button class="btn btn-lg btn-info">New entry</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
