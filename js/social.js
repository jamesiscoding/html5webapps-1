$(document).ready(function(){
	$.getJSON("/api/googleplus.php", function(data){
		var gplusfeed = $("#gplusfeed");
		jQuery.each(data, function(index, currentactivity){
			var item = "<div class='item clearfix'>";
			item +=  "<a class='left span-1' href='" + currentactivity.from_url + "' title='" + currentactivity.from_name + "'>";
			item += "<img class='span-1 last' src='" + currentactivity.from_img + "' alt='" + currentactivity.from_name + "'/></a>";
			item += "<a class='left span-11 last' href='" + currentactivity.url + "' title='" + currentactivity.title + "'>" + currentactivity.description + "</a>";
			item += "</div>";
			gplusfeed.append(item);	
		});
	});
});