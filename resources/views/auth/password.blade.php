@extends('layouts.default')
@section('title','重置密码')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @include('shared.errors')
                        <form action="{{route('password.reset')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="">邮箱地址</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{old('email')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        重置
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop