let i = 0;

const play = (val) => {
    if(i < 6) {
        document.getElementById(val).style.visibility="hidden";
        document.getElementById("selection").innerHTML+='<input type="button" value="'+val+'" />';
        document.fo.selection.value+=val+" ";
        i+=1;

        if(i == 6) {
            document.fo.jouer.style.visibility="visible";
        }
    }
}

