$(document).ready(function () {
    $("#register_area").hide();
    $("#register_party_area").hide();
    $("#show_party_register").click(function () {
        $("#register_area").hide();
        $("#register_party_area").show();
        return false;
    });
    $("#hide_register_party").click(function () {
        $("#register_party_area").hide();
        return false;
    });
    $("#register_party_submit").click(function () {
        $.ajax({
            url: "php/party_register.php",
            method: "POST",
            async: false,
            data: $("#register_party_form").serialize(),
            success: function (data,text,xhr) {
                alert(data);
                return false;
            },
            error:function (xhr,text) {
                alert(xhr);
                alert(text);
            }
        });
        return false;
    });
    $("#show_register").click(function(){
        $("#register_party_area").hide();
        $("#register_area").show();
        return false;
    });
    $("#hide_register").click(function () {
        $("#register_area").hide();
        return false;
    });
    $("#register_submit").click(function () {
        $.ajax({
            url: "php/register.php",
            method: "POST",
            async: false,
            data: $("#register_form").serialize(),
            success: function (data,text,xhr) {
                alert(data);
                return false;
            },
            error:function (xhr,text) {
                alert(xhr);
                alert(text);
            }
        });
        return false;
    });
    $.ajax({
        url: "php/guest_list.php",
        method: "POST",
        async: false,
        success: function (data,text,xhr) {
            $("#guest_list").html(data);
            return false;
        },
        error:function (xhr,text) {
            alert(xhr);
            alert(text);
        }
    });
    $.ajax({
        url: "php/party_list.php",
        method: "POST",
        async: false,
        success: function (data,text,xhr) {
            $("#party_list").html(data);
        },
        error:function (xhr,text) {
            alert(xhr);
            alert(text);
        }
    });
    $("#participate_refresh").click(function () {
        $.ajax({
            url: "php/guest_list.php",
            method: "POST",
            async: false,
            success: function (data,text,xhr) {
                $("#guest_list").html(data);
                return false;
            },
            error:function (xhr,text) {
                alert(xhr);
                alert(text);
            }
        });
        $.ajax({
            url: "php/party_list.php",
            method: "POST",
            async: false,
            success: function (data,text,xhr) {
                $("#party_list").html(data);
                return false;
            },
            error:function (xhr,text) {
                alert(xhr);
                alert(text);
            }
        });
        return false;
    });
    $("#reset").click(function () {
        $("#gage").val("");
        $("#gemail").val("");
        $("#gname").val("");
        return false;
    });
    $("#reset_party").click(function () {
        $("#ptime").val("");
        $("#phname").val("");
        $("#pplace").val("");
        return false;
    });
    $("#participate_submit").click(function () {
        //alert("You clicked me!");
        $.ajax({
            url: "php/participate.php",
            method: "GET",
            data:$("#participate_form").serialize(),
            success: function () {
                alert("success!");
            },
            error: function (xhr,text) {
                alert(xhr);
                alert(text);
            }
        });
        return false;
    });
    $("#participate_withdraw").click(function () {
        //alert("You clicked me!");
        $.ajax({
            url: "php/withdraw.php",
            method: "GET",
            data:$("#participate_form").serialize(),
            success: function (data) {
                alert(data);
            },
            error: function (xhr,text) {
                alert(xhr);
                alert(text);
            }
        });
        return false;
    });

});