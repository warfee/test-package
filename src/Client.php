<?php

namespace Warfee\TestPackage;

class Client
{
    const SANDBOX_URL = 'https://preprod-stinvoice.sankyutech.com.my/api/v1/';
    const PRODUCTION_URL = 'https://stinvoice.sankyutech.com.my/api/v1/';

    const INVOICE = 'invoice';
    const CREDIT_NOTE = 'credit-note';
    const DEBIT_NOTE = 'debit-note';
    const REFUND_NOTE = 'refund-note';
    const SELF_BILLED_INVOICE = 'self-billed-invoice';
    const SELF_BILLED_CREDIT_NOTE = 'self-billed-credit-note';
    const SELF_BILLED_DEBIT_NOTE = 'self-billed-debit-note';
    const SELF_BILLED_REFUND_NOTE = 'self-billed-refund-note';

    protected $api_key;
    protected $api_secret;
    protected $url;
    protected $action_url;
    protected $data;

    public function __construct($api_key,$api_secret,$production_mode = true){

        $this->api_key = $api_key;
        $this->api_secret = $api_secret;
        $this->url = $production_mode ? self::PRODUCTION_URL : self::SANDBOX_URL;

    }

    public function mappingData(...$arrays){

        $mergedData = array_merge(...$arrays);

        return $mergedData;
    }

    public function submit(){

        try{

            $response = Http::withHeaders([
                "key" => $this->api_key,
                "secret" => $this->api_secret,
            ])->post($this->$action_url, $this->data);

        return $response->body();

        }catch (\Exception $e) {

            return $e->getMessage();

        }

    }

    public function prepareInvoice($data){

        $this->action_url = $this->url. self::INVOICE;
        $this->data = $data;

    }

    public function submitCreditNote($data){

        $this->action_url = $this->url. self::CREDIT_NOTE;
        $this->data = $data;

    }

    public function submitDebitNote($data){

        $this->action_url = $this->url. self::DEBIT_NOTE;
        $this->data = $data;

    }

    public function submitRefundNote($data){

        $this->action_url = $this->url. self::REFUND_NOTE;
        $this->data = $data;

    }

    public function submitSelfBilledInvoice($data){

        $this->action_url = $this->url. self::SELF_BILLED_INVOICE;
        $this->data = $data;

    }

    public function submitSelfBilledCreditNote($data){

        $this->action_url = $this->url. self::SELF_BILLED_CREDIT_NOTE;
        $this->data = $data;

    }

    public function submitSelfBilledDebitNote($data){

        $this->action_url = $this->url. self::SELF_BILLED_DEBIT_NOTE;
        $this->data = $data;

    }

    public function submitSelfBilledRefundNote($data){

        $this->action_url = $this->url. self::SELF_BILLED_REFUND_NOTE;
        $this->data = $data;

    }
}