<div x-cloak x-data="image">
    <div class="relative w-auto">
        <img :src="image" class="text-xs flex justify-center py-2" alt="upload file...">
        <span @click="removeImage" x-show="image != null" class="absolute top-2 right-0 h-5 w-5 rounded-full bg-white text-red-700 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-700" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM8.707 7.293a1 1 0 0 0-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 1 0 1.414 1.414L10 11.414l1.293 1.293a1 1 0 0 0 1.414-1.414L11.414 10l1.293-1.293a1 1 0 0 0-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/></svg>
        </span>
    </div>
    <label>
        <input @change="handleImage" class="text-sm cursor-pointer w-36 hidden" type="file" accept="image/*" id="image" />
        <div class="cursor-pointer flex justify-center items-center space-x-1 w-full py-2 text-sm text-slate-900 bg-white bg-opacity-25 rounded-sm shadow-xl">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm3.707-8.707-3-3a1 1 0 0 0-1.414 0l-3 3a1 1 0 0 0 1.414 1.414L9 9.414V13a1 1 0 1 0 2 0V9.414l1.293 1.293a1 1 0 0 0 1.414-1.414z" clip-rule="evenodd"/></svg>
            <span>Select File</span>
        </div>
    </label>
</div>
<script>
     document.addEventListener('alpine:init', () => {
        Alpine.data('image', function () {
            return {
                open : false,
                image : null,

                handleImage() {
                    let file = document.getElementById('image').fileList;

                    const reader = new FileReader();

                    reader.addEventListener("load", () => {
                        // this will then display a text file
                        this.image = reader.result;
                    }, false);

                    if (file) {
                        reader.readAsDataURL(file);
                    }
                },

                removeImage() {
                    this.image = null;
                    document.getElementById('image').value = null;
                },
                
            }
        }
     )})
</script>