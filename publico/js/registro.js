const form = document.forms["aspirantes"];

form.onsubmit = (event)=>{
    event.preventDefault();
    console.log(dataToJson());
}

function dataToJson(){
    const aspirantes={};

    Array.from(form.elements).forEach(element=>{
        if(element.name) aspirantes[element.name] = element.value
    })
    return aspirantes;
}

