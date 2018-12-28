"use strict";

// function that creates dummy data for demonstration
function createDummyData() {
    var date = new Date();
    var data = {
        "": {
            "": {
                "": [
                    {
                        "startTime": null,
                        "endTime": null,
                        "text": null
                    }
                ]
            }
        },
        "2019": {
            "01": {
                "23": [
                    {
                        "startTime": "12:00 am",
                        "endTime": "12:00 am",
                        "text": "test"
                    },
                    {
                        "startTime": "10:00 am",
                        "endTime": "3:00 pm",
                        "text": "test6"
                    }
                ],
                "12": [
                    {
                        "startTime": "6:00 pm",
                        "endTime": "10:00 pm",
                        "text": "test5"
                    }
                ],
                "25": [
                    {
                        "startTime": "4:00 pm",
                        "endTime": "7:00 am",
                        "text": "test4"
                    }
                ]
            }
        },
        "2018": {
            "12": {
                "20": [
                    {
                        "startTime": "5:00 am",
                        "endTime": "8:00 am",
                        "text": "test3"
                    }
                ],
                "29": [
                    {
                        "startTime": "2:00 am",
                        "endTime": "4:00 am",
                        "text": "test1"
                    }
                ],
                "15": [
                    {
                        "startTime": "4:00 am",
                        "endTime": "6:00 am",
                        "text": "test"
                    }
                ]
            }
        }
    };
    /* var data = {};

    for (var i = 0; i < 10; i++) {
        data[date.getFullYear() + i] = {};

        for (var j = 0; j < 12; j++) {
            data[date.getFullYear() + i][j + 1] = {};

            for (var k = 0; k < Math.ceil(Math.random() * 10); k++) {
                var l = Math.ceil(Math.random() * 28);

                try {
                    data[date.getFullYear() + i][j + 1][l].push({
                        startTime: "10:00",
                        endTime: "12:00",
                        text: "Some Event Here"
                    });
                } catch (e) {
                    data[date.getFullYear() + i][j + 1][l] = [];
                    data[date.getFullYear() + i][j + 1][l].push({
                        startTime: "10:00",
                        endTime: "12:00",
                        text: "Some Event Here"
                    });
                }
            }
        }
    }

    */

    return data;
}

// creating the dummy static data
var data = {
    "2019": {
        "1": {
            "23": [
                {
                    "startTime": "12:00 am",
                    "endTime": "12:00 am",
                    "text": "test"
                },
                {
                    "startTime": "10:00 am",
                    "endTime": "3:00 pm",
                    "text": "test6"
                }
            ],
            "12": [
                {
                    "startTime": "6:00 pm",
                    "endTime": "10:00 pm",
                    "text": "test5"
                }
            ],
            "25": [
                {
                    "startTime": "4:00 pm",
                    "endTime": "7:00 am",
                    "text": "test4"
                }
            ]
        }
    },
    "2018": {
        "12": {
            "20": [
                {
                    "startTime": "5:00 am",
                    "endTime": "8:00 am",
                    "text": "test3"
                }
            ],
            "29": [
                {
                    "startTime": "2:00 am",
                    "endTime": "4:00 am",
                    "text": "test1"
                }
            ],
            "15": [
                {
                    "startTime": "4:00 am",
                    "endTime": "6:00 am",
                    "text": "test"
                }
            ]
        }
    }
};

// initializing a new calendar object, that will use an html container to create itself
var calendar = new Calendar(
    "calendarContainer", // id of html container for calendar
    "large", // size of calendar, can be small | medium | large
    [
        "Wednesday", // left most day of calendar labels
        3 // maximum length of the calendar labels
    ],
    [
        "#E91E63", // primary color
        "#C2185B", // primary dark color
        "#FFFFFF", // text color
        "#F8BBD0" // text dark color
    ]
);

// initializing a new organizer object, that will use an html container to create itself
var organizer = new Organizer(
    "organizerContainer", // id of html container for calendar
    calendar, // defining the calendar that the organizer is related to
    data // giving the organizer the static data that should be displayed
);
