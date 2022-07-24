let done = true;
const isItDoneYet = new Promise((resolve, reject) => {
  if (done) {
    const workDone = 'Here is the thing i built.';
    resolve(workDone);
  } else {
    const why = 'Still working on something else.';
    reject(why);
  }
});

const checkIfItsDone = () => {
  isItDoneYet
    .then((ok) => {
      console.log('Insie Then : ' + ok);
    })
    .catch((err) => {
      console.log('Inside Catch : ' + err);
    });
};

checkIfItsDone();
