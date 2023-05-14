<html>

<head>

    <title>CREDITS</title>

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
            /*padding: 00px 200px 10px 80px;*/

            /*/!*padding-top: 50px;*!/*/
            /*padding-right: 800px;*/
            /*padding-bottom: 50px;*/
            /*padding-left: 80px;*/

        }

        p{
            text-align: center;
            /*background-color: yellow;*/
            font-weight: bold;
        }

        mark {
            background-color: transparent;
            color: green;

            /*padding: 00px 800px 10px 80px;*/
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

<h1>PROUD MEMBERS OF ORBIT</h1>
@include('errors.error')

<br>
<br><br>

<p><mark>DEVELOPED BY<br>
    ABDULLAH AL SAMIR</mark></p>

<p><mark>ENCOURAGED BY<br>
        MD. FATEHUZZAMAN (RASHED)<br>
        MD. MAHBUBUL ALAM (REYAD)<br>
        MINARA MANNAN MIMI<br>
        SHAKILA ZAHAN URMI
    </mark></p>

<!--<p><mark>SUPPORTED BY<br>-->
<!--        MINARA MANNAN MIMI<br>-->
<!--        SHAKILA ZAHAN URMI-->
<!--    </mark></p>-->

<p><mark>CONCEPT BY<br>
        MUHAMMAD ASHRAFUZZAMAN
</mark></p>

@include('layouts.body')

@include('layouts.footer')

</body>