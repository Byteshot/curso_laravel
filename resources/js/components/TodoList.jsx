import React from 'react'
import { TodoItem } from './TodoItem'
export function TodoList({ todos }) {
    // console.log("ok");
  return (
    <ul>
        {todos.map((todo) => (
            <TodoItem key={todo.id} todo={todo} />
        ))}
    </ul>
  )
}
