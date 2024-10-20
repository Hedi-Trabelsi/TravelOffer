function addOffre()
{
    
    var title=document.body.querySelector('#title').value;
    var des=document.body.querySelector('#des').value;
    var dated=document.getElementById('dated');
    var dater=document.getElementById('dater');
    var price=document.getElementById('price');
    if(title.length<3)
    {
        alert("doit contenir au moins 3 caractères");
    }
    if(des.length<3)
    {
        alert("doit contenir au moins 3 caracteres");
    }
    var lettre=0;
    for(var i=0;i<des.length;i++)
    {
        if((des[i] >= 'a' && des[i] <= 'z') || (des[i] >= 'A' && des[i] <= 'Z'))
        {
            lettre++;
        }
        if(des[i]===" ")
        {lettre++;}
    }
    
    if(lettre!==des.length)
    {alert("destination doit contenir des lettres et espaces");}
    if(price.value<0)
    {
        alert("price doit etre positive!");
    }
    
}
/*document.addEventListener('DOMContentLoaded', function() {
    const button = document.querySelector('#button');
    button.addEventListener('click', addOffre);
});*/
document.addEventListener('DOMContentLoaded', function() {
const form=document.querySelector('#formu');
form.addEventListener('submit',addOffre);});