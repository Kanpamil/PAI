import React from "react";
import Task from "./Task";

function ToDoList({ tasks, toggleTaskCompletion }) {
  if (tasks.length === 0) {
    return <p>Brak zadań do wyświetlenia.</p>;
  }

  return (
    <ul style={{ listStyleType: "none", paddingLeft: 0 }}>
      {tasks.map((task) => (
        <Task key={task.id} task={task} toggleTaskCompletion={toggleTaskCompletion} />
      ))}
    </ul>
  );
}

export default ToDoList;
