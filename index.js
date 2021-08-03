var selects = document.getElementById("selectLocation");
var options = ["Kigali", "Nairobi", "Nanyuki", "Rome", "Jail"];
console.log(selects);
for (var i = 0; i < options.length; i++) {
    var opt = options[i];
    var el = document.createElement("option");
    el.textContent = opt;
    el.value = opt;
    selects.appendChild(el);
    console.log(opt);
}