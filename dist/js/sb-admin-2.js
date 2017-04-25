/*!
 * Start Bootstrap - SB Admin 2 v3.3.7+1 (http://startbootstrap.com/template-overviews/sb-admin-2)
 * Copyright 2013-2016 Start Bootstrap
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap/blob/gh-pages/LICENSE)
 */
$(function() {
    $('#side-menu').metisMenu();
});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {

    var rootUrl = 'http://localhost/work/api/public/';
    var imageUrl = 'http://localhost/work/api/public/';
    $(window).bind("load resize", function() {
        var topOffset = 50;
        var width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        var height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    // var element = $('ul.nav a').filter(function() {
    //     return this.href == url;
    // }).addClass('active').parent().parent().addClass('in').parent();
    var element = $('ul.nav a').filter(function() {
        return this.href == url;
    }).addClass('active').parent();

    while (true) {
        if (element.is('li')) {
            element = element.parent().addClass('in').parent();
        } else {
            break;
        }
    }
 
    function isLoggedIn(){
        
        $.ajax({
            url: rootUrl + "admin/isloggedin",
            dataType: "json",
            success : function(result) {

                if (result["success"]) {
                    window.location.href = "home.php";
                }else{
                    return false;
                }
            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        });
    }
    function isLoggedInUser(){
        
        $.ajax({
            url: rootUrl + "admin/isloggedin",
            dataType: "json",
            success : function(result) {

                if (result["success"]) {
                    return false;
                }else{
                    window.location.href = "index.html";
                    
                }
            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        });
    }
    var pathname = $(location).attr('pathname');
    var Filename= pathname.split('/').pop();
    if (Filename == "index.html") {
       isLoggedIn(); 
    }else{
        isLoggedInUser();
    }
    $("#add-new-user").submit(function(e){
        e.preventDefault();
        var username = $("#admin-email").val();
        var password = $("#admin-password").val();

        var signinData = new FormData();
        signinData.append("email",username);
        signinData.append("password",password);
        $.ajax({

            type: 'POST',
            url: rootUrl + 'admin/signup',
            data: signinData,
            contentType: false,
            processData: false,
            success: function(data) {
                if (data["success"]) {
                    alert("created new user.");   
                } 
            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        });

    });
    

     $("#admin-login-form").submit(function(e){
        e.preventDefault();
        var username = $("#admin-email").val();
        var password = $("#admin-password").val();

        var signinData = new FormData();
        signinData.append("username",username);
        signinData.append("password",password);
        $.ajax({

            type: 'POST',
            url: rootUrl + 'admin/login',
            data: signinData,
            contentType: false,
            processData: false,
            beforeSend: function() {
                $("#error").fadeOut();
                $("#btn-submit").val('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Sending ...');
            },
            success: function(data) {
                if (data["error"]) {

                    $("#error").fadeIn(300, function() {

                        $("#error").html(data["error_message"]);

                        $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Login');

                    });

                } else if (data["inactive"]) {
                  $("#error").fadeIn(1000, function() {


                    $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Login');
                    $("#error").html(data["inactive_message"]);
                  });

                } else if (data["success"]) {
                   $("#error").fadeIn(1000, function() {

                    $("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Signing In ...');
                    // similar behavior as clicking on a link
                    window.location.href = "home.php";
                  });
                } 
            },
            error: function(xhr, resp, text) {
                console.log(xhr, resp, text);
            }
        });
    });
});
