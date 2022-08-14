import fs from "fs";
import {resolve} from "path";
import {homedir} from "os";

export let bladeRefreshPlugin = {
    name: 'blade',
    handleHotUpdate({ file, server }) {
        if (file.endsWith('.blade.php')) { server.ws.send({ type: 'full-reload', path: '*' }) }
        if (file.endsWith('.md')) { server.ws.send({ type: 'full-reload', path: '*' }) }
    },
};

export function serverConfiguration(host) {
    let keyPath = resolve(homedir(), `.config/valet/Certificates/${host}.key`)
    let certificatePath = resolve(homedir(), `.config/valet/Certificates/${host}.crt`)

    if (!fs.existsSync(keyPath) || !fs.existsSync(certificatePath)) {
        return {}
    }

    return {
        hmr: {host}, host, https: {
            key: fs.readFileSync(keyPath),
            cert: fs.readFileSync(certificatePath),
        },
    }
}
