<html>

<head>

    <title>Sales Information Edit</title>

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
            <li><a href="{{ route('user.see') }}"><span class="glyphicon glyphicon-All Users"></span>All Users</a></li>
            <!--<li><a href="{{ route('admuse.exportIntoExcel') }}"><span class="glyphicon glyphicon-Report"></span> Download Report</a></li>-->
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('admuse.exportIntoExcel') }}"><span class="glyphicon glyphicon-Report"></span> Download Report</a></li>
            <li><a href="{{ route('admuse.cr') }}"><span class="glyphicon glyphicon-Show Users"></span>Credits</a></li>
            <li><a href="{{ route('admin.logout') }}">( {{ App\Admin::find(Auth::guard('admin')->id())->email }} )<span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

        </ul>

    </div>
</nav>


<h1>SALES INFORMATION EDIT</h1>
@include('errors.error')


    {{--<h1>User</h1>--}}
    {{--<a href="{{ route('user.logout') }}">( {{ App\User::find(Auth::id())->username }} )Logout</a>--}}


    <form action="{{route('admuse.update',[$sale->id])}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

    <div class="container register">
        <div class="row">

            <div class="col-md-9 register-right">


                <div class="row register-form">

                    {{--1st phase start--}}
                    <div class="col-md-3">

                        {{--<div class="form-group">--}}
                            {{--<p>Employee<select class="form-control" name="employee">--}}
                                    {{--<option >Employee Name</option>--}}
                                    {{--<!-- <option>Select</option>-->--}}
                                    {{--<option>Ashraf</option>--}}
                                    {{--<option>Urmi</option>--}}
                                    {{--<option>Mamia</option>--}}
                                {{--</select></p>--}}
                        {{--</div>--}}

                        <div class="form-group">
                            <!--                                <label for="exampleInputZone">Subscriber ID</label><br>-->
                            <p>Employee<input type="text" class="form-control" name="employee" placeholder="Employee" value="{{ $sale->employee }}"></p>
                        </div>

                        <div class="form-group">
                            <!--                                <label for="exampleInputZone">Subscriber ID</label><br>-->
                            <p>Subscriber_ID<input type="text" class="form-control" name="subscriber_id" placeholder="Subscriber_ID" maxlength="9" value="{{ $sale->subscriber_id }}"></p>
                        </div>

                        <div class="form-group">
                            <!--                                <label for="exampleInputZone">MRC</label><br>-->
                            <p>MRC<input type="number" class="form-control" name="mrc" placeholder="MRC" value="{{ $sale->mrc }}"></p>
                        </div>

                        {{--<div class="form-group">--}}
                            {{--<p>Sales Type<select class="form-control" name="type">--}}
                                    {{--<option>Sales Type</option>--}}
                                    {{--<option>Own</option>--}}
                                    {{--<option>Lead</option>--}}
                                    {{--<option>Client Reference</option>--}}
                                    {{--<option>Employee Reference</option>--}}
                                    {{--<option>Other Reference</option>--}}
                                {{--</select></p>--}}
                        {{--</div>--}}

                        <div class="form-group">
                            <!--                                <label for="exampleInputZone">MRC</label><br>-->
                            <p>Sales Type<input type="text" class="form-control" name="salesType" placeholder="Sales Type" value="{{ $sale->salesType }}"></p>
                        </div>
                    </div>
                    {{--1st phase end--}}





                    {{--2nd phase--}}
                    <div class="col-md-3">

                        {{--<div class="form-group">--}}
                            {{--<p>Team<select class="form-control" name="TEAM">--}}
                                    {{--<option >Select Team</option>--}}
                                    {{--<!-- <option>Select</option>-->--}}
                                    {{--<option>Direct Sales</option>--}}
                                    {{--<option>Tele Sales</option>--}}
                                    {{--<option>Agent</option>--}}
                                {{--</select></p>--}}
                        {{--</div>--}}

                        <div class="form-group">
                            <!--                                <label for="exampleInputZone">MRC</label><br>-->
                            <p>Team<input type="text" class="form-control" name="team" placeholder="Team" value="{{ $sale->team }}"></p>
                        </div>


                        <div class="form-group">
                            <!--                                <label for="exampleInputZone">Subscriber ID</label><br>-->
                            <p>Subscriber_Name<input type="text" class="form-control" name="subscriber_name" placeholder="Subscriber_Name" value="{{ $sale->subscriber_name }}"></p>
                        </div>

                        <div class="form-group">
                            <!--                                <label for="exampleInputZone">OTC</label><br>-->
                            <p>OTC<input type="number" class="form-control" name="otc" placeholder="OTC" value="{{ $sale->otc }}"></p>
                        </div>


                        <div class="form-group">
                            <!--                                <label for="exampleInputDate">Create Date</label>-->
                            <p>Create Date<input type="date" class="form-control" name="create"  placeholder="Create" value="{{ $sale->create }}"></p>
                        </div>

                    </div>
                    {{--2nd phase end--}}


                    {{--3rd phase--}}
                    <div class="col-md-3">


                        {{--<div class="form-group">--}}
                            {{--<p>Zone<select class="form-control" name="ZONE">--}}
                                    {{--<option >Select Zone</option>--}}
                                    {{--<option>Banani</option>--}}
                                    {{--<option>Bashundhara</option>--}}
                                    {{--<option>Dhanmondi</option>--}}
                                    {{--<option>Motijheel</option>--}}
                                    {{--<option>Uttara</option>--}}
                                    {{--<option>Chittagong</option>--}}
                                    {{--<option>Cox's Bazar</option>--}}
                                    {{--<option>Khulna</option>--}}
                                    {{--<option>Sylhet</option>--}}

                                {{--</select></p>--}}
                        {{--</div>--}}

                        <div class="form-group">
                            <!--                                <label for="exampleInputDate">Delivery Date</label><br>-->
                            <p>Zone<input type="text" class="form-control" name="zone" placeholder="Zone" value="{{ $sale->zone }}"></p>
                        </div>


                        {{--<div class="form-group">--}}
                            {{--<p>Offer<select class="form-control" name="Offer">--}}
                                    {{--<option >Select Offer</option>--}}
                                    {{--<!-- <option>Select</option>-->--}}
                                    {{--<option>Regular</option>--}}
                                    {{--<option>Promotional</option>--}}
                                    {{--<option>Special</option>--}}
                                {{--</select></p>--}}
                        {{--</div>--}}

                        <div class="form-group">
                            <!--                                <label for="exampleInputDate">Delivery Date</label><br>-->
                            <p>Offer<input type="text" class="form-control" name="offer" placeholder="Offer" value="{{ $sale->offer }}"></p>
                        </div>

                        <div class="form-group">
                            <!--                                <label for="exampleInputZone">Advance(Months</label><br>-->
                            <p>Advance(Months)<input type="text" class="form-control" name="advance" placeholder="Advance(Months)" value="{{ $sale->advance }}"></p>
                        </div>




                        <div class="form-group">
                            <!--                                <label for="exampleInputDate">Delivery Date</label><br>-->
                            <p>Payment Date<input type="date" class="form-control" name="payment" aria-describedby="dateHelp" placeholder="Payment Date" value="{{ $sale->delivery }}"></p>
                        </div>


                    </div>
                    {{--3rd phase end--}}


                    {{--4th phase--}}
                    <div class="col-md-3">

                        <div class="form-group">
                            <!--                                <label for="exampleInputZone">Subscriber ID</label><br>-->
                            <p>Area<input type="text" class="form-control" name="area" placeholder="Area" value="{{ $sale->area }}"></p>
                        </div>

                        {{--<div class="form-group">--}}
                            {{--<p>Select Package<select class="form-control" name="Package">--}}
                                    {{--<option >Select Package</option>--}}
                                    {{--<!-- <option>Select</option>-->--}}
                                    {{--<option>5 MBPS</option>--}}
                                    {{--<option>10 MBPS</option>--}}
                                    {{--<option>15 MBPS</option>--}}
                                    {{--<option>25 MBPS</option>--}}
                                    {{--<option>30 MBPS</option>--}}
                                    {{--<option>35 MBPS</option>--}}
                                    {{--<option>40 MBPS</option>--}}
                                    {{--<option>45 MBPS</option>--}}
                                    {{--<option>50 MBPS</option>--}}
                                    {{--<option>75 MBPS</option>--}}

                                {{--</select></p>--}}
                        {{--</div>--}}

                        <div class="form-group">
                            <!--                                <label for="exampleInputZone">Subscriber ID</label><br>-->
                            <p>Package<input type="text" class="form-control" name="package" placeholder="Package" value="{{ $sale->package }}"></p>
                        </div>

                        <div class="form-group">
                            <!--                                <label for="exampleInputZone">Total</label><br>-->
                            <p>Total<input type="text" class="form-control" name="total" placeholder="Total"  value="{{ $sale->total }}" onmouseup="calcTotal()"></p>
                        </div>

                        {{--<div class="form-group">--}}
                            {{--<!--                                <label for="exampleInputDate">Delivery Date</label><br>-->--}}
                            {{--<p>Payment Date<input type="date" class="form-control" name="payment" aria-describedby="dateHelp" placeholder="Payment Date" value="{{ $sale->delivery }}"></p>--}}
                        {{--</div>--}}

                        <div class="form-group">
                            <!--                                <label for="exampleInputDate">Delivery Date</label><br>-->
                            <p>Delivery Date<input type="date" class="form-control" name="delivery" aria-describedby="dateHelp" placeholder="Delivery Date" value="{{ $sale->delivery }}"></p>
                        </div>

                        <div>
                            <input type="submit" class="btnRegister"  value="Update" onclick="return confirm('Are you sure you want to submit this information')"/>
                        </div>


                    </div>

                    {{--4th phase end--}}

                </div>
            </div>

        </div>
    </div>

</form>

<script>
    function calcTotal() {
        let mrc = document.getElementsByName("mrc")[0].value;
        let otc = document.getElementsByName("otc")[0].value;
        let advance = document.getElementsByName("advance")[0].value;
        let total = +otc +mrc*advance;
        document.getElementsByName("total")[0].value = total;
    }
</script>

@include('layouts.footer')
</body>

</html>