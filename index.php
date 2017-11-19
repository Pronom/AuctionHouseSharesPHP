<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    
            <!--[if IE]>
<script type="text/javascript">
window.location = "http://www.google.com/";
</script>
<![endif]-->
</head>
<body>

<canvas id="myChart"></canvas>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<<script>



var data = {
"item":120150,
"itemShares":[
    {
        "date":new Date("2017-06-11"),
        "globalQuantity":20,
        "globalSum":536880,
        "globalAverage":26844.0,
        "globalAuctionOccurences":1,
        "belowOrEqualAverageQuantity":0,
        "belowOrEqualAverageSum":0,
        "belowOrEqualAverageAverage":0.0,
        "belowOrEqualAverageAuctionOccurences":0,
        "aboveAverageQuantity":20,
        "aboveAverageSum":536880,
        "aboveAverageAverage":26844.0,
        "aboveAuctionOccurences":1
    },
    {
        "date":new Date("2017-06-12"),
        "globalQuantity":12,
        "globalSum":536880,
        "globalAverage":26844.0,
        "globalAuctionOccurences":1,
        "belowOrEqualAverageQuantity":0,
        "belowOrEqualAverageSum":0,
        "belowOrEqualAverageAverage":0.0,
        "belowOrEqualAverageAuctionOccurences":0,
        "aboveAverageQuantity":20,
        "aboveAverageSum":536880,
        "aboveAverageAverage":26844.0,
        "aboveAuctionOccurences":1
    },
    {
        "date":new Date("2017-06-13"),
        "globalQuantity":34,
        "globalSum":536880,
        "globalAverage":26844.0,
        "globalAuctionOccurences":1,
        "belowOrEqualAverageQuantity":0,
        "belowOrEqualAverageSum":0,
        "belowOrEqualAverageAverage":0.0,
        "belowOrEqualAverageAuctionOccurences":0,
        "aboveAverageQuantity":20,
        "aboveAverageSum":536880,
        "aboveAverageAverage":26844.0,
        "aboveAuctionOccurences":1
    },
    {
        "date":new Date("2017-06-14"),
        "globalQuantity":7,
        "globalSum":536880,
        "globalAverage":26844.0,
        "globalAuctionOccurences":1,
        "belowOrEqualAverageQuantity":0,
        "belowOrEqualAverageSum":0,
        "belowOrEqualAverageAverage":0.0,
        "belowOrEqualAverageAuctionOccurences":0,
        "aboveAverageQuantity":20,
        "aboveAverageSum":536880,
        "aboveAverageAverage":26844.0,
        "aboveAuctionOccurences":1
    },
    {
        "date":new Date("2017-06-15"),
        "globalQuantity":35,
        "globalSum":536880,
        "globalAverage":26844.0,
        "globalAuctionOccurences":1,
        "belowOrEqualAverageQuantity":0,
        "belowOrEqualAverageSum":0,
        "belowOrEqualAverageAverage":0.0,
        "belowOrEqualAverageAuctionOccurences":0,
        "aboveAverageQuantity":20,
        "aboveAverageSum":536880,
        "aboveAverageAverage":26844.0,
        "aboveAuctionOccurences":1
    }
]
};



function getData(){
var arrayTest = [];
var valueArray = [];
var dateArray = [];
for (const key in data.itemShares) {
    valueArray.push(data.itemShares[key].globalQuantity);      
    var ISODateTime = data.itemShares[key].date.toISOString();
    var ISODate = ISODateTime.substring(0, ISODateTime.indexOf('T'));
    console.log(ISODate);
    dateArray.push(ISODate);     
}

arrayTest.push(valueArray);
arrayTest.push(dateArray);
return arrayTest;
}



var dataGetted = getData();



var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
// The type of chart we want to create
type: 'line',
// The data for our dataset
data: {
    labels: dataGetted[1],
    datasets: [{
        label: "My First dataset",
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: dataGetted[0],
    }]
},

// Configuration options go here
options: {
    elements: {
        line: {
           cubicInterpolationMode: 'monotone',
           tension: 0,
           fill : false 
        }
    }
}
});



</script>
</body>
</html>
