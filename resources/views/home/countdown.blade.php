<script type="text/javascript">
// set the date we're counting down to
	var target_date = new Date('Jan, 31, 2018').getTime();
	 
	// variables for time units
	var days, hours, minutes, seconds;
	 
	// get tag element
	var countdown = document.getElementById('countdown');
	 
	// update the tag with id "countdown" every 1 second
	var clock = setInterval(function () {
	 
	    // find the amount of "seconds" between now and target
	    var current_date = new Date().getTime();
	    var seconds_left = (target_date - current_date) / 1000;
	 
	    // do some time calculations
	    days = parseInt(seconds_left / 86400);
	    seconds_left = seconds_left % 86400;
	     
	    hours = parseInt(seconds_left / 3600);
	    seconds_left = seconds_left % 3600;
	     
	    minutes = parseInt(seconds_left / 60);
	    seconds = parseInt(seconds_left % 60);
	     
	    // format countdown string + set tag value
	    countdown.innerHTML = '<div class="">'+
	    					  ''+
							  '<div class=" col-xs-3">'+
							  '<div class="circle">'+
					'' + days +  ''+
						'</div><h4 class="days_ref description">{{ Lang::get("ico.days_text") }}'+
						'</h4></div>' + '<div class=" col-xs-3"><div class="circle">' + hours + 
						'</div><h4 class="hours_ref description">{{ Lang::get("ico.hours_text") }}</h4></div>'+
						'<div class=" col-xs-3"><div class="circle">'+
	    				minutes +'</div><h4 class="minutes_ref description">{{ Lang::get("ico.minutes_text") }}</h4></div>'+
	    				'<div class=" col-xs-3"><div class="circle">' + seconds + 
	    				'</div><h4 class="seconds_ref description">{{ Lang::get("ico.seconds_text") }}</h4></div></div>';  
	 
	}, 1000);
</script>