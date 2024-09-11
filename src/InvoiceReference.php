<?php

namespace Warfee\TestPackage;

class InvoiceReference
{
	public $data;

	public function setInvoiceReferenceInvoiceNo($invoice_no){

		$this->data['invoice_reference']['invoice_no'] = $invoice_no;
	}

	public function setInvoiceReferenceUUID($uuid){

		$this->data['invoice_reference']['uuid'] = $uuid;

	}

	public function setUpInvoiceReference(){

		return $this->data;
	}
}