import{_ as c}from"./AppLayout-e33efbd9.js";import p from"./DeleteUserForm-26f5dea8.js";import l from"./LogoutOtherBrowserSessionsForm-b60705ed.js";import{S as s}from"./SectionBorder-a8685b3f.js";import f from"./TwoFactorAuthenticationForm-164a185d.js";import u from"./UpdatePasswordForm-66543f52.js";import _ from"./UpdateProfileInformationForm-4bd319c9.js";import{o,c as d,w as n,a as i,e as r,b as t,f as a,F as h}from"./app-e14b8f1e.js";import"./_plugin-vue_export-helper-c27b6911.js";import"./DialogModal-de8939f0.js";import"./SectionTitle-36da2269.js";import"./DangerButton-4df545a4.js";import"./TextInput-0f79f541.js";import"./SecondaryButton-6a7b7d1f.js";import"./ActionMessage-7c5fa2c4.js";import"./PrimaryButton-4af166f1.js";import"./InputLabel-0f40b24f.js";import"./FormSection-9467a6fb.js";const g=i("h2",{class:"font-semibold text-xl text-gray-800 leading-tight"}," Profile ",-1),$={class:"max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"},w={key:0},k={key:1},y={key:2},z={__name:"Show",props:{confirmsTwoFactorAuthentication:Boolean,sessions:Array},setup(m){return(e,x)=>(o(),d(c,{title:"Profile"},{header:n(()=>[g]),default:n(()=>[i("div",null,[i("div",$,[e.$page.props.jetstream.canUpdateProfileInformation?(o(),r("div",w,[t(_,{user:e.$page.props.auth.user},null,8,["user"]),t(s)])):a("",!0),e.$page.props.jetstream.canUpdatePassword?(o(),r("div",k,[t(u,{class:"mt-10 sm:mt-0"}),t(s)])):a("",!0),e.$page.props.jetstream.canManageTwoFactorAuthentication?(o(),r("div",y,[t(f,{"requires-confirmation":m.confirmsTwoFactorAuthentication,class:"mt-10 sm:mt-0"},null,8,["requires-confirmation"]),t(s)])):a("",!0),t(l,{sessions:m.sessions,class:"mt-10 sm:mt-0"},null,8,["sessions"]),e.$page.props.jetstream.hasAccountDeletionFeatures?(o(),r(h,{key:3},[t(s),t(p,{class:"mt-10 sm:mt-0"})],64)):a("",!0)])])]),_:1}))}};export{z as default};
