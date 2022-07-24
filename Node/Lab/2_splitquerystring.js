// include url module
var url = require('url');
var address =
  'https://www.google.com/search?q=node+js+tutorial&oq=node+js+tutorial&aqs=chrome..69i57j69i60.4266j0j1&sourceid=chrome&ie=UTF-8';
var q = url.parse(address, true);

console.log('Host : ' + q.host);
console.log('Path : ' + q.pathname);
console.log('Search Query : ' + q.search);
