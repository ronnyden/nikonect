module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {},
  },
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.css'
  ],
  plugins: [],
}