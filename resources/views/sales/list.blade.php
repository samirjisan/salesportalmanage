<html>

<head>

    <title>New Sale Entry</title>

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
            padding: 00px 350px 5px 50px;
            /*/!*padding-top: 50px;*!/*/
            /*padding-right: 800px;*/
            /*padding-bottom: 50px;*/
            /*padding-left: 80px;*/
        }

        p{
            font-weight: bold;
        }

        option{
            font-weight: normal;
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
            <li><a href="{{ route('sales.list') }}"><span class="glyphicon glyphicon-New Sale Entry"></span> New Sale Entry</a></li>
            <li><a href="{{ route('sales.show') }}"><span class="glyphicon glyphicon-All Sales"></span>All Sales</a></li>
            <!--<li><a href="{{ route('sales.exportIntoExcel') }}"><span class="glyphicon glyphicon-Report"></span> Download Report</a></li>-->
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('sales.cr') }}"><span class="glyphicon glyphicon-Show Users"></span>Credits</a></li>
            <li><a href="{{ route('user.logout') }}">( {{ App\User::find(Auth::id())->username }} )<span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

        </ul>

    </div>
</nav>


<h1>NEW SALE ENTRY</h1>
@include('errors.error')
<form action="{{route('sales.list')}}" method="POST" enctype="multipart/form-data">

    {{csrf_field()}}

    <div class="container register">
        <div class="row">

            <div class="col-md-9 register-right">


                <div class="row register-form">

                    {{--1st phase start--}}
                    <div class="col-md-3">

                        <div class="form-group">
                            <p>Employee<select class="form-control" name="employee" value="{{old('employee')}}">
                                <option value="" disabled selected ></option>
                                    <!-- <option>Select</option>-->
                                    <option>Ashraf</option>
                                    <option>Akhi</option>
                                    <option>Arman</option>
                                    <option>Ashik</option>
                                    <option>Bahar</option>
                                    <option>Emran (Agent)</option>
                                    <option>Fahim (Agent)</option>
                                    <option>Hasan</option>
                                    <option>Maliha</option>
                                    <option>Miskat</option>
                                    <option>Mithila (Agent)</option>
                                    <option>Muktadir</option>
                                    <option>Munni</option>
                                    <option>Nahid (Agent)</option>
                                    <option>Opshora</option>
                                    <option>Opu</option>
                                    <option>Rahul</option>
                                    <option>Raj Sarker</option>
                                    <option>Rana</option>
                                    <option>Razib</option>
                                    <option>Redoan</option>
                                    <option>ShahAlam</option>
                                    <option>Shapna</option>
                                    <option>Shuvo</option>
                                    <option>Suhel</option>
                                    <option>Sumaiya</option>
                                    <option>Tonni</option>
                                    <option>SUPPORT</option>
                                    <option>TRANSMISSION</option>
                                </select></p>
                        </div>

                        <div class="form-group">
                            <!--                                <label for="exampleInputZone">Subscriber ID</label><br>-->
                            <p>Subscriber_ID<input type="text" class="form-control" value="{{old('subscriber_id')}}" name="subscriber_id" placeholder="" maxlength="9"></p>
                        </div>

                        <div class="form-group">
                            <!--                                <label for="exampleInputZone">MRC</label><br>-->
                            <p>MRC<input type="number" class="form-control" value="{{old('mrc')}}" name="mrc" placeholder=""></p>
                        </div>

                        <div class="form-group">
                            <p>Sales Type<select class="form-control" name="salesType" value="{{old('salesType')}}">
                                    <option value="" disabled selected></option>
                                    <option>Own</option>
                                    <option>Lead</option>
                                    <option>Client Referral</option>
                                    <option>Employee Referral</option>
                                    <option>Other Referral</option>
                                </select></p>
                        </div>
                    </div>
                    {{--1st phase end--}}





                    {{--2nd phase--}}
                    <div class="col-md-3">

                        <div class="form-group">
                            <p>Team<select class="form-control" name="team" value="{{old('team')}}">
                                    <option value="" disabled selected ></option>
                                    <!-- <option>Select</option>-->
                                    <option>Direct Sales</option>
                                    <option>Tele Sales</option>
                                    <option>Agent</option>
                                    <option>TX Sales</option>
                                    <option>Support Sales</option>
                                    <option>Billing Sales</option>
                                </select></p>
                        </div>


                        <div class="form-group">
                            <!--                                <label for="exampleInputZone">Subscriber ID</label><br>-->
                            <p>Subscriber_Name<input type="text" class="form-control" value="{{old('subscriber_name')}}" name="subscriber_name" placeholder=""></p>
                        </div>

                        <div class="form-group">
                            <!--                                <label for="exampleInputZone">OTC</label><br>-->
                            <p>OTC<input type="number" class="form-control" value="{{old('otc')}}" name="otc" placeholder=""></p>
                        </div>


                        <div class="form-group">
                            <!--                                <label for="exampleInputDate">Create Date</label>-->
                            <p>Create Date<input type="date" class="form-control" value="{{old('create')}}" name="create"  placeholder=""></p>
                        </div>

                    </div>
                    {{--2nd phase end--}}


                    {{--3rd phase--}}
                    <div class="col-md-3">


                        <div class="form-group">
                            <p>Zone<select class="form-control" name="zone" value="{{old('zone')}}">
                                    <option value="" disabled selected ></option>
                                    <option>Dhaka</option>
                                    <option>Chottogram</option>
                                    <option>Cox's Bazar</option>
                                    <option>Khulna</option>
                                    <option>Sylhet</option>

                                </select></p>
                        </div>


                        <div class="form-group">
                            <p>Offer<select class="form-control" name="offer" value="{{old('offer')}}">
                                    <option value="" disabled selected ></option>
                                    <!-- <option>Select</option>-->
                                    <option>Regular</option>
                                    <option>Promotional</option>
                                    <option>Special</option>
                                </select></p>
                        </div>

                        <!--<div class="form-group">-->
                            <!--                                <label for="exampleInputZone">Advance(Months</label><br>-->
                            <div class="form-group">
                            <p>Advance(Months)<select class="form-control" name="advance" value="{{old('advance')}}">
                                    <option value="" disabled selected></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select></p>
                        </div>



                        <div class="form-group">
                            <!--                                <label for="exampleInputDate">Delivery Date</label><br>-->
                            <p>Payment Date<input type="date" class="form-control" value="{{old('payment')}}" name="payment" aria-describedby="dateHelp" placeholder=""></p>
                        </div>


                    </div>
                    {{--3rd phase end--}}


                    <div class="col-md-3">


                        {{--4th phase--}}
                        {{--<div class="col-md-3">--}}

                        {{--<div class="form-group">--}}
                        {{--<!--                                <label for="exampleInputZone">Subscriber ID</label><br>-->--}}
                        {{--<p>Area<input type="text" class="form-control" name="area" placeholder=""></p>--}}
                        {{--</div>--}}

                        <div class="form-group">
                            <p>Area<select class="form-control" name="area" value="{{old('area')}}">
                                    <option value="" disabled selected ></option>
                                    <option>Banani</option>
                                    <option>Bashundhara</option>
                                    <option>Dhanmondi</option>
                                    <option>Motijheel</option>
                                    <option>Uttara</option>
                                    <option>Agrabad</option>
                                    <option>GEC</option>
                                    <option>Halishohor</option>
                                    <option>Chowmuhony</option>
                                    <option>Nasirabad</option>
                                    <option>Bohoddarhat</option>
                                    <option>Chawkbazar</option>
                                    <option>Momin Road</option>
                                    <option>New Market</option>
                                    <option>KEPZ</option>
                                    <option>Alankar</option>
                                    <option>Barik Building</option>
                                    <option>Khulna Sadar</option>
                                    <option>Shonadanga</option>
                                    <option>Zindabazar</option>
                                    <option>Modina Market</option>
                                    <option>Uposhohor</option>
                                    <option>Cox'Bazar</option>


                                </select></p>
                        </div>

                        <div class="form-group">
                            <p>Package<select class="form-control" name="package" value="{{old('package')}}">
                                    <option value="" disabled selected ></option>
                                    <!-- <option>Select</option>-->
                                    {{--<option>5 MBPS</option>--}}
                                    <option>10 Mbps</option>
                                    <option>15 Mbps</option>
                                    <option>20 Mbps</option>
                                    <option>25 Mbps</option>
                                    <option>30 Mbps</option>
                                    <option>35 Mbps</option>
                                    <option>40 Mbps</option>
                                    <!--<option>45 Mbps</option>-->
                                    <option>50 Mbps</option>
                                    <option>75 Mbps</option>

                                </select></p>
                        </div>

                        <div class="form-group">
                            <!--                                <label for="exampleInputZone">Total</label><br>-->
                            <p>Total<input type="text" class="form-control" value="{{old('total')}}" name="total" placeholder="" onmouseup="calcTotal()"></p>
                        </div>



                        <div class="form-group">
                            <!--                                <label for="exampleInputDate">Delivery Date</label><br>-->
                            <p>Delivery Date<input type="date" class="form-control" value="{{old('delivery')}}" name="delivery" aria-describedby="dateHelp" placeholder=""></p>
                        </div>

                        <div>
                            <input type="submit" class="btnRegister"  value="Submit" onclick="return confirm('Are you sure you want to submit this information')"/>
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