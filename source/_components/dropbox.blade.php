<div x-cloak x-data="dropbox" 
    @dragenter.stop.prevent=""
    @dragover.stop.prevent=""
    @drop.stop.prevent="drop"
    class="mt-3 pt-10 w-full rounded-md text-slate-700 font-medium bg-white bg-opacity-25">
    <div class="relative flex items-center space-x-3 space-y-3 flex-wrap">
        <template x-for="image in images">
            <div class="flex flex-col space-y-1">
                <img x-transition class="bg-white h-24 w-24 rounded-md shadow-md" :src="image" :alt="image">
                <span @click="removeImage(image)" class="px-2 py-1 text-center text-xs cursor-pointer bg-white bg-opacity-25 text-slate-700 bg-opacity-25 rounded-md">
                    remove
                </span>
            </div>
        </template>
    </div>
    <label>
        <input @change="select" class="text-sm cursor-pointer w-36 hidden" type="file" multiple accept="image/*" id="images" />
        <div class="ml-3 mt-10 py-3 cursor-pointer flex justify-start items-center space-x-1 w-full text-xs text-slate-900">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m4 16 4.586-4.586a2 2 0 0 1 2.828 0L16 16m-2-2 1.586-1.586a2 2 0 0 1 2.828 0L20 14m-6-6h.01M6 20h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2z"/></svg>
            <span><span class="text-pink-600">Upload a file</span> or drag and drop</span>
        </div>
    </label>
</div>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('dropbox', function () {
            return {
                open : false,
                images : [],
                
                handleImages(files) {
                    for (let i = 0; i < files.length; i++) {
                        const file = files[i];

                        const reader = new FileReader();
                        reader.addEventListener("load", () => {
                        // this will then display a text file
                            this.images.push(reader.result);
                        }, false);

                        if (file) {
                            reader.readAsDataURL(file);
                        }
                    }
                    document.getElementById('images').value = this.images;
                },

                select() {
                    let files = document.getElementById('images').files;
                    this.handleImages(files);
                },

                drop(e) {
                    const dt = e.dataTransfer;
                    const files = dt.files;

                    this.handleImages(files);
                },

                removeImage(image) {
                    const index = this.images.indexOf(image);
                    if (index > -1) 
                    { 
                        this.images.splice(index, 1); 
                    }
                    document.getElementById('images').value = this.images;
                },
            }
        }
     )})
</script>