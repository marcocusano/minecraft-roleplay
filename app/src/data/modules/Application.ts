export enum ReleaseType {
    Release = 'success',
    Beta = 'warning',
    Alpha = 'danger'
};

export class Application {

    releaseToLabel(release:ReleaseType):string|null {
        switch (release) {
            case ReleaseType.Alpha:
                return 'Prototype';
            case ReleaseType.Beta:
                return 'Dev';
            case ReleaseType.Release:
                return 'Stable';
            default:
                break;
        }
        return null;
    }

}

export default {
    author: {
        name: 'Marco Cusano',
        url: 'https://www.marcocusano.dev',
        demo: {
            api: 'https://api.roleplay.marcocusano.dev',
            app: 'https://roleplay.marcocusano.dev'
        }
    },
    name: import.meta.env['VITE_APP_NAME'] ? import.meta.env['VITE_APP_NAME'] : 'Roleplay Management System',
    shortName: import.meta.env['VITE_APP_SHORT_NAME'] ? import.meta.env['VITE_APP_SHORT_NAME'] : 'R.M.S.',
    description: import.meta.env['VITE_APP_DESCRIPTION'],
    version: "v0.0.1",
    release: ReleaseType.Alpha,
    social: {
        discord: 'https://discord.gg/YVyExjQ3G6',
        github: 'https://www.github.com/marcocusano/minecraft-roleplay',
        postman: 'https://www.postman.com/minecraft-roleplay/workspace/public/collection/31928221-6ca9b633-8bb5-4aa2-95ed-fa03424c62f2?action=share&creator=31928221&active-environment=31928221-b0450d75-d541-422c-af8c-6e70a92261b8'
    },
    socials: {
        discord: import.meta.env['VITE_SOCIAL_DISCORD'],
        facebook: import.meta.env['VITE_SOCIAL_FACEBOOK'],
        instagram: import.meta.env['VITE_SOCIAL_INSTAGRAM'],
        telegram: import.meta.env['VITE_SOCIAL_TELEGRAM']
    },
    minecraft: {
        host: import.meta.env['VITE_MINECRAFT_SERVER_IP'],
        port: import.meta.env['VITE_MINECRAFT_SERVER_PORT'],
        queryPort: import.meta.env['VITE_MINECRAFT_SERVER_QUERYPORT'],
        avatarEngine: import.meta.env['VITE_MINECRAFT_SKIN_ENGINE']
    }
}