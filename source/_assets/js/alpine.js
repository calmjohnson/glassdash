import Alpine from 'alpinejs'
import persist from '@alpinejs/persist'
import focus from '@alpinejs/focus'
import collapse from '@alpinejs/collapse'
import intersect from '@alpinejs/intersect'
 
Alpine.plugin(intersect)
Alpine.plugin(persist)
Alpine.plugin(focus)
Alpine.plugin(collapse)

import { Editor } from '@tiptap/core'
import StarterKit from '@tiptap/starter-kit'

// Tiptap editor on alpine init
document.addEventListener("alpine:init", () => {
    Alpine.data("editor", (content) => {
      let editor;
  
      return {
        // Passing updatedAt here to make Alpine
        // rerender the menu buttons.
        //
        // The value of updatedAt will be updated
        // on every Tiptap transaction.
        //
        isActive(type, opts = {}, updatedAt) {
          return editor.isActive(type, opts);
        },
        toggleBold() {
          editor.chain().toggleBold().focus().run();
        },
        toggleCode() {
          editor.chain().toggleCode().focus().run();
        },
        toggleItalic() {
            editor.chain().toggleItalic().focus().run();
        },
        toggleStrike() {
            editor.chain().toggleStrike().focus().run();
        },
        toggleParagraph() {
            editor.chain().toggleParagraph().focus().run();
        },
        toggleBulletList() {
            editor.chain().toggleBulletList().focus().run();
        },
        toggleOrderedList() {
            editor.chain().toggleOrderedList().focus().run();
        },
        toggleHeading(level) {
          editor.chain().toggleHeading({ level: level }).focus().run();
        },
        updatedAt: Date.now(),
        init() {
          const _this = this;
  
          editor = new Editor({
            element: this.$refs.editorReference,
            extensions: [StarterKit],
            content: content,
            onCreate({ editor }) {
              _this.updatedAt = Date.now();
            },
            onUpdate({ editor }) {
              _this.updatedAt = Date.now();
            },
            onSelectionUpdate({ editor }) {
              _this.updatedAt = Date.now();
            }
          });
        }
      };
    });
  });

window.Alpine = Alpine

Alpine.store('dataTable', {
    orders: [
        {
            "order":"#7701",
            "product":"Electronic Device that computes data",
            "date":"23/03/2021",
            "total":"45.99",
            "status":"shipped",
            "payment":"Flutterwave",
        },
        {
            "order":"#7702",
            "product":"Nike Air Max 270",
            "date":"29/02/2020",
            "total":"450.99",
            "status":"processing",
            "payment":"Stripe",
        },
        {
            "order":"#7703",
            "product":"Samsung Galaxy S20 Ultra",
            "date":"14/02/2022",
            "total":"11.99",
            "status":"shipped",
            "payment":"Master Card",
        },
        {
            "order":"#7704",
            "product":"Apple mac Book Pro M1 Max",
            "date":"23/03/2021",
            "total":"6,000",
            "status":"canceled",
            "payment":"Visa",
        },
        {
            "order":"#7705",
            "product":"Dell XPS 13",
            "date":"25/12/2020",
            "total":"45.99",
            "status":"shipped",
            "payment":"Verve",
        },
        {
            "order":"#7706",
            "product":"Sonny Xperia infiite",
            "date":"13/12/2021",
            "total":"45.99",
            "status":"shipped",
            "payment":"Paystack",
        },
        {
            "order":"#7707",
            "product":"Nokia 3310 Legend iStan",
            "date":"23/03/1995",
            "total":"405.99",
            "status":"processing",
            "payment":"Flutterwave",
        },
        {
            "order":"#7708",
            "product":"Toshiba Tecra Laptop",
            "date":"11/04/2021",
            "total":"255.99",
            "status":"canceled",
            "payment":"Bitcoin",
        },
        {
            "order":"#7709",
            "product":"Exploding Pen",
            "date":"06/06/2022",
            "total":"450.99",
            "status":"shipped",
            "payment":"Verve",
        },
        {
            "order":"#7710",
            "product":"How to make love all night",
            "date":"20/02/2021",
            "total":"9.99",
            "status":"processing",
            "payment":"Master Card",
        },
    ],
});

Alpine.start();