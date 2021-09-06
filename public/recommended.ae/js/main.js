/*global $, document, AmCharts*/
$(document).ready(function () {
    "use strict";

    /* Initialize Swiper */
    var swiper = new Swiper('.swiper-container', {
        direction: getDirection(),
        // mousewheel: mouseWheel(),
        navigation: {
            nextEl: '.nextSlide',
            prevEl: '.pervSlide',
          },
        touchRatio: 0,
        keyboard: true,
        on: {
            resize: function () {
              swiper.changeDirection(getDirection());
            }
          }
    });

   
    function getDirection() {
        return window.innerWidth <= 767.98 ? 'vertical' : 'horizontal';
    }
  
    // initialize introduction video
    const player = new Plyr('#introductionVideo');
      // cover video sound
    $('.cover_video_sound').click(function(){
        if($(this).hasClass('muted')){
            $(this).removeClass('muted');
            $("#coverVideo").prop('muted', false);
            $('.cover_video_sound img').attr('src', $('.cover_video_sound img').data("unmuted"));
        }else {
            $(this).addClass('muted');
            $("#coverVideo").prop('muted', true);
            $('.cover_video_sound img').attr('src', $('.cover_video_sound img').data("muted"));

        }
     });

    var linksElem = $('.swiper-pagination nav.navbar ul.navbar-nav li.nav-item');
     var mobileLinks = $('header .secondary_nav_md ul.navbar-nav li.nav-item');
    // slide to selected slide on click on link
    for (var i = 0; i < linksElem.length; i++) {
        $(linksElem[i]).on('click', function (e) {
            swiper.slideTo($(this).data('slide') - 1);
        });
    }
    // slide to selected slide on click on link - mobile
    for (var i = 0; i < mobileLinks.length; i++) {
        $(mobileLinks[i]).on('click', function (e) {
            swiper.slideTo($(this).data('slide') - 1);
            $('#secondary_nav_btn').click();
        });
    }

    swiper.on('slideChange', function (e) {
        // change active item
        $("li[data-slide='" + (e.snapIndex + 1) + "']").addClass("active").siblings().removeClass("active");
        // remove active from siblings
        $("li[data-slide='" + (e.snapIndex + 1) + "']").siblings().each(function () {
            var img = $(this).find("img");
            $(img).attr("src", $(img).data("src"));
        });
        // set this active
        var img = $("li[data-slide='" + (e.snapIndex + 1) + "']").find("img");
        $(img).attr("src", $(img).data("active"));

        // change list underline linear gradient
        if (e.snapIndex >= "4") {
            $('.swiper-pagination nav.navbar ul.navbar-nav').addClass("reversed-underline");
        } else {
            $('.swiper-pagination nav.navbar ul.navbar-nav').removeClass("reversed-underline");
        }

        
        // remove social icons when slide in mobile
        if(window.innerWidth <= 767.98){
            if (e.snapIndex >= "1") {
                $('ul.social, .cover_video_sound').attr("style", "visibility: hidden");
            }else{
                $('ul.social, .cover_video_sound').attr("style", "visibility: visible");
            }

            $('#vision .main_content').niceScroll({
                cursorcolor: "transparent",
                background: "transparent",
                cursorwidth: "3px",
                cursorborder: "0"
            });


        }
       

    });
    
    // menu button in small screen
    $('#secondary_nav_btn').on('click', function(){
        $('header .secondary_nav_md').toggleClass('show');
        if($("header .secondary_nav_md").hasClass("show")){
            var src = $("#secondary_nav_btn img").data('close');
            $('#secondary_nav_btn img').attr('src', src);
        }else {
            var src = $("#secondary_nav_btn img").data('open');
            $('#secondary_nav_btn img').attr('src', src);
        }
    });

    //language select
    $("header .langMenu .dropdown-menu a").on("click", function () {
        $(this).addClass("active").siblings().removeClass("active");
        $("header button.dropdown-toggle").text($(this).data("show"));
    });

    // fix video cover
    var videoBg = $('.video-container video, .video-container object');
    videoBg.maximage('maxcover');


    // select number of person in subsicribe form
    var $select = $("#numberOfPerson");
    for (i=1;i<=50;i++){
        $select.append($('<option></option>').val(i).html(i));
    }

    //****************** */ nice scroll

    // hidden scroll
    $("#introduction .main_content, #vision .main_content .read,  #goles .main_content, #goles .main_content .gole p, #subsicribe_info .main_content .gole p, #subsicribe_info .main_content, #contact_us .main_content, #gallery .main_content, #galleryImgModal, #statistics .main_content").niceScroll({
        cursorcolor: "transparent",
        background: "transparent",
        cursorwidth: "3px",
        cursorborder: "0"
    });
    // visiable scroll
    $("#introduction .main_content .read").niceScroll({
        cursorcolor: "#0ffd07",
        background: "rgba(20,20,20,0.2)",
        cursorwidth: "3px",
        cursorborder: "0",
        autohidemode: false
    });

    // Gallery script
    $("#gallery .item").on("click", function () {
        var type = $(this).data("type");
        var src = $(this).data("src");
        console.log(src)
        if (type == "img") {
            $("#galleryImgModal img").attr("src", src);
            $("#galleryImgModal").modal('show');
        } else if (type == "video") {
            const player2 = new Plyr('#galleryVideo');
            $("#galleryVideoModal video source").attr("src", src);

            $("#galleryVideoModal").modal('show');
        }
    });



    // Start Fire Chart 1 **********************************************************************
    var width = $(window).width();
    var chart_1;
    var aspectR = 1.6;
    var dataLabelsFontSize = 16;

    if( width >= 767.98 && width < 991.98){
        aspectR = 1.2;
        
    }
    if( width < 767.98){
        aspectR = 1.8;
        dataLabelsFontSize = 26;
    }
    

    var ctx_1 = document.getElementById('chart_1').getContext('2d');

    chart_1 = new Chart(ctx_1, {
        type: 'doughnut',

        data: {
            labels: ['رجال', 'نساء'],
            datasets: [{
                data: ['238', '622'],
                active: [false, true],
                backgroundColor: [
                    '#009F6F',
                    '#3065AF',
                ],
                borderWidth: 0,
                borderColor: '#fff',
                hoverBackgroundColor: [
                    '#009F6F',
                    '#3065AF',
                ],
                hoverBorderWidth: 2,

            },],


        },
        options: {
            responsive: true,
            //  "innerRadius": "30%",
            cutoutPercentage: 40,
            aspectRatio: aspectR,
            rtl: false,
            textDirection: "rtl",
            legend: {
                display: false,
            },
            plugins: {
                // Change options for ALL labels of THIS CHART
                datalabels: {
                    color: '#FFF',
                    font: {
                        size: 18,
                        weight: 'bold',
                    },
                    labels: {
                        name: {
                            align: ['bottom', 'top'],
                            anchor: ['end', 'start'],
                            font: { size: dataLabelsFontSize },
                            formatter: function (value, ctx) {
                                return ctx.chart.data.labels[ctx.dataIndex];
                            },
                        },
                        value: {
                            align: ['center', 'center'],
                            anchor: ['end', 'start'],
                            font: { size: dataLabelsFontSize },
                            borderWidth: 0,
                            padding: 4,
                        }
                    }
                }
            }
        },
    });

    // End Fire Chart  1 **********************************************************************
    // Start Fire Chart  2 **********************************************************************

    var chart_2_options = {
        "type": "serial",
        "categoryField": "category",
        "startDuration": 1,
        "backgroundColor": "TRANSPARENT",
        "responsive": {
            "enabled": true
          },
        "categoryAxis": {
            "gridPosition": "start",
            "axisColor": "#69737D",
            "color": "#FFFFFF",
            "fontSize": 12,
            "gridAlpha": 0,
            "gridCount": 3,
            "gridThickness": 0,
        },
        "trendLines": [],
        "graphs": [
            {
                "balloonText": "[[title]] of [[category]]:[[value]]",
                "color": "#FFFFFF",
                "columnWidth": 0.78,
                "cornerRadiusTop": 12,
                "fillAlphas": 0.74,
                "fillColors": "#3064AE",
                "id": "AmGraph-1",
                "lineColor": "undefined",
                "title": "graph 1",
                "type": "column",
                "valueField": "column-1",
            }
        ],
        "guides": [],
        "valueAxes": [
            {
                "axisTitleOffset": 0,
                "id": "ValueAxis-1",
                "axisColor": "#69737D",
                "color": "#FFFFFF",
                "dashLength": 2,
                "gridAlpha": 0.24,
                "gridColor": "#69737D",
                "tickLength": 0,
                "title": "",
                "labelOffset": 12,
                "maximum": 12,
                "minimum": 0,
                "strictMinMax": true,
                "includeAllValues": true,
            }
        ],
        "allLabels": [],
        "balloon": {},
        "titles": [],
        "dataProvider": [
            {
                "category": "Jan",
                "column-1": "2"
            },
            {
                "category": "Feb",
                "column-1": "4"
            },
            {
                "category": "Mar",
                "column-1": "5"
            },
            {
                "category": "Apr",
                "column-1": "4.5"
            },
            {
                "category": "May",
                "column-1": "5"
            },
            {
                "category": "Jun",
                "column-1": "6"
            },
            {
                "category": "Jul",
                "column-1": "6.5"
            },
            {
                "category": "Aug",
                "column-1": "8"
            },
            {
                "category": "Sep",
                "column-1": "9"
            },
            {
                "category": "Oct",
                "column-1": "7"
            },
            {
                "category": "Nov",
                "column-1": "10"
            },
            {
                "category": "Dec",
                "column-1": "12"
            }
        ]
    };
    var chart_2 = AmCharts.makeChart("chart_2", chart_2_options);
    chart_2.categoryAxis.fontSize = 12;
    chart_2.valueAxes[0].fontSize = 12;
});


// End Fire Chart  2 **********************************************************************

