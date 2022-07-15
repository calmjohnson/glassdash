<div class="editor">
  <div x-data="editor()">
    <div class="space-x-2 space-y-2 text-sm rounded-t-md bg-opacity-25 py-3 px-2 bg-white editor-menu-fixed">
      <button type="button"
        @click="toggleBold()"
        class="px-1 ring-1 ring-slate-900 ring-offset-1 rounded-md shadow-md"
        :class="{ 'is-active' : isActive('bold', updatedAt) }"
      >
        Bold
      </button>
      <button type="button"
        @click="toggleItalic()"
        class="px-1 ring-1 ring-slate-900 ring-offset-1 rounded-md shadow-md"
        :class="{ 'is-active' : isActive('italic', updatedAt) }"
      >
        Italic
      </button>
      <button type="button"
        @click="toggleStrike()"
        class="px-1 ring-1 ring-slate-900 ring-offset-1 rounded-md shadow-md"
        :class="{ 'is-active' : isActive('strike', updatedAt) }"
      >
        Strike
      </button>
      <button type="button"
        @click="toggleCode()"
        class="px-1 ring-1 ring-slate-900 ring-offset-1 rounded-md shadow-md"
        :class="{ 'is-active' : isActive('code', updatedAt) }"
      >
        Code
      </button>
      <button type="button"
        @click="toggleParagraph()"
        class="px-1 ring-1 ring-slate-900 ring-offset-1 rounded-md shadow-md"
        :class="{ 'is-active' : isActive('paragraph', updatedAt) }"
      >
        Paragraph
      </button>
      <button type="button"
        @click="toggleHeading(1)"
        class="px-1 ring-1 ring-slate-900 ring-offset-1 rounded-md shadow-md"
        :class="{ 'is-active' : isActive('heading', { level: 1 }, updatedAt) }"
      >
        H1
      </button>
      <button type="button"
        @click="toggleHeading(2)"
        class="px-1 ring-1 ring-slate-900 ring-offset-1 rounded-md shadow-md"
        :class="{ 'is-active' : isActive('heading', { level: 2 }, updatedAt) }"
      >
        H2
      </button>
      <button type="button"
        @click="toggleHeading(3)"
        class="px-1 ring-1 ring-slate-900 ring-offset-1 rounded-md shadow-md"
        :class="{ 'is-active' : isActive('heading', { level: 3 }, updatedAt) }"
      >
        H3
      </button>
      <button type="button"
        @click="toggleBulletList()"
        class="px-1 ring-1 ring-slate-900 ring-offset-1 rounded-md shadow-md"
        :class="{ 'is-active' : isActive('bulletList', updatedAt) }"
      >
        Bullet List
      </button>
      <button type="button"
        @click="toggleOrderedList()"
        class="px-1 ring-1 ring-slate-900 ring-offset-1 rounded-md shadow-md"
        :class="{ 'is-active' : isActive('orderedList', updatedAt) }"
      >
        Ordered List
      </button>
    </div>

    <div x-ref="editorReference"></div>
  </div>
</div>