$(document).ready(function () {

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

    $(document).on('change', '#metierSupp', function () {
        if (!$("#comp_" + $(this).val()).length) {
            $('#compAcademie tbody').append('<tr><td class="col-md-4"><button type="button" class="btn btn-primary removeComp"><span class="glyphicon glyphicon-remove"></span></button><span style="padding:6px 12px;">' + $(this).find(":selected").text() + '</span></td><td class="col-md-4">' + "<select class='form-control compAca' id=comp_" + $(this).val() + "><option>NC</option><option>N</option><option>I</option><option>E</option></select>" + '</td></tr>');
        }
    });

    $(document).on('change', '#fort', function () {
        var fort = parseInt($("#fort").val());
        $(".radArmes").each(function () {
            $(this).prop('checked', false);
            if (fort < parseInt($("#fortReq_" + $(this).val()).text())) {
                $(this).prop('disabled', true);
            } else {
                $(this).prop('disabled', false);
            }
        });
    });

    $(document).on('change', '.compBase', function () {
        var ptsBase = 0;
        $(".compBase").each(function () {
            if ($(this).val() === "N") {
                ptsBase++;
            } else if ($(this).val() === "I") {
                ptsBase += 3;
            } else if ($(this).val() === "E") {
                ptsBase += 7;
            }
        });
        $("#ptsBase").text(ptsBase);
    });

    $(document).on('change', '.compAca', function () {
        var ptsAca = 0;
        $(".compAca").each(function () {
            if ($(this).val() === "N") {
                ptsAca += 2;
            } else if ($(this).val() === "I") {
                ptsAca += 6;
            } else if ($(this).val() === "E") {
                ptsAca += 14;
            }
        });
        $("#ptsAca").text(ptsAca);
    });

    $(document).on('click', '.removeComp', function () {
        $(this).parent().parent().remove();
    });

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