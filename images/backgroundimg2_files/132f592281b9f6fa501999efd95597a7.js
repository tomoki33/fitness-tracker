(function(){/*

 Copyright The Closure Library Authors.
 SPDX-License-Identifier: Apache-2.0
*/
var m=this||self;function n(a,b){function c(){}c.prototype=b.prototype;a.J=b.prototype;a.prototype=new c;a.prototype.constructor=a;a.I=function(d,e,f){for(var h=Array(arguments.length-2),k=2;k<arguments.length;k++)h[k-2]=arguments[k];return b.prototype[e].apply(d,h)}};function p(a,b){return a.g?a.j.slice(0,a.g.index)+b+a.j.slice(a.g.index):a.j+b}function ba(a,b){return a.i&&a.h||a.l?1==b?a.i?a.h:p(a,"&dct=1"):2==b?p(a,"&ri=2"):p(a,"&ri=16"):a.j}var ca=class{constructor({url:a}){this.j=a;const b=/[?&]dsh=1(&|$)/.test(a);this.i=!b&&/[?&]ae=1(&|$)/.test(a);this.l=!b&&/[?&]ae=2(&|$)/.test(a);if((this.g=/[?&]adurl=([^&]*)/.exec(a))&&this.g[1]){let c;try{c=decodeURIComponent(this.g[1])}catch(d){c=null}this.h=c}}};function da(a,b){a:{for(var c=a.length,d="string"===typeof a?a.split(""):a,e=0;e<c;e++)if(e in d&&b.call(void 0,d[e],e,a)){b=e;break a}b=-1}return 0>b?null:"string"===typeof a?a.charAt(b):a[b]};var r=class{constructor(a,b){this.g=b===ea?a:""}};r.prototype.i=!0;r.prototype.h=function(){return this.g.toString()};var fa=/^(?:(?:https?|mailto|ftp):|[^:/?#]*(?:[/?#]|$))/i,ea={};var t;a:{var ha=m.navigator;if(ha){var ia=ha.userAgent;if(ia){t=ia;break a}}t=""};function ka(a){let b=!1,c;return function(){b||(c=a(),b=!0);return c}};function v(a,b){b instanceof r||b instanceof r||(b="object"==typeof b&&b.i?b.h():String(b),fa.test(b)||(b="about:invalid#zClosurez"),b=new r(b,ea));a.href=b instanceof r&&b.constructor===r?b.g:"type_error:SafeUrl"};function la(){return Math.floor(2147483648*Math.random()).toString(36)+Math.abs(Math.floor(2147483648*Math.random())^Date.now()).toString(36)};function ma(){return-1!=t.indexOf("iPhone")&&-1==t.indexOf("iPod")&&-1==t.indexOf("iPad")};function na(a){na[" "](a);return a}na[" "]=function(){};var oa=ma(),pa=-1!=t.indexOf("iPad");var qa=ma()||-1!=t.indexOf("iPod"),ra=-1!=t.indexOf("iPad");var sa={},ta=null;function ua(a){if(a.i){if(a.j){var b=a.g;for(d in b)if(Object.prototype.hasOwnProperty.call(b,d)){var c=b[d].g;c&&c.o()}}}else{a.h.length=0;var d=w(a);d.sort();for(b=0;b<d.length;b++){let e=a.g[d[b]];(c=e.g)&&c.o();a.h.push([e.key,e.value])}a.i=!0}return a.h}function w(a){a=a.g;var b=[],c;for(c in a)Object.prototype.hasOwnProperty.call(a,c)&&b.push(c);return b}function va(a,b){return a.j?(b.g||(b.g=new a.j(b.value),a.isFrozen()&&null(b.g)),b.g):b.value}
function wa(a,b){var c=w(a);c.sort();for(var d=0;d<c.length;d++){let e=a.g[c[d]];b.call(void 0,va(a,e),e.key,a)}}
class xa{constructor(a,b){this.h=a;this.j=b;this.g={};this.i=!0;if(0<this.h.length){for(a=0;a<this.h.length;a++){b=this.h[a];var c=b[0];this.g[c.toString()]=new ya(c,b[1])}this.i=!0}}isFrozen(){return!1}o(){return ua(this)}D(){return ua(this)}entries(){var a=[],b=w(this);b.sort();for(var c=0;c<b.length;c++){let d=this.g[b[c]];a.push([d.key,va(this,d)])}return new za(a)}keys(){var a=[],b=w(this);b.sort();for(var c=0;c<b.length;c++)a.push(this.g[b[c]].key);return new za(a)}values(){var a=[],b=w(this);
b.sort();for(var c=0;c<b.length;c++)a.push(va(this,this.g[b[c]]));return new za(a)}set(a,b){var c=new ya(a);this.j?(c.g=b,c.value=b.D()):c.value=b;this.g[a.toString()]=c;this.i=!1;return this}get(a){if(a=this.g[a.toString()])return va(this,a)}has(a){return a.toString()in this.g}}class ya{constructor(a,b){this.key=a;this.value=b;this.g=void 0}}class za{constructor(a){this.g=0;this.h=a}next(){return this.g<this.h.length?{done:!1,value:this.h[this.g++]}:{done:!0,value:void 0}}}
"undefined"!=typeof Symbol&&"undefined"!=typeof Symbol.iterator&&(za.prototype[Symbol.iterator]=function(){return this});function x(){}var Aa="function"==typeof Uint8Array;function y(a,b,c){a.h=null;b||(b=[]);a.v=void 0;a.j=-1;a.g=b;a:{if(b=a.g.length){--b;var d=a.g[b];if(!(null===d||"object"!=typeof d||Array.isArray(d)||Aa&&d instanceof Uint8Array)){a.l=b-a.j;a.i=d;break a}}a.l=Number.MAX_VALUE}a.u={};if(c)for(b=0;b<c.length;b++)d=c[b],d<a.l?(d+=a.j,a.g[d]=a.g[d]||Ba):(Ca(a),a.i[d]=a.i[d]||Ba)}var Ba=[];function Ca(a){var b=a.l+a.j;a.g[b]||(a.i=a.g[b]={})}
function z(a,b){if(b<a.l){b+=a.j;var c=a.g[b];return c!==Ba?c:a.g[b]=[]}if(a.i)return c=a.i[b],c===Ba?a.i[b]=[]:c}function A(a,b,c){a=z(a,b);return null==a?c:a}function E(a,b){return A(a,b,"")}function F(a,b){a=z(a,b);a=null==a?a:!!a;return null==a?!1:a}function H(a,b,c){a.h||(a.h={});if(b in a.h)return a.h[b];var d=z(a,b);d||(d=[],I(a,b,d));c=new xa(d,c);return a.h[b]=c}function I(a,b,c){b<a.l?a.g[b+a.j]=c:(Ca(a),a.i[b]=c);return a}
function J(a,b,c){a.h||(a.h={});if(!a.h[c]){var d=z(a,c);d&&(a.h[c]=new b(d))}return a.h[c]}function Da(a){if(a.h)for(var b in a.h){var c=a.h[b];if(Array.isArray(c))for(var d=0;d<c.length;d++)c[d]&&c[d].o();else c&&c.o()}}x.prototype.o=function(){Da(this);return this.g};x.prototype.D=function(){Da(this);return this.g};
x.prototype.s=Aa?function(){var a=Uint8Array.prototype.toJSON;Uint8Array.prototype.toJSON=function(){var b;void 0===b&&(b=0);if(!ta){ta={};for(var c="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789".split(""),d=["+/=","+/","-_=","-_.","-_"],e=0;5>e;e++){var f=c.concat(d[e].split(""));sa[e]=f;for(var h=0;h<f.length;h++){var k=f[h];void 0===ta[k]&&(ta[k]=h)}}}b=sa[b];c=[];for(d=0;d<this.length;d+=3){var g=this[d],l=(e=d+1<this.length)?this[d+1]:0;k=(f=d+2<this.length)?this[d+2]:0;h=g>>
2;g=(g&3)<<4|l>>4;l=(l&15)<<2|k>>6;k&=63;f||(k=64,e||(l=64));c.push(b[h],b[g],b[l]||"",b[k]||"")}return c.join("")};try{return JSON.stringify(this.g&&this.o(),Ea)}finally{Uint8Array.prototype.toJSON=a}}:function(){return JSON.stringify(this.g&&this.o(),Ea)};function Ea(a,b){return"number"!==typeof b||!isNaN(b)&&Infinity!==b&&-Infinity!==b?b:String(b)}x.prototype.toString=function(){return this.o().toString()};
function Fa(a){if(Array.isArray(a)){for(var b=Array(a.length),c=0;c<a.length;c++){var d=a[c];null!=d&&(b[c]="object"==typeof d?Fa(d):d)}return b}if(Aa&&a instanceof Uint8Array)return new Uint8Array(a);b={};for(c in a)d=a[c],null!=d&&(b[c]="object"==typeof d?Fa(d):d);return b};function Ja(a){y(this,a,null)}n(Ja,x);function Ka(a){y(this,a,La)}n(Ka,x);function K(a){y(this,a,null)}n(K,x);function Ma(a){y(this,a,null)}n(Ma,x);var La=[6,7];function Na(a){y(this,a,Oa)}n(Na,x);var Oa=[17];class Pa{constructor(a,b){this.error=a;this.context=b.context;this.msg=b.message||"";this.id=b.id||"jserror";this.meta={}}};var Qa={capture:!0},Ra={passive:!0},Sa=ka(function(){let a=!1;try{const b=Object.defineProperty({},"passive",{get:function(){a=!0}});m.addEventListener("test",null,b)}catch(b){}return a});function Ta(a){return a?a.passive&&Sa()?a:a.capture||!1:!1}function L(a,b,c,d){a.addEventListener&&a.addEventListener(b,c,Ta(d))}function Ua(a,b,c){a.removeEventListener&&a.removeEventListener(b,c,Ta(void 0))};var Va=/^(?:([^:/?#.]+):)?(?:\/\/(?:([^\\/?#]*)@)?([^\\/?#]*?)(?::([0-9]+))?(?=[\\/?#]|$))?([^?#]+)?(?:\?([^#]*))?(?:#([\s\S]*))?$/;function Wa(a){var b=a.indexOf("#");0>b&&(b=a.length);var c=a.indexOf("?");if(0>c||c>b){c=b;var d=""}else d=a.substring(c+1,b);return[a.substr(0,c),d,a.substr(b)]}function Xa(a,b){return b?a?a+"&"+b:b:a}function Ya(a,b){if(!b)return a;a=Wa(a);a[1]=Xa(a[1],b);return a[0]+(a[1]?"?"+a[1]:"")+a[2]}
function Za(a,b,c){if(Array.isArray(b))for(var d=0;d<b.length;d++)Za(a,String(b[d]),c);else null!=b&&c.push(a+(""===b?"":"="+encodeURIComponent(String(b))))}function $a(a){var b=[],c;for(c in a)Za(c,a[c],b);return b.join("&")}function ab(a,b){a=Wa(a);var c=a[1],d=[];c&&c.split("&").forEach(function(e){var f=e.indexOf("=");b.hasOwnProperty(0<=f?e.substr(0,f):e)||d.push(e)});a[1]=Xa(d.join("&"),$a(b));return a[0]+(a[1]?"?"+a[1]:"")+a[2]};function bb(a){try{var b;if(b=!!a&&null!=a.location.href)a:{try{na(a.foo);b=!0;break a}catch(c){}b=!1}return b}catch(c){return!1}}function cb(a,b){if(a)for(const c in a)Object.prototype.hasOwnProperty.call(a,c)&&b.call(void 0,a[c],c,a)}let db=[];const eb=()=>{const a=db;db=[];for(const b of a)try{b()}catch(c){}};
var fb=a=>{var b=N;"complete"===b.readyState||"interactive"===b.readyState?(db.push(a),1==db.length&&(window.Promise?Promise.resolve().then(eb):window.setImmediate?setImmediate(eb):setTimeout(eb,0))):b.addEventListener("DOMContentLoaded",a)};function O(a,b,c=null){gb(a,b,c)}function gb(a,b,c){a.google_image_requests||(a.google_image_requests=[]);const d=a.document.createElement("img");if(c){const e=f=>{c&&c(f);Ua(d,"load",e);Ua(d,"error",e)};L(d,"load",e);L(d,"error",e)}d.src=b;a.google_image_requests.push(d)};let ib=0;function jb(a){return(a=kb(a,document.currentScript))&&a.getAttribute("data-jc-version")||"unknown"}function kb(a,b=null){return b&&b.getAttribute("data-jc")===String(a)?b:document.querySelector(`[${"data-jc"}="${a}"]`)}
function lb(a){if(!(.01<Math.random())){a=`https://${"pagead2.googlesyndication.com"}/pagead/gen_204?id=jca&jc=${a}&version=${jb(a)}&sample=${.01}`;var b=window,c;if(c=b.navigator)c=b.navigator.userAgent,c=/Chrome/.test(c)&&!/Edge/.test(c)?!0:!1;c&&b.navigator.sendBeacon?b.navigator.sendBeacon(a):O(b,a)}};var N=document,P=window;var nb={};function ob(){if(nb!==nb)throw Error("Bad secret");};function pb(){var a="undefined"!==typeof window?window.trustedTypes:void 0;return null!==a&&void 0!==a?a:null};var qb,rb=class{};class sb extends rb{constructor(){var a=null!==tb&&void 0!==tb?tb:"";super();ob();this.g=a}toString(){return this.g.toString()}}var tb=null===(qb=pb())||void 0===qb?void 0:qb.emptyHTML;new sb;var ub,vb=class{};class wb extends vb{constructor(){var a=null!==xb&&void 0!==xb?xb:"";super();ob();this.g=a}toString(){return this.g.toString()}}var xb=null===(ub=pb())||void 0===ub?void 0:ub.emptyScript;new wb;var yb=class{};class zb extends yb{constructor(a){super();ob();this.g=a}toString(){return this.g}};new zb("about:blank");var Ab=new zb("about:invalid#zTSz");const Fb="DATA HTTP HTTPS MAILTO FTP RELATIVE".split(" ");function Gb(a,b=Fb){var c;var d=a.substring(0,14).indexOf(":");d=null!==(c=Hb[0>d?"":a.substr(0,d).toLowerCase()])&&void 0!==c?c:Ib;if(b.includes(d.scheme)&&d.m(a))return new zb(a)}function Jb(a,b=Fb){return Gb(a,b)||Ab}
const Ib={scheme:"RELATIVE",m:a=>/^[^:/?#]*(?:[/?#]|$)/i.test(a)},Hb={tel:{scheme:"TEL",m:Q("tel:")},callto:{scheme:"CALLTO",m:a=>/^callto:\+?\d*$/i.test(a)},ssh:{scheme:"SSH",m:Q("ssh://")},rtsp:{scheme:"RTSP",m:Q("rtsp://")},data:{scheme:"DATA",m:a=>{{const b=a.match(/^data:(.*);base64,[a-z0-9+\/]+=*$/i);if(a=2===(null===b||void 0===b?void 0:b.length))a=b[1].match(/^([^;]+)(?:;\w+=(?:\w+|"[\w;,= ]+"))*$/i),a=2===(null===a||void 0===a?void 0:a.length)&&(/^image\/(?:bmp|gif|jpeg|jpg|png|tiff|webp|x-icon)$/i.test(a[1])||
/^video\/(?:mpeg|mp4|ogg|webm|x-matroska)$/i.test(a[1])||/^audio\/(?:3gpp2|3gpp|aac|L16|midi|mp3|mp4|mpeg|oga|ogg|opus|x-m4a|x-matroska|x-wav|wav|webm)$/i.test(a[1]))}return a}},http:{scheme:"HTTP",m:Q("http:")},https:{scheme:"HTTPS",m:Q("https:")},ftp:{scheme:"FTP",m:Q("ftp:")},mailto:{scheme:"MAILTO",m:Q("mailto:")},intent:{scheme:"INTENT",m:Q("intent:")},market:{scheme:"MARKET",m:Q("market:")},itms:{scheme:"ITMS",m:Q("itms:")},"itms-appss":{scheme:"ITMS_APPSS",m:Q("itms-appss:")},"itms-services":{scheme:"ITMS_SERVICES",
m:Q("itms-services:")}};function Q(a){return b=>b.substr(0,a.length).toLowerCase()===a};const Kb="HTTP HTTPS MAILTO FTP RELATIVE MARKET ITMS INTENT ITMS_APPSS".split(" ");function R(a,b){if(a instanceof r)return a;const c=Jb(a,Kb);c===Ab&&b(a);if(c instanceof zb)a=c.g;else throw Error("wrong type");return new r(a,ea)}var S=a=>{var b=`${"http:"===P.location.protocol?"http:":"https:"}//${"pagead2.googlesyndication.com"}/pagead/gen_204`;return c=>{c=$a({id:"unsafeurl",ctx:a,url:c});c=Ya(b,c);navigator.sendBeacon&&navigator.sendBeacon(c,"")}};var Lb=!!window.google_async_iframe_id;let T=Lb&&window.parent||window;var Mb=a=>{var b=N;try{return b.querySelectorAll("*["+a+"]")}catch(c){return[]}};const Nb=/^https?:\/\/(\w|-)+\.cdn\.ampproject\.(net|org)(\?|\/|$)/;var Ob=class{constructor(a,b){this.g=a;this.h=b}},Pb=class{constructor(a,b){this.url=a;this.C=!!b;this.depth=null}};function Qb(a,b){const c={};c[a]=b;return[c]}function Rb(a,b,c,d,e){const f=[];cb(a,function(h,k){(h=Sb(h,b,c,d,e))&&f.push(k+"="+h)});return f.join(b)}
function Sb(a,b,c,d,e){if(null==a)return"";b=b||"&";c=c||",$";"string"==typeof c&&(c=c.split(""));if(a instanceof Array){if(d=d||0,d<c.length){const f=[];for(let h=0;h<a.length;h++)f.push(Sb(a[h],b,c,d+1,e));return f.join(c[d])}}else if("object"==typeof a)return e=e||0,2>e?encodeURIComponent(Rb(a,b,c,d,e+1)):"...";return encodeURIComponent(String(a))}function Tb(a){let b=1;for(const c in a.h)b=c.length>b?c.length:b;return 3997-b-a.i.length-1}
function Ub(a,b,c){b=b+"//pagead2.googlesyndication.com"+c;let d=Tb(a)-c.length;if(0>d)return"";a.g.sort(function(f,h){return f-h});c=null;let e="";for(let f=0;f<a.g.length;f++){const h=a.g[f],k=a.h[h];for(let g=0;g<k.length;g++){if(!d){c=null==c?h:c;break}let l=Rb(k[g],a.i,",$");if(l){l=e+l;if(d>=l.length){d-=l.length;b+=l;e=a.i;break}c=null==c?h:c}}}a="";null!=c&&(a=e+"trn="+c);return b+a}class Vb{constructor(){this.i="&";this.h={};this.j=0;this.g=[]}};function Wb(a,b,c,d,e,f){if((d?a.g:Math.random())<(e||.01))try{let h;c instanceof Vb?h=c:(h=new Vb,cb(c,(g,l)=>{var u=h,q=u.j++;g=Qb(l,g);u.g.push(q);u.h[q]=g}));const k=Ub(h,a.h,"/pagead/gen_204?id="+b+"&");k&&("undefined"!==typeof f?O(m,k,f):O(m,k))}catch(h){}}class Xb{constructor(){this.h="http:"===P.location.protocol?"http:":"https:";this.g=Math.random()}};let Yb=null;var Zb=()=>{const a=m.performance;return a&&a.now&&a.timing?Math.floor(a.now()+a.timing.navigationStart):Date.now()},$b=()=>{const a=m.performance;return a&&a.now?a.now():null};class ac{constructor(a,b){var c=$b()||Zb();this.label=a;this.type=b;this.value=c;this.duration=0;this.uniqueId=Math.random();this.slotId=void 0}};const U=m.performance,bc=!!(U&&U.mark&&U.measure&&U.clearMarks),V=ka(()=>{var a;if(a=bc){var b;if(null===Yb){Yb="";try{a="";try{a=m.top.location.hash}catch(c){a=m.location.hash}a&&(Yb=(b=a.match(/\bdeid=([\d,]+)/))?b[1]:"")}catch(c){}}b=Yb;a=!!b.indexOf&&0<=b.indexOf("1337")}return a});function cc(a){a&&U&&V()&&(U.clearMarks(`goog_${a.label}_${a.uniqueId}_start`),U.clearMarks(`goog_${a.label}_${a.uniqueId}_end`))}
class dc{constructor(){var a=W;this.h=[];this.i=a||m;let b=null;a&&(a.google_js_reporting_queue=a.google_js_reporting_queue||[],this.h=a.google_js_reporting_queue,b=a.google_measure_js_timing);this.g=V()||(null!=b?b:1>Math.random())}start(a,b){if(!this.g)return null;a=new ac(a,b);b=`goog_${a.label}_${a.uniqueId}_start`;U&&V()&&U.mark(b);return a}};function ec(a){let b=a.toString();a.name&&-1==b.indexOf(a.name)&&(b+=": "+a.name);a.message&&-1==b.indexOf(a.message)&&(b+=": "+a.message);if(a.stack){a=a.stack;try{-1==a.indexOf(b)&&(a=b+"\n"+a);let c;for(;a!=c;)c=a,a=a.replace(/((https?:\/..*\/)[^\/:]*:\d+(?:.|\n)*)\2/,"$1");b=a.replace(/\n */g,"\n")}catch(c){}}return b}
function fc(a,b,c){let d,e;try{if(a.g&&a.g.g){e=a.g.start(b.toString(),3);d=c();var f=a.g;c=e;if(f.g&&"number"===typeof c.value){c.duration=($b()||Zb())-c.value;var h=`goog_${c.label}_${c.uniqueId}_end`;U&&V()&&U.mark(h);!f.g||2048<f.h.length||f.h.push(c)}}else d=c()}catch(k){f=!0;try{cc(e),f=a.s(b,new Pa(k,{message:ec(k)}),void 0,void 0)}catch(g){a.l(217,g)}if(!f)throw k;}return d}function gc(a,b){var c=hc;return(...d)=>fc(c,a,()=>b.apply(void 0,d))}
class ic{constructor(a=null){this.i=X;this.h=null;this.s=this.l;this.g=a;this.j=!1}pinger(){return this.i}l(a,b,c,d,e){e=e||"jserror";let f;try{const B=new Vb;var h=B;h.g.push(1);h.h[1]=Qb("context",a);b.error&&b.meta&&b.id||(b=new Pa(b,{message:ec(b)}));if(b.msg){h=B;var k=b.msg.substring(0,512);h.g.push(2);h.h[2]=Qb("msg",k)}var g=b.meta||{};b=g;if(this.h)try{this.h(b)}catch(M){}if(d)try{d(b)}catch(M){}d=B;g=[g];d.g.push(3);d.h[3]=g;{d=m;g=[];b=null;do{var l=d;if(bb(l)){var u=l.location.href;b=
l.document&&l.document.referrer||null}else u=b,b=null;g.push(new Pb(u||""));try{d=l.parent}catch(Z){d=null}}while(d&&l!=d);for(let Z=0,Bb=g.length-1;Z<=Bb;++Z)g[Z].depth=Bb-Z;l=m;if(l.location&&l.location.ancestorOrigins&&l.location.ancestorOrigins.length==g.length-1)for(u=1;u<g.length;++u){var q=g[u];q.url||(q.url=l.location.ancestorOrigins[u-1]||"",q.C=!0)}var C=g;let M=new Pb(m.location.href,!1);l=null;const Ga=C.length-1;for(q=Ga;0<=q;--q){var D=C[q];!l&&Nb.test(D.url)&&(l=D);if(D.url&&!D.C){M=
D;break}}D=null;const wc=C.length&&C[Ga].url;0!=M.depth&&wc&&(D=C[Ga]);f=new Ob(M,D)}if(f.h){C=B;var G=f.h.url||"";C.g.push(4);C.h[4]=Qb("top",G)}var Ha={url:f.g.url||""};if(f.g.url){var Ia=f.g.url.match(Va),aa=Ia[1],Cb=Ia[3],Db=Ia[4];G="";aa&&(G+=aa+":");Cb&&(G+="//",G+=Cb,Db&&(G+=":"+Db));var Eb=G}else Eb="";aa=B;Ha=[Ha,{url:Eb}];aa.g.push(5);aa.h[5]=Ha;Wb(this.i,e,B,this.j,c)}catch(B){try{Wb(this.i,e,{context:"ecmserr",rctx:a,msg:ec(B),url:f&&f.g.url},this.j,c)}catch(M){}}return!0}};let X,hc;if(Lb&&!bb(T)){let a="."+N.domain;try{for(;2<a.split(".").length&&!bb(T);)N.domain=a=a.substr(a.indexOf(".")+1),T=window.parent}catch(b){}bb(T)||(T=window)}const W=T,Y=new dc;var jc=()=>{W.google_measure_js_timing||(Y.g=!1,Y.h!=Y.i.google_js_reporting_queue&&(V()&&Array.prototype.forEach.call(Y.h,cc,void 0),Y.h.length=0))};X=new Xb;"number"!==typeof W.google_srt&&(W.google_srt=Math.random());var kc=X,lc=W.google_srt;0<=lc&&1>=lc&&(kc.g=lc);hc=new ic(Y);
hc.h=a=>{{const b=ib;0!==b&&(a.jc=String(b),a.shv=jb(b))}};hc.j=!0;"complete"==W.document.readyState?jc():Y.g&&L(W,"load",()=>{jc()});var mc=(a,b)=>gc(a,b);var nc=(a,b)=>{b=E(a,2)||b;if(!b)return"";if(F(a,13))return b;const c=/[?&]adurl=([^&]+)/.exec(b);if(!c)return b;const d=[b.slice(0,c.index+1)];wa(H(a,4,null),(e,f)=>{d.push(encodeURIComponent(f)+"="+encodeURIComponent(e)+"&")});d.push(b.slice(c.index+1));return d.join("")},oc=(a,b=[])=>{b=0<b.length?b:Mb("data-asoch-targets");a=H(a,1,Ka);const c=[];for(let k=0;k<b.length;++k){var d=b[k].getAttribute("data-asoch-targets"),e=d.split(","),f=!0;for(let g of e)if(!a.has(g)){f=!1;break}if(f){f=a.get(e[0]);
for(d=1;d<e.length;++d){{var h=a.get(e[d]);f=(new f.constructor(Fa(f.o()))).o();h=h.o();const g=Math.max(f.length,h.length);for(let l=0;l<g;++l)null==f[l]&&(f[l]=h[l]);f=new Ka(f)}}e=H(f,4,null);null!=z(f,5)&&e.set("nb",A(f,5,0).toString());c.push({element:b[k],data:f})}else Wb(X,"gdn-asoch",{type:1,data:d},!0,void 0,void 0)}return c},pc=a=>{for(const b of a)if(a=b.data,"A"==b.element.tagName&&!F(a,1)){const c=b.element,d=nc(a,c.href);0<d.length&&(v(c,R(d,S(609))),c.target||(c.target=null!=z(a,11)?
E(a,11):"_top"))}};function qc(a){y(this,a,rc)}n(qc,x);var rc=[6];const sc=["platform","platformVersion","architecture","model","uaFullVersion"];var tc=()=>{var a=window;return a.navigator&&a.navigator.userAgentData&&"function"===typeof a.navigator.userAgentData.getHighEntropyValues?a.navigator.userAgentData.getHighEntropyValues(sc).then(b=>{var c=new qc;c=I(c,1,b.platform);c=I(c,2,b.platformVersion);c=I(c,3,b.architecture);c=I(c,4,b.model);return I(c,5,b.uaFullVersion)}):null};function uc(a){for(const b of a)if("A"==b.element.tagName){a=b.element;const c=b.data;null!=z(c,2)||I(c,2,a.href)}}function vc(a){const b=[],c=[];for(var d of a)(a=d.data)&&null!=z(a,12)&&(c.push(J(a,K,12)),b.push(E(J(a,K,12),1)));d=(e,f)=>{if(f)for(const h of c)e=f[E(h,1)]||!1,I(h,2,e)};a=window.oneAfmaInstance;for(const e of b)a.canOpenAndroidApp(e,d)}
function xc(a){const b=window.oneAfmaInstance;if(b)for(const c of a)if((a=c.data)&&null!=z(a,8)&&(a=E(J(a,Ma,8),4))){b.fetchAppStoreOverlay(a);break}}function yc(a,b){return da(a,c=>c.element===b)}function zc(a){P.fetch?P.fetch(a,{method:"GET",keepalive:!0,mode:"no-cors"}).then(b=>{b.ok||O(P,a)}):O(P,a)}
function Ac(a,b,c,d){if(!a&&b&&null!=z(b,12)){var e=E(J(b,K,12),1);F(J(b,K,12),2)?(Bc({id:"gmob-apps",event:"och-open-android-app-before-click",appId:e,isDeepLinkPath:!1}),d.click(c),d.openAndroidApp(e),setTimeout(()=>{Bc({id:"gmob-apps",event:"och-open-android-app",appId:e,isDeepLinkPath:!1})},1E3)):Bc({id:"gmob-apps",event:"och-open-android-app-validated-false",appId:e,isDeepLinkPath:!1})}}
function Cc(a,b,c,d,e){if(!c||null==z(c,8))return!1;const f=J(c,Ma,8);let h=E(f,2);wa(H(c,10,null),(k,g)=>{{var l=h;g=encodeURIComponent(g);const u=encodeURIComponent(k);k=new RegExp("[?&]"+g+"=([^&]+)");const q=k.exec(l);console.log(q);g=g+"="+u;h=q?l.replace(k,q[0].charAt(0)+g):l.replace("?","?"+g+"&")}});Bc({id:"gmob-apps",event:"och-try-u2-redirect",appId:E(f,4)||"",isIos:a,isDeepLinkPath:!1});return e.redirectForStoreU2({clickUrl:d,trackingUrl:E(f,3),finalUrl:h,pingFunc:e.click,openFunc:b?e.openStoreOverlay:
e.openIntentOrNativeApp})}function Dc(a,b=null){if(null!==b){const c=new ca({url:a});if(c.i&&c.h||c.l)return b(p(c,"&act=1&ri=1")),ba(c,1)}else return b=new ca({url:a}),a=b.i&&b.h||b.l?navigator.sendBeacon?navigator.sendBeacon(p(b,"&act=1&ri=1"),"")?ba(b,1):ba(b,2):ba(b,0):a;return a}function Bc(a){var b=la();b=null!=b?"="+encodeURIComponent(String(b)):"";b=Ya("https://pagead2.googlesyndication.com/pagead/gen_204","zx"+b);zc(ab(b,a))}function Ec(a){fb(mc(556,()=>{new Fc(a||{})}))}
function Gc(a,b,c,d){if(!F(d,13)){var e=c.href;var f=/[?&]adurl=([^&]+)/.exec(e);e=f?[e.slice(0,f.index),e.slice(f.index)]:[e,""];for(v(c,R(e[0],S(557)));!c.id;)if(f="asoch-id-"+la(),!N.getElementById(f)){c.id=f;break}f=c.id;"function"===typeof window.xy&&window.xy(b,c,N.body);"function"===typeof window.mb&&window.mb(c);"function"===typeof window.bgz&&window.bgz(f);"function"===typeof window.ja&&window.ja(f,d?A(d,5,0):0);a.j&&"function"===typeof window.ss&&(a.A?window.ss(f,1,a.j):window.ss(a.j,1));
0<e.length&&(a=0<a.v.length?c.href+"&uach="+encodeURIComponent(a.v)+e[1]:c.href+e[1],v(c,R(a,S(557))))}}async function Hc(a,b,c,d){let e="";window.oneAfmaInstance&&(e=await window.oneAfmaInstance.appendClickSignalsAsync(c.href)||"");Ic(a,b,c,d,e)}
function Ic(a,b,c,d,e){const f=F(a.g,2),h=f&&Date.now()-a.G>a.H;if(window.oneAfmaInstance){b.preventDefault?b.preventDefault():b.returnValue=!1;var k=window.oneAfmaInstance;b=a.h&&F(a.h,14)||!1;c=F(a.g,13)||a.h&&F(a.h,13);a.h&&F(a.h,18);var g=k.logScionEventAndAddParam(e);Ac(a.l,d,g,k);if(!Cc(a.l,a.B,d,g,k)){{e=c;c=a.l;b=b&&F(d,15);const l=!/[?&]dsh=1(&|$)/.test(g)&&/[?&]ae=1(&|$)/.test(g);f&&h&&!b&&l&&(g=Dc(g,k.click));g&&g.startsWith("intent:")?(k.openIntentOrNativeApp(g),Bc({id:"gmob-apps",event:"och-open-intent-or-native-app",
appId:null!=z(d,8)&&E(J(d,Ma,8),4)||"",isIos:c,isDeepLinkPath:!1})):e?k.openChromeCustomTab(g):k.openSystemBrowser(g,{useFirstPackage:!0,useRunningProcess:!0})}}}else h&&(d=Dc(c.href),d!==c.href&&v(c,R(d,S(599))));h&&(a.G=Date.now());lb(a.F)}
var Fc=class{constructor(a){this.l=qa||oa||ra||pa;var b=Mb("data-asoch-meta");if(1!==b.length)Wb(X,"gdn-asoch",{type:2,data:b.length},!0,void 0,void 0);else{this.F=70;this.g=new Na(JSON.parse(b[0].getAttribute("data-asoch-meta"))||[]);this.h=a["extra-meta"]?new Na(JSON.parse(a["extra-meta"])):null;this.B=this.l&&"true"===a["ios-store-overlay"];this.v="";if(F(this.g,15)||this.h&&F(this.h,15))b=tc(),null!=b&&b.then(c=>{this.v=c.s()});this.i=oc(this.g);this.H=Number(a["async-click-timeout"])||300;this.G=
-Infinity;this.j=E(this.g,5)||"";this.A=F(this.g,11);this.h&&(this.A=F(this.h,11));this.u=this.s=null;F(this.g,3)||(pc(this.i),I(this.g,3,!0));uc(this.i);!this.l&&window.oneAfmaInstance&&vc(this.i);window.oneAfmaInstance&&this.B&&"true"===a["prefetch-ios-store-overlay"]&&xc(this.i);L(N,"click",mc(557,c=>{a:if(!c.defaultPrevented||this.s===c){for(var d,e,f=c.target;(!d||!e)&&f;){e||"A"!=f.tagName||(e=f);var h=f.hasAttribute("data-asoch-targets");!d&&("A"==f.tagName||h)&&(h=h&&"true"===f.getAttribute("data-asoch-is-dynamic")?
oc(this.g,[f]):this.i,h=yc(h,f))&&(d=h.data);f=f.parentElement}if(f=d&&!F(d,1)){if(c.defaultPrevented){var k=e;if(this.s===c&&this.u){var g=new Ja(this.u);e=E(d,9);f="";switch(A(g,4,1)){case 2:if(A(g,2,0))f="blocked_fast_click";else if(E(g,1)||E(g,7))f="blocked_border_click";break;case 3:g=N,g=g.getElementById?g.getElementById("common_15click_anchor"):null,"function"===typeof window.copfcChm&&g&&(d=new d.constructor(Fa(d.o())),I(d,5,12),H(d,4,null).set("nb",(12).toString()),(f=yc(this.i,g))?f.data=
d:this.i.push({element:g,data:d}),k&&(Gc(this,c,k,d),I(d,2,k.href)),window.copfcChm(c,nc(d,g.href))),f="onepointfiveclick_first_click"}e&&f&&zc(e+"&label="+f);lb(this.F)}break a}h=d;for(g of z(h,6))zc(g)}if(e&&f){d=f?d:null;(g=yc(this.i,e))?g=g.data:(g=new Ka,I(g,2,e.href),I(g,11,e.target||"_top"),this.i.push({element:e,data:g}));g=nc(d||g,E(g,2));0<g.length&&(v(e,R(g,S(557))),e.target||(e.target=d&&null!=z(d,11)?E(d,11):"_top"));Gc(this,c,e,d);for(k of z(this.g,17)){{let l;g=k;f=N.body;h={};"function"===
typeof window.CustomEvent?l=new CustomEvent(g,h):(l=document.createEvent("CustomEvent"),l.initCustomEvent(g,!!h.bubbles,!!h.cancelable,h.detail));f.dispatchEvent(l)}}F(this.g,16)?Hc(this,c,e,d):(k="",window.oneAfmaInstance&&(k=window.oneAfmaInstance.appendClickSignals(e.href)),Ic(this,c,e,d,k))}}}),Qa);this.j&&"function"===typeof window.ss&&L(N.body,"mouseover",mc(626,()=>{window.ss(this.j,0)}),Ra);a=window;a.googqscp&&"function"===typeof a.googqscp.registerCallback&&a.googqscp.registerCallback((c,
d)=>{this.s=c;this.u=d})}}};{var Jc=mc(555,b=>Ec(b));ib=70;const a=kb(70,document.currentScript);if(null==a)throw Error("JSC not found 70");var Kc;{const b={},c=a.attributes;for(let d=c.length-1;0<=d;d--){const e=c[d].name;0===e.indexOf("data-jcp-")&&(b[e.substring(9)]=c[d].value)}Kc=b}Jc(Kc)};}).call(this);
