function changetext(id)
{
    id.innerHTML="谢谢!";
}

function addDom() {
    var para=document.createElement("p");
    var node=document.createTextNode("本站服务器共享SS账号:DingSoung.tk:1324 aaaaaa aes-256-cfb");
    para.appendChild(node);

    var element=document.getElementById("url2");
    element.appendChild(para);
}