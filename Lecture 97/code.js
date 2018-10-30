var person = {
	username: "Sam",
	password: "secret",
};

var database = [person];

var newsFeed = [ 
	{username:"Bobby", timeline:"So tired from all that learning!"}, 
	{username:"Sally", timeline:"Javascript is sooooo cool!"}, 
	{username:"Mitch", timeline:"Javascript is preeetyy cool!"}
];

var userNamePromt = prompt("Whats Yours user name?");
var userPassPromt = prompt("Whats Yours user password?");

function signIn(user, pass)
{
	if (user === database[0].username && pass === database[0].password)
	{
		console.log(newsFeed);
	}
	else
	{
		alert("Sorry incorrect!");
	}
}
signIn(userNamePromt, userPassPromt);
