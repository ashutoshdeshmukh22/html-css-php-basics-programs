const dt = require('./customdatemodule.js');
console.log('Year is :' + dt.getYear());
console.log('Month is :' + dt.getMonth());
console.log('Day is :' + dt.getDay());
console.log('Date is :' + dt.getDate());
console.log(
  'Time is:' + dt.getHours() + ':' + dt.getMinutes() + ':' + dt.getSeconds()
);
