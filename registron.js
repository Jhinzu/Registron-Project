fetch("registron.json")
.then(res => res.json())
.then(data => 
{
const c1 = document.querySelector("#selectionC1");
const a1 = document.querySelector("#anneau1");
//tableaux valeurs
console.log(c1[1].value);
// console.log(a1);
console.log(data[0].value);
console.log(data[0].colorName);

console.log(data);
console.clear
const selectValeurs = () => 
{
    for (i=1;i<10;i++)
    {
        console.log("bonjours");
        if (c1[i].value == data[i].value)
        {
            console.log("bonjours");
            a1.style.add.backgroundColor = "green";
        }
    }
}

c1.addEventListener("click",selectValeurs);
});
