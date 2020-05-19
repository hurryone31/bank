import {loadCalc} from './loadcalc.js';
import {loadRequest} from "./loadRequest.js";

document.getElementById('1').oninput = loadCalc;
document.getElementById('2').oninput = loadCalc;
document.getElementById('3').oninput = loadCalc;
document.getElementById('loadbtn').onclick  = loadRequest;
window.onclick = function (e) {
    if(e.target == document.getElementById('popupWrap')){
        document.getElementById('popupWrap').style.display = "none";
    }
};
document.getElementById('closePop').onclick = function () {
    document.getElementById('popupWrap').style.display = "none";
}










