const fs = require('fs');
const getFile = (filename) => {
  return new Promise((resolve, reject) => {
    fs.readFile(filename, 'utf-8', (err, data) => {
      if (err) {
        reject(err);
        return;
      }
      resolve(data);
    });
  });
};

getFile('datafile.txt')
  .then((data) => console.log(data))
  .catch((err) => console.log(err));
