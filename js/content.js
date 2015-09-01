$(".pbprogress").each(function() {
	$(this).css('width', $(this).attr("data-value")  + '%');
});

$("[data-action='pupdate']").click(function () {
	$("#" + $(this).attr("data-target")).css('width', $(this).attr("data-value") + '%');
});

$("[data-action='tsearch']").keyup(function () {
	_this = this;
	//$.each($("#" + $(this).attr("data-target") + " tbody").find("tr"), function() {
	$.each($("[data-tsearch='"+$(this).attr("id")+"'] tbody").find("tr"), function() {
		console.log($(this).text());
		if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) == -1) {
			$(this).hide();
		} else {
			$(this).show();
		}
	});
	if ($(this).val() == '') {
		$("#" + $("[data-tsearch='" + $(this).attr("id") + "']").attr("data-tpager")).find('.gs-pnumber:first').click();
	} else {
		$("#" + $("[data-tsearch='" + $(this).attr("id") + "']").attr("data-tpager")).find(".gs-pnumber").removeClass('active');
	}
});

$(".ags-table").each(function () {
	var currentPage = 0;
	var numPerPage = 7;
	var $table = $(this);

	$table.bind('repaginate', function () {
		$table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
	});

	$table.trigger('repaginate');
	var numRows = $table.find('tbody tr').length;
	var numPages = Math.ceil(numRows / numPerPage);
	var $pager = $('#' + $(this).attr('data-tpager'));


	for (var page = 0; page < numPages; page++) {
		$('<span class="gs-pnumber"></span>').text(page + 1).bind('click', {
			newPage: page
		}, function(event) {
			currentPage = event.data['newPage'];
			$table.trigger('repaginate');
			$(this).addClass('active').siblings().removeClass('active');
		}).appendTo($pager).addClass('clickable');
	}

	$("#" + $(this).attr('data-tpager')).find('.gs-pnumber:first').addClass('active');
});

$(".gs-pnumber").click(function (){
	$("#" + $("[data-tpager='" + $(this).closest("div").attr("id") + "']").attr("data-tsearch")).val("");
});

var menuStatus = false;

$("#gs-menuicon").click(function (){
	if (menuStatus == true) {
		if ($("#gs-menuicon").css('display') == 'none') {
			$("#content").css('left','250px');
		} else {
			$("#content").css('left','0px');
		}
		$("#gs-menuoverlay").css('display','none');
		$(document).undelegate('#content', 'touchmove', false);
		menuStatus = false;
	} else {
		$("#gs-menuoverlay").css('display','block');
		$("#content").css('left','250px');
		$(document).delegate('#content', 'touchmove', false);
		menuStatus = true;
	}
});

//$("#content").on("scrollstart",function(){
$("#content").on("ascroll",function() {
	//$("#gs-menuoverlay").click(function (){
	//$("#content").mouseover(function (){
	if ($("#gs-menuicon").css("display") == "block") {
		$("#gs-menuicon").click();
	}
});

$("#gs-menuoverlay").click(function (){
	if ($("#gs-menuicon").css("display") == "block") {
		$("#gs-menuicon").click();
	}
});

$(window).resize(function() {
	menuStatus = true;
	$("#gs-menuicon").click();
	$("#gs-menuoverlay").css('display','none');
	
	
	if ($("#gs-menuicon").css("display") == "block") {
		$(".graph").attr("height","100");
	} else {
		$(".graph").attr("height","30");
	}
});

if ($("#gs-menuicon").css("display") == "block") {
	$(".graph").attr("height","100");
} else {
	$(".graph").attr("height","50");
}

$(document).delegate('.gs-topbar', 'touchmove', false);
$(document).delegate('#sidemenu', 'touchmove', false);