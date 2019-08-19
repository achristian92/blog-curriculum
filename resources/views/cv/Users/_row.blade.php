<tr>
    <td>{{$user->profile->full_name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->profile->birthdate}}</td>
    <td>{{$user->profile->celular}}</td>
    <td class="td-actions">
        <form action="{{ route('user.patch', $user) }}" method="POST">
            @csrf
            @method('PATCH')
        <a href="{{route('user.show',$user->id)}}" class="btn btn-default btn-link">
            <i class="material-icons">remove_red_eye</i>
        </a>
        <a href="{{route('user.edit',$user->id)}}" class="btn btn-default btn-link">
            <i class="material-icons">edit</i>
        </a>
        <button type="button"class="btn btn-danger btn-link">
            <i class="material-icons">close</i>
            <div class="ripple-container"></div>
        </button>
        </form>
    </td>
</tr>