<!DOCTYPE html>
<html>

<body>
{
<div class="container">
    @if(isset($sales))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
        <h2>Sales details</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Create Date</th>
                <th>Zone</th>
                <th>Team</th>
                <th>Employee</th>
                <th>Subscriber ID</th>
                <th>Offer</th>
                <th>Package</th>
                <th>MRC</th>
                <th>OTC</th>
                <th>Advance</th>
                <th>Total</th>
                <th>Payment Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sales as $sale)
                <tr>
                    <td>{{ $sale->Create }}</td>
                    <td>{{ $sale->ZONE}}</td>
                    <td>{{ $sale->TEAM }}</td>
                    <td>{{ $sale->EMPLOYEE }}</td>
                    <td>{{ $sale->Subscriber_ID }}</td>
                    <td>{{ $sale->Offer }}</td>
                    <td>{{ $sale->Package }}</td>
                    <td>{{ $sale->MRC }}</td>
                    <td>{{ $sale->OTC }}</td>
                    <td>{{ $sale->Advance }}</td>
                    <td>{{ $sale->Total }}</td>
                    <td>{{ $sale->Delivery }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @elseif(isset($message))
        <p>{{ $message }}</p>
    @endif
</div>


@include('layouts.footer')
</body>
</html>