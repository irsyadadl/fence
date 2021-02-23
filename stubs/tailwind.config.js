const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
	purge: [],
	darkMode: false, // or 'media' or 'class'
	theme: {
		extend: {
			container: {
				center: true,
				padding: '1rem',
			},
			
			colors: {
				gray: colors.coolGray,
				blue: colors.blue,
				green: colors.emerald,
			},

			fontFamily: {
				sans: ['Open Sans', ...defaultTheme.fontFamily.sans],
			},
		},
	},
	variants: {
		extend: {},
	},
	plugins: [
		require('@tailwindcss/forms'),
	],
}
