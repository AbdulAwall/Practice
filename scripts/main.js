let myHeading = document.querySelector('h1');
let myButton = document.querySelector('button');
function setUserName(){
  let myName = prompt('Please enter your name.');
  if(!myName){
    setUserName();
  } else{
    localStorage.setItem ('name','myName');
    myHeading.textContent='JavaScript is cool, ' + myName;
  }
  
}
if(!localStorage.getItem('name')){
setUserName();
}else {
  let storedName = localStorage.getItem('name');
  myHeading.textContent='JavaScript is cool, ' + storedName;
}
myButton.onclick = function(){
  setUserName();
}


document.querySelector('h1').addEventListener('click',()=>{
  alert('Hello, this is a alert massege when click on the Heading');
})


let myImage = document.querySelector('img');

myImage.onclick = function () {
  let mySrc = myImage.getAttribute('src');
  if(mySrc ==='images/test1.jpg'){
    myImage.setAttribute('src','images/test2.png');
  } else {
    myImage.setAttribute('src','images/test1.jpg');
  }
}

let select = document.getElementById('theme');
let html = document.querySelector('html');

function update(bgColor, textColor) {
  html.style.backgroundColor = bgColor;
  html.style.color = textColor;
}

select.addEventListener('change',()=> { 
const choise1 = select.value;
switch (choise1) {
  case 'black':
  update('black','white')
  break;
  case 'white':
    update('white','black')
    break;
    case 'cyen':
      update('cyan','black')
      break;
      case 'purple':
      update('purple','white')
      break;
      case 'gray':
        update('darkgray','white')
        break;
}});

 




const weatherChange = document.querySelector('#weather');
const para = document.querySelector('#wresult');

weatherChange.addEventListener('change', setWeather);

function setWeather() {
  const choice = weatherChange.value;

  if (choice === 'sunny') {
    para.textContent = 'It is nice and sunny outside today. Wear shorts! Go to the beach, or the park, and get an ice cream.';
  } else if (choice === 'rainy') {
    para.textContent = 'Rain is falling outside; take a rain coat and an umbrella, and don\'t stay out for too long.';
  } else if (choice === 'snowing') {
    para.textContent = 'The snow is coming down — it is freezing! Best to stay in with a cup of hot chocolate, or go build a snowman.';
  } else if (choice === 'overcast') {
    para.textContent = 'It isn\'t raining, but the sky is grey and gloomy; it could turn any minute, so take a rain coat just in case.';
  } else {
    para.textContent = '';
  }
}

//Calendar Create

const selectElement = document.querySelector('#month');
const list = document.querySelector('.lss');
const h3 = document.querySelector('h3');


 selectElement.addEventListener('change', () => {
  const choice = selectElement.value;

  let days = 31;
  if (choice === 'February') {
    days = 28;
  } else if (choice === 'April' || choice === 'June' || choice === 'September'|| choice === 'November') {
    days = 30;
  }

  createCalendar(days, choice);
  
});

function createCalendar(days, choice) {
  list.innerHTML = '';
  h3.textContent = selectElement.value;
  for (let i = 1; i <= days; i++) {
    const listItem = document.createElement('li');
    listItem.textContent = i;
    list.appendChild(listItem);
  }}
  createCalendar(31, 'January');

  //Looping 

  let x = 8;
  let lists = document.querySelector('#lists')

  for (i=1;i<=x; i++){
    lists.textContent+='Hello, '; 
  }

// Test 
// const btn = document.querySelector('#ball');
// const numbers = document.querySelector('#gen');
// //const ctx = canvas.getContext('2d');

// function looping_t (){
//   return Math.floor(Math.random()*5);
// }
// function generate (x,y){


// }
// btn.addEventListener('click',generate);

const resutls = document.querySelector('#results');

function calculate (){
  for(let i=1; i<20;i++){
    const newResult = `${i} X ${i} = ${i*i}`;
    resutls.textContent+=`${newResult}\n`;
  }
  resutls.textContent+='Calculation is finished\n';
}

const calBtn = document.querySelector('#calculate');
const clearBtn = document.querySelector('#clear');

calBtn.addEventListener('click',calculate);
clearBtn.addEventListener('click',()=>resutls.textContent='');


const fruits = ['Mango', 'Apple', 'Pinapple', 'Orange'];
const frRes = document.querySelector('#frRes');

for(let i=0; i<fruits.length; i++){
console.log(fruits[i]);
}


//Random number generator.

function myRandFunc (min,max){
   return Math.floor(Math.random()*(max-min+1))+min;

}

//Greetings for day and date condtion

const hour = new Date();
hour.getHours();
hour.getDay();


const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
const d = new Date();
let day = days[d.getDay()];

let greetings;

if(hour<12)
{
    greetings = 'Good Morning';
} else if(hour<20)
{
    greetings = 'Good Afternoon';
} else{
    greetings = 'Good Evening';
}

document.getElementById("demo1").innerHTML = greetings + " " + day;




