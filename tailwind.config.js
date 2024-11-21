/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		"./index.php",
		"./header.php",
		"./footer.php",
		"./template-parts/*.php",
	],
	theme: {
		extend: {
			colors: {
				bourgoundy: "#D21411",
				"light-grey": "#d3d3d3",
				"very-light-grey": "#F0F0F0",
				label: "rgba(0, 0, 0, 0.35)",
			},
			fontFamily: {
				verdana: ["Verdana", "sans-serif"],
			},
			fontSize: {
				medium: "16px",
			},
			screens: {
				lg: "1025px",
			},
			spacing: {
				0: "0",
				80: "20rem",
			},
		},
	},
	plugins: [],
};
