
!function (document, window, $) {
    "use strict";

$('#owl-multiitem').owlCarousel({
    margin: 20,
    nav: false,
    autoplay: true,
    responsive: {
        0: {
            items: 1
        },
        480: {
            items: 2
        },
        700: {
            items: 4
        },
        1000: {
            items: 3
        },
        1100: {
            items: 5
        }
    }
});
    Morris.Line({
        element: 'line-chart',
        data: [
            { y: '2006', a: 25,  b: 90 },
            { y: '2007', a: 35,  b: 25 },
            { y: '2008', a: 30,  b: 95 },
            { y: '2009', a: 85,  b: 0 },
            { y: '2010', a: 60,  b: 50 },
            { y: '2011', a: 55,  b: 15 },
            { y: '2012', a: 20,  b: 95 },
            { y: '2013', a: 10,  b: 0 },
            { y: '2014', a: 10,  b: 100 },
            { y: '2015', a: 75,  b: 40 },
            { y: '2016', a: 65,  b: 50 }
        ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        lineColors: ['#087380', '#c9302c'],
        labels: ['A', 'B'],
        resize: true
    });

    $(".sparkline-pie-color").sparkline("html", {
        type: "pie",
        height: "160px"
    });

}(document, window, jQuery);
