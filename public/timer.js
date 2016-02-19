var count = 0;
var max = 10;
var seconds = 1;
var interval =  seconds * 1000;

var interval1 = setInterval(function() {
	console.log('Interval 1');
}, interval)

var interval2 = setInterval(function() {
	console.log('Interval 2');
}, 500);
