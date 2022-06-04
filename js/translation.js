
function translation() {

    translationCall()
    function translationCall(){
        const ru = document.querySelector('#languag_russian')
        const en = document.querySelector('#languag_english')


        translationProcess('ru')

        ru.addEventListener('click', () => {
            translationAnimation(ru, en)
            translationProcess('ru')

        })
        en.addEventListener('click', () => {
            translationAnimation(en,ru)
            translationProcess('en')
        })
    }

    function  translationAnimation(buttonActive, buttonPassive) {
        buttonActive.classList.add('languages_active')
        buttonPassive.classList.remove('languages_active')
    }

    function translationProcess(language) {
        translateDB.forEach(dataItem => {
            
            if(dataItem.repeatElements === true){
                const allTextTags = document.querySelectorAll(dataItem.identifier)
                allTextTags.forEach((tag, index) => {
                    if(language === 'ru'){

                        // if(dataItem.loop == true){
                        //     tag.textContent = dataItem.russian[index-1]
                        // }else{
                            tag.textContent = dataItem.russian[index]
                        // }
                      
                        if(tag.tagName === 'INPUT'){
                            tag.placeholder = dataItem.russian[index]
                        }

                    }
                    if(language === 'en'){
                        // if(dataItem.loop == true){
                        //     tag.textContent = dataItem.english[index-1]
                        // }else{
                            tag.textContent = dataItem.english[index]
                        // }

                        // tag.textContent = dataItem.english[index]
                        if(tag.tagName === 'INPUT'){
                            tag.placeholder = dataItem.english[index]
                        }
                    }
                })
                
            }else{
                const textTag = document.querySelector(dataItem.identifier)

                if(language === 'ru'){
                    textTag.textContent = dataItem.russian
                    // if(textTag.tagName === 'INPUT'){
                    //     tag.placeholder = dataItem.russian[index]
                    // }
                }
                if(language === 'en'){
                    textTag.textContent = dataItem.english
                    // if(textTag.tagName === 'INPUT'){
                    //     tag.placeholder = dataItem.russian[index]
                    // }
                }
            }

           

        })

        
        
    }

}


function tanslationImages(){
    // translation_image
    const translatePictures = document.querySelectorAll('.translation_image')

    // languag_russian
    // languag_english
    document.querySelector('#languag_english').addEventListener('click', () => {
        translatePictures.forEach(picture => {
            const englishPicture = picture.dataset.translation
            picture.src = englishPicture 
        })
    })

    document.querySelector('#languag_russian').addEventListener('click', () => {
        translatePictures.forEach(picture => {
            const russianPicture = picture.dataset.src
             picture.src = russianPicture 
        })
        
    })
}