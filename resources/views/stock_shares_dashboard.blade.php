@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h2 class="panel-heading">Shares Dashboard</div>


                <div class="top-right links">
                        <a href="{{ route('sharePurchase') }}">Buy New Share</a>
                </div>

                <div class="panel-body">
                    @foreach($shares as $share)
                        <div class="col-md-6 panel panel-share">
                            <div class="mid-right">
                                <form action={{route('deleteShare')}} method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="share" value ={{$share->id}}></input>
                                    <button type="submit"><i class="fa fa-trash" /></i>DELETE</button>
                                </form>
                            </div>
                            <div>
                                <span class="flex-center">Company Name: {{$share->company_name}}</span>
                                <span class="flex-center">Share Instrument Name: {{$share->share_instrument_name}}</span>
                            </div>
                            <div>
                                <span class="flex-center">Quantity: {{$share->quantity}}</span>
                            </div>
                            <div>
                                <span class="flex-center">Price: ${{(float)$share->price}}</span>
                            </div>
                            <div>
                                <span class="flex-center">Total Investment: ${{(float)$share->total_investment}}</span>
                            </div>
                            <div>
                                <span class="flex-center">Certificate Number: {{$share->certificate_number}}</span>
                            </div>
                            <div>
                                <span class="flex-center">Transaction Date: {{date_default_timezone_set("America/New_York")}}{{ date('Y-m-d', strtotime($share->transaction_date))}}</span>
                            </div>
                        </div>
                    @endforeach

                    {{$shares->links()}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
