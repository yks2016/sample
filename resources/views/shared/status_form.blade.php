<form action="{{route('statuses.store')}}" method="post">
    @include('shared.errors')
    {{csrf_field()}}
    <textarea class="form-control" name="content" id="" rows="3" placeholder="聊聊新鲜事..."
              name="content">{{old('content')}}</textarea>
    <button class="btn btn-primary pull-right" type="submit">发布</button>
</form>