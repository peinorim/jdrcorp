/*
 * SmartWizard 3.3.1 plugin
 * jQuery Wizard control Plugin
 * by Dipu
 *
 * Refactored and extended:
 * https://github.com/mstratman/jQuery-Smart-Wizard
 *
 * Original URLs:
 * http://www.techlaboratory.net
 * http://tech-laboratory.blogspot.com
 */

function SmartWizard(e,t){this.target=e;this.options=t;this.curStepIdx=t.selected;this.steps=$(e).children("ul").children("li").children("a");this.contentWidth=0;this.msgBox=$('<div class="msgBox"><div class="content"></div><a href="#" class="close">X</a></div>');this.elmStepContainer=$("<div></div>").addClass("stepContainer");this.loader=$("<div>Loading</div>").addClass("loader");this.buttons={next:$("<a>"+t.labelNext+"</a>").attr("href","#").addClass("buttonNext"),previous:$("<a>"+t.labelPrevious+"</a>").attr("href","#").addClass("buttonPrevious"),finish:$("<a>"+t.labelFinish+"</a>").attr("href","#").addClass("buttonFinish")};var n=function(t){var n=$("<div></div>").addClass("actionBar");n.append(t.msgBox);$(".close",t.msgBox).click(function(){t.msgBox.fadeOut("normal");return false});var i=t.target.children("div");if(t.target.children("ul").length==0){var o=$("<ul/>");e.prepend(o);i.each(function(e,t){var n=$(t).first().children(".StepTitle").text();var r=$(t).attr("id");if(r==undefined){r="step-"+(e+1);$(t).attr("id",r)}var i=$("<span/>").addClass("stepDesc").text(n);var s=$("<li></li>").append($("<a></a>").attr("href","#"+r).append($("<label></label>").addClass("stepNumber").text(e+1)).append(i));o.append(s)});t.steps=$(e).children("ul").children("li").children("a")}t.target.children("ul").addClass("anchor");i.addClass("content");if(t.options.errorSteps&&t.options.errorSteps.length>0){$.each(t.options.errorSteps,function(e,n){t.setError({stepnum:n,iserror:true})})}t.elmStepContainer.append(i);n.append(t.loader);t.target.append(t.elmStepContainer);if(t.options.includeFinishButton){n.append(t.buttons.finish)}n.append(t.buttons.next).append(t.buttons.previous);t.target.append(n);this.contentWidth=t.elmStepContainer.width();$(t.buttons.next).click(function(){t.goForward();return false});$(t.buttons.previous).click(function(){t.goBackward();return false});$(t.buttons.finish).click(function(){if(!$(this).hasClass("buttonDisabled")){if($.isFunction(t.options.onFinish)){var e={fromStep:t.curStepIdx+1};if(!t.options.onFinish.call(this,$(t.steps),e)){return false}}else{var n=t.target.parents("form");if(n&&n.length){n.submit()}}}return false});$(t.steps).bind("click",function(e){if(t.steps.index(this)==t.curStepIdx){return false}var n=t.steps.index(this);var r=t.steps.eq(n).attr("isDone")-0;if(r==1){s(t,n)}return false});if(t.options.keyNavigation){$(document).keyup(function(e){if(e.which==39){t.goForward()}else if(e.which==37){t.goBackward()}})}r(t);s(t,t.curStepIdx)};var r=function(e){if(!e.options.enableAllSteps){$(e.steps,e.target).removeClass("selected").removeClass("done").addClass("disabled");$(e.steps,e.target).attr("isDone",0)}else{$(e.steps,e.target).removeClass("selected").removeClass("disabled").addClass("done");$(e.steps,e.target).attr("isDone",1)}$(e.steps,e.target).each(function(t){$($(this).attr("href").replace(/^.+#/,"#"),e.target).hide();$(this).attr("rel",t+1)})};var i=function(e,t){return $($(t,e.target).attr("href").replace(/^.+#/,"#"),e.target)};var s=function(e,t){var n=e.steps.eq(t);var r=e.options.contentURL;var s=e.options.contentURLData;var u=n.data("hasContent");var a=t+1;if(r&&r.length>0){if(e.options.contentCache&&u){o(e,t)}else{var f={url:r,type:e.options.ajaxType,data:{step_number:a},dataType:"text",beforeSend:function(){e.loader.show()},error:function(){e.loader.hide()},success:function(r){e.loader.hide();if(r&&r.length>0){n.data("hasContent",true);i(e,n).html(r);o(e,t)}}};if(s){f=$.extend(f,s(a))}$.ajax(f)}}else{o(e,t)}};var o=function(e,t){var n=e.steps.eq(t);var r=e.steps.eq(e.curStepIdx);if(t!=e.curStepIdx){if($.isFunction(e.options.onLeaveStep)){var s={fromStep:e.curStepIdx+1,toStep:t+1};if(!e.options.onLeaveStep.call(e,$(r),s)){return false}}}e.elmStepContainer.height(i(e,n).outerHeight());var o=e.curStepIdx;e.curStepIdx=t;if(e.options.transitionEffect=="slide"){i(e,r).slideUp("fast",function(t){i(e,n).slideDown("fast");u(e,r,n)})}else if(e.options.transitionEffect=="fade"){i(e,r).fadeOut("fast",function(t){i(e,n).fadeIn("fast");u(e,r,n)})}else if(e.options.transitionEffect=="slideleft"){var a=0;var f=null;var a=null;var l=0;if(t>o){f=e.elmStepContainer.width()+10;nextElmLeft2=0;l=0-i(e,r).outerWidth()}else{f=0-i(e,n).outerWidth()+20;nextElmLeft2=0;l=10+i(e,r).outerWidth()}if(t==o){f=$($(n,e.target).attr("href"),e.target).outerWidth()+20;nextElmLeft2=0;l=0-$($(r,e.target).attr("href"),e.target).outerWidth()}else{$($(r,e.target).attr("href"),e.target).animate({left:l},"fast",function(t){$($(r,e.target).attr("href"),e.target).hide()})}i(e,n).css("left",f).show().animate({left:nextElmLeft2},"fast",function(t){u(e,r,n)})}else{i(e,r).hide();i(e,n).show();u(e,r,n)}return true};var u=function(e,t,n){$(t,e.target).removeClass("selected");$(t,e.target).addClass("done");$(n,e.target).removeClass("disabled");$(n,e.target).removeClass("done");$(n,e.target).addClass("selected");$(n,e.target).attr("isDone",1);a(e);if($.isFunction(e.options.onShowStep)){var r={fromStep:parseInt($(t).attr("rel")),toStep:parseInt($(n).attr("rel"))};if(!e.options.onShowStep.call(this,$(n),r)){return false}}if(e.options.noForwardJumping){for(var i=e.curStepIdx+2;i<=e.steps.length;i++){e.disableStep(i)}}};var a=function(e){if(!e.options.cycleSteps){if(0>=e.curStepIdx){$(e.buttons.previous).addClass("buttonDisabled");if(e.options.hideButtonsOnDisabled){$(e.buttons.previous).hide()}}else{$(e.buttons.previous).removeClass("buttonDisabled");if(e.options.hideButtonsOnDisabled){$(e.buttons.previous).show()}}if(e.steps.length-1<=e.curStepIdx){$(e.buttons.next).addClass("buttonDisabled");if(e.options.hideButtonsOnDisabled){$(e.buttons.next).hide()}}else{$(e.buttons.next).removeClass("buttonDisabled");if(e.options.hideButtonsOnDisabled){$(e.buttons.next).show()}}}e.enableFinish(e.options.enableFinishButton)};SmartWizard.prototype.goForward=function(){var e=this.curStepIdx+1;if(this.steps.length<=e){if(!this.options.cycleSteps){return false}e=0}s(this,e)};SmartWizard.prototype.goBackward=function(){var e=this.curStepIdx-1;if(0>e){if(!this.options.cycleSteps){return false}e=this.steps.length-1}s(this,e)};SmartWizard.prototype.goToStep=function(e){var t=e-1;if(t>=0&&t<this.steps.length){s(this,t)}};SmartWizard.prototype.enableStep=function(e){var t=e-1;if(t==this.curStepIdx||t<0||t>=this.steps.length){return false}var n=this.steps.eq(t);$(n,this.target).attr("isDone",1);$(n,this.target).removeClass("disabled").removeClass("selected").addClass("done")};SmartWizard.prototype.disableStep=function(e){var t=e-1;if(t==this.curStepIdx||t<0||t>=this.steps.length){return false}var n=this.steps.eq(t);$(n,this.target).attr("isDone",0);$(n,this.target).removeClass("done").removeClass("selected").addClass("disabled")};SmartWizard.prototype.currentStep=function(){return this.curStepIdx+1};SmartWizard.prototype.showMessage=function(e){$(".content",this.msgBox).html(e);this.msgBox.show()};SmartWizard.prototype.enableFinish=function(e){this.options.enableFinishButton=e;if(this.options.includeFinishButton){if(!this.steps.hasClass("disabled")||this.options.enableFinishButton){$(this.buttons.finish).removeClass("buttonDisabled");if(this.options.hideButtonsOnDisabled){$(this.buttons.finish).show()}}else{$(this.buttons.finish).addClass("buttonDisabled");if(this.options.hideButtonsOnDisabled){$(this.buttons.finish).hide()}}}return this.options.enableFinishButton};SmartWizard.prototype.hideMessage=function(){this.msgBox.fadeOut("normal")};SmartWizard.prototype.showError=function(e){this.setError(e,true)};SmartWizard.prototype.hideError=function(e){this.setError(e,false)};SmartWizard.prototype.setError=function(e,t){if(typeof e=="object"){t=e.iserror;e=e.stepnum}if(t){$(this.steps.eq(e-1),this.target).addClass("error")}else{$(this.steps.eq(e-1),this.target).removeClass("error")}};SmartWizard.prototype.fixHeight=function(){var e=0;var t=this.steps.eq(this.curStepIdx);var n=i(this,t);n.children().each(function(){if($(this).is(":visible")){e+=$(this).outerHeight(true)}});n.height(e+5);this.elmStepContainer.height(e+20)};n(this)}(function(e){e.fn.smartWizard=function(t){var n=arguments;var r=undefined;var i=this.each(function(){var i=e(this).data("smartWizard");if(typeof t=="object"||!t||!i){var s=e.extend({},e.fn.smartWizard.defaults,t||{});if(!i){i=new SmartWizard(e(this),s);e(this).data("smartWizard",i)}}else{if(typeof SmartWizard.prototype[t]=="function"){r=SmartWizard.prototype[t].apply(i,Array.prototype.slice.call(n,1));return r}else{e.error("Method "+t+" does not exist on jQuery.smartWizard")}}});if(r===undefined){return i}else{return r}};e.fn.smartWizard.defaults={selected:0,keyNavigation:true,enableAllSteps:false,transitionEffect:"fade",contentURL:null,contentCache:true,cycleSteps:false,enableFinishButton:false,hideButtonsOnDisabled:false,errorSteps:[],labelNext:"Next",labelPrevious:"Previous",labelFinish:"Finish",noForwardJumping:false,ajaxType:"POST",onLeaveStep:null,onShowStep:null,onFinish:null,includeFinishButton:true}})(jQuery)