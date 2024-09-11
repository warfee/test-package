<?php

namespace Warfee\TestPackage;

class TaxTotal
{
	public $data;

	public function setTaxSubtotal($scheme,$category_id,$taxable_amount,$tax_amount){


		$this->item['tax_total'][] =
			[
		        'scheme' => $scheme,
		        'category_id' => $category_id,
		        'taxable_amount' => $taxable_amount,
		        'tax_amount' => $tax_amount,
		    ];

		$this->data['prepaid_payment']['id'] = $id;
	}

	public function setUpTaxTotal(){

		return $this->data;
	}
}