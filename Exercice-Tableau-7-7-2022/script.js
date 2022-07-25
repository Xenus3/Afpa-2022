let nom = ['Salomé', 'Oceane', 'Karim', 'Jimmy', 'Benoit', 'Fréderic', 'Gregory', 'Camille', 'Antony', 'Cedric', 'Stéphane', 'Perrine', 'Théo', 'Othman', 'Halim', 'Zakaria'];



function checkName() {
    let verifNom = document.getElementById("searchBox");
    let findName = verifNom.value;

    for (i = 0; i < nom.length; i++) {
        if ( findName === nom[i] ) {
            alert(`${findName} est present dans nos bases de donneés.`);
            break;
        } 

        
   }    
}    

