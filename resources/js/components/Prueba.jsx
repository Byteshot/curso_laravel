import React from 'react'
import { useState } from 'react'
import { TodoList } from './TodoList'
import { Fragment } from 'react'
import { useRef } from 'react'
import { v4 as uuidv4 } from 'uuid'
export const Prueba = () => {
    const [todos, setTodos] = useState([{'id':1,'prueba':'hola'}])

    const todoTaskRef = useRef()

    const handleTodoAdd = () => {
        const newTodo = todoTaskRef.current.value
        if(newTodo === '') return;

        setTodos((prevTodos) => {
                return [...prevTodos, {id :uuidv4(), prueba: newTodo}]
            }
        )
        todoTaskRef.current.value = '';
    }

    const handleTodoDelete = (id) => {
        setTodos((prevTodos) => {
            return prevTodos.filter((todo) => todo.id !== id)
        })
    }

  return (
    <Fragment>
        <TodoList todos={todos} />
        <input ref={todoTaskRef} type="text"/>
        <button onClick={handleTodoAdd}>Agregar</button>
        <button onClick={handleTodoDelete}>Eliminar</button>
    </Fragment>
  )
}
