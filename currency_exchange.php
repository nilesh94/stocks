<?php 
$currencyDetails = array();
$currencyDetails=["AED,United",
"AFN,Afghan",
"ALL,Albanian",
"AMD,Armenian",
"ANG,Netherlands",
"AOA,Angolan",
"ARS,Argentine",
"AUD,Australian",
"AWG,Aruban",
"AZN,Azerbaijani",
"BAM,Bosnia-Herzegovina",
"BBD,Barbadian",
"BDT,Bangladeshi",
"BGN,Bulgarian",
"BHD,Bahraini",
"BIF,Burundian",
"BITGOLD,BitGOLD",
"BMD,Bermudan",
"BND,Brunei",
"BOB,Bolivian",
"BRL,Brazilian",
"BSD,Bahamian",
"BTN,Bhutanese",
"BWP,Botswanan",
"BYR,Belarusian",
"BZD,Belize",
"CAD,Canadian",
"CDF,Congolese",
"CHF,Swiss",
"CLF,Chilean",
"CLP,Chilean",
"CNY,Chinese",
"COP,Colombian",
"CRC,Costa",
"CUP,Cuban",
"CVE,Cape",
"CZK,Czech",
"DJF,Djiboutian",
"DKK,Danish",
"DOP,Dominican",
"DZD,Algerian",
"EEK,Estonian",
"EGP,Egyptian",
"ERN,Eritrean",
"ETB,Ethiopian",
"EUR,Euro",
"FJD,Fijian",
"FKP,Falkland",
"GBP,British",
"GEL,Georgian",
"GHS,Ghanaian",
"GIP,Gibraltar",
"GMD,Gambian",
"GNF,Guinean",
"GTQ,Guatemalan",
"GYD,Guyanaese",
"HKD,Hong",
"HNL,Honduran",
"HRK,Croatian",
"HTG,Haitian",
"HUF,Hungarian",
"IDR,Indonesian",
"ILS,Israeli",
"INR,Indian",
"IQD,Iraqi",
"IRR,Iranian",
"ISK,Icelandic",
"JEP,Jersey",
"JMD,Jamaican",
"JOD,Jordanian",
"JPY,Japanese",
"KES,Kenyan",
"KGS,Kyrgystani",
"KHR,Cambodian",
"KMF,Comorian",
"KPW,North",
"KRW,South",
"KWD,Kuwaiti",
"KYD,Cayman",
"KZT,Kazakhstani",
"LAK,Laotian",
"LBP,Lebanese",
"LKR,Sri",
"LRD,Liberian",
"LSL,Lesotho",
"LTL,Lithuanian",
"LVL,Latvian",
"LYD,Libyan",
"MAD,Moroccan",
"MDL,Moldovan",
"MGA,Malagasy",
"MKD,Macedonian",
"MMK,Myanma",
"MNT,Mongolian",
"MOP,Macanese",
"MRO,Mauritanian",
"MTL,Maltese",
"MUR,Mauritian",
"MVR,Maldivian",
"MWK,Malawian",
"MXN,Mexican",
"MYRf,Malaysian",
"MZN,Mozambican",
"NAD,Namibian",
"NGN,Nigerian",
"NIO,Nicaraguan",
"NOK,Norwegian",
"NPR,Nepalese",
"NZD,New",
"OMR,Omani",
"PAB,Panamanian",
"PEN,Peruvian",
"PGK,Papua",
"PHP,Philippine",
"PKR,Pakistani",
"PLN,Polish",
"PYG,Paraguayan",
"QAR,Qatari",
"RON,Romanian",
"RSD,Serbian",
"RUB,Russian",
"RUR,Old",
"RWF,Rwandan",
"SAR,Saudi",
"SBDf,Solomon",
"SCR,Seychellois",
"SDG,Sudanese",
"SEK,Swedish",
"SGD,Singapore",
"SHP,Saint",
"SLL,Sierra",
"SOS,Somali",
"SRD,Surinamese",
"STD,Sao",
"SVC,Salvadoran",
"SYP,Syrian",
"SZL,Swazi",
"THB,Thai",
"TJS,Tajikistani",
"TMT,Turkmenistani",
"TND,Tunisian",
"TOP,Tongan",
"TRY,Turkish",
"TTD,Trinidad",
"TWD,New",
"TZS,Tanzanian",
"UAH,Ukrainian",
"UGX,Ugandan",
"USD,United",
"USDE,USDe",
"UYU,Uruguayan",
"UZS,Uzbekistan",
"VEF,Venezuelan",
"VND,Vietnamese",
"VUV,Vanuatu",
"WST,Samoan",
"XAF,CFA",
"XAG,Silver",
"XAU,Gold",
"XCD,East",
"XDR,Special",
"XOF,CFA",
"XPF,CFP",
"YER,Yemeni",
"ZAR,South",
"ZMK,Zambian",
"ZMW,Zambian",
"ZWL,Zimbabwean"];

$currency=array();


$tempArray=array();
$i=0;
foreach ($currencyDetails as $k) {

	
	$tempArray=explode(',', $k);
	
		
		$currency[$i]['cCode']=$tempArray[0];
		$currency[$i]['cName']=$tempArray[1];
	
	$i++;


}
?>
<div style="height: 100%;"><b>Currency Exchange :-</b><br><br>
From : 	<select onchange="fromOnChange();" id="fromOnChange">
			<option  value='#'>---select---</option>
			
			<?php
	echo "<option value='#'>---select---</option>";
		foreach ($currency as $t) {
			echo "<option value='".$t['cCode'].trim()."'>".$t['cName']."</option>";
		}
	?>

		</select><br>
From Qty : <input type="number" min='1' name="exchangeFromQty" id="exchangeFromQty" value="1" /><br>
To : 	<select onchange="toOnChange();" id="toOnChange">
			<option  value='#'>---select---</option>
			
			<?php
	echo "<option value='#'>---select---</option>";
		foreach ($currency as $t) {
			echo "<option value='".$t['cCode'].trim()."'>".$t['cName']."</option>";
		}
	?>
	
		</select><br>
Exchange Rate : <input type="text" name="exchangeRate" id="exchangeRate" readonly="true" /><br>
Result : <input type="text" name="exchangedPrice" id="exchangedPrice" readonly="true" />
<button onclick="doExchange();">Get</button>
</div>
<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
<script type="text/javascript">
	var $fromOnChange;
	var $toOnChange;

	function doExchange() {
		// body...
		var fromQty=document.getElementById('exchangeFromQty').value;

		
		if($toOnChange==='undefined' || $fromOnChange==='undefined' || $toOnChange===null || $fromOnChange===null){
			alert("please select form both Currency.");
		}else{
			// alert($toOnChange);
			// alert($fromOnChange);
			$.ajax({url:"https://www.alphavantage.co/query?function=CURRENCY_EXCHANGE_RATE&from_currency="+$fromOnChange+"&to_currency="+$toOnChange+"&apikey=3QB73A28PHG30I7P", success:function(result){

				var $exchangeRate=result["Realtime Currency Exchange Rate"]["5. Exchange Rate"];
				document.getElementById("exchangeRate").value=$exchangeRate;
				document.getElementById("exchangedPrice").value=fromQty*$exchangeRate;


			}});
		}
	}

	function toOnChange() {
		// body...
			$toOnChange=$("#toOnChange").val();
			
	}

	function fromOnChange() {
		// body...
		$fromOnChange=$("#fromOnChange").val();

	}
</script>