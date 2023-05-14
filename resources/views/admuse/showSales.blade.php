<html>

<head>
    <title>All Sales</title>
    @include('layouts.header')

    <style>
        table {
            width:100%;
        }
        table, th, td {
            border: 2px solid black;
            border-collapse: collapse;
            table-layout: fixed;
            width: 80.2px;
            font-size: 13px;
            /*text-align: justify;*/
        }
        th, td {
            padding: 3px;
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
        
        
        footer {
            position: relative;
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: center;
            padding: 3px;
            background-color: Black;
            color: white;
        }

        /*tr{*/

        /*    padding: fixed;*/

        /*}*/

        /*body{*/
        /*background-image: url("/image/bcg.jpg");*/
        /*background-repeat: no-repeat;*/
        /*background-size: cover;*/
        /*}*/
        
        
        /*table.dataTable thead .sorting:after,*/
        /*table.dataTable thead .sorting:before,*/
        /*table.dataTable thead .sorting_asc:after,*/
        /*table.dataTable thead .sorting_asc:before,*/
        /*table.dataTable thead .sorting_asc_disabled:after,*/
        /*table.dataTable thead .sorting_asc_disabled:before,*/
        /*table.dataTable thead .sorting_desc:after,*/
        /*table.dataTable thead .sorting_desc:before,*/
        /*table.dataTable thead .sorting_desc_disabled:after,*/
        /*table.dataTable thead .sorting_desc_disabled:before {*/
        /*  bottom: .5em;*/
        /*}*/




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
            {{--<li><a href="{{ route('sales.exportIntoExcel') }}"><input type="submit" name="submit" value="Report"></a></li>--}}
            {{--<li><a href="#"><span class="glyphicon glyphicon-Add New User"></span> Login</a></li>--}}
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('admuse.exportIntoExcel') }}"><span class="glyphicon glyphicon-Report"></span> Download Report</a></li>
            <li><a href="{{ route('admuse.cr') }}"><span class="glyphicon glyphicon-Show Users"></span>Credits</a></li>
            <li><a href="{{ route('admin.logout') }}">( {{ App\Admin::find(Auth::guard('admin')->id())->email }} )<span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
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


<h1>ALL SALES</h1>

@if(session('updateSuccess'))
    <p style="color:green;">{{ session('updateSuccess') }}</p>
@endif

@if(session('deleteSuccess'))
    <p style="color:red;">{{ session('deleteSuccess') }}</p>
@endif


@if(session('addSuccess'))
    <p style="color:blue;">{{ session('addSuccess') }}</p>
@endif


<form action="{{route('admuse.show')}}" method="post">

    {{csrf_field()}}
    <label for="date">Create Date From</label>
    <input type="date" name="from" value="create">&nbsp;
    <label for="date">Create Date To</label>
    <input type="date" name="to" value="create">&nbsp;
    <button class="button" type="submit">Search</button>

<table border="1px">
    <!--<table border="1px" id="dtBasicExample" class="table">-->
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
        <!--<tbody id="dtBasicExample">-->
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

            {{--<td><a href="{{ route('admuse.edit',[$sale->Count]) }}" title="edit" class="edit" onclick="return confirm('Are you sure you want to edit this item')">Edit</a>||<a href="{{ route('admuse.delete',[$sale->Count]) }}"title="delete" class="delete" onclick="return confirm('Are you sure you want to delete this item')">Delete</a></td>--}}
            {{--<input type="submit" class="btnRegister"  value="Save"/>--}}
            <td><a href="{{ route('admuse.edit',[$sale->id]) }}" title="edit" class="btnRegister1" onclick="return confirm('Are you sure you want to edit this item')">Edit</a>||<a href="{{ route('admuse.delete',[$sale->id]) }}"title="delete" class="btnRegister2" onclick="return confirm('Are you sure you want to delete this item')">Delete</a></td>
        </tr>

    @endforeach
        </tbody>
</table>

<span>
    {{$sales->links()}}
</span>

</form>

<script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
    
    // $(document).ready(function () {
    // $('#dtBasicExample').DataTable();
    // $('.dataTables_length').addClass('bs-select');
    // });
</script>

<!--@include('layouts.footer')-->

<footer>A Brand of Race Online LTD</footer>

</body>

</html>
