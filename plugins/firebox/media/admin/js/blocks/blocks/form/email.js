/*! For license information please see email.js.LICENSE.txt */
(()=>{var e={814:(e,t,r)=>{var n;function o(e){return o="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},o(e)}!function(){"use strict";var i={}.hasOwnProperty;function a(){for(var e=[],t=0;t<arguments.length;t++){var r=arguments[t];if(r){var n=o(r);if("string"===n||"number"===n)e.push(r);else if(Array.isArray(r)){if(r.length){var l=a.apply(null,r);l&&e.push(l)}}else if("object"===n){if(r.toString!==Object.prototype.toString&&!r.toString.toString().includes("[native code]")){e.push(r.toString());continue}for(var u in r)i.call(r,u)&&r[u]&&e.push(u)}}}return e.join(" ")}e.exports?(a.default=a,e.exports=a):"object"===o(r.amdO)&&r.amdO?void 0===(n=function(){return a}.apply(t,[]))||(e.exports=n):window.classNames=a}()},428:(e,t,r)=>{"use strict";var n=r(134);function o(){}function i(){}i.resetWarningCache=o,e.exports=function(){function e(e,t,r,o,i,a){if(a!==n){var l=new Error("Calling PropTypes validators directly is not supported by the `prop-types` package. Use PropTypes.checkPropTypes() to call them. Read more at http://fb.me/use-check-prop-types");throw l.name="Invariant Violation",l}}function t(){return e}e.isRequired=e;var r={array:e,bigint:e,bool:e,func:e,number:e,object:e,string:e,symbol:e,any:e,arrayOf:t,element:e,elementType:e,instanceOf:t,node:e,objectOf:t,oneOf:t,oneOfType:t,shape:t,exact:t,checkPropTypes:i,resetWarningCache:o};return r.PropTypes=r,r}},950:(e,t,r)=>{e.exports=r(428)()},134:e=>{"use strict";e.exports="SECRET_DO_NOT_PASS_THIS_OR_YOU_WILL_BE_FIRED"},688:(e,t,r)=>{"use strict";var n=r(44);function o(){}function i(){}i.resetWarningCache=o,e.exports=function(){function e(e,t,r,o,i,a){if(a!==n){var l=new Error("Calling PropTypes validators directly is not supported by the `prop-types` package. Use PropTypes.checkPropTypes() to call them. Read more at http://fb.me/use-check-prop-types");throw l.name="Invariant Violation",l}}function t(){return e}e.isRequired=e;var r={array:e,bigint:e,bool:e,func:e,number:e,object:e,string:e,symbol:e,any:e,arrayOf:t,element:e,elementType:e,instanceOf:t,node:e,objectOf:t,oneOf:t,oneOfType:t,shape:t,exact:t,checkPropTypes:i,resetWarningCache:o};return r.PropTypes=r,r}},624:(e,t,r)=>{e.exports=r(688)()},44:e=>{"use strict";e.exports="SECRET_DO_NOT_PASS_THIS_OR_YOU_WILL_BE_FIRED"}},t={};function r(n){var o=t[n];if(void 0!==o)return o.exports;var i=t[n]={exports:{}};return e[n](i,i.exports,r),i.exports}r.amdO={},r.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return r.d(t,{a:t}),t},r.d=(e,t)=>{for(var n in t)r.o(t,n)&&!r.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:t[n]})},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),r.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})};var n={};(()=>{"use strict";r.r(n);const e=window.wp.i18n,t=window.wp.blocks,o=window.wp.element;var i=r(950),a=r.n(i);const l=window.wp.blockEditor;var u=r(814),c=r.n(u),s=[];var p=function(e){return"field-".concat(e)};const f=window.React;function d(e){return d="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},d(e)}function b(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function m(e,t){for(var r=0;r<t.length;r++){var n=t[r];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}function y(e,t){return y=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(e,t){return e.__proto__=t,e},y(e,t)}function h(e,t){if(t&&("object"===d(t)||"function"==typeof t))return t;if(void 0!==t)throw new TypeError("Derived constructors may only return object or undefined");return function(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}(e)}function v(e){return v=Object.setPrototypeOf?Object.getPrototypeOf.bind():function(e){return e.__proto__||Object.getPrototypeOf(e)},v(e)}function g(e){return g="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},g(e)}function w(){return w=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var r=arguments[t];for(var n in r)Object.prototype.hasOwnProperty.call(r,n)&&(e[n]=r[n])}return e},w.apply(this,arguments)}function _(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function O(e,t){for(var r=0;r<t.length;r++){var n=t[r];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}function x(e,t){return x=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(e,t){return e.__proto__=t,e},x(e,t)}function j(e,t){if(t&&("object"===g(t)||"function"==typeof t))return t;if(void 0!==t)throw new TypeError("Derived constructors may only return object or undefined");return function(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}(e)}function R(e){return R=Object.setPrototypeOf?Object.getPrototypeOf.bind():function(e){return e.__proto__||Object.getPrototypeOf(e)},R(e)}const E=function(e){!function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),Object.defineProperty(e,"prototype",{writable:!1}),t&&x(e,t)}(a,e);var t,r,n,o,i=(n=a,o=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,t=R(n);if(o){var r=R(this).constructor;e=Reflect.construct(t,arguments,r)}else e=t.apply(this,arguments);return j(this,e)});function a(){return _(this,a),i.apply(this,arguments)}return t=a,(r=[{key:"getInput",value:function(){var e={value:this.props.attributes.defaultValue,placeholder:this.props.attributes.placeholder};return this.props.attributes.required&&(e.required="required"),this.props.attributes.disableBrowserAutocomplete&&(e.autocomplete="off"),React.createElement("input",w({type:"email",name:"fb_form[".concat(this.props.attributes.fieldName,"]")},e,{id:"fb-form-input-".concat(this.props.fieldProps["data-field-id"]),className:c()("fb-form-input",this.props.attributes.inputCssClass),onChange:function(){}}))}}])&&O(t.prototype,r),Object.defineProperty(t,"prototype",{writable:!1}),a}(function(e){!function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),Object.defineProperty(e,"prototype",{writable:!1}),t&&y(e,t)}(a,e);var t,r,n,o,i=(n=a,o=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,t=v(n);if(o){var r=v(this).constructor;e=Reflect.construct(t,arguments,r)}else e=t.apply(this,arguments);return h(this,e)});function a(){return b(this,a),i.apply(this,arguments)}return t=a,(r=[{key:"render",value:function(){var e,t,r,n,o,i;null!==(e=this.props)&&void 0!==e&&null!==(t=e.fieldProps)&&void 0!==t&&t.className&&(this.props.fieldProps.className+=" fb-form-control-group"),null!==(r=this.props)&&void 0!==r&&null!==(n=r.attributes)&&void 0!==n&&n.cssClass&&(this.props.fieldProps.className+=" "+this.props.attributes.cssClass);var a=(null==this||null===(o=this.props)||void 0===o||null===(i=o.attributes)||void 0===i?void 0:i.fieldLabelRequiredFieldIndication)||!1;return React.createElement("div",this.props.fieldProps,""!==this.props.attributes.fieldLabel&&!this.props.attributes.hideLabel&&React.createElement("label",{className:"fb-form-control-label",htmlFor:"fb-form-input-".concat(this.props.fieldProps["data-field-id"])},this.props.attributes.fieldLabel,a&&this.props.attributes.required&&React.createElement("span",{className:"fb-form-control-required"},"*")),React.createElement("div",{className:"fb-form-control-input"},this.getInput()),""!==this.props.attributes.helpText&&React.createElement("div",{className:"fb-form-control-helptext"},this.props.attributes.helpText))}},{key:"getInput",value:function(){}}])&&m(t.prototype,r),Object.defineProperty(t,"prototype",{writable:!1}),a}(f.Component));var C,P=r(624),S=r.n(P),k=function(e){return!!e&&Object.values(e).some((function(e){return null!=e&&""!==e}))};function T(e){return function(e){if(Array.isArray(e))return A(e)}(e)||function(e){if("undefined"!=typeof Symbol&&null!=e[Symbol.iterator]||null!=e["@@iterator"])return Array.from(e)}(e)||function(e,t){if(e){if("string"==typeof e)return A(e,t);var r=Object.prototype.toString.call(e).slice(8,-1);return"Object"===r&&e.constructor&&(r=e.constructor.name),"Map"===r||"Set"===r?Array.from(e):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?A(e,t):void 0}}(e)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function A(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}function I(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function q(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?I(Object(r),!0).forEach((function(t){N(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):I(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}function L(e){return L="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},L(e)}function N(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}var B=(N(C={},"desktop",""),N(C,"tablet",991),N(C,"mobile",575),C),D=function(e){if(!e)return"";var t=e.match(/[^{\}]+(?=})/gi)[0];return{selector:e.replace(t,"").replace("{","").replace("}","").trim(),style:t.trim()}},F=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[];if(!e||!e.length)return[];var t=e.reduce((function(e,t){var r=D(t),n=e.find((function(e){return e.selector===r.selector}));return n?(n.styles.push(r.style),e):(e.push({selector:r.selector,styles:[r.style]}),e)}),[]);return t.map((function(e){return"".concat(e.selector," { ").concat(e.styles.join(" ")," }")}))},V=function(e){return q(q({},e),{},{rules:F(e.rules)})},W=function(t){var r=t.id,n=t.value,o=t.rule,i=t.unit,a=void 0===i?"":i,l=t.edgeCase,u=t.breakpoint,c=void 0===u?"desktop":u,s=t.oneline,p=void 0!==s&&s;if(null==n||""===n)return null;var f,d,b=o.includes("[BLOCK_ID]")?o.replace("[BLOCK_ID]",r):"".concat(o);if(function(e){return["box-shadow"].some((function(t){return e.includes(t)}))}(o))return["inset","outset"].includes(n.type)&&""!==n.color?(0,e.sprintf)(b,"".concat(n.left,"px ").concat(n.top,"px ").concat(n.width,"px ").concat(n.spread,"px ").concat("outset"===n.type?"":n.type," ").concat(n.color)):null;if(function(e){return["text-shadow"].some((function(t){return e.includes(t)}))}(o))return""!==n.hpos&&""!==n.vpos&&""!==n.blur&&""!==n.color?(0,e.sprintf)(b,"".concat(n.hpos,"px ").concat(n.vpos,"px ").concat(n.blur,"px ").concat(n.color)):null;if(function(e){return["padding","border-radius","margin","position-items"].some((function(t){return e.includes(t)}))&&!["padding-","margin-"].some((function(t){return e.includes(t)}))}(o)){var m=o.match(/margin|border-radius|padding|position-items/gi)[0];if("position-items"===m){var y=["top","right","bottom","left"].map((function(e){if(null!=n[e]&&""!==n[e]){var t="auto"===n[e]?"auto":"".concat(n[e]).concat(a);return"".concat(e,": ").concat(t,";")}})).join(" ");return y.trim()?(f=b,d=" ".concat(y," "),f.replace(/[^{\}]+(?=})/gi,d)):null}var h=function(e,t){var r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:"",n=arguments.length>3&&void 0!==arguments[3]&&arguments[3];if(!e)return!1;if(k(e)||k(e[t])){var o=e[t]||e;if(["margin","padding"].includes(r)){if(4===Object.values(o).length&&1===new Set(Object.values(o)).size)return"".concat(o.top,"px");if(Object.values(o).every((function(e){return""!==e}))){if(o.top===o.bottom&&o.left===o.right)return"".concat(o.top||0,"px ").concat(o.left||0,"px");Object.values(o).map((function(e){return"".concat(e||0,"px")})).join(" ")}var i=[],a=["top","right","bottom","left"];return n?(a.forEach((function(e){i.push("".concat(o[e]||0,"px"))})),i.join(" ")):(a.forEach((function(e){""!==o[e]&&i.push(r+"-"+e+":"+o[e]+"px;")})),i)}if("border-radius"===r){if(4===Object.values(o).length&&1===new Set(Object.values(o)).size)return"".concat(o.top_left,"px");if(Object.values(o).every((function(e){return""!==e}))){if(o.top_left===o.bottom_right&&o.bottom_left===o.top_right)return"".concat(o.top_left||0,"px ").concat(o.bottom_left||0,"px");Object.values(o).map((function(e){return"".concat(e||0,"px")})).join(" ")}var l=[],u=["top_left","top_right","bottom_right","bottom_left"];return n?(u.forEach((function(e){l.push("".concat(o[e]||0,"px"))})),l.join(" ")):(u.forEach((function(e){""!==o[e]&&l.push("border-"+e.replace("_","-")+"-radius:"+o[e]+"px;")})),l)}}return!1}(n,null,m,p);if(!h)return null;if(h&&"string"==typeof h)return(0,e.sprintf)(b,h)||null;if(h&&"object"===L(h))return b=(b=(b=(b=b.replace("margin: ","")).replace("padding: ","")).replace("border-radius: ","")).replace("%s;","%s"),(0,e.sprintf)(b,h.join(""))||null}if(function(e){return!!e&&"object"===L(e)&&"url"in e&&"attachment"in e&&"repeat"in e}(n)){if(!n.url)return;var v="none"!==n.url?"url(".concat(n.url,")"):"none",g=["background-image: ".concat(v,";"),"background-repeat: ".concat(n.repeat,";"),"background-size: ".concat(n.size,";"),"background-position: ".concat(n.position,";"),"background-attachment: ".concat(n.attachment,";")].join(" ");return(0,e.sprintf)(b,g)}if(l){var w=l.find((function(e){return e.edge===n}));if(w)return""===w.value||w.skipInBreakpoints&&w.skipInBreakpoints.includes(c)?null:(a=w.unit||"",(0,e.sprintf)(b,"".concat(w.value).concat(a)))}return(0,e.sprintf)(b,"".concat(n).concat(a))},H=function e(t){return o.Children.toArray(t).map((function(t){return Array.isArray(t.props.children)?e(t.props.children):t})).reduce((function(e,t){return Array.isArray(t)?[].concat(T(e),T(t)):[].concat(T(e),[t])}),[]).filter((function(e){return e.type&&"Rule"===e.type.displayName}))},M=function(e){var t=e.id,r=e.children,n=e.getCSSRule,o=e.mapper,i=void 0===o?function(e){return e}:o,a=[{name:"desktop",media:"max",width:B.desktop,rules:[]},{name:"tablet",media:"max",width:B.tablet,rules:[]},{name:"mobile",media:"max",width:B.mobile,rules:[]},{name:"desktop-only",media:"min",width:B.tablet+1,rules:[]},{name:"tablet-only",media:"min",width:B.mobile+1,rules:[]}];return H(r).reduce((function(e,r){var o=r.props,i=o.value,a=o.rule,l=o.unit,u=o.edgeCase,c=o.breakpointLimit,s=o.oneline;if(null==i)return e;if("object"!==L(i)||!("desktop"in i)){var p=e.find((function(e){return"desktop"===e.name})),f=n({id:t,value:i,rule:a,unit:l,edgeCase:u,breakpoint:"desktop",oneline:s});return null!=f&&p.rules.push(f),e}return Object.keys(i).forEach((function(r){var o=e.find((function(e){var t=e.name;return c&&"mobile"!==r?"".concat(r,"-only")===t:t===r})),p=n({id:t,value:i[r],rule:a,unit:l,edgeCase:u,breakpoint:r,oneline:s});null!=p&&o&&o.rules.push(p)})),e}),a).map(i)},U={children:S().oneOfType([S().node,S().array]),id:S().string},z=function(e){var t,r=e.id,n=void 0===r?"":r,o=e.children,i=M({id:n,children:o,getCSSRule:W,mapper:V});return function(e){return e.every((function(e){return 0===e.rules.length}))}(i)?null:React.createElement("style",{dangerouslySetInnerHTML:{__html:(t=i,t.reduce((function(e,t){if(!t.rules.length)return e;var r=t.rules.map((function(e){return e.trim()})).join("\n");return t.width?"tablet-only"===t.name?"".concat(e,"\n\n\t\t\t\t@media (min-width: ").concat(B.mobile+1,"px) and (max-width: ").concat(B.tablet,"px) {\n\t\t\t\t\t").concat(r,"\n\t\t\t\t}\n\t\t\t\t"):"".concat(e,"\n\n\t\t\t@media (").concat(t.media,"-width: ").concat(t.width,"px) {\n\t\t\t\t").concat(r,"\n\t\t\t}\n\t\t\t"):"".concat(e).concat(r,"\n")}),"").trim())}})};z.propTypes=U;const K=z;var Y={value:S().oneOfType([S().string,S().number,S().object]).isRequired,rule:S().string.isRequired,unit:S().oneOf(["","px","%","em","rem","vh","vw","pt","cm","mm"]),edgeCase:S().arrayOf(S().shape({edge:S().any.isRequired,value:S().oneOfType([S().string,S().number]).isRequired,skipInBreakpoints:S().array})),breakpointLimit:S().bool,oneline:S().bool},Z=function(){return null};Z.displayName="Rule",Z.propTypes=Y;const $=Z;var G={attributes:a().object.isRequired,children:a().node},J=function(e){var t=e.attributes,r=e.children,n=t.uniqueId,o=t.width,i=p(n);return React.createElement(K,{id:i},React.createElement($,{value:o,rule:".fb-form-control-group.[BLOCK_ID] { --field-width: %s; }"}),r)};J.propTypes=G;const Q=J,X=window.wp.components;var ee=function(e){var t,r,n=e.fieldTypeName,o=e.attributes,i=o.fieldName,a=o.fieldLabel,l=o.helpText,u=o.required,c=null===(t=null==e?void 0:e.showFieldLabel)||void 0===t||t,s=null===(r=null==e?void 0:e.showHelpText)||void 0===r||r;return React.createElement(X.PanelBody,{title:n+" "+__("Field","firebox"),initialOpen:!0},React.createElement(X.TextControl,{label:__("Field Name","firebox"),required:!0,value:i,onChange:function(t){return e.setAttributes({fieldName:t})},help:__("Set a unique field name which is used to reference the form data. Enter only alphanumerics and underscores.","firebox")}),c&&React.createElement(X.TextControl,{label:__("Field Label","firebox"),value:a,onChange:function(t){return e.setAttributes({fieldLabel:t})},help:__("Set a label for the field. Leave blank to hide the label.","firebox")}),s&&React.createElement(X.TextControl,{label:__("Help text","firebox"),value:l,onChange:function(t){return e.setAttributes({helpText:t})},help:__("Set a helpful description to show below the field.","firebox")}),React.createElement(X.ToggleControl,{label:__("Required","firebox"),checked:u,onChange:function(t){return e.setAttributes({required:t})}}),e.children)},te=function(e){var t,r,n,o,i=e.attributes,a=i.width,l=i.defaultValue,u=i.placeholder,c=i.cssClass,s=i.inputCssClass,p=i.hideLabel,f=i.disableBrowserAutocomplete,d=null===(t=null==e?void 0:e.showWidth)||void 0===t||t,b=null===(r=null==e?void 0:e.showPlaceholder)||void 0===r||r,m=null===(n=null==e?void 0:e.showHideLabel)||void 0===n||n,y=null===(o=null==e?void 0:e.showDisableBrowserAutocomplete)||void 0===o||o;return React.createElement(X.PanelBody,{title:__("Field Settings","firebox"),initialOpen:!1},d&&React.createElement(X.SelectControl,{label:__("Width","firebox"),options:[{label:"0%",value:"0%"},{label:"5%",value:"5%"},{label:"10%",value:"10%"},{label:"20%",value:"20%"},{label:"25%",value:"25%"},{label:"30%",value:"30%"},{label:"33%",value:"33%"},{label:"40%",value:"40%"},{label:"50%",value:"50%"},{label:"60%",value:"60%"},{label:"66%",value:"66%"},{label:"70%",value:"70%"},{label:"75%",value:"75%"},{label:"80%",value:"80%"},{label:"90%",value:"90%"},{label:"95%",value:"95%"},{label:"100%",value:"100%"}],value:a,onChange:function(t){return e.setAttributes({width:t})}}),React.createElement(X.TextareaControl,{label:__("Default Value","firebox"),value:l,onChange:function(t){return e.setAttributes({defaultValue:t})},help:__("Set the default field value.","firebox")}),b&&React.createElement(X.TextControl,{label:__("Placeholder Text","firebox"),value:u,onChange:function(t){return e.setAttributes({placeholder:t})},help:__("The text you'd like displayed in the field, before a user enters any data.","firebox")}),React.createElement(X.TextControl,{label:__("CSS Class","firebox"),value:c,onChange:function(t){return e.setAttributes({cssClass:t})},help:__("Add CSS Classes to the input's container. This can mainly be used for layout purposes.","firebox")}),React.createElement(X.TextControl,{label:__("Input CSS Class","firebox"),value:s,onChange:function(t){return e.setAttributes({inputCssClass:t})},help:__("Add CSS Classes to the input element. Use this option to style the input itself.","firebox")}),m&&React.createElement(X.ToggleControl,{label:__("Hide Label","firebox"),default:!1,checked:p,onChange:function(t){return e.setAttributes({hideLabel:t})},help:__("Check this option to hide the form field label.","firebox")}),y&&React.createElement(X.ToggleControl,{label:__("Disable Browser Autocomplete","firebox"),default:!1,checked:f,onChange:function(t){return e.setAttributes({disableBrowserAutocomplete:t})},help:__("By default, browsers remember information that the user submits through input fields. To disable autocompletion in forms enable this option.","firebox")}),e.children)},re={attributes:a().object.isRequired,setAttributes:a().func.isRequired},ne=function(e){var t=e.attributes,r=e.setAttributes;return React.createElement(l.InspectorControls,null,React.createElement(ee,{fieldTypeName:"Email",attributes:t,setAttributes:r}),React.createElement(te,{attributes:t,setAttributes:r}))};ne.propTypes=re;const oe=ne;var ie={attributes:a().object.isRequired,setAttributes:a().func.isRequired,className:a().string,clientId:a().string.isRequired,context:a().object},ae=function(e){var t=e.attributes,r=e.setAttributes,n=e.className,i=e.clientId,a=e.context,u=t.uniqueId;!function(e){var t=e.attributes,r=e.setAttributes,n=e.clientId,i=t.uniqueId;(0,o.useEffect)((function(){if(!i){var e=n.substr(2,14);return s.includes(e)||s.push(e),void r({uniqueId:e})}i&&!s.includes(i)&&(s.includes(i)||s.push(i))}),[])}({attributes:t,setAttributes:r,clientId:i});var f,d,b,m=p(u),y=(0,l.useBlockProps)((b=u,(d="data-field-id")in(f={id:m,className:c()(n,m)})?Object.defineProperty(f,d,{value:b,enumerable:!0,configurable:!0,writable:!0}):f[d]=b,f));return React.createElement(o.Fragment,null,React.createElement(Q,{attributes:t}),React.createElement(oe,{attributes:t,setAttributes:r}),React.createElement(E,{fieldProps:y,attributes:t,context:a}))};ae.propTypes=ie;const le=ae;var ue=function(e){var t=e.fieldName,r=void 0===t?"":t,n=e.fieldLabel,o=void 0===n?"":n,i=e.fieldLabelRequiredFieldIndication,a=void 0===i||i,l=e.fieldRequired;return{uniqueId:{type:"string",default:""},fieldLabelRequiredFieldIndication:{type:"boolean",default:a},fieldName:{type:"string",default:r},fieldLabel:{type:"string",default:o},helpText:{type:"string",default:""},required:{type:"boolean",default:void 0===l||l},width:{type:"string",default:"100%"},defaultValue:{type:"string",default:""},placeholder:{type:"string",default:""},cssClass:{type:"string",default:""},inputCssClass:{type:"string",default:""},hideLabel:{type:"boolean",default:!1},disableBrowserAutocomplete:{type:"boolean",default:!1}}};function ce(e){return ce="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},ce(e)}function se(){return se=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var r=arguments[t];for(var n in r)Object.prototype.hasOwnProperty.call(r,n)&&(e[n]=r[n])}return e},se.apply(this,arguments)}function pe(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function fe(e,t){for(var r=0;r<t.length;r++){var n=t[r];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}function de(e,t,r){return t&&fe(e.prototype,t),r&&fe(e,r),Object.defineProperty(e,"prototype",{writable:!1}),e}function be(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),Object.defineProperty(e,"prototype",{writable:!1}),t&&me(e,t)}function me(e,t){return me=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(e,t){return e.__proto__=t,e},me(e,t)}function ye(e){var t=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}();return function(){var r,n=ve(e);if(t){var o=ve(this).constructor;r=Reflect.construct(n,arguments,o)}else r=n.apply(this,arguments);return he(this,r)}}function he(e,t){if(t&&("object"===ce(t)||"function"==typeof t))return t;if(void 0!==t)throw new TypeError("Derived constructors may only return object or undefined");return function(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}(e)}function ve(e){return ve=Object.setPrototypeOf?Object.getPrototypeOf.bind():function(e){return e.__proto__||Object.getPrototypeOf(e)},ve(e)}var ge=function(e){be(r,e);var t=ye(r);function r(){return pe(this,r),t.apply(this,arguments)}return de(r,[{key:"getInput",value:function(){var e={value:this.props.attributes.defaultValue,placeholder:this.props.attributes.placeholder};return this.props.attributes.required&&(e.required="required"),this.props.attributes.disableBrowserAutocomplete&&(e.autocomplete="off"),React.createElement("input",se({type:"email",name:"fb_form[".concat(this.props.attributes.fieldName,"]")},e,{className:c()("fb-form-input",this.props.attributes.inputCssClass),onChange:function(){}}))}}]),r}(function(e){be(r,e);var t=ye(r);function r(){return pe(this,r),t.apply(this,arguments)}return de(r,[{key:"render",value:function(){var e,t,r,n,o,i;null!==(e=this.props)&&void 0!==e&&null!==(t=e.fieldProps)&&void 0!==t&&t.className&&(this.props.fieldProps.className+=" fb-form-control-group"),null!==(r=this.props)&&void 0!==r&&null!==(n=r.attributes)&&void 0!==n&&n.cssClass&&(this.props.fieldProps.className+=" "+this.props.attributes.cssClass);var a=(null==this||null===(o=this.props)||void 0===o||null===(i=o.attributes)||void 0===i?void 0:i.fieldLabelRequiredFieldIndication)||!1;return React.createElement("div",this.props.fieldProps,""!==this.props.attributes.fieldLabel&&!this.props.attributes.hideLabel&&React.createElement("div",{className:"fb-form-control-label"},this.props.attributes.fieldLabel,a&&this.props.attributes.required&&React.createElement("span",{className:"fb-form-control-required"},"*")),React.createElement("div",{className:"fb-form-control-input"},this.getInput()),""!==this.props.attributes.helpText&&React.createElement("div",{className:"fb-form-control-helptext"},this.props.attributes.helpText))}},{key:"getInput",value:function(){}}]),r}(f.Component));const we=[{attributes:ue({fieldName:"email",fieldLabel:"Email field"}),save:function(e){var t,r,n,o=e.attributes,i=e.className,a=o.uniqueId,u=p(a),s=l.useBlockProps.save((n=a,(r="data-field-id")in(t={id:u,className:c()(i,u)})?Object.defineProperty(t,r,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[r]=n,t));return React.createElement(f.Fragment,null,React.createElement(Q,{attributes:o}),React.createElement(ge,{fieldProps:s,attributes:o}))}}];"firebox"===window.typenow&&(0,t.registerBlockType)("firebox/email",{apiVersion:2,title:(0,e.__)("Email Field","firebox"),category:"firebox",description:(0,e.__)("Add an email address field into your form.","firebox"),parent:["firebox/form","firebox/column","firebox/row","core/group"],keywords:[(0,e.__)("mail","firebox"),(0,e.__)("email","firebox"),(0,e.__)("e-mail","firebox"),(0,e.__)("email address","firebox"),(0,e.__)("email field","firebox"),(0,e.__)("email address field","firebox")],icon:function(){return React.createElement("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24",viewBox:"0 0 48 48",className:"firebox-gutenberg-block-list-item"},React.createElement("path",{d:"M40 10H8C6.89543 10 6 10.8954 6 12V36C6 37.1046 6.89543 38 8 38H40C41.1046 38 42 37.1046 42 36V12C42 10.8954 41.1046 10 40 10Z",stroke:"#2438E9",strokeWidth:"3",strokeLinecap:"round",strokeLinejoin:"round",fill:"transparent"}),React.createElement("path",{d:"M6 14.5L22.829 26.6543C23.528 27.1591 24.472 27.1591 25.171 26.6543L42 14.5",stroke:"#2438E9",strokeWidth:"3",strokeLinecap:"round",strokeLinejoin:"round",fill:"transparent"}))},attributes:ue({fieldName:"email",fieldLabel:"Email field"}),edit:le,save:function(e){var t,r,n,o=e.attributes,i=e.className,a=o.uniqueId,u=p(a),s=l.useBlockProps.save((n=a,(r="data-field-id")in(t={id:u,className:c()(i,u)})?Object.defineProperty(t,r,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[r]=n,t));return React.createElement(f.Fragment,null,React.createElement(Q,{attributes:o}),React.createElement(E,{fieldProps:s,attributes:o}))},deprecated:we})})(),(window.wp=window.wp||{})["blocks/form/email.js"]=n})();
