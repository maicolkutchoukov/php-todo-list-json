const { createApp } = Vue;

createApp({
    data() {
        return {
            todos: []
        };
    },
    mounted() {
        axios
            .get('http://localhost:8888/boolean/php-todo-list-json/backend/todo.json')
            .then((res) => {
                this.todos = res.data.todoList;
            });
    }
}).mount('#app');