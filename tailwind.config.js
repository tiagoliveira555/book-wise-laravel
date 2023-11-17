import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['"Nunito Sans"', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                base: {
                    'green-100': '#50B2C0',
                    'green-200': '#255D6A',
                    'green-300': '#0A313C',
                    'purple-100': '#8381D9',
                    'purple-200': '#2A2879',
                    'gray-100': '#F8F9FC',
                    'gray-200': '#E6E8F2',
                    'gray-300': '#D1D6E4',
                    'gray-400': '#8D95AF',
                    'gray-500': '#303F73',
                    'gray-600': '#252D4A',
                    'gray-700': '#181C2A',
                    'gray-800': '#0E1116',
                }
            },
            backgroundImage: {
                'gradient-vertical': "linear-gradient(180deg, #7FD1CC 0%, #9694F5 100%)",
                'gradient-horizontal': "linear-gradient(90deg, #7FD1CC 0%, #9694F5 100%)",
            }
        },
    },

    plugins: [forms],
};
