
function link() {
    window.open("https://github.com/Troy-Kettle/grids_and_coordinates");
}
function link2() {
    window.open("https://github.com/Troy-Kettle/Prac2V2")
}
function  link3() {
    window.open("https://github.com/Troy-Kettle/simpleJsCalculator")
}
let toggle = button => {
    let element = document.getElementById("Modules");
    let hidden = element.getAttribute("hidden");

    if (hidden) {
       element.removeAttribute("hidden");
       button.innerText = "Year 1 Modules";
    } else {
       element.setAttribute("hidden", "hidden");
       button.innerText = "Year 1 Modules";
    }
  }

  let toggle2 = button => {
    let element = document.getElementById("Modules2");
    let hidden = element.getAttribute("hidden");

    if (hidden) {
       element.removeAttribute("hidden");
       button.innerText = "Year 2 Modules";
    } else {
       element.setAttribute("hidden", "hidden");
       button.innerText = "Year 2 Modules";
    }
}
