<?php

/**
 * soap client(mode:wsdl)
 * 
 * @author zsl<zhangshiliang@hitour.cc>
 * @datetime 2018-3-5 10:36:22
 */
require_once 'MalIpaySoapClient.php';
$url = '';//your request url
$options = [
	'soap_version' => SOAP_1_1, // SOAP version
	'trace' => true, // debug
	'exceptions' => 1
];
// to generate xml data as belows,you can assemble it 
$data=<<<EOF
		    <mob:EntryPageFunctionality>
        <mob:requestModelObj>
            <mhp:MerchantCode>M00578</mhp:MerchantCode>
            <mhp:PaymentId>234</mhp:PaymentId>
            <mhp:RefNo>100020180301105210072365</mhp:RefNo>
            <mhp:Amount>1.00</mhp:Amount>
            <mhp:Currency>MYR</mhp:Currency>
            <mhp:ProdDesc>test</mhp:ProdDesc>
            <mhp:UserName>test</mhp:UserName>
            <mhp:UserEmail>792519528@qq.com</mhp:UserEmail>
            <mhp:UserContact>15323781483</mhp:UserContact>
            <mhp:BarcodeNo>123456789123456789</mhp:BarcodeNo>
            <mhp:Lang>UTF-8</mhp:Lang>
            <mhp:Remark>test</mhp:Remark>
            <mhp:SignatureType>SHA256</mhp:SignatureType>
            <mhp:Signature>0cb7d510a4e6599118a54bbb3b03f22bc2c63e404fa1642ccdebf34b679aff77</mhp:Signature>
        </mob:requestModelObj>
    </mob:EntryPageFunctionality>
EOF;

try {
	libxml_disable_entity_loader(false);
	$client = new MalIpaySoapClient($url, $options);
	$client->__setSoapHeaders([]);
	$param = new \SoapVar($data, XSD_ANYXML);
	$res = $client->__soapCall('EntryPageFunctionality', ['parameters' => $param]);
	echo "<pre>";
	print_r($res);
	die;
} catch (\Exception $e) {
		echo __METHOD__ . ' error:' . $e->getMessage();
		echo "<br>#######################################";
		echo($client->__getLastRequest());
		echo "<br>#######################################";
		exit($client->__getLastResponse());
}