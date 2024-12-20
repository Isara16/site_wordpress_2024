import{l as $,m as P,u as I}from"./index.5a710757.js";import{u as L}from"./EeatCta.42ef6766.js";import{C as E}from"./Index.c0a0a208.js";import{G as y}from"./constants.2019bcb3.js";import{u as W}from"./JsonValues.892a7505.js";import"./translations.12335a6a.js";import{_ as R}from"./Caret.662da1f3.js";import{B as V}from"./Checkbox.e983780b.js";import{a as b,B as U,b as z,S as O}from"./index.ee8124c6.js";import{B as N}from"./RadioToggle.64619d6b.js";import{C as j}from"./Blur.31bfcf06.js";import{C}from"./Card.5b602127.js";import{C as x}from"./SettingsRow.1934f141.js";import{C as f}from"./Tooltip.b6b45c85.js";import{C as H}from"./Index.4d349dbe.js";import{S as M}from"./Plus.c3a1a43f.js";import{_ as t,s as r}from"./default-i18n.54b5d8cd.js";import{o as h,k as w,l as n,a as s,C as a,u as o,x as c,t as l,c as A,F as G,J as q,G as J,v,b as B}from"./runtime-dom.esm-bundler.6789c400.js";import{R as F}from"./RequiredPlans.7723218f.js";import{_ as Q}from"./_plugin-vue_export-helper.249dac1d.js";import{u as Y}from"./AddonConditions.5faef184.js";import"./helpers.f95d5840.js";import"./Row.f01f32cd.js";import"./Checkmark.32f79576.js";import"./Slide.d0517fb0.js";import"./CheckSolid.9e151b0e.js";import"./addons.ef42f038.js";import"./upperFirst.96c04516.js";import"./_stringToArray.08127ca9.js";import"./toString.1401d490.js";import"./license.03044dbc.js";const K={id:"aioseo-author-seo"},X={class:"aioseo-description"},Z=["innerHTML"],ee={class:"aioseo-description"},te=["innerHTML"],oe={class:"topics-table"},se={class:"tooltip-wrapper"},ae={class:"tooltip-wrapper"},ie={class:"tooltip-wrapper"},re=s("td",null,null,-1),ne={class:"name"},le={class:"url"},ce={class:"same-as-urls"},ue={class:"actions"},pe={colspan:"4"},de={__name:"EeatBlur",setup(_){const{getJsonValue:p}=W(),d=[{name:"WordPress",url:"https://wordpress.org",sameAsUrls:[]},{name:"SEO",url:"https://aioseo.com",sameAsUrls:[]},{name:"Schema Markup",url:"https://schema.org",sameAsUrls:[]}],e="all-in-one-seo-pack",i={settings:t("Settings",e),experienceTopics:t("Author Experience Topics (E-E-A-T)",e),experienceTopicsDescription:r(t("The following settings will be added directly to an author's schema meta data via the %1$sknowsAbout%2$s property. This property helps with the Experience aspect of Google's E-E-A-T guidelines. After setting the global options here, you can add them directly in an authors profile page.",e),"<code>","</code>"),name:t("Name",e),url:t("URL",e),sameAsUrls:t("Same As URLs",e),addItem:t("Add Item",e),delete:t("Delete",e),nameTooltip:t('The name of the item the author knows about (e.g. "Amazon").',e),urlTooltip:t('The URL of the item the author knows about (e.g. "https://amazon.com").',e),sameAsUrlsTooltip:t('Additional URLs to help identify the item (e.g. "https://en.wikipedia.org/wiki/Amazon_(company)").',e),sameAsUrlsPlaceholder:t("Enter a URL and press enter",e),tagPlaceholder:t("Press enter to insert a URL",e),authorBioInjection:t("Append Author Bio to Posts",e),authorBioInjectionDescription:r(t("Choose whether %1$s should automatically append a compact author bio at the end of every post. You can also manually insert the author bio using the Author Bio block.",e),void 0),postTypes:t("Post Types",e),includeAllPostTypes:t("Include All Post Types",e),selectPostTypes:t("Select the post types for which you want to automatically inject an author bio.",e)},g={block:{desc:r('<p>The following blocks are available in the Block Editor:</p><ul style="list-style:disc; margin-left: 24px;"><li>AIOSEO - Author Bio</li><li>AIOSEO - Author Name</li><li>AIOSEO - Reviewer Name</li></ul>')},shortcode:{multiple:[{copy:"[aioseo_eeat_author_bio]",desc:t("Use the following shortcode to display the author bio.",e),hasAdvanced:!0,attributes:[{name:"compact",description:r(t("Whether the compact author bio should be output or not. Defaults to %1$s.",e),"<code>true</code>")}],attributesDescription:t("The following shortcode attributes can be used to override the default settings:",e)},{copy:"[aioseo_eeat_author_tooltip]",desc:t("Use the following shortcode to display the author name.",e),hasAdvanced:!0,attributes:[{name:"show-label",description:r(t('Whether to display the "Written By" label or not. Defaults to %1$s.',e),"<code>true</code>")},{name:"show-image",description:r(t("Whether to display the author image or not. Defaults to %1$s.",e),"<code>true</code>")},{name:"show-tooltip",description:r(t("Whether to display the popup when someone hovers over the name or not. Defaults to %1$s.",e),"<code>true</code>")}],attributesDescription:t("The following shortcode attributes can be used to override the default settings:",e)},{copy:"[aioseo_eeat_reviewer_tooltip]",desc:t("Use the following shortcode to display the reviewer name.",e),hasAdvanced:!0,attributes:[{name:"show-label",description:r(t('Whether to display the "Reviewed By" label or not. Defaults to %1$s.',e),"<code>true</code>")},{name:"show-image",description:r(t("Whether to display the reviewer image or not. Defaults to %1$s.",e),"<code>true</code>")},{name:"show-tooltip",description:r(t("Whether to display the popup when someone hovers over the name or not. Defaults to %1$s.",e),"<code>true</code>")}],attributesDescription:t("The following shortcode attributes can be used to override the default settings:",e)}]},php:{multiple:[{copy:"<?php if( function_exists( 'aioseo_eeat_author_bio' ) ) aioseo_eeat_author_bio(); ?>",desc:t("Use the following PHP code anywhere in your theme's post templates or author archive template to display a bio for the author.",e),hasAdvanced:!0,attributes:[{name:"$compact",description:r(t("Whether the compact author bio should be output or not. Defaults to %1$s.",e),"<code>true</code>")}],attributesDescription:t("The following function arguments can be used to override the default settings:",e)},{copy:"<?php if( function_exists( 'aioseo_eeat_author_tooltip' ) ) aioseo_eeat_author_tooltip(); ?>",desc:t("Use the following PHP code anywhere in your theme's post templates to display a bio for the post author.",e),hasAdvanced:!0,attributes:[{name:"$showLabel",description:r(t('Whether to display the "Written By" label or not. Defaults to %1$s.',e),"<code>true</code>")},{name:"$showImage",description:r(t("Whether to display the author image or not. Defaults to %1$s.",e),"<code>true</code>")},{name:"$showTooltip",description:r(t("Whether to display the popup when someone hovers over the name or not. Defaults to %1$s.",e),"<code>true</code>")}],attributesDescription:t("The following function arguments can be used to override the default settings:",e)},{copy:"<?php if( function_exists( 'aioseo_eeat_reviewer_tooltip' ) ) aioseo_eeat_reviewer_tooltip(); ?>",desc:t("Use the following PHP code anywhere in your theme's post templates to display a bio for the post reviewer.",e),hasAdvanced:!0,attributes:[{name:"$showLabel",description:r(t('Whether to display the "Reviewed By" label or not. Defaults to %1$s.',e),"<code>true</code>")},{name:"$showImage",description:r(t("Whether to display the reviewer image or not. Defaults to %1$s.",e),"<code>true</code>")},{name:"$showTooltip",description:r(t("Whether to display the popup when someone hovers over the name or not. Defaults to %1$s.",e),"<code>true</code>")}],attributesDescription:t("The following function arguments can be used to override the default settings:",e)}]}};return(T,S)=>(h(),w(o(j),null,{default:n(()=>[s("div",K,[a(o(C),{id:"aioseo-author-seo-settings",slug:"authorSeoSettings","header-text":i.settings,noSlide:""},{default:n(()=>[a(o(H),{options:g,plural:""}),a(o(x),{name:i.authorBioInjection},{content:n(()=>[a(o(N),{value:"true",name:"authorBioInjection",options:[{label:o(y).disabled,value:!1,activeClass:"dark"},{label:o(y).enabled,value:!0}]},null,8,["options"]),s("div",X,[c(l(i.authorBioInjectionDescription)+" ",1),s("span",{innerHTML:o($).getDocLink(o(y).learnMore,"eeatAuthorBioInjection",!0)},null,8,Z)])]),_:1},8,["name"]),a(o(x),{name:i.postTypes},{content:n(()=>[a(o(V),{size:"medium",value:"true"},{default:n(()=>[c(l(i.includeAllPostTypes),1)]),_:1}),s("div",ee,l(i.selectPostTypes),1)]),_:1},8,["name"])]),_:1},8,["header-text"]),a(o(C),{id:"aioseo-author-seo-topics",slug:"authorSeoTopics","header-text":i.experienceTopics,noSlide:""},{default:n(()=>[s("div",{class:"aioseo-settings-row aioseo-section-description",innerHTML:i.experienceTopicsDescription},null,8,te),s("table",oe,[s("thead",null,[s("tr",null,[s("td",null,[s("div",se,[c(l(i.name)+" ",1),a(o(f),null,{tooltip:n(()=>[c(l(i.nameTooltip),1)]),default:n(()=>[a(o(b))]),_:1})])]),s("td",null,[s("div",ae,[c(l(i.url)+" ",1),a(o(f),null,{tooltip:n(()=>[c(l(i.urlTooltip),1)]),default:n(()=>[a(o(b))]),_:1})])]),s("td",null,[s("div",ie,[c(l(i.sameAsUrls)+" ",1),a(o(f),null,{tooltip:n(()=>[c(l(i.sameAsUrlsTooltip),1)]),default:n(()=>[a(o(b))]),_:1})])]),re])]),s("tbody",null,[(h(),A(G,null,q(d,(u,k)=>s("tr",{class:J({even:k%2===0}),key:k},[s("td",ne,[a(o(U),{size:"medium",modelValue:u.name,"onUpdate:modelValue":m=>u.name=m,"append-icon":"circle-close","append-icon-on-value":"",onAppendIconClick:m=>u.name=""},null,8,["modelValue","onUpdate:modelValue","onAppendIconClick"])]),s("td",le,[a(o(U),{size:"medium",modelValue:u.url,"onUpdate:modelValue":m=>u.url=m,"append-icon":"circle-close","append-icon-on-value":"",onAppendIconClick:m=>u.url=""},null,8,["modelValue","onUpdate:modelValue","onAppendIconClick"])]),s("td",ce,[a(o(z),{size:"medium",multiple:"",taggable:"",options:o(p)(u.sameAsUrls)||[],modelValue:o(p)(u.sameAsUrls)||[],placeholder:i.sameAsUrlsPlaceholder,"tag-placeholder":i.tagPlaceholder},null,8,["options","modelValue","placeholder","tag-placeholder"])]),s("td",ue,[a(o(f),{type:"action"},{tooltip:n(()=>[c(l(i.delete),1)]),default:n(()=>[a(o(O))]),_:1})])],2)),64))]),s("tfoot",null,[s("tr",null,[s("td",pe,[a(o(R),{size:"small-table",type:"black"},{default:n(()=>[a(o(M)),c(" "+l(i.addItem),1)]),_:1})])])])])]),_:1},8,["header-text"])])]),_:1}))}},he={setup(){const{addonSlug:_,features:p,strings:d}=L();return{addonSlug:_,features:p,licenseStore:P(),rootStore:I(),links:$,strings:d}},components:{Cta:E,EeatBlur:de,RequiredPlans:F}};function me(_,p,d,e,i,g){const T=v("eeat-blur"),S=v("required-plans"),u=v("cta");return h(),A("div",null,[a(T),a(u,{"cta-link":e.links.getPricingUrl("eeat","eeat-upsell"),"button-text":e.strings.ctaButtonText,"learn-more-link":e.links.getUpsellUrl("eeat",null,e.rootStore.isPro?"pricing":"liteUpgrade"),"feature-list":e.features,alignTop:""},{"header-text":n(()=>[c(l(e.strings.headerText),1)]),description:n(()=>[a(S,{addon:"aioseo-eeat"}),c(" "+l(e.strings.description),1)]),_:1},8,["cta-link","button-text","learn-more-link","feature-list"])])}const D=Q(he,[["render",me]]),_e={class:"author-seo-cta"},Je={__name:"EeatCta",setup(_){const{shouldShowActivate:p,shouldShowLite:d,shouldShowUpdate:e}=Y({addonSlug:"aioseo-eeat"});return(i,g)=>(h(),A("div",_e,[o(e)||o(p)?(h(),w(o(D),{key:0})):B("",!0),o(d)?(h(),w(o(D),{key:1})):B("",!0)]))}};export{Je as default};
