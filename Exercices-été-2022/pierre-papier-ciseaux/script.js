const getUserChoice = () => {
    let userInput = document.getElementById("choix").value;
    userInput = userInput.toLowerCase();
    if (userInput === 'pierre' || userInput === 'papier' || userInput === 'ciseaux') {
      return userInput;
    } else {
        return 'Erreur de saisie!';
    }
  }
  
  
  const getComputerChoice = () => {
    let randomNumber = Math.floor(Math.random() * 3);
    if (randomNumber === 0) {
      return 'pierre';
    } else if (randomNumber === 1) {
      return 'papier';
    } else if (randomNumber === 2) {
      return 'ciseaux';
    }
  }
  
  const determineWinner = (userChoice, computerChoice) => {
    if (userChoice === computerChoice) {
      return 'Le jeu est a égalité!'
    } else if (userChoice === 'pierre' && computerChoice === 'papier') {
      return 'L\'ordinateur a gagné!'
    } else if (userChoice === 'papier' && computerChoice === 'ciseaux') {
      return 'L\'ordinateur a gagné!'
    } else if (userChoice === 'ciseaux' && computerChoice === 'pierre') {
      return 'L\'ordinateur a gagné!';
    } else if (userChoice === 'Erreur de saisie!') {
        return 'Veuillez saisir une bonne valeur';
    } else {
      return 'Tu a gagné!';
    }
  }
  
  function playGame() {
    let userChoice = getUserChoice();
    let computerChoice = getComputerChoice();
    document.getElementById("userchoice").innerHTML=`Tu a choisis: ${userChoice}`;
    document.getElementById("computerchoice").innerHTML=`L'ordinateur a choisis: ${computerChoice}`;
    document.getElementById("result").innerHTML= determineWinner(userChoice, computerChoice);
  }
  
  