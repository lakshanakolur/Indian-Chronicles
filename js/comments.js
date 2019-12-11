function likeButton()
{
    var likeValue = this.parentNode.children[2];
    var temp = parseInt(likeValue.innerHTML);
    temp+=1;
    likeValue.innerHTML = temp;
}
function replyButton()
{
    var reply = prompt("enter your reply ");
    var replyDiv = document.createElement("p");
    replyDiv.innerHTML = reply;
    replyDiv.setAttribute("class","d");
    this.parentNode.appendChild(replyDiv);
}


function deleteButton()
{
    var del = this.parentNode;
    var comm = document.querySelector(".comment");
    comm.removeChild(del);
}
function status()
{
    var statusValue = document.querySelector("textarea").value;
    
    
    var mainDiv = document.createElement("div");
    mainDiv.setAttribute("class","d");
    
    var statusDiv = document.createElement("div");
    statusDiv.setAttribute("class","d");
    
    var S = document.createElement("p");
    S.innerHTML = statusValue;
    
    var like = document.createElement("input");
    var likeValue = document.createElement("span");
    like.setAttribute("value","LIKE");
    like.setAttribute("type","button");
    like.setAttribute("id","css");
    like.addEventListener("click",likeButton,false);
    likeValue.innerHTML = "0";
    
    var del = document.createElement("input");
    del.setAttribute("value","DELETE");
    del.setAttribute("type","button");
    del.setAttribute("id","css");
    del.addEventListener("click",deleteButton,false);
    
    var comm = document.querySelector(".comment");
    comm.appendChild(mainDiv);
    mainDiv.appendChild(statusDiv);
    statusDiv.appendChild(S);
    mainDiv.appendChild(like);
    mainDiv.appendChild(likeValue);
    mainDiv.appendChild(del);
    
}
