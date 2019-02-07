document.getElementById('sort-apple').addEventListener('click', sortApple);// hierdoor snapt js welke knop we aan moeten roepen
document.getElementById('sort-samsung').addEventListener('click', sortSamsung);

function showAll(url, outputData){
 // console.log(sortApple); //check of functie werkt
var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
        outputData(this);
}

}
xhr.open('GET', url, true);
xhr.send();

};

function showData(data){
    var div = document.getElementsByClassName('filtered-cards');// dit is de div waarbij hij de fnctie showall gaat uitpoepen.
    div[0].innerHTML = data.responseText;
    console.log(data.responseText);
}

showAll('../product-cards/cards.php', showData)// is om alles op het begin weer te geven


function sortApple(){
showAll('ajax-apple.php', showData)// hier gebruik je de showAll en vul je een andere link in. 
//
}
 function sortSamsung(){
     showAll('ajax-samsung.php', showData)
 }

