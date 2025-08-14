/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      'sans': ['Inter', 'sans-serif']
    },
    extend: {
        colors: {
            'primary': '#4894FC',
            'light': '#BBD8FD',
            'dim': '#ECF4FE'
        }
    },
  },
  plugins: [],
}
