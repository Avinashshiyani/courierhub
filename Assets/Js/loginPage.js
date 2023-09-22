
function focusUser(){

    let focusUser = document.querySelector('.focusUser');
    let iconStyle = document.querySelector('.iconStyle');
    let styleString = "box-shadow: #57b846 1px 1px 7.5px 0px;";
    let styleIcon = "margin-left:-10px;transition:0.3s;color:#57b846";

    focusUser.addEventListener("focus" , ()=>{
        focusUser.style=`${styleString}`;
        iconStyle.style=`${styleIcon}`;
    });

    focusUser.addEventListener('blur',()=>{
        focusUser.style="";
        iconStyle.style="transition:0.3s";
    });

};
focusUser();

function focusPass(){

    let focusPass = document.querySelector('.focusPass');
    let passIconStyle = document.querySelector('.passIconStyle')
    let styleString = "box-shadow: #57b846 1px 1px 7.5px 0px;";
    let styleIcon = "margin-left:-10px;transition:0.3s;color:#57b846";

    focusPass.addEventListener('focus',()=>{

        focusPass.style=`${styleString}`;
        passIconStyle.style=`${styleIcon}`;
        
        focusPass.addEventListener('blur',()=>{
            focusPass.style="";
            passIconStyle.style="transition:0.5s";
        });
    });
}
focusPass();

setInterval(eyeBtn,100);

function eyeBtn(){

    let focusPass = document.querySelector('.focusPass');
    let eyeBtn    = document.querySelector('.eyeBtn');
    if(focusPass.value.length > 0)
    {
        eyeBtn.style="opacity:1";
    }
    else{
        eyeBtn.style="";
    }   
};
eyeBtn();


function showPass(){
    let eyeBtn=document.querySelector('.eyeBtn');
    let focusPass = document.querySelector('.focusPass');
    eyeBtn.addEventListener("click",()=>{
        focusPass.setAttribute("type","text");
    });
    eyeBtn.addEventListener("mouseout",()=>{
        focusPass.setAttribute("type","password");
    })
};

showPass();

// function noInp(){
//     let noInp = document.querySelector('.noInp');
//     let 
// };

// noInp();
