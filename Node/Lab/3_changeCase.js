var st = 'Hello Ashutosh';
var ch;
var u,
  l = '';
for (var i = 0; i < st.length; i++) {
  ch = st.charAt(i);
  if (ch == ch.toUpperCase()) {
    u = ch.toLowerCase();
    l = l + u;
  } else {
    u = ch.toUpperCase();
    l = l + u;
  }
}
console.log('Final String is :' + l);
