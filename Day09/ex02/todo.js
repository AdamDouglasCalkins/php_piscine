var array = [];
var index = 0;
var index2 = 0;
var flag = 0;

function add_new(elem)
{
  var todo;
  if (flag == 0)
  {
    todo = prompt("Enter a new to do list : ");
  }
  else {
    todo = elem;
  }
  if (todo)
  {
    var list = document.getElementById("ft_list");
    var newitem = document.createElement("DIV");
    newitem.setAttribute("class", "newelem");
    newitem.setAttribute("onclick", "dellete(this)");
    newitem.setAttribute("index", index);
    var textnode = document.createTextNode(todo);
    array[index] = todo;
    index++;
    newitem.appendChild(textnode);
    list.insertBefore(newitem, list.childNodes[0]);
    if (flag == 0)
    {
      update_cookies();
    }
  }
}
function dellete(obj)
{
  if (confirm("Are you sure you want to delete this list? ?") == true)
  {
    var ind = obj.getAttribute("index");
    array.splice(ind, 1);
    obj.parentNode.removeChild(obj);
    update_cookies();
  }
}

function update_cookies()
{
  var json_str = JSON.stringify(array);
  document.cookie = "todos="+json_str;
}

window.onload = function()
{
  if (document.cookie)
  {
    flag = 1;
    var cook = document.cookie;
    var newArray = cook.split("=");
    var test = JSON.parse(newArray[1]);
    for (elem in test)
    {
      add_new(test[elem]);
    }
    flag = 0;
  }
}

