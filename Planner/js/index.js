/* import data from 'data/tabledata.json'; */
const timetable = document.querySelector(".timetable")
const inside = [...timetable.querySelectorAll("#inside")];


const placeLesson = document.querySelector("#placeLesson")
placeLesson.addEventListener("click", function () {
    inside.forEach(cell => cell.addEventListener("mouseover", preview))
    inside.forEach(cell => cell.addEventListener("click", place))
})



const newbtn = document.querySelector("#newbtn")
const inplength = document.querySelector("#inplength")
inplength.style.display = "none"

newbtn.addEventListener("click", function () {
    newbtn.style.display = "none"
    inplength.style.display = "block"
})




function preview(e) {
    console.log(e.target)
}
function place(e) { }