var cree=document.querySelector(".cre")
var cr=document.querySelector(".a")
var c=document.querySelector(".b")
function ev()
{
    cree.style.display="block";
    cr.style.display="none"
    c.style.display="block"
    
}
function av()
{
    cree.style.display="none";
    cr.style.display="block"
    c.style.display="none"
    
}
//booking ticket

var normal=document.querySelector(".t-book")
var tk=document.querySelector(".b-ox")
var pt=document.querySelector(".p-t")
var ct=document.querySelector(".c-t")
function tclick(event)
{
    event.preventDefault();
    normal.style.display="block";
    tk.style.height="350px";
    pt.style.display="none";
    ct.style.display="none";
       
}

var ank=document.querySelector(".boo-k")
var anks=document.querySelector(".a2")
var fie=document.querySelector(".b-ook")
function ntk()
{
    ank.style.display="block";
    
    
}

var cl=document.querySelector(".cl-ose")
var fie=document.querySelector(".boo-k")
function csk()
{
    normal.style.display="none";
    pt.style.display="block";
    ct.style.display="block";
    tk.style.height="300px";
    fie.style.display="none";
}

//
var read=document.querySelector(".readmore")
var red=document.querySelector(".red")
var rad=document.querySelector(".read")
function ree()
{
    read.style.display="inline-block";
    red.style.display="inline-block"
    rad.style.display="none"   
}
function rm()
{
    read.style.display="none"
    rad.style.display="inline-block"
    red.style.display="none"
    
}

//print ticket

var pbook=document.querySelector(".p-book")
var bt=document.querySelector(".b-t")
var pt=document.querySelector(".p-t")
var ct=document.querySelector(".c-t")
function pclick(event)
{
    event.preventDefault();
    pbook.style.display="block";
    bt.style.display="none";
    ct.style.display="none";

}
var pbook=document.querySelector(".p-book")
var bt=document.querySelector(".b-t")
var pt=document.querySelector(".p-t")
var ct=document.querySelector(".c-t")
function mi(event)
{
    event.preventDefault();
    pbook.style.display="none";
    bt.style.display="block";
    ct.style.display="block";

}

