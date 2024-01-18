/*! For license information please see hidden.js.LICENSE.txt */
(()=>{var e={814:(e,t,r)=>{var o;function n(e){return n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},n(e)}!function(){"use strict";var i={}.hasOwnProperty;function l(){for(var e=[],t=0;t<arguments.length;t++){var r=arguments[t];if(r){var o=n(r);if("string"===o||"number"===o)e.push(r);else if(Array.isArray(r)){if(r.length){var a=l.apply(null,r);a&&e.push(a)}}else if("object"===o){if(r.toString!==Object.prototype.toString&&!r.toString.toString().includes("[native code]")){e.push(r.toString());continue}for(var u in r)i.call(r,u)&&r[u]&&e.push(u)}}}return e.join(" ")}e.exports?(l.default=l,e.exports=l):"object"===n(r.amdO)&&r.amdO?void 0===(o=function(){return l}.apply(t,[]))||(e.exports=o):window.classNames=l}()},428:(e,t,r)=>{"use strict";var o=r(134);function n(){}function i(){}i.resetWarningCache=n,e.exports=function(){function e(e,t,r,n,i,l){if(l!==o){var a=new Error("Calling PropTypes validators directly is not supported by the `prop-types` package. Use PropTypes.checkPropTypes() to call them. Read more at http://fb.me/use-check-prop-types");throw a.name="Invariant Violation",a}}function t(){return e}e.isRequired=e;var r={array:e,bigint:e,bool:e,func:e,number:e,object:e,string:e,symbol:e,any:e,arrayOf:t,element:e,elementType:e,instanceOf:t,node:e,objectOf:t,oneOf:t,oneOfType:t,shape:t,exact:t,checkPropTypes:i,resetWarningCache:n};return r.PropTypes=r,r}},950:(e,t,r)=>{e.exports=r(428)()},134:e=>{"use strict";e.exports="SECRET_DO_NOT_PASS_THIS_OR_YOU_WILL_BE_FIRED"}},t={};function r(o){var n=t[o];if(void 0!==n)return n.exports;var i=t[o]={exports:{}};return e[o](i,i.exports,r),i.exports}r.amdO={},r.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return r.d(t,{a:t}),t},r.d=(e,t)=>{for(var o in t)r.o(t,o)&&!r.o(e,o)&&Object.defineProperty(e,o,{enumerable:!0,get:t[o]})},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),r.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})};var o={};(()=>{"use strict";r.r(o);const e=window.wp.i18n,t=window.wp.blocks,n=window.wp.element;var i=r(950),l=r.n(i);const a=window.wp.blockEditor;var u=r(814),s=r.n(u),c=[];var f=function(e){return"field-".concat(e)};const p=window.React;function d(e){return d="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},d(e)}function b(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function h(e,t){for(var r=0;r<t.length;r++){var o=t[r];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}function y(e,t){return y=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(e,t){return e.__proto__=t,e},y(e,t)}function m(e,t){if(t&&("object"===d(t)||"function"==typeof t))return t;if(void 0!==t)throw new TypeError("Derived constructors may only return object or undefined");return function(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}(e)}function v(e){return v=Object.setPrototypeOf?Object.getPrototypeOf.bind():function(e){return e.__proto__||Object.getPrototypeOf(e)},v(e)}function w(e){return w="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},w(e)}function _(){return _=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var r=arguments[t];for(var o in r)Object.prototype.hasOwnProperty.call(r,o)&&(e[o]=r[o])}return e},_.apply(this,arguments)}function g(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function C(e,t){for(var r=0;r<t.length;r++){var o=t[r];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}function x(e,t){return x=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(e,t){return e.__proto__=t,e},x(e,t)}function R(e,t){if(t&&("object"===w(t)||"function"==typeof t))return t;if(void 0!==t)throw new TypeError("Derived constructors may only return object or undefined");return function(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}(e)}function O(e){return O=Object.setPrototypeOf?Object.getPrototypeOf.bind():function(e){return e.__proto__||Object.getPrototypeOf(e)},O(e)}const E=function(e){!function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),Object.defineProperty(e,"prototype",{writable:!1}),t&&x(e,t)}(l,e);var t,r,o,n,i=(o=l,n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,t=O(o);if(n){var r=O(this).constructor;e=Reflect.construct(t,arguments,r)}else e=t.apply(this,arguments);return R(this,e)});function l(){return g(this,l),i.apply(this,arguments)}return t=l,(r=[{key:"getInput",value:function(){var e={value:this.props.attributes.defaultValue,autoComplete:"off"};return this.props.attributes.required&&(e.required="required"),React.createElement("input",_({type:"hidden",name:"fb_form[".concat(this.props.attributes.fieldName,"]")},e,{className:s()("fb-form-input",this.props.attributes.inputCssClass),onChange:function(){}}))}}])&&C(t.prototype,r),Object.defineProperty(t,"prototype",{writable:!1}),l}(function(e){!function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),Object.defineProperty(e,"prototype",{writable:!1}),t&&y(e,t)}(l,e);var t,r,o,n,i=(o=l,n=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,t=v(o);if(n){var r=v(this).constructor;e=Reflect.construct(t,arguments,r)}else e=t.apply(this,arguments);return m(this,e)});function l(){return b(this,l),i.apply(this,arguments)}return t=l,(r=[{key:"render",value:function(){var e,t,r,o,n,i;null!==(e=this.props)&&void 0!==e&&null!==(t=e.fieldProps)&&void 0!==t&&t.className&&(this.props.fieldProps.className+=" fb-form-control-group"),null!==(r=this.props)&&void 0!==r&&null!==(o=r.attributes)&&void 0!==o&&o.cssClass&&(this.props.fieldProps.className+=" "+this.props.attributes.cssClass);var l=(null==this||null===(n=this.props)||void 0===n||null===(i=n.attributes)||void 0===i?void 0:i.fieldLabelRequiredFieldIndication)||!1;return React.createElement("div",this.props.fieldProps,""!==this.props.attributes.fieldLabel&&!this.props.attributes.hideLabel&&React.createElement("label",{className:"fb-form-control-label",htmlFor:"fb-form-input-".concat(this.props.fieldProps["data-field-id"])},this.props.attributes.fieldLabel,l&&this.props.attributes.required&&React.createElement("span",{className:"fb-form-control-required"},"*")),React.createElement("div",{className:"fb-form-control-input"},this.getInput()),""!==this.props.attributes.helpText&&React.createElement("div",{className:"fb-form-control-helptext"},this.props.attributes.helpText))}},{key:"getInput",value:function(){}}])&&h(t.prototype,r),Object.defineProperty(t,"prototype",{writable:!1}),l}(p.Component)),P=window.wp.components;var S=function(e){var t,r,o=e.fieldTypeName,n=e.attributes,i=n.fieldName,l=n.fieldLabel,a=n.helpText,u=n.required,s=null===(t=null==e?void 0:e.showFieldLabel)||void 0===t||t,c=null===(r=null==e?void 0:e.showHelpText)||void 0===r||r;return React.createElement(P.PanelBody,{title:o+" "+__("Field","firebox"),initialOpen:!0},React.createElement(P.TextControl,{label:__("Field Name","firebox"),required:!0,value:i,onChange:function(t){return e.setAttributes({fieldName:t})},help:__("Set a unique field name which is used to reference the form data. Enter only alphanumerics and underscores.","firebox")}),s&&React.createElement(P.TextControl,{label:__("Field Label","firebox"),value:l,onChange:function(t){return e.setAttributes({fieldLabel:t})},help:__("Set a label for the field. Leave blank to hide the label.","firebox")}),c&&React.createElement(P.TextControl,{label:__("Help text","firebox"),value:a,onChange:function(t){return e.setAttributes({helpText:t})},help:__("Set a helpful description to show below the field.","firebox")}),React.createElement(P.ToggleControl,{label:__("Required","firebox"),checked:u,onChange:function(t){return e.setAttributes({required:t})}}),e.children)},T=function(e){var t,r,o,n,i=e.attributes,l=i.width,a=i.defaultValue,u=i.placeholder,s=i.cssClass,c=i.inputCssClass,f=i.hideLabel,p=i.disableBrowserAutocomplete,d=null===(t=null==e?void 0:e.showWidth)||void 0===t||t,b=null===(r=null==e?void 0:e.showPlaceholder)||void 0===r||r,h=null===(o=null==e?void 0:e.showHideLabel)||void 0===o||o,y=null===(n=null==e?void 0:e.showDisableBrowserAutocomplete)||void 0===n||n;return React.createElement(P.PanelBody,{title:__("Field Settings","firebox"),initialOpen:!1},d&&React.createElement(P.SelectControl,{label:__("Width","firebox"),options:[{label:"0%",value:"0%"},{label:"5%",value:"5%"},{label:"10%",value:"10%"},{label:"20%",value:"20%"},{label:"25%",value:"25%"},{label:"30%",value:"30%"},{label:"33%",value:"33%"},{label:"40%",value:"40%"},{label:"50%",value:"50%"},{label:"60%",value:"60%"},{label:"66%",value:"66%"},{label:"70%",value:"70%"},{label:"75%",value:"75%"},{label:"80%",value:"80%"},{label:"90%",value:"90%"},{label:"95%",value:"95%"},{label:"100%",value:"100%"}],value:l,onChange:function(t){return e.setAttributes({width:t})}}),React.createElement(P.TextareaControl,{label:__("Default Value","firebox"),value:a,onChange:function(t){return e.setAttributes({defaultValue:t})},help:__("Set the default field value.","firebox")}),b&&React.createElement(P.TextControl,{label:__("Placeholder Text","firebox"),value:u,onChange:function(t){return e.setAttributes({placeholder:t})},help:__("The text you'd like displayed in the field, before a user enters any data.","firebox")}),React.createElement(P.TextControl,{label:__("CSS Class","firebox"),value:s,onChange:function(t){return e.setAttributes({cssClass:t})},help:__("Add CSS Classes to the input's container. This can mainly be used for layout purposes.","firebox")}),React.createElement(P.TextControl,{label:__("Input CSS Class","firebox"),value:c,onChange:function(t){return e.setAttributes({inputCssClass:t})},help:__("Add CSS Classes to the input element. Use this option to style the input itself.","firebox")}),h&&React.createElement(P.ToggleControl,{label:__("Hide Label","firebox"),default:!1,checked:f,onChange:function(t){return e.setAttributes({hideLabel:t})},help:__("Check this option to hide the form field label.","firebox")}),y&&React.createElement(P.ToggleControl,{label:__("Disable Browser Autocomplete","firebox"),default:!1,checked:p,onChange:function(t){return e.setAttributes({disableBrowserAutocomplete:t})},help:__("By default, browsers remember information that the user submits through input fields. To disable autocompletion in forms enable this option.","firebox")}),e.children)},j={attributes:l().object.isRequired,setAttributes:l().func.isRequired},A=function(e){var t=e.attributes,r=e.setAttributes;return React.createElement(a.InspectorControls,null,React.createElement(S,{fieldTypeName:"Hidden",attributes:t,setAttributes:r,showFieldLabel:!1,showHelpText:!1}),React.createElement(T,{attributes:t,setAttributes:r,showWidth:!1,showPlaceholder:!1,showHideLabel:!1,showDisableBrowserAutocomplete:!1}))};A.propTypes=j;const L=A;var q={attributes:l().object.isRequired,setAttributes:l().func.isRequired,className:l().string,clientId:l().string.isRequired,context:l().object},k=function(e){var t=e.attributes,r=e.setAttributes,o=e.className,i=e.clientId,l=e.context,u=t.uniqueId;!function(e){var t=e.attributes,r=e.setAttributes,o=e.clientId,i=t.uniqueId;(0,n.useEffect)((function(){if(!i){var e=o.substr(2,14);return c.includes(e)||c.push(e),void r({uniqueId:e})}i&&!c.includes(i)&&(c.includes(i)||c.push(i))}),[])}({attributes:t,setAttributes:r,clientId:i});var p,d,b,h=f(u),y=(0,a.useBlockProps)((b=u,(d="data-field-id")in(p={id:h,className:s()(o,"fb-hide",h)})?Object.defineProperty(p,d,{value:b,enumerable:!0,configurable:!0,writable:!0}):p[d]=b,p));return React.createElement(n.Fragment,null,React.createElement(L,{attributes:t,setAttributes:r}),React.createElement(E,{fieldProps:y,attributes:t,context:l}))};k.propTypes=q;const N=k;var I,B,F,H,V,D,M,W;"firebox"===window.typenow&&(0,t.registerBlockType)("firebox/hidden",{apiVersion:2,title:(0,e.__)("Hidden Field","firebox"),category:"firebox",description:(0,e.__)("Add a hidden field into your form.","firebox"),parent:["firebox/form","firebox/column","firebox/row","core/group"],keywords:[(0,e.__)("hidden","firebox"),(0,e.__)("hidden field","firebox")],icon:function(){return React.createElement("svg",{width:"24",viewBox:"0 0 48 48",fill:"none",xmlns:"http://www.w3.org/2000/svg",className:"firebox-gutenberg-block-list-item"},React.createElement("path",{d:"M4 41V7C4 5.89543 4.89543 5 6 5H37H42C43.1046 5 44 5.89543 44 7V41C44 42.1046 43.1046 43 42 43H37H15H6C4.89543 43 4 42.1046 4 41Z",stroke:"#2438E9",strokeWidth:"0",strokeLinecap:"round",strokeLinejoin:"round",fill:"transparent"}),React.createElement("g",{clipPath:"url(#clip0_2006_3324)"},React.createElement("path",{d:"M37.6273 35.8273L32.2412 30.4412C35.5138 27.9777 37.6309 24.9329 37.7773 24.7193C38.0743 24.2857 38.0743 23.7142 37.7773 23.2806C37.5291 22.9184 31.6123 14.4102 24.0003 14.4102C21.8051 14.4102 19.7516 15.1183 17.9338 16.1337L12.1727 10.3728C11.6758 9.87574 10.8699 9.87574 10.3728 10.3728C9.87578 10.8698 9.87578 11.6756 10.3728 12.1727L15.7588 17.5587C12.486 20.0223 10.3691 23.0671 10.2227 23.2807C9.92576 23.7142 9.92576 24.2857 10.2227 24.7193C10.4709 25.0814 16.387 33.5899 24.0003 33.5899C26.1951 33.5899 28.2485 32.8818 30.0663 31.8663L35.8273 37.6273C36.0759 37.8757 36.4015 38 36.7273 38C37.053 38 37.3787 37.8757 37.6272 37.6271C38.1243 37.1302 38.1243 36.3244 37.6273 35.8273ZM24.0003 16.9556C29.1132 16.9556 33.6228 22.0752 35.1372 23.9999C34.3165 25.043 32.6168 27.0229 30.4189 28.6189L19.8147 18.0148C21.1219 17.3735 22.5352 16.9556 24.0003 16.9556ZM24.0003 31.0443C18.8852 31.0443 14.3751 25.9225 12.8619 23.9988C13.6808 22.9549 15.3779 20.9732 17.5773 19.3771L28.1825 29.9823C26.875 30.6253 25.4625 31.0443 24.0003 31.0443Z",fill:"#2438E9"})),React.createElement("defs",null,React.createElement("clipPath",{id:"clip0_2006_3324"},React.createElement("rect",{width:"28",height:"28",fill:"white",transform:"translate(10 10)"}))))},attributes:(I={fieldName:"hidden",fieldLabelRequiredFieldIndication:!1,fieldRequired:!1},B=I.fieldName,F=void 0===B?"":B,H=I.fieldLabel,V=void 0===H?"":H,D=I.fieldLabelRequiredFieldIndication,M=void 0===D||D,W=I.fieldRequired,{uniqueId:{type:"string",default:""},fieldLabelRequiredFieldIndication:{type:"boolean",default:M},fieldName:{type:"string",default:F},fieldLabel:{type:"string",default:V},helpText:{type:"string",default:""},required:{type:"boolean",default:void 0===W||W},width:{type:"string",default:"100%"},defaultValue:{type:"string",default:""},placeholder:{type:"string",default:""},cssClass:{type:"string",default:""},inputCssClass:{type:"string",default:""},hideLabel:{type:"boolean",default:!1},disableBrowserAutocomplete:{type:"boolean",default:!1}}),edit:N,save:function(e){var t,r,o,n=e.attributes,i=e.className,l=n.uniqueId,u=f(l),c=a.useBlockProps.save((o=l,(r="data-field-id")in(t={id:u,className:s()(i,"fb-hide",u)})?Object.defineProperty(t,r,{value:o,enumerable:!0,configurable:!0,writable:!0}):t[r]=o,t));return React.createElement(p.Fragment,null,React.createElement(E,{fieldProps:c,attributes:n}))}})})(),(window.wp=window.wp||{})["blocks/form/hidden.js"]=o})();
