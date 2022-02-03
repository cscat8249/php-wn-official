function numberCounter(target_frame, target_number) {
	this.count = 0;
	this.count = Math.ceil(document.getElementById(target_frame).innerHTML);	
	this.diff = 0;
	this.target_count = parseInt(target_number);
	this.target_frame = document.getElementById(target_frame);
	this.timer = null;
	this.counter();
};
numberCounter.prototype.counter = function() {
	var self = this;
	this.diff = this.target_count - this.count;
	 
	if(this.diff > 0) {
		self.count += Math.ceil(this.diff / 10);
	}	 
	this.target_frame.innerHTML = this.count.toString().replace(/\B(?=(\d{3})+(?!\d))/g, comma_str);
	 
	if(this.count < this.target_count) {
		this.timer = setTimeout(function() { self.counter(); }, 20);
	} else {
		clearTimeout(this.timer);
	}
};

var count_active = new Array();
var count_dsp = new Array();

$('.count_animate').each(function(i, e){
	count_active[i] = false;
});
$(window).scroll(function() {	

	$('.count_animate').each(function(i, e){
		count_dsp[i] = $("#counter"+i).visible();
		if(count_active[i] == false){
			if(count_dsp[i] == true){
				end_count = $(this).attr("count-end");
				new numberCounter("counter"+i, end_count);	
				count_active[i] = true;
			}				
		}
	});	

});