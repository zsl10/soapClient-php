<?php

/**
 * rewrite  \SoapClient
 * 
 * @author zsl<zhangshiliang@hitour.cc>
 * @datetime 2018-3-6 14:42:54
 */
class MalIpaySoapClient extends \SoapClient {

	private $newRequest;

	function __doRequest($request, $location, $action, $version, $one_way = 0) {
		$this->newRequest = str_replace('SOAP-ENV', 'soapenv', $request);
		$this->newRequest = str_replace('xmlns:ns1="https://www.mobile88.com"', 'xmlns:mob="https://www.mobile88.com" xmlns:mhp="http://schemas.datacontract.org/2004/07/MHPHGatewayService.Model"', $this->newRequest);
		return parent::__doRequest($this->newRequest, $location, $action, $version);
	}

	function __getLastRequest() {
		return $this->newRequest;
	}

}
