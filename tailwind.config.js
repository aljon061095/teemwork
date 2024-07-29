/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'tm-primary':'#512DA8',
        'tm-secondary': '#7F56DA',
        'tm-default': '#D8C5FF',
        'tm-light': '#F4F4F4'
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

