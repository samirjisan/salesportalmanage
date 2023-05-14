<html>

<head>

    <title>ALL SALES</title>

    @include('layouts.header')

    <style>
        table {
            width:100%;
        }
        table, th, td {
            border: 2px solid black;
            border-collapse: collapse;
            table-layout: fixed;
            /*width: 80.2px;*/
            font-size: 13px;
            /*text-align: justify;*/
        }
        th, td {
            padding: 2px;
            text-align: center;
        }
        /*#td tr:nth-child(even) {*/
        /*background-color: blue;*/
        /*}*/
        /*#td tr:nth-child(odd) {*/
        /*background-color: greenyellow;*/
        /*}*/
        th {
            background-color: olive;
            color: white;
        }
        h1 {
            color: blueviolet;
            text-align: center;
            /*border: 3px solid green;*/

        }

        nav{
            background-color: maroon;
        }




    </style>
</head>

<body>
@include('layouts.body')

{{--<nav class="navbar navbar-inverse-fixed-top">--}}
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><img src="/image/logo/logo3.png" height="25" alt="ORBIT"></a>
        </div>
        <ul class="nav navbar-nav">
            {{--<li><a href="#" ><span class="glyphicon glyphicon-LOGO"></span><img src="/image/logo/cc.JPG" height="28" alt="CoolBrand"></a></li>--}}
            <li><a href="{{ route('sales.list') }}"><span class="glyphicon glyphicon-Add New User"></span>New Sale Entry</a></li>
            <li><a href="{{ route('sales.show') }}"><span class="glyphicon glyphicon-Show All Entries"></span>All Sales</a></li>
            {{--<li><a href="{{ route('sales.exportIntoExcel') }}"><span class="glyphicon glyphicon-Report"></span> Download Report</a></li>--}}
            {{--<li><a href="{{ route('sales.exportIntoExcel') }}"><input type="submit" name="submit" value="Report"></a></li>--}}
            {{--<li><a href="#"><span class="glyphicon glyphicon-Add New User"></span> Login</a></li>--}}
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('sales.cr') }}"><span class="glyphicon glyphicon-Show Users"></span>Credits</a></li>
            <li><a href="{{ route('user.logout') }}">( {{ App\User::find(Auth::id())->username }} )<span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            {{--<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>--}}
        </ul>

        <form class="navbar-form navbar-left" >
            <div class="input-group" type="get" action="#">
                <input type="search" value="" id="myInput" class="form-control" placeholder="Filter" name="query">
                {{--<div class="input-group-btn">--}}
                {{--<button class="btn btn-default" type="submit">--}}
                {{--<i class="glyphicon glyphicon-search"></i>--}}
                {{--</button>--}}
                {{--</div>--}}

            </div>
        </form>
    </div>
</nav>


@if(session('updateSuccess'))
    <p style="color:green;">{{ session('updateSuccess') }}</p>
@endif

@if(session('deleteSuccess'))
    <p style="color:red;">{{ session('deleteSuccess') }}</p>
@endif


@if(session('addSuccess'))
    <p style="color:blue;">{{ session('addSuccess') }}</p>
@endif
<h1>ALL SALES</h1>
<table border="1px">
    <tr style="color: #000088">
        {{--<th>Count</th>--}}
        <th>Employee</th>
        <th>Team</th>
        <th>Zone</th>
        <th>Area</th>
        <th>Subscriber ID</th>
        <th>Subscriber Name</th>
        <th>Offer</th>
        <th>Package</th>
        <th>MRC</th>
        <th>OTC</th>
        <th>Advance (Months)</th>
        <th>Total</th>
        <th>Sales Type</th>
        <th>Create Date</th>
        <th>Payment Date</th>
        <th>Delivery Date</th>
        <th>Action</th>
    </tr>

    <tbody id="myTable">
    @foreach($sales as $sale)
        <tr>
            <td>{{ $sale->employee }}</td>
            <td>{{ $sale->team }}</td>
            <td>{{ $sale->zone }}</td>
            <td>{{ $sale->area }}</td>
            <td>{{ $sale->subscriber_id }}</td>
            <td>{{ $sale->subscriber_name }}</td>
            <td>{{ $sale->offer }}</td>
            <td>{{ $sale->package }}</td>
            <td>{{ $sale->mrc}}</td>
            <td>{{ $sale->otc }}</td>
            <td>{{ $sale->advance }}</td>
            <td>{{ $sale->total }}</td>
            <td>{{ $sale->salesType }}</td>
            <td>{{ $sale->create }}</td>
            <td>{{ $sale->payment }}</td>
            <td>{{ $sale->delivery }}</td>

            <td><a href="{{ route('sales.edit',[$sale->id]) }}" title="edit" class="btnRegister1" onclick="return confirm('Are you sure you want to edit this item')">Edit</a>||<a href="{{ route('sales.delete',[$sale->id]) }}"title="delete" class="btnRegister2" onclick="return confirm('Are you sure you want to delete this item')">Delete</a></td>
        </tr>
    @endforeach
    </tbody>
</table>

<span>
    {{$sales->links()}}
</span>

{{--<a href="{{ route('sales.list') }}"><input type="submit" style="background: blueviolet; color: black" name="submit" value="Add New User"></a>--}}
{{--<a href="{{ route('user.see') }}"><input type="submit" style="background: blueviolet; color: black" name="submit" value="Show All Users"></a>--}}
{{--<a href="{{ route('sales.exportIntoExcel') }}"><input type="submit" style="background: blueviolet; color: black" name="submit" value="Report"></a>--}}
{{--<input type="submit" name="submit" value="Add New User">--}}

<script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
@include('layouts.footer')
</body>

</html>