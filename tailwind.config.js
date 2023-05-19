/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      maxWidth: {
        '550': '550px',
        '500': '500px',
        '80': '80px',
      }
    },
  },
  plugins: [],
}