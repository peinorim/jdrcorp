$(function () {

    $("#removeFile").on("click", function () {
        $('#avatar').val('');
    });
    // Smart Wizard 	
    $('#wizard').smartWizard({
        transitionEffect: 'slideleft',
        onLeaveStep: leaveAStepCallback,
        onFinish: onFinishCallback,
        enableFinishButton: true
    });
    $(".dice_carac").click(function () {
        $(this).prop('disabled', true);
        var dice = Math.floor((Math.random() * 6) + 1) + Math.floor((Math.random() * 6) + 1) + 6;
        $(this).parent().siblings().filter(":first").val(dice);
        $(this).parent().parent().parent().addClass('has-success');
    });
    $(".carac").keyup(function () {
        $(this).prop("readonly", true);
        $(this).val('');
    });

    $(".param").click(function () {
        $(this).children(':input').attr('checked', 'checked');
        $(this).siblings().children(':input').removeAttr('checked');
    });

    $(document).on('keyup', '.comp, .armes', function () {
        var tot = 250;
        $('.comp, .armes').each(function () {
            var montant = $(this).val();
            if (montant === '') {
                montant = 0;
            }
            var ajout = parseInt(montant);
            if (!isNaN(ajout)) {
                tot -= ajout;
                $('#totPts').text(tot);
                var base = parseInt($(this).parent().parent().siblings("td:eq(1)").html());
                var saisi = ajout + base;
                $(this).parent().parent().siblings("td:last").html('<b>' + saisi + '%</b>');
                if (tot < 0) {
                    $('#totPts').parent().addClass('alert-danger');
                    $('#totPts').parent().removeClass('alert-warning');
                } else if (tot === 0) {
                    $('#totPts').parent().removeClass('alert-danger');
                    $('#totPts').parent().removeClass('alert-warning');
                    $('#totPts').parent().addClass('alert-success');
                } else {
                    $('#totPts').parent().removeClass('alert-danger');
                    $('#totPts').parent().addClass('alert-warning');
                }
            }
        });
    });

    $("#metiers").change(function () {
        var id = parseInt($(this).val());
        var url = Routing.generate('Elric_Metier_Comp', {id: id});
        if (id !== 0) {
            $.post(url, function (response) {
                $('#compMetiers').html(response);
            });
        } else {
            $('#compMetiers').html('');
        }
    });

    $('#fos_user_registration_register').on('submit', function (e) {
        if ($("#fos_user_registration_form_username").val() === "username") {
            if ($("#fos_user_registration_form_email").val() !== "") {
                $("#fos_user_registration_form_username").val($("#fos_user_registration_form_email").val());
            } else {
                return false;
            }
        }
        $(this).submit();
    });
});
function leaveAStepCallback(obj) {
    var step_num = obj.attr('rel');
    return validateSteps(step_num);
}
function onFinishCallback() {
    if (validateAllSteps()) {
        $('#create').submit();
    }
}
function validateAllSteps() {
    var isStepValid = true;

    if (validateStep1() === false) {
        isStepValid = false;
        $('#wizard').smartWizard('setError', {stepnum: 1, iserror: true});
    } else {
        $('#wizard').smartWizard('setError', {stepnum: 1, iserror: false});
    }

    if (validateStep2() === false) {
        isStepValid = false;
        $('#wizard').smartWizard('setError', {stepnum: 2, iserror: true});
    } else {
        $('#wizard').smartWizard('setError', {stepnum: 2, iserror: false});
    }

    if (!isStepValid) {
        $('#wizard').smartWizard('showMessage', 'Veuillez corriger les erreurs pour chaque étape avant de continuer svp.');
    }
    return isStepValid;
}


function validateSteps(step) {
    var isStepValid = true;
    if (parseInt(step) === 1) {
        if (validateStep1() === false) {
            isStepValid = false;
            //$('#wizard').smartWizard('showMessage', "Veuillez corriger les erreurs de l'étape n°" + step + " svp.");
            $('#wizard').smartWizard('setError', {stepnum: step, iserror: true});
        } else {
            $('#wizard').smartWizard('setError', {stepnum: step, iserror: false});
        }
    } else if (parseInt(step) === 2) {
        if (validateStep2() === false) {
            isStepValid = false;
            //$('#wizard').smartWizard('showMessage', "Veuillez corriger les erreurs de l'étape n°" + step + " svp.");
            $('#wizard').smartWizard('setError', {stepnum: step, iserror: true});
        } else {
            $('#wizard').smartWizard('setError', {stepnum: step, iserror: false});
        }
    }
    return isStepValid;
}

function validateStep1() {
    var isValid = true;
    $(".carac").each(function () {
        var carac = $(this).val();
        if (!carac && carac.length <= 0) {
            isValid = false;
            $(this).parent().parent().removeClass('has-success');
            $(this).parent().parent().addClass('has-error');
        } else {
            $(this).parent().parent().removeClass('has-error');
            $(this).parent().parent().addClass('has-success');
        }
    });
    if (isNaN($('#age').val()) || $('#age').val() === '' || parseInt($('#age').val()) <= 0) {
        $('#age').parent().parent().addClass('has-error');
        isValid = false;
    } else {
        $('#age').parent().parent().addClass('has-success');
    }
    if ($('#nom').val() === '') {
        $('#nom').parent().parent().addClass('has-error');
        isValid = false;
    } else {
        $('#nom').parent().parent().addClass('has-success');
    }
    var file = $('#avatar').val();
    var exts = ['jpg', 'png', 'jpeg', 'bmp'];
    if (file) {
        // split file name at dot
        var get_ext = file.split('.');
        // reverse name to check extension
        get_ext = get_ext.reverse();
        // check file type is valid as given in 'exts' array
        if ($.inArray(get_ext[0].toLowerCase(), exts) > -1) {
            var size = $('#avatar')[0].files[0].size;
            if (size > 50000) {
                $('.label-avatar').text("L'image chargée est trop lourde (50ko max).");
                isValid = false;
            } else {
                $('.label-avatar').text("Emblème / Portrait");
            }
        } else {
            $('.label-avatar').text("Type de fichier incorrect.");
            isValid = false;
        }
    }
    return isValid;
}

function validateStep2() {
    var isValid = true;
    if (parseInt($('#metiers').val()) === 0) {
        isValid = false;
        $('#metiers').parent().addClass('has-error');
    } else {
        $('#metiers').parent().removeClass('has-error');
        $('#nom').parent().parent().addClass('has-success');
    }
    if (parseInt($('#totPts').text()) !== 0) {
        isValid = false;
        $('#totPts').parent().addClass('alert-danger');
        $('#totPts').parent().removeClass('alert-warning');
    }
    return isValid;
}
