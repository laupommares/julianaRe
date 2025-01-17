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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                beige: '#D0B9A1', 
                dark: '#46402A', 
                gray: '#D9D9D9', 
                green: '#AADBC5',
                blue: '#73A1AC',
                'light-orange': '#FFC93D',
                orange: '#F5BE30',
                'dark-gray': '#6D6D6D',
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('daisyui'),
    ],
};
