
<div x-cloak 
    x-data="todo()" 
    x-trap="shown" 
    x-intersect="shown = true"
    x-intersect:leave="shown = false"
    @keydown.ctrl.+.stop.prevent="toggle" 
    class="relative px-5 py-5 h-full shadow rounded-lg bg-opacity-25 bg-white">
    <div class="h-full flex flex-col justify-between">
        <div>
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2">
                    <button class="focus:outline-none font-semibold py-3 text-sm text-slate-800">Todo</button>
                    <button class="h-3 w-3 shadow-sm rounded-full bg-green-300"></button>
                    <button class="h-3 w-3 shadow-sm rounded-full bg-yellow-300"></button>
                </div>
                <div class="flex space-x-1">
                    <button disabled class="text-xs px-1 shadow-md rounded-md bg-slate-700 text-white">
                        ctrl +
                    </button>
                    <button disabled class="text-xs px-1 shadow-md rounded-md bg-slate-700 text-white">
                        esc
                    </button>
                </div>
            </div>
            <template class="flex flex-col space-x-5 space-y-4" x-for="todo in todos" :key="todo.title">
                <div class="py-2 flex justify-between items-center border-b border-pink-100">
                    <div>
                        <label @click="completeTask(todo.title, todo.status)" class="flex items-center cursor-pointer space-x-2">
                            <input x-model="todo.status" class="rounded focus:ring-transparent border-none" type="checkbox" name="" >
                            <span :class="todo.status ? 'line-through text-gray-600' : ''" 
                                class="text-xs font-medium text-slate-800" x-text="todo.title"></span>
                        </label>
                    </div>
                    <button @click="removeTask(todo.title)">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M9 2a1 1 0 0 0-.894.553L7.382 4H4a1 1 0 0 0 0 2v10a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V6a1 1 0 1 0 0-2h-3.382l-.724-1.447A1 1 0 0 0 11 2H9zM7 8a1 1 0 0 1 2 0v6a1 1 0 1 1-2 0V8zm5-1a1 1 0 0 0-1 1v6a1 1 0 1 0 2 0V8a1 1 0 0 0-1-1z" clip-rule="evenodd"/></svg>
                    </button>
                </div>
            </template>
        </div>
        <div class="relative flex justify-end mt-2">
            <button @mouseover="tip = true" @click="toggle" class="px-2 py-1 text-sm shadow rounded-md bg-white bg-opacity-25">Add Task</button>
        </div>
    </div>
    <div x-show="open" x-transition class="absolute inset-0 w-full h-full bg-white bg-transparent filter backdrop-blur-sm shadow-lg rounded-lg">
        <div class="flex justify-center items-center h-full">
            <div class="flex items-center space-x-2 px-5 md:px-0">
                <input type="text" @keyup.esc="open = false" @keyup.enter="addTask" x-model="task" x-trap="open" 
                    class="h-8 w-full rounded-full border-pink-300 focus:outline-none px-2 py-1">
                <button @click="addTask" class="h-8 w-8 flex items-center justify-center rounded-full shadow-lg bg-pink-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 5a1 1 0 0 1 1 1v3h3a1 1 0 1 1 0 2h-3v3a1 1 0 1 1-2 0v-3H6a1 1 0 1 1 0-2h3V6a1 1 0 0 1 1-1z" clip-rule="evenodd"/></svg>
                </button>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('todo', function () {
            return {
                open: false,
                shown: false,
                task: '',
                todos: [],
                
                init() {
                    this.todos = JSON.parse(localStorage.getItem('storedTodos'));
                },

                toggle() {
                    this.task = ''
                    this.open = ! this.open
                },

                addTask() {
                    let obj  = {};
                    obj ["title"] = this.task;
                    obj ["status"] = false;
                    this.todos.push(obj);
                    localStorage.setItem('storedTodos', JSON.stringify(this.todos));
                    this.open = false;
                },

                removeTask(title) {
                    todos = this.todos;
                    index = todos.findIndex(todo => todo.title ===title)
                    
                    if (index > -1) { 
                        this.todos.splice(index, 1); 
                    }

                    localStorage.setItem('storedTodos', JSON.stringify(this.todos));
                },

                completeTask(title, status) {
                    todos = this.todos;

                    if (status === true ) {
                        let updateTodos = this.todos.map(todo =>
                        todo.title === title
                            ? { ...todo, status: false }
                            : todo
                        );
                        localStorage.setItem('storedTodos', JSON.stringify(updateTodos));
                    }
                    else {
                        let updateTodos = this.todos.map(todo =>
                        todo.title === title
                            ? { ...todo, status: true }
                            : todo
                        );
                        localStorage.setItem('storedTodos', JSON.stringify(updateTodos));
                    }
                    
                },
            }
            
        })
    })
</script>