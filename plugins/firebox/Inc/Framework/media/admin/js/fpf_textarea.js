var FPF_Textarea=function(){function t(t){this.parent=t||document,this.textareaClass=".fpf-field-control.textarea",this.init()}var e=t.prototype;return e.init=function(){this.textareasExist()&&this.initTextareas()},e.initTextareas=function(){this.parent.querySelectorAll(this.textareaClass).forEach(function(t){var r=t.querySelector(".fpf-control-input-item.textarea"),e=r.getAttribute("data-mode");if(e){r.nextElementSibling&&r.nextElementSibling.classList.contains("CodeMirror")&&r.nextElementSibling.remove();var i=wp.codeEditor.defaultSettings?_.clone(wp.codeEditor.defaultSettings):{};i.codemirror=_.extend({},i.codemirror,{indentUnit:2,tabSize:2,mode:e});var n=wp.codeEditor.initialize(r,i);setTimeout(function(){n.codemirror.refresh()},10),n.codemirror.on("keyup",function(t,e){var i=t.getValue();r.value=i,r.innerHTML=i})}})},e.textareasExist=function(){return!!this.parent.querySelectorAll(this.textareaClass).length},t}();FPF_Helper.onReady(function(){new FPF_Textarea});

