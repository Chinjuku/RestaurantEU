export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {},
    colors : {
      'darkgreen' : '#0D4F4E',
      'lgreen' : '#9EB5A3',
      'cream' : '#D7C2B1',
      'lightcream' : '#FEF6EB',
      'orangee' : '#E38854',
    },
    screens: {
      'phone' : { max: '575px' }, // Mobile (iPhone 3 - iPhone XS Max).
      'largephone': { min: '576px', max: '767px' }, // Mobile (matches max: iPhone 11 Pro Max landscape @ 896px).
      'tablet': { min: '768px', max: '1199px' }, // Tablet (matches max: iPad Pro @ 1112px).
      'laptop': { min: '1200px', max: '1480px' }, // Desktop wide.
      'pc': { min: '1520px' } // Desktop widescreen.
    },
  },
  plugins: [ require('flowbite/plugin') ],
  daisyui: {
    themes: false,
  },
}
