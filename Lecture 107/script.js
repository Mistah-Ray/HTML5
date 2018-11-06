var button = document.getElementById("enter");
var item = document.getElementById("userItem");
var ul = document.getElementById("toDoList");

button.addEventListener("click", addToList);

function addToList()
{
	if(item.value.length > 0)
	{
		var li = document.createElement("li");
		li.appendChild(document.createTextNode(item.value));
		ul.appendChild(li);
		document.getElementById("userItem").value = null;
	}
}

item.addEventListener("keypress", addToListK);

function addToListK(e)
{
	if(item.value.length > 0 && e.keyCode === 13)
	{
		var li = document.createElement("li");
		li.appendChild(document.createTextNode(item.value));
		ul.appendChild(li);
		document.getElementById("userItem").value = null;
	}
}

