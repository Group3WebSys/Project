function display_user_info(data)
{
	var user_info=data["current_user"];
	$("#user #info").empty();
	$("#user #info").append("<ul></ul>");
	$("#user #info ul").css("display", "inline");
	for(key in user_info)
	{
		$("#user #info ul").append("<li>"+key+": "+user_info[key]+"</li>");
	}
}

function destroy_user_info()
{
	$("#user #info").empty();
	$("#user #info").append("<p>You are not logged in!</p>");
}