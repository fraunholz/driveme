
/**
 * Created by Miko on 4/4/2017.
 */

function showAddidtionalVariables(){
    var myElements = document.querySelectorAll(".additional-variable");
    for (var i = 0; i < myElements.length; i++) {
        if(myElements[i].style.display === "none"){
            myElements[i].style.display = "block";
        }
        else{
            myElements[i].style.display = "none";        }

    }
}
