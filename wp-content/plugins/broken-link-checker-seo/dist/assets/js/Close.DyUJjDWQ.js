import{a8 as C,o as O,c as w,B as L}from"./index.B-fNRxMl.js";import{_ as P}from"./dynamic-import-helper.BYS4eB6Y.js";var h={exports:{}};(function(a,s){(function(i,u){a.exports=u()})(window,function(){return function(i){var u={};function o(n){if(u[n])return u[n].exports;var t=u[n]={i:n,l:!1,exports:{}};return i[n].call(t.exports,t,t.exports,o),t.l=!0,t.exports}return o.m=i,o.c=u,o.d=function(n,t,e){o.o(n,t)||Object.defineProperty(n,t,{enumerable:!0,get:e})},o.r=function(n){typeof Symbol<"u"&&Symbol.toStringTag&&Object.defineProperty(n,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(n,"__esModule",{value:!0})},o.t=function(n,t){if(1&t&&(n=o(n)),8&t||4&t&&typeof n=="object"&&n&&n.__esModule)return n;var e=Object.create(null);if(o.r(e),Object.defineProperty(e,"default",{enumerable:!0,value:n}),2&t&&typeof n!="string")for(var r in n)o.d(e,r,(function(c){return n[c]}).bind(null,r));return e},o.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return o.d(t,"a",t),t},o.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},o.p="",o(o.s=0)}([function(i,u,o){Object.defineProperty(u,"__esModule",{value:!0});var n=o(1),t=o(2);u.default=function(e,r,c,f,l){var g=typeof f=="function"?f:n.default.get(f),_=null,x=r-e,y=!1;function v(d,m){if(!y){var p=m-(_=_||m);l(g(p,e,x,c)),p<c?window.requestAnimationFrame(v.bind(null,d)):d("Animation complete")}}return new t.default(function(d,m,p){window.requestAnimationFrame(v.bind(null,d)),p(function(){return y=!0})})}},function(i,u,o){Object.defineProperty(u,"__esModule",{value:!0}),u.default={default:"easeInQuad",get:function(n){return this[n]?this[n]:this[this.default]},linear:function(n,t,e,r){return e*n/r+t},easeInQuad:function(n,t,e,r){return e*(n/=r)*n+t},easeOutQuad:function(n,t,e,r){return-e*(n/=r)*(n-2)+t},easeInOutQuad:function(n,t,e,r){return(n/=r/2)<1?e/2*n*n+t:-e/2*(--n*(n-2)-1)+t},easeInCubic:function(n,t,e,r){return e*(n/=r)*n*n+t},easeOutCubic:function(n,t,e,r){return e*((n=n/r-1)*n*n+1)+t},easeInOutCubic:function(n,t,e,r){return(n/=r/2)<1?e/2*n*n*n+t:e/2*((n-=2)*n*n+2)+t},easeInQuart:function(n,t,e,r){return e*(n/=r)*n*n*n+t},easeOutQuart:function(n,t,e,r){return-e*((n=n/r-1)*n*n*n-1)+t},easeInOutQuart:function(n,t,e,r){return(n/=r/2)<1?e/2*n*n*n*n+t:-e/2*((n-=2)*n*n*n-2)+t},easeInQuint:function(n,t,e,r){return e*(n/=r)*n*n*n*n+t},easeOutQuint:function(n,t,e,r){return e*((n=n/r-1)*n*n*n*n+1)+t},easeInOutQuint:function(n,t,e,r){return(n/=r/2)<1?e/2*n*n*n*n*n+t:e/2*((n-=2)*n*n*n*n+2)+t}}},function(i,u,o){Object.defineProperty(u,"__esModule",{value:!0});var n=function(){function t(e){var r=this;this.cancelHandler=function(c){},this.isPending=!0,this.isCanceled=!1,this.promise=new Promise(function(c,f){return e(function(l){r.isPending=!1,c(l)},function(l){r.isPending=!1,f(l)},function(l){if(!r.isPending)throw new Error("The `onCancel` handler was attached after the promise settled.");r.cancelHandler=l})})}return t.prototype.then=function(e,r){return this.promise.then(e,r)},t.prototype.catch=function(e){return this.promise.catch(e)},t.prototype.cancel=function(e){this.isPending&&!this.isCanceled&&(this.cancelHandler(e),this.isCanceled=!0)},t}();u.default=n}])})})(h);var Q=h.exports;const j=C(Q),M=(a,s=2)=>(a=parseFloat(a).toFixed(s),Number(a).toLocaleString("en")),F=(a,s=1)=>{const i=[{value:1,symbol:""},{value:1e3,symbol:"K"},{value:1e6,symbol:"M"},{value:1e9,symbol:"B"},{value:1e12,symbol:"t"},{value:1e15,symbol:"q"},{value:1e18,symbol:"Q"}],u=/\.0+$|(\.\d*[1-9])0+$/,o=i.slice().reverse().find(function(n){return a>=n.value});return o?(a/o.value).toFixed(s).replace(u,"$1")+o.symbol:"0"},b=(a,s)=>{let i=500;const u=s-a;return 500>=u||(i=u/10,1e3>i&&(i=1e3),3500<i&&(i=3500)),i},I=(a,s,i,u=null)=>j(a,s,u||b(0,s),"easeInOutQuad",o=>i instanceof Function?i(o.toFixed(0)):i=o.toFixed(0)),T={numberFormat:M,compactNumber:F,getDuration:b,animateNumbers:I},S={},A={viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"aioseo-circle-close"},B=L("path",{"fill-rule":"evenodd","clip-rule":"evenodd",d:"M12 2.00006C6.47 2.00006 2 6.47006 2 12.0001C2 17.5301 6.47 22.0001 12 22.0001C17.53 22.0001 22 17.5301 22 12.0001C22 6.47006 17.53 2.00006 12 2.00006ZM14.59 8.00006L12 10.5901L9.41 8.00006L8 9.41006L10.59 12.0001L8 14.5901L9.41 16.0001L12 13.4101L14.59 16.0001L16 14.5901L13.41 12.0001L16 9.41006L14.59 8.00006ZM4 12.0001C4 16.4101 7.59 20.0001 12 20.0001C16.41 20.0001 20 16.4101 20 12.0001C20 7.59006 16.41 4.00006 12 4.00006C7.59 4.00006 4 7.59006 4 12.0001Z",fill:"currentColor"},null,-1),E=[B];function N(a,s){return O(),w("svg",A,E)}const U=P(S,[["render",N]]);export{U as S,T as n};
