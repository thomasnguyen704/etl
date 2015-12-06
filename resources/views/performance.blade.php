@extends('layouts.master')


@section('head')
@stop


@section('title') 
ETL Work Tracker: Performance
@stop


@section('content')
<h1 class="page-header"> Performance </h1>
<div class="row">
	<div class="col-sm-6">
		<div class="well">
			<div id="planCoverage"></div>
		</div>
		<div class="well">
			<div id="cycle"></div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="well">
			<div id="countReqs"></div>
		</div>
		<div class="well">
			<div id="associate"></div>
		</div>
	</div>
</div>
@stop


@section('js')
<script>
	/*
	(function(){
		var ctx = document.getElementById("myChart").getContext("2d");
		var data = {
			labels: {!! $start !!},
			datasets: [{
				data: {!! $id !!},
				fillColor: "aliceblue",
				strokeColor: "skyblue"
			}]
		};
		new Chart(ctx).Line(data);
	})();
	*/

var monthsData = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
var cycleData = [7,3,3,2,2,1,2,3];
var countReqsData = [100,50, 55, 40, 45, 25, 30, 35, 40, 45, 45];
var planCoverData = []

$(function () {
    $('#cycle').highcharts({
        chart: { type: 'line' },
        title: { text: 'Average Cycle Time' },
        subtitle: { text: 'Goal: 7 Days' },
        xAxis: { title: { text:'Month' }, categories: monthsData, crosshair: true },
        yAxis: { min: 0, title: { text: 'Days' } },
        plotOptions: { line: { pointPadding: 0.2, borderWidth: 0 } },
        series: [{ name: '# Requests', data: cycleData }],
        credits: false,
		legend: { enabled: false },
    });
});

$(function () {
    $('#countReqs').highcharts({
        chart: { type: 'column' },
        title: { text: 'Count of Requests' },
        //subtitle: { text: 'Goal: 7 Days' },
        xAxis: { title: { text:'Month' }, categories: monthsData, crosshair: true },
        yAxis: { min: 0, title: { text: 'Days' } },
        plotOptions: { column: { pointPadding: 0.2, borderWidth: 0 } },
        series: [{ name: '# Requests', data: countReqsData }],
        credits: false,
		legend: { enabled: false },
    });
});

$(function () {
    $('#assocaite').highcharts({
        chart: { type: 'column' },
        title: { text: 'Count of Requests' },
        //subtitle: { text: 'Goal: 7 Days' },
        xAxis: { title: { text:'Month' }, categories: monthsData, crosshair: true },
        yAxis: { min: 0, title: { text: 'Days' } },
        plotOptions: { column: { pointPadding: 0.2, borderWidth: 0 } },
        series: [{ name: '# Requests', data: countReqsData }],
        credits: false,
		legend: { enabled: false },
    });
});


$(function () {
    $('#associate').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Requests Cycle Time Goal by Assigned Analyst'
        },
        subtitle: { 
        	text: 'Current Month' 
        },
        xAxis: {
            categories: ['Chad', 'Charles', 'Logan', 'Scott', 'William'],
        },
        yAxis: {
            min: 0,
            max: 100,
            title: {
                text: 'Requests'
            },
			labels: {
                format: '{value} %'
            },
        },
        legend: {
            reversed: true
        },
        plotOptions: {
            series: {
                stacking: 'normal',
			}
        },
        series: [
	        {
	        	color: 'lightpink',
	            name: 'Outside of Cycle Time Goal',
	            data: [10, 15, 5, 20, 1]
			}, {
	            name: 'Within of Cycle Time Goal',
	            data: [90, 85, 95, 80, 99]
	        }
        ]
    });
});









$(function () {
    $('#planCoverage').highcharts({
        chart: { type: 'pie' },
        title: { text: 'Annual Plan Coverage Status' },
        xAxis: { title: { text:'Month' }, categories: monthsData, crosshair: true },
        yAxis: { min: 0, title: { text: 'Days' } },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                	enabled: true,
                	format: '<b>{point.name}</b>: {point.percentage:.1f} %',
				}
            }
        },
		series: [{ name: '# Requests', data: [
			{ name: 'Coverage', y: 60 },
			{ name: 'No Coverage', y: 40 }
		] }],
        credits: false,
    });
});


</script>
@stop


<!--
number of reqs by month
average cycle time by month
planned coverage
number of reqs by assocaite
-->