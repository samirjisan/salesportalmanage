<html>

<head>

    <title>All Users</title>

    @include('layouts.header')

    <style>
        table {
            width:50%;
            /*padding-bottom: 150px;*/
            
        }
        table, th, td {
            border: 2px solid black;
            border-collapse: collapse;
            /*padding-bottom: 15px;*/
        }
        th, td {
            padding: 1px;
            text-align: center;
        }
        
        table.center {
             margin-left: auto; 
             margin-right: auto;
        }

        th {
            background-color: olive;
            color: white;
        }
        h1 {
            color: blueviolet;
            text-align: center;
            /*border: 3px solid green;*/
            text-decoration: underline;
            padding: 00px 100px 10px 80px;

            /*/!*padding-top: 50px;*!/*/
            /*padding-right: 800px;*/
            /*padding-bottom: 50px;*/
            /*padding-left: 80px;*/

        }
        
        p{
            font-weight: bold;
        }



    </style>
</head>

<body>

@include('layouts.body')


<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">ORBIT</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ route('admuse.list') }}"><span class="glyphicon glyphicon-New Sale Entry"></span> New Sale Entry</a></li>
            <li><a href="{{ route('admuse.show') }}"><span class="glyphicon glyphicon-All Sales"></span>All Sales</a></li>
            <!--<li><a href="{{ route('admuse.exportIntoExcel') }}"><span class="glyphicon glyphicon-Report"></span> Download Report</a></li>-->
            <li><a href="{{ route('user.see') }}"><span class="glyphicon glyphicon-All Users"></span>All Users</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('admuse.exportIntoExcel') }}"><span class="glyphicon glyphicon-Report"></span> Download Report</a></li>
            <li><a href="{{ route('admuse.cr') }}"><span class="glyphicon glyphicon-Show Users"></span>Credits</a></li>
            <li><a href="{{ route('admin.logout') }}">( {{ App\Admin::find(Auth::guard('admin')->id())->email }} )<span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

        </ul>

    </div>
</nav>


<h1>ALL USERS</h1>
@include('errors.error')



<!--<div class="col-md-12">-->
<!--    <a href="{{ route('admin.logout') }}">( {{ App\Admin::find(Auth::guard('admin')->id())->email }} )Logout</a>-->
<!--</div>-->

<table border="1px" class="center">
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
            <td><a href="{{ route('user.edit',[$user->id]) }}" title="edit" class="btnRegister1" onclick="return confirm('Are you sure you want to edit this item')">Edit</a>||
                <a href="{{ route('user.delete',[$user->id]) }}"title="delete" class="btnRegister2" onclick="return confirm('Are you sure you want to delete this item')">Delete</a></td>
        </tr>
    @endforeach
</table>

<span>
    {{$users->links()}}
</span>

<!--<a href="{{ route('admuse.show') }}"><input type="submit" name="submit" value="Show All Entry"></a>-->
<!--<a href="{{ route('admuse.list') }}"><input type="submit" style="background: blueviolet; color: black" name="submit" value="Add New User"></a>-->

@include('layouts.footer')
</body>
</html>