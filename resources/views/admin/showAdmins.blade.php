<html>


<title>Show All Admin</title>
{{--@extends('layouts.header')--}}
{{--@section('content')--}}
        <!-- <div class="navbar-wrapper">
<a class="navbar-brand text-black " href="#pablo">Bus List</a>
 </div>-->
{{--@include('message')--}}
<body>
@include('layouts.body')
{{--@extends('layouts.master')--}}
{{--@section('learn')--}}
    {{--<div class="container">--}}
        <h1>Admin Information</h1>

<a href="{{ route('admin.logout') }}">Logout</a>



        {{--@if(session('updateSuccess'))--}}
            {{--<p style="color: greenyellow">{{session('updateSuccess')}}</p>--}}
        {{--@endif--}}

        {{--@if(session('deleteSuccess'))--}}
            {{--<p style="color: red">{{session('deleteSuccess')}}</p>--}}
        {{--@endif--}}

        <table border="1px">
            <tr>

                <th>ID</th>
                <th>Email</th>

            </tr>
            @foreach($admins as $admin)
                <tr>

                    <td>{{ $admin->id }}</td>
                    <td>{{ $admin->email }}</td>
                </tr>
            @endforeach
        </table>
    {{--</div>--}}
{{--@endsection--}}

@include('layouts.footer')
</body>
</html>