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
        <tr>
          <td class='text-center'>{{$user->username}}</td>
          <td class='text-center'>{{$user->firstname}}</td>
          <td class='text-center'>{{$user->lastname}}</td>
          <td class='text-center'>{{$user->email}}</td>
          <td class='text-center'>{{$user->phone}}</td>
          <td class='text-center'>{!! link_to_action('UsersController@edit', 'Edit', $user->id, ['class'=>'btn btn-warning', 'style'=>'margin-bottom:5px']); !!}
                                    {!! Form::open(['action' => ['UsersController@destroy', $user->id], 'method' => 'DELETE']) !!}
                                        {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                    {!! Form::close() !!}</td>
        </tr>
        @endforeach
    @else
    <td class="text-center"><b>No results found, please try again.</b><br /><a href="{{ url('index') }}"><b>Display All</b></a></td>
    @endif
</table>

