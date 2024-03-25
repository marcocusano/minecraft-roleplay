/*
    MCHeads
    https://mc-heads.net/
*/

export class MCHeads {

    private url:string = '//mc-heads.net';

    /**
     * Get a Player Avatar
     * @param identifier Minecraft UUID or Minecraft Nickname
     * @param size Image Size (Default: 150)
     * @param helm True/False include helm (Default: True)
     * @returns Image URL String
     */
    public avatar(identifier:string, size:number|null = 150, helm:boolean = true):string {
        let url = `${this.url}/avatar/${identifier}`;
        if (size) {  url += `/${size}`; }
        if (!helm) { url += `/nohelm`; }
        return url;
    }

    /**
     * Get a Player full body Skin.
     * @param identifier Minecraft UUID or Minecraft Nickname
     * @returns Image URL String
     */
    public body(identifier:string):string {
        return `${this.url}/player/${identifier}`;
    }

    /**
     * Get a default Minecraft Skin
     * @param name 'MHF_Steve' or 'MHF_Alex' (Default: 'MHF_Steve')
     * @returns Image URL String
     */
    public defaults(name:'MHF_Steve'|'MHF_Alex' = 'MHF_Steve'):string {
        return `${this.url}/player/${name}`;
    }

    /**
     * Download a Player Skin
     * @param uuid Minecraft UUID
     * @returns Image URL String
     */
    public download(uuid:string):string {
        return `${this.url}/download/${uuid}`;
    }

    /**
     * Get an isometric Head of a Player, looking to a specific direction
     * @param identifier Mineraft UUID or Minecraft Nickname
     * @param direction Player's looking at 'left' or 'right' (Default: 'right')
     * @returns Image URL String
     */
    public isometricAvatar(identifier:string, direction:'left'|'right' = 'right'):string {
        let url = `${this.url}/head/${identifier}`;
        if (direction) { url += `/${direction}`; }
        return url;
    }

    /**
     * Get a Player Skin
     * @param uuid Minecraft UUID
     * @returns Image URL String
     */
    public skin(uuid:string):string {
        return `${this.url}/skin/${uuid}`;
    }

}

export default new MCHeads();