var array = ["Banana", "Apples", "Oranges", "Blueberries"];

console.log("Original: " + array);

array.shift();

console.log("No Bananna: " + array);

array.sort();

console.log("Sorted Array: " + array);

array.push("Kiwi");

console.log("Added Kiwi: " + array);

array.shift();

console.log("Removed Apple: " + array);

array.reverse();

console.log("Reverse Order Sort: " + array);

var array2 = ["Banana", ["Apples", ["Oranges"], "Blueberries"]];

console.log("Access Oranges: " + array2[1][1][0]);

