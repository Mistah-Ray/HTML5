var css = document.querySelector("h3");
var color1 = document.querySelector(".color1");
var color2 = document.querySelector(".color2");
var body = document.getElementById("gradient");
var button = document.getElementById("random");

css.textContent = "linear-gradient(to right," + color1.value +", " + color2.value + ")";

function setGradient()
{
	body.style.background = "linear-gradient(to right," + color1.value +", " + color2.value + ")";
	css.textContent = body.style.background + ";";
}

color1.addEventListener("input", setGradient);

color2.addEventListener("input", setGradient);

button.addEventListener("click", setRandomGradient);


function setRandomGradient()
{
	color1 = '#'+(Math.random()*0xFFFFFF<<0).toString(16);
	color2 = '#'+(Math.random()*0xFFFFFF<<0).toString(16);

	body.style.background = "linear-gradient(to right," + color1 +", " + color2 + ")";
	css.textContent = body.style.background + ";";
}