        const numberOne = document.querySelector(".numberOne");
        const numberTwo = document.querySelector(".numberTwo");
        const numberThree = document.querySelector(".numberThree");
        const numberFour = document.querySelector(".numberFour");
let x1 = 0;
let x2 = 0;
let x3 = 0;
let x4 = 0;
        let adding1 =()=>{
            if(x1<12){
                numberOne.textContent = x1.toFixed(0)+'M';
                x1+=1;
            }else if(x1>=12&&x1<=12.3){
                x1+=0.01;
                numberOne.textContent = x1.toFixed(0)+'M+';
            }else{
                x1=0;
            }}
		
		
        let adding2 =()=>{
            if(x2<18){
                numberTwo.textContent = x2.toFixed(0)+'M';
                x2+=1;
            }else if(x2>=18&&x2<=18.3){
                x2+=0.01;
                numberTwo.textContent = x2.toFixed(0)+'M+';
            }else{
                x2=0;
            }}
        

        let adding3 =()=>{
            if(x3<4.9){
                numberThree.textContent = x3.toFixed(1);
                x3+=0.03;
            }else if(x3>=4.9 && x3<=4.94){
                x3+=0.0001;
                numberThree.textContent = x3.toFixed(1);
            }else{
                x3=0;
            }}
		
		      
        let adding4 =()=>{
            if(x4<300){
                numberFour.textContent = x4.toFixed(0)+'M';
                x4+=1;
            }else if(x4>=300&&x4<=300.3){
                x4+=0.001;
                numberFour.textContent = x4.toFixed(0)+'M+';
            }else{
                x4=0;
            }}
        
        
setInterval(adding1,100);
setInterval(adding2,90);
setInterval(adding3,10);
setInterval(adding4,10);



const questionOne = document.querySelector(".questionOne");
const questionTwo = document.querySelector(".questionTwo");
const questionThree = document.querySelector(".questionThree");
const questionOneAns = document.querySelector(".questionOneAns");
const questionTwoAns = document.querySelector(".questionTwoAns");
const questionThreeAns = document.querySelector(".questionThreeAns");

let questOneActive = false;
let questTwoActive = false;
let questThreeActive = false;

questionOne.addEventListener('click',()=>{
    if(questOneActive === false){
        questionOneAns.textContent='Duis vestibulum elit vel neque pharetra vulputate. Quisque Proinscelerisque nisi urna. Duis rutrum non risus in imperdiet';
        questOneActive = true;
    }else{
        questionOneAns.textContent='';
        questOneActive=false;}});


questionTwo.addEventListener('click',()=>{
    if(questTwoActive === false){
        questionTwoAns.textContent='Duis vestibulum elit vel neque pharetra vulputate. Quisque Proinscelerisque nisi urna. Duis rutrum non risus in imperdiet';
        questTwoActive = true;
    }else{
        questionTwoAns.textContent='';
        questTwoActive=false;}});


questionThree.addEventListener('click',()=>{
    if(questThreeActive === false){
        questionThreeAns.textContent='Duis vestibulum elit vel neque pharetra vulputate. Quisque Proinscelerisque nisi urna. Duis rutrum non risus in imperdiet';
        questThreeActive = true;
    }else{
        questionThreeAns.textContent='';
        questThreeActive=false;}});



const burgerMenu = document.querySelector(".burgerMenu");
const burgerMenuButton = document.querySelector(".burgerMenuButton");
const burgerMenuMenu = document.querySelector(".burgerMenuMenu");
let burgerActive = false;


burgerMenuButton.addEventListener('click',()=>{
        burgerMenuMenu.classList.toggle('inVisible');
        burgerActive=true;
})





