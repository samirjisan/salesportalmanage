<html>

<head>

    <title>User Information Edit</title>

    @include('layouts.header')

    <style>
        table {
            width:100%;
        }
        table, th, td {
            border: 2px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
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
            padding: 00px 350px 10px 80px;

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
            {{--<li><a href="{{ route('admuse.exportIntoExcel') }}"><span class="glyphicon glyphicon-Report"></span> Download Report</a></li>--}}
            <li><a href="{{ route('user.see') }}"><span class="glyphicon glyphicon-Show Users"></span>Show Users</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('admuse.exportIntoExcel') }}"><span class="glyphicon glyphicon-Report"></span> Download Report</a></li>
            <li><a href="{{ route('admuse.cr') }}"><span class="glyphicon glyphicon-Show Users"></span>Credits</a></li>
            <li><a href="{{ route('admin.logout') }}">( {{ App\Admin::find(Auth::guard('admin')->id())->email }} )<span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

        </ul>

    </div>
</nav>


<h1>USER INFORMATION EDIT</h1>
@include('errors.error')



<form action="{{route('user.update',[$user->id])}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="container register">
        <div class="row">

            <div class="col-md-9 register-right">


                <div class="row register-form">

                    <div class="col-md-3">

                        <div class="form-group">
                            <p>UserName<input type="text" class="form-control" name="username" placeholder="UserName" value="{{ $user->username }}"></p>
                        </div>

                        <div class="form-group">
                            <p>Email<input type="email" class="form-control" name="email" placeholder="Email" value="{{ $user->email }}"></p>
                        </div>

                        <div class="form-group">
                            <p>Password<input type="password" class="form-control" name="password" placeholder="Password" value="{{ $user->password }}"></p>
                        </div>

                        <div class="form-group">
                            <p>Confirm Password<input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" value=""></p>
                        </div>

                        <div>
                            <input type="submit" class="btnRegister"  value="Update" onclick="return confirm('Are you sure you want to submit this information')"/>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

</form>


@include('layouts.footer')
</body>

</html>