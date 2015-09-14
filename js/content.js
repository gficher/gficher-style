function ModalOpen2( $modalName ) {
	if ($("[data-mname='"+$modalName+"']").size() == 1) {
		$(".gs-modal-fade").css('display','block').scrollTop(0);
		$("[data-mname='"+$modalName+"']").css('display','block');
			
		setTimeout(function() {
			$(".gs-modal-fade").css('opacity','1');
			$("[data-mname='"+$modalName+"']").css('top','100px').css('opacity','1');
		}, 1);
	}
}

$("[data-mfunc='close']").click(function () {
	$closeVar = $(this);
	
	$closeVar.closest("[data-mname]").css('top','0').css('opacity','0');
	$(".gs-modal-fade").css('opacity','0');

	setTimeout(function() {
		$closeVar.closest("[data-mname]").css('display','none');
		$(".gs-modal-fade").css('display','none');
	}, 100);
});

$("[data-openmodal]").click(function () {
	ModalOpen2($(this).attr("data-openmodal"));
});

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
		$("#sidemenu").css('left','-100%');
		menuStatus = false;
	} else {
		$("#sidemenu").css('left','0px');
		menuStatus = true;
	}
});

$(window).resize(function() {
	if (($("#gs-menuicon").css('display') == 'none')) {
		menuStatus = false;
	} else {
		menuStatus = true;
	}
	$("#gs-menuicon").click();
});

if (($("#gs-menuicon").css('display') != 'none')) {
	$("canvas.gs-graph").attr('height','150');
}