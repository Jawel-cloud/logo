console.log('it works');
        let numberOne = document.querySelector(".numberOne");
        let x = 0;
        let adding =()=>{
            if(x<12){
                x+=1;
                numberOne.textContent = x.toFixed(0)+'M';
            }else{
                numberOne.textContent = '12M+';
                setTimeout(()=>{x=0},2000);
            }
            
        }
        interval = setInterval(adding,100);