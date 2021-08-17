function paragraphFunc(){
		alert("success");
	document.getElementById("demo").innerHTML="javascript in body";
}
// document.write(5+6);
// Math.pow(x,2)

const car=["mehtab","kazmi","mashhadi","al"];
document.getElementById("demo1").innerHTML=car;

function my(){
	car.splice(0,1,"shabih","hassan","kazmi");
	document.getElementById("demo2").innerHTML=car;	
}

// concat

const girl=["amina","shehzadi"];
const boys=["mehtab","kazmi","mashhadi"];
const uni=["UMT","ZURICH"];
const concat=boys.concat(girl,uni);
document.getElementById("demo3").innerHTML=concat;

const uni1=["UMT","ZURICH"];
const concat1=uni1.concat("UCP");
document.getElementById("demo4").innerHTML=concat1;


const boys1=["mehtab","kazmi","mashhadi"];
const slice=boys1.slice(2,3);
document.getElementById("demo5").innerHTML=slice;


// sorting of array

const student=["mehtab","zaraq","mujtaba"];
document.getElementById("demo6").innerHTML=student;

function student1(){
	student.sort();
	student.reverse();
	document.getElementById("demo6").innerHTML=student;
}
	const num=[23,21,34,56,43];
	document.getElementById("demo7").innerHTML=num;
function numeric(){
	num.sort(function(a,b){return b-a;});
	document.getElementById("demo7").innerHTML=num;
}

// sorting random
const num1=[23,21,34,56,43];
	document.getElementById("demo8").innerHTML=num1;
function random1(){
	num1.sort(function(a,b){return 0.5 - Math.random()});
	document.getElementById("demo8").innerHTML=num1;
}

const num2=[23,21,34,56,43];
document.getElementById("demo9").innerHTML=highest(num2);
function highest(arr){
	return Math.max.apply(null,arr);	
}

const num3=[23,21,34,56,43];
document.getElementById("demo10").innerHTML=minimum(num3);
function minimum(arr1){
	return Math.min.apply(null,arr1);	
}
// assocciative array sorting.

const cars=[
  {type:"Volvo", year:2016},
  {type:"Saab", year:2001},
  {type:"BMW", year:2010}
  ];
  displaycar();

  function carsfunction(){
  	cars.sort(function(a,b){return a.year - b.year});
  	displaycar();
  }

  function displaycar(){
  	document.getElementById("demo11").innerHTML=
  	cars[0].type + " " + cars[0].year + "<br>" +
  	cars[1].type + " " + cars[1].year + "<br>" +
  	cars[2].type + " " + cars[2].year + "<br>"
  }

 // sorting on type

const cars1=[
  {type:"Volvo", year:2016},
  {type:"Saab", year:2001},
  {type:"BMW", year:2010}
  ];
  displaycar1();

  function carsfunction1(){
  	cars1.sort(function(a,b){
  		x =a.type.toLowerCase();
  		y =b.type.toUpperCase();
  		if (x<y) {return -1}if (x>y){return 1}
  			return;});
  	displaycar1();
  }

  function displaycar1(){
  	document.getElementById("demo12").innerHTML=
  	cars1[0].type + " " + cars1[0].year + "<br>" +
  	cars1[1].type + " " + cars1[1].year + "<br>" +
  	cars1[2].type + " " + cars1[2].year + "<br>"
  } 


  // iteration of array

  const iter=[2,3,545,56,3,223];
 txt="";
  iter.forEach(iteration);
document.getElementById("demo13").innerHTML=txt;

function iteration(value,index,array){
	txt+=value +"<br>";
	
}
function itersortring(){
	iter.sort(function(a,b){return a - b;});
	document.getElementById("demo13").innerHTML=iter;
}

// map does not change original array.

const map1=[34,454,34,23,2];
const map2=map1.map(mapfunction);
document.getElementById("demo14").innerHTML = map2;
function mapfunction(value,index,array){
	return value * 2;
}

const filter1=[3,4,545,56,3,32];
const filter2=filter1.filter(filterfunction);
document.getElementById("demo15").innerHTML=filter2;

function filterfunction(value,index,array){
	return value >50;
}

// array reduce.

const reduce1=[34,32,21,456,766,4];
const reduce2=reduce1.reduce(reducefunction);
document.getElementById("demo16").innerHTML="the sum is= " +reduce2;

function reducefunction(total,value,index,array){
	return total + value;
}
// function myFunction(total, value) {
//   return total + value;
// }
//allover 18 is false.
// let allOver18 = numbers.every(myFunction);


// let position = fruits.indexOf("Orange") + 1;

const include1=["mehtab","shabih","manzarali","ehramabbas"];
document.getElementById("demo17").innerHTML=include1.includes("mehtab");

// let first = numbers.find(myFunction);
// function myFunction(value, index, array) {
//   return value > 18;
// }
// numbers.findIndex(myFunction);
const myarr=Array.from("ABCDEFG");
document.getElementById("demo18").innerHTML=myarr;

// const keys = fruits.keys();

const d=new Date();
document.getElementById("date1").innerHTML=d;