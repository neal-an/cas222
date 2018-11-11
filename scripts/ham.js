/*the lines below are to prevent false errors from jslint or eslint in Brackets*/

/*eslint-disable no-unused-vars*/
/*global $, document, alert, window*/
/*jshint browser: true, unused: false, no-unused-vars: true*/
/*jslint devel: true, node: true, vars: true*/
"use strict"; // required by jslint

/*
File Name: XXXXX.js
Date: XX/XX/XX
Programmer: XXX XXX
*/

// The line below is to test your link to the .js file. Please comment it out when it works.
// alert("the link to the .js file is correct!");

// The line below is to test your link to the jquery.min.js file. Please comment it out when it works.
// if (window.jQuery) {alert("the link to the jQuery file is correct!"); }

// Enter your jQuery code below this line (put a blank line first).


$(document).ready(function () {

    // alert("boop!");


    $(".cross").hide();

    $(".menu").hide();

    $(".hamburger").show();
    
    $(".desktopSubmenu").hide();

    $(".hamburger").on("click", function () {
        $(".menu").slideToggle("slow");
        $(".hamburger").hide();
        $(".cross").show();
    });

    $(".cross").on("click", function () {
        $(".menu").slideToggle("slow");
        $(".cross").hide();
        $(".hamburger").show();
    });
    
    $(".menu a").on("click", function () {
        $(".menu").slideToggle("slow");
        $(".cross").hide();
        $(".hamburger").show();
    });
    
    $(".desktopMenuSubButton").on("click", function () {
        $(".desktopSubmenu").slideToggle("slow");
    });
    
    $(".desktopSubmenu a").on("click", function () {
        $(".desktopSubmenu").slideToggle("slow");
    });

});

