$(document).ready(function(){
	$("#btn_cv").click(function(){
		show_info("cv");
	});

	$("#btn_social_network").click(function(){
		show_info("social_network");
	});
	
	$("#btn_code_repo").click(function(){
		show_info("code_repo");
	});
	
	$("#btn_contact").click(function(){
		show_info("contact");
	});
	
	$("#reset").click(function(){
		clean_contact_form();
	});
});

/*
Function to show the content clicked by the user and suppress the mainpage.
*/
function show_info(id) {
	hide_mainbar();
	hide_all();
	$("#"+id).show();
}

/*
Function to set the page to its original state.
*/
function show_mainpage() {
	hide_all();
	show_mainbar();
}

/*
Function to show the page header when there's no info detailed.
*/
function show_mainbar() {
	$("#smallbar").hide();
	
	$("#languages").show();
	$("#myself").show();
}

/*
Function to hide the page header when some info is detailed. 
*/
function hide_mainbar() {
	$("#languages").hide();
	$("#myself").hide();
	
	$("#smallbar").show();
}

/*
Function to hide all divs with detailed information.
*/
function hide_all() {
	$("#cv").hide();
	$("#social_network").hide();
	$("#code_repo").hide();
	$("#contact").hide();
	
	$("#send_success").hide();
	$("#send_fail").hide();
}

function clean_contact_form() {
	$("#name").value = "";
	$("#email").value = "";
	$("#subject").value = "";
	$("#message").value = "";
}