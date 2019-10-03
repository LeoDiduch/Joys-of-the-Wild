// Generation of the random card in random page //
function randomCard() {
    const cardOne = document.getElementById('cardOne');
    const cardTwo = document.getElementById('cardTwo');
    const cardThree = document.getElementById('cardThree');
    const cardFour = document.getElementById('cardFour');
    const cardFive = document.getElementById('cardFive');

    cardOne.style.display = 'none';
    cardTwo.style.display = 'none';
    cardThree.style.display = 'none';
    cardFour.style.display = 'none';
    cardFive.style.display = 'none';

    cardList = [cardOne, cardTwo, cardThree, cardFour, cardFive];

    function getRandomInt(max) {
        return Math.floor(Math.random() * Math.floor(max));
    }

    cardList[getRandomInt(5)].style.display = 'block';
}

randomCard();