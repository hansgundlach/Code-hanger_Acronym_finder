<?php
//var userAnswer = document.getElementById("help-me").innerHTML;
//this code will search for 
$userAnswer = $_REQUEST["userAnswer"];

//$user
<script>

var hope = " "+userAnswer;
//var userAnswer = prompt("enter in your text and acronym");
console.log(hope);
var j= hope.length;
 var vari = [];
var acronym=[];

for(i=0;i<(j+1);i++){
    console.log(i);
if(hope[i]==hope[i].toUpperCase() && hope[i] != undefined){
    var k = i+1;
    console.log(k);
    if(hope[k]==hope[k].toUpperCase() && hope[k] != undefined){
       
        while(hope[i] != undefined){
            i++;
            console.log(i); 
            
           
            vari.push(hope[i]);
        }
    }
}
}
console.log(vari);
//I think vari should be an array
//it should go through each element in the array and match it to elements in a database
var xhr = new XMLHttpRequest();
xhr.open("GET", "http://acronyms.silmaril.ie/cgi-bin/uncgi/xaa?api", false);

xhr.setRequestHeader('Content-Type', 'text/xml');
xhr.send();

xmlDocument = xhr.responseXML;
console.log(xmlDocument.childNodes['0'].textContent);












 var  dataarray ={LCM: 'leastcommondenominator',GCF:'Greatest Common Factor',HTTP:'Hypertextarray'};
 var stringe = vari.join("");
 console.log(stringe);
var answer = dataarray[stringe];
console.log(answer);
</script>
//$phpanswer = $_GET['answer']
//echo $phpanswer ;
$hol = "holla"
echo  $hol






//document.getElementById("p1").innerHTML = answer;
?>