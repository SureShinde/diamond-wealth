(function () {
    var beforePrint = function () {
        for (var i = 0; i < AmCharts.charts.length; i++) {
            var chart = AmCharts.charts[i];
            chart.div.style.width = "700px";
            chart.validateNow();
        }
    };
    var afterPrint = function () {
        for (var i = 0; i < AmCharts.charts.length; i++) {
            var chart = AmCharts.charts[i];
            chart.div.style.width = "100%";
            chart.validateNow();
        }
    };

    if (window.matchMedia) {
        var mediaQueryList = window.matchMedia('print');
        mediaQueryList.addListener(function (mql) {
            if (mql.matches) {
                beforePrint();
            } else {
                afterPrint();
            }
        });
    }

    window.onbeforeprint = beforePrint;
    window.onafterprint = afterPrint;
}());

var chart;
var chartData = [];
var tRexScore = 0.0;

AmCharts.ready(function () {
    // generate some default data first
    generateChartData(10000, 6.4, 1.75, 25);

    // SERIAL CHART
    chart = new AmCharts.AmSerialChart();

    chart.precision = 0;
    chart.dataProvider = chartData;
    chart.categoryField = "Year";

    // listen for "dataUpdated" event (fired when chart is inited) and call zoomChart method when it happens
    //chart.addListener("dataUpdated", zoomChart);

    chart.synchronizeGrid = true; // this makes all axes grid to be at the same intervals

    // AXES
    // category
    var categoryAxis = chart.categoryAxis;
    categoryAxis.parseDates = false;
    categoryAxis.minorGridEnabled = true;
    categoryAxis.axisColor = "#4a6491";
    categoryAxis.title = 'Age of Investment';


    // first value axis (on the left)
    var valueAxis1 = new AmCharts.ValueAxis();
    valueAxis1.axisColor = "#4a6491";
    valueAxis1.axisThickness = 2;
    valueAxis1.title = 'Gain on Investment';
    chart.addValueAxis(valueAxis1);

    /*
           // second value axis (on the right)
           var valueAxis2 = new AmCharts.ValueAxis();
           valueAxis2.position = "right"; // this line makes the axis to appear on the right
           valueAxis2.axisColor = "#FCD202";
           valueAxis2.gridAlpha = 0;
           valueAxis2.axisThickness = 2;
           chart.addValueAxis(valueAxis2);
    */


    // GRAPHS
    // first graph
    var graph1 = new AmCharts.AmGraph();
    graph1.valueAxis = valueAxis1; // we have to indicate which value axis should be used
    graph1.title = "Total $ Return";
    graph1.valueField = "GrossReturn";
    graph1.bullet = "round";
    graph1.hideBulletsCount = 30;
    graph1.bulletBorderThickness = 1;
    chart.addGraph(graph1);

    // second graph
    var graph2 = new AmCharts.AmGraph();
    graph2.valueAxis = valueAxis1; // we have to indicate which value axis should be used
    graph2.title = "$ You Keep";
    graph2.valueField = "NetReturn";
    graph2.bullet = "square";
    graph2.hideBulletsCount = 30;
    graph2.bulletBorderThickness = 1;
    chart.addGraph(graph2);


    // CURSOR
    var chartCursor = new AmCharts.ChartCursor();
    chartCursor.cursorAlpha = 0.1;
    chartCursor.fullWidth = true;
    chartCursor.valueLineBalloonEnabled = true;
    chart.addChartCursor(chartCursor);

    // SCROLLBAR
    // var chartScrollbar = new AmCharts.ChartScrollbar();
    // chart.addChartScrollbar(chartScrollbar);

    // LEGEND
    var legend = new AmCharts.AmLegend();
    legend.marginLeft = 110;
    legend.useGraphSettings = true;
    legend.valueWidth = 120;
    legend.fontSize = 15;
    chart.addLegend(legend);

    // EXPORT
    chart["export"] = {
        "enabled": true
    };

    // WRITE
    chart.write("chartdiv");
});

// generate initial variable
var initialInvestment;

// generate data
function generateChartData(lfInvestmentAmount, lfAvgReturn, lfAnnualFee, nYears) {


    chartData = []; // reset
    initialInvestment = lfInvestmentAmount;
    var lfGrossInvestValue = lfInvestmentAmount;
    var lfNetInvestValue = lfGrossInvestValue;
    var lfAvgReturnConvert = (lfAvgReturn / 100);
    var lfAnnualFeeConvert = (lfAnnualFee / 100);


    for (var i = 0; i < nYears; i++) {

        lfGrossInvestValue = lfGrossInvestValue * (1.0 + lfAvgReturnConvert);
        lfNetInvestValue = lfNetInvestValue * (1.0 + lfAvgReturnConvert - lfAnnualFeeConvert);


        chartData.push({
            Year: i + 1,
            GrossReturn: lfGrossInvestValue - lfInvestmentAmount,
            NetReturn: lfNetInvestValue - lfInvestmentAmount

        });
    }

    tRexScore = ((lfNetInvestValue - lfInvestmentAmount) / (lfGrossInvestValue - lfInvestmentAmount) * 100);
    var GrossReturn = lfGrossInvestValue - lfInvestmentAmount;
    var NetReturn = lfNetInvestValue - lfInvestmentAmount;
    var lostIncome = GrossReturn - NetReturn;
    var totalValue = NetReturn + parseInt(initialInvestment, 10);


    var output = tRexScore.toFixed(0);
    document.getElementById('tRexScoreOutput').innerHTML = " " + output + "%";

    var outputTwo = GrossReturn.toFixed(0);
    document.getElementById('GrossIncome').innerHTML = "$" + outputTwo;

    var outputThree = lostIncome.toFixed(0);
    document.getElementById('LostIncome').innerHTML = "$" + outputThree;

    var outputFour = NetReturn.toFixed(0);
    document.getElementById('NetIncome').innerHTML = "$" + outputFour;

    var outputFive = totalValue.toFixed(0);
    document.getElementById('TotalValue').innerHTML = "$" + outputFive;


    /*var outputTwo = document.Form1['GrossIncome'];
    outputTwo.value = GrossReturn.toFixed(0) ;

    var outputThree = document.Form1['NetIncome'];
    outputThree.value = NetReturn.toFixed(0) ;

    var outputFour = document.Form1['LostIncome'];
    outputFour.value = lostIncome.toFixed(0) ;

    var outputFive = document.Form1['TotalValue'];
    outputFive.value = totalValue.toFixed(0) ; */
}


function recalculateChart(youInvest, avgRet, fee, years) {

    generateChartData(youInvest, avgRet, fee, years);
    chart.dataProvider = chartData;

    chart.validateData();


}


// this method is called when chart is first inited as we listen for "dataUpdated" event
function zoomChart() {
    // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
    chart.zoomToIndexes(0, 100);
}


/* var outputThree = document.Form1['NetReturn'];
outputThree.value = NetReturn.toFixed(0) ; */
// Remove Am Charts

/*jQuery if (('div').has('a').css("font-family", "Verdana;";), function() ({
   (this) 
});*/
//jQuery("#chartInformation").appendTo("#print_button");