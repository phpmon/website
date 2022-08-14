import laravel from 'laravel-vite-plugin'
import {defineConfig} from 'vite'
import {bladeRefreshPlugin, serverConfiguration} from './vite.plugins'

export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.css',
        ]),
        bladeRefreshPlugin
    ],
    server: serverConfiguration('phpmon.test')
});
