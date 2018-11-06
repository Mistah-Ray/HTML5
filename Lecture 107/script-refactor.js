var button = document.getElementById("enter");
var item = document.getElementById("userItem");
var ul = document.getElementById("toDoList");


function addListItem()
{
		var li = document.createElement("li");
		li.appendChild(document.createTextNode(item.value));
		ul.appendChild(li);
		document.getElementById("userItem").value = null;
}

function addByClick()
{
	if(item.value.length > 0)
	{
		addListItem();
	}
}


function addByEnter(e)
{
	if(item.value.length > 0 && e.keyCode === 13)
	{
		addListItem();
	}
}

button.addEventListener("click", addByClick);
item.addEventListener("keypress", addByEnter);
