var FPF_Condition_Builder=function(){function e(e){this.wrapper=e,this.init()}var t=e.prototype;return t.init=function(){this.initEvents(),this.initLoadConditions()},t.initEvents=function(){document.addEventListener("click",function(e){this.addConditionEvent(e),this.deleteConditionEvent(e),this.deleteGroupConditionEvent(e)}.bind(this)),document.addEventListener("afterConditionSettings",function(e){this.loadConditionAssets(e.detail.condition_name,e.detail.element)}.bind(this)),document.addEventListener("onFPFSearchDropdownSingleValueChange",function(e){this.handleConditionSelector(e)}.bind(this)),document.addEventListener("onFPFSearchDropdownSingleValueRemove",function(e){this.onConditionReset(e)}.bind(this))},t.onConditionReset=function(e){var t=e.detail.element.closest(".fpf-conditionbuilder-item"),i=document.createElement("div");i.classList.add("select-condition-message"),i.innerHTML=fpf_js_object.FPF_CB_SELECT_CONDITION_GET_STARTED;var n=t.querySelector(".fpf-conditionbuilder-item-content");n.innerHTML="",n.appendChild(i)},t.initLoadConditions=function(){this.wrapper.classList.add("loading");var e=this.wrapper.previousElementSibling.value;if(e){var t={data:e,plugin:this.wrapper.dataset.plugin,name:this.wrapper.previousElementSibling.getAttribute("name"),exclude_rules_pro:"1"===this.wrapper.dataset.exclude_rules_pro,include_rules:this.wrapper.dataset.includeRules,exclude_rules:this.wrapper.dataset.excludeRules},i=this;this.call("init_load",t,function(e){var t=i.wrapper.querySelector(".fpf-conditionbuilder-initial-message");t&&t.remove(),i.wrapper=i.wrapper.closest(".fpf-conditionbuilder-wrapper").querySelector(".fpf-conditionbuilder"),i.wrapper.querySelector(".fpf-conditionbuilder-groups").innerHTML=e,i.getValidRules().forEach(function(e){i.loadConditionAssets(e.value,e.closest(".fpf-conditionbuilder-item"))}),i.wrapper.classList.remove("loading"),i.wrapper.classList.add("init-load-done")})}else this.wrapper.querySelector(".fpf-cb-add-new-group").click()},t.loadConditionAssets=function(e,t){var i=fpf_js_object.media_url;switch(e){case"Date\\Date":case"Date\\Time":case"EDD\\LastPurchasedDate":case"WooCommerce\\LastPurchasedDate":FPF_Helper.loadStyleSheet(i+"public/css/flatpickr.min.css"),FPF_Helper.loadStyleSheet(i+"admin/css/fpf_datetimepicker.css"),FPF_Helper.loadScript(i+"public/js/flatpickr.min.js",function(){FPF_Helper.loadScript(i+"admin/js/fpf_datepicker.js",function(){},!0)});break;case"PHP":FPF_Helper.loadScript(i+"admin/js/fpf_textarea.js",function(){"function"==typeof FPF_Textarea&&new FPF_Textarea(t).init()});break;case"Geo\\City":case"Geo\\Region":case"URL":case"IP":case"Referrer":FPF_Helper.loadStyleSheet(i+"admin/css/fpf_repeater.css"),FPF_Helper.loadScript(i+"admin/js/sortable.min.js",function(){FPF_Helper.loadScript(i+"admin/js/fpf_repeater.js",function(){"function"==typeof FPF_Repeater&&FPF_Repeater.initDragManager()})})}},t.handleConditionSelector=function(e){if(e.detail.container.classList.contains("fpf-conditions-field")){var t=e.detail.key,i=e.detail.element;if(i.classList.contains("prevent-click")||i.classList.contains("is-pro"))e.preventDefault();else{var n=i.closest(".fpf-conditionbuilder-item");n.classList.add("fpf-cb-loading");this.loadConditionSettings(n,t,function(){n.classList.remove("fpf-cb-loading")})}}},t.loadConditionSettings=function(i,n,o){var e=parseInt(i.closest(".fpf-conditionbuilder-group").dataset.key),t=parseInt(i.closest(".fpf-conditionbuilder-item").dataset.key),r={plugin:this.wrapper.dataset.plugin,conditionItemGroup:this.wrapper.previousElementSibling.getAttribute("name")+"["+e+"][rules]["+t+"]",exclude_rules:this.wrapper.dataset.excludeRules,name:n};this.call("options",r,function(e){e=""!==e?e:'<div class="select-condition-message">'+fpf_js_object.FPF_CB_SELECT_CONDITION_GET_STARTED+"</div>",i.querySelector(".fpf-conditionbuilder-item-content").innerHTML=e;var t=new CustomEvent("afterConditionSettings",{detail:{element:i,condition_name:n}});document.dispatchEvent(t),o&&o()})},t.deleteGroupConditionEvent=function(e){if(e.target.closest(".removeGroupCondition")){e.preventDefault();var t=e.target.closest(".fpf-conditionbuilder-group");this.getValidRules(t).length&&!confirm(fpf_js_object.FPF_ARE_YOU_SURE_YOU_WANT_TO_DELETE_THIS_ITEM)||(1==this.getTotalConditionGroups()?(t.querySelectorAll(".fpf-conditionbuilder-item:not(:first-child)").forEach(function(e){e.remove()}),this.resetCondition(t.querySelector(".fpf-conditionbuilder-item"))):t.remove())}},t.deleteConditionEvent=function(e){var t=e.target.closest(".fpf-cb-remove-condition");if(t){e.preventDefault();var i=t.closest(".fpf-conditionbuilder-item");this.getSelectedCondition(i)&&!confirm(fpf_js_object.FPF_ARE_YOU_SURE_YOU_WANT_TO_DELETE_THIS_ITEM)||(1!=this.getTotalConditionItems()?this.deleteCondition(i):this.resetCondition(i))}},t.getSelectedCondition=function(e){var t=e.querySelector(".fpf-conditions-field .fpf-selected-dropdown-value");if(t)return t.value},t.deleteCondition=function(e){var t=e.closest(".fpf-conditionbuilder-group");e.remove(),0==t.querySelectorAll(".fpf-conditionbuilder-item").length&&t.remove()},t.resetCondition=function(e){e.querySelector(".fpf-searchdropdown-remove-single-value-button").click();var t=document.createElement("div");t.classList.add("select-condition-message"),t.innerHTML=fpf_js_object.FPF_CB_SELECT_CONDITION_GET_STARTED,e.querySelector(".fpf-conditionbuilder-item-content").appendChild(t)},t.getTotalConditionGroups=function(){return this.wrapper.querySelectorAll(".fpf-conditionbuilder-group").length},t.getValidRules=function(e){void 0===e&&(e=this.wrapper);var t=e.querySelectorAll(".fpf-conditions-field .fpf-selected-dropdown-value"),i=[];return t.forEach(function(e){""!==e.value&&i.push(e)}),i},t.getTotalConditionItems=function(){return this.wrapper.querySelectorAll(".fpf-conditionbuilder-item").length},t.addConditionEvent=function(e){var t=e.target.closest(".fpf-cb-add-new-group");if(t){e.preventDefault();var i=t.closest(".fpf-conditionbuilder-item")||t,n=i.closest(".fpf-conditionbuilder-group"),o=groupKey=0;o=this.addingNewGroup(i)?(groupKey=this.findHighestGroupKey()+1,0):(groupKey=parseInt(n.dataset.key),this.findHighestGroupItemKey(n)+1),i.classList.add("fpf-cb-loading");var r=this;this.addCondition(i,this.wrapper.previousElementSibling.getAttribute("name"),groupKey,o,function(){i.classList.remove("fpf-cb-loading"),r.wrapper.classList.remove("loading"),r.wrapper.classList.add("init-load-done")})}},t.findHighestGroupKey=function(){var e=this.wrapper.querySelectorAll(".fpf-conditionbuilder-group[data-key]");return 0===e.length?0:Math.max.apply(Math,Array.from(e).map(function(e){return parseInt(e.dataset.key)}))},t.findHighestGroupItemKey=function(e){return Math.max.apply(Math,Array.from(e.querySelectorAll(".fpf-conditionbuilder-item[data-key]")).map(function(e){return parseInt(e.dataset.key)}))},t.addCondition=function(n,e,t,o,r){var a=this.addingNewGroup(n),d={conditionItemGroup:e,groupKey:t,conditionKey:o,exclude_rules_pro:"1"===this.wrapper.dataset.exclude_rules_pro,include_rules:this.wrapper.dataset.includeRules,exclude_rules:this.wrapper.dataset.excludeRules,addingNewGroup:a},s=this;this.call("add",d,function(e){var t=document.createElement("div");t.innerHTML=e;var i=s.wrapper.querySelector(".fpf-conditionbuilder-initial-message");i&&i.remove(),a?(s.wrapper.querySelector(".fpf-conditionbuilder-groups").insertAdjacentHTML("beforeend",t.innerHTML),s.wrapper.setAttribute("data-max-index",d.groupKey)):(n.closest(".item-group-footer")?n.closest(".fpf-conditionbuilder-group").querySelector(".fpf-conditionbuilder-items").insertAdjacentHTML("beforeend",t.innerHTML):n.insertAdjacentHTML("afterend",t.innerHTML),n.closest(".fpf-conditionbuilder-group").setAttribute("data-max-index",o)),r&&r()})},t.addingNewGroup=function(e){return!!e&&!e.closest(".fpf-conditionbuilder-group")},t.call=function(e,t,i){var n=this,o=new FormData;o.append("nonce",fpf_js_object.nonce),o.append("action","fpf_conditionbuilder_"+e),o.append("data",JSON.stringify(t)),fetch(fpf_js_object.ajax_url,{method:"POST",body:o}).then(function(e){return e.text()}).then(function(e){e=e.replace(/data-showon-initialised/g,""),i(e),new FPF_Conditionize(n.wrapper)}).catch(function(e){alert(e)})},e}(),FPF_Condition_Builder_Loader=function(){function e(){this.init()}return e.prototype.init=function(){!function(){if(window.IntersectionObserver){var t=new IntersectionObserver(function(e,t){e.forEach(function(e){e.isIntersecting&&(new FPF_Condition_Builder(e.target),t.unobserve(e.target))})},{rootMargin:"0px 0px 0px 0px"});document.querySelectorAll("div.fpf-conditionbuilder").forEach(function(e){t.observe(e)})}}()},e}();!function(){"use strict";document.addEventListener("DOMContentLoaded",function(){new FPF_Condition_Builder_Loader})}(window);

