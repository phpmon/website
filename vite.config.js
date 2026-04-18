import laravel from 'laravel-vite-plugin'
import tailwindcss from '@tailwindcss/vite'
import {defineConfig} from 'vite'
import {bladeRefreshPlugin, serverConfiguration} from './vite.plugins'

export default defineConfig({
    plugins: [
        tailwindcss(),
        laravel([
            'resources/css/app.css',
        ]),
        bladeRefreshPlugin
    ],
    server: serverConfiguration('phpmon.test')
});
