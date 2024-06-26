/*
    Mineskin
    https://mineskin.eu/
*/

export class Mineskin {

    private url:string = '//mineskin.eu';

    /**
     * Get a Player Avatar
     * @param identifier Minecraft UUID or Minecraft Nickname
     * @param size Image Size (Default: 150)
     * @param helm True/False include helm (Default: True)
     * @returns Image URL String
     */
    public avatar(identifier:string, size:number|null = 150, helm:boolean = true):string {
        let url = `${this.url}/${helm?'helm':'avatar'}/${identifier}`;
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
        return `${this.url}/armor/body/${identifier}`;
    }

    /**
     * Get a Player chest Skin.
     * @param identifier Minecraft UUID or Minecraft Nickname
     * @returns Image URL String
     */
    public chest(identifier:string):string {
        return `${this.url}/armor/bust/${identifier}`;
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
     * Get an isometric Head of a Player, looking at right
     * @param identifier Mineraft UUID or Minecraft Nickname
     * @param helm True/False including Helm (Default: true)
     * @returns Image URL String
     */
    public isometricAvatar(identifier:string, helm:boolean = true):string {
        let url = `${this.url}/${helm?'headhelm':'head'}/${identifier}`;
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

export default new Mineskin();