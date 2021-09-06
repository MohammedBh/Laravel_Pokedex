  // tailwind.config.js
  module.exports = {
    purge: [],
    purge: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
    ],
     darkMode: false, // or 'media' or 'class'
     theme: {
       fontFamily:{
         'system-ui' : ['system-ui'],
       },
       extend: {},
     },
     variants: {
       extend: {},
     },
     plugins: [],
   }