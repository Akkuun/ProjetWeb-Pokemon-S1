$(document).ready(function() {
    menu();
    social();
    bump("#up")

    $(window).scroll(function() {
        if($(window).scrollTop() === 0) {
            slideHide("#up")
        } else {
            slideShow("#up");
        }
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
        } else if($(this).parents("#social").attr("class") === "social-open") {
            $("#social")
                .css("right", "-46px")
                .css("transition-duration", ".35s")
                .addClass("social-close")
                .removeClass("social-open");
            $(this)
                .children("img")
                .attr("src", "res/img/double_left.png");
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
}

function bump(field) {
    $(field).hover(function() {
        $(this)
            .css("bottom", "40px")
            .css("transition-duration", ".1s");
    }).mouseleave(function() {
        $(this)
            .css("bottom", "32px")
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