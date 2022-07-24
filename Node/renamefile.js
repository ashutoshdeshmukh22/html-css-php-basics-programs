const fs = require('fs');
fs.rename('./datafile.txt', 'datafilesample.txt', (err) => {
  if (err) {
    console.log(err);
    return;
  }
  console.log('file renamed');
});
