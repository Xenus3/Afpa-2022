//selecteurs
const todoInput = document.querySelector(".todo-input"); 
const todoButton = document.querySelector(".todo-button");
const todoList = document.querySelector(".todo-list");
const filterOption = document.querySelector("filter-todo");

//ecouteurs

todoButton.addEventListener("click", addTodo);
todoList.addEventListener("click", deleteCheck);
filterOption.addEventListener("input", filterTodo);

  
//functions
  function addTodo(event) {
    //empeche le button de reset
    event.preventDefault();
    //todo DIV
    const todoDiv = document.createElement("div"); 
    todoDiv.classList.add("todo");
    //creer le li
    const newTodo = document.createElement("li");
    newTodo.innerText = todoInput.value;
    newTodo.classList.add("todo-item");
     todoDiv.appendChild(newTodo);
     //button check
     const completedButton = document.createElement("button");
     completedButton.innerHTML = '<i class="fas fa-check"></i>';
     completedButton.classList.add("complete-btn");
     todoDiv.appendChild(completedButton);
     //button supprimer
     const trashButton = document.createElement("button");
     trashButton.innerHTML = '<i class="fas fa-trash"></i>';
     trashButton.classList.add("trash-btn");
     todoDiv.appendChild(trashButton);
     //ajouter notre TODO
     todoList.appendChild(todoDiv );
     todoInput.value="";
  }

  function deleteCheck (e) {
    const item = e.target;
    // delete todo
    if (item.classList[0] === "trash-btn") {
      const todo = item.parentElement;
      todo.classList.add("fall");
      todo.addEventListener("transitionend", function () {
        todo.remove();
      });
    }

    //check mark
    if (item.classList[0] === "complete-btn") {
      const todo = item.parentElement;
      todo.classList.toggle("completed"); 
    }
        

  }

  function filterTodo (e) {
    const todos = todoList.childNodes;
    console.log(todos);
  }