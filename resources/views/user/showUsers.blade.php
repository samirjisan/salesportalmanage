<html>
<title>Show Users</title>


<title>SHOW USERS</title>
<body>
@include('layouts.body')

<div class="col-md-12">
    <a href="{{ route('user.logout') }}">( {{ App\User::find(Auth::id())->username }} )Logout</a>
</div>

<table border="1px">
    <tr>
        {{--<th>ID</th>--}}
        <th>Username</th>
        <th>Email</th>
        {{--<th>Image</th>--}}
        <th>Action</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            {{--<td><img src="{{ asset('image/'.$user->image) }}" alt="" width="200px"></td>--}}
            {{--<td><a href="{{ route('user.edit',[$user->id]) }}">Edit</a>||<a href="{{ route('user.delete',[$user->id]) }}">Delete</a></td>--}}
        </tr>
    @endforeach
</table>

<!--<a href="{{ route('sales.show') }}"><input type="submit" name="submit" value="Show All Entry"></a>-->
<!--<a href="{{ route('sales.list') }}"><input type="submit" style="background: blueviolet; color: black" name="submit" value="Add New User"></a>-->

@include('layouts.footer')
</body>
</html>