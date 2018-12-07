/*the lines below are to prevent false errors from jslint or eslint in Brackets*/

/*eslint-disable no-unused-vars*/
/*global $, document, alert, window*/
/*jshint browser: true, unused: false, no-unused-vars: true*/
/*jslint devel: true, node: true, vars: true*/
"use strict"; // required by jslint

/*
File Name: week7.js
Date: 11/14/2017
Programmer: Ashley Neal
*/

// The line below will test the link to the week7.js file. Comment it out when it works.
// alert("the link to the .js file is correct!");

// The line below will test the link to jquery.min.js . Comment it out when it works.
// if (window.jQuery) {alert("the link to the jQuery file is correct!"); }

// Enter your jQuery code below this line (put a blank line in first).

$(document).ready(function () {

    $("dd").hide();

    $("dt").on("click", function () {        $(this).toggleClass("open").next().slideToggle();
    });
    
});