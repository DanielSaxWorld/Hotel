$(document).ready(function(){

//Initializing arrays with city names
var ONDO = [
    {display: "Akoko-North-East", value: "Akoko-North-East" }, 
    {display: "Akoko-North-West", value: "Akoko-North-West" }, 
    {display: "Akoko-South-East", value: "Akoko-South-East" },
	{display: "Akoko-South-West", value: "Akoko-South-West" },
	{display: "Akure-North", value: "Akure-North" },
	{display: "Akure-South", value: "Akure-South" },
	{display: "Ese-Odo", value: "Ese-Odo" },
	{display: "Idanre", value: "Idanre" },
	{display: "Ifedore", value: "Ifedore" },
	{display: "Ilaje", value: "Ilaje" },
	{display: "Ile-Oluji", value: "Ile-Oluji" },
	{display: "Irele", value: "Irele" },
	{display: "Odigbo", value: "Odigbo" },
	{display: "Okitipupa", value: "Okitipupa" },
	{display: "Ondo-East", value: "Ondo-East" },
	{display: "Ondo-West", value: "Ondo-West" },
	{display: "Ose", value: "Ose" },
    {display: "Owo", value: "Owo" }];
    
var LAGOS = [
    {display: "Agege", value: "Agege" }, 
    {display: "Ajeromi-Ifelodun", value: "Ajeromi-Ifelodun" }, 
    {display: "Alimosho", value: "Alimosho" },
	{display: "Amuwo-Odofin", value: "Amuwo-Odofin" },
	{display: "Apapa", value: "Apapa" },
	{display: "Badagry", value: "Badagry" },
	{display: "Epe", value: "Epe" },
	{display: "Eti-Osa", value: "Eti-Osa" },
	{display: "Ibeju-Lekki", value: "Ibeju-Lekki" },
	{display: "Ifako-Ijaye", value: "Ifako-Ijaye" },
	{display: "Ikeja", value: "Ikeja" },
	{display: "Ikorodu", value: "Ikorodu" },
	{display: "Kosofe", value: "Kosofe" },
	{display: "Lagos-Island", value: "Lagos-Island" },
	{display: "Lagos-Mainland", value: "Lagos-Mainland" },
	{display: "Mushin", value: "Mushin" },
	{display: "Ojo", value: "Ojo" },
	{display: "Oshodi-Isolo", value: "Oshodi-Isolo" },
	{display: "Shomolu", value: "Shomolu" },
    {display: "Surulere", value: "Surulere" }];
    
var OSUN = [
    {display: "Aiyedade", value: "Aiyedade" }, 
    {display: "Aiyedire", value: "Aiyedire" }, 
    {display: "Atakumosa-East", value: "Atakumosa-East" },
	{display: "Atakumosa-West", value: "Atakumosa-West" },
	{display: "Boluwaduro", value: "Boluwaduro" },
	{display: "Boripe", value: "Boripe" },
	{display: "Ede-North", value: "Ede-North" },
	{display: "Ede-South", value: "Ede-South" },
	{display: "Egbedore", value: "Egbedore" },
	{display: "Ejigbo", value: "Ejigbo" },
	{display: "Ife-Central", value: "Ife-Central" },
	{display: "Ife-East", value: "Ife-East" },
	{display: "Ife-North", value: "Ife-North" },
	{display: "Ife-South", value: "Ife-South" },
	{display: "Ifedayo", value: "Ifedayo" },
	{display: "Ifelodun", value: "Ifelodun" },
	{display: "Ila", value: "Ila" },
	{display: "Ilesha-East", value: "Ilesha-East" },
	{display: "Ilesha-West", value: "Ilesha-West" },
	{display: "Irepodun", value: "Irepodun" },
	{display: "Irewole", value: "Irewole" },
	{display: "Isokan", value: "Isokan" },
	{display: "Iwo", value: "Iwo" },
	{display: "Obokun", value: "Obokun" },
	{display: "Odo-Otin", value: "Odo-Otin" },
	{display: "Ola-Oluwa", value: "Ola-Oluwa" },
	{display: "Olorunda", value: "Olorunda" },
	{display: "Oriade", value: "Oriade" },
	{display: "Orolu", value: "Orolu" },
    {display: "Osogbo", value: "Osogbo" }];

var DELTA = [
    {display: "Aniocha", value: "Aniocha" }, 
    {display: "Aniocha-South", value: "Aniocha-South" },
	{display: "Ika-South", value: "Ika-South" },
	{display: "Ika-North-East", value: "Ika-North-East" },
	{display: "Ndokwa-West", value: "Ndokwa-West" },
	{display: "Ndokwa-East", value: "Ndokwa-East" },
	{display: "Isoko-South", value: "Isoko-South" },
	{display: "Isoko-North", value: "Isoko-North" },
	{display: "Bomadi", value: "Bomadi" },
	{display: "Burutu", value: "Burutu" },
	{display: "Ugbelli-South", value: "Ugbelli-South" },
	{display: "Ugbelli-North", value: "Ugbelli-North" },
	{display: "Ethiope-West", value: "Ethiope-West" },
	{display: "Ethiope-East", value: "Ethiope-East" },
	{display: "Sapele", value: "Sapele" },
	{display: "Okpe", value: "Okpe" },
	{display: "Warri-North", value: "Warri-North" },
	{display: "Warri-South", value: "Warri-South" },
	{display: "Uvwie", value: "Uvwie" },
	{display: "Udu", value: "Udu" },
	{display: "Warri-Central", value: "Warri-Central" },
	{display: "Ukwuani", value: "Ukwuani" },
	{display: "Oshimili", value: "Oshimili" },
	{display: "Oshimili-North", value: "Oshimili-North" },
    {display: "Patani", value: "Patani" }];

//Function executes on change of first select option field 
$("#country").change(function(){

var select = $("#country option:selected").val();

switch(select){
case "ONDO":
	city(ONDO);
break;

case "LAGOS":
	city(LAGOS);
break;

case "OSUN":
	city(OSUN);
break;

case "DELTA":
	city(DELTA);
break;

default:
	$("#city").empty();
	$("#city").append("<option>--Select--</option>");
break;
}
});

//Function To List out Cities in Second Select tags
function city(arr){
	$("#city").empty();//To reset cities
	$("#city").append("<option>--Select--</option>");
	$(arr).each(function(i){//to list cities
		$("#city").append("<option value=\""+arr[i].value+"\">"+arr[i].display+"</option>")
	});
}

});