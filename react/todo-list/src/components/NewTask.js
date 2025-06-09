import React, { useState } from "react";

function NewTask({ addTask }) {
  const [input, setInput] = useState("");

  const handleAdd = () => {
    if (input.trim()) {
      addTask(input.trim());
      setInput("");
    }
  };

  const handleKeyDown = (e) => {
    if (e.key === "Enter") handleAdd();
  };

  return (
    <div style={{ marginTop: "10px", marginBottom: "10px" }}>
      <input
        type="text"
        value={input}
        onChange={(e) => setInput(e.target.value)}
        onKeyDown={handleKeyDown}
        placeholder="Dodaj nowe zadanie"
      />
      <button onClick={handleAdd} style={{ marginLeft: "5px" }}>
        Dodaj
      </button>
    </div>
  );
}

export default NewTask;
