/* import data from 'data/tabledata.json'; */
const timetable = document.querySelector(".timetable")
const inside = [...timetable.querySelectorAll("#inside")];
inside.forEach(cell=>cell.addEventListener("mouseover",preview))


const placeLesson = document.querySelector("#placeLesson")
placeLesson.addEventListener("click", function () {
    inside.forEach(cell => cell.addEventListener("mouseover", preview))
    inside.forEach(cell => cell.addEventListener("click", place))
})



const newbtn = document.querySelector("#newbtn")
const inplength = document.querySelector("#inplength")
inplength.style.display = "none"
const numinput = inplength.querySelector("input")
const okbutton = inplength.querySelector("button")
okbutton.addEventListener("click",previewStart)

newbtn.addEventListener("click", function () {
    newbtn.style.display = "none"
    inplength.style.display = "block"
})

let previewOn = false

function previewStart(){
    if(numinput.innerHTML==""){
        return
    }
    else{
        if(previewOn){
            previewOn=false
        }
        else{
            previewOn=true
        }
    }
}

function preview(e){
    if(previewOn){
        e.target.style.backgroundcolor="#FF0000"
    }
}