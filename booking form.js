// Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  //const firebaseConfig = {
    //apiKey: "AIzaSyDnHzbXpdbwlBcL_GN1-yFn-a2dngdgY_I",
    //authDomain: "bookingformevents.firebaseapp.com",
    //projectId: "bookingformevents",
    //storageBucket: "bookingformevents.appspot.com",
    //messagingSenderId: "692888420174",
    //appId: "1:692888420174:web:23241e454d553d1fe7e81f",
    //measurementId: "G-7D3FKBS43E"
  //};

  // Initialize Firebase
  //const app = initializeApp(firebaseConfig);
  //const analytics = getAnalytics(app);

const slidePage=document.querySelector(".slidepage");
const firtNextBtn=document.querySelector(".next-1");
const prevBtnSec=document.querySelector(".prev-2");
const nextBtnSec=document.querySelector(".next-2");
const prevBtnThird=document.querySelector(".prev-3");
const nextBtnThird=document.querySelector(".next-3");
const prevBtnFourth=document.querySelector(".prev-4");
const nextBtnFourth=document.querySelector(".next-4");
const prevBtnFifth=document.querySelector(".prev-5");
const submitBtn=document.querySelector(".submit");
/*const progressText=document.querySelectorAll(".step p");
const progressCheck=document.querySelectorAll(".step .check");
const bullet=document.querySelectorAll(".step .bullet");*/

/*let max=4;
let current=1;*/

firtNextBtn.addEventListener("click",function(){
    slidePage.style.marginLeft="-25%";
    /*bullet[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    current +=1;*/
});
nextBtnSec.addEventListener("click",function(){
    slidePage.style.marginLeft="-50%";    
    /*bullet[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    current +=1;*/
});
nextBtnThird.addEventListener("click",function(){
    slidePage.style.marginLeft="-75%"; 
    /*bullet[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    current +=1;*/
});
nextBtnFourth.addEventListener("click",function(){
    slidePage.style.marginLeft="-100%";
    /*bullet[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    current +=1;*/
});

prevBtnSec.addEventListener("click",function(){
    slidePage.style.marginLeft="0%";    
    /*bullet[current - 2].classList.remove("active");
    progressText[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    current -=1;*/
});
prevBtnThird.addEventListener("click",function(){
    slidePage.style.marginLeft="-25%"; 
    /*bullet[current - 2].classList.remove("active");
    progressText[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    current -=1;*/
});
prevBtnFourth.addEventListener("click",function(){
    slidePage.style.marginLeft="-50%";    
   /* bullet[current - 2].classList.remove("active");
    progressText[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    current -=1;*/
});
//submitBtn.addEventListener("click",function(){
    /*bullet[current - 1].classList.add("active");
      progressText[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    current +=1;*/
  //  setTimeout(function(){
    //    alert("Thanks. We will reply you soon.");
      //  location.reload();
    //},800);
//});

//document.getElementById('bookingform').addEventListener('submit',submitForm);

//function submitForm(e){
  //  e.preventDefault();
    
    /*console.log(123);*/
    //Get values
    //var name= getInputVal('name');
    //var email= getInputVal('email');
    //var phone= getInputVal('phone');
    //var passport= getInputVal('passport');
    
    //console.log(name);
    
//}

//function to get form values
//function getInputVal(id)
//{
  //  return document.getElementById(id).value;
//}