const fs = require('fs');

// Read file
const file = fs.readFileSync(process.argv[2]);

// Convert the file into a string and split it by newline. Also subtract 1 for the purpose of this test
const str = file.toString().split('\n').length - 1;

// Display it
console.log(str);

