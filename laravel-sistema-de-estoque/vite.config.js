import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/JsControleEstoque.js', 'resources/js/controledois.js', 'resources/css/stylecontroleestoque2.css', 'resources/css/cadastroItem.css'],
            refresh: true,
        }),
    ],
});
