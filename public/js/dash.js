/**
 * Created by luoweis on 2017/1/6.
 */
function tagsAddSelect() {
    var level = document.getElementById('IDLevel').value;
    if(level=='level2'){
        alert('选择了二级标签需要在表单中指定一级标签,如果没有一级标签需要首先添加一级标签');
        document.getElementById("forLevel2").style.display="";//显示
    } else if(level=='level1'){
        document.getElementById("forLevel2").style.display="none";//隐藏
    }
}

function hidd(){
    document.getElementById('divTitle').style.display="none";//隐藏
    document.getElementById('divIntro').style.display="none";//隐藏
    document.getElementById('level1').style.display="none";//隐藏
    document.getElementById('level2').style.display="none";//隐藏
    document.getElementById('divhidd').innerHTML = "<a href='#' onclick='unhidd();return false;'> <span class='glyphicon glyphicon-resize-full'></span> </a>";

}
function unhidd(){
    document.getElementById('divTitle').style.display="";//隐藏
    document.getElementById('divIntro').style.display="";//隐藏
    document.getElementById('level1').style.display="";//隐藏
    document.getElementById('level2').style.display="";//隐藏
    document.getElementById('divhidd').innerHTML = "<a href='#' onclick='hidd();return false;'> <span class='glyphicon glyphicon-resize-small'></span> </a>";
}