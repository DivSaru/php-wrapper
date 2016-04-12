<!DOCTYPE html>
<html>
<head>
<link href="css/extension-page-style.css" rel="stylesheet" type="text/css"  />
<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
<style>

.code-block-holder pre {
      max-height: 188px;  
      min-height: 188px; 
      overflow: auto;
      border: 1px solid #ccc;
      border-radius: 5px;
}


.tab-btn-holder {
	width: 100%;
	margin: 20px 0 0;
	border-bottom: 1px solid #dfe3e4;
	min-height: 30px;
}

.tab-btn-holder a {
	background-color: #fff;
	font-size: 14px;
	text-transform: uppercase;
	color: #006bb8;
	text-decoration: none;
	display: inline-block;
	*zoom:1; *display:inline;


}

.tab-btn-holder a.active {
	color: #858585;
    padding: 9px 10px 8px;
    border: 1px solid #dfe3e4;
    border-bottom: 1px solid #fff;
    margin-bottom: -1px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    position: relative;
    z-index: 300;
}

</style>

</head>
<body>
<?php
include("../src/fusioncharts.php");
$usaMap = new FusionCharts("usa", "ex1" , "100%", 400, "chart-1", "json", '{
            "chart": {
                "caption": "Annual Sales by State",
                "subcaption": "Last year",
                "entityFillHoverColor": "#cccccc",
                "numberScaleValue": "1,1000,1000",
                "numberScaleUnit": "K,M,B",
                "numberPrefix": "$",
                "showLabels": "1",
                "theme": "fint"
            },
            "colorrange": {
                "minvalue": "0",
                "startlabel": "Low",
                "endlabel": "High",
                "code": "#e44a00",
                "gradient": "1",
                "color": [
                    {
                        "maxvalue": "56580",
                        "displayvalue": "Average",
                        "code": "#f8bd19"
                    },
                    {
                        "maxvalue": "100000",
                        "code": "#6baa01"
                    }
                ]
            },
            "data": [
                {
                    "id": "HI",
                    "value": "3189"
                },
                {
                    "id": "DC",
                    "value": "2879"
                },
                {
                    "id": "MD",
                    "value": "920"
                },
                {
                    "id": "DE",
                    "value": "4607"
                },
                {
                    "id": "RI",
                    "value": "4890"
                },
                {
                    "id": "WA",
                    "value": "34927"
                },
                {
                    "id": "OR",
                    "value": "65798"
                },
                {
                    "id": "CA",
                    "value": "61861"
                },
                {
                    "id": "AK",
                    "value": "58911"
                },
                {
                    "id": "ID",
                    "value": "42662"
                },
                {
                    "id": "NV",
                    "value": "78041"
                },
                {
                    "id": "AZ",
                    "value": "41558"
                },
                {
                    "id": "MT",
                    "value": "62942"
                },
                {
                    "id": "WY",
                    "value": "78834"
                },
                {
                    "id": "UT",
                    "value": "50512"
                },
                {
                    "id": "CO",
                    "value": "73026"
                },
                {
                    "id": "NM",
                    "value": "78865"
                },
                {
                    "id": "ND",
                    "value": "50554"
                },
                {
                    "id": "SD",
                    "value": "35922"
                },
                {
                    "id": "NE",
                    "value": "43736"
                },
                {
                    "id": "KS",
                    "value": "32681"
                },
                {
                    "id": "OK",
                    "value": "79038"
                },
                {
                    "id": "TX",
                    "value": "75425"
                },
                {
                    "id": "MN",
                    "value": "43485"
                },
                {
                    "id": "IA",
                    "value": "46515"
                },
                {
                    "id": "MO",
                    "value": "63715"
                },
                {
                    "id": "AR",
                    "value": "34497"
                },
                {
                    "id": "LA",
                    "value": "70706"
                },
                {
                    "id": "WI",
                    "value": "42382"
                },
                {
                    "id": "IL",
                    "value": "73202"
                },
                {
                    "id": "KY",
                    "value": "79118"
                },
                {
                    "id": "TN",
                    "value": "44657"
                },
                {
                    "id": "MS",
                    "value": "66205"
                },
                {
                    "id": "AL",
                    "value": "75873"
                },
                {
                    "id": "GA",
                    "value": "76895"
                },
                {
                    "id": "MI",
                    "value": "67695"
                },
                {
                    "id": "IN",
                    "value": "33592"
                },
                {
                    "id": "OH",
                    "value": "32960"
                },
                {
                    "id": "PA",
                    "value": "54346"
                },
                {
                    "id": "NY",
                    "value": "42828"
                },
                {
                    "id": "VT",
                    "value": "77411"
                },
                {
                    "id": "NH",
                    "value": "51403"
                },
                {
                    "id": "ME",
                    "value": "64636"
                },
                {
                    "id": "MA",
                    "value": "51767"
                },
                {
                    "id": "CT",
                    "value": "57353"
                },
                {
                    "id": "NJ",
                    "value": "80788"
                },
                {
                    "id": "WV",
                    "value": "95890"
                },
                {
                    "id": "VA",
                    "value": "83140"
                },
                {
                    "id": "NC",
                    "value": "97344"
                },
                {
                    "id": "SC",
                    "value": "88234"
                },
                {
                    "id": "FL",
                    "value": "88234"
                }
            ]
        }');
// Render the chart
$usaMap->render();
?>
<div id="chart-1"><!-- Fusion Charts will render here--></div>
 
</body>
</html>