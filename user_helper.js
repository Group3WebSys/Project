function display_user_info(data)
{
	var user_info=data["current_user"];
	$("#user .error").empty();
	
	
	if($("#user #account #user_info").size()>0)
	{
		//If #uesr_info exists, replace it with the latest data
		$("#user #account #user_info").empty();
		for(key in user_info)
		{
			$("#user #account ul").append("<li>"+key+": "+user_info[key]+"</li>");
		}
	}
	else
	{
		$("#user #account").append("<ul id='user_info'></ul>");
		for(key in user_info)
		{
			$("#user #account ul").append("<li>"+key+": "+user_info[key]+"</li>");
		}
	}
	
	// Display/Edit avatar
	if(user_info["avatar"]!=null)
	{
		$("#user #account #avatar").html("<img src='users/"+user_info["username"]+"/avatar.jpg' height='75' width='75' alt='You don&apos;t have an avatar'></img>");
		$("#user #account #avatar").append(
			"<form enctype='multipart/form-data' action='uploadavatar.php' method='post'>" +
			  "<label>Choose a new profile picture</label><br />" +
			  "<input type='file' name='avatar' />" +
			  "<input type='submit' value='upload' />" +
			"</form>"
		);
	}
	else
	{
		$("#user #account #avatar").append(
				"<form enctype='multipart/form-data' action='uploadavatar.php' method='post'>" +
				  "<label>Add a profile picture</label><input type='file' name='avatar'/>" +
				  "<input type='submit' value='upload' />" +
				"</form>"
		);
	}
	
/*	$("#user #account #avatar form").on("submit", function(e){
		e.preventDefault();
		$.post("uploadavatar.php", $(this).serialize(), function(data){
			if(data["success"]==1)
			{
				alert("You profile picture has been updated!");
			}
			else if(data["success"]==0)
			{
				alert("Upload failed! "+data["error"]);
			}
			else
			{
				alert("Unknown error!");
			}
		},"text").fail(function(jqXHR, textStatus, errorThrown){
			alert("Upload failed! Error: "+ textStatus + ", " + errorThrown+", "+jqXHR.responseText+", "+jqXHR.responseXML);
		});
	});
*/
}

function destroy_user_info()
{
	$("#user #error").empty();
	$("#user #account").children().empty();
}