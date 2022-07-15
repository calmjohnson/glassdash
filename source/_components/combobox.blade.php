<div x-cloak x-data="combobox"
    @keydown.up.stop.prevent="focusPrev"
    @keydown.down.stop.prevent="focusNext"
    @keydown.enter.stop.prevent="selectCategory"
    class="flex flex-col space-y-1 text-slate-800">
    <input type="hidden" name="" :value=selectedCategories>
    <div class="mt-1">
        <div class="rounded-lg">
            <div class="w-full">
                <template x-for="(selectedCategory, index) in selectedCategories" 
                    class="flex flex-wrap items-center gap-1">
                    <span @click="removeCategory(selectedCategory)" class="bg-slate-800 text-slate-200 cursor-pointer rounded-tl-md rounded-tr-md ml-1 shadow text-xs px-2" x-text="'x' + ' ' + selectedCategory"></span>
                </template>
            </div>
            <div class="flex items-center">
                <input x-ref="query" 
                    @input="countFilteredCategories, query = $refs.query.value, open = true" 
                    placeholder="start typing..."
                    class="w-full h-9 px-3 border-none text-sm rounded-lg focus:ring-0 outline-none bg-white bg-opacity-25 shadow-inner" type="text">
                <button @click="toggle" type="button" class="px-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-5 w-5 text-gray-400"><path fill-rule="evenodd" d="M10 3a1 1 0 0 1 .707.293l3 3a1 1 0 0 1-1.414 1.414L10 5.414 7.707 7.707a1 1 0 0 1-1.414-1.414l3-3A1 1 0 0 1 10 3zm-3.707 9.293a1 1 0 0 1 1.414 0L10 14.586l2.293-2.293a1 1 0 0 1 1.414 1.414l-3 3a1 1 0 0 1-1.414 0l-3-3a1 1 0 0 1 0-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
        </div>
    </div>
    <!--Options-->
    <div x-show="open === true" x-trap="open" x-collapse @click.outside="open = false" class="flex flex-col justify-start w-full bg-white bg-opacity-25 list-none py-2 rounded-lg shadow-inner">
        <template x-if="filteredCategoriesCount === 0 && query !== ''">
            <div class="py-1 px-5">Nothing found...</div>
        </template>
        
        <template x-for="category in filteredCategories" :key="category.id">
            <li x-show="!selectedCategories.includes(category.name)" @click="addCategory(category.name), query = ''"
                :class="focus === category.id ? 'bg-pink-100' : ''"
                class="relative cursor-default hover:bg-pink-100 select-none py-1 px-5">
                <span class="block truncate" x-text="category.name"></span>
            </li>
        </template>
    </div>
    <!--Options-->
</div>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('combobox', () => ({
            open : false,
            focus : 0,
            focusedCategory : '',
            
            init(){
                this.selectedCategories = [];
                this.selected = 'Alpine'
                this.query = '';
                this.filteredCategoriesCount = this.categories.length
            },
            
            categories : [
                { id: 1, name: 'Alpine'},
                { id: 2, name: 'Tailwind'},
                { id: 3, name: 'Statamic'},
                { id: 4, name: 'Laravel'},
                { id: 5, name: 'Livewire'},
                { id: 6, name: 'Svelte'}
            ],

            addCategory(category) {
                this.selectedCategories.push(category)
            },

            removeCategory(category) {
                const index = this.selectedCategories.indexOf(category);
                if (index > -1) 
                { 
                    this.selectedCategories.splice(index, 1); 
                }
            },
            
            toggle() {
                this.open = ! this.open
            },

            filteredCategories() {
                return this.categories.filter(
                    category => category.name
                    .toLowerCase()
                    .replace(/\s+/g, '')
                    .includes(this.query.toLowerCase().replace(/\s+/g, ''))
                );
            },

            countFilteredCategories() {
                this.filteredCategoriesCount = this.categories.filter(
                    category => category.name
                    .toLowerCase()
                    .replace(/\s+/g, '')
                    .includes(this.query.toLowerCase().replace(/\s+/g, ''))
                ).length;
            },

            focusNext() {
                this.focus < this.categories.length ? this.focus ++ : ''
            },

            focusPrev() {
                this.focus > 0 ? this.focus -- : this.focus = 1
            },
            
            selectCategory(category) {
                this.selectedCategories.push(this.categories[this.focus - 1].name)
                console.log(this.focus)
                this.focus ++
            },
            
        }))
    })
    
</script>