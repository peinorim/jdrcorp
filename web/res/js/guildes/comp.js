$(function() {

    $("#comp_path").addClass('active');

    $(".comp li").click(function (event) {
        event.preventDefault();
        $("li.active").each(function (index) {
            $(this).removeClass('active');
        });
        $(this).addClass('active');
        var type = $(this).attr('id').split("_")[0];
        var id = parseInt($(this).attr('id').split("_")[1]);
        if (id !== 0) {
            var url = Routing.generate('Guildes_links', {id: id, type: type});
            $.post(url,
                function (response) {
                    if (response['comp'] !== null) {
                        for (comp_id in response['comp']) {
                            $('#comp_' + comp_id).addClass('active');
                        }
                    } else if (response['metier'] !== null) {
                        for (metier_id in response['metier']) {
                            $('#metier_' + metier_id).addClass('active');
                        }
                    } else if (response['compCarac'] !== null) {
                        for (comp_id in response['compCarac']) {
                            $('#comp_' + comp_id).addClass('active');
                        }
                    } else if (response['compChap'] !== null) {
                        for (chap_id in response['compChap']) {
                            $('#comp_' + chap_id).addClass('active');
                        }
                    }
                });
        }
    });

    $("#all_comp li, #all_compcpg li").mouseenter(function () {
        var carac_id = parseInt($(this).attr('data-carac'));
        var chap_id = parseInt($(this).attr('data-chap'));
        $('#carac_' + carac_id).addClass('active');
        $('#chap_' + chap_id).addClass('active');
    });
    $("#all_comp li, #all_compcpg li").mouseleave(function () {
        var carac_id = parseInt($(this).attr('data-carac'));
        var chap_id = parseInt($(this).attr('data-chap'));
        $('#carac_' + carac_id).removeClass('active');
        $('#chap_' + chap_id).removeClass('active');
    });
});