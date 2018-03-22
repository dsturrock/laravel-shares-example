<?php

namespace App\Validators;

use App\Exceptions\StockShareValidationException;
use Illuminate\Validation\Validator;
use Illuminate\Http\Response;
use Illuminate\Contracts\Translation\Translator;

class StockSharesRequestValidator extends Validator
{

	public function __construct(Translator $translator, array $data = [],
                                array $messages = [], array $customAttributes = []) {

		$rules = $this->rules();

		parent::__construct($translator, $data, $rules, $messages, $customAttributes);
	}

	/**
	  * Get the custom stock shares validation rules
	  *
	  * @return array
	**/
	public function rules() : array
	{
		return [
			'company_name' => 'required|string|max:255',
            'share_instrument_name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric',
            'total_investment' =>'required|integer',
            'certificate_number' => 'required|integer'
		];
	}

	/**
     * Run the validator's rules against its data.
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function validate()
    {
        if ($this->fails()) {
            throw new StockShareValidationException($this);
        }
    }
}
