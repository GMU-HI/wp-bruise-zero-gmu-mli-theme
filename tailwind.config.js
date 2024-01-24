/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    // "./**/*.{html,js,php}",
    "./front-page.php"
  ],
  theme: {
    fontFamily: {
      'sans': ['ui-sans-serif', 'system-ui'],
      'serif': ['ui-serif', 'Georgia'],
    },
    extend: {},
  },
  plugins: [
    require("daisyui"),
  ],
  // daisyUI config (optional)
  daisyui: {
    themes: [
      {
        mytheme: {
          "primary": "#006633",
          "secondary": "#f6d860",
          "accent": "#37cdbe",
          "neutral": "#3d4451",
          "base-100": "#ffffff",
        },
      },
    ]

  }
}
