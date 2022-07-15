module.exports = {
  content: require('fast-glob').sync([
    'source/**/*.blade.php',
    'source/**/*.md',
    'source/**/*.html',
  ]),
  theme: {
    extend: {
      fontFamily: {
        'Poppins': ['Poppins', 'sans-serif'],
        'Epilogue': ['Epilogue', 'sans-serrif']
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    //require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
};
