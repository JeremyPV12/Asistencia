/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        'color-main':'#1f2b6c',
        'color-secundary':'#159be7',
        'color-terciario':'#bbcef3',
        'color-cuarto':'#f7f9f9',
        'color-letter':'#202023',
        'color-red':'#FE5F55',
        'color-green':'#35FF69',
        'color-fondo':'#f7f8fd'
      },
    },
    fontFamily:{
      'sans':'"Inter", sans-serif"'
    }
  },
  plugins: [],
}

