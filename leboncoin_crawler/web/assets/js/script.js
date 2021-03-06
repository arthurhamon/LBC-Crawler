var contentContainer;

// $(".ad_link").on('click', getContent);
function getContent(event){
	event.preventDefault();

	contentContainer = $(this).parent().parent().next('.panel-collapse').children();

	var urlToLoad = $(this).attr('data-url');
	$.ajax({
		url : urlToLoad,
		success: showData
	});
}

function showData(response){
	contentContainer.html(response);
}

$(".btn-danger").on('click', removeAd);
function removeAd(event){
	event.preventDefault();

	contentContainer = $(this).parent().parent().parent();

	var urlToLoad = $(this).attr('href');
	$.ajax({
		url : urlToLoad,
		success : function(response){
			if(response.success){
				contentContainer.remove();
			}
		}
	})
}
