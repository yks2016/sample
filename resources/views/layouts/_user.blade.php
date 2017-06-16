<li style="border-bottom: 1px solid #c0c0c0;list-style: none;">
    <img src="{{$user->gravatar()}}" alt="{{$user->name}}" class="gravatar" style="float:none;"/>
    <a href="{{route('users.show',$user->id)}}" class="username">{{$user->name}}</a>
    @can('destroy',$user)
        <form action="{{route('users.destroy',$user->id)}}">
            {{method_field('DELETE')}}
            {{csrf_field()}}
            <button type="submit" class="btn btn-sm btn-danger delete-btn">删除</button>
        </form>
    @endcan
</li>