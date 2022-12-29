import{b as Z,d as $,N as ee,M as _,j as D,O as te,L as oe,r as c,o,E as a,w as e,f as n,u,c as R,q as L,F as S,Q as N,p as x,t as H,W as d}from"./index-5427279b.js";import{l as i}from"./index-961888e8.js";import{i as ne}from"./icon-d6196121.js";import{C as ae}from"./index-4153922e.js";import{u as V,C as G}from"./chartLayoutStore-9baa7ec7.js";import{u as se}from"./chartEditStore-53dc1709.js";import"./theme-color-0deb5eeb.js";import"./plugin-49832ae5.js";var s=(r=>(r.PAGE_SETTING="pageSetting",r.CHART_SETTING="chartSetting",r.CHART_ANIMATION="chartAnimation",r.CHART_DATA="chartData",r.CHART_EVENT="chartEvent",r))(s||{});const re=$({__name:"index",setup(r){const{getDetails:A}=ee(V()),{setItem:v}=V(),p=se(),{ConstructIcon:O,FlashIcon:P,DesktopOutlineIcon:w,LeafIcon:z,RocketIcon:B}=ne.ionicons5,F=i(()=>_(()=>import("./index-a1821fa3.js"),["static/js/index-a1821fa3.js","static/css/index-92c24842.css","static/css/SettingItemBox.vue_vue_type_style_index_0_scoped_true_lang-180d0bf1.css","static/js/chartEditStore-53dc1709.js","static/js/index-5427279b.js","static/css/index-c34cea1e.css","static/js/plugin-49832ae5.js","static/js/icon-d6196121.js","static/js/index-6e87b835.js","static/css/index-37606455.css","static/js/index-961888e8.js","static/css/index-8f2c5737.css","static/js/theme-color-0deb5eeb.js","static/js/index-147c69c9.js","static/css/index-c9612015.css","static/js/useKeyboard.hook-ecc815a5.js","static/js/index-cd09e6dc.js","static/css/index-3e66113d.css","static/js/_arrayMap-23a2d4b9.js","static/js/tables_list-a7382472.js","static/js/http-6ded690c.js","static/js/SettingItemBox-35417b6f.js","static/js/CollapseItem-fd18501b.js","static/js/index-4153922e.js","static/css/index-7c15b129.css","static/js/chartLayoutStore-9baa7ec7.js","static/js/fileTypeEnum-2ae15dd8.js"])),M=i(()=>_(()=>import("./index-fa24fb69.js"),["static/js/index-fa24fb69.js","static/css/index-21cd6a71.css","static/css/SettingItemBox.vue_vue_type_style_index_0_scoped_true_lang-180d0bf1.css","static/js/index-5427279b.js","static/css/index-c34cea1e.css","static/js/noImage-91f53245.js","static/js/fileTypeEnum-2ae15dd8.js","static/js/chartEditStore-53dc1709.js","static/js/plugin-49832ae5.js","static/js/icon-d6196121.js","static/js/index-961888e8.js","static/css/index-8f2c5737.css","static/js/theme-color-0deb5eeb.js","static/js/StylesSetting-1e57eddb.js","static/js/SettingItemBox-35417b6f.js","static/js/CollapseItem-fd18501b.js"])),j=i(()=>_(()=>import("./index-43cfb1f5.js"),["static/js/index-43cfb1f5.js","static/css/index-dbfa59de.css","static/css/SettingItemBox.vue_vue_type_style_index_0_scoped_true_lang-180d0bf1.css","static/js/index-5427279b.js","static/css/index-c34cea1e.css","static/js/SettingItemBox-35417b6f.js","static/js/icon-d6196121.js","static/js/StylesSetting-1e57eddb.js","static/js/chartEditStore-53dc1709.js","static/js/plugin-49832ae5.js","static/js/CollapseItem-fd18501b.js","static/js/useTargetData.hook-f855ff49.js"])),q=i(()=>_(()=>import("./index-6532fc40.js"),["static/js/index-6532fc40.js","static/css/index-0f2955d2.css","static/css/SettingItemBox.vue_vue_type_style_index_0_scoped_true_lang-180d0bf1.css","static/js/SettingItemBox-35417b6f.js","static/js/index-5427279b.js","static/css/index-c34cea1e.css","static/js/useTargetData.hook-f855ff49.js","static/js/chartEditStore-53dc1709.js","static/js/plugin-49832ae5.js","static/js/icon-d6196121.js","static/js/EditorWorker-a9d0b3e4.js","static/css/EditorWorker-d140d548.css","static/js/editorWorker-a0599278.js","static/js/http-6ded690c.js","static/js/fileTypeEnum-2ae15dd8.js"])),Q=i(()=>_(()=>import("./index-fb6026fa.js"),["static/js/index-fb6026fa.js","static/css/index-71238604.css","static/js/index-5427279b.js","static/css/index-c34cea1e.css","static/js/EditorWorker-a9d0b3e4.js","static/css/EditorWorker-d140d548.css","static/js/editorWorker-a0599278.js","static/js/useTargetData.hook-f855ff49.js","static/js/chartEditStore-53dc1709.js","static/js/plugin-49832ae5.js","static/js/icon-d6196121.js","static/js/useLifeHandler.hook-96539d1c.js"])),U=i(()=>_(()=>import("./index-2e1e8e3b.js"),["static/js/index-2e1e8e3b.js","static/css/index-560b1228.css","static/css/SettingItemBox.vue_vue_type_style_index_0_scoped_true_lang-180d0bf1.css","static/js/index-5427279b.js","static/css/index-c34cea1e.css","static/js/CollapseItem-fd18501b.js","static/js/useTargetData.hook-f855ff49.js","static/js/chartEditStore-53dc1709.js","static/js/plugin-49832ae5.js","static/js/icon-d6196121.js"])),m=D(A.value),f=D(s.CHART_SETTING),y=()=>{m.value=!0,v(G.DETAILS,!0)},C=()=>{m.value=!1,v(G.DETAILS,!1)},T=te(()=>{if(p.getTargetChart.selectId.length!==1)return;const l=p.componentList[p.fetchTargetIndex()];return l!=null&&l.isGroup&&(f.value=s.CHART_SETTING),l});oe(A,E=>{E?y():C()});const W=[{key:s.PAGE_SETTING,title:"\u9875\u9762\u914D\u7F6E",icon:w,render:M}],I=[{key:s.CHART_SETTING,title:"\u5B9A\u5236",icon:O,render:j},{key:s.CHART_ANIMATION,title:"\u52A8\u753B",icon:z,render:U}],J=[...I,{key:s.CHART_DATA,title:"\u6570\u636E",icon:P,render:q},{key:s.CHART_EVENT,title:"\u4E8B\u4EF6",icon:B,render:Q}];return(E,l)=>{const K=c("n-layout-content"),h=c("n-icon"),g=c("n-space"),b=c("n-tab-pane"),k=c("n-tabs"),X=c("n-layout-sider"),Y=c("n-layout");return o(),a(Y,{"has-sider":"","sider-placement":"right"},{default:e(()=>[n(K,null,{default:e(()=>[n(u(F))]),_:1}),n(X,{"collapse-mode":"transform","collapsed-width":0,width:350,collapsed:m.value,"native-scrollbar":!1,"show-trigger":"bar",onCollapse:y,onExpand:C},{default:e(()=>[n(u(ae),{class:"go-content-configurations go-boderbox","show-top":!1,depth:2},{default:e(()=>[u(T)?N("",!0):(o(),a(k,{key:0,class:"tabs-box",size:"small",type:"segment"},{default:e(()=>[(o(),R(S,null,L(W,t=>n(b,{key:t.key,name:t.key,size:"small","display-directive":"show:lazy"},{tab:e(()=>[n(g,null,{default:e(()=>[x("span",null,H(t.title),1),n(h,{size:"16",class:"icon-position"},{default:e(()=>[(o(),a(d(t.icon)))]),_:2},1024)]),_:2},1024)]),default:e(()=>[(o(),a(d(t.render)))]),_:2},1032,["name"])),64))]),_:1})),u(T)?(o(),a(k,{key:1,value:f.value,"onUpdate:value":l[0]||(l[0]=t=>f.value=t),class:"tabs-box",size:"small",type:"segment"},{default:e(()=>[(o(!0),R(S,null,L(u(T).isGroup?I:J,t=>(o(),a(b,{key:t.key,name:t.key,size:"small","display-directive":"show:lazy"},{tab:e(()=>[n(g,null,{default:e(()=>[x("span",null,H(t.title),1),n(h,{size:"16",class:"icon-position"},{default:e(()=>[(o(),a(d(t.icon)))]),_:2},1024)]),_:2},1024)]),default:e(()=>[(o(),a(d(t.render)))]),_:2},1032,["name"]))),128))]),_:1},8,["value"])):N("",!0)]),_:1})]),_:1},8,["collapsed"])]),_:1})}}});var fe=Z(re,[["__scopeId","data-v-cb85b6a4"]]);export{fe as default};
