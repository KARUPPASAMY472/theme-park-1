var dr=document.querySelector(".drycoll")
var dr1=document.querySelector(".drycol")
var wr=document.querySelector(".watercoll")
var he=document.querySelector(".hed")
var dry=document.querySelector(".dry")
var water=document.querySelector(".water")
function dride()
{
    dr1.style.display="block";
    dr.style.display="flex";
    wr.style.display="none";
    he.style.display="none";
    dry.style="border-bottom:1px solid black";
    water.style="border:none";
}
function wride()
{
    dr1.style.display="block";
    wr.style.display="flex";
    dr.style.display="none";
    he.style.display="none";
    water.style="border-bottom:1px solid black";
    dry.style="border:none";
}
