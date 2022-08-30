function open_datalist(){
    var hold_data=document.getElementById('show_data');
    if(hold_data.style.display==="block"){
        document.getElementById('chane__text').style.border="1px solid gray";
        hold_data.style.display="none";
    }
    else{
        hold_data.style.display="block";
        document.getElementById('chane__text').style.border="2px solid blue";
    }
}
function open_datalist2(){
    var hold_data=document.getElementById('show_data2');
    if(hold_data.style.display==="block"){
        document.getElementById('chane__text2').style.border="1px solid gray";
        hold_data.style.display="none";
    }
    else{
        hold_data.style.display="block";
        document.getElementById('chane__text2').style.border="2px solid blue";
    }
}
function change_kth(){
    document.getElementById('chane__text2').innerHTML='';

}
