(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-2d275494"],{"4c3e":function(t,e,a){"use strict";var s=a("5fb1"),c=a.n(s);c.a},"5fb1":function(t,e,a){},"71f8":function(t,e,a){},9239:function(t,e,a){"use strict";var s=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"header"},[t._t("default")],2)},c=[],n={},i=n,o=(a("4c3e"),a("2877")),l=Object(o["a"])(i,s,c,!1,null,"8ed314aa",null);e["a"]=l.exports},be44:function(t,e,a){"use strict";var s=a("71f8"),c=a.n(s);c.a},caaa:function(t,e,a){},d7c7:function(t,e,a){"use strict";var s=a("caaa"),c=a.n(s);c.a},fed7:function(t,e,a){"use strict";a.r(e);var s=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"hello"},[a("myHeader",[t._v("收藏")]),t._l(t.collectList,function(t,e){return a("item",{key:e,attrs:{data:t}})})],2)},c=[],n=a("9239"),i=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"item_box"},[a("div",{staticClass:"img_box"},[a("img",{attrs:{src:t.data.bookCover,alt:""}})]),a("div",{staticClass:"conten_box"},[a("h2",[t._v(t._s(t.data.bookName))]),a("p",{staticClass:"desc"},[t._v(t._s(t.data.bookInfo))]),a("div",{staticClass:"price"},[t._v(t._s(t.data.bookPrice))]),a("div",{staticClass:"btn_box"},[a("button",{on:{click:function(e){return t.del(t.data.bookId)}}},[t._v("删除")])])])])},o=[],l={props:{data:{type:Object,default:function(){return{}}}},methods:{del:function(t){this.$store.commit("delCollect",t)}}},r=l,u=(a("be44"),a("2877")),d=Object(u["a"])(r,i,o,!1,null,"8ec3dbb0",null),f=d.exports,b={name:"HelloWorld",props:{msg:String},components:{myHeader:n["a"],item:f},created:function(){this.$store.dispatch("getCollectList")},updated:function(){this.$store.dispatch("getCollectList")},computed:{collectList:function(){return this.$store.state.collectList}}},v=b,p=(a("d7c7"),Object(u["a"])(v,s,c,!1,null,"342eff66",null));e["default"]=p.exports}}]);