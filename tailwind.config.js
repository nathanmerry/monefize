module.exports = {
  purge: [],
  darkMode: false,
  theme: {
    fontFamily: {
      header: ['"Mulish"', 'sans-serif'],
      body: ['"Source Sans Pro"', 'sans-serif'],
    },
    container: {
      center: true,
      padding: '1rem',
      screens: {
        xl: "1300px"
     }
    },
    maxWidth: {
      logo: '15rem',
      'container-sm': '1100px',
      'container-xs': '775px'
    },
    extend: {
      colors: {
        primary: 'var(--theme-primary)',
        secondary: 'var(--theme-secondary)',
        tertiary: 'var(--theme-tertiary)',
        dark: 'var(--theme-dark)',
        'img-bg': '#1D2545'
      },
      zIndex: {
        '-1': '-1',
       } 
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
