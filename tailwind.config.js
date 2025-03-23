module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      colors: {
        'custom-purple': '#F0EBFD',
        'custom-dark-blue': '#2D2244',
        'custom-purple-2': '#A88EEE',
        'custom-purple-3': '#9271EA',
        
      },
      fontFamily: {
        'custom': ['Chewy', 'serif'],
      },
      lineHeight: {
        'custom': '1.3rem',
      },
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
