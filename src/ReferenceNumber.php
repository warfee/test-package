<?php

namespace Warfee\TestPackage;

class ReferenceNumber
{
	public $data;

	public function setDocumentReferenceNo($reference_no){

		$this->data['document_reference_no'] = $reference_no;
	}

	public function setBillingReferenceNo($billing_reference_no){

		$this->data['billing_reference']['reference_no'] = $billing_reference_no;

	}

	public function setUpReferenceNumber(){

		return $this->data;
	}
}