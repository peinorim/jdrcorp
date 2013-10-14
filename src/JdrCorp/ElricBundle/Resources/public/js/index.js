$(document).ready(function() {
    // Smart Wizard 	
    $('#wizard').smartWizard({transitionEffect: 'slideleft', onLeaveStep: leaveAStepCallback, onFinish: onFinishCallback, enableFinishButton: true});
    $(".dice_carac").click(function() {
        $(this).prop('disabled', true);
        var dice = Math.floor((Math.random() * 6) + 1) + Math.floor((Math.random() * 6) + 1) + 6;
        $(this).parent().siblings().filter(":first").val(dice);
        $(this).parent().parent().parent().addClass('has-success');
    });
});
function leaveAStepCallback(obj) {
    var step_num = obj.attr('rel');
    return validateSteps(step_num);
}
function onFinishCallback() {
    if (validateAllSteps()) {
        $('#wizard').smartWizard('showMessage', 'Finish Clicked');
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

    if (!isStepValid) {
        $('#wizard').smartWizard('showMessage', 'Please correct the errors in the steps and continue');
    }
    return isStepValid;
}


function validateSteps(step) {
    var isStepValid = true;
    // validate step 1
    if (parseInt(step) === 1) {
        if (validateStep1() === false) {
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
    } else{
        $('#age').parent().parent().addClass('has-success');
    }
    if($('#nom').val()===''){
        $('#nom').parent().parent().addClass('has-error');
        isValid = false;
    } else{
        $('#nom').parent().parent().addClass('has-success');
    }
    return isValid;
}