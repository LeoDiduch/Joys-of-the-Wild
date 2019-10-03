// Sorting of hot cards

function cardsSort() {

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


    const cardList = [
        {
            name: cardOne,
            value: 4
        },
        {
            name: cardTwo,
            value: 578
        },
        {
            name: cardThree,
            value: 5
        },
        {
            name: cardFour,
            value: 12
        },
        {
            name: cardFive,
            value: 55
        }
    ];


    const sortedCardList = cardList.sort((a, b) => (a.value < b.value) ? 1 : -1);


    sortedCardList.forEach(card => {
        return card.name.style.display = 'block';
    })


}

cardsSort();