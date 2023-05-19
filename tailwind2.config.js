/** @type {import('tailwindcss').Config} */zz
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      screens:{
        'phone': '480px',
        'tablet': '768px',
        'laptop': '1024px',
        'desktop': '1280px',
      },
    },
  },
  plugins: [
    require('daisyui'),
  ],
}

