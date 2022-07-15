<div x-cloak x-data="listbox" 
    @keydown.up.stop.prevent="focusPrev"
    @keydown.down.stop.prevent="focusNext"
    @keydown.enter.stop.prevent="selectPerson"
    class="flex flex-col justify-center items-centers w-full space-y-1 text-slate-800">
    <input type="hidden" name="" :value=id>
    <div class="w-full relative mt-1">
        <button @click="toggle" type="button" class="flex items-center w-full h-9 px-3 border-none text-sm rounded-lg focus:ring-0 outline-none bg-white bg-opacity-25">
            <div class="flex items-center space-x-2">
                <img :src="photo" class="h-7 w-7 rounded-md shadow">
                <span x-text="selected"></span>
            </div>
            <span class="ml-auto">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-5 w-5 text-gray-400"><path fill-rule="evenodd" d="M10 3a1 1 0 0 1 .707.293l3 3a1 1 0 0 1-1.414 1.414L10 5.414 7.707 7.707a1 1 0 0 1-1.414-1.414l3-3A1 1 0 0 1 10 3zm-3.707 9.293a1 1 0 0 1 1.414 0L10 14.586l2.293-2.293a1 1 0 0 1 1.414 1.414l-3 3a1 1 0 0 1-1.414 0l-3-3a1 1 0 0 1 0-1.414z" clip-rule="evenodd"></path></svg>
            </span>
        </button>
    </div>
    <!--Options-->
    <ul x-show="open === true" x-trap="open" x-collapse @click.outside="open = false" class="flex flex-col justify-start w-full bg-white bg-opacity-25 list-none py-2 rounded-lg shadow-inner">
        <template x-for="person in people" :key="person.id">
            <li @click="selected = person.name, photo = person.photo, open = false" 
                :class="focus === person.id ? 'bg-pink-100' : ''"
                class="flex items-center justify-between relative text-sm cursor-pointer hover:bg-pink-100 select-none py-1 px-2">
                <div class="flex items-center space-x-2">
                    <img :src="person.photo" class="h-7 w-7 rounded-md shadow" :alt="person.name">
                    <span class="block truncate" x-text="person.name"></span>
                </div>
                <span class="">
                    <svg x-show="selected === person.name" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </span>
            </li>
        </template>
    </ul>
    <!--Options-->
</div>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('listbox', () => ({
            open : false,
            focus : 0,
            
            init(){
                this.selected = this.people[0].name
                this.photo = this.people[0].photo
            },
            
            people : [
                { id: 1, name: 'Xenia Onatop', photo: '../assets/images/profile-pic-3.jpg'},
                { id: 2, name: 'Felix Leiter', photo: '../assets/images/profile-pic-2.jpg'},
                { id: 3, name: 'Mary Goodnight', photo: '../assets/images/profile-pic-5.jpg'},
                { id: 4, name: 'René Mathis', photo: '../assets/images/profile-pic-4.jpg'},
                { id: 5, name: 'Honeychile Ryder', photo: '../assets/images/profile-pic.jpg'},
                { id: 6, name: 'Holly Goodhead', photo: '../assets/images/profile-pic-6.jpg'}
            ],

            focusNext() {
                this.focus < this.people.length ? this.focus ++ : ''
            },

            focusPrev() {
                this.focus > 0 ? this.focus -- : this.focus = 1
            },
            
            selectPerson() {
                this.selected = this.people[this.focus-1].name
                this.photo = this.people[this.focus-1].photo
                this.id = this.people[this.focus-1].id
                this.open = false
            },

            toggle() {
                this.open = ! this.open
            },      
        }))
    })
</script>