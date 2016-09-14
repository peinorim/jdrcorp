$(function () {
    $(".option.res").parent().click(function (event) {
        $("#pv").text(parseInt($(this).text()) * 2);
    });

    $(".option-type").parent().click(function (event) {
        $(this).button('toggle');

        var artId = parseInt($(this).attr("data-art"));
        var artAttrib = 0;

        $(".active.artVal[data-art='" + artId + "']").each(function (index) {

            var point = parseInt($(this).parent().parent().find(".caracVal.active").text());
            if (!isNaN(point)) {
                artAttrib += point;
            }
        });

        if (artAttrib !== 0) {
            if ($(this).text().trim() === "Art Guildien") {
                $("#carac-" + artId).text(parseInt(artAttrib / 2));
            } else {
                $("#carac-" + artId).text(parseInt(artAttrib / 3));
            }
        }

    });


});