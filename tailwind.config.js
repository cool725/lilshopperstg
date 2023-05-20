/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      maxWidth: {
        '1400': '1400px',
        '550': '550px',
        '500': '500px',
        '80': '80px',
      },
      fontFamily: {
        'league-script': ['League Script', 'cursive'],
      },
    },
  },
  plugins: [],
}