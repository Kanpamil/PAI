import React, { useState } from "react";
import Filter from "./components/Filter";
import NewTask from "./components/NewTask";
import ToDoList from "./components/ToDoList";

function App() {
  const [tasks, setTasks] = useState([]);
  const [hideCompleted, setHideCompleted] = useState(false);

  const addTask = (text) => {
    const newTask = {
      id: Date.now(),
      text,
      completed: false,
    };
    setTasks([newTask, ...tasks]);
  };

  const toggleTaskCompletion = (id) => {
    setTasks(
      tasks.map((task) =>
        task.id === id ? { ...task, completed: !task.completed } : task
      )
    );
  };

  const filteredTasks = hideCompleted
    ? tasks.filter((task) => !task.completed)
    : tasks;

  return (
    <div style={{ padding: "20px", fontFamily: "Arial" }}>
      <h1>To Do List</h1>
      <Filter hideCompleted={hideCompleted} setHideCompleted={setHideCompleted} />
      <NewTask addTask={addTask} />
      <ToDoList tasks={filteredTasks} toggleTaskCompletion={toggleTaskCompletion} />
    </div>
  );
}

export default App;
