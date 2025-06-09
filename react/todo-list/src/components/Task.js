import React from "react";

function Task({ task, toggleTaskCompletion }) {
  return (
    <li style={{ margin: "5px 0" }}>
      <label style={{ textDecoration: task.completed ? "line-through" : "none" }}>
        <input
          type="checkbox"
          checked={task.completed}
          onChange={() => toggleTaskCompletion(task.id)}
          style={{ marginRight: "10px" }}
        />
        {task.text}
      </label>
    </li>
  );
}

export default Task;
