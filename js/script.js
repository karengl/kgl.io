document.getElementById("nav01").innerHTML =
"<ul id='menu'>" +
"<li><a href='index.html'>Home</a></li>" +
"<li><a href='art.html'>Portfolio</a></li>" +
"</ul>";

function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    document.getElementById("img01").alt = element.alt;
    document.getElementById("caption").innerHTML = element.alt;
}

var modal = document.getElementById("modal01");
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

$(function () {
    var filterList = {
        init: function () {
            $('#portfoliolist').mixItUp({
                    selectors: {
                target: '.portfolio',
                filter: '.filter'
                },
                load: {
                    filter: '.3D'
                }
            });
        }
    };

    filterList.init();
});

$(function () {
    $('.droptext').on('click', function () {
        $(this).parent().find('.dropdetail').slideToggle(300);
    });
});
