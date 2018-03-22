<?php

namespace App\Http\Controllers\StockShares;

use Auth;
use App\Http\Controllers\Controller;
use App\Validators\StockSharesRequestValidator;
use App\Models\StockShares\StockShare;
use Illuminate\View\View;
use Illuminate\Http\Request;


class StockSharesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(StockSharesRequestValidator $validator)
    {
        $this->validator = $validator;
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming share purchase request.
     *
     * @param  array  $data
     * @return \App\Validators\StockSharesRequestValidator;
     */
    protected function validator(array $data)
    {
        return  $this->validateWith($this->validator, $data);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index() : View
    {

        $shares = Auth::user()->user->shares()->paginate(10);

        return view('stock_shares_dashboard', ['shares' => $shares]);
    }

    /**
      * Return the form for purchasing shares
      *
      * @return \Illuminate\View\View
    **/
    public function showPurchaseForm() : View
    {
        return view('stock_shares_form');
    
    }

    /**
      * Validate and save the share
      *
      * @var Illuminate\Http\Request
      * @return \Illuminate\View\View
    **/
    public function save(Request $request) : View
    {

        $validated = $this->validateWith($this->validator->rules(), $request);
        $data = $request->all();

        Auth::user()->user->shares()->create($data);

        return $this->index();
    }
}
