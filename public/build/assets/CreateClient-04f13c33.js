import{T as d,o as a,c as u,w as p,a as e,i as _,l as o,p as s,u as l}from"./app-7e0f4e27.js";import{_ as r}from"./AppLayout-025d1222.js";import"./_plugin-vue_export-helper-c27b6911.js";const m={class:"py-12"},C={class:"max-w-7xl mx-auto sm:px-6 lg:px-8"},v={class:"bg-white overflow-hidden shadow-xl sm:rounded-lg"},x=e("label",null,"Client Name",-1),c=e("label",null,"Client Location",-1),f=e("label",null,"Client Phone",-1),y=e("label",null,"Client Description",-1),b=e("label",null,"Client Spended Money",-1),h=e("div",null,[e("input",{type:"submit",value:"Submit"})],-1),N={__name:"CreateClient",setup(w){const n=d({Client_State_ID:null,Client_Name:"",Client_Description:"",Client_Location:"",Client_Phone:"",Client_InscriptionDate:null,Client_SpendedMoney:100});return(D,t)=>(a(),u(r,{title:"Projets"},{default:p(()=>[e("div",m,[e("div",C,[e("div",v,[e("form",{onSubmit:t[5]||(t[5]=_(i=>l(n).post("/createClient"),["prevent"]))},[e("div",null,[x,o(e("input",{type:"text","onUpdate:modelValue":t[0]||(t[0]=i=>l(n).Client_Name=i)},null,512),[[s,l(n).Client_Name]])]),e("div",null,[c,o(e("input",{type:"text","onUpdate:modelValue":t[1]||(t[1]=i=>l(n).Client_Location=i)},null,512),[[s,l(n).Client_Location]])]),e("div",null,[f,o(e("input",{type:"text","onUpdate:modelValue":t[2]||(t[2]=i=>l(n).Client_Phone=i)},null,512),[[s,l(n).Client_Phone]])]),e("div",null,[y,o(e("textarea",{type:"text","onUpdate:modelValue":t[3]||(t[3]=i=>l(n).Client_Description=i)},null,512),[[s,l(n).Client_Description]])]),e("div",null,[b,o(e("input",{type:"number","onUpdate:modelValue":t[4]||(t[4]=i=>l(n).Client_SpendedMoney=i)},null,512),[[s,l(n).Client_SpendedMoney]])]),h],32)])])])]),_:1}))}};export{N as default};
