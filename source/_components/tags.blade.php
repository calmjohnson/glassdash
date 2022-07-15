<div x-cloak x-data="tags" class="w-full flex flex-col space-y-1 text-slate-900">
    <input type="hidden" name="" :value="tags">
    <div class="flex items-center flex-wrap gap-1 py-1 rounded-md h-auto bg-white bg-opacity-25">
        <template x-for="tag in tags">
            <span @click="removeTag(tag)" class="px-1 text-xs cursor-pointer text-slate-200 bg-slate-800 shadow rounded-md" x-text="'x '+' '+tag"></span>
        </template>
        <input @keyup.prevent.stop.enter="addTag" @keyup.prevent.stop.backspace="removeLastTag()" x-model="tag" class="w-full border-none text-xs py-1 appearance-none bg-white bg-opacity-0 h-6 placeholder:text-xs outline-none" placeholder="type here" value="statamic jobs" type="text">
    </div>
</div>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('tags', () => ({
            open : false,
            focus : 0,
            tags : [],
            tag : '',

            addTag() {
                this.tags.push(this.tag);
                this.tag = '';
            },

            removeTag(tag) {
                const index = this.tags.indexOf(tag);
                if (index > -1) 
                { 
                    this.tags.splice(index, 1); 
                }
            },

            removeLastTag() {
                this.tag === '' ? this.tags.pop() : '';
            }
        }))
    })
</script>