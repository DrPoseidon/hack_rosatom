document.querySelector('.enterprisesText').addEventListener('click', function () {
    document.querySelector('.enterprises').style.display = 'block';

    document.querySelector('.info').style.display = 'none';
    document.querySelector('.instructions').style.display = 'none';
    document.querySelector('.users').style.display = 'none';

    this.style.color = '#26d1e2';

    document.querySelector('.infoText').style.color = '#0b091e';
    document.querySelector('.instructionsText').style.color = '#0b091e';
    document.querySelector('.usersText').style.color = '#0b091e';

    document.querySelector('.addNew').style.display = 'block';
});

document.querySelector('.infoText').addEventListener('click', function () {
    document.querySelector('.info').style.display = 'block';

    document.querySelector('.enterprises').style.display = 'none';
    document.querySelector('.instructions').style.display = 'none';
    document.querySelector('.users').style.display = 'none';

    this.style.color = '#26d1e2';

    document.querySelector('.enterprisesText').style.color = '#0b091e';
    document.querySelector('.instructionsText').style.color = '#0b091e';
    document.querySelector('.usersText').style.color = '#0b091e';

    document.querySelector('.addNew').style.display = 'none';
});

document.querySelector('.instructionsText').addEventListener('click', function () {
    document.querySelector('.instructions').style.display = 'block';

    document.querySelector('.info').style.display = 'none';
    document.querySelector('.enterprises').style.display = 'none';
    document.querySelector('.users').style.display = 'none';

    this.style.color = '#26d1e2';

    document.querySelector('.infoText').style.color = '#0b091e';
    document.querySelector('.enterprisesText').style.color = '#0b091e';
    document.querySelector('.usersText').style.color = '#0b091e';

    document.querySelector('.addNew').style.display = 'none';
});

document.querySelector('.usersText').addEventListener('click', function () {
    document.querySelector('.users').style.display = 'block';

    document.querySelector('.info').style.display = 'none';
    document.querySelector('.instructions').style.display = 'none';
    document.querySelector('.enterprises').style.display = 'none';

    this.style.color = '#26d1e2';

    document.querySelector('.infoText').style.color = '#0b091e';
    document.querySelector('.instructionsText').style.color = '#0b091e';
    document.querySelector('.enterprisesText').style.color = '#0b091e';

    document.querySelector('.addNew').style.display = 'none';
});

// document.querySelector('.updateUsers').addEventListener('click', function(e) {
//    e.preventDefault();
//    document.querySelector('.fon').style.display = 'block';
//    document.querySelector('.editUser').style.display = 'flex';
// });
//
// document.querySelector('.closeTheWindow').addEventListener('click', function() {
//     document.querySelector('.fon').style.display = 'none';
//     document.querySelector('.editUser').style.display = 'none';
// });