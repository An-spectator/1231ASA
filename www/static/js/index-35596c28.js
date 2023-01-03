/* empty css                                                                   */import{d as g,r as c,o as p,E as f,w as o,f as a,u as n,c as C,F as E,q as z,W as F,g as A,a8 as h,b as G,Q as V}from"./index-67a30bc6.js";import{a as v}from"./SettingItemBox-a2ea547e.js";import{i as $}from"./icon-99a136c4.js";import{_ as S}from"./StylesSetting-0bcb3f5a.js";import{u as H}from"./useTargetData.hook-8b843344.js";import"./chartEditStore-8254eca3.js";import"./plugin-463a9df8.js";import"./CollapseItem-92fb7302.js";const q=g({__name:"NameSetting",props:{chartConfig:{type:Object,required:!0}},setup(e){const t=e;let r="";const l=()=>{r=t.chartConfig.title},u=()=>{t.chartConfig.title.length||(window.$message.warning("\u8BF7\u8F93\u5165\u81F3\u5C11\u4E00\u4E2A\u5B57\u7B26!"),t.chartConfig.title=r)};return(d,m)=>{const y=c("n-input");return p(),f(n(v),{name:"\u540D\u79F0",alone:!0},{default:o(()=>[a(y,{type:"text",maxlength:"12",minlength:"1",placeholder:"\u8BF7\u8F93\u5165\u56FE\u8868\u540D\u79F0",size:"small",clearable:"","show-count":"",value:e.chartConfig.title,"onUpdate:value":m[0]||(m[0]=i=>e.chartConfig.title=i),onFocus:l,onBlur:u},null,8,["value"])]),_:1})}}}),j=A("\u4E0A"),U=A("\u5DE6"),L=g({__name:"PositionSetting",props:{canvasConfig:{type:Object,required:!0},chartAttr:{type:Object,required:!0}},setup(e){const t=e,{AlignHorizontalLeftIcon:r,AlignVerticalCenterIcon:l,AlignVerticalTopIcon:u,AlignHorizontalCenterIcon:d,AlignHorizontalRightIcon:m,AlignVerticalBottomIcon:y}=$.carbon,i=[{key:"AlignHorizontalLeftIcon",lable:"\u5C40\u5DE6",icon:h(r)},{key:"AlignVerticalCenterIcon",lable:"X\u8F74\u5C45\u4E2D",icon:h(l)},{key:"AlignHorizontalRightIcon",lable:"\u5C40\u53F3",icon:h(m)},{key:"AlignVerticalTopIcon",lable:"\u9876\u90E8",icon:h(u)},{key:"AlignHorizontalCenterIcon",lable:"Y\u8F74\u5C45\u4E2D",icon:h(d)},{key:"AlignVerticalBottomIcon",lable:"\u5E95\u90E8",icon:h(y)}],B=x=>{switch(x){case i[0].key:t.chartAttr.x=0;break;case i[1].key:t.chartAttr.y=(t.canvasConfig.height-t.chartAttr.h)/2;break;case i[2].key:t.chartAttr.x=t.canvasConfig.width-t.chartAttr.w;break;case i[3].key:t.chartAttr.y=0;break;case i[4].key:t.chartAttr.x=(t.canvasConfig.width-t.chartAttr.w)/2;break;case i[5].key:t.chartAttr.y=t.canvasConfig.height-t.chartAttr.h;break}};return(x,_)=>{const I=c("n-divider"),w=c("n-button"),D=c("n-space"),b=c("n-text"),k=c("n-input-number");return p(),C(E,null,[a(I,{style:{margin:"10px 0"}}),a(D,{size:8,justify:"space-between",style:{"margin-top":"10px"}},{default:o(()=>[(p(),C(E,null,z(i,s=>a(w,{secondary:"",key:s.key,onClick:P=>B(s.key)},{icon:o(()=>[(p(),f(F(s.icon)))]),_:2},1032,["onClick"])),64))]),_:1}),a(n(v),{name:"\u4F4D\u7F6E"},{default:o(()=>[a(k,{value:e.chartAttr.y,"onUpdate:value":_[0]||(_[0]=s=>e.chartAttr.y=s),min:0,size:"small",placeholder:"px"},{prefix:o(()=>[a(b,{depth:"3"},{default:o(()=>[j]),_:1})]),_:1},8,["value"]),a(k,{value:e.chartAttr.x,"onUpdate:value":_[1]||(_[1]=s=>e.chartAttr.x=s),min:0,size:"small",placeholder:"px"},{prefix:o(()=>[a(b,{depth:"3"},{default:o(()=>[U]),_:1})]),_:1},8,["value"])]),_:1})],64)}}}),N=A("\u5BBD\u5EA6"),O=A("\u9AD8\u5EA6"),T=g({__name:"SizeSetting",props:{chartAttr:{type:Object,required:!0},isGroup:{type:Boolean,required:!1}},setup(e){return(t,r)=>{const l=c("n-text"),u=c("n-input-number");return p(),f(n(v),{name:"\u5C3A\u5BF8"},{default:o(()=>[a(u,{value:e.chartAttr.w,"onUpdate:value":r[0]||(r[0]=d=>e.chartAttr.w=d),min:50,disabled:e.isGroup,size:"small",placeholder:"px"},{prefix:o(()=>[a(l,{depth:"3"},{default:o(()=>[N]),_:1})]),_:1},8,["value","disabled"]),a(u,{value:e.chartAttr.h,"onUpdate:value":r[1]||(r[1]=d=>e.chartAttr.h=d),min:50,disabled:e.isGroup,size:"small",placeholder:"px"},{prefix:o(()=>[a(l,{depth:"3"},{default:o(()=>[O]),_:1})]),_:1},8,["value","disabled"])]),_:1})}}});const R={key:0,class:"go-chart-configurations-setting"},K=g({__name:"index",setup(e){const{targetData:t,chartEditStore:r}=H();return(l,u)=>n(t)?(p(),C("div",R,[a(n(q),{chartConfig:n(t).chartConfig},null,8,["chartConfig"]),a(n(T),{isGroup:n(t).isGroup,chartAttr:n(t).attr},null,8,["isGroup","chartAttr"]),a(n(L),{chartAttr:n(t).attr,canvasConfig:n(r).getEditCanvasConfig},null,8,["chartAttr","canvasConfig"]),a(n(S),{isGroup:n(t).isGroup,chartStyles:n(t).styles},null,8,["isGroup","chartStyles"]),(p(),f(F(n(t).chartConfig.conKey),{optionData:n(t).option},null,8,["optionData"]))])):V("",!0)}});var nt=G(K,[["__scopeId","data-v-298e5f2a"]]);export{nt as default};