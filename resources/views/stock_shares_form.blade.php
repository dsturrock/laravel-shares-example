@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="top-right links">
                        <a href="{{ route('shares') }}">Shares Dashboard</a>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('sharePurchase') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
                            <label for="company_name" class="col-md-4 control-label">Company Name</label>

                            <div class="col-md-6">
                                <input id="company_name" class="form-control" name="company_name" value="{{ old('company_name') }}" required autofocus>

                                @if ($errors->has('company_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('share_instrument_name') ? ' has-error' : '' }}">
                            <label for="share_instrument_name" class="col-md-4 control-label">Share Instrument Name</label>

                            <div class="col-md-6">
                                <input id="share_instrument_name" class="form-control" name="share_instrument_name" value="{{ old('share_instrument_name') }}" required autofocus>

                                @if ($errors->has('share_instrument_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('share_instrument_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                            <label for="quantity" class="col-md-4 control-label">Quantity</label>

                            <div class="col-md-6">
                                <input id="quantity" class="form-control" name="quantity" value="{{ old('quantity') }}" required autofocus>

                                @if ($errors->has('quantity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">Price ($)</label>

                            <div class="col-md-6">
                                <input id="price" class="form-control" name="price" value="{{ old('price') }}" required autofocus>

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('total_investment') ? ' has-error' : '' }}">
                            <label for="total_investment" class="col-md-4 control-label">Total Investment ($)</label>

                            <div class="col-md-6">
                                <input id="total_investment" class="form-control" name="total_investment" value="{{ old('total_investment') }}" required autofocus>

                                @if ($errors->has('total_investment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('total_investment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('certificate_number') ? ' has-error' : '' }}">
                            <label for="certificate_number" class="col-md-4 control-label">Certificate Number</label>

                            <div class="col-md-6">
                                <input id="certificate_number" class="form-control" name="certificate_number" value="{{ old('certificate_number') }}" required autofocus>

                                @if ($errors->has('certificate_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('certificate_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Purchase
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
