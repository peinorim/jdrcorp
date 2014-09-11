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
        if (validateStep3() === false) {
            isStepValid = false;
            $('#wizard').smartWizard('setError', {stepnum: 3, iserror: true});
        } else {
            $('#wizard').smartWizard('setError', {stepnum: 3, iserror: false});
        }
        if (validateStep4() === false) {
            isStepValid = false;
            $('#wizard').smartWizard('setError', {stepnum: 4, iserror: true});
        } else {
            $('#wizard').smartWizard('setError', {stepnum: 4, iserror: false});
        }
        if (validateStep5() === false) {
            isStepValid = false;
            $('#wizard').smartWizard('setError', {stepnum: 5, iserror: true});
        } else {
            $('#wizard').smartWizard('setError', {stepnum: 5, iserror: false});
        }
        if (validateStep6() === false) {
            isStepValid = false;
            $('#wizard').smartWizard('setError', {stepnum: 6, iserror: true});
        } else {
            $('#wizard').smartWizard('setError', {stepnum: 6, iserror: false});
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
        } else if (parseInt(step) === 3) {
            if (validateStep3() === false) {
                isStepValid = false;
                //$('#wizard').smartWizard('showMessage', "Veuillez corriger les erreurs de l'étape n°" + step + " svp.");
                $('#wizard').smartWizard('setError', {stepnum: step, iserror: true});
            } else {
                $('#wizard').smartWizard('setError', {stepnum: step, iserror: false});
            }
        } else if (parseInt(step) === 4) {
            if (validateStep4() === false) {
                isStepValid = false;
                //$('#wizard').smartWizard('showMessage', "Veuillez corriger les erreurs de l'étape n°" + step + " svp.");
                $('#wizard').smartWizard('setError', {stepnum: step, iserror: true});
            } else {
                $('#wizard').smartWizard('setError', {stepnum: step, iserror: false});
            }
        } else if (parseInt(step) === 5) {
            if (validateStep5() === false) {
                isStepValid = false;
                //$('#wizard').smartWizard('showMessage', "Veuillez corriger les erreurs de l'étape n°" + step + " svp.");
                $('#wizard').smartWizard('setError', {stepnum: step, iserror: true});
            } else {
                $('#wizard').smartWizard('setError', {stepnum: step, iserror: false});
            }
        } else if (parseInt(step) === 6) {
            if (validateStep6() === false) {
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
        
        if ($('#maison').val() === '') {
            $('#maison').parent().parent().addClass('has-error');
            isValid = false;
        } else {
            $('#maison').parent().parent().addClass('has-success');
        }

        return isValid;
    }

    function validateStep2() {
        var isValid = true;
        return isValid;
    }
    function validateStep2() {
        var isValid = true;
        return isValid;
    }
    function validateStep3() {
        var isValid = true;
        return isValid;
    }
    function validateStep4() {
        var isValid = true;
        return isValid;
    }
    function validateStep5() {
        var isValid = true;
        return isValid;
    }
    function validateStep6() {
        var isValid = true;
        return isValid;
    }
});