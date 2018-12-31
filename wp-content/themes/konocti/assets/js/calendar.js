"use strict";
// creating the dummy static data


var data = jQuery.getJSON('/calendar-json', function(data) {
    // initializing a new calendar object, that will use an html container to create itself
    var calendar = new Calendar(
        "calendarContainer", // id of html container for calendar
        "medium", // size of calendar, can be small | medium | large
        [
            "Wednesday", // left most day of calendar labels
            3 // maximum length of the calendar labels
        ],
        [
            "#E91E63", // primary color
            "#DFBA68", // primary dark color
            "#FFFFFF", // text color
            "#FFFFFF" // text dark color
        ]
    );

// initializing a new organizer object, that will use an html container to create itself
    var organizer = new Organizer(
        "organizerContainer", // id of html container for calendar
        calendar, // defining the calendar that the organizer is related to
        data // giving the organizer the static data that should be displayed
    );
});