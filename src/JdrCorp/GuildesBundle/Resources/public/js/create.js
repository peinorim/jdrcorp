$(document).ready(function() {

    // Smart Wizard 	
    $('#wizard').smartWizard({transitionEffect: 'slideleft', onLeaveStep: leaveAStepCallback, onFinish: onFinishCallback, enableFinishButton: true});

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
        $(".carac").each(function() {
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
});