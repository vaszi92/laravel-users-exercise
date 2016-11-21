<table id='userinfo'>
    @if(isset($users) && !$users->isEmpty())
        <tr>
          <th class='text-center'>Username</th>
          <th class='text-center'>Firstname</th>
          <th class='text-center'>Lastname</th>
          <th class='text-center'>Email</th>
          <th class='text-center'>Phone</th>
          <th class='text-center'></th>
        </tr>
        @foreach($users as $user)
        <tr class="user" id="{{$user->id}}">
          <td class='text-center'>{{$user->username}}</td>
          <td class='text-center'>{{$user->firstname}}</td>
          <td class='text-center'>{{$user->lastname}}</td>
          <td class='text-center'>{{$user->email}}</td>
          <td class='text-center'>{{$user->phone}}</td>
          <td class='text-center'>{!! link_to_action('UsersController@edit', 'Edit', $user->id, ['class'=>'btn btn-warning', 'style'=>'margin-bottom:5px']); !!}
                                  <br /><button class="btn btn-danger btn-delete" value="{{$user->id}}" data-token="{{ csrf_token() }}" onclick="return confirm('Are you sure you want to delete this user?');">Delete</button>
<!--                                    {!! Form::open(['action' => ['UsersController@destroy', $user->id], 'method' => 'DELETE']) !!}
                                        {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-delete']) !!}
                                    {!! Form::close() !!}-->
          </td>
        </tr>
        @endforeach
    @else
    <td class="text-center"><b>No users found, please try again.</b></td>
    @endif
</table>

