const prevBtns = document.querySelectorAll(".btn__prev");
const nextBtns = document.querySelectorAll(".btn__next");
const nxtBtn = document.querySelector('#submitBtn');
const form1 = document.querySelector('#form1');
const form2 = document.querySelector('#form2');

const icon1 = document.querySelector('#badge1');
const icon2 = document.querySelector('#badge2');
const icon3 = document.querySelector('#badge3');


nextBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      formStepsNum++;
      updateFormSteps();
      updateProgressbar();
    });
  });
  
  prevBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      formStepsNum--;
      updateFormSteps();
      updateProgressbar();
    });
  });
  
var viewId = 1;
function nextForm(){
    console.log("hellonext");
    viewId=viewId+1;
    progressBar();
    displayForms();
    
    console.log(viewId);

}

function prevForm(){
    console.log("helloprev");
    viewId=viewId-1;
    console.log(viewId);
    progressBar1();
    displayForms();
}
function progressBar1(){
    if(viewId===1){
        badge2.classList.add('active');
        badge2.classList.remove('active');
    }

    if(viewId===2){
        badge2.classList.add('active');
        nxtBtn.innerHTML = "Selanjutnya"
    }

    if(viewId>2){
        badge2.classList.remove('active');
       
        
    }
   
}

function progressBar(){
    if(viewId===2){
        badge2.classList.add('active');
        nxtBtn.innerHTML = "Selanjutnya"
    }
    if(viewId>2){
        icon2.classList.remove('active');
        
    }
}

function displayForms(){
    
    if(viewId>2){
        viewId=1;
    }

    if(viewId ===1){
        form1.style.display = 'block';
        form2.style.display = 'none';


    }else if(viewId === 2){
        form1.style.display = 'none';
        form2.style.display = 'block';
}

}
