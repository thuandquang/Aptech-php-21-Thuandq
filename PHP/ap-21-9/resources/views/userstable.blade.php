<table>
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
        </tr>

    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
        </tr>
        @endforeach
    </tbody>
</table>