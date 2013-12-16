$(document).ready(function() {
    // Smart Wizard 	
    $('#wizard').smartWizard({transitionEffect: 'slideleft', onLeaveStep: leaveAStepCallback, onFinish: onFinishCallback, enableFinishButton: true});
    $(".dice_carac").click(function() {
        $(this).prop('disabled', true);
        var dice = Math.floor((Math.random() * 6) + 1) + Math.floor((Math.random() * 6) + 1) + 6;
        $(this).parent().siblings().filter(":first").val(dice);
        $(this).parent().parent().parent().addClass('has-success');
    });

    $(document).on('keyup', '.comp, .armes', function() {
        var tot = 250;
        $('.comp, .armes').each(function() {
            var montant = $(this).val();
            if(montant === ''){
                montant = 0;
            }
            var ajout = parseInt(montant);
            if (!isNaN(ajout)) {
                tot -= ajout;
                $('#totPts').text(tot);
                var base = parseInt($(this).parent().siblings("td:eq(1)").html());
                var saisi = ajout + base;
                $(this).parent().siblings("td:last").html('<b>' + saisi + '%</b>');
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
        $('#wizard').smartWizard('showMessage', 'Please correct the errors in the steps and continue');
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
    var caracs = ['force', 'consti', 'taille', 'intell', 'pouvoir', 'dexte', 'appa'];
    for (var key in caracs) {
        var carac = $('#' + caracs[key]).val();
        if (!carac && carac.length <= 0) {
            isValid = false;
            $('#' + caracs[key]).parent().parent().addClass('has-error');
        } else {
            $('#' + caracs[key]).parent().parent().addClass('has-success');
        }
    }
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
    }
    return isValid;
}
