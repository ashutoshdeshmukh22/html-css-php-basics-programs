const fs = require('fs');

const content = 'Hello This is New Content';
fs.writeFile('./datafile.txt', content, (err) => {
  if (err) {
    console.log(err);
    return;
  }
  console.log('File Writen Success');
});
