
//Hovering Effect
var myButton = document.querySelectorAll(".myButton");

for( let i = 0 ; i < myButton.length; i++){
    myButton[i].addEventListener("mouseover", function(){
       myButton[i].classList.add("highlight"); 
    });
    myButton[i].addEventListener("mouseout",function(){
       myButton[i].classList.remove("highlight");
    });
}


//Disappearing and appearing block
var start = document.querySelector("#Start");
var signIn = document.querySelector("#signIn");
var signUp = document.querySelector("#signUp");
var signInBlock = document.querySelector("#SignInBlock");
var signUpBlock = document.querySelector("#SignUpBlock");
var backButton = document.querySelectorAll("#backButton");

window.onload = function() {
  ADP.hide(signInBlock, 'fade');
    ADP.hide(signUpBlock, 'fade');

};

signIn.addEventListener("click", function(){
    ADP.hide(start, 'slide-right');  
    ADP.show(signInBlock, 'slide-left');
    });

signUp.addEventListener("click", function(){                
 ADP.hide(start, 'slide-right');   
    ADP.show(signUpBlock, 'slide-left');
                                        });


for( let i = 0 ; i < backButton.length; i++){
    backButton[i].addEventListener("click", function(){       
    
        ADP.hide(signInBlock, 'slide-right');
    ADP.hide(signUpBlock, 'slide-right');
        ADP.show(start, 'slide-left');
    });
}

