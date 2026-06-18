function lancerDes() {
    let des = [
        Math.floor(Math.random() * 6) + 1,
        Math.floor(Math.random() * 6) + 1,
        Math.floor(Math.random() * 6) + 1
    ];
    // Trier pour faciliter la comparaison
    return des.sort();
}

let des = lancerDes();
console.log("Dés : " + des);

// Vérification
if (des[0] === 1 && des[1] === 2 && des[2] === 4) {
    console.log("421 ! Gagné !");
} else {
    console.log("Perdu.");
}

