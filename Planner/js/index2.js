const timetable = document.querySelector(".timetable");
const inside = [...timetable.querySelectorAll("#inside")];
const newbtn = document.querySelector("#newbtn");
const addnew = document.querySelector("#inp");
const length = addnew.querySelector("#length");
const color = addnew.querySelector("#color");

newbtn.addEventListener("click", prevOnOff);
inside.forEach((cell) => cell.addEventListener("mouseover", preview));
inside.forEach((cell) => cell.addEventListener("mouseleave", previewOff));

let prevOn = false;

function prevOnOff() {
  if (prevOn) {
    prevOn = false;
  } else {
    prevOn = true;
  }
}


function checkValid(ind){
  if(ind+length*7<inside.length){
    return true;
  }
  return false;
}

function preview(e) {
  if (prevOn) {
    let pos = inside.findIndex((element) => element == e.target)
    console.log(pos)
    e.target.style.backgroundColor = color.value;
  }
}
function previewOff(e) {
  e.target.style.backgroundColor = "";
}
