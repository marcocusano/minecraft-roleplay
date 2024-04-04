export class StringManager {

    private string:string;
    constructor(string:string) { this.string = string; }

    toCurrency(minimize:boolean = true):string {
        const value = parseFloat(this.string);
        if (!minimize) { return parseFloat(this.string).toLocaleString('it-IT', { style: 'currency', currency: 'EUR' }); }
        let divisor = {
            value: 1,
            suffix: '€'
        };
        if (value >= 1000000000) {
            divisor.value = 1000000000;
            divisor.suffix = 'Mld';
        } else if (value >= 1000000) {
            divisor.value = 1000000;
            divisor.suffix = 'M';
        } else if (value >= 100000) {
            divisor.value = 100000;
            divisor.suffix = 'K';
        };
        const realValue = parseFloat((value / divisor.value).toFixed(2).replace('.', ','));
        return `${realValue}+ ${divisor.suffix} €`;
    }

    toDate() {

    }

}