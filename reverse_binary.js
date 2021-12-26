
//function to return the reversed binary number
function reverse(s){
  return s.split("").reverse().join("");
}

//A random integer number as input
let decimal = 13;

//conversion from decimal to binary
let binary = Number(decimal).toString(2);

//reversing the binary number
let r = reverse(binary);

//conversion from binary to decimal
let reversedDecimal = parseInt(r,2);

//output the results
console.log("Initial decimal number : ",decimal , " " , "binary = " , binary);
console.log("Reversed binary : " , r , " " , " decimal = " , reversedDecimal);