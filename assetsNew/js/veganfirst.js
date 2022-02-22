var base ='https://www.veganfirst.com/';

function SaveArticle(e){
jQuery.ajax({
  type: 'post',
  url: base+'user/saveArticle',
  dataType: 'json',
  data: {
    article: e
  },
  cache: false,
  success: function(returndata) {
    if (returndata.id==1) {
    	$('#bookm'+e).addClass('art_saved');
      	$('#bookm'+e).attr("onclick","unSaveArticle('"+e+"')");
    } else {
      	$("#login_popup").modal('show');
    }

  }

});
}

function unSaveArticle(e){
jQuery.ajax({
  type: 'post',
  url: base+'user/unsaveArticle',
  dataType: 'json',
  data: {
    article: e
  },
  cache: false,
  success: function(returndata) {
    if (returndata.id==1) {
		$('#bookm'+e).removeClass('art_saved');
		$('#bookm'+e).attr("onclick","SaveArticle('"+e+"')");
    } else {
      	$("#login_popup").modal('show');
    }
  }
});

}



function SaveRecipe(e){

jQuery.ajax({
  type: 'post',
  url: base+'user/saveRecipe',
  dataType: 'json',
  data: {
    recipe: e
  },
  cache: false,
  success: function(returndata) {
    if (returndata.id==1) {
    	$('#bookm'+e).addClass('art_saved');
		$('#bookm'+e).attr("onclick","unSaveRecipe('"+e+"')");
	    } else {
      	$("#login_popup").modal('show');
    }
  }
});
}

function unSaveRecipe(e){
jQuery.ajax({
  type: 'post',
  url: base+'user/unsaveRecipe',
  dataType: 'json',
  data: {
    recipe: e
  },
  cache: false,
  success: function(returndata) {
    if (returndata.id==1) {
		$('#bookm'+e).removeClass('art_saved');
		$('#bookm'+e).attr("onclick","SaveRecipe('"+e+"')");
	    } else {
      	$("#login_popup").modal('show');
    }
  }
});
}
function FollowTopic(e){
jQuery.ajax({
  type: 'post',
  url: base+'user/followTopic',
  dataType: 'json',
  data: {
    categ: e
  },
  cache: false,
  success: function(returndata) {
    if (returndata.id==1) {
    	$('#flo'+e).addClass('followed');
      	$('#flo'+e).attr("onclick","unFollowTopic('"+e+"')");
    } else {
      	$("#login_popup").modal('show');
    }

  }
});
}

function chkFollowTopic(e){
jQuery.ajax({
  type: 'post',
  url: base+'user/chkfollowTopic',
  dataType: 'json',
  data: {
    categ: e
  },
  cache: false,
  success: function(returndata) {
    if (returndata.id==1) {
    	$('#flo'+e).addClass('followed');
		//$('#flo'+e).text("Un Follow");
    } 
  }
});
}
function unFollowTopic(e){
jQuery.ajax({
  type: 'post',
  url: base+'user/unfollowTopic',
  dataType: 'json',
  data: {
    categ: e
  },
  cache: false,
  success: function(returndata) {
    if (returndata.id==1) {
    	$('#flo'+e).removeClass('followed');
      	$('#flo'+e).attr("onclick","FollowTopic('"+e+"')");
    } else {
      	$("#login_popup").modal('show');
    }

  }
});
}



function FollowTopich(e){
jQuery.ajax({
  type: 'post',
  url: base+'user/followTopic',
  dataType: 'json',
  data: {
    categ: e
  },
  cache: false,
  success: function(returndata) {
    if (returndata.id==1) {
    	$('#flo'+e).addClass('followed');
      	$('#flo'+e).attr("onclick","unFollowTopich('"+e+"')");
		$('#flo'+e).text("done");
    } else {
      	$("#login_popup").modal('show');
    }

  }
});
}

function chkFollowTopich(e){
jQuery.ajax({
  type: 'post',
  url: base+'user/chkfollowTopic',
  dataType: 'json',
  data: {
    categ: e
  },
  cache: false,
  success: function(returndata) {
    if (returndata.id==1) {
    	$('#flo'+e).addClass('followed');
		$('#flo'+e).text("done");
		//$('#flo'+e).text("Un Follow");
    } 
  }
});
}
function unFollowTopich(e){
jQuery.ajax({
  type: 'post',
  url: base+'user/unfollowTopic',
  dataType: 'json',
  data: {
    categ: e
  },
  cache: false,
  success: function(returndata) {
    if (returndata.id==1) {
    	$('#flo'+e).removeClass('followed');
      	$('#flo'+e).attr("onclick","FollowTopich('"+e+"')");
		$('#flo'+e).text("add");
    } else {
      	$("#login_popup").modal('show');
    }

  }
});
}





$('.dropdown').hover(function() {
 $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
 $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});

function validateLogin() {
	var z = document.forms["loginform"]["email"].value;
	var y = document.forms["loginform"]["password"].value;
	var atpos = z.indexOf("@");
    var dotpos = z.lastIndexOf(".");
	var msg = [];
	 if (atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length) {
        msg.push("<div class='alert alert-danger'>Enter valid e-mail address</div>");
    }
	if (y == null || y == "") {
        msg.push("<div class='alert alert-danger'>Enter Password</div>");
    }
	if(msg.length > 0)
	{
		$('div#formEror').html('');
		for(var i=0; i< msg.length; i++)
		{
	        $('div#formEror').append(msg[i]);
		}
		return false;
	}
}

function validateReg() {
	var x = document.forms["regform"]["Name"].value;
	var z = document.forms["regform"]["Email"].value;
	var y = document.forms["regform"]["Password"].value;
	var atpos = z.indexOf("@");
    var dotpos = z.lastIndexOf(".");
	var msg = [];
	if (x == null || x == "") {
        msg.push("<div class='alert alert-danger'>Enter Your Name</div>");
    }
	 if (atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length) {
      msg.push("<div class='alert alert-danger'>Enter valid e-mail address</div>");
    }
	if (y == null || y == "") {
        msg.push("<div class='alert alert-danger'>Enter Password</div>");
    }

	if(msg.length > 0)
	{
		$('div#formEror').html('');
		for(var i=0; i< msg.length; i++)
		{
	        $('div#formEror').append(msg[i]);
		}
		return false;
	}
}



function validateReset() {
	var z = document.forms["resetform"]["email"].value;
	var atpos = z.indexOf("@");
    var dotpos = z.lastIndexOf(".");
	var msg = [];
	 if (atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length) {
      msg.push("<div class='alert alert-danger'>Enter valid e-mail address</div>");
    }
	if(msg.length > 0)
	{
		$('div#formEror').html('');
		for(var i=0; i< msg.length; i++)
		{
	        $('div#formEror').append(msg[i]);
		}
		return false;
	}
}



function validateSearch() {
	var x = document.forms["searchform"]["keyword"].value;
	var msg = '';
	if (x == null || x == "") {
        msg='Search';
    }
	if(msg)
	{
		$('#search').attr("placeholder", msg);
		$('#search').css("border","1px solid rgb(255, 0, 0)");
		return false;
	}
}

function validateNl() {
	var z = document.forms["nfform"]["Email"].value;
	var atpos = z.indexOf("@");
    var dotpos = z.lastIndexOf(".");
	var msg = [];
	 if (atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length) {
        msg.push("<div class='alert alert-danger'>Enter valid e-mail address</div>");
		$('#Email').html("<div class='alert alert-danger'>Enter valid e-mail </div>");
    }

	if(msg.length > 0)
	{
		return false;
	}
}

function validateSubscribe() {
	var z = document.forms["nfform"]["Email"].value;
	var ty = document.forms["nfform"]["type_id"].value;
	var atpos = z.indexOf("@");
    var dotpos = z.lastIndexOf(".");
	var msg = [];
	 if (atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length) {
        msg.push("<div class='alert alert-danger'>Enter valid e-mail address</div>");
    }
	if (ty == null || ty == "") {
 		msg.push("<div class='alert alert-danger'>Please Select Subscribe for	</div>");
	 }
	if(msg.length > 0)
	{
		$('div#Email').html('');
		for(var i=0; i< msg.length; i++)
		{
	        $('div#Email').append(msg[i]);
		}
		return false;
	}
}
function followEve(e){
jQuery.ajax({
  type: 'post',
  url: base+'user/followEve',
  dataType: 'json',
  data: {
    Event: e
  },
  cache: false,
  success: function(returndata) {
    if (returndata.id==1) {
		$('#Followmsg').html(returndata.message);
		$('#Followmsg').css("color", "#fda58d");
    } else {
      	$("#login_popup").modal('show');
    }
  }
});
}

function readNotf(e){
jQuery.ajax({
  type: 'post',
  url: base+'user/readNotf',
  dataType: 'json',
  data: {
    notf: e
  },
  cache: false,
  success: function(returndata) {
  }
});
}

function ValidateCon() {
	var z = document.forms["Cont"]["Email"].value;
	var y = document.forms["Cont"]["Name"].value;
	var s = document.forms["Cont"]["Subject"].value;
	var m = document.forms["Cont"]["message"].value;
	var atpos = z.indexOf("@");
    var dotpos = z.lastIndexOf(".");
	var msg = [];
	if (y == null || y == "") {
        msg.push("<div class='alert alert-danger'>Enter Your Name</div>");
    }

	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length) {
      msg.push("<div class='alert alert-danger'>Enter valid e-mail address</div>");
    }

	if (s == null || s == "") {
        msg.push("<div class='alert alert-danger'>Enter Subject</div>");
    }

	if (m == null || m == "") {
        msg.push("<div class='alert alert-danger'>Enter Your Query</div>");
    }

	if(msg.length > 0)
	{
		$('div#formEror').html('');
		for(var i=0; i< msg.length; i++)
		{
	        $('div#formEror').append(msg[i]);
		}
		return false;
	}
}



function ValidatePartner() {
	var z = document.forms["Part"]["Email"].value;
	var y = document.forms["Part"]["Name"].value;
	var m = document.forms["Part"]["message"].value;
	var atpos = z.indexOf("@");
    var dotpos = z.lastIndexOf(".");
	var msg = [];
	if (y == null || y == "") {
        msg.push("<div class='alert alert-danger'>Enter Your Name</div>");
    }
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length) {
      msg.push("<div class='alert alert-danger'>Enter valid e-mail address</div>");
    }

	if (m == null || m == "") {
        msg.push("<div class='alert alert-danger'>Enter Your Message</div>");
    }

	if(msg.length > 0)
	{
		$('div#formEror').html('');
		for(var i=0; i< msg.length; i++)
		{
	        $('div#formEror').append(msg[i]);
		}
		return false;
	}
}