$(document).ready(function() {
    menu();
    social();
    bump("#up");
    toggleMenu();
    inputAnimation();

    $(window).scroll(function() {
        if($(window).scrollTop() === 0) {
            slideHide("#up")
        } else {
            slideShow("#up");
        }
        if($(window).scrollTop() >= 128) {
            displayMiniHeader();
        } else {
            hideMiniHeader();
        }
    }).resize(function() {

    });
});


function social() {
    $("#social > div:first-child").unbind().hover(function() {
        $(this)
            .css("background-color", "#999")
            .css("transition-duration", ".25s");
    }).mouseleave(function() {
        $(this)
            .css("background-color", "#FFF")
            .css("transition-duration", ".25s");
    }).click(function() {
        if($(this).parents("#social").attr("class") === "social-close") {
            $("#social")
                .css("right", "0")
                .css("transition-duration", ".35s")
                .addClass("social-open")
                .removeClass("social-close");
            $(this)
                .children("img")
                .attr("src", "res/img/double_right.png");
            $("#social > div:last-child")
                .css("box-shadow", "black 1px 1px 8px 1px")
                .css("transition-duration", ".5s");
        } else if($(this).parents("#social").attr("class") === "social-open") {
            $("#social")
                .css("right", "-46px")
                .css("transition-duration", ".35s")
                .addClass("social-close")
                .removeClass("social-open");
            $(this)
                .children("img")
                .attr("src", "res/img/double_left.png");
            $("#social > div:last-child")
                .css("box-shadow", "black 0 0 0 0")
                .css("transition-duration", ".5s");
        }
    });
}

function menu() {
    $("nav > a > div").unbind().hover(function() {
        $(this)
            .css("background-color", "rgb(56, 57, 52)")
            .css("transition-duration", ".35s");
        $(this).children()
            .css("visibility", "visible");
    }).mouseleave(function() {
        $(this)
            .css("background-color", "rgb(36, 37, 32)")
            .css("transition-duration", ".35s");
        $(this).children()
            .css("visibility", "hidden");
    });

    $("#nav-menu > div").unbind().hover(function() {
        $(this)
            .css("background-color", "rgb(56, 57, 52)")
            .css("transition-duration", ".35s");
    }).mouseleave(function() {
        $(this)
            .css("background-color", "rgb(36, 37, 32)")
            .css("transition-duration", ".35s");
    });
}

function bump(field) {
    $(field).hover(function() {
        $(this)
            .css("bottom", "40px")
            .css("box-shadow", "white 0 0 10px 5px")
            .css("transition-duration", ".1s");
    }).mouseleave(function() {
        $(this)
            .css("bottom", "32px")
            .css("box-shadow", "white 0 0 0 0")
            .css("transition-duration", ".1s");
    });
}

function slideHide(field) {
    $(field)
        .css("right", "-96px")
        .css("transition-duration", ".5s");
}

function slideShow(field) {
    $(field)
        .css("right", "32px")
        .css("transition-duration", ".5s");
}

function wrapped() {
    let offset_top_prev;

    $(".article").each(function() {
        const offset_top = $(this).offset().top;

        if(offset_top > offset_top_prev) {
            $(this).addClass("wrapped");
        } else if(offset_top === offset_top_prev) {
            $(this).removeClass("wrapped");
        }
        offset_top_prev = offset_top;
    });
}

function displayMiniHeader() {
    $("#mini_header")
        .css("top", "0")
        .css("visibility", "visible")
        .css("transition-duration", ".2s");
}

function hideMiniHeader() {
    $("#mini_header")
        .css("top", "-128px")
        .css("visibility", "hidden")
        .css("transition-duration", ".2s");
}

function toggleMenu() {
    $("#menu_button").unbind().hover(function() {
        $(this)
            .css("cursor", "pointer")
            .css("background-color", "rgb(56, 57, 52)")
            .css("transition-duration", ".5s");
    }).mouseleave(function() {
        $(this)
            .css("cursor", "default")
            .css("background-color", "rgb(36, 37, 32)")
            .css("transition-duration", ".5s");
    }).click(function() {
        if($("#nav-menu").hasClass("menu-open")) {
            $("#nav-menu")
                .addClass("menu-close")
                .removeClass("menu-open")
                .css("top", "-224px")
                .css("transition-duration", ".35s");
        } else if($("#nav-menu").hasClass("menu-close")) {
            $("#nav-menu")
                .addClass("menu-open")
                .removeClass("menu-close")
                .css("top", "64px")
                .css("transition-duration", ".35s");
        }
        console.log($(this).siblings("nav > div").html());
    });
}

function inputAnimation() {
    $(".formulary > form > div > label > input").focus(function() {
        $(this)
            .css("background-color", "rgba(255, 255, 0, .35)")
            .css("transition-duration", ".35s");
    }).blur(function() {
        $(this)
            .css("background-color", "white")
            .css("transition-duration", ".35s");
    });
}
