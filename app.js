function animatedForm(){
    const arrows=document.querySelectorAll(".fa-arrow-down");
    arrows.forEach(arrow => {
        arrow.addEventListener("click", () => {
            const input=arrow.previousElementSibling;
            const parent=arrow.parentElement;
            const nextForm=parent.nextElementSibling;
            
            
            if(input.type === 'text' && validateUser(input))
            {
                nextSlide(parent, nextForm);
            }
           else if(input.type === 'text' && validateUser(input))
            {
                nextSlide(parent, nextForm);
            }
            else if(input.type === 'date' && validateDate(input))
            {
                nextSlide(parent, nextForm);
            }
            
            else if(input.type === 'email' && validateEmail(input))
            {
                nextSlide(parent, nextForm);
            }
         
            else if(input.type === 'tel' && validateTel(input))
            {
                nextSlide(parent, nextForm);
            }
            
            else
            {
                parent.style.animation ="shake 0.5s ease";
            }
            parent.addEventListener('animationend', () => {
                parent.style.animation = "";
            })
        })
    })
}

function validateUser(user){
    
    if(user.value.length > 3 && user.value.match(/^[A-Za-z]+$/) )
    {
        error('lightblue');
        return true;
        
    }
    else{
        error('red');
        return false;
    }
}
function validateDate(date)
{
    if(date.value == null || date.value == '')
    {
        error('red');
    }
    else{
       
        error('lightblue');
        return true;
    }

}
function validateEmail(mail){
    const validation = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(validation.test(mail.value))
    {
        error("lightblue");
        return true;
    }
    else
    {
        error("red");
    }
}


function validateTel(tel){
    const validation = /^\d{10}$/;
    if(validation.test(tel.value))
    {
        error("lightblue");
        return true;
    }
    else
    {
        error("red");
    }
}

function nextSlide(parent, nextForm){
    parent.classList.add('innactive');
    parent.classList.remove('active');
    nextForm.classList.add('active');
}
function error(color){
    document.body.style.backgroundColor=color;
}


animatedForm();