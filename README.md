# target
consume .net webservice using php soap client
# soap request
```
<?xml version="1.0" encoding="UTF-8"?>
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:mob="https://www.mobile88.com" xmlns:mhp="http://schemas.datacontract.org/2004/07/MHPHGatewayService.Model">
    <soapenv:Header/>
    <soapenv:Body>
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
    </soapenv:Body>
</soapenv:Envelope>
```
