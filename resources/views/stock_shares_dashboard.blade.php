@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Shares Dashboard</div>


                <div class="top-right links">
                        <a href="{{ route('sharePurchase') }}">Buy New Share</a>
                </div>

                <div class="panel-body">
                    @foreach($shares as $share)
                        <div class="col-md-6 panel panel-default">
                            <ol>
                                <li>
                                    <span>Company Name</span><span>{{$share->company_name}}</span>
                                </li>
                                <li>
                                    <td>Share Instrument Name</td><td>{{$share->share_instrument_name}}</td>
                                </li>
                                <li>
                                    <td>Quantity</td><td>{{$share->quantity}}</td>
                                </li>
                                <li>
                                    <td>Price</td><td>${{$share->price}}</td>
                                </li>
                                <li>
                                    <td>Total Investment</td><td>${{$share->total_investment}}</td>
                                </li>
                                <li>
                                    <td>Certificate Number</td><td>{{$share->certificate_number}}</td>
                                </li>
                                <li>
                                    <td>Transaction Date</td><td>{{date_default_timezone_set("America/New_York")}}{{ date('Y-m-d', strtotime($share->transaction_date))}}</td>
                                </li>
                            </ol>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
