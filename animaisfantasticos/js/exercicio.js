function Carro2(precoInicial, marca){
    this.taxa = 1.2;
    const precoFinal = precoInicial * this.taxa
    this.marca = marca;
    this.preco = precoFinal;
}

const mazda = new Carro2(2000, 'Mazda');