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
console.log (c1.length, data.length);
const selectValeurs = () => 
{
        c1[1].addEventListener("click",() =>
        {
        if (c1[1].value == data[1].value)
        {
            console.log("bonjours");
            a1.style.backgroundColor = data[1].colorName;
        }})

        c1[2].addEventListener("click",() =>
        {
        if (c1[2].value == data[2].value)
        {
            console.log("bonjours");
            a1.style.backgroundColor = data[2].colorName;
        }})

        c1[3].addEventListener("click",() =>
        {
        if (c1[3].value == data[3].value)
        {
            console.log("bonjours");
            a1.style.backgroundColor = data[3].colorName;
        }})

        c1[4].addEventListener("click",() =>
        {
        if (c1[4].value == data[4].value)
        {
            console.log("bonjours");
            a1.style.backgroundColor = data[4].colorName;
        }})

        c1[5].addEventListener("click",() =>
        {
        if (c1[5].value == data[5].value)
        {
            console.log("bonjours");
            a1.style.backgroundColor = data[5].colorName;
        }})

        c1[6].addEventListener("click",() =>
        {
        if (c1[6].value == data[6].value)
        {
            console.log("bonjours");
            a1.style.backgroundColor = data[6].colorName;
        }})

        c1[7].addEventListener("click",() =>
        {
        if (c1[7].value == data[7].value)
        {
            console.log("bonjours");
            a1.style.backgroundColor = data[7].colorName;
        }})

        c1[8].addEventListener("click",() =>
        {
        if (c1[8].value == data[8].value)
        {
            console.log("bonjours");
            a1.style.backgroundColor = data[8].colorName;
        }})

        c1[9].addEventListener("click",() =>
        {
        if (c1[9].value == data[9].value)
        {
            console.log("bonjours");
            a1.style.backgroundColor = data[9].colorName;
        }})
        
        c1[10].addEventListener("click",() =>
        {
        if (c1[10].value == data[10].value)
        {
            console.log("bonjours");
            a1.style.backgroundColor = data[10].colorName;
        }})
}

c1.addEventListener("click",selectValeurs);
});
