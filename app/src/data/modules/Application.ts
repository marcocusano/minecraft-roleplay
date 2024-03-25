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
    version: "v0.0.1",
    release: ReleaseType.Alpha,
    social: {
        github: 'https://www.github.com/marcocusano/minecraft-roleplay'
    }
}