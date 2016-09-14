// Modal slideshow
$(document).ready(function ($) {
    var i;
    var count = $(".img-container").length - 1;

    // Display modal on click
    $(".img-container img").click(function () {
        $(".modal").css("display", "block");
        // Index starting at 0
        i = $(".img-container img").index(this);
        img_slideshow();
    });

    // Shows current slide
    function img_slideshow() {
        var curr = $(".img-container img:eq(" + i + ")");
        $("#img01").attr("src", curr.attr("src"));
        $("#img01").fadeOut(0);
        $("#img01").fadeIn(300);
        $("#caption").text(curr.attr("alt") + " [#" + (i+1) + " of "
                            + (count+1) + "]");
    };

    $("#previous").click(function () {
        previous_image();
    });

    $("#next").click(function () {
        next_image();
    });

    $("#close").click(function() {
        close_viewer();
    });

    function previous_image() {
        if (i > 0) {
            i = i - 1;
        } else {
            i = count;
        };
        img_slideshow();
    };

    function next_image() {
        if (i < count) {
            i = i + 1;
        } else {
            i = 0;
        };
        img_slideshow();
    };

    function close_viewer() {
        $(".modal").css("display", "none");
    };

    // Left arrow (37), right arrow (39), escape (27) keys
    $(document).keypress(function (e) {
        if (e.keyCode == 37) {
            previous_image();
        }
        if (e.keyCode == 39) {
            next_image();
        }
        if (e.keyCode == 27) {
            close_viewer();
        }
    });
});

var modal = document.getElementById("modal01");
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Portfolio filtering using MixItUp
$(function () {
    var filterList = {
        init: function () {
            $('#portfoliolist').mixItUp({
                    selectors: {
                target: '.portfolio',
                filter: '.filter'
                },
                load: {
                    filter: '.code'
                }
            });
        }
    };

    filterList.init();
});

$(function () {
    $('.droptext').each(function () {
        $(this).on('click', function () {
            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
            } else {
                $(this).addClass('active');
            }
            $(this).siblings('.dropdetail').slideToggle(300);
        });
    });
});
