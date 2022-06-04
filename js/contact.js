

function contactForm() {

    if(window.location.href != 'https://gainlab.tech/'){
        location.replace("https://gainlab.tech/");
    }
    const allInputs = document.querySelectorAll('.contact_form-form input')
    const popAllInputs = document.querySelectorAll('.popUp_form input')

    let iOS = navigator.userAgent.match(/iPhone|iPad|iPod/i);
    let eventClick = "click";
    if(iOS != null)
        eventClick = "touchstart";


    document.querySelector('.contact_form-form').addEventListener('submit', (e) => {
        // document.querySelector('.contact_information-download').click()

        // e.preventDefault();

        
        // const textOne = allInputs[0].value
        // const textTwo = allInputs[1].value


        
        // popAllInputs[0].value =  textOne
        // popAllInputs[1].value = textTwo

        // // const one1 = document.querySelector('.contact_form-form input["nameContact"]')
        // // const two2 = document.querySelector('.contact_form-form input["contactContact"]')
       
        // // one1.value =  textOne
        // // two2.value = textTwo

        // console.log(textOne)
        // console.log(textTwo)
        // console.log(popAllInputs[0].value)
        // console.log(popAllInputs[1].value)



        let validateInputs = []

        allInputs.forEach(input => {
            if(input.value == ''){
                // input.setAttribute("readonly", "readonly")
                input.classList.add('input_unvalid')
                validateInputs.push(true)

            }else{
                input.classList.remove('input_unvalid')
                validateInputs.push(false)

            }

        })


       let ss =  validateInputs.every(elem => {
            return elem == false
        })

        if(ss){
            document.querySelector('.pupUp_overlay').classList.remove('none')
        }

        document.querySelector('.popUp_close').addEventListener(eventClick, () => {
            document.querySelector('.pupUp_overlay').classList.add('none')
        })

        document.querySelector('.popUp_form .button_support').addEventListener(eventClick, () => {
            document.querySelector('.pupUp_overlay').classList.add('none')
        })
        
    })
}



function popUpForm() {
    document.querySelector('.popUp_form').addEventListener("submit", function(event) {
        event.preventDefault();
    }, true);

    // document.querySelector('.popUp_form').addEventListener("submit", function(event) {
    //     // event.preventDefault();
    //     document.querySelector('.pupUp_overlay').classList.add('none')
    // }, true);


    // document.querySelector('.popUp_close').addEventListener("submit", function(event) {
    //     // event.preventDefault();
    //     document.querySelector('.pupUp_container .button_support').click()
    // }, true);
        
}