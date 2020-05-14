module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
    './resources/js/**/*.js',
  ],
  theme: {
    extend: {}
  },
  variants: {},
  plugins: [
    require('@tailwindcss/custom-forms')
  ]
}
